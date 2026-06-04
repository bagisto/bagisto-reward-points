<x-admin::layouts>
    <!-- Title -->
    <x-slot:title>
        @lang('rewards::app.admin.rewards.attributes.edit.title')
    </x-slot:title>

    <x-admin::form action="{{ route('admin.reward.attribute.update', $attributesReward->id) }}">
        <div class="flex items-center justify-between">
            <p class="text-lg font-bold text-gray-800 dark:text-white">
                @lang('rewards::app.admin.rewards.attributes.edit.title')
            </p>

            <div class="flex gap-x-2.5 items-center">
                <!-- Back -->
                <a 
                    href="{{ route('admin.reward.attribute.index')}}" 
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
                        @lang('rewards::app.admin.rewards.attributes.edit.edit-btn')
                    </button>
                </div>
            </div>
        </div>

        <div class="border-b px-4 py-2.5 dark:border-gray-800">
            <!-- Reward Point -->
            <x-admin::form.control-group class="mb-2.5">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.attributes.edit.enter-reward-points')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="text"
                    name="reward_points"
                    value="{{ old($attributesReward->reward_points) ?: $attributesReward->reward_points }}"
                    id="reward_points"
                    rules="required|numeric"
                    :label="trans('rewards::app.admin.rewards.attributes.edit.enter-reward-points')"
                    :placeholder="trans('rewards::app.admin.rewards.products.index.create.enter-reward-points')"
                >
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="reward_points"/>
            </x-admin::form.control-group>

            <!-- Attribute -->
            <x-admin::form.control-group class="w-full">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.attributes.edit.select-attributes')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="select"
                    name="attribute_id"
                    rules="required"
                    value="{{ old($attributesReward->attribute_id) ?: $attributesReward->attribute_id }}"
                    id="attribute_id"
                    :label="trans('rewards::app.admin.rewards.attributes.edit.select-attributes')"
                >
                    <option value="">
                        @lang('rewards::app.admin.rewards.attributes.edit.select-attributes')
                    </option>

                    @foreach ($attributes as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->admin_name }}
                        </option>
                    @endforeach
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="attribute_id"/>
            </x-admin::form.control-group>

            <!-- Status -->
            <x-admin::form.control-group class="w-full">
                <x-admin::form.control-group.label class="required">
                    @lang('rewards::app.admin.rewards.attributes.edit.status')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="select"
                    name="status"
                    :value="$attributesReward->status"
                    id="status"
                    rules="required"
                    :label="trans('rewards::app.admin.rewards.attributes.edit.select-status')"
                >
                    <option value="">
                        @lang('rewards::app.admin.rewards.attributes.edit.select-status')
                    </option>

                    <option value="1">
                        @lang('rewards::app.admin.rewards.attributes.edit.active')
                    </option>

                    <option value="0">
                        @lang('rewards::app.admin.rewards.attributes.edit.inactive')
                    </option>
                </x-admin::form.control-group.control>

                <x-admin::form.control-group.error control-name="status" />
            </x-admin::form.control-group>
        </div>
    </x-admin::form>
</x-admin::layouts>