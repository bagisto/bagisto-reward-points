<x-admin::layouts>

    <x-slot:title>
        @lang('rewards::app.admin.rewards.system.index.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="text-xl text-gray-800 dark:text-white font-bold">
            @lang('rewards::app.admin.rewards.system.index.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.system.index') }}" />
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.system.index.before') !!}
    
    <x-admin::datagrid src="{{ route('admin.reward.system.index') }}" />

    {!! view_render_event('bagisto.admin.reward-point.system.index.after') !!}

</x-admin::layouts>