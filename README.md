### 1. Introduction:

Bagisto Reward System allows the admin to create reward  at the back-end. 
It packs in lots of demanding features that allows your business to scale in no time:

* Admin can add Attributes rewards.
* Admin can add Category rewards.
* Admin can add Product rewards.
* Admin can add Cart rewards.
* Reward are calculated based on Attribute/Category/Product/Cart.
* Admin can view all the users and all the reward based on order.

### 2. Requirements:

* **Bagisto**: v2.4.x

### 3. Installation:

* Unzip the respective extension zip and then merge "packages" folder into project root directory.

* Goto bootstrap/providers.php file and add following line under providers

~~~
use Webkul\Rewards\Providers\RewardsServiceProvider;
~~~

Add inside return [ ];

~~~
RewardsServiceProvider::class,
~~~

* Goto composer.json file and add following line under 'psr-4'

~~~
"Webkul\\Rewards\\": "packages/Webkul/Rewards/src"
~~~


* Run the install command — it will run migrations, publish public assets, and clear caches:

~~~
composer dump-autoload

php artisan rewards:install
~~~

~~~
php artisan optimize:clear
~~~

> That's it, now just execute the project on your specified domain.

