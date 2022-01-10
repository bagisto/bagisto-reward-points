<?php
namespace Webkul\Rewards\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Webkul\Rewards\Helpers\ModuleHelper as RewardModuleHelper;
use Webkul\Rewards\Models\RewardPoint;
use Event;
class CheckRewardExpire extends Command
{

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
    public function __construct(
        RewardModuleHelper $rewardModuleHelper) 
    {
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
        if ($this->rewardModuleHelper->checkModuleStatus()) {

            $rewardPoints = RewardPoint::all();

            foreach ($rewardPoints as $rewardpoint) {
              
                if ( $rewardpoint->exp_date && !Carbon::parse($rewardpoint->exp_date)->gte(Carbon::now())) {
                    $rewardpoint->status = 'expire';
                    $rewardpoint->save();

                    Event::dispatch('reward.points.update.after', [$rewardpoint]);
                }
            }
        }

        Log::info('Checked Reward Points');
        $this->info('Checked Reward Points');
    }
}
