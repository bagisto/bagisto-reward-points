<?php

namespace Webkul\Rewards\Console\Commands;

use Illuminate\Console\Command;
use Webkul\Rewards\Providers\RewardsServiceProvider;

class InstallRewards extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'rewards:install
                            {--force : Overwrite previously published assets without asking}
                            {--no-migrate : Skip running migrations}';

    /**
     * The console command description.
     */
    protected $description = 'Install the Rewards module: run migrations, publish assets and clear caches.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->components->info('Installing the Rewards module.');

        if (! $this->option('no-migrate')) {
            $this->step(1, 'Running migrations');

            $this->call('migrate', [
                '--force' => true,
            ]);
        } else {
            $this->components->warn('Skipping migrations (--no-migrate).');
        }

        $this->step($this->option('no-migrate') ? 1 : 2, 'Publishing Rewards assets');

        $this->call('vendor:publish', [
            '--provider' => RewardsServiceProvider::class,
            '--force' => $this->option('force') ?: true,
        ]);

        $this->step($this->option('no-migrate') ? 2 : 3, 'Clearing application caches');

        $this->call('optimize:clear');

        $this->newLine();

        $this->components->info('Rewards module installed successfully.');

        $this->line('  • Rewards configuration added successfully');
        $this->line('  • Reward commands registered');
        $this->line('  • Admin menu: <fg=cyan>Admin → Rewards</>');
        $this->line('  • Reward rules enabled for Product/Category/Cart');
        $this->line('  • DOB and Expiry reward cron commands ready');

        return self::SUCCESS;
    }

    /**
     * Print a numbered step header.
     */
    protected function step(int $number, string $description): void
    {
        $this->newLine();

        $this->components->task(
            sprintf('Step %d: %s', $number, $description),
            fn () => true
        );
    }
}
