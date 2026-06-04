<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Redemptions Settings',
                    'reward-point-on-attribute' => 'Reward Point on Attribute',
                    'reward-point-on-cart' => 'Reward Point on Cart',
                    'reward-point-on-category-for-specific-time' => 'Reward Point on Category For Specific Time',
                    'reward-point-on-category' => 'Reward Point on Category',
                    'reward-point-on-product-for-specific-time' => 'Reward Point on Product For Specific Time',
                    'reward-point-on-product' => 'Reward Point on Product',
                    'reward-point' => 'Reward Point',
                    'reward-system-details' => 'Reward System Details',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Set program that tracks customer activity and rewards them with points for future discounts or benefits.',
                    'setting' => 'Setting',
                    'title' => 'Reward Point',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name deleted successfully.',
                            'email-notification' => 'Email Notifications',
                            'reward-used-at-one-time' => 'Reward Point Used At One Time',
                            'reward-when-customer-dob-exp-days' => 'After how many days the Reward Point expires on Customer Date Of Birth',
                            'reward-when-customer-dob' => 'Reward For Customer Date Of Birth',
                            'reward-when-customer-register-exp-days' => 'After how many days the Reward Point expires on Customer Registration',
                            'reward-when-customer-register' => 'Reward When Customer Registers',
                            'reward-when-product-reviewed-exp-days' => 'After how many days the Reward Point expires on Product Review',
                            'reward-when-product-reviewed' => 'Reward when Product is Reviewed',
                            'status' => 'Module Status',
                            'update-success' => ':name updated successfully.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Create Product Reward',
                    'create-success' => 'Product Reward created successfully',
                    'delete-failed' => 'Product Reward not deleted !',
                    'delete-success' => 'Product Reward deleted successfully',
                    'error-product' => 'There is no Product Select',
                    'title' => 'Reward Point on Product',
                    'update-success' => 'Product Reward updated successfully',

                    'datagrid' => [
                        'delete' => 'Delete',
                        'edit' => 'Edit',
                        'end-date' => 'End Date',
                        'id' => 'Id',
                        'mass-delete-success' => 'Product Reward deleted successfully',
                        'mass-update-success' => 'Product Reward updated successfully',
                        'name' => 'Name',
                        'reward-points' => 'Reward Points',
                        'sku' => 'SKU',
                        'start-date' => 'Start Date',
                        'status' => 'Status',
                        'update-status' => 'Update',

                        'options' => [
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ],
                    ],

                    'create' => [
                        'active' => 'Active',
                        'create-btn' => 'Create Product Specific Reward',
                        'end-date' => 'End Date',
                        'enter-reward-points' => 'Enter Reward Points',
                        'inactive' => 'Inactive',
                        'save-btn' => 'Save Product Reward',
                        'select-product' => 'Select Product',
                        'select-status' => 'Select Status',
                        'start-date' => 'Start Date',
                        'status' => 'Status',
                        'title' => 'Reward Point on Product',
                    ],

                    'edit' => [
                        'active' => 'Active',
                        'create-btn' => 'Create Product Specific Reward',
                        'end-date' => 'End Date',
                        'enter-reward-points' => 'Enter Reward Points',
                        'inactive' => 'Inactive',
                        'save-btn' => 'Update Product Reward',
                        'select-product' => 'Select Product',
                        'select-status' => 'Select Status',
                        'start-date' => 'Start Date',
                        'status' => 'Status',
                        'title' => 'Reward Point on Product',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Create Product Reward',
                    'title' => 'Reward Point on Product For Sepcific Time',

                    'create' => [
                        'create-btn' => 'Create Reward Time Specific Reward',
                        'save-btn' => 'Save Product Time Specific Reward',
                        'title' => 'Add Reward Time Specific Reward',
                    ],

                    'edit' => [
                        'save-btn' => 'Update Product Time Specific Reward',
                        'title' => 'Edit Product Time Specific Reward',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Create Category Reward',
                    'category-specific-time' => 'Category Specific Time',
                    'create-success' => 'Category Reward created successfully',
                    'delete-failed' => 'Category Reward not deleted !',
                    'delete-success' => 'Category Reward deleted successfully',
                    'error-category' => 'There is no Category Select',
                    'specific-title' => 'Create Category Specific Reward',
                    'title' => 'Reward Point on Category',
                    'update-success' => 'Category Reward updated successfully',

                    'datagrid' => [
                        'delete' => 'Delete',
                        'edit' => 'Edit',
                        'end-date' => 'End Date',
                        'id' => 'Id',
                        'mass-delete-success' => 'Category Reward deleted successfully',
                        'mass-update-success' => 'Category Reward updated successfully',
                        'name' => 'Name',
                        'reward-points' => 'Reward Points',
                        'sku' => 'SKU',
                        'start-date' => 'Start Date',
                        'status' => 'Status',
                        'update-status' => 'Update',

                        'options' => [
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Active',
                    'add-btn' => 'Create Category Reward',
                    'end-date' => 'End Date',
                    'enter-reward-points' => 'Enter Reward Points',
                    'inactive' => 'Inactive',
                    'save-btn' => 'Save Category Reward',
                    'select-category' => 'Select Category',
                    'select-status' => 'Select Status',
                    'start-date' => 'Start Date',
                    'status' => 'Status',
                    'title' => 'Add Reward Point on Category',
                ],

                'edit' => [
                    'active' => 'Active',
                    'add-btn' => 'Create Category Reward',
                    'end-date' => 'End Date',
                    'enter-reward-points' => 'Enter Reward Points',
                    'inactive' => 'Inactive',
                    'save-btn' => 'Update Category Reward',
                    'select-category' => 'Select Category',
                    'select-status' => 'Select Status',
                    'start-date' => 'Start Date',
                    'status' => 'Status',
                    'title' => 'Edit Reward Point on Category',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Create Category Time Specific Reward',
                    'category-specific-time' => 'Category Specific Time',
                    'title' => 'Reward Point on Category For Specific Time',
                ],

                'create' => [
                    'save-btn' => 'Save Category Reward For Time Specific',
                    'title' => 'Add Reward Point on Category For Time Specific',
                ],

                'edit' => [
                    'save-btn' => 'Update Category Reward For Time Specific',
                    'title' => 'Edit Reward Point on Category For Time Specific',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Add Reward Point on Cart',
                    'create-success' => 'Cart Reward created successfully',
                    'delete-failed' => 'Cart Reward not deleted !',
                    'delete-success' => 'Cart Reward deleted successfully',
                    'error-cart' => 'There is no Cart Select',
                    'title' => 'Reward Point on Cart',
                    'update-success' => 'Cart Reward updated successfully',

                    'datagrid' => [
                        'amount-from' => 'Amount From',
                        'amount-to' => 'Amount To',
                        'delete' => 'Delete',
                        'edit' => 'Edit',
                        'end-date' => 'End Date',
                        'id' => 'Id',
                        'mass-delete-success' => 'Cart Reward deleted successfully',
                        'mass-update-success' => 'Cart Reward updated successfully',
                        'name' => 'Name',
                        'reward-points' => 'Reward Points',
                        'sku' => 'SKU',
                        'start-date' => 'Start Date',
                        'status' => 'Status',
                        'update-status' => 'Update',

                        'options' => [
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Active',
                    'add-btn' => 'Add Reward Point on Cart',
                    'amount-from' => 'Amount From',
                    'amount-to' => 'Amount To',
                    'end-date' => 'End Date',
                    'enter-reward-points' => 'Enter Reward Points',
                    'inactive' => 'Inactive',
                    'save-btn' => 'Save Cart Reward',
                    'select-status' => 'Select Status',
                    'start-date' => 'Start Date',
                    'status' => 'Status',
                    'title' => 'Add Reward Point on Cart',
                ],

                'edit' => [
                    'active' => 'Active',
                    'add-btn' => 'Add Reward Point on Cart',
                    'amount-from' => 'Amount From',
                    'amount-to' => 'Amount To',
                    'end-date' => 'End Date',
                    'enter-reward-points' => 'Enter Reward Points',
                    'inactive' => 'Inactive',
                    'save-btn' => 'Update Cart Reward',
                    'select-status' => 'Select Status',
                    'start-date' => 'Start Date',
                    'status' => 'Status',
                    'title' => 'Edit Reward Point on Cart',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Create Reward Point on Attribute',
                    'create-success' => 'Attribute Reward created successfully',
                    'delete-failed' => 'Attribute Reward not deleted !',
                    'delete-success' => 'Attribute Reward deleted successfully',
                    'error-cart' => 'There is no Attribute Select',
                    'title' => 'Reward Point on Attributes',
                    'update-success' => 'Attribute Reward updated successfully',

                    'datagrid' => [
                        'code' => 'Code',
                        'delete' => 'Delete',
                        'edit' => 'Edit',
                        'id' => 'Id',
                        'mass-delete-success' => 'Attribute Reward deleted successfully',
                        'mass-update-success' => 'Attribute Reward updated successfully',
                        'name' => 'Name',
                        'reward-points' => 'Reward Points',
                        'sku' => 'SKU',
                        'status' => 'Status',
                        'update-status' => 'Update',

                        'options' => [
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Active',
                    'enter-reward-points' => 'Enter Reward Points',
                    'inactive' => 'Inactive',
                    'reward_points' => 'Attribute Points',
                    'save-btn' => 'Save Reward Point on Attribute',
                    'select-attributes' => 'Select Attribute',
                    'select-status' => 'Select Status',
                    'status' => 'Status',
                    'title' => 'Add Reward Point on Attributes',
                ],

                'edit' => [
                    'active' => 'Active',
                    'edit-btn' => 'Update Reward Point on Attribute',
                    'enter-reward-points' => 'Enter Reward Points',
                    'inactive' => 'Inactive',
                    'reward_points' => 'Attribute Points',
                    'select-attributes' => 'Select Attribute',
                    'select-status' => 'Select Status',
                    'status' => 'Status',
                    'title' => 'Edit Reward Point on Attributes',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Reward System Details',

                    'datagrid' => [
                        'active' => 'Active',
                        'id' => 'ID',
                        'inactive' => 'Inactive',
                        'name' => 'Name',
                        'reward-points' => 'Reward Points',
                        'status' => 'Status',
                        'used-rewards-points' => 'Used Rewards Points',
                        'view' => 'View',
                    ],
                ],

                'view' => [
                    'title' => 'Reward System Details',

                    'datagrid' => [
                        'approved' => 'Approved',
                        'attribute-id' => 'Attribute ID',
                        'canceled' => 'Canceled',
                        'category-id' => 'Category ID',
                        'closed' => 'Closed',
                        'created-at' => 'Transaction At',
                        'exp-date' => 'Expiration Date',
                        'expire' => 'Expire',
                        'fraud' => 'Fraud',
                        'id' => 'ID',
                        'name' => 'Name',
                        'note' => 'Note',
                        'order-id' => 'Order ID',
                        'pending' => 'Pending',
                        'processing' => 'Processing',
                        'product-id' => 'Product ID',
                        'reward-points' => 'Reward Points',
                        'status' => 'Status',
                        'total-reward-points' => 'Total Rewards Points',
                        'used' => 'Used',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Conversion rate for cart Subtotal Redemption',
                    'conversion' => 'Conversion Rate',
                    'enable-apply-points-label' => 'Allow customers to apply points during checkout',
                    'enable-apply-points' => 'Enable Apply points during checkout',
                    'points' => 'Points',
                    'redemption-cart-label' => 'Allow Customers to apply points during cart',
                    'redemption-cart' => 'Redemption Over Cart Subtotal',
                    'save-btn' => 'Save',
                    'title' => 'Redemption Settings',
                    'update-success' => 'Redemption Settings updated successfully',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Reward Points',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Your Rewards Points',

                        'datagrid' => [
                            'approved' => 'Approved',
                            'attribute-id' => 'Attribute ID',
                            'canceled' => 'Canceled',
                            'category-id' => 'Category ID',
                            'closed' => 'Closed',
                            'created-at' => 'Transaction At',
                            'exp-date' => 'Expiration Date',
                            'expire' => 'Expire',
                            'fraud' => 'Fraud',
                            'id' => 'ID',
                            'name' => 'Name',
                            'note' => 'Note',
                            'order-id' => 'Order ID',
                            'pending' => 'Pending',
                            'processing' => 'Processing',
                            'product-id' => 'Product ID',
                            'reward-points' => 'Reward Points',
                            'status' => 'Status',
                            'total-reward-points' => 'Total Rewards Points',
                            'used' => 'Used',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Buy This product and Get :reward Points Offer Limit Till :end_date',
            'product-reward' => 'Buy This product and Get :reward Points',

            'review' => [
                'review-points' => 'Make A Review and get :points points',
            ],
        ],

        'register' => [
            'register-reward' => 'Register as a member of our family and get :points points',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Reward Points',
                    'reward-points-earned' => 'Reward Points Earned',

                    'summary' => [
                        'reward_points' => 'Total Reward Points Awarded',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Apply Points',
                    'button-title' => 'Apply',
                    'enter-points' => 'Enter Points',
                    'reward-points' => 'Apply Rewards Points',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Apply Points',
            'enter-points' => 'Enter Points',
            'points-used' => 'Points Used',
            'redemption-setting' => 'Info: :points point(s) is equal to :conversion_rate',
            'total-point' => 'Your Total Point :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Cannot Apply Points',
            'grandtotal' => 'Grand Total',
            'invalid-points' => 'The Point field is required',
            'only-number' => 'The Point field is must be 1 or more',
            'points-applied' => 'Applied Points',
            'points-apply-issue' => 'Points code can\'t be applied.',
            'points' => 'Points',
            'redem-points' => 'Redeem Points (-)',
            'remove-points' => 'Remove Points',
            'success-points' => 'Points code applied successfully.',
            'total-reward-points-awarded' => 'Total Reward Points Awarded',
            'unauthorized-use-points' => 'You can not use any reward point at this time, contact to admin.',
            'use-can-use-only' => 'You can use only ',
            'warning-required-less-point' => 'Reward point redemption should be less then product price.',
            'you-have-only' => 'You have only ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Welcome and thank you for registering with us!',
            'points-rewarded' => 'You have rewarded :points points for registration',
            'subject' => 'New Customer Registration',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'review' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Thank you for review the :product_name !',
            'points-rewarded' => 'You have rewarded :points for review',
            'subject' => 'Customer Review',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'dob' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Happy Birthday to you!',
            'points-rewarded' => 'You have rewarded :points for birthday',
            'subject' => 'Customer Date of Birth',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'pending' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Thank you for ordering the products from our website !',
            'points-rewarded' => 'After Order No. #:order_id approved you can use :points Points ',
            'status' => 'pending',
            'subject' => 'Customer Order',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'used' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Thank you for using reward points to buy products from our website !',
            'points-rewarded' => 'You have used :points Points for Order No. #:order_id',
            'status' => 'Used',
            'subject' => 'Customer Use Reward Points',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'approved' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'You Reward Points have been Approved !',
            'points-rewarded' => 'You have rewarded :points Points for Order No #:order_id',
            'status' => 'approved',
            'subject' => 'Reward Point Approved',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'processing' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed on :date to Processing !',
            'points-rewarded' => 'Status Changed for Order No #:order_id',
            'status' => 'approved',
            'subject' => 'Reward Point Processing',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'expire' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed on :date To Expired !',
            'points-rewarded' => 'Status Changed for Order No #:order_id',
            'status' => 'expired',
            'subject' => 'Reward Point Expired',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'closed' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed on :date to  Closed !',
            'points-rewarded' => 'Status Changed To Closed for Order No #:order_id',
            'status' => 'closed',
            'subject' => 'Reward Point Expired',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'cancel' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'You Reward Points have  been Cancel on :date  !',
            'points-rewarded' => 'You have canceled :points for Order No #:order_id',
            'status' => 'cancel',
            'subject' => 'Reward Point Expired',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],

        'fraud' => [
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed To Fraud !',
            'points-rewarded' => 'You have canceled :points for Order No #:order_id on :date ',
            'status' => 'Fraud',
            'subject' => 'Reward Point Fraud',
            'thanks' => 'Thanks!',
            'total-point-left' => 'You have :total_reward_points left',
            'used-points' => 'You have used  :used_reward_points points',
        ],
    ],
];
