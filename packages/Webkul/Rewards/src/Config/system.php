<?php

return [
    [
        'key' => 'reward',
        'name' => 'rewards::app.admin.configuration.title.general.title',
        'info' => 'rewards::app.admin.configuration.title.general.title',
        'sort' => 1,
    ], [
        'key' => 'reward.general',
        'name' => 'rewards::app.admin.configuration.title.general.title',
        'info' => 'rewards::app.admin.configuration.title.general.info',
        'icon' => 'settings/settings.svg',
        'sort' => 1,
    ], [
        'key' => 'reward.general.general',
        'name' => 'rewards::app.admin.configuration.title.general.setting',
        'info' => 'rewards::app.admin.configuration.title.general.info',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'module-status',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.status',
                'type' => 'boolean',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-when-customer-register',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-when-customer-register',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-when-customer-register-exp-days',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-when-customer-register-exp-days',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-when-customer-dob',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-when-customer-dob',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-when-customer-dob-exp-days',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-when-customer-dob-exp-days',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-when-product-reviewed',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-when-product-reviewed',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-when-product-reviewed-exp-days',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-when-product-reviewed-exp-days',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'reward-used-at-one-time',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.reward-used-at-one-time',
                'type' => 'number',
                'validation' => 'numeric',
                'locale_based' => true,
                'channel_based' => true,
            ], [
                'name' => 'email-notification',
                'title' => 'rewards::app.admin.configuration.title.general.reward.setting.email-notification',
                'type' => 'select',
                'locale_based' => true,
                'channel_based' => true,
                'options' => [
                    [
                        'title' => 'Yes',
                        'value' => '1',
                    ], [
                        'title' => 'No',
                        'value' => '0',
                    ],
                ],
            ],
        ],
    ],
];
