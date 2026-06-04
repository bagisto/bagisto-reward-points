<x-admin::layouts>
    <x-slot:title>
        @lang('rewards::app.admin.rewards.system.view.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="py-3 text-lg text-gray-800 dark:text-white font-bold">
            {{ $customer->name }} @lang('rewards::app.admin.rewards.system.view.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Back -->
            <a 
                href="{{ route('admin.reward.system.index') }}" 
                class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white"
            >
                @lang('admin::app.catalog.attributes.create.back-btn')
            </a>

            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.system.view', $customer->id) }}" />
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.system.index.before', ['customer' => $customer]) !!}

    <x-admin::datagrid src="{{ route('admin.reward.system.view', $customer->id) }}" />

    {!! view_render_event('bagisto.admin.reward-point.system.index.after', ['customer' => $customer]) !!}

</x-admin::layouts>