<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'रिडेम्प्शन सेटिंग्स',
                    'reward-point-on-attribute' => 'विशेषता पर रिवार्ड पॉइंट',
                    'reward-point-on-cart' => 'कार्ट पर रिवार्ड पॉइंट',
                    'reward-point-on-category-for-specific-time' => 'निर्दिष्ट समय के लिए श्रेणी पर रिवार्ड पॉइंट',
                    'reward-point-on-category' => 'श्रेणी पर रिवार्ड पॉइंट',
                    'reward-point-on-product-for-specific-time' => 'निर्दिष्ट समय के लिए उत्पाद पर रिवार्ड पॉइंट',
                    'reward-point-on-product' => 'उत्पाद पर रिवार्ड पॉइंट',
                    'reward-point' => 'रिवार्ड पॉइंट',
                    'reward-system-details' => 'रिवार्ड सिस्टम विवरण',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'ग्राहक की गतिविधि पर नज़र रखने और भविष्य में छूट या लाभों के लिए उन्हें पॉइंट्स के साथ पुरस्कृत करने का प्रोग्राम सेट करें।',
                    'setting' => 'सेटिंग',
                    'title' => 'रिवार्ड पॉइंट',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name को सफलतापूर्वक हटाया गया।',
                            'email-notification' => 'ईमेल नोटिफिकेशन',
                            'reward-used-at-one-time' => 'एक बार में इस्तेमाल की गई रिवार्ड पॉइंट',
                            'reward-when-customer-dob-exp-days' => 'कितने दिनों बाद ग्राहक की जन्मतिथि पर रिवार्ड पॉइंट समाप्त होगी',
                            'reward-when-customer-dob' => 'ग्राहक की जन्मतिथि पर रिवार्ड',
                            'reward-when-customer-register-exp-days' => 'कितने दिनों बाद ग्राहक के पंजीकरण पर रिवार्ड पॉइंट समाप्त होगी',
                            'reward-when-customer-register' => 'ग्राहक के पंजीकरण पर रिवार्ड',
                            'reward-when-product-reviewed-exp-days' => 'कितने दिनों बाद उत्पाद समीक्षा पर रिवार्ड पॉइंट समाप्त होगी',
                            'reward-when-product-reviewed' => 'उत्पाद की समीक्षा पर रिवार्ड',
                            'status' => 'मॉड्यूल स्थिति',
                            'update-success' => ':name को सफलतापूर्वक अपडेट किया गया।',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'उत्पाद इनाम बनाएं',
                    'create-success' => 'उत्पाद इनाम सफलतापूर्वक बनाया गया',
                    'delete-failed' => 'उत्पाद इनाम हटाया नहीं जा सका!',
                    'delete-success' => 'उत्पाद इनाम सफलतापूर्वक हटाया गया',
                    'error-product' => 'कोई उत्पाद चयनित नहीं किया गया है',
                    'title' => 'उत्पाद पर इनाम अंक',
                    'update-success' => 'उत्पाद इनाम सफलतापूर्वक अपडेट किया गया',

                    'datagrid' => [
                        'delete' => 'हटाएं',
                        'edit' => 'संपादित करें',
                        'end-date' => 'अंतिम तिथि',
                        'id' => 'आईडी',
                        'mass-delete-success' => 'उत्पाद इनाम सफलतापूर्वक हटाया गया',
                        'mass-update-success' => 'उत्पाद इनाम सफलतापूर्वक अपडेट किया गया',
                        'name' => 'नाम',
                        'reward-points' => 'इनाम अंक',
                        'sku' => 'SKU',
                        'start-date' => 'प्रारंभ तिथि',
                        'status' => 'स्थिति',
                        'update-status' => 'स्थिति अपडेट करें',

                        'options' => [
                            'active' => 'सक्रिय',
                            'inactive' => 'निष्क्रिय',
                        ],
                    ],

                    'create' => [
                        'active' => 'सक्रिय',
                        'create-btn' => 'विशिष्ट उत्पाद इनाम बनाएं',
                        'end-date' => 'अंतिम तिथि',
                        'enter-reward-points' => 'इनाम अंक दर्ज करें',
                        'inactive' => 'निष्क्रिय',
                        'save-btn' => 'उत्पाद इनाम सहेजें',
                        'select-product' => 'उत्पाद चुनें',
                        'select-status' => 'स्थिति चुनें',
                        'start-date' => 'प्रारंभ तिथि',
                        'status' => 'स्थिति',
                        'title' => 'उत्पाद पर इनाम अंक',
                    ],

                    'edit' => [
                        'active' => 'सक्रिय',
                        'create-btn' => 'विशिष्ट उत्पाद इनाम बनाएं',
                        'end-date' => 'अंतिम तिथि',
                        'enter-reward-points' => 'इनाम अंक दर्ज करें',
                        'inactive' => 'निष्क्रिय',
                        'save-btn' => 'उत्पाद इनाम अपडेट करें',
                        'select-product' => 'उत्पाद चुनें',
                        'select-status' => 'स्थिति चुनें',
                        'start-date' => 'प्रारंभ तिथि',
                        'status' => 'स्थिति',
                        'title' => 'उत्पाद पर इनाम अंक',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'उत्पाद इनाम बनाएं',
                    'title' => 'विशिष्ट समय के लिए उत्पाद पर इनाम अंक',

                    'create' => [
                        'create-btn' => 'विशिष्ट समय के लिए इनाम बनाएं',
                        'save-btn' => 'विशिष्ट समय के लिए उत्पाद इनाम सहेजें',
                        'title' => 'विशिष्ट समय के लिए इनाम जोड़ें',
                    ],

                    'edit' => [
                        'save-btn' => 'विशिष्ट समय के लिए उत्पाद इनाम अपडेट करें',
                        'title' => 'विशिष्ट समय के लिए इनाम संपादित करें',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'श्रेणी इनाम बनाएं',
                    'category-specific-time' => 'विशिष्ट समय के लिए श्रेणी',
                    'create-success' => 'श्रेणी इनाम सफलतापूर्वक बनाया गया',
                    'delete-failed' => 'श्रेणी इनाम हटाया नहीं जा सका!',
                    'delete-success' => 'श्रेणी इनाम सफलतापूर्वक हटाया गया',
                    'error-category' => 'कोई श्रेणी चयनित नहीं की गई है',
                    'specific-title' => 'विशिष्ट श्रेणी इनाम बनाएं',
                    'title' => 'श्रेणी पर इनाम अंक',
                    'update-success' => 'श्रेणी इनाम सफलतापूर्वक अपडेट किया गया',

                    'datagrid' => [
                        'delete' => 'हटाएं',
                        'edit' => 'संपादित करें',
                        'end-date' => 'अंतिम तिथि',
                        'id' => 'आईडी',
                        'mass-delete-success' => 'श्रेणी इनाम सफलतापूर्वक हटाया गया',
                        'mass-update-success' => 'श्रेणी इनाम सफलतापूर्वक अपडेट किया गया',
                        'name' => 'नाम',
                        'reward-points' => 'इनाम अंक',
                        'sku' => 'SKU',
                        'start-date' => 'प्रारंभ तिथि',
                        'status' => 'स्थिति',
                        'update-status' => 'स्थिति अपडेट करें',

                        'options' => [
                            'active' => 'सक्रिय',
                            'inactive' => 'निष्क्रिय',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'सक्रिय',
                    'add-btn' => 'श्रेणी इनाम बनाएं',
                    'end-date' => 'अंतिम तिथि',
                    'enter-reward-points' => 'इनाम अंक दर्ज करें',
                    'inactive' => 'निष्क्रिय',
                    'save-btn' => 'श्रेणी इनाम सहेजें',
                    'select-category' => 'श्रेणी चुनें',
                    'select-status' => 'स्थिति चुनें',
                    'start-date' => 'प्रारंभ तिथि',
                    'status' => 'स्थिति',
                    'title' => 'श्रेणी पर इनाम अंक जोड़ें',
                ],

                'edit' => [
                    'active' => 'सक्रिय',
                    'add-btn' => 'श्रेणी इनाम बनाएं',
                    'end-date' => 'अंतिम तिथि',
                    'enter-reward-points' => 'इनाम अंक दर्ज करें',
                    'inactive' => 'निष्क्रिय',
                    'save-btn' => 'श्रेणी इनाम अपडेट करें',
                    'select-category' => 'श्रेणी चुनें',
                    'select-status' => 'स्थिति चुनें',
                    'start-date' => 'प्रारंभ तिथि',
                    'status' => 'स्थिति',
                    'title' => 'श्रेणी पर इनाम अंक संपादित करें',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'विशिष्ट समय के लिए श्रेणी इनाम बनाएं',
                    'category-specific-time' => 'विशिष्ट समय के लिए श्रेणी',
                    'title' => 'विशिष्ट समय के लिए श्रेणी पर इनाम अंक',
                ],

                'create' => [
                    'save-btn' => 'विशिष्ट समय के लिए श्रेणी इनाम सहेजें',
                    'title' => 'विशिष्ट समय के लिए श्रेणी पर इनाम अंक जोड़ें',
                ],

                'edit' => [
                    'save-btn' => 'विशिष्ट समय के लिए श्रेणी इनाम अपडेट करें',
                    'title' => 'विशिष्ट समय के लिए श्रेणी पर इनाम अंक संपादित करें',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'कार्ट में इनाम अंक जोड़ें',
                    'create-success' => 'कार्ट पुरस्कार सफलतापूर्वक बनाया गया',
                    'delete-failed' => 'कार्ट पुरस्कार हटाया नहीं जा सका!',
                    'delete-success' => 'कार्ट पुरस्कार सफलतापूर्वक हटाया गया',
                    'error-cart' => 'कोई कार्ट चयनित नहीं है',
                    'title' => 'कार्ट में इनाम अंक',
                    'update-success' => 'कार्ट पुरस्कार सफलतापूर्वक अपडेट किया गया',

                    'datagrid' => [
                        'amount-from' => 'राशि से',
                        'amount-to' => 'राशि तक',
                        'delete' => 'हटाएँ',
                        'edit' => 'संपादित करें',
                        'end-date' => 'समाप्ति तिथि',
                        'id' => 'आईडी',
                        'mass-delete-success' => 'कार्ट पुरस्कार सफलतापूर्वक हटाया गया',
                        'mass-update-success' => 'कार्ट पुरस्कार सफलतापूर्वक अपडेट किया गया',
                        'name' => 'नाम',
                        'reward-points' => 'इनाम अंक',
                        'sku' => 'SKU',
                        'start-date' => 'आरंभ तिथि',
                        'status' => 'स्थिति',
                        'update-status' => 'अपडेट करें',

                        'options' => [
                            'active' => 'सक्रिय',
                            'inactive' => 'निष्क्रिय',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'सक्रिय',
                    'add-btn' => 'कार्ट में इनाम अंक जोड़ें',
                    'amount-from' => 'राशि से',
                    'amount-to' => 'राशि तक',
                    'end-date' => 'समाप्ति तिथि',
                    'enter-reward-points' => 'इनाम अंक दर्ज करें',
                    'inactive' => 'निष्क्रिय',
                    'save-btn' => 'कार्ट पुरस्कार सहेजें',
                    'select-status' => 'स्थिति चुनें',
                    'start-date' => 'आरंभ तिथि',
                    'status' => 'स्थिति',
                    'title' => 'कार्ट में इनाम अंक जोड़ें',
                ],

                'edit' => [
                    'active' => 'सक्रिय',
                    'add-btn' => 'कार्ट में इनाम अंक जोड़ें',
                    'amount-from' => 'राशि से',
                    'amount-to' => 'राशि तक',
                    'end-date' => 'समाप्ति तिथि',
                    'enter-reward-points' => 'इनाम अंक दर्ज करें',
                    'inactive' => 'निष्क्रिय',
                    'save-btn' => 'कार्ट पुरस्कार अपडेट करें',
                    'select-status' => 'स्थिति चुनें',
                    'start-date' => 'आरंभ तिथि',
                    'status' => 'स्थिति',
                    'title' => 'कार्ट में इनाम अंक संपादित करें',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'विशेषता में इनाम अंक जोड़ें',
                    'create-success' => 'विशेषता इनाम सफलतापूर्वक बनाई गई',
                    'delete-failed' => 'विशेषता को हटाने में विफल!',
                    'delete-success' => 'विशेषता सफलतापूर्वक हटा दी गई',
                    'error-cart' => 'कोई विशेषता चयनित नहीं है',
                    'title' => 'विशेषताओं के लिए इनाम अंक',
                    'update-success' => 'विशेषता इनाम सफलतापूर्वक अपडेट की गई',

                    'datagrid' => [
                        'code' => 'कोड',
                        'delete' => 'हटाएं',
                        'edit' => 'संपादित करें',
                        'id' => 'ID',
                        'mass-delete-success' => 'विशेषता सफलतापूर्वक हटा दी गई',
                        'mass-update-success' => 'विशेषता सफलतापूर्वक अपडेट की गई',
                        'name' => 'नाम',
                        'reward-points' => 'इनाम अंक',
                        'sku' => 'SKU कोड',
                        'status' => 'स्थिति',
                        'update-status' => 'अपडेट करें',

                        'options' => [
                            'active' => 'सक्रिय',
                            'inactive' => 'निष्क्रिय',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'सक्रिय',
                    'enter-reward-points' => 'इनाम अंक दर्ज करें',
                    'inactive' => 'निष्क्रिय',
                    'reward_points' => 'विशेषता अंक',
                    'save-btn' => 'विशेषता पर इनाम अंक सहेजें',
                    'select-attributes' => 'विशेषता चुनें',
                    'select-status' => 'स्थिति चुनें',
                    'status' => 'स्थिति',
                    'title' => 'विशेषताओं पर इनाम अंक',
                ],

                'edit' => [
                    'active' => 'सक्रिय',
                    'edit-btn' => 'विशेषता पर इनाम अंक संपादित करें',
                    'enter-reward-points' => 'इनाम अंक दर्ज करें',
                    'inactive' => 'निष्क्रिय',
                    'reward_points' => 'विशेषता अंक',
                    'select-attributes' => 'विशेषता चुनें',
                    'select-status' => 'स्थिति चुनें',
                    'status' => 'स्थिति',
                    'title' => 'विशेषताओं पर इनाम अंक',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'इनाम प्रणाली की जानकारी',

                    'datagrid' => [
                        'active' => 'सक्रिय',
                        'id' => 'ID',
                        'inactive' => 'निष्क्रिय',
                        'name' => 'नाम',
                        'reward-points' => 'इनाम अंक',
                        'status' => 'स्थिति',
                        'used-rewards-points' => 'उपयोग किए गए इनाम अंक',
                        'view' => 'देखें',
                    ],
                ],

                'view' => [
                    'title' => 'इनाम प्रणाली की जानकारी',

                    'datagrid' => [
                        'approved' => 'स्वीकृत',
                        'attribute-id' => 'विशेषता ID',
                        'canceled' => 'रद्द',
                        'category-id' => 'श्रेणी ID',
                        'closed' => 'बंद',
                        'created-at' => 'सृजन तिथि',
                        'exp-date' => 'समाप्ति तिथि',
                        'expire' => 'समाप्त',
                        'fraud' => 'धोखाधड़ी',
                        'id' => 'ID',
                        'name' => 'नाम',
                        'note' => 'नोट',
                        'order-id' => 'आदेश ID',
                        'pending' => 'लंबित',
                        'processing' => 'प्रसंस्करण',
                        'product-id' => 'उत्पाद ID',
                        'reward-points' => 'इनाम अंक',
                        'status' => 'स्थिति',
                        'total-reward-points' => 'कुल इनाम अंक',
                        'used' => 'उपयोग किए गए',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'कुल कार्ट के लिए रूपांतरण दर',
                    'conversion' => 'रूपांतरण दर',
                    'enable-apply-points-label' => 'चेकआउट पर ग्राहकों को अंक लागू करने की अनुमति दें',
                    'enable-apply-points' => 'चेकआउट पर अंक लागू करने को सक्षम करें',
                    'points' => 'अंक',
                    'redemption-cart-label' => 'खरीदारी पर ग्राहकों को अंक लागू करने की अनुमति दें',
                    'redemption-cart' => 'कुल कार्ट के लिए रूपांतरण',
                    'save-btn' => 'सहेजें',
                    'title' => 'इनाम प्रणाली की जानकारी',
                    'update-success' => 'रिडेम्पशन सेटिंग्स सफलतापूर्वक अपडेट की गईं',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'इनाम अंक',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'आपके इनाम अंक',

                        'datagrid' => [
                            'approved' => 'स्वीकृत',
                            'attribute-id' => 'विशेषता आईडी',
                            'canceled' => 'रद्द',
                            'category-id' => 'श्रेणी आईडी',
                            'closed' => 'बंद',
                            'created-at' => 'लेनदेन की तारीख',
                            'exp-date' => 'समाप्ति तिथि',
                            'expire' => 'समाप्त',
                            'fraud' => 'धोखाधड़ी',
                            'id' => 'आईडी',
                            'name' => 'नाम',
                            'note' => 'नोट',
                            'order-id' => 'आदेश आईडी',
                            'pending' => 'लंबित',
                            'processing' => 'प्रसंस्करण',
                            'product-id' => 'उत्पाद आईडी',
                            'reward-points' => 'इनाम अंक',
                            'status' => 'स्थिति',
                            'total-reward-points' => 'कुल इनाम अंक',
                            'used' => 'उपयोग किया गया',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'इस उत्पाद को खरीदें और प्राप्त करें :reward अंक। ऑफर :end_date तक मान्य है',
            'product-reward' => 'इस उत्पाद को खरीदें और प्राप्त करें :reward अंक',

            'review' => [
                'review-points' => 'समीक्षा लिखें और प्राप्त करें :points अंक',
            ],
        ],

        'register' => [
            'register-reward' => 'हमारे परिवार के सदस्य के रूप में पंजीकृत हों और प्राप्त करें :points अंक',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'इनाम अंक',
                    'reward-points-earned' => 'प्राप्त इनाम अंक',

                    'summary' => [
                        'reward_points' => 'कुल इनाम अंक',
                    ],
                ],

                'points' => [
                    'apply-points' => 'अंक लागू करें',
                    'button-title' => 'लागू करें',
                    'enter-points' => 'अंक दर्ज करें',
                    'reward-points' => 'इनाम अंक लागू करें',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'पॉइंट्स लागू करें',
            'enter-points' => 'पॉइंट्स दर्ज करें',
            'points-used' => 'उपयोग किए गए पॉइंट्स',
            'redemption-setting' => 'जानकारी: :points पॉइंट(्स) बराबर :conversion_rate',
            'total-point' => 'आपके कुल पॉइंट्स :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'पॉइंट्स लागू नहीं कर सकते',
            'grandtotal' => 'कुल',
            'invalid-points' => 'पॉइंट्स का क्षेत्र आवश्यक है',
            'only-number' => 'पॉइंट्स का क्षेत्र 1 या अधिक होना चाहिए',
            'points-applied' => 'लागू किए गए पॉइंट्स',
            'points-apply-issue' => 'पॉइंट्स कोड लागू नहीं किया जा सकता।',
            'points' => 'पॉइंट्स',
            'redem-points' => 'पॉइंट्स का रिडेम्पशन (-)',
            'remove-points' => 'पॉइंट्स हटाएं',
            'success-points' => 'पॉइंट्स कोड सफलतापूर्वक लागू किया गया।',
            'total-reward-points-awarded' => 'कुल पुरस्कार पॉइंट्स दिए गए',
            'unauthorized-use-points' => 'आप इस समय किसी भी पुरस्कार पॉइंट्स का उपयोग नहीं कर सकते, व्यवस्थापक से संपर्क करें।',
            'use-can-use-only' => 'आप केवल उपयोग कर सकते हैं ',
            'warning-required-less-point' => 'पुरस्कार पॉइंट्स का रिडेम्पशन उत्पाद की कीमत से कम होना चाहिए।',
            'you-have-only' => 'आपके पास केवल ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'स्वागत है और हमारे साथ पंजीकरण के लिए धन्यवाद!',
            'points-rewarded' => 'आपको पंजीकरण के लिए :points अंक प्राप्त हुए हैं',
            'subject' => 'नया ग्राहक पंजीकरण',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'review' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => ':product_name पर समीक्षा देने के लिए धन्यवाद!',
            'points-rewarded' => 'समीक्षा के लिए आपको :points अंक प्राप्त हुए हैं',
            'subject' => 'ग्राहक समीक्षा',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'dob' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'जन्मदिन की शुभकामनाएँ!',
            'points-rewarded' => 'जन्मदिन के लिए आपको :points अंक प्राप्त हुए हैं',
            'subject' => 'ग्राहक की जन्मतिथि',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'pending' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'हमारी वेबसाइट से उत्पादों के ऑर्डर के लिए धन्यवाद!',
            'points-rewarded' => 'ऑर्डर नंबर #:order_id के अनुमोदन के बाद आप :points अंक का उपयोग कर सकते हैं',
            'status' => 'लंबित',
            'subject' => 'ग्राहक आदेश',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'used' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'हमारी वेबसाइट से उत्पाद खरीदने के लिए पुरस्कार अंकों का उपयोग करने के लिए धन्यवाद!',
            'points-rewarded' => 'ऑर्डर नंबर #:order_id के लिए आपने :points अंक का उपयोग किया है',
            'status' => 'वह उपयोग हुआ',
            'subject' => 'ग्राहक पुरस्कार अंकों का उपयोग',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'approved' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'आपके पुरस्कार अंक स्वीकृत हो गए हैं!',
            'points-rewarded' => 'ऑर्डर नंबर #:order_id के लिए आपको :points अंक प्राप्त हुए हैं',
            'status' => 'स्वीकृत',
            'subject' => 'पुरस्कार अंक स्वीकृत',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'processing' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'स्थिति :date को प्रोसेसिंग में बदल दी गई है!',
            'points-rewarded' => 'स्थिति ऑर्डर नंबर #:order_id के लिए बदल दी गई है',
            'status' => 'स्वीकृत',
            'subject' => 'पुरस्कार अंकों की प्रक्रिया',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'expire' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'स्थिति :date को समाप्त हो गई!',
            'points-rewarded' => 'स्थिति ऑर्डर नंबर #:order_id के लिए बदल दी गई है',
            'status' => 'समाप्त',
            'subject' => 'पुरस्कार अंकों की समाप्ति',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'closed' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'स्थिति :date को बंद कर दी गई!',
            'points-rewarded' => 'स्थिति ऑर्डर नंबर #:order_id के लिए बंद कर दी गई',
            'status' => 'बंद',
            'subject' => 'पुरस्कार अंकों की समाप्ति',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'cancel' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'आपके पुरस्कार अंक :date को रद्द कर दिए गए हैं!',
            'points-rewarded' => 'ऑर्डर नंबर #:order_id के लिए आपने :points अंक रद्द किए हैं',
            'status' => 'रद्द',
            'subject' => 'पुरस्कार अंकों की रद्दीकरण',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],

        'fraud' => [
            'dear' => 'प्रिय :customer_name',
            'greeting' => 'स्थिति धोखाधड़ी में बदल गई!',
            'points-rewarded' => 'ऑर्डर नंबर #:order_id के लिए आपने :points अंक :date को रद्द किए हैं',
            'status' => 'धोखाधड़ी',
            'subject' => 'पुरस्कार अंकों में धोखाधड़ी',
            'thanks' => 'धन्यवाद!',
            'total-point-left' => 'आपके पास :total_reward_points अंक बचे हैं',
            'used-points' => 'आपने :used_reward_points अंक का उपयोग किया है',
        ],
    ],
];
