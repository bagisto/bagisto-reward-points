<?php

namespace Webkul\Rewards\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\Helpers\CustomerRegisterHelper;
use Webkul\Rewards\Models\RewardPoint;

class RewardByDateOfBirth extends Command
{
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
        protected CustomerRepository $customerRepository,
        protected CustomerRegisterHelper $customerRegisterHelper,
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $customerName = [];

        if (core()->getConfigData('reward.general.general.module-status')) {
            $customers = $this->customerRepository->get();

            $rewardPoint = $this->customerRegisterHelper->getCustomerDobRewardPoints() ?: 0;

            $expireDays = $this->customerRegisterHelper->getCustomerDobExpireDate();

            $current = Carbon::now();

            if (
                $customers
                && $rewardPoint
            ) {
                foreach ($customers as $customer) {
                    $checkRewardGivenOrNot = $this->customerRegisterHelper->getCustomerDobReward($customer);

                    if ($customer->date_of_birth) {
                        $currentDate = $current->format('d');

                        $currentMonth = $current->format('m');

                        $dobDate = Carbon::parse($customer->date_of_birth)->format('d');

                        $dobMonth = Carbon::parse($customer->date_of_birth)->format('m');

                        if (($currentDate.'-'.$currentMonth) === ($dobDate.'-'.$dobMonth)) {
                            array_push($customerName, $customer->name);

                            if (! $checkRewardGivenOrNot) {
                                $rewards = RewardPoint::create([
                                    'customer_id' => $customer->id,
                                    'reward_points' => $rewardPoint,
                                    'note' => 'The Point is given For customer Date of birth',
                                    'status' => 'approved',
                                    'exp_date' => $expireDays ? $current->addDays($expireDays)->format('Y-m-d') : null,
                                    'customer_dob' => 1,
                                ]);

                                Event::dispatch('reward.points.dob.after', [$rewards]);
                            }
                        }
                    }
                }
            }

            if (count($customerName)) {
                $getCustomerName = implode(', ', $customerName);

                Log::info('Today customer(s) '.$getCustomerName.' has a birthday, and reward points credited to their account.');

                $this->info('Today customer(s) '.$getCustomerName.' has a birthday, and reward points credited to their account.');
            } else {
                Log::info('Today no customers had a birthday');

                $this->info('Today no customers had a birthday');
            }
        }
    }
}
