<x-admin::layouts>
    <!-- Title -->
    <x-slot:title>
        @lang('rewards::app.admin.rewards.products-specific.index.create.title')
    </x-slot:title>
    <v-add-specific-product-reward></v-add-specific-product-reward>

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-add-specific-product-reward-template"
        >
            <x-admin::form action="{{ route('admin.reward.product.store_product_specific_reward') }}">
                <div class="flex items-center justify-between">
                    <p class="py-3 text-xl text-gray-800 dark:text-white font-bold">
                        @lang('rewards::app.admin.rewards.products-specific.index.create.title')
                    </p>

                    <div class="flex gap-x-2.5 items-center">
                        <!-- Back -->
                        <a 
                            href="{{ route('admin.reward.product.product-specific-time')}}" 
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
                            @lang('rewards::app.admin.rewards.products-specific.index.create.save-btn')
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border-b px-4 py-2.5 dark:border-gray-800">
                    <!-- Reward Point -->
                    <x-admin::form.control-group class="mb-2.5">
                        <x-admin::form.control-group.label class="required">
                            @lang('rewards::app.admin.rewards.products.index.create.enter-reward-points')
                        </x-admin::form.control-group.label>

                        <x-admin::form.control-group.control
                            type="text"
                            name="reward_points"
                            value="{{ old('reward_points') }}"
                            id="reward_points"
                            rules="required|numeric"
                            :label="trans('rewards::app.admin.rewards.products.index.create.enter-reward-points')"
                            :placeholder="trans('rewards::app.admin.rewards.products.index.create.enter-reward-points')"
                        >
                        </x-admin::form.control-group.control>

                        <x-admin::form.control-group.error control-name="reward_points"/>
                    </x-admin::form.control-group>

                    <div class="flex gap-4 max-sm:flex-wrap">
                        <!-- Start date -->
                        <x-admin::form.control-group class="w-full">
                            <x-admin::form.control-group.label class="required">
                                @lang('rewards::app.admin.rewards.products.index.create.start-date')
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
                                @lang('rewards::app.admin.rewards.products.index.create.end-date')
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
                            @lang('rewards::app.admin.rewards.products.index.create.status')
                        </x-admin::form.control-group.label>

                        <x-admin::form.control-group.control
                            type="select"
                            name="status"
                            value="{{ old('status') }}"
                            id="status"
                            rules="required"
                            :label="trans('rewards::app.admin.rewards.products.index.create.select-status')"
                        >
                            <option value="">
                                @lang('rewards::app.admin.rewards.products.index.create.select-status')
                            </option>

                            <option value="1">
                                @lang('rewards::app.admin.rewards.products.index.create.active')
                            </option>

                            <option value="0">
                                @lang('rewards::app.admin.rewards.products.index.create.inactive')
                            </option>
                        </x-admin::form.control-group.control>

                        <x-admin::form.control-group.error control-name="status" />

                    </x-admin::form.control-group>

                                        
                    <div 
                        v-if="showProductSearchInput" 
                        class="mt-2"
                    >
                        <p class="flex gap-1 items-center mb-1.5 text-xs text-gray-800 dark:text-white font-medium required">
                            @lang('rewards::app.admin.rewards.products.index.create.select-product')
                        </p>
                        
                        <input
                            type="text"
                            placeholder="@lang('rewards::app.admin.rewards.products.index.create.select-product')"
                            @keyup="searchProduct($event)"
                            v-model="searchbox"
                            class="w-full rounded-md border bg-white px-3 py-2.5 text-sm font-normal text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800"
                        >

                        <input 
                            type="hidden" 
                            name="product_id" 
                            v-model="productId" 
                        />

                        <ul 
                            v-if="showResult" 
                            style="max-height: 100px;"  
                            class="text-gray-600 overflow-auto dark:text-white bg-white dark:bg-gray-900 box-shadow rounded"
                        >
                            <li 
                                class="w-full border p-3" 
                                v-for="result in results" 
                                @click="selectProduct(result)"
                            >
                                @{{ result.name }}
                            </li>
                        </ul>
                    </div>

                    <x-admin::form.control-group.error control-name="product_id" />
                </div>
            </x-admin::form>
        </script>

        <script type="module">
            app.component('v-add-specific-product-reward', {
                template: '#v-add-specific-product-reward-template',
                data() {
                    return {
                        results: [],
                        productId: '',
                        showResult: false,
                        showProductSearchInput: true,
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
                    searchProduct($event) {
                        if ($event.target.value.length > 2) {                            
                            this.$axios.post("{{ route('admin.reward.product.get-product-specific') }}", { query: $event.target.value })
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

                    selectProduct(eVal) {                        
                        this.productId = eVal.product_id;
                        
                        this.searchbox = eVal.name;

                        this.showResult = false;
                    },
                },
            });
        </script>
    @endPushOnce
</x-admin::layouts>
