# Introduction

Bagisto Reward System allows the admin to create reward  at the back-end. 
It packs in lots of demanding features that allows your business to scale in no time:

- Admin can add Attributes rewards.
- Admin can add Category rewards.
- Admin can add Product rewards.
- Admin can add Cart rewards.
- Reward are calculated based on Attribute/Category/Product/Cart.
- Admin can view all the users and all the reward based on order.


## Requirements:

- **Bagisto**: v1.3.2.

## Installation :
- Run the following command
```
composer require bagisto/bagisto-reward-points
```

- Goto config/concord.php file and add following line under 'modules'
```php
\Webkul\Rewards\Providers\ModuleServiceProvider::class
```

- Run these commands below to complete the setup
```
composer dump-autoload
```

```
php artisan migrate
php artisan route:cache
php artisan config:cache
```
```
php artisan vendor:publish --force
```
-> Press the number before RewardsServiceProvider and then press enter to publish all assets and configurations.

## Installation without composer:

- Unzip the respective extension zip and then merge "packages" folders into project root directory.
- Goto config/app.php file and add following line under 'providers'

```
Webkul\Rewards\Providers\RewardsServiceProvider::class
```

- Goto composer.json file and add following line under 'psr-4'

```
"Webkul\\Rewards\\": "packages/Webkul/Rewards/src"
```

- Run these commands below to complete the setup

```
composer dump-autoload
```

```
php artisan migrate
```

```
php artisan route:cache
```

```
php artisan vendor:publish --force

-> Press the number before RewardsServiceProvider and then press enter to publish all assets and configurations.
```

> now execute the project on you

## Commands For DOB and Expire Check:

- For Date of birth Reward And Check the reward is expired or not For Customer 

- Command 

- php artisan  dob:cron (for Date of birth )
- php artisan  reward:expire (for Check the reward is expired or not)


- Go to  app/Console/Kernel.php And Replace the below code

```
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \Webkul\Rewards\Console\Commands\CheckRewardExpire::class,
        \Webkul\Rewards\Console\Commands\RewardByDateOfBirth::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('booking:cron')->dailyAt('3:00');
        $schedule->command('dob:cron')->daily();
        $schedule->command('reward:expire')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        $this->load(__DIR__.'/../../packages/Webkul/Core/src/Console/Commands');
        $this->load(__DIR__.'/../../packages/Webkul/Rewards/src/Console/Commands');

        require base_path('routes/console.php');
    }
}
```
