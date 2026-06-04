<x-admin::layouts>
    <!-- Title -->
    <x-slot:title>
        @lang('rewards::app.admin.rewards.category-specific.create.title')
    </x-slot:title>

    <v-add-specific-category-reward></v-add-specific-category-reward>

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-add-specific-category-reward-template"
        >
            <x-admin::form action="{{ route('admin.reward.category.store_category_specific_reward') }}">
                <div class="flex items-center justify-between">
                    <p class="text-lg font-bold text-gray-800 dark:text-white">
                        @lang('rewards::app.admin.rewards.category-specific.create.title')
                    </p>

                    <div class="flex gap-x-2.5 items-center">
                        <!-- Back -->
                        <a 
                            href="{{ route('admin.reward.category.category_specific_time')}}" 
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
                                @lang('rewards::app.admin.rewards.category-specific.create.save-btn')
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border-b px-4 py-2.5 dark:border-gray-800">
                    <!-- Reward Point -->
                    <x-admin::form.control-group class="mb-2.5">
                        <x-admin::form.control-group.label class="required">
                            @lang('rewards::app.admin.rewards.category.create.enter-reward-points')
                        </x-admin::form.control-group.label>

                        <x-admin::form.control-group.control
                            type="text"
                            name="reward_points"
                            value="{{ old('reward_points') }}"
                            id="reward_points"
                            rules="required|numeric"
                            :label="trans('rewards::app.admin.rewards.category.create.enter-reward-points')"
                            :placeholder="trans('rewards::app.admin.rewards.products.index.create.enter-reward-points')"
                        >
                        </x-admin::form.control-group.control>

                        <x-admin::form.control-group.error control-name="reward_points"/>
                    </x-admin::form.control-group>

                    <div class="flex gap-4 max-sm:flex-wrap">
                        <!-- Start date -->
                        <x-admin::form.control-group class="w-full">
                            <x-admin::form.control-group.label class="required">
                                @lang('rewards::app.admin.rewards.category.create.start-date')
                            </x-admin::form.control-group.label>

                            <x-admin::form.control-group.control
                                type="datetime"
                                name="start_time"
                                value="{{ old('start_time') }}"
                                rules="required"
                                :label="trans('rewards::app.admin.rewards.cart.create.start-date')"
                                :placeholder="trans('rewards::app.admin.rewards.cart.create.start-date')"
                            />
                            
                            <x-admin::form.control-group.error control-name="start_time"/>
                        </x-admin::form.control-group>

                        <!-- End date -->
                        <x-admin::form.control-group class="w-full">
                            <x-admin::form.control-group.label class="required">
                                @lang('rewards::app.admin.rewards.category.create.end-date')
                            </x-admin::form.control-group.label>

                            <x-admin::form.control-group.control
                                type="datetime"
                                name="end_time"
                                value="{{ old('end_time') }}"
                                rules="required"
                                :label="trans('rewards::app.admin.rewards.cart.create.end-date')"
                                :placeholder="trans('rewards::app.admin.rewards.cart.create.end-date')"
                            />

                            <x-admin::form.control-group.error control-name="end_time"/>
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
                                  
                    <div 
                        v-if="showCategorySearchInput" 
                        class="mt-2"
                    >
                        <p class="flex gap-1 items-center mb-1.5 text-xs text-gray-800 dark:text-white font-medium required">
                            @lang('rewards::app.admin.rewards.category.create.select-category')
                        </p>
                        
                        <input
                            type="text"
                            placeholder="@lang('rewards::app.admin.rewards.category.create.select-category')"
                            @keyup="searchCategory($event)"
                            v-model="searchbox"
                            class="w-full rounded-md border bg-white px-3 py-2.5 text-sm font-normal text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800"
                        >

                        <input 
                            type="hidden" 
                            name="category_id" 
                            v-model="categoryId" 
                        />

                        <ul 
                            v-if="showResult" 
                            style="max-height: 100px;"  
                            class="text-gray-600 overflow-auto dark:text-white bg-white dark:bg-gray-900 box-shadow rounded"
                        >
                            <li 
                                class="w-full border p-3" 
                                v-for="result in results" 
                                @click="selectCategory(result)"
                            >
                                @{{ result.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </x-admin::form>
        </script>

        <script type="module">
            app.component('v-add-specific-category-reward', {
                template: '#v-add-specific-category-reward-template',
                data() {
                    return {
                        results: [],
                        categoryId: '',
                        showResult: false,
                        showCategorySearchInput: true,
                    };
                },

                watch: {
                    results: {
                        deep: true,

                        handler(newValue, oldValue) {
                            if (newValue.length > 0) {
                                this.showResult =true;
                            } else {
                                this.showResult = false;
                            }
                        },
                    }
                },

                methods: {
                    searchCategory($event) {
                        if ($event.target.value.length > 2) {                            
                            this.$axios.post("{{ route('admin.reward.category.search-categories-for-specific') }}", { query: $event.target.value })
                                .then(response => {
                                    this.results = response.data;

                                    this.showResult = this.results.length;
                                })
                                .catch(error => {
                                    if (error.response.status === 422) {
                                        this.setErrors(error.response.data.errors);
                                    }
                                });
                        }
                    },

                    selectCategory(eVal) {                        
                        this.categoryId = eVal.id;
                        
                        this.searchbox = eVal.name;

                        this.showResult = false;
                    },
                },
            });
        </script>
        @endPushOnce
</x-admin::layouts>