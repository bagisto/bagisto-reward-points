<x-admin::layouts>
    <x-slot:title>
        @lang('rewards::app.admin.rewards.attributes.index.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="text-xl text-gray-800 dark:text-white font-bold">
            @lang('rewards::app.admin.rewards.attributes.index.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.cart.index') }}" />

            <div class="flex gap-x-2.5 items-center">
                <button
                    type="button"
                    class="primary-button"
                >
                    <a 
                        href="{{ route('admin.reward.attribute.create') }}" 
                        class="btn btn-lg btn-primary"
                    >
                        @lang('rewards::app.admin.rewards.attributes.index.create-btn')
                    </a>
                </button>
            </div>
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.attribute.index.before') !!}
    
    <x-admin::datagrid src="{{ route('admin.reward.attribute.index') }}" />

    {!! view_render_event('bagisto.admin.reward-point.attribute.index.after') !!}

</x-admin::layouts>