<?php

namespace Webkul\Rewards\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Webkul\Rewards\Models\RewardPoint;

class CheckRewardExpire extends Command
{
    /**
     * @var string
     */
    public const EXPIRE = 'expire';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reward:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Reward Expire';

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
        $recordsWithExpDate = 0;

        if (core()->getConfigData('reward.general.general.module-status')) {
            $rewardPoints = RewardPoint::whereNotNull('exp_date')->get();

            foreach ($rewardPoints as $rewardPoint) {
                if (
                    $rewardPoint->status != self::EXPIRE
                    && ! Carbon::parse($rewardPoint->exp_date)->gte(Carbon::now())
                ) {
                    $rewardPoint->status = self::EXPIRE;
                    $rewardPoint->save();

                    $recordsWithExpDate += 1;

                    Event::dispatch('reward.points.update.after', [$rewardPoint]);
                }
            }
        }

        Log::info('Checked for the expired Reward Points, total '.$recordsWithExpDate.' entries marked as expired.');

        $this->info('Checked for the expired Reward Points, total '.$recordsWithExpDate.' entries marked as expired.');
    }
}
