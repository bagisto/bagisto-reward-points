<x-admin::layouts>
    <x-slot:title>
        @lang('rewards::app.admin.rewards.category.index.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="py-3 text-xl text-gray-800 dark:text-white font-bold">
            @lang('rewards::app.admin.rewards.category.index.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.category.index') }}" />

            <div class="flex gap-x-2.5 items-center">
                <button
                    type="button"
                    class="primary-button"
                >
                    <a 
                        href="{{ route('admin.reward.category.create_category_reward') }}" 
                        class="btn btn-lg btn-primary"
                    >
                        @lang('rewards::app.admin.rewards.category.index.add-btn')
                    </a>
                </button>
            </div>
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.category.index.before') !!}

    <x-admin::datagrid src="{{ route('admin.reward.category.index') }}" />

    {!! view_render_event('bagisto.admin.reward-point.category.index.after') !!}

</x-admin::layouts>