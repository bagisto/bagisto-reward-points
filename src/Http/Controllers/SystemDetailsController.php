<?php

namespace Webkul\Rewards\Http\Controllers;


use Webkul\Product\Http\Controllers\Controller;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\Repositories\RewardPointRepository;

class SystemDetailsController  extends Controller
{
    /**
     * CustomerRepository object
     *
     * @var object
     */
    protected $customerRepository;

     /**
     * RewardPointRepository object
     *
     * @var object
     */
    protected $rewardPointRepository;

    /**
     * Create a new datagrid instance.
     * @param  Webkul\Customer\Repositories\CustomerRepository $customerRepository
     * @param  Webkul\Rewards\Repositories\RewardPointRepository $rewardPointRepository
     * @return void
     */
    public function __construct(CustomerRepository $customerRepository,RewardPointRepository $rewardPointRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->rewardPointRepository = $rewardPointRepository;

        $this->_config = request('_config');
    }
    /* Show the form for creating a new resource.
    *
    * @return \Illuminate\View\View
    */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function view($id)
    {
        $customer = $this->customerRepository->find(request('id'));

        return view($this->_config['view'], compact('customer'));
    }


    public function setRewardsOnCustomerBirthday(){
       return $this->rewardPointRepository->setRewardsOnCustomerBirthday();
    }
}
