
<x-shop::layouts.account>
    <!-- Page Title -->
    <x-slot:title>
        @lang('rewards::app.shop.customer.account.rewards.index.your-reward-points')
    </x-slot>

    <div class="max-md:hidden">
        <x-shop::layouts.account.navigation />
    </div>

    <div class="w-full">
        <h2 class="text-lg font-medium">
            @lang('rewards::app.shop.customer.account.rewards.index.your-reward-points') {{ $totalRewardPoints }}
        </h2>

        <x-shop::datagrid :src="route('customer.rewards.index')"></x-shop::datagrid>
    </div>

</x-shop::layouts.account>
