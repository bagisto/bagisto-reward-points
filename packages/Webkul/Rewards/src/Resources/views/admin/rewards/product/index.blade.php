<x-admin::layouts>

    <x-slot:title>
        @lang('rewards::app.admin.rewards.products.index.title')
    </x-slot:title>

    <div class="flex justify-between items-center">
        <p class="py-3 text-xl text-gray-800 dark:text-white font-bold">
            @lang('rewards::app.admin.rewards.products.index.title')
        </p>

        <div class="flex gap-x-2.5 items-center">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.reward.product.index') }}" />

            <div class="flex gap-x-2.5 items-center">
                <button
                    type="button"
                    class="primary-button"
                >
                    <a 
                        href="{{ route('admin.reward.product.create-product-reward') }}" 
                        class="btn-primary"
                    >
                        @lang('rewards::app.admin.rewards.products.index.add-btn')
                    </a>
                </button>
            </div>
        </div>
    </div>

    {!! view_render_event('bagisto.admin.reward-point.product.index.before') !!}

    <x-admin::datagrid src="{{ route('admin.reward.product.index') }}" />

    {!! view_render_event('bagisto.admin.reward-point.product.index.after') !!}

</x-admin::layouts>