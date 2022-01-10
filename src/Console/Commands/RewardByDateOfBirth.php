<?php

namespace Webkul\Rewards\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Webkul\Rewards\Helpers\ModuleHelper as RewardModuleHelper;
use Webkul\Rewards\Helpers\CustomerRegisterHelper;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\Models\RewardPoint;
use Event;

class RewardByDateOfBirth extends Command
{

    /**
     * CustomerRepository object
     * @var $customerRepository
     */
    protected $customerRepository = '';

    /**
     * CustomerRegisterHelper object
     * @var $customerRegisterHelper
     */
    protected $customerRegisterHelper = '';

    /**
     * RewardModuleHelper object
     * @var $rewardModuleHelper
     */
    protected $rewardModuleHelper = '';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dob:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give Rewards To Customer based on Date-Of-Birth';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        CustomerRepository $customerRepository,
        CustomerRegisterHelper $customerRegisterHelper,
        RewardModuleHelper $rewardModuleHelper
    ) {

        $this->customerRepository = $customerRepository;
        $this->customerRegisterHelper = $customerRegisterHelper;
        $this->rewardModuleHelper = $rewardModuleHelper;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $customer_name = [];

        if ($this->rewardModuleHelper->checkModuleStatus()) {

            $customers = $this->customerRepository->latest()->get();

            $reward_point = $this->customerRegisterHelper->getCustomerDobRewardPoints();

            $expire_days = $this->customerRegisterHelper->getCustomerDobExpireDate();

            


            $current = \Carbon\Carbon::now();


            $reward_point = $reward_point ? $reward_point : 0;


            if ($customers && $reward_point) {

                foreach ($customers as $customer) {


                    $checkRewardGivenOrNot = $this->customerRegisterHelper->getCustomerDobReward($customer);

                    if ($customer->date_of_birth && ! $checkRewardGivenOrNot) {

                        $todaydate = Carbon::now()->format('d');
                        
                        $todayMonth = Carbon::now()->format('m');

                        $customerDate = Carbon::parse($customer->date_of_birth)->format('d');

                        $customerMonth = Carbon::parse($customer->date_of_birth)->format('m');

                        if ($todaydate . '-' . $todayMonth == $customerDate . '-' . $customerMonth) {

                            array_push($customer_name, $customer->name);

                            $rewards =   RewardPoint::create([
                                'customer_id' => $customer->id,
                                'reward_points' =>  $reward_point,
                                'note' => "The Point is given For customer Date of birth",
                                'status' => 'approved',
                                'exp_date' => $expire_days ? $current->addDays($expire_days) : null,
                                'customer_dob' => 1    
                            ]);

                            Event::dispatch('reward.points.dob.after', [$rewards]);
                        }
                    }
                }
            }

            if (count($customer_name)) {
                $cust_name = implode(',', $customer_name);
                Log::info('Today ' . $cust_name . ' has a birthday');
                $this->info('Today ' . $cust_name . ' has a birthday');
            } else {
                Log::info('Today no customers had a birthday');
                $this->info('Today no customers had a birthday');
            }
        }
    }
}
