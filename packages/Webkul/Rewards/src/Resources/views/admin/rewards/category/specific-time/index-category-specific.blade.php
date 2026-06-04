<x-admin::layouts>

    <x-slot:title>
        @lang('rewards::app.admin.rewards.category-specific.index.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="py-3 text-xl text-gray-800 dark:text-white font-bold">
            @lang('rewards::app.admin.rewards.category-specific.index.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.category.category_specific_time') }}" />

            <div class="flex gap-x-2.5 items-center">
                <button
                    type="button"
                    class="primary-button"
                >
                    <a 
                        href="{{ route('admin.reward.category.create_category_specific_reward') }}" 
                        class="btn-primary"
                    >
                        @lang('rewards::app.admin.rewards.category-specific.index.add-btn')
                    </a>
                </button>
            </div>
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.category-specific-time.index.before') !!}

    <x-admin::datagrid src="{{ route('admin.reward.category.category_specific_time') }}" />
    
    {!! view_render_event('bagisto.admin.reward-point.category-specific-time.index.before') !!}

</x-admin::layouts>