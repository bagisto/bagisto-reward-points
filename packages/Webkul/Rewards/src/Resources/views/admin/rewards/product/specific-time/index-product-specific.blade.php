<x-admin::layouts>
    <x-slot:title>
        @lang('rewards::app.admin.rewards.products-specific.index.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="py-3 text-xl text-gray-800 dark:text-white font-bold">
            @lang('rewards::app.admin.rewards.products-specific.index.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.product.product-specific-time') }}" />

            <div class="flex gap-x-2.5 items-center">
                <button
                    type="button"
                    class="primary-button"
                >
                    <a 
                        href="{{ route('admin.reward.product.create_product_specific_reward') }}" 
                        class="btn-primary"
                    >
                        @lang('rewards::app.admin.rewards.products-specific.index.create.create-btn')
                    </a>
                </button>
            </div>
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.product-specific-time.index.before') !!}
    
    <x-admin::datagrid src="{{ route('admin.reward.product.product-specific-time') }}" />
    
    {!! view_render_event('bagisto.admin.reward-point.product-specific-time.index.after') !!}

</x-admin::layouts>