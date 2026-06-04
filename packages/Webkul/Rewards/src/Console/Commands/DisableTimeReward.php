<?php

namespace Webkul\Rewards\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Webkul\Rewards\Models\CartReward;
use Webkul\Rewards\Models\CategorySpecificTimeReward;
use Webkul\Rewards\Models\ProductSpecificTimeReward;

class DisableTimeReward extends Command
{
    /**
     * @var int
     */
    public const INACTIVE = 0;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'time-reward:disable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disable Time Reward';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $recordsRewardPointForProducts = 0;

        $recordsRewardPointForCategory = 0;

        $recordsRewardPointForCart = 0;

        $now = Carbon::now()->format('Y-m-d H:i:s');

        if (core()->getConfigData('reward.general.general.module-status')) {
            // Disable the status for the rewards on product for specific time
            $rewardPointForProducts = ProductSpecificTimeReward::where('end_time', '<', $now)->get();

            foreach ($rewardPointForProducts as $rewardPointForProduct) {
                if ($rewardPointForProduct->status != self::INACTIVE) {

                    $rewardPointForProduct->status = self::INACTIVE;
                    $rewardPointForProduct->save();

                    $recordsRewardPointForProducts += 1;

                    Event::dispatch('reward.points.update.after', [$rewardPointForProduct]);
                }
            }

            Log::info('Checked for the expired Reward on Product For Specific Time, total '.$recordsRewardPointForProducts.' entries marked as inactive.');

            // Disable the status for the rewards on category for specific time
            $rewardPointForCategories = CategorySpecificTimeReward::where('end_time', '<', $now)->get();

            foreach ($rewardPointForCategories as $rewardPointForCategory) {
                if ($rewardPointForCategory->status != self::INACTIVE) {

                    $rewardPointForCategory->status = self::INACTIVE;
                    $rewardPointForCategory->save();

                    $recordsRewardPointForCategory += 1;

                    Event::dispatch('reward.points.update.after', [$rewardPointForCategory]);
                }
            }

            Log::info('Checked for the expired Reward on Category For Specific Time, total '.$recordsRewardPointForCategory.' entries marked as inactive.');

            // Disable the status for the rewards on cart
            $rewardPointForCarts = CartReward::where('end_date', '<', $now)->get();

            foreach ($rewardPointForCarts as $rewardPointForCart) {
                if ($rewardPointForCart->status != self::INACTIVE) {

                    $rewardPointForCart->status = self::INACTIVE;
                    $rewardPointForCart->save();

                    $recordsRewardPointForCart += 1;

                    Event::dispatch('reward.points.update.after', [$rewardPointForCart]);
                }
            }

            Log::info('Checked for the expired Reward on Cart, total '.$recordsRewardPointForCart.' entries marked as inactive.');
        }

        $this->info('Checked for the disable Reward Points, total '.$recordsRewardPointForProducts.' entries marked as disable for Reward on Product For Specific Time, '.$recordsRewardPointForCategory.' entries marked as disable for Reward on Category For Specific Time and '.$recordsRewardPointForCart.' entries marked as disable for Reward on Cart.');
    }
}
