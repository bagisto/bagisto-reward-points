<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => '兑换设置',
                    'reward-point-on-attribute' => '属性奖励点数',
                    'reward-point-on-cart' => '购物车奖励点数',
                    'reward-point-on-category-for-specific-time' => '特定时间的类别奖励点数',
                    'reward-point-on-category' => '类别奖励点数',
                    'reward-point-on-product-for-specific-time' => '特定时间的产品奖励点数',
                    'reward-point-on-product' => '产品奖励点数',
                    'reward-point' => '奖励点数',
                    'reward-system-details' => '奖励系统详情',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => '设置跟踪客户活动并通过奖励点数奖励他们以便未来享受折扣或优惠的程序。',
                    'setting' => '设置',
                    'title' => '奖励点数',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name 删除成功。',
                            'email-notification' => '电子邮件通知',
                            'reward-used-at-one-time' => '一次使用的奖励点数',
                            'reward-when-customer-dob-exp-days' => '在客户生日后多少天奖励点数到期',
                            'reward-when-customer-dob' => '客户生日奖励',
                            'reward-when-customer-register-exp-days' => '客户注册后多少天奖励点数到期',
                            'reward-when-customer-register' => '客户注册奖励',
                            'reward-when-product-reviewed-exp-days' => '产品评论后多少天奖励点数到期',
                            'reward-when-product-reviewed' => '产品评论奖励',
                            'status' => '模块状态',
                            'update-success' => ':name 更新成功。',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => '创建产品奖励',
                    'create-success' => '产品奖励创建成功',
                    'delete-failed' => '产品奖励删除失败！',
                    'delete-success' => '产品奖励成功删除',
                    'error-product' => '未选择产品',
                    'title' => '产品奖励积分',
                    'update-success' => '产品奖励更新成功',

                    'datagrid' => [
                        'delete' => '删除',
                        'edit' => '编辑',
                        'end-date' => '结束日期',
                        'id' => 'ID',
                        'mass-delete-success' => '产品奖励成功删除',
                        'mass-update-success' => '产品奖励更新成功',
                        'name' => '名称',
                        'reward-points' => '奖励积分',
                        'sku' => 'SKU',
                        'start-date' => '开始日期',
                        'status' => '状态',
                        'update-status' => '更新',

                        'options' => [
                            'active' => '激活',
                            'inactive' => '未激活',
                        ],
                    ],

                    'create' => [
                        'active' => '激活',
                        'create-btn' => '创建特定产品奖励',
                        'end-date' => '结束日期',
                        'enter-reward-points' => '输入奖励积分',
                        'inactive' => '未激活',
                        'save-btn' => '保存产品奖励',
                        'select-product' => '选择产品',
                        'select-status' => '选择状态',
                        'start-date' => '开始日期',
                        'status' => '状态',
                        'title' => '产品奖励积分',
                    ],

                    'edit' => [
                        'active' => '激活',
                        'create-btn' => '创建特定产品奖励',
                        'end-date' => '结束日期',
                        'enter-reward-points' => '输入奖励积分',
                        'inactive' => '未激活',
                        'save-btn' => '更新产品奖励',
                        'select-product' => '选择产品',
                        'select-status' => '选择状态',
                        'start-date' => '开始日期',
                        'status' => '状态',
                        'title' => '产品奖励积分',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => '创建产品奖励',
                    'title' => '特定时间的产品奖励积分',

                    'create' => [
                        'create-btn' => '创建时间特定奖励',
                        'save-btn' => '保存时间特定产品奖励',
                        'title' => '添加时间特定奖励',
                    ],

                    'edit' => [
                        'save-btn' => '更新时间特定奖励',
                        'title' => '编辑时间特定奖励',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => '创建类别奖励',
                    'category-specific-time' => '类别特定时间',
                    'create-success' => '类别奖励成功创建',
                    'delete-failed' => '类别奖励删除失败！',
                    'delete-success' => '类别奖励成功删除',
                    'error-category' => '未选择类别',
                    'specific-title' => '创建类别特定奖励',
                    'title' => '类别奖励积分',
                    'update-success' => '类别奖励更新成功',

                    'datagrid' => [
                        'delete' => '删除',
                        'edit' => '编辑',
                        'end-date' => '结束日期',
                        'id' => 'ID',
                        'mass-delete-success' => '类别奖励成功删除',
                        'mass-update-success' => '类别奖励更新成功',
                        'name' => '名称',
                        'reward-points' => '奖励积分',
                        'sku' => 'SKU',
                        'start-date' => '开始日期',
                        'status' => '状态',
                        'update-status' => '更新',

                        'options' => [
                            'active' => '激活',
                            'inactive' => '未激活',
                        ],
                    ],
                ],

                'create' => [
                    'active' => '激活',
                    'add-btn' => '创建类别奖励',
                    'end-date' => '结束日期',
                    'enter-reward-points' => '输入奖励积分',
                    'inactive' => '未激活',
                    'save-btn' => '保存类别奖励',
                    'select-category' => '选择类别',
                    'select-status' => '选择状态',
                    'start-date' => '开始日期',
                    'status' => '状态',
                    'title' => '添加类别奖励积分',
                ],

                'edit' => [
                    'active' => '激活',
                    'add-btn' => '创建类别奖励',
                    'end-date' => '结束日期',
                    'enter-reward-points' => '输入奖励积分',
                    'inactive' => '未激活',
                    'save-btn' => '更新类别奖励',
                    'select-category' => '选择类别',
                    'select-status' => '选择状态',
                    'start-date' => '开始日期',
                    'status' => '状态',
                    'title' => '编辑类别奖励积分',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => '创建类别时间特定奖励',
                    'category-specific-time' => '类别特定时间',
                    'title' => '类别特定时间奖励积分',
                ],

                'create' => [
                    'save-btn' => '保存类别时间特定奖励',
                    'title' => '添加类别时间特定奖励积分',
                ],

                'edit' => [
                    'save-btn' => '更新类别时间特定奖励',
                    'title' => '编辑类别时间特定奖励积分',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => '将奖励积分添加到购物车',
                    'create-success' => '购物车奖励成功创建',
                    'delete-failed' => '无法删除购物车奖励！',
                    'delete-success' => '购物车奖励成功删除',
                    'error-cart' => '没有选择购物车',
                    'title' => '购物车奖励积分',
                    'update-success' => '购物车奖励成功更新',

                    'datagrid' => [
                        'amount-from' => '金额从',
                        'amount-to' => '金额到',
                        'delete' => '删除',
                        'edit' => '编辑',
                        'end-date' => '结束日期',
                        'id' => 'ID',
                        'mass-delete-success' => '购物车奖励成功删除',
                        'mass-update-success' => '购物车奖励成功更新',
                        'name' => '名称',
                        'reward-points' => '奖励积分',
                        'sku' => 'SKU',
                        'start-date' => '开始日期',
                        'status' => '状态',
                        'update-status' => '更新',

                        'options' => [
                            'active' => '激活',
                            'inactive' => '未激活',
                        ],
                    ],
                ],

                'create' => [
                    'active' => '激活',
                    'add-btn' => '将奖励积分添加到购物车',
                    'amount-from' => '金额从',
                    'amount-to' => '金额到',
                    'end-date' => '结束日期',
                    'enter-reward-points' => '输入奖励积分',
                    'inactive' => '未激活',
                    'save-btn' => '保存购物车奖励',
                    'select-status' => '选择状态',
                    'start-date' => '开始日期',
                    'status' => '状态',
                    'title' => '将奖励积分添加到购物车',
                ],

                'edit' => [
                    'active' => '激活',
                    'add-btn' => '将奖励积分添加到购物车',
                    'amount-from' => '金额从',
                    'amount-to' => '金额到',
                    'end-date' => '结束日期',
                    'enter-reward-points' => '输入奖励积分',
                    'inactive' => '未激活',
                    'save-btn' => '更新购物车奖励',
                    'select-status' => '选择状态',
                    'start-date' => '开始日期',
                    'status' => '状态',
                    'title' => '编辑购物车奖励积分',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => '将奖励积分添加到属性',
                    'create-success' => '奖励属性创建成功',
                    'delete-failed' => '属性删除失败！',
                    'delete-success' => '属性删除成功',
                    'error-cart' => '未选择任何属性',
                    'title' => '属性的奖励积分',
                    'update-success' => '奖励属性更新成功',

                    'datagrid' => [
                        'code' => '代码',
                        'delete' => '删除',
                        'edit' => '编辑',
                        'id' => 'ID',
                        'mass-delete-success' => '属性删除成功',
                        'mass-update-success' => '属性更新成功',
                        'name' => '名称',
                        'reward-points' => '奖励积分',
                        'sku' => 'SKU 代码',
                        'status' => '状态',
                        'update-status' => '更新',

                        'options' => [
                            'active' => '激活',
                            'inactive' => '未激活',
                        ],
                    ],
                ],

                'create' => [
                    'active' => '激活',
                    'enter-reward-points' => '输入奖励积分',
                    'inactive' => '未激活',
                    'reward_points' => '属性积分',
                    'save-btn' => '保存奖励积分到属性',
                    'select-attributes' => '选择属性',
                    'select-status' => '选择状态',
                    'status' => '状态',
                    'title' => '属性的奖励积分',
                ],

                'edit' => [
                    'active' => '激活',
                    'edit-btn' => '编辑奖励积分到属性',
                    'enter-reward-points' => '输入奖励积分',
                    'inactive' => '未激活',
                    'reward_points' => '属性积分',
                    'select-attributes' => '选择属性',
                    'select-status' => '选择状态',
                    'status' => '状态',
                    'title' => '属性的奖励积分',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => '奖励系统详情',

                    'datagrid' => [
                        'active' => '激活',
                        'id' => 'ID',
                        'inactive' => '未激活',
                        'name' => '名称',
                        'reward-points' => '奖励积分',
                        'status' => '状态',
                        'used-rewards-points' => '已使用奖励积分',
                        'view' => '查看',
                    ],
                ],

                'view' => [
                    'title' => '奖励系统详情',

                    'datagrid' => [
                        'approved' => '已批准',
                        'attribute-id' => '属性ID',
                        'canceled' => '已取消',
                        'category-id' => '类别ID',
                        'closed' => '关闭',
                        'created-at' => '创建日期',
                        'exp-date' => '到期日期',
                        'expire' => '已过期',
                        'fraud' => '欺诈',
                        'id' => 'ID',
                        'name' => '名称',
                        'note' => '备注',
                        'order-id' => '订单ID',
                        'pending' => '待处理',
                        'processing' => '处理中',
                        'product-id' => '产品ID',
                        'reward-points' => '奖励积分',
                        'status' => '状态',
                        'total-reward-points' => '总奖励积分',
                        'used' => '已使用',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => '购物车总金额的兑换率',
                    'conversion' => '兑换率',
                    'enable-apply-points-label' => '允许客户在结账时使用积分',
                    'enable-apply-points' => '启用结账时积分使用',
                    'points' => '积分',
                    'redemption-cart-label' => '允许客户在购买时使用积分',
                    'redemption-cart' => '购物车总金额兑换',
                    'save-btn' => '保存',
                    'title' => '奖励系统详情',
                    'update-success' => '兑换设置已成功更新',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => '奖励积分',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => '你的奖励积分',

                        'datagrid' => [
                            'approved' => '已批准',
                            'attribute-id' => '属性ID',
                            'canceled' => '已取消',
                            'category-id' => '分类ID',
                            'closed' => '已关闭',
                            'created-at' => '交易日期',
                            'exp-date' => '过期日期',
                            'expire' => '过期',
                            'fraud' => '欺诈',
                            'id' => 'ID',
                            'name' => '名称',
                            'note' => '备注',
                            'order-id' => '订单ID',
                            'pending' => '待处理',
                            'processing' => '处理中',
                            'product-id' => '产品ID',
                            'reward-points' => '奖励积分',
                            'status' => '状态',
                            'total-reward-points' => '总奖励积分',
                            'used' => '已使用',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => '购买此产品并获得 :reward 积分。优惠有效期至 :end_date',
            'product-reward' => '购买此产品并获得 :reward 积分',

            'review' => [
                'review-points' => '写评论并获得 :points 积分',
            ],
        ],

        'register' => [
            'register-reward' => '注册成为我们家族的一员并获得 :points 积分',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => '奖励积分',
                    'reward-points-earned' => '获得的奖励积分',

                    'summary' => [
                        'reward_points' => '总奖励积分',
                    ],
                ],

                'points' => [
                    'apply-points' => '应用积分',
                    'button-title' => '应用',
                    'enter-points' => '输入积分',
                    'reward-points' => '应用奖励积分',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => '应用积分',
            'enter-points' => '输入积分',
            'points-used' => '已使用积分',
            'redemption-setting' => '信息: :points 积分等于 :conversion_rate',
            'total-point' => '您的总积分: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => '无法应用积分',
            'grandtotal' => '总计',
            'invalid-points' => '积分字段是必填的',
            'only-number' => '积分字段必须是1或更多',
            'points-applied' => '已应用积分',
            'points-apply-issue' => '积分代码无法应用。',
            'points' => '积分',
            'redem-points' => '兑换积分 (-)',
            'remove-points' => '移除积分',
            'success-points' => '积分代码应用成功。',
            'total-reward-points-awarded' => '总奖励积分',
            'unauthorized-use-points' => '您目前无法使用奖励积分，请联系管理员。',
            'use-can-use-only' => '您只能使用 ',
            'warning-required-less-point' => '兑换积分必须低于商品价格。',
            'you-have-only' => '您仅有 ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '欢迎并感谢您注册我们的网站！',
            'points-rewarded' => '您因注册获得了 :points 积分',
            'subject' => '新客户注册',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'review' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '感谢您对 :product_name 的评价！',
            'points-rewarded' => '您因评价获得了 :points 积分',
            'subject' => '客户评价',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'dob' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '生日快乐！',
            'points-rewarded' => '您因生日获得了 :points 积分',
            'subject' => '客户生日',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'pending' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '感谢您在我们网站上订购产品！',
            'points-rewarded' => '在订单号 #:order_id 批准后，您可以使用 :points 积分',
            'status' => '待处理',
            'subject' => '客户订单',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'used' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '感谢您使用积分购买我们网站上的产品！',
            'points-rewarded' => '您在订单号 #:order_id 中使用了 :points 积分',
            'status' => '已使用',
            'subject' => '客户使用积分',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'approved' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '您的积分已被批准！',
            'points-rewarded' => '您因订单号 #:order_id 获得了 :points 积分',
            'status' => '已批准',
            'subject' => '积分批准',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'processing' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '状态已于 :date 更改为处理！',
            'points-rewarded' => '订单号 #:order_id 的状态已更改',
            'status' => '已批准',
            'subject' => '积分处理',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'expire' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '状态已于 :date 更改为过期！',
            'points-rewarded' => '订单号 #:order_id 的状态已更改',
            'status' => '已过期',
            'subject' => '积分过期',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'closed' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '状态已于 :date 更改为关闭！',
            'points-rewarded' => '订单号 #:order_id 的状态已更改为关闭',
            'status' => '已关闭',
            'subject' => '积分关闭',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'cancel' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '您的积分已于 :date 被取消！',
            'points-rewarded' => '订单号 #:order_id 的 :points 积分已被取消',
            'status' => '已取消',
            'subject' => '积分取消',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],

        'fraud' => [
            'dear' => '亲爱的 :customer_name',
            'greeting' => '状态已更改为欺诈！',
            'points-rewarded' => '订单号 #:order_id 的 :points 积分已于 :date 被取消',
            'status' => '欺诈',
            'subject' => '积分欺诈',
            'thanks' => '谢谢！',
            'total-point-left' => '您还有 :total_reward_points 积分',
            'used-points' => '您已经使用了 :used_reward_points 积分',
        ],
    ],
];
