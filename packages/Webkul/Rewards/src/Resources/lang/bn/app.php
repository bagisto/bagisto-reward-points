<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'রিডেম্পশন সেটিংস',
                    'reward-point-on-attribute' => 'অ্যাট্রিবিউটে রিওয়ার্ড পয়েন্ট',
                    'reward-point-on-cart' => 'কার্টে রিওয়ার্ড পয়েন্ট',
                    'reward-point-on-category-for-specific-time' => 'নির্দিষ্ট সময়ের জন্য ক্যাটাগরিতে রিওয়ার্ড পয়েন্ট',
                    'reward-point-on-category' => 'ক্যাটাগরিতে রিওয়ার্ড পয়েন্ট',
                    'reward-point-on-product-for-specific-time' => 'নির্দিষ্ট সময়ের জন্য প্রোডাক্টে রিওয়ার্ড পয়েন্ট',
                    'reward-point-on-product' => 'প্রোডাক্টে রিওয়ার্ড পয়েন্ট',
                    'reward-point' => 'রিওয়ার্ড পয়েন্ট',
                    'reward-system-details' => 'রিওয়ার্ড সিস্টেমের বিবরণ',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'গ্রাহকের কার্যক্রম ট্র্যাক করে এবং ভবিষ্যতের ছাড় বা সুবিধার জন্য পয়েন্ট দিয়ে তাদের পুরস্কৃত করার প্রোগ্রাম সেট করুন।',
                    'setting' => 'সেটিং',
                    'title' => 'রিওয়ার্ড পয়েন্ট',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name সফলভাবে মুছে ফেলা হয়েছে।',
                            'email-notification' => 'ইমেল বিজ্ঞপ্তি',
                            'reward-used-at-one-time' => 'একবারে ব্যবহৃত রিওয়ার্ড পয়েন্ট',
                            'reward-when-customer-dob-exp-days' => 'কতদিন পরে গ্রাহকের জন্মতারিখে রিওয়ার্ড পয়েন্ট মেয়াদোত্তীর্ণ হবে',
                            'reward-when-customer-dob' => 'গ্রাহকের জন্মতারিখে রিওয়ার্ড',
                            'reward-when-customer-register-exp-days' => 'কতদিন পরে গ্রাহকের নিবন্ধনে রিওয়ার্ড পয়েন্ট মেয়াদোত্তীর্ণ হবে',
                            'reward-when-customer-register' => 'গ্রাহক নিবন্ধন করলে রিওয়ার্ড',
                            'reward-when-product-reviewed-exp-days' => 'কতদিন পরে প্রোডাক্ট রিভিউয়ে রিওয়ার্ড পয়েন্ট মেয়াদোত্তীর্ণ হবে',
                            'reward-when-product-reviewed' => 'প্রোডাক্ট রিভিউ হলে রিওয়ার্ড',
                            'status' => 'মডিউল স্ট্যাটাস',
                            'update-success' => ':name সফলভাবে আপডেট হয়েছে।',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'পণ্য রিওয়ার্ড তৈরি করুন',
                    'create-success' => 'পণ্য রিওয়ার্ড সফলভাবে তৈরি হয়েছে',
                    'delete-failed' => 'পণ্য রিওয়ার্ড মুছতে ব্যর্থ!',
                    'delete-success' => 'পণ্য রিওয়ার্ড সফলভাবে মুছে ফেলা হয়েছে',
                    'error-product' => 'কোন পণ্য নির্বাচন করা হয়নি',
                    'title' => 'পণ্যের উপর রিওয়ার্ড পয়েন্ট',
                    'update-success' => 'পণ্য রিওয়ার্ড সফলভাবে আপডেট হয়েছে',

                    'datagrid' => [
                        'delete' => 'মুছুন',
                        'edit' => 'সম্পাদনা',
                        'end-date' => 'শেষ তারিখ',
                        'id' => 'আইডি',
                        'mass-delete-success' => 'পণ্য রিওয়ার্ড সফলভাবে মুছে ফেলা হয়েছে',
                        'mass-update-success' => 'পণ্য রিওয়ার্ড সফলভাবে আপডেট হয়েছে',
                        'name' => 'নাম',
                        'reward-points' => 'রিওয়ার্ড পয়েন্ট',
                        'sku' => 'এসকেইউ',
                        'start-date' => 'শুরু তারিখ',
                        'status' => 'স্থিতি',
                        'update-status' => 'স্থিতি আপডেট করুন',

                        'options' => [
                            'active' => 'সক্রিয়',
                            'inactive' => 'নিষ্ক্রিয়',
                        ],
                    ],

                    'create' => [
                        'active' => 'সক্রিয়',
                        'create-btn' => 'পণ্য নির্দিষ্ট রিওয়ার্ড তৈরি করুন',
                        'end-date' => 'শেষ তারিখ',
                        'enter-reward-points' => 'রিওয়ার্ড পয়েন্ট লিখুন',
                        'inactive' => 'নিষ্ক্রিয়',
                        'save-btn' => 'পণ্য রিওয়ার্ড সংরক্ষণ করুন',
                        'select-product' => 'পণ্য নির্বাচন করুন',
                        'select-status' => 'স্থিতি নির্বাচন করুন',
                        'start-date' => 'শুরু তারিখ',
                        'status' => 'স্থিতি',
                        'title' => 'পণ্যের উপর রিওয়ার্ড পয়েন্ট',
                    ],

                    'edit' => [
                        'active' => 'সক্রিয়',
                        'create-btn' => 'পণ্য নির্দিষ্ট রিওয়ার্ড তৈরি করুন',
                        'end-date' => 'শেষ তারিখ',
                        'enter-reward-points' => 'রিওয়ার্ড পয়েন্ট লিখুন',
                        'inactive' => 'নিষ্ক্রিয়',
                        'save-btn' => 'পণ্য রিওয়ার্ড আপডেট করুন',
                        'select-product' => 'পণ্য নির্বাচন করুন',
                        'select-status' => 'স্থিতি নির্বাচন করুন',
                        'start-date' => 'শুরু তারিখ',
                        'status' => 'স্থিতি',
                        'title' => 'পণ্যের উপর রিওয়ার্ড পয়েন্ট',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'পণ্য রিওয়ার্ড তৈরি করুন',
                    'title' => 'নির্দিষ্ট সময়ের জন্য পণ্য রিওয়ার্ড',

                    'create' => [
                        'create-btn' => 'নির্দিষ্ট সময়ের জন্য রিওয়ার্ড তৈরি করুন',
                        'save-btn' => 'নির্দিষ্ট সময়ের জন্য পণ্য রিওয়ার্ড সংরক্ষণ করুন',
                        'title' => 'নির্দিষ্ট সময়ের জন্য রিওয়ার্ড যোগ করুন',
                    ],

                    'edit' => [
                        'save-btn' => 'নির্দিষ্ট সময়ের জন্য পণ্য রিওয়ার্ড আপডেট করুন',
                        'title' => 'নির্দিষ্ট সময়ের জন্য পণ্য রিওয়ার্ড সম্পাদনা করুন',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'বিভাগ রিওয়ার্ড তৈরি করুন',
                    'category-specific-time' => 'বিভাগ নির্দিষ্ট সময়',
                    'create-success' => 'বিভাগ রিওয়ার্ড সফলভাবে তৈরি হয়েছে',
                    'delete-failed' => 'বিভাগ রিওয়ার্ড মুছতে ব্যর্থ!',
                    'delete-success' => 'বিভাগ রিওয়ার্ড সফলভাবে মুছে ফেলা হয়েছে',
                    'error-category' => 'কোন বিভাগ নির্বাচন করা হয়নি',
                    'specific-title' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড তৈরি করুন',
                    'title' => 'বিভাগের উপর রিওয়ার্ড পয়েন্ট',
                    'update-success' => 'বিভাগ রিওয়ার্ড সফলভাবে আপডেট হয়েছে',

                    'datagrid' => [
                        'delete' => 'মুছুন',
                        'edit' => 'সম্পাদনা',
                        'end-date' => 'শেষ তারিখ',
                        'id' => 'আইডি',
                        'mass-delete-success' => 'বিভাগ রিওয়ার্ড সফলভাবে মুছে ফেলা হয়েছে',
                        'mass-update-success' => 'বিভাগ রিওয়ার্ড সফলভাবে আপডেট হয়েছে',
                        'name' => 'নাম',
                        'reward-points' => 'রিওয়ার্ড পয়েন্ট',
                        'sku' => 'এসকেইউ',
                        'start-date' => 'শুরু তারিখ',
                        'status' => 'স্থিতি',
                        'update-status' => 'স্থিতি আপডেট করুন',

                        'options' => [
                            'active' => 'সক্রিয়',
                            'inactive' => 'নিষ্ক্রিয়',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'সক্রিয়',
                    'add-btn' => 'বিভাগ রিওয়ার্ড তৈরি করুন',
                    'end-date' => 'শেষ তারিখ',
                    'enter-reward-points' => 'রিওয়ার্ড পয়েন্ট লিখুন',
                    'inactive' => 'নিষ্ক্রিয়',
                    'save-btn' => 'বিভাগ রিওয়ার্ড সংরক্ষণ করুন',
                    'select-category' => 'বিভাগ নির্বাচন করুন',
                    'select-status' => 'স্থিতি নির্বাচন করুন',
                    'start-date' => 'শুরু তারিখ',
                    'status' => 'স্থিতি',
                    'title' => 'বিভাগের উপর রিওয়ার্ড পয়েন্ট যোগ করুন',
                ],

                'edit' => [
                    'active' => 'সক্রিয়',
                    'add-btn' => 'বিভাগ রিওয়ার্ড তৈরি করুন',
                    'end-date' => 'শেষ তারিখ',
                    'enter-reward-points' => 'রিওয়ার্ড পয়েন্ট লিখুন',
                    'inactive' => 'নিষ্ক্রিয়',
                    'save-btn' => 'বিভাগ রিওয়ার্ড আপডেট করুন',
                    'select-category' => 'বিভাগ নির্বাচন করুন',
                    'select-status' => 'স্থিতি নির্বাচন করুন',
                    'start-date' => 'শুরু তারিখ',
                    'status' => 'স্থিতি',
                    'title' => 'বিভাগের উপর রিওয়ার্ড পয়েন্ট সম্পাদনা করুন',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড তৈরি করুন',
                    'category-specific-time' => 'বিভাগ নির্দিষ্ট সময়',
                    'title' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড',
                ],

                'create' => [
                    'save-btn' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড সংরক্ষণ করুন',
                    'title' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড যোগ করুন',
                ],

                'edit' => [
                    'save-btn' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড আপডেট করুন',
                    'title' => 'নির্দিষ্ট সময়ের জন্য বিভাগ রিওয়ার্ড সম্পাদনা করুন',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'কার্টে পুরস্কারের পয়েন্ট যোগ করুন',
                    'create-success' => 'কার্ট পুরস্কার সফলভাবে তৈরি হয়েছে',
                    'delete-failed' => 'কার্ট পুরস্কার মুছে ফেলা যায়নি!',
                    'delete-success' => 'কার্ট পুরস্কার সফলভাবে মুছে ফেলা হয়েছে',
                    'error-cart' => 'কোনো কার্ট নির্বাচিত নয়',
                    'title' => 'কার্টে পুরস্কারের পয়েন্ট',
                    'update-success' => 'কার্ট পুরস্কার সফলভাবে আপডেট হয়েছে',

                    'datagrid' => [
                        'amount-from' => 'পরিমাণ থেকে',
                        'amount-to' => 'পরিমাণ পর্যন্ত',
                        'delete' => 'মুছে ফেলুন',
                        'edit' => 'সম্পাদনা',
                        'end-date' => 'শেষ তারিখ',
                        'id' => 'আইডি',
                        'mass-delete-success' => 'কার্ট পুরস্কার সফলভাবে মুছে ফেলা হয়েছে',
                        'mass-update-success' => 'কার্ট পুরস্কার সফলভাবে আপডেট হয়েছে',
                        'name' => 'নাম',
                        'reward-points' => 'পুরস্কার পয়েন্ট',
                        'sku' => 'SKU',
                        'start-date' => 'শুরু তারিখ',
                        'status' => 'অবস্থা',
                        'update-status' => 'আপডেট',

                        'options' => [
                            'active' => 'সক্রিয়',
                            'inactive' => 'নিষ্ক্রিয়',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'সক্রিয়',
                    'add-btn' => 'কার্টে পুরস্কারের পয়েন্ট যোগ করুন',
                    'amount-from' => 'পরিমাণ থেকে',
                    'amount-to' => 'পরিমাণ পর্যন্ত',
                    'end-date' => 'শেষ তারিখ',
                    'enter-reward-points' => 'পুরস্কার পয়েন্ট প্রবেশ করুন',
                    'inactive' => 'নিষ্ক্রিয়',
                    'save-btn' => 'কার্ট পুরস্কার সংরক্ষণ করুন',
                    'select-status' => 'অবস্থা নির্বাচন করুন',
                    'start-date' => 'শুরু তারিখ',
                    'status' => 'অবস্থা',
                    'title' => 'কার্টে পুরস্কারের পয়েন্ট যোগ করুন',
                ],

                'edit' => [
                    'active' => 'সক্রিয়',
                    'add-btn' => 'কার্টে পুরস্কারের পয়েন্ট যোগ করুন',
                    'amount-from' => 'পরিমাণ থেকে',
                    'amount-to' => 'পরিমাণ পর্যন্ত',
                    'end-date' => 'শেষ তারিখ',
                    'enter-reward-points' => 'পুরস্কার পয়েন্ট প্রবেশ করুন',
                    'inactive' => 'নিষ্ক্রিয়',
                    'save-btn' => 'কার্ট পুরস্কার আপডেট করুন',
                    'select-status' => 'অবস্থা নির্বাচন করুন',
                    'start-date' => 'শুরু তারিখ',
                    'status' => 'অবস্থা',
                    'title' => 'কার্টে পুরস্কারের পয়েন্ট সম্পাদনা করুন',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'বৈশিষ্ট্যে পুরস্কার পয়েন্ট যোগ করুন',
                    'create-success' => 'বৈশিষ্ট্য পুরস্কার সফলভাবে তৈরি হয়েছে',
                    'delete-failed' => 'বৈশিষ্ট্য মুছতে ব্যর্থ!',
                    'delete-success' => 'বৈশিষ্ট্য সফলভাবে মুছে ফেলা হয়েছে',
                    'error-cart' => 'কোনো বৈশিষ্ট্য নির্বাচন করা হয়নি',
                    'title' => 'বৈশিষ্ট্যগুলির জন্য পুরস্কার পয়েন্ট',
                    'update-success' => 'বৈশিষ্ট্য পুরস্কার সফলভাবে আপডেট হয়েছে',

                    'datagrid' => [
                        'code' => 'কোড',
                        'delete' => 'মুছুন',
                        'edit' => 'সম্পাদনা',
                        'id' => 'আইডি',
                        'mass-delete-success' => 'বৈশিষ্ট্য সফলভাবে মুছে ফেলা হয়েছে',
                        'mass-update-success' => 'বৈশিষ্ট্য সফলভাবে আপডেট হয়েছে',
                        'name' => 'নাম',
                        'reward-points' => 'পুরস্কার পয়েন্ট',
                        'sku' => 'SKU কোড',
                        'status' => 'অবস্থা',
                        'update-status' => 'আপডেট',

                        'options' => [
                            'active' => 'সক্রিয়',
                            'inactive' => 'অক্রিয়',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'সক্রিয়',
                    'enter-reward-points' => 'পুরস্কার পয়েন্ট লিখুন',
                    'inactive' => 'অক্রিয়',
                    'reward_points' => 'বৈশিষ্ট্যের পয়েন্ট',
                    'save-btn' => 'বৈশিষ্ট্যে পুরস্কার পয়েন্ট সংরক্ষণ করুন',
                    'select-attributes' => 'বৈশিষ্ট্য নির্বাচন করুন',
                    'select-status' => 'অবস্থা নির্বাচন করুন',
                    'status' => 'অবস্থা',
                    'title' => 'বৈশিষ্ট্যগুলির জন্য পুরস্কার পয়েন্ট',
                ],

                'edit' => [
                    'active' => 'সক্রিয়',
                    'edit-btn' => 'বৈশিষ্ট্য পুরস্কার সম্পাদনা করুন',
                    'enter-reward-points' => 'পুরস্কার পয়েন্ট লিখুন',
                    'inactive' => 'অক্রিয়',
                    'reward_points' => 'বৈশিষ্ট্যের পয়েন্ট',
                    'select-attributes' => 'বৈশিষ্ট্য নির্বাচন করুন',
                    'select-status' => 'অবস্থা নির্বাচন করুন',
                    'status' => 'অবস্থা',
                    'title' => 'বৈশিষ্ট্যগুলির জন্য পুরস্কার পয়েন্ট',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'পুরস্কার সিস্টেমের বিস্তারিত',

                    'datagrid' => [
                        'active' => 'সক্রিয়',
                        'id' => 'আইডি',
                        'inactive' => 'অক্রিয়',
                        'name' => 'নাম',
                        'reward-points' => 'পুরস্কার পয়েন্ট',
                        'status' => 'অবস্থা',
                        'used-rewards-points' => 'ব্যবহৃত পুরস্কার পয়েন্ট',
                        'view' => 'দেখুন',
                    ],
                ],

                'view' => [
                    'title' => 'পুরস্কার সিস্টেমের বিস্তারিত',

                    'datagrid' => [
                        'approved' => 'অনুমোদিত',
                        'attribute-id' => 'বৈশিষ্ট্য আইডি',
                        'canceled' => 'বাতিল',
                        'category-id' => 'বিভাগ আইডি',
                        'closed' => 'বন্ধ',
                        'created-at' => 'ক্রিয়ার তারিখ',
                        'exp-date' => 'মেয়াদ শেষ তারিখ',
                        'expire' => 'মেয়াদ উত্তীর্ণ',
                        'fraud' => 'প্রতারণা',
                        'id' => 'আইডি',
                        'name' => 'নাম',
                        'note' => 'মন্তব্য',
                        'order-id' => 'অর্ডার আইডি',
                        'pending' => 'মুলতুবি',
                        'processing' => 'প্রসেসিং',
                        'product-id' => 'পণ্য আইডি',
                        'reward-points' => 'পুরস্কার পয়েন্ট',
                        'status' => 'অবস্থা',
                        'total-reward-points' => 'মোট পুরস্কার পয়েন্ট',
                        'used' => 'ব্যবহৃত',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'কার্টের মোট পুরস্কার পয়েন্ট রূপান্তর হার',
                    'conversion' => 'রূপান্তর হার',
                    'enable-apply-points-label' => 'চেকআউটে পয়েন্ট প্রয়োগ করতে গ্রাহকদের অনুমতি দিন',
                    'enable-apply-points' => 'চেকআউটে পয়েন্ট প্রয়োগ সক্ষম করুন',
                    'points' => 'পয়েন্ট',
                    'redemption-cart-label' => 'কেনাকাটার সময় পয়েন্ট প্রয়োগ করতে গ্রাহকদের অনুমতি দিন',
                    'redemption-cart' => 'কার্টের মোট পুরস্কার পয়েন্ট পরিবর্তন',
                    'save-btn' => 'সংরক্ষণ করুন',
                    'title' => 'পুরস্কার সিস্টেমের বিস্তারিত',
                    'update-success' => 'বিনিময় সেটিংস সফলভাবে আপডেট হয়েছে',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'পুরস্কার পয়েন্ট',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'আপনার পুরস্কার পয়েন্ট',

                        'datagrid' => [
                            'approved' => 'অনুমোদিত',
                            'attribute-id' => 'অ্যাট্রিবিউট আইডি',
                            'canceled' => 'বাতিল',
                            'category-id' => 'ক্যাটাগরি আইডি',
                            'closed' => 'বন্ধ',
                            'created-at' => 'লেনদেনের তারিখ',
                            'exp-date' => 'মেয়াদ শেষ হওয়ার তারিখ',
                            'expire' => 'মেয়াদোত্তীর্ণ',
                            'fraud' => 'প্রতারণা',
                            'id' => 'আইডি',
                            'name' => 'নাম',
                            'note' => 'মন্তব্য',
                            'order-id' => 'অর্ডার আইডি',
                            'pending' => 'অপেক্ষমাণ',
                            'processing' => 'প্রসেসিং',
                            'product-id' => 'পণ্য আইডি',
                            'reward-points' => 'পুরস্কার পয়েন্ট',
                            'status' => 'স্ট্যাটাস',
                            'total-reward-points' => 'মোট পুরস্কার পয়েন্ট',
                            'used' => 'ব্যবহৃত',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'এই পণ্যটি কিনুন এবং পেয়ে যান :reward পয়েন্ট, অফার সীমিত :end_date পর্যন্ত',
            'product-reward' => 'এই পণ্যটি কিনুন এবং পেয়ে যান :reward পয়েন্ট',

            'review' => [
                'review-points' => 'একটি পর্যালোচনা লিখুন এবং পেয়ে যান :points পয়েন্ট',
            ],
        ],

        'register' => [
            'register-reward' => 'আমাদের পরিবারের সদস্য হিসাবে নিবন্ধিত হোন এবং পেয়ে যান :points পয়েন্ট',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'পুরস্কার পয়েন্ট',
                    'reward-points-earned' => 'আর্নড পুরস্কার পয়েন্ট',

                    'summary' => [
                        'reward_points' => 'মোট পুরস্কার পয়েন্ট',
                    ],
                ],

                'points' => [
                    'apply-points' => 'পয়েন্ট প্রয়োগ করুন',
                    'button-title' => 'প্রয়োগ করুন',
                    'enter-points' => 'পয়েন্ট প্রবেশ করান',
                    'reward-points' => 'পুরস্কার পয়েন্ট প্রয়োগ করুন',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'পয়েন্ট প্রয়োগ করুন',
            'enter-points' => 'পয়েন্ট প্রবেশ করুন',
            'points-used' => 'ব্যবহৃত পয়েন্ট',
            'redemption-setting' => 'তথ্য: :points পয়েন্ট সমান :conversion_rate',
            'total-point' => 'আপনার মোট পয়েন্ট :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'পয়েন্ট প্রয়োগ করা যায় না',
            'grandtotal' => 'মোট',
            'invalid-points' => 'পয়েন্ট ক্ষেত্র আবশ্যক',
            'only-number' => 'পয়েন্ট ক্ষেত্র 1 বা তার বেশি হতে হবে',
            'points-applied' => 'প্রয়োগ করা পয়েন্ট',
            'points-apply-issue' => 'পয়েন্ট কোড প্রয়োগ করা যাচ্ছে না।',
            'points' => 'পয়েন্ট',
            'redem-points' => 'পয়েন্ট পুনঃমূল্যায়ন (-)',
            'remove-points' => 'পয়েন্ট মুছুন',
            'success-points' => 'পয়েন্ট কোড সফলভাবে প্রয়োগ করা হয়েছে।',
            'total-reward-points-awarded' => 'মোট পুরস্কার পয়েন্ট প্রদান করা হয়েছে',
            'unauthorized-use-points' => 'আপনি বর্তমানে কোনও পুরস্কার পয়েন্ট ব্যবহার করতে পারবেন না, প্রশাসকের সাথে যোগাযোগ করুন।',
            'use-can-use-only' => 'আপনি শুধু ব্যবহার করতে পারেন ',
            'warning-required-less-point' => 'পুরস্কার পয়েন্টের রিডেম্পশন পণ্যের মূল্যের কম হওয়া উচিত।',
            'you-have-only' => 'আপনার কাছে শুধুমাত্র ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'স্বাগতম এবং আমাদের সাথে নিবন্ধনের জন্য ধন্যবাদ!',
            'points-rewarded' => 'আপনি নিবন্ধনের জন্য :points পয়েন্ট পেয়েছেন',
            'subject' => 'নতুন গ্রাহক নিবন্ধন',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'review' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'আপনার :product_name পর্যালোচনার জন্য ধন্যবাদ!',
            'points-rewarded' => 'আপনি পর্যালোচনার জন্য :points পয়েন্ট পেয়েছেন',
            'subject' => 'গ্রাহক পর্যালোচনা',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'dob' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'শুভ জন্মদিন!',
            'points-rewarded' => 'আপনি আপনার জন্মদিনের জন্য :points পয়েন্ট পেয়েছেন',
            'subject' => 'গ্রাহকের জন্মতারিখ',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'pending' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'আমাদের ওয়েবসাইট থেকে পণ্য অর্ডার করার জন্য ধন্যবাদ!',
            'points-rewarded' => 'অর্ডার নম্বর #:order_id অনুমোদনের পরে আপনি :points পয়েন্ট ব্যবহার করতে পারবেন',
            'status' => 'মুলতুবি',
            'subject' => 'গ্রাহক অর্ডার',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'used' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'আমাদের ওয়েবসাইট থেকে পণ্য কেনার জন্য পয়েন্ট ব্যবহার করার জন্য ধন্যবাদ!',
            'points-rewarded' => 'আপনি অর্ডার নম্বর #:order_id এর জন্য :points পয়েন্ট ব্যবহার করেছেন',
            'status' => 'ব্যবহৃত',
            'subject' => 'গ্রাহক পয়েন্ট ব্যবহার',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'approved' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'আপনার পয়েন্ট অনুমোদিত হয়েছে!',
            'points-rewarded' => 'আপনি অর্ডার নম্বর #:order_id এর জন্য :points পয়েন্ট পেয়েছেন',
            'status' => 'অনুমোদিত',
            'subject' => 'পয়েন্ট অনুমোদন',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'processing' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'অবস্থা :date তারিখে প্রক্রিয়াকরণের জন্য পরিবর্তিত হয়েছে!',
            'points-rewarded' => 'অর্ডার নম্বর #:order_id এর জন্য অবস্থা পরিবর্তিত হয়েছে',
            'status' => 'অনুমোদিত',
            'subject' => 'পয়েন্ট প্রক্রিয়াকরণ',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'expire' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'অবস্থা :date তারিখে মেয়াদ উত্তীর্ণ হয়েছে!',
            'points-rewarded' => 'অর্ডার নম্বর #:order_id এর জন্য অবস্থা পরিবর্তিত হয়েছে',
            'status' => 'মেয়াদ উত্তীর্ণ',
            'subject' => 'পয়েন্ট মেয়াদ উত্তীর্ণ',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'closed' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'অবস্থা :date তারিখে বন্ধ হয়েছে!',
            'points-rewarded' => 'অর্ডার নম্বর #:order_id এর জন্য অবস্থা বন্ধ হয়েছে',
            'status' => 'বন্ধ',
            'subject' => 'পয়েন্ট বন্ধ',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'cancel' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'আপনার পয়েন্ট :date তারিখে বাতিল করা হয়েছে!',
            'points-rewarded' => 'আপনি অর্ডার নম্বর #:order_id এর জন্য :points পয়েন্ট বাতিল করেছেন',
            'status' => 'বাতিল',
            'subject' => 'পয়েন্ট বাতিল',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],

        'fraud' => [
            'dear' => 'প্রিয় :customer_name',
            'greeting' => 'অবস্থা প্রতারণার জন্য পরিবর্তিত হয়েছে!',
            'points-rewarded' => 'আপনি :date তারিখে অর্ডার নম্বর #:order_id এর জন্য :points পয়েন্ট বাতিল করেছেন',
            'status' => 'প্রতারণা',
            'subject' => 'পয়েন্ট প্রতারণা',
            'thanks' => 'ধন্যবাদ!',
            'total-point-left' => 'আপনার কাছে :total_reward_points পয়েন্ট বাকি আছে',
            'used-points' => 'আপনি :used_reward_points পয়েন্ট ব্যবহার করেছেন',
        ],
    ],
];
