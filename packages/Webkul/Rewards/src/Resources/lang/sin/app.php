<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'මූල්‍ය විකල්ප සැකසුම්',
                    'reward-point-on-attribute' => 'ගුණාංගයේ පදනමින් රිවෝඩ් ලකුණු',
                    'reward-point-on-cart' => 'විකිණීමේ ටෝකන් ලකුණු',
                    'reward-point-on-category-for-specific-time' => 'විශේෂ කාල සීමාවක් සඳහා පදනම් වූ ප්‍රතිලාභ',
                    'reward-point-on-category' => 'ප්‍රභේදයේ පදනමින් පදනම් වූ ලකුණු',
                    'reward-point-on-product-for-specific-time' => 'විශේෂ කාල සීමාවක් සඳහා පදනම් වූ උපහාර',
                    'reward-point-on-product' => 'ඉල්ලුම ඇති පූර්ණ ගුණාංග',
                    'reward-point' => 'ලාභ දෙන ලකුණු',
                    'reward-system-details' => 'ප්‍රතිලාභ සදහන් ලකුණු',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'ගනුදෙනු කරුවන්ගේ ක්‍රියාකාරිත්වයන් පිළිබඳව ලකුණු කිරීම සහ ලාභ දීම.',
                    'setting' => 'ගැලපෙන සැකසුම්',
                    'title' => 'ලබාගන්නා ලකුණු',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name සාර්ථකව මකා ඇත.',
                            'email-notification' => 'විද්‍යුත් තැපැල් පණිවිඩ',
                            'reward-used-at-one-time' => 'ලාභ ලකුණු එකවරම පරිහරණය කර ඇත',
                            'reward-when-customer-dob-exp-days' => 'ගනුදෙනුකරුවන්ගේ උපන්දිනයට ලැබුම් ලකුණු කී දිනකින් වලංගු වේ',
                            'reward-when-customer-dob' => 'ගනුදෙනුකරුවන්ගේ උපන්දිනය සම්මානය',
                            'reward-when-customer-register-exp-days' => 'ලබාගත් පසු කී දිනකින් වලංගු වේ',
                            'reward-when-customer-register' => 'ගනුදෙනුකරුවන්ගේ ලියාපදිංචි සම්මානය',
                            'reward-when-product-reviewed-exp-days' => 'නිෂ්පාදන සමාලෝචනයෙන් පසු කී දිනකින් ලක්වුම් වලංගු වේ',
                            'reward-when-product-reviewed' => 'නිෂ්පාදනය සමාලෝචනයෙන් පසු ලබාගන්නා ලකුණු',
                            'status' => 'ක්‍රියාකාරීත්වය',
                            'update-success' => ':name සාර්ථකව යාවත්කාලීන කර ඇත.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'නිෂ්පාදන සන්දානයක් සාදා ගැනීම',
                    'create-success' => 'නිෂ්පාදන සන්දානය සාර්ථකව සාදා ගැනීම',
                    'delete-failed' => 'නිෂ්පාදන සන්දානය මැකීම අසාර්ථකයි!',
                    'delete-success' => 'නිෂ්පාදන සන්දානය සාර්ථකව මැකීම',
                    'error-product' => 'නිෂ්පාදනයක් තෝරා නොගෙන තිබේ',
                    'title' => 'නිෂ්පාදනෙහි සම්මාන ලකුණු',
                    'update-success' => 'නිෂ්පාදන සන්දානය සාර්ථකව යාවත්කාලීන කිරීම',

                    'datagrid' => [
                        'delete' => 'මැකීම',
                        'edit' => 'සංස්කරණය',
                        'end-date' => 'අවසන් දිනය',
                        'id' => 'අයි.ඩි.',
                        'mass-delete-success' => 'නිෂ්පාදන සන්දානය සාර්ථකව මැකීම',
                        'mass-update-success' => 'නිෂ්පාදන සන්දානය සාර්ථකව යාවත්කාලීන කිරීම',
                        'name' => 'නම',
                        'reward-points' => 'සම්මාන ලකුණු',
                        'sku' => 'SKU',
                        'start-date' => 'ආරම්භ දිනය',
                        'status' => 'තත්ත්වය',
                        'update-status' => 'යාවත්කාලීන කිරීම',

                        'options' => [
                            'active' => 'සක්‍රිය',
                            'inactive' => 'අක්‍රිය',
                        ],
                    ],

                    'create' => [
                        'active' => 'සක්‍රිය',
                        'create-btn' => 'නිෂ්පාදන විශේෂ සන්දානයක් සාදා ගැනීම',
                        'end-date' => 'අවසන් දිනය',
                        'enter-reward-points' => 'සම්මාන ලකුණු ඇතුළත් කරන්න',
                        'inactive' => 'අක්‍රිය',
                        'save-btn' => 'නිෂ්පාදන සන්දානය සුරකින්න',
                        'select-product' => 'නිෂ්පාදනය තෝරන්න',
                        'select-status' => 'තත්ත්වය තෝරන්න',
                        'start-date' => 'ආරම්භ දිනය',
                        'status' => 'තත්ත්වය',
                        'title' => 'නිෂ්පාදනෙහි සම්මාන ලකුණු',
                    ],

                    'edit' => [
                        'active' => 'සක්‍රිය',
                        'create-btn' => 'නිෂ්පාදන විශේෂ සන්දානයක් සාදා ගැනීම',
                        'end-date' => 'අවසන් දිනය',
                        'enter-reward-points' => 'සම්මාන ලකුණු ඇතුළත් කරන්න',
                        'inactive' => 'අක්‍රිය',
                        'save-btn' => 'නිෂ්පාදන සන්දානය යාවත්කාලීන කිරීම',
                        'select-product' => 'නිෂ්පාදනය තෝරන්න',
                        'select-status' => 'තත්ත්වය තෝරන්න',
                        'start-date' => 'ආරම්භ දිනය',
                        'status' => 'තත්ත්වය',
                        'title' => 'නිෂ්පාදනෙහි සම්මාන ලකුණු',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'නිෂ්පාදන සන්දානයක් සාදා ගැනීම',
                    'title' => 'විශේෂ කාලය සඳහා නිෂ්පාදනෙහි සම්මාන ලකුණු',

                    'create' => [
                        'create-btn' => 'සන්දාන කාලය විශේෂ සන්දානයක් සාදා ගැනීම',
                        'save-btn' => 'නිෂ්පාදන කාලය විශේෂ සන්දානය සුරකින්න',
                        'title' => 'සන්දාන කාලය විශේෂ සන්දානයක් එකතු කිරීම',
                    ],

                    'edit' => [
                        'save-btn' => 'නිෂ්පාදන කාලය විශේෂ සන්දානය යාවත්කාලීන කිරීම',
                        'title' => 'නිෂ්පාදන කාලය විශේෂ සන්දානය සංස්කරණය',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'වර්ගය සන්දානයක් සාදා ගැනීම',
                    'category-specific-time' => 'වර්ගය විශේෂිත කාලය',
                    'create-success' => 'වර්ගය සන්දානය සාර්ථකව සාදා ගැනීම',
                    'delete-failed' => 'වර්ගය සන්දානය මැකීම අසාර්ථකයි!',
                    'delete-success' => 'වර්ගය සන්දානය සාර්ථකව මැකීම',
                    'error-category' => 'වර්ගයක් තෝරා නොගෙන තිබේ',
                    'specific-title' => 'වර්ගය විශේෂ සන්දානය සාදන්න',
                    'title' => 'වර්ගය සම්මාන ලකුණු',
                    'update-success' => 'වර්ගය සන්දානය සාර්ථකව යාවත්කාලීන කිරීම',

                    'datagrid' => [
                        'delete' => 'මැකීම',
                        'edit' => 'සංස්කරණය',
                        'end-date' => 'අවසන් දිනය',
                        'id' => 'අයි.ඩි.',
                        'mass-delete-success' => 'වර්ගය සන්දානය සාර්ථකව මැකීම',
                        'mass-update-success' => 'වර්ගය සන්දානය සාර්ථකව යාවත්කාලීන කිරීම',
                        'name' => 'නම',
                        'reward-points' => 'සම්මාන ලකුණු',
                        'sku' => 'SKU',
                        'start-date' => 'ආරම්භ දිනය',
                        'status' => 'තත්ත්වය',
                        'update-status' => 'යාවත්කාලීන කිරීම',

                        'options' => [
                            'active' => 'සක්‍රිය',
                            'inactive' => 'අක්‍රිය',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'සක්‍රිය',
                    'add-btn' => 'වර්ගය සන්දානයක් සාදා ගැනීම',
                    'end-date' => 'අවසන් දිනය',
                    'enter-reward-points' => 'සම්මාන ලකුණු ඇතුළත් කරන්න',
                    'inactive' => 'අක්‍රිය',
                    'save-btn' => 'වර්ගය සන්දානය සුරකින්න',
                    'select-category' => 'වර්ගය තෝරන්න',
                    'select-status' => 'තත්ත්වය තෝරන්න',
                    'start-date' => 'ආරම්භ දිනය',
                    'status' => 'තත්ත්වය',
                    'title' => 'වර්ගය සම්මාන ලකුණු එකතු කිරීම',
                ],

                'edit' => [
                    'active' => 'සක්‍රිය',
                    'add-btn' => 'වර්ගය සන්දානයක් සාදා ගැනීම',
                    'end-date' => 'අවසන් දිනය',
                    'enter-reward-points' => 'සම්මාන ලකුණු ඇතුළත් කරන්න',
                    'inactive' => 'අක්‍රිය',
                    'save-btn' => 'වර්ගය සන්දානය යාවත්කාලීන කිරීම',
                    'select-category' => 'වර්ගය තෝරන්න',
                    'select-status' => 'තත්ත්වය තෝරන්න',
                    'start-date' => 'ආරම්භ දිනය',
                    'status' => 'තත්ත්වය',
                    'title' => 'වර්ගය සම්මාන ලකුණු සංස්කරණය',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'වර්ගය කාලය විශේෂ සන්දානයක් සාදා ගැනීම',
                    'category-specific-time' => 'වර්ගය විශේෂිත කාලය',
                    'title' => 'විශේෂ කාලය සඳහා වර්ගය සම්මාන ලකුණු',
                ],

                'create' => [
                    'save-btn' => 'වර්ගය කාලය විශේෂ සන්දානය සුරකින්න',
                    'title' => 'විශේෂ කාලය සඳහා වර්ගය සම්මාන ලකුණු එකතු කිරීම',
                ],

                'edit' => [
                    'save-btn' => 'වර්ගය කාලය විශේෂ සන්දානය යාවත්කාලීන කිරීම',
                    'title' => 'විශේෂ කාලය සඳහා වර්ගය සම්මාන ලකුණු සංස්කරණය',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'සැල්ට තාප්ප ලකුණු එකතු කරන්න',
                    'create-success' => 'සැල් ත්‍යාගය සාර්ථකව සාදන ලදී',
                    'delete-failed' => 'සැල් ත්‍යාගය මැකිය නොහැක!',
                    'delete-success' => 'සැල් ත්‍යාගය සාර්ථකව මැකිය හැකි',
                    'error-cart' => 'සැල් තෝරා ගැනීම් නැත',
                    'title' => 'සැල් තුළ තාප්ප ලකුණු',
                    'update-success' => 'සැල් ත්‍යාගය සාර්ථකව යාවත්කාලීන කරන ලදී',

                    'datagrid' => [
                        'amount-from' => 'මගින්',
                        'amount-to' => 'තෙක්',
                        'delete' => 'මැකීමට',
                        'edit' => 'සැකසන්න',
                        'end-date' => 'අවසන් දිනය',
                        'id' => 'අංකය',
                        'mass-delete-success' => 'සැල් ත්‍යාගය සාර්ථකව මැකිය හැකි',
                        'mass-update-success' => 'සැල් ත්‍යාගය සාර්ථකව යාවත්කාලීන කරන ලදී',
                        'name' => 'නම',
                        'reward-points' => 'තාප්ප ලකුණු',
                        'sku' => 'SKU',
                        'start-date' => 'ආරම්භක දිනය',
                        'status' => 'තත්ත්වය',
                        'update-status' => 'යාවත්කාලීන කරන්න',

                        'options' => [
                            'active' => 'සක්‍රිය',
                            'inactive' => 'අසක්‍රිය',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'සක්‍රිය',
                    'add-btn' => 'සැල්ට තාප්ප ලකුණු එකතු කරන්න',
                    'amount-from' => 'මගින්',
                    'amount-to' => 'තෙක්',
                    'end-date' => 'අවසන් දිනය',
                    'enter-reward-points' => 'තාප්ප ලකුණු ඇතුල් කරන්න',
                    'inactive' => 'අසක්‍රිය',
                    'save-btn' => 'සැල් ත්‍යාගය සුරකින්න',
                    'select-status' => 'තත්ත්වය තෝරන්න',
                    'start-date' => 'ආරම්භක දිනය',
                    'status' => 'තත්ත්වය',
                    'title' => 'සැල්ට තාප්ප ලකුණු එකතු කරන්න',
                ],

                'edit' => [
                    'active' => 'සක්‍රිය',
                    'add-btn' => 'සැල්ට තාප්ප ලකුණු එකතු කරන්න',
                    'amount-from' => 'මගින්',
                    'amount-to' => 'තෙක්',
                    'end-date' => 'අවසන් දිනය',
                    'enter-reward-points' => 'තාප්ප ලකුණු ඇතුල් කරන්න',
                    'inactive' => 'අසක්‍රිය',
                    'save-btn' => 'සැල් ත්‍යාගය යාවත්කාලීන කරන්න',
                    'select-status' => 'තත්ත්වය තෝරන්න',
                    'start-date' => 'ආරම්භක දිනය',
                    'status' => 'තත්ත්වය',
                    'title' => 'සැල් තුළ තාප්ප ලකුණු සංස්කරණය',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'පිළිතුරු ලකුණු අංගයට එකතු කරන්න',
                    'create-success' => 'ගුණාත්මක ලකුණු සාර්ථකව තනන්න',
                    'delete-failed' => 'ගුණාත්මකව ඉවත් කළ නොහැක!',
                    'delete-success' => 'ගුණාත්මකව ඉවත් කරන ලදි',
                    'error-cart' => 'එම ගුණාත්මකව තෝරා ගත නොහැක',
                    'title' => 'ගුණාත්මක ලකුණු',
                    'update-success' => 'ගුණාත්මකව යාවත්කාලීන කරන ලදි',

                    'datagrid' => [
                        'code' => 'කේතය',
                        'delete' => 'ඉවත් කරන්න',
                        'edit' => 'සැකසීම',
                        'id' => 'අංකය',
                        'mass-delete-success' => 'ගුණාත්මකව ඉවත් කරන ලදි',
                        'mass-update-success' => 'ගුණාත්මකව යාවත්කාලීන කරන ලදි',
                        'name' => 'නම',
                        'reward-points' => 'සමත් ලකුණු',
                        'sku' => 'SKU කේතය',
                        'status' => 'තත්වය',
                        'update-status' => 'යාවත්කාලීන කරන්න',

                        'options' => [
                            'active' => 'සක්‍රීය',
                            'inactive' => 'අසක්‍රීය',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'සක්‍රීය',
                    'enter-reward-points' => 'සමත් ලකුණු ඇතුළත් කරන්න',
                    'inactive' => 'අසක්‍රීය',
                    'reward_points' => 'ගුණාත්මක ලකුණු',
                    'save-btn' => 'සමත් ලකුණු සුරැකුම් කරන්න',
                    'select-attributes' => 'ගුණාත්මකව තෝරන්න',
                    'select-status' => 'තත්වය තෝරන්න',
                    'status' => 'තත්වය',
                    'title' => 'ගුණාත්මක ලකුණු',
                ],

                'edit' => [
                    'active' => 'සක්‍රීය',
                    'edit-btn' => 'සමත් ලකුණු සංස්කරණය කරන්න',
                    'enter-reward-points' => 'සමත් ලකුණු ඇතුළත් කරන්න',
                    'inactive' => 'අසක්‍රීය',
                    'reward_points' => 'ගුණාත්මක ලකුණු',
                    'select-attributes' => 'ගුණාත්මකව තෝරන්න',
                    'select-status' => 'තත්වය තෝරන්න',
                    'status' => 'තත්වය',
                    'title' => 'ගුණාත්මක ලකුණු',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'සමත් පද්ධති විස්තර',

                    'datagrid' => [
                        'active' => 'සක්‍රීය',
                        'id' => 'අංකය',
                        'inactive' => 'අසක්‍රීය',
                        'name' => 'නම',
                        'reward-points' => 'සමත් ලකුණු',
                        'status' => 'තත්වය',
                        'used-rewards-points' => 'භාවිතා කරන ලද ලකුණු',
                        'view' => 'පෙනුම',
                    ],
                ],

                'view' => [
                    'title' => 'සමත් පද්ධති විස්තර',

                    'datagrid' => [
                        'approved' => 'මනාපය',
                        'attribute-id' => 'ගුණාත්මක අංකය',
                        'canceled' => 'වසා දමන්න',
                        'category-id' => 'ප්‍රවර්ග අංකය',
                        'closed' => 'සමසම්පූර්ණ',
                        'created-at' => 'තනන දිනය',
                        'exp-date' => 'අවසාන දිනය',
                        'expire' => 'කල්තැරිලා',
                        'fraud' => 'වංචාව',
                        'id' => 'අංකය',
                        'name' => 'නම',
                        'note' => 'සටහන',
                        'order-id' => 'ඇණවුම් අංකය',
                        'pending' => 'තේරුම්ගත',
                        'processing' => 'කාර්යබහුල',
                        'product-id' => 'නිෂ්පාදන අංකය',
                        'reward-points' => 'සමත් ලකුණු',
                        'status' => 'තත්වය',
                        'total-reward-points' => 'එම ලකුණු',
                        'used' => 'භාවිතා කරන ලදී',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'සමස්ත ආකාර මාරු අනුපාතය',
                    'conversion' => 'මාරු අනුපාතය',
                    'enable-apply-points-label' => 'පාරිභෝගිකයන්ට ගෙවීම් යෙදවීමට අවසර දීම',
                    'enable-apply-points' => 'ගෙවීම්දී ලකුණු යෙදවීමට අවසර දෙන්න',
                    'points' => 'ලකුණු',
                    'redemption-cart-label' => 'පාරිභෝගිකයන්ට මිලදී ගැනීමේදී ලකුණු යෙදවීමට අවසර දෙන්න',
                    'redemption-cart' => 'සමස්ත සාමර්ථය මාරු කරන්න',
                    'save-btn' => 'සුරැකුම් කරන්න',
                    'title' => 'සමත් පද්ධති විස්තර',
                    'update-success' => 'ඉස්සෙල්වීම් සෙට් එක සාර්ථකව යාවත්කාලීන කරන ලදි',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'සම්මාන ලකුණු',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'ඔබේ සම්මාන ලකුණු',

                        'datagrid' => [
                            'approved' => 'අනුමත',
                            'attribute-id' => 'විශේෂත්ව ID',
                            'canceled' => 'අවලංගු',
                            'category-id' => 'වර්ගය ID',
                            'closed' => 'වසන ලද',
                            'created-at' => 'ගනුදෙනු දිනය',
                            'exp-date' => 'අවසන් දිනය',
                            'expire' => 'අවසන්',
                            'fraud' => 'වංචා',
                            'id' => 'ID',
                            'name' => 'නම',
                            'note' => 'සටහන',
                            'order-id' => 'ආදේශ ID',
                            'pending' => 'පැවතී',
                            'processing' => 'සංසන්දනය',
                            'product-id' => 'නිෂ්පාදන ID',
                            'reward-points' => 'සම්මාන ලකුණු',
                            'status' => 'තත්ත්වය',
                            'total-reward-points' => 'මුළු සම්මාන ලකුණු',
                            'used' => 'භාවිතා කරන ලදි',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'මෙම නිෂ්පාදනය මිලදී ගන්න සහ :reward ලකුණු ලබා ගන්න. යෝජනාව :end_date දක්වා වලංගු වේ',
            'product-reward' => 'මෙම නිෂ්පාදනය මිලදී ගන්න සහ :reward ලකුණු ලබා ගන්න',

            'review' => [
                'review-points' => 'සමාලෝචනයක් ලියන්න සහ :points ලකුණු ලබා ගන්න',
            ],
        ],

        'register' => [
            'register-reward' => 'අපේ පවුලේ සාමාජිකයා ලෙස ලියාපදිංචි වන්න සහ :points ලකුණු ලබා ගන්න',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'සම්මාන ලකුණු',
                    'reward-points-earned' => 'අදාල සම්මාන ලකුණු',

                    'summary' => [
                        'reward_points' => 'මුළු සම්මාන ලකුණු',
                    ],
                ],

                'points' => [
                    'apply-points' => 'ලකුණු යෙදවන්න',
                    'button-title' => 'යෙදවන්න',
                    'enter-points' => 'ලකුණු ඇතුලත් කරන්න',
                    'reward-points' => 'සම්මාන ලකුණු යෙදවන්න',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'අසමතුකම් යෙදිය යුතුයි',
            'enter-points' => 'අසමතුකම් ඇතුළත් කරන්න',
            'points-used' => 'භාවිතා කරන ලද අසමතුකම්',
            'redemption-setting' => 'තොරතුරු: :points අසමතුකම් :conversion_rate ට සමානයි',
            'total-point' => 'ඔබගේ මුළු අසමතුකම්: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'අසමතුකම් යෙදිය නොහැක',
            'grandtotal' => 'සම්පූර්ණ ව්‍යස්ථාපනය',
            'invalid-points' => 'අසමතුකම් ක්ෂේත‍්‍රය අවශ්‍යයි',
            'only-number' => 'අසමතුකම් ක්ෂේත‍්‍රය 1 හෝ වැඩි විය යුතුයි',
            'points-applied' => 'යෙදූ අසමතුකම්',
            'points-apply-issue' => 'අසමතුකම් කේතය යෙදිය නොහැක.',
            'points' => 'අසමතුකම්',
            'redem-points' => 'අසමතුකම් නැවත මිල දී ගැනීම (-)',
            'remove-points' => 'අසමතුකම් ඉවත් කරන්න',
            'success-points' => 'අසමතුකම් කේතය සාර්ථකව යෙදුණි.',
            'total-reward-points-awarded' => 'සම්පූර්ණ ආශීර්වාද අසමතුකම්',
            'unauthorized-use-points' => 'මෙම මොහොතේ ඔබට ආශීර්වාද අසමතුකම් භාවිතා කළ නොහැක, පරිපාලකයා සමඟ සම්බන්ධ වන්න.',
            'use-can-use-only' => 'ඔබට පමණක් භාවිතා කළ හැක ',
            'warning-required-less-point' => 'අශීර්වාද අසමතුකම් නැවත මිල දී ගැනීම නිෂ්පාදන මිලට වඩා අඩු විය යුතුයි.',
            'you-have-only' => 'ඔබට පමණක් ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'ඔබට අප හා එක්වීම සඳහා ස්තුතියි!',
            'points-rewarded' => 'ඔබට ලියාපදිංචිය සඳහා :points අගුල් ලබාදී ඇත',
            'subject' => 'අලුත්ම ගනුදෙනුකරුවෙකුගේ ලියාපදිංචිය',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'review' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => ':product_name පිළිබඳව ඔබගේ විචාරය සඳහා ස්තුතියි!',
            'points-rewarded' => 'ඔබට විචාරය සඳහා :points අගුල් ලබාදී ඇත',
            'subject' => 'ගනුදෙනුකරුගේ විචාරය',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'dob' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'සුබ උපන් දිනයක්!',
            'points-rewarded' => 'ඔබට උපන් දිනය සඳහා :points අගුල් ලබාදී ඇත',
            'subject' => 'ගනුදෙනුකරුගේ උපන් දිනය',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'pending' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'අපගේ වෙබ් අඩවියෙන් නිෂ්පාදන ඇණවුම් කිරීම සඳහා ස්තුතියි!',
            'points-rewarded' => 'ආපසු අනුමත කිරීමෙන් පසු නියමිත :points අගුල් ලබාගත හැක',
            'status' => 'අදාල',
            'subject' => 'ගනුදෙනුකරුගේ ඇණවුම',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'used' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'අපගේ වෙබ් අඩවියෙන් නිෂ්පාදන මිලදී ගැනීම සඳහා අගුල් භාවිතා කිරීම සඳහා ස්තුතියි!',
            'points-rewarded' => 'ඔබ :points අගුල් භාවිතා කර ඇත ඇණවුම #:order_id සඳහා',
            'status' => 'භාවිතා කරන ලදී',
            'subject' => 'ගනුදෙනුකරුගේ අගුල් භාවිතය',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'approved' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'ඔබගේ අගුල් අනුමත විය!',
            'points-rewarded' => 'ඔබට :points අගුල් ලබාදී ඇත ඇණවුම #:order_id සඳහා',
            'status' => 'අනුමත කරන ලදී',
            'subject' => 'අනුමත කරන ලද අගුල්',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'processing' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'තත්වය :date දිනයට සැකසීම ලෙස වෙනස් කර ඇත!',
            'points-rewarded' => 'තත්වය :order_id සඳහා වෙනස් කරන ලදී',
            'status' => 'අනුමත කරන ලදී',
            'subject' => 'අගුල් සැකසීම',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'expire' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'තත්වය :date දිනයට අවලංගු ලෙස වෙනස් කර ඇත!',
            'points-rewarded' => 'තත්වය :order_id සඳහා වෙනස් කරන ලදී',
            'status' => 'අවලංගු',
            'subject' => 'අවලංගු අගුල්',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'closed' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'තත්වය :date දිනයට වසා දැමීමට වෙනස් කර ඇත!',
            'points-rewarded' => 'තත්වය :order_id සඳහා වසා දැමීමට වෙනස් කරන ලදී',
            'status' => 'වසා දැමූ',
            'subject' => 'වසා දැමූ අගුල්',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'cancel' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'ඔබගේ අගුල් :date දිනයට අවලංගු විය!',
            'points-rewarded' => 'ඔබ :points අගුල් අවලංගු කර ඇත ඇණවුම #:order_id සඳහා',
            'status' => 'අවලංගු කරන ලදී',
            'subject' => 'අගුල් අවලංගු කිරීම',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],

        'fraud' => [
            'dear' => 'ප්‍රියතම :customer_name',
            'greeting' => 'තත්වය මැවීම බවට වෙනස් කර ඇත!',
            'points-rewarded' => 'ඔබ :points අගුල් අවලංගු කර ඇත ඇණවුම #:order_id සඳහා :date',
            'status' => 'මැවීම',
            'subject' => 'මැවීම් අගුල්',
            'thanks' => 'ස්තූතියි!',
            'total-point-left' => 'ඔබට :total_reward_points අගුල් ඉතිරිව තිබේ',
            'used-points' => 'ඔබ :used_reward_points අගුල් භාවිතා කර ඇත',
        ],
    ],
];
