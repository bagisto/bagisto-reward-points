<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'تنظیمات بازخرید',
                    'reward-point-on-attribute' => 'امتیاز پاداش بر اساس ویژگی',
                    'reward-point-on-cart' => 'امتیاز پاداش بر اساس سبد خرید',
                    'reward-point-on-category-for-specific-time' => 'امتیاز پاداش بر اساس دسته برای زمان مشخص',
                    'reward-point-on-category' => 'امتیاز پاداش بر اساس دسته',
                    'reward-point-on-product-for-specific-time' => 'امتیاز پاداش بر اساس محصول برای زمان مشخص',
                    'reward-point-on-product' => 'امتیاز پاداش بر اساس محصول',
                    'reward-point' => 'امتیاز پاداش',
                    'reward-system-details' => 'جزئیات سیستم پاداش',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'یک برنامه وفاداری که فعالیت مشتری را پیگیری می کند و امتیازهایی را به آنها اعطا می کند که می توانند در آینده برای تخفیف ها یا مزایا استفاده کنند.',
                    'setting' => 'Setting',
                    'title' => 'امتیاز پاداش',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name با موفقیت حذف شد.',
                            'email-notification' => 'اطلاعیه‌های ایمیل',
                            'reward-used-at-one-time' => 'تعداد امتیازات پاداش مصرفی در یک بار',
                            'reward-when-customer-dob-exp-days' => 'پس از چند روز امتیاز پاداش منقضی می‌شود؟ (بر اساس تاریخ تولد مشتری)',
                            'reward-when-customer-dob' => 'پاداش برای تاریخ تولد مشتری',
                            'reward-when-customer-register-exp-days' => 'پس از چند روز امتیاز پاداش منقضی می‌شود؟ (بر اساس ثبت‌نام مشتری)',
                            'reward-when-customer-register' => 'پاداش هنگام ثبت‌نام مشتری',
                            'reward-when-product-reviewed-exp-days' => 'پس از چند روز امتیاز پاداش منقضی می‌شود؟ (بر اساس بازبینی محصول)',
                            'reward-when-product-reviewed' => 'پاداش هنگام بازبینی محصول',
                            'status' => 'وضعیت ماژول',
                            'update-success' => ':name با موفقیت به‌روزرسانی شد.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش محصول',
                    'create-success' => 'پاداش محصول با موفقیت ایجاد شد',
                    'delete-failed' => 'حذف پاداش محصول موفقیت‌آمیز نبود!',
                    'delete-success' => 'پاداش محصول با موفقیت حذف شد',
                    'error-product' => 'هیچ محصولی انتخاب نشده است',
                    'title' => 'امتیازات پاداش بر روی محصول',
                    'update-success' => 'پاداش محصول با موفقیت به‌روزرسانی شد',

                    'datagrid' => [
                        'delete' => 'حذف',
                        'edit' => 'ویرایش',
                        'end-date' => 'تاریخ پایان',
                        'id' => 'شناسه',
                        'mass-delete-success' => 'پاداش محصول با موفقیت حذف شد',
                        'mass-update-success' => 'پاداش محصول با موفقیت به‌روزرسانی شد',
                        'name' => 'نام',
                        'reward-points' => 'امتیازات پاداش',
                        'sku' => 'SKU',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'update-status' => 'به‌روزرسانی',

                        'options' => [
                            'active' => 'فعال',
                            'inactive' => 'غیرفعال',
                        ],
                    ],

                    'create' => [
                        'active' => 'فعال',
                        'create-btn' => 'ایجاد پاداش مخصوص محصول',
                        'end-date' => 'تاریخ پایان',
                        'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                        'inactive' => 'غیرفعال',
                        'save-btn' => 'ذخیره پاداش محصول',
                        'select-product' => 'انتخاب محصول',
                        'select-status' => 'انتخاب وضعیت',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'title' => 'امتیازات پاداش بر روی محصول',
                    ],

                    'edit' => [
                        'active' => 'فعال',
                        'create-btn' => 'ایجاد پاداش مخصوص محصول',
                        'end-date' => 'تاریخ پایان',
                        'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                        'inactive' => 'غیرفعال',
                        'save-btn' => 'به‌روزرسانی پاداش محصول',
                        'select-product' => 'انتخاب محصول',
                        'select-status' => 'انتخاب وضعیت',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'title' => 'امتیازات پاداش بر روی محصول',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش محصول',
                    'title' => 'امتیازات پاداش بر روی محصول برای زمان مشخص',

                    'create' => [
                        'create-btn' => 'ایجاد پاداش مخصوص زمان',
                        'save-btn' => 'ذخیره پاداش مخصوص زمان',
                        'title' => 'افزودن پاداش مخصوص زمان',
                    ],

                    'edit' => [
                        'save-btn' => 'به‌روزرسانی پاداش مخصوص زمان',
                        'title' => 'ویرایش پاداش مخصوص زمان',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش دسته‌بندی',
                    'category-specific-time' => 'دسته‌بندی برای زمان مشخص',
                    'create-success' => 'پاداش دسته‌بندی با موفقیت ایجاد شد',
                    'delete-failed' => 'حذف پاداش دسته‌بندی موفقیت‌آمیز نبود!',
                    'delete-success' => 'پاداش دسته‌بندی با موفقیت حذف شد',
                    'error-category' => 'هیچ دسته‌بندی انتخاب نشده است',
                    'specific-title' => 'ایجاد پاداش مخصوص دسته‌بندی',
                    'title' => 'امتیازات پاداش بر روی دسته‌بندی',
                    'update-success' => 'پاداش دسته‌بندی با موفقیت به‌روزرسانی شد',

                    'datagrid' => [
                        'delete' => 'حذف',
                        'edit' => 'ویرایش',
                        'end-date' => 'تاریخ پایان',
                        'id' => 'شناسه',
                        'mass-delete-success' => 'پاداش دسته‌بندی با موفقیت حذف شد',
                        'mass-update-success' => 'پاداش دسته‌بندی با موفقیت به‌روزرسانی شد',
                        'name' => 'نام',
                        'reward-points' => 'امتیازات پاداش',
                        'sku' => 'SKU',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'update-status' => 'به‌روزرسانی',

                        'options' => [
                            'active' => 'فعال',
                            'inactive' => 'غیرفعال',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'فعال',
                    'add-btn' => 'ایجاد پاداش دسته‌بندی',
                    'end-date' => 'تاریخ پایان',
                    'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                    'inactive' => 'غیرفعال',
                    'save-btn' => 'ذخیره پاداش دسته‌بندی',
                    'select-category' => 'انتخاب دسته‌بندی',
                    'select-status' => 'انتخاب وضعیت',
                    'start-date' => 'تاریخ شروع',
                    'status' => 'وضعیت',
                    'title' => 'افزودن امتیازات پاداش بر روی دسته‌بندی',
                ],

                'edit' => [
                    'active' => 'فعال',
                    'add-btn' => 'ایجاد پاداش دسته‌بندی',
                    'end-date' => 'تاریخ پایان',
                    'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                    'inactive' => 'غیرفعال',
                    'save-btn' => 'به‌روزرسانی پاداش دسته‌بندی',
                    'select-category' => 'انتخاب دسته‌بندی',
                    'select-status' => 'انتخاب وضعیت',
                    'start-date' => 'تاریخ شروع',
                    'status' => 'وضعیت',
                    'title' => 'ویرایش امتیازات پاداش بر روی دسته‌بندی',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش دسته‌بندی برای زمان مشخص',
                    'category-specific-time' => 'دسته‌بندی برای زمان مشخص',
                    'title' => 'امتیازات پاداش بر روی دسته‌بندی برای زمان مشخص',
                ],

                'create' => [
                    'save-btn' => 'ذخیره پاداش دسته‌بندی برای زمان مشخص',
                    'title' => 'افزودن پاداش دسته‌بندی برای زمان مشخص',
                ],

                'edit' => [
                    'save-btn' => 'به‌روزرسانی پاداش دسته‌بندی برای زمان مشخص',
                    'title' => 'ویرایش پاداش دسته‌بندی برای زمان مشخص',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'افزودن امتیاز پاداش بر روی سبد خرید',
                    'create-success' => 'سبد خرید با موفقیت ایجاد شد',
                    'delete-failed' => 'پاداش سبد خرید حذف نشد!',
                    'delete-success' => 'سبد خرید با موفقیت حذف شد',
                    'error-cart' => 'انتخاب سبد خرید وجود ندارد',
                    'title' => 'امتیاز پاداش بر روی سبد خرید',
                    'update-success' => 'سبد خرید با موفقیت به روز شد',

                    'datagrid' => [
                        'amount-from' => 'مقدار از',
                        'amount-to' => 'مقدار تا',
                        'delete' => 'حذف',
                        'edit' => 'ویرایش',
                        'end-date' => 'تاریخ پایان',
                        'id' => 'شناسه',
                        'mass-delete-success' => 'سبد خرید با موفقیت حذف شد',
                        'mass-update-success' => 'سبد خرید با موفقیت به روز شد',
                        'name' => 'نام',
                        'reward-points' => 'امتیازات پاداش',
                        'sku' => 'شناسه محصول',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'update-status' => 'به‌روزرسانی',

                        'options' => [
                            'active' => 'فعال',
                            'inactive' => 'غیرفعال',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'فعال',
                    'add-btn' => 'افزودن امتیاز پاداش بر روی سبد خرید',
                    'amount-from' => 'مقدار از',
                    'amount-to' => 'مقدار تا',
                    'end-date' => 'تاریخ پایان',
                    'enter-reward-points' => 'امتیاز پاداش را وارد کنید',
                    'inactive' => 'غیرفعال',
                    'save-btn' => 'ذخیره',
                    'select-status' => 'وضعیت را انتخاب کنید',
                    'start-date' => 'تاریخ شروع',
                    'status' => 'وضعیت',
                    'title' => 'امتیاز پاداش بر روی سبد خرید',
                ],

                'edit' => [
                    'active' => 'فعال',
                    'add-btn' => 'افزودن امتیاز پاداش بر روی سبد خرید',
                    'amount-from' => 'مقدار از',
                    'amount-to' => 'مقدار تا',
                    'end-date' => 'تاریخ پایان',
                    'enter-reward-points' => 'امتیاز پاداش را وارد کنید',
                    'inactive' => 'غیرفعال',
                    'save-btn' => 'ویرایش',
                    'select-status' => 'وضعیت را انتخاب کنید',
                    'start-date' => 'تاریخ شروع',
                    'status' => 'وضعیت',
                    'title' => 'امتیاز پاداش بر روی سبد خرید',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'افزودن امتیاز پاداش به ویژگی',
                    'create-success' => 'پاداش ویژگی با موفقیت ایجاد شد',
                    'delete-failed' => 'ویژگی حذف نشد!',
                    'delete-success' => 'ویژگی با موفقیت حذف شد',
                    'error-cart' => 'هیچ ویژگی انتخاب نشده است',
                    'title' => 'امتیاز پاداش برای ویژگی‌ها',
                    'update-success' => 'ویژگی پاداش با موفقیت به روز شد',

                    'datagrid' => [
                        'code' => 'کد',
                        'delete' => 'حذف',
                        'edit' => 'ویرایش',
                        'id' => 'شناسه',
                        'mass-delete-success' => 'ویژگی با موفقیت حذف شد',
                        'mass-update-success' => 'به‌روزرسانی ویژگی با موفقیت انجام شد',
                        'name' => 'نام',
                        'reward-points' => 'امتیاز پاداش',
                        'sku' => 'کد SKU',
                        'status' => 'وضعیت',
                        'update-status' => 'به‌روزرسانی',

                        'options' => [
                            'active' => 'فعال',
                            'inactive' => 'غیرفعال',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'فعال',
                    'enter-reward-points' => 'امتیاز پاداش را وارد کنید',
                    'inactive' => 'غیرفعال',
                    'reward_points' => 'امتیاز ویژگی',
                    'save-btn' => 'ذخیره امتیاز پاداش بر روی ویژگی',
                    'select-attributes' => 'ویژگی را انتخاب کنید',
                    'select-status' => 'وضعیت را انتخاب کنید',
                    'status' => 'وضعیت',
                    'title' => 'امتیاز پاداش بر روی ویژگی‌ها',
                ],

                'edit' => [
                    'active' => 'فعال',
                    'edit-btn' => 'ویرایش امتیاز پاداش بر روی ویژگی',
                    'enter-reward-points' => 'امتیاز پاداش را وارد کنید',
                    'inactive' => 'غیرفعال',
                    'reward_points' => 'امتیاز ویژگی',
                    'select-attributes' => 'ویژگی را انتخاب کنید',
                    'select-status' => 'وضعیت را انتخاب کنید',
                    'status' => 'وضعیت',
                    'title' => 'امتیاز پاداش بر روی ویژگی‌ها',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'جزئیات سیستم پاداش',

                    'datagrid' => [
                        'active' => 'فعال',
                        'id' => 'شناسه',
                        'inactive' => 'غیرفعال',
                        'name' => 'نام',
                        'reward-points' => 'امتیازهای پاداش',
                        'status' => 'وضعیت',
                        'used-rewards-points' => 'امتیازهای پاداش استفاده شده',
                        'view' => 'مشاهده',
                    ],
                ],

                'view' => [
                    'title' => 'جزئیات سیستم پاداش',

                    'datagrid' => [
                        'approved' => 'تایید شده',
                        'attribute-id' => 'شناسه ویژگی',
                        'canceled' => 'لغو شده',
                        'category-id' => 'شناسه دسته',
                        'closed' => 'بسته شده',
                        'created-at' => 'تاریخ ایجاد',
                        'exp-date' => 'تاریخ انقضا',
                        'expire' => 'منقضی شده',
                        'fraud' => 'تقلب',
                        'id' => 'شناسه',
                        'name' => 'نام',
                        'note' => 'توضیحات',
                        'order-id' => 'شناسه سفارش',
                        'pending' => 'در انتظار',
                        'processing' => 'در حال پردازش',
                        'product-id' => 'شناسه محصول',
                        'reward-points' => 'امتیازهای پاداش',
                        'status' => 'وضعیت',
                        'total-reward-points' => 'کل امتیازهای پاداش',
                        'used' => 'استفاده شده',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'نرخ تبدیل برای کل سبد خرید',
                    'conversion' => 'نرخ تبدیل',
                    'enable-apply-points-label' => 'اجازه دادن به مشتریان برای استفاده از امتیازها هنگام پرداخت',
                    'enable-apply-points' => 'فعال کردن استفاده از امتیازها هنگام پرداخت',
                    'points' => 'امتیازها',
                    'redemption-cart-label' => 'اجازه دادن به مشتریان برای استفاده از امتیازها هنگام خرید',
                    'redemption-cart' => 'تبدیل بر اساس کل سبد خرید',
                    'save-btn' => 'ذخیره',
                    'title' => 'جزئیات سیستم پاداش',
                    'update-success' => 'تنظیمات استرداد با موفقیت به روز شد',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'امتیازات پاداش',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'امتیازات پاداش شما',

                        'datagrid' => [
                            'approved' => 'تأیید شده',
                            'attribute-id' => 'شناسه ویژگی',
                            'canceled' => 'لغو شده',
                            'category-id' => 'شناسه دسته',
                            'closed' => 'بسته شده',
                            'created-at' => 'تاریخ تراکنش',
                            'exp-date' => 'تاریخ انقضا',
                            'expire' => 'منقضی',
                            'fraud' => 'تقلب',
                            'id' => 'شناسه',
                            'name' => 'نام',
                            'note' => 'توجه',
                            'order-id' => 'شناسه سفارش',
                            'pending' => 'در انتظار',
                            'processing' => 'در حال پردازش',
                            'product-id' => 'شناسه محصول',
                            'reward-points' => 'امتیازات پاداش',
                            'status' => 'وضعیت',
                            'total-reward-points' => 'مجموع امتیازات پاداش',
                            'used' => 'استفاده شده',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'این محصول را خریداری کنید و :reward امتیاز بگیرید. پیشنهاد تا :end_date معتبر است',
            'product-reward' => 'این محصول را خریداری کنید و :reward امتیاز بگیرید',

            'review' => [
                'review-points' => 'نظر دهید و :points امتیاز دریافت کنید',
            ],
        ],

        'register' => [
            'register-reward' => 'به عنوان عضو خانواده ما ثبت نام کنید و :points امتیاز دریافت کنید',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'امتیازات پاداش',
                    'reward-points-earned' => 'امتیازات پاداش کسب شده',

                    'summary' => [
                        'reward_points' => 'مجموع امتیازات پاداش',
                    ],
                ],

                'points' => [
                    'apply-points' => 'اعمال امتیاز',
                    'button-title' => 'اعمال',
                    'enter-points' => 'وارد کردن امتیاز',
                    'reward-points' => 'اعمال امتیازات پاداش',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'اعمال امتیازها',
            'enter-points' => 'ورود امتیازها',
            'points-used' => 'امتیازهای استفاده شده',
            'redemption-setting' => 'اطلاعات: :points امتیاز معادل :conversion_rate',
            'total-point' => 'مجموع امتیازات شما: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'امکان اعمال امتیازها وجود ندارد',
            'grandtotal' => 'مجموع کل',
            'invalid-points' => 'فیلد امتیازها الزامی است',
            'only-number' => 'فیلد امتیازها باید 1 یا بیشتر باشد',
            'points-applied' => 'امتیازهای اعمال شده',
            'points-apply-issue' => 'کد امتیاز قابل اعمال نیست.',
            'points' => 'امتیازها',
            'redem-points' => 'بازخرید امتیازها (-)',
            'remove-points' => 'حذف امتیازها',
            'success-points' => 'کد امتیاز با موفقیت اعمال شد.',
            'total-reward-points-awarded' => 'مجموع امتیازهای جایزه اهدا شده',
            'unauthorized-use-points' => 'در حال حاضر نمی‌توانید از امتیازهای پاداش استفاده کنید، با مدیر تماس بگیرید.',
            'use-can-use-only' => 'فقط می‌توانید استفاده کنید ',
            'warning-required-less-point' => 'بازخرید امتیازهای پاداش باید کمتر از قیمت محصول باشد.',
            'you-have-only' => 'شما تنها ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'خوش آمدید و از ثبت نام شما متشکریم!',
            'points-rewarded' => 'شما به خاطر ثبت نام :points امتیاز دریافت کرده‌اید',
            'subject' => 'ثبت نام مشتری جدید',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'review' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'از بررسی محصول :product_name شما متشکریم!',
            'points-rewarded' => 'شما به خاطر بررسی :points امتیاز دریافت کرده‌اید',
            'subject' => 'بررسی مشتری',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'dob' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'تولدتان مبارک!',
            'points-rewarded' => 'شما به خاطر تولدتان :points امتیاز دریافت کرده‌اید',
            'subject' => 'تاریخ تولد مشتری',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'pending' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'از خرید از وب‌سایت ما متشکریم!',
            'points-rewarded' => 'پس از تأیید سفارش شماره #:order_id، می‌توانید از :points امتیاز استفاده کنید',
            'status' => 'در حال انتظار',
            'subject' => 'سفارش مشتری',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'used' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'از استفاده از امتیازهای پاداش برای خرید محصولات از وب‌سایت ما متشکریم!',
            'points-rewarded' => 'شما :points امتیاز برای سفارش شماره #:order_id استفاده کرده‌اید',
            'status' => 'استفاده شده',
            'subject' => 'استفاده از امتیازهای پاداش مشتری',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'approved' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'امتیازهای پاداش شما تأیید شد!',
            'points-rewarded' => 'شما :points امتیاز برای سفارش شماره #:order_id دریافت کرده‌اید',
            'status' => 'تأیید شده',
            'subject' => 'تأیید امتیازهای پاداش',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'processing' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'وضعیت به پردازش در تاریخ :date تغییر یافت!',
            'points-rewarded' => 'وضعیت برای سفارش شماره #:order_id تغییر یافت',
            'status' => 'تأیید شده',
            'subject' => 'پردازش امتیازهای پاداش',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'expire' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'وضعیت به منقضی شده در تاریخ :date تغییر یافت!',
            'points-rewarded' => 'وضعیت برای سفارش شماره #:order_id تغییر یافت',
            'status' => 'منقضی شده',
            'subject' => 'پایان اعتبار امتیازهای پاداش',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'closed' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'وضعیت به بسته شده در تاریخ :date تغییر یافت!',
            'points-rewarded' => 'وضعیت به بسته شده برای سفارش شماره #:order_id تغییر یافت',
            'status' => 'بسته شده',
            'subject' => 'پایان اعتبار امتیازهای پاداش',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'cancel' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'امتیازهای پاداش شما در تاریخ :date لغو شد!',
            'points-rewarded' => 'شما :points امتیاز برای سفارش شماره #:order_id لغو کرده‌اید',
            'status' => 'لغو شده',
            'subject' => 'لغو امتیازهای پاداش',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],

        'fraud' => [
            'dear' => 'عزیز :customer_name',
            'greeting' => 'وضعیت به تقلب تغییر یافت!',
            'points-rewarded' => 'شما :points امتیاز برای سفارش شماره #:order_id در تاریخ :date لغو کرده‌اید',
            'status' => 'تقلب',
            'subject' => 'تقلب در امتیازهای پاداش',
            'thanks' => 'متشکرم!',
            'total-point-left' => 'شما :total_reward_points امتیاز باقی مانده دارید',
            'used-points' => 'شما :used_reward_points امتیاز استفاده کرده‌اید',
        ],
    ],
];
