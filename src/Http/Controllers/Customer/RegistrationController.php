<?php

namespace Webkul\Rewards\Http\Controllers\Customer;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Webkul\Customer\Mail\RegistrationEmail;
use Webkul\Customer\Mail\VerificationEmail;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Customer\Repositories\CustomerGroupRepository;
use Webkul\Rewards\Repositories\RewardConfigRepository;
use Webkul\Rewards\Repositories\RewardPointRepository;
use Webkul\Rewards\Helpers\ModuleHelper;
use Webkul\Customer\Http\Controllers\RegistrationController as baseController; 

use Cookie;

class RegistrationController extends baseController
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;


    /**
     * RewardConfigRepository object
     *
     * @var Webkul\Rewards\Helpers\ModuleHelper
     */
    protected $rewardModuleHelper;

    /**
     * RewardConfigRepository object
     *
     * @var \Webkul\Customer\Repositories\RewardConfigRepository
     */
    protected $rewardConfigRepository;

    /**
     * RewardPointRepository object
     *
     * @var \Webkul\Customer\Repositories\RewardPointRepository
     */
    protected $rewardPointRepository;

    /**
     * CustomerRepository object
     *
     * @var \Webkul\Customer\Repositories\CustomerRepository
     */
    protected $customerRepository;

    /**
     * CustomerGroupRepository object
     *
     * @var \Webkul\Customer\Repositories\CustomerGroupRepository
     */
    protected $customerGroupRepository;

    /**
     * Create a new Repository instance.
     * @param \Webkul\Rewards\Repositories\RewardConfigRepository $rewardConfigRepository
     * @param \Webkul\Rewards\Repositories\RewardPointRepository $rewardPointRepository
     * @param  \Webkul\Customer\Repositories\CustomerRepository  $customer
     * @param  \Webkul\Customer\Repositories\CustomerGroupRepository  $customerGroupRepository
     * @param  Webkul\Rewards\Helpers\ModuleHelper  $moduleHelper
     *
     * @return void
     */
    public function __construct(
        CustomerRepository $customerRepository,
        CustomerGroupRepository $customerGroupRepository,
        RewardConfigRepository $rewardConfigRepository,
        RewardPointRepository $rewardPointRepository,
        ModuleHelper $rewardModuleHelper
    ) {
        $this->_config = request('_config');

        $this->customerRepository = $customerRepository;
        $this->rewardConfigRepository = $rewardConfigRepository;
        $this->customerGroupRepository = $customerGroupRepository;
        $this->rewardPointRepository = $rewardPointRepository;
        $this->rewardModuleHelper  = $rewardModuleHelper;
    }

    /**
     * Opens up the user's sign up form.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $register_points = intVal($this->rewardConfigRepository->findByCode('customer_register'));
       
        return view($this->_config['view'], compact('register_points'));
    }

    /**
     * Method to store user's sign up form data to DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->validate(request(), [
            'first_name' => 'string|required',
            'last_name'  => 'string|required',
            'email'      => 'email|required|unique:customers,email',
            'password'   => 'confirmed|min:6|required',
        ]);

        $data = request()->input();

        $data['password'] = bcrypt($data['password']);
        $data['api_token'] = Str::random(80);


        if (core()->getConfigData('customer.settings.email.verification')) {
            $data['is_verified'] = 0;
        } else {
            $data['is_verified'] = 1;
        }

        $data['customer_group_id'] = $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id;

        $verificationData['email'] = $data['email'];
        $verificationData['token'] = md5(uniqid(rand(), true));
        $data['token'] = $verificationData['token'];

        Event::dispatch('customer.registration.before');

        $customer = $this->customerRepository->create($data);


        if ($this->rewardModuleHelper->checkModuleStatus()) {
            $this->rewardPointRepository->setRewardPointOnRegister($customer);
        }

        Event::dispatch('customer.registration.after', $customer);

        if ($customer) {
            if (core()->getConfigData('customer.settings.email.verification')) {
                try {
                    $configKey = 'emails.general.notifications.emails.general.notifications.verification';
                    if (core()->getConfigData($configKey)) {
                        Mail::queue(new VerificationEmail($verificationData));
                    }

                    session()->flash('success', trans('shop::app.customer.signup-form.success-verify'));
                } catch (\Exception $e) {
                    report($e);
                    session()->flash('info', trans('shop::app.customer.signup-form.success-verify-email-unsent'));
                }
            } else {
                try {
                    $configKey = 'emails.general.notifications.emails.general.notifications.registration';
                    if (core()->getConfigData($configKey)) {
                        Mail::queue(new RegistrationEmail(request()->all()));
                    }

                    session()->flash('success', trans('shop::app.customer.signup-form.success-verify')); //customer registered successfully
                } catch (\Exception $e) {
                    report($e);
                    session()->flash('info', trans('shop::app.customer.signup-form.success-verify-email-unsent'));
                }

                session()->flash('success', trans('shop::app.customer.signup-form.success'));
            }

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('error', trans('shop::app.customer.signup-form.failed'));

            return redirect()->back();
        }
    }
}
