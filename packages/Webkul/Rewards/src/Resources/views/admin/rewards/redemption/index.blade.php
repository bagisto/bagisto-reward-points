<x-admin::layouts>

    <x-slot:title>
        @lang('rewards::app.admin.rewards.redemption.index.title')
    </x-slot:title>

    <x-admin::form action="{{ route('admin.reward.redemption.update') }}">
        <div class="flex items-center justify-between">
            <p class="text-xl font-bold text-gray-800 dark:text-white">
                @lang('rewards::app.admin.rewards.redemption.index.title')
            </p>

            <!-- Submit button -->
            <button
                type="submit"
                class="primary-button"
            >
                @lang('rewards::app.admin.rewards.redemption.index.save-btn')
            </button>
        </div>

        <div class="relative p-4 my-4 bg-white dark:bg-gray-900 rounded box-shadow">
            <div class="border-b px-4 py-2.5 dark:border-gray-800">
                <div class="mb-2 py-2.5">
                    <p class="block font-medium leading-6 text-gray-800 dark:text-white">
                        @lang('rewards::app.admin.rewards.redemption.index.redemption-cart')
                    </p>
                    <!-- Checkbox -->
                    <x-admin::form.control-group class="!mb-0 flex gap-2.5 p-2">
                        <x-admin::form.control-group.control
                            type="checkbox"
                            name="redemp_over_subtotal"
                            id="redemp_over_subtotal"
                            for="redemp_over_subtotal"
                            value="1"
                            :checked="(bool)$data && $data->redemp_over_subtotal"
                        >
                        </x-admin::form.control-group.control>

                        <x-admin::form.control-group.label for="redemp_over_subtotal">
                            @lang('rewards::app.admin.rewards.redemption.index.redemption-cart-label')
                        </x-admin::form.control-group.label>
                    </x-admin::form.control-group>
                </div>

                <p class="block font-medium leading-6 text-gray-800 dark:text-white">
                    @lang('rewards::app.admin.rewards.redemption.index.conversion-rate')
                </p>

                <div class="flex gap-4 max-sm:flex-wrap">
                    <!-- Points -->
                    <x-admin::form.control-group class="w-[20%]">
                        <x-admin::form.control-group.control
                            type="number"
                            name="points"
                            ::rules="{numeric: true, min_value: 0}"
                            value="{{ $data && $data->points ? $data->points : '' }}"
                            :label="trans('rewards::app.admin.rewards.redemption.index.points')"
                        />
                        
                        <x-admin::form.control-group.error control-name="points"/>
                    </x-admin::form.control-group>
                    
                    <span class="mt-1 dark:text-white">
                        @lang('rewards::app.admin.rewards.redemption.index.points') = {{ core()->currencySymbol(core()->getCurrentCurrencyCode()) }}
                    </span>
                    
                    <!-- Conversion Rate -->
                    <x-admin::form.control-group class="w-[20%]">
                        <x-admin::form.control-group.control
                            type="text"
                            name="conversion_rate"
                            ::rules="{decimal: true, min_value: 0}"
                            value="{{ $data && $data->conversion_rate ? $data->conversion_rate : ''}}"
                            :label="trans('rewards::app.admin.rewards.redemption.index.conversion')"
                        />

                        <x-admin::form.control-group.error control-name="conversion_rate"/>
                    </x-admin::form.control-group>
                </div>

                <div class="mb-2 py-2.5">
                    <p class="block font-medium leading-6 text-gray-800 dark:text-white">
                        @lang('rewards::app.admin.rewards.redemption.index.enable-apply-points')
                    </p>

                    <!-- Checkbox -->
                    <x-admin::form.control-group class="!mb-0 flex gap-2.5 p-2">
                        <x-admin::form.control-group.control
                            type="checkbox"
                            name="apply_points_checkout"
                            id="apply_points_checkout"
                            for="apply_points_checkout"
                            value="1"
                            :checked="(bool)$data && $data->apply_points_checkout"
                        >
                        </x-admin::form.control-group.control>

                        <x-admin::form.control-group.label for="apply_points_checkout">
                            @lang('rewards::app.admin.rewards.redemption.index.enable-apply-points-label')
                        </x-admin::form.control-group.label>
                    </x-admin::form.control-group>
                </div>
            </div>
        </div>
    </x-admin::form>
</x-admin::layouts>