<x-admin::layouts>
    <!-- Title -->
    <x-slot:title>
        @lang('rewards::app.admin.rewards.cart.create.title')
    </x-slot:title>

    <x-admin::form action="{{ route('admin.reward.cart.store') }}">
        <div class="flex items-center justify-between">
            <p class="py-3 text-lg font-bold text-gray-800 dark:text-white">
                @lang('rewards::app.admin.rewards.cart.create.title')
            </p>

            <div class="flex gap-x-2.5 items-center">
                <!-- Back -->
                <a 
                    href="{{ route('admin.reward.cart.index')}}" 
                    class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white"
                >
                    @lang('admin::app.catalog.attributes.create.back-btn')
                </a>
    
                <div class="flex gap-x-2.5 items-center">
                    <!-- Submit button -->
                    <button
                        type="submit"
                        class="primary-button"
                    >
                        @lang('rewards::app.admin.rewards.cart.create.save-btn')
                    </button>
                </div>
            </div>
        </div>

        <div class="border-b px-4 py-2.5 dark:border-gray-800">
            <!-- Reward Point -->
            <x-admin::form.control-group class="mb-2.5">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.cart.create.enter-reward-points')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="text"
                    name="reward_points"
                    value="{{ old('reward_points') }}"
                    id="reward_points"
                    rules="required|numeric"
                    :label="trans('rewards::app.admin.rewards.cart.create.enter-reward-points')"
                    :placeholder="trans('rewards::app.admin.rewards.products.index.create.enter-reward-points')"
                >
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="reward_points"/>
            </x-admin::form.control-group>

            <!-- Amount from -->
            <x-admin::form.control-group class="mb-2.5">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.cart.create.amount-from')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="text"
                    name="amount_from"
                    value="{{ old('amount_from') }}"
                    id="amount_from"
                    rules="required|numeric"
                    :label="trans('rewards::app.admin.rewards.cart.create.amount-from')"
                    :placeholder="trans('rewards::app.admin.rewards.cart.create.amount-from')"
                >
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="amount_from"/>
            </x-admin::form.control-group>

            <!-- Amount to -->
            <x-admin::form.control-group class="mb-2.5">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.cart.create.amount-to')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="text"
                    name="amount_to"
                    value="{{ old('amount_to') }}"
                    id="amount_to"
                    rules="required|numeric"
                    :label="trans('rewards::app.admin.rewards.cart.create.amount-to')"
                    :placeholder="trans('rewards::app.admin.rewards.cart.create.amount-to')"
                >
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="amount_to"/>
            </x-admin::form.control-group>

            <div class="flex gap-4 max-sm:flex-wrap">
                <!-- Start date -->
                <x-admin::form.control-group class="w-full">
                    <x-admin::form.control-group.label class="required">
                        @lang('rewards::app.admin.rewards.category.create.start-date')
                    </x-admin::form.control-group.label>

                    <x-admin::form.control-group.control
                        type="datetime"
                        name="start_date"
                        value="{{ old('start_date') }}"
                        rules="required"
                        :label="trans('rewards::app.admin.rewards.cart.create.start-date')"
                        :placeholder="trans('rewards::app.admin.rewards.cart.create.start-date')"
                    />
                    
                    <x-admin::form.control-group.error control-name="start_date"/>
                </x-admin::form.control-group>

                <!-- End date -->
                <x-admin::form.control-group class="w-full">
                    <x-admin::form.control-group.label class="required">
                        @lang('rewards::app.admin.rewards.category.create.end-date')
                    </x-admin::form.control-group.label>

                    <x-admin::form.control-group.control
                        type="datetime"
                        name="end_date"
                        value="{{ old('end_date') }}"
                        rules="required"
                        :label="trans('rewards::app.admin.rewards.cart.create.end-date')"
                        :placeholder="trans('rewards::app.admin.rewards.cart.create.end-date')"
                    />

                    <x-admin::form.control-group.error control-name="end_date"/>
                </x-admin::form.control-group>
            </div>

            <!-- Status -->
            <x-admin::form.control-group class="w-full">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.category.create.status')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="select"
                    name="status"
                    value="{{ old('status') }}"
                    id="status"
                    rules="required"
                    :label="trans('rewards::app.admin.rewards.category.create.select-status')"
                >
                    <option value="">
                        @lang('rewards::app.admin.rewards.category.create.select-status')
                    </option>

                    <option value="1">
                        @lang('rewards::app.admin.rewards.category.create.active')
                    </option>

                    <option value="0">
                        @lang('rewards::app.admin.rewards.category.create.inactive')
                    </option>
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="status" />
            </x-admin::form.control-group>
        </div>
    </x-admin::form>
</x-admin::layouts>