<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'إعدادات الاسترداد',
                    'reward-point-on-attribute' => 'نقطة مكافأة على السمة',
                    'reward-point-on-cart' => 'نقطة مكافأة على السلة',
                    'reward-point-on-category-for-specific-time' => 'نقطة مكافأة على الفئة لمدة محددة',
                    'reward-point-on-category' => 'نقطة مكافأة على الفئة',
                    'reward-point-on-product-for-specific-time' => 'نقطة مكافأة على المنتج لمدة محددة',
                    'reward-point-on-product' => 'نقطة مكافأة على المنتج',
                    'reward-point' => 'نقطة مكافأة',
                    'reward-system-details' => 'تفاصيل نظام المكافآت',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'برنامج الولاء يتتبع نشاط العملاء ويكافئهم بنقاط قابلة للاستبدال في المستقبل بخصومات أو فوائد.',
                    'setting' => 'يبيع',
                    'title' => 'نقطة مكافأة',

                    'reward' => [
                        'setting' => [
                            'delete-success' => 'تم حذف :name بنجاح.',
                            'email-notification' => 'اشعارات البريد الالكتروني',
                            'reward-used-at-one-time' => 'نقطة المكافأة المستخدمة في وقت واحد',
                            'reward-when-customer-dob-exp-days' => 'بعد كم يوم تنتهي صلاحية نقطة المكافأة في تاريخ ميلاد العميل',
                            'reward-when-customer-dob' => 'مكافأة لتاريخ ميلاد العميل',
                            'reward-when-customer-register-exp-days' => 'بعد كم يوم تنتهي صلاحية نقطة المكافأة في سجل العميل',
                            'reward-when-customer-register' => 'مكافأة عند تسجيل العميل',
                            'reward-when-product-reviewed-exp-days' => 'بعد كم يوم تنتهي صلاحية نقطة المكافأة على المنتج الذي تمت مراجعته',
                            'reward-when-product-reviewed' => 'مكافأة عند مراجعة المنتج',
                            'status' => 'حالة الوحدة',
                            'update-success' => 'تم تحديث :name بنجاح.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'إنشاء مكافأة المنتج',
                    'create-success' => 'تم إنشاء مكافأة المنتج بنجاح',
                    'delete-failed' => 'لم يتم حذف مكافأة المنتج!',
                    'delete-success' => 'تم حذف مكافأة المنتج بنجاح',
                    'error-product' => 'لا يوجد منتج محدد',
                    'title' => 'نقاط المكافأة على المنتج',
                    'update-success' => 'تم تحديث مكافأة المنتج بنجاح',

                    'datagrid' => [
                        'delete' => 'حذف',
                        'edit' => 'تعديل',
                        'end-date' => 'تاريخ الانتهاء',
                        'id' => 'معرف',
                        'mass-delete-success' => 'تم حذف مكافأة المنتج بنجاح',
                        'mass-update-success' => 'تم تحديث مكافأة المنتج بنجاح',
                        'name' => 'الاسم',
                        'reward-points' => 'نقاط المكافأة',
                        'sku' => 'رمز SKU',
                        'start-date' => 'تاريخ البدء',
                        'status' => 'الحالة',
                        'update-status' => 'تحديث الحالة',

                        'options' => [
                            'active' => 'نشط',
                            'inactive' => 'غير نشط',
                        ],
                    ],

                    'create' => [
                        'active' => 'نشط',
                        'create-btn' => 'إنشاء مكافأة مخصصة للمنتج',
                        'end-date' => 'تاريخ الانتهاء',
                        'enter-reward-points' => 'أدخل نقاط المكافأة',
                        'inactive' => 'غير نشط',
                        'save-btn' => 'حفظ مكافأة المنتج',
                        'select-product' => 'حدد المنتج',
                        'select-status' => 'حدد الحالة',
                        'start-date' => 'تاريخ البدء',
                        'status' => 'الحالة',
                        'title' => 'نقاط المكافأة على المنتج',
                    ],

                    'edit' => [
                        'active' => 'نشط',
                        'create-btn' => 'إنشاء مكافأة مخصصة للمنتج',
                        'end-date' => 'تاريخ الانتهاء',
                        'enter-reward-points' => 'أدخل نقاط المكافأة',
                        'inactive' => 'غير نشط',
                        'save-btn' => 'تحديث مكافأة المنتج',
                        'select-product' => 'حدد المنتج',
                        'select-status' => 'حدد الحالة',
                        'start-date' => 'تاريخ البدء',
                        'status' => 'الحالة',
                        'title' => 'نقاط المكافأة على المنتج',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'إنشاء مكافأة المنتج',
                    'title' => 'نقاط المكافأة على المنتج لوقت محدد',

                    'create' => [
                        'create-btn' => 'إنشاء مكافأة محددة الوقت',
                        'save-btn' => 'حفظ مكافأة المنتج المحددة الوقت',
                        'title' => 'إضافة مكافأة محددة الوقت',
                    ],

                    'edit' => [
                        'save-btn' => 'تحديث مكافأة المنتج المحددة الوقت',
                        'title' => 'تعديل مكافأة المنتج المحددة الوقت',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'إنشاء مكافأة الفئة',
                    'category-specific-time' => 'وقت محدد للفئة',
                    'create-success' => 'تم إنشاء مكافأة الفئة بنجاح',
                    'delete-failed' => 'لم يتم حذف مكافأة الفئة!',
                    'delete-success' => 'تم حذف مكافأة الفئة بنجاح',
                    'error-category' => 'لا يوجد فئة محددة',
                    'specific-title' => 'إنشاء مكافأة محددة للفئة',
                    'title' => 'نقاط المكافأة على الفئة',
                    'update-success' => 'تم تحديث مكافأة الفئة بنجاح',

                    'datagrid' => [
                        'delete' => 'حذف',
                        'edit' => 'تعديل',
                        'end-date' => 'تاريخ الانتهاء',
                        'id' => 'معرف',
                        'mass-delete-success' => 'تم حذف مكافأة الفئة بنجاح',
                        'mass-update-success' => 'تم تحديث مكافأة الفئة بنجاح',
                        'name' => 'الاسم',
                        'reward-points' => 'نقاط المكافأة',
                        'sku' => 'رمز SKU',
                        'start-date' => 'تاريخ البدء',
                        'status' => 'الحالة',
                        'update-status' => 'تحديث الحالة',

                        'options' => [
                            'active' => 'نشط',
                            'inactive' => 'غير نشط',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'نشط',
                    'add-btn' => 'إنشاء مكافأة الفئة',
                    'end-date' => 'تاريخ الانتهاء',
                    'enter-reward-points' => 'أدخل نقاط المكافأة',
                    'inactive' => 'غير نشط',
                    'save-btn' => 'حفظ مكافأة الفئة',
                    'select-category' => 'حدد الفئة',
                    'select-status' => 'حدد الحالة',
                    'start-date' => 'تاريخ البدء',
                    'status' => 'الحالة',
                    'title' => 'إضافة نقاط المكافأة على الفئة',
                ],

                'edit' => [
                    'active' => 'نشط',
                    'add-btn' => 'إنشاء مكافأة الفئة',
                    'end-date' => 'تاريخ الانتهاء',
                    'enter-reward-points' => 'أدخل نقاط المكافأة',
                    'inactive' => 'غير نشط',
                    'save-btn' => 'تحديث مكافأة الفئة',
                    'select-category' => 'حدد الفئة',
                    'select-status' => 'حدد الحالة',
                    'start-date' => 'تاريخ البدء',
                    'status' => 'الحالة',
                    'title' => 'تعديل نقاط المكافأة على الفئة',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'إنشاء مكافأة الفئة لوقت محدد',
                    'category-specific-time' => 'وقت محدد للفئة',
                    'title' => 'نقاط المكافأة على الفئة لوقت محدد',
                ],

                'create' => [
                    'save-btn' => 'حفظ مكافأة الفئة لوقت محدد',
                    'title' => 'إضافة نقاط المكافأة على الفئة لوقت محدد',
                ],

                'edit' => [
                    'save-btn' => 'تحديث نقاط المكافأة على الفئة لوقت محدد',
                    'title' => 'تعديل نقاط المكافأة على الفئة لوقت محدد',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'إضافة نقاط مكافأة على السلة',
                    'create-success' => 'تم إنشاء مكافأة السلة بنجاح',
                    'delete-failed' => 'فشل حذف مكافأة السلة!',
                    'delete-success' => 'تم حذف مكافأة السلة بنجاح',
                    'error-cart' => 'لا توجد سلة محددة',
                    'title' => 'نقاط المكافأة على السلة',
                    'update-success' => 'تم تحديث مكافأة السلة بنجاح',

                    'datagrid' => [
                        'amount-from' => 'المبلغ من',
                        'amount-to' => 'المبلغ إلى',
                        'delete' => 'حذف',
                        'edit' => 'تعديل',
                        'end-date' => 'تاريخ الانتهاء',
                        'id' => 'معرف',
                        'mass-delete-success' => 'تم حذف مكافآت السلة بنجاح',
                        'mass-update-success' => 'تم تحديث مكافآت السلة بنجاح',
                        'name' => 'اسم',
                        'reward-points' => 'نقاط المكافأة',
                        'sku' => 'SKU',
                        'start-date' => 'تاريخ البدء',
                        'status' => 'الحالة',
                        'update-status' => 'تحديث',

                        'options' => [
                            'active' => 'نشط',
                            'inactive' => 'غير نشط',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'نشط',
                    'add-btn' => 'إضافة نقاط مكافأة على السلة',
                    'amount-from' => 'المبلغ من',
                    'amount-to' => 'المبلغ إلى',
                    'end-date' => 'تاريخ الانتهاء',
                    'enter-reward-points' => 'أدخل نقاط المكافأة',
                    'inactive' => 'غير نشط',
                    'save-btn' => 'حفظ مكافأة السلة',
                    'select-status' => 'اختر الحالة',
                    'start-date' => 'تاريخ البدء',
                    'status' => 'الحالة',
                    'title' => 'إضافة نقاط مكافأة على السلة',
                ],

                'edit' => [
                    'active' => 'نشط',
                    'add-btn' => 'إضافة نقاط مكافأة على السلة',
                    'amount-from' => 'المبلغ من',
                    'amount-to' => 'المبلغ إلى',
                    'end-date' => 'تاريخ الانتهاء',
                    'enter-reward-points' => 'أدخل نقاط المكافأة',
                    'inactive' => 'غير نشط',
                    'save-btn' => 'تحديث مكافأة السلة',
                    'select-status' => 'اختر الحالة',
                    'start-date' => 'تاريخ البدء',
                    'status' => 'الحالة',
                    'title' => 'تعديل نقاط مكافأة على السلة',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'إضافة نقاط المكافأة إلى الميزة',
                    'create-success' => 'تم إنشاء ميزة المكافأة بنجاح',
                    'delete-failed' => 'لم يتم حذف الميزة!',
                    'delete-success' => 'تم حذف الميزة بنجاح',
                    'error-cart' => 'لم يتم اختيار أي ميزة',
                    'title' => 'نقاط المكافأة للميزات',
                    'update-success' => 'تم تحديث ميزة المكافأة بنجاح',

                    'datagrid' => [
                        'code' => 'الكود',
                        'delete' => 'حذف',
                        'edit' => 'تعديل',
                        'id' => 'الرقم التعريفي',
                        'mass-delete-success' => 'تم حذف الميزة بنجاح',
                        'mass-update-success' => 'تم تحديث الميزة بنجاح',
                        'name' => 'الاسم',
                        'reward-points' => 'نقاط المكافأة',
                        'sku' => 'كود SKU',
                        'status' => 'الحالة',
                        'update-status' => 'تحديث',

                        'options' => [
                            'active' => 'نشط',
                            'inactive' => 'غير نشط',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'نشط',
                    'enter-reward-points' => 'أدخل نقاط المكافأة',
                    'inactive' => 'غير نشط',
                    'reward_points' => 'نقاط الميزة',
                    'save-btn' => 'حفظ نقاط المكافأة على الميزة',
                    'select-attributes' => 'حدد الميزة',
                    'select-status' => 'حدد الحالة',
                    'status' => 'الحالة',
                    'title' => 'نقاط المكافأة على الميزات',
                ],

                'edit' => [
                    'active' => 'نشط',
                    'edit-btn' => 'تعديل نقاط المكافأة على الميزة',
                    'enter-reward-points' => 'أدخل نقاط المكافأة',
                    'inactive' => 'غير نشط',
                    'reward_points' => 'نقاط الميزة',
                    'select-attributes' => 'حدد الميزة',
                    'select-status' => 'حدد الحالة',
                    'status' => 'الحالة',
                    'title' => 'نقاط المكافأة على الميزات',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'تفاصيل نظام المكافآت',

                    'datagrid' => [
                        'active' => 'نشط',
                        'id' => 'الرقم التعريفي',
                        'inactive' => 'غير نشط',
                        'name' => 'الاسم',
                        'reward-points' => 'نقاط المكافآت',
                        'status' => 'الحالة',
                        'used-rewards-points' => 'نقاط المكافآت المستخدمة',
                        'view' => 'عرض',
                    ],
                ],

                'view' => [
                    'title' => 'تفاصيل نظام المكافآت',

                    'datagrid' => [
                        'approved' => 'موافق عليه',
                        'attribute-id' => 'معرف السمة',
                        'canceled' => 'ملغى',
                        'category-id' => 'معرف الفئة',
                        'closed' => 'مغلق',
                        'created-at' => 'تاريخ العملية',
                        'exp-date' => 'تاريخ الانتهاء',
                        'expire' => 'منتهي الصلاحية',
                        'fraud' => 'احتيال',
                        'id' => 'المعرف',
                        'name' => 'الاسم',
                        'note' => 'ملاحظة',
                        'order-id' => 'معرف الطلب',
                        'pending' => 'قيد الانتظار',
                        'processing' => 'قيد المعالجة',
                        'product-id' => 'معرف المنتج',
                        'reward-points' => 'نقاط المكافآت',
                        'status' => 'الحالة',
                        'total-reward-points' => 'إجمالي نقاط المكافآت',
                        'used' => 'مستخدم',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'معدل التحويل لاستبدال إجمالي العربة',
                    'conversion' => 'نسبة التحويل',
                    'enable-apply-points-label' => 'السماح للعملاء بتطبيق النقاط أثناء الدفع',
                    'enable-apply-points' => 'تمكين تطبيق النقاط أثناء الدفع',
                    'points' => 'النقاط',
                    'redemption-cart-label' => 'السماح للعملاء بتطبيق النقاط أثناء الشراء',
                    'redemption-cart' => 'استبدال فوق إجمالي العربة',
                    'save-btn' => 'حفظ',
                    'title' => 'تفاصيل نظام المكافآت',
                    'update-success' => 'تم تحديث إعدادات الاستبدال بنجاح',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'نقاط المكافأة',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'نقاط مكافأتك',

                        'datagrid' => [
                            'approved' => 'موافق عليه',
                            'attribute-id' => 'معرّف السمة',
                            'canceled' => 'ملغى',
                            'category-id' => 'معرّف الفئة',
                            'closed' => 'مغلق',
                            'created-at' => 'تاريخ المعاملة',
                            'exp-date' => 'تاريخ الانتهاء',
                            'expire' => 'تنتهي',
                            'fraud' => 'احتيال',
                            'id' => 'معرّف',
                            'name' => 'اسم',
                            'note' => 'ملاحظة',
                            'order-id' => 'معرّف الطلب',
                            'pending' => 'قيد الانتظار',
                            'processing' => 'قيد المعالجة',
                            'product-id' => 'معرّف المنتج',
                            'reward-points' => 'نقاط المكافأة',
                            'status' => 'حالة',
                            'total-reward-points' => 'إجمالي نقاط المكافأة',
                            'used' => 'مستخدم',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'اشترِ هذا المنتج واحصل على :reward نقاط. العرض ساري حتى :end_date',
            'product-reward' => 'اشترِ هذا المنتج واحصل على :reward نقاط',

            'review' => [
                'review-points' => 'قم بمراجعة واحصل على :points نقاط',
            ],
        ],

        'register' => [
            'register-reward' => 'سجل كعضو في عائلتنا واحصل على :points نقاط',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'نقاط المكافأة',
                    'reward-points-earned' => 'نقاط المكافأة المكتسبة',

                    'summary' => [
                        'reward_points' => 'إجمالي نقاط المكافأة الممنوحة',
                    ],
                ],

                'points' => [
                    'apply-points' => 'تطبيق النقاط',
                    'button-title' => 'تطبيق',
                    'enter-points' => 'أدخل النقاط',
                    'reward-points' => 'تطبيق نقاط المكافأة',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'تطبيق النقاط',
            'enter-points' => 'أدخل النقاط',
            'points-used' => 'النقاط المستخدمة',
            'redemption-setting' => 'معلومات: :points نقطة تساوي :conversion_rate',
            'total-point' => 'إجمالي النقاط: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'لا يمكن تطبيق النقاط',
            'grandtotal' => 'المجموع الكلي',
            'invalid-points' => 'حقل النقاط مطلوب',
            'only-number' => 'يجب أن يكون حقل النقاط 1 أو أكثر',
            'points-applied' => 'النقاط المطبقة',
            'points-apply-issue' => 'لا يمكن تطبيق رمز النقاط.',
            'points' => 'نقاط',
            'redem-points' => 'استرداد النقاط (-)',
            'remove-points' => 'إزالة النقاط',
            'success-points' => 'تم تطبيق رمز النقاط بنجاح.',
            'total-reward-points-awarded' => 'إجمالي نقاط المكافأة الممنوحة',
            'unauthorized-use-points' => 'لا يمكنك استخدام أي نقاط مكافأة في الوقت الحالي، اتصل بالمسؤول.',
            'use-can-use-only' => 'يمكنك استخدام فقط ',
            'warning-required-less-point' => 'يجب أن يكون استرداد نقاط المكافأة أقل من سعر المنتج.',
            'you-have-only' => 'لديك فقط ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'أهلاً وسهلاً وشكرًا لتسجيلك معنا!',
            'points-rewarded' => 'لقد حصلت على :points نقاط لتسجيلك',
            'subject' => 'تسجيل عميل جديد',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'review' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'شكرًا لمراجعتك ل :product_name!',
            'points-rewarded' => 'لقد حصلت على :points نقاط لمراجعتك',
            'subject' => 'مراجعة العميل',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'dob' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'عيد ميلاد سعيد!',
            'points-rewarded' => 'لقد حصلت على :points نقاط لعيد ميلادك',
            'subject' => 'تاريخ ميلاد العميل',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'pending' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'شكرًا لطلبك المنتجات من موقعنا!',
            'points-rewarded' => 'بعد الموافقة على طلب رقم #:order_id يمكنك استخدام :points نقاط',
            'status' => 'معلق',
            'subject' => 'طلب العميل',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'used' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'شكرًا لاستخدامك نقاط المكافآت لشراء المنتجات من موقعنا!',
            'points-rewarded' => 'لقد استخدمت :points نقاط لطلب رقم #:order_id',
            'status' => 'مستخدم',
            'subject' => 'استخدام نقاط المكافآت من قبل العميل',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'approved' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'تمت الموافقة على نقاط المكافآت الخاصة بك!',
            'points-rewarded' => 'لقد حصلت على :points نقاط لطلب رقم #:order_id',
            'status' => 'موافق عليه',
            'subject' => 'تمت الموافقة على نقاط المكافآت',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'processing' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'تغيرت الحالة إلى معالجة في :date!',
            'points-rewarded' => 'تغيرت الحالة للطلب رقم #:order_id',
            'status' => 'موافق عليه',
            'subject' => 'معالجة نقاط المكافآت',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'expire' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'تغيرت الحالة إلى منتهية في :date!',
            'points-rewarded' => 'تغيرت الحالة للطلب رقم #:order_id',
            'status' => 'منتهية',
            'subject' => 'انتهاء صلاحية نقاط المكافآت',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'closed' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'تغيرت الحالة إلى مغلقة في :date!',
            'points-rewarded' => 'تغيرت الحالة إلى مغلقة لطلب رقم #:order_id',
            'status' => 'مغلق',
            'subject' => 'نقاط المكافآت منتهية الصلاحية',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'cancel' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'تم إلغاء نقاط المكافآت الخاصة بك في :date!',
            'points-rewarded' => 'لقد قمت بإلغاء :points لطلب رقم #:order_id',
            'status' => 'ملغى',
            'subject' => 'نقاط المكافآت ملغاة',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],

        'fraud' => [
            'dear' => 'عزيزي :customer_name',
            'greeting' => 'تغيرت الحالة إلى احتيال!',
            'points-rewarded' => 'لقد قمت بإلغاء :points لطلب رقم #:order_id في :date',
            'status' => 'احتيال',
            'subject' => 'احتيال نقاط المكافآت',
            'thanks' => 'شكرًا!',
            'total-point-left' => 'لديك :total_reward_points نقاط متبقية',
            'used-points' => 'لقد استخدمت :used_reward_points نقاط',
        ],
    ],
];
