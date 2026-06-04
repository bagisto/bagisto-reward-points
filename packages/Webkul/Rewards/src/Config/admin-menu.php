<?php

return [
    [
        'key' => 'rewards',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point',
        'route' => 'admin.reward.product.index',
        'sort' => 2,
        'icon' => 'reward-admin-reward-point-icon',
    ], [
        'key' => 'rewards.product',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-product',
        'route' => 'admin.reward.product.index',
        'sort' => 2,
        'icon' => '',
    ], [
        'key' => 'rewards.product.list',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-product',
        'route' => 'admin.reward.product.index',
        'sort' => 1,
        'icon' => '',
    ], [
        'key' => 'rewards.product.specific_time',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-product-for-specific-time',
        'route' => 'admin.reward.product.product-specific-time',
        'sort' => 2,
        'icon' => '',
    ], [
        'key' => 'rewards.category',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-category',
        'route' => 'admin.reward.category.index',
        'sort' => 3,
        'icon' => '',
    ], [
        'key' => 'rewards.category.list',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-category',
        'route' => 'admin.reward.category.index',
        'sort' => 1,
        'icon' => '',
    ], [
        'key' => 'rewards.category.specific_time',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-category-for-specific-time',
        'route' => 'admin.reward.category.category_specific_time',
        'sort' => 2,
        'icon' => '',
    ], [
        'key' => 'rewards.cart',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-cart',
        'route' => 'admin.reward.cart.index',
        'sort' => 4,
        'icon' => '',
    ],
    //  [
    //     'key'   => 'rewards.attribute',
    //     'name'  => 'rewards::app.admin.components.layouts.sidebar.reward-point-on-attribute',
    //     'route' => 'admin.reward.attribute.index',
    //     'sort'  => 5,
    //     'icon'  => '',
    // ],
    [
        'key' => 'rewards.system',
        'name' => 'rewards::app.admin.components.layouts.sidebar.reward-system-details',
        'route' => 'admin.reward.system.index',
        'sort' => 6,
        'icon' => '',
    ], [
        'key' => 'rewards.redeem',
        'name' => 'rewards::app.admin.components.layouts.sidebar.redemptions-settings',
        'route' => 'admin.reward.redemption.index',
        'sort' => 6,
        'icon' => '',
    ],
];
