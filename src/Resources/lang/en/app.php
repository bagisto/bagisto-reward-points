<?php

return [
    "rewards" => [
        "module-status" => "Module Status",
        "product" => "Select Product",
        "products" => "Reward Point on Product",
        "products-specific-time" => "Product Specific Time",
        "category" => "Select Category",
        "categorys" => "Reward Point on Category",
        "category-specific-time" => "Category Specific Time",
        "cart" => "Reward Point on Cart",
        "attributes" => "Reward Point on Attributes",
        "system-details" => "Reward System Details",
        "reward_points" => "Reward Points",
        "status" => "Status",
        "start_time" => "Start Time",
        "end_time" => "End Time",
        "amount_from" => "Amount From",
        "amount_to" => "Amount To",
        "start_date" => "Start Date",
        "end_date" => "End Date",
        "general" => "General",
        "note" => "Note",
        "enter-reward-points" => "Enter Reward Points",
        "attribute" => "Attribute",
        "status" => "Status",
        "reward-when-customer-register" => "Reward When Customer Register",
        "reward-when-customer-register-exp-days" => "After How many days the Reward Point Expire on Customer Register",
        "reward-when-customer-dob" => "Reward For Customer Date Of Birth",
        "reward-when-customer-dob-exp-days" => "After How many days the Reward Point Expire on Customer Date Of Birth ",
        "reward-when-product-reviewed" => "Reward when Product Reviewed",
        "reward-when-product-reviewed-exp-days" => "After How many days the Reward Point Expire on Product Reviewed",
        "save-btn-title" => "Save",
        "module-enable-disable" => "Module Enable Or Disable",
        "add-product-reward" => "Add Product Reward",
        "add-product-specific-reward" => "Add Product Specific Reward",
        "add-category-reward" => "Add Category Reward",
        "add-category-specific-reward" => "Add Category Specific Reward",
        "discount" => "Discount When Purchased",
        "redemption" => "Redemption Settings",
        "redemption-cart" => "Redemption Over Cart Subtotal",
        "redemption-cart-label" => "Allow Customers to apply points during cart",
        "conversion-rate" => "Conversion rate for cart Subtotal Redemption",
        "enable-apply-points" => "Enable Apply points during checkout",
        "enable-apply-points-label" => "Allow customers to apply points during checkout",
        'email-notification' => 'Email Notifications',
        'reward-used-at-one-time' => 'Reward Point Used At One time'
    ],
    'layouts' => [
        'reward_points' => 'Reward Points'
    ],
    'account' => [
        'reward_points' => [
            'index' => [
                'page-title' => 'Reward Points',
                'transaction_at' => 'Transaction At',
                'reward-points' => 'Reward Points',
                'exp-date' => 'Expiration Date',
                'note' => 'Note',
                'processing' => 'Processing',
                'fraud' => 'Fraud',
                'approved' => 'Approved',
                'canceled' => 'Canceled',
                'closed' => 'Closed',
                'pending' => 'Pending',
                'expire' => 'Expire',
                'used' => 'Used',
                'status' => 'Status',
                'attribute-id' => 'Attribute ID',
                'category-id' => 'Category ID',
                'product-id'  => 'Product ID',
                'order-id' => 'Order ID'

            ],
        ],
    ],
  
    'checkout' => [
        'onepage' => [
            'apply-points' => 'Apply Points',
            'points-used' => 'Points Used',
            'enter-points' => 'Enter Points',
            'apply-points' => 'Apply Points',
        ],

        'total' => [
            'points' => 'Points',
            'points-applied' => 'Applied Points',
            'remove-points' => 'Remove Points',
            'cannot-apply-points' => 'Cannot Apply Points',
            'invalid-points' => 'Points code is invalid.',
            'success-points' => 'Points code applied successfully.',
            'points-apply-issue' => 'Points code can\'t be applied.',
        ],

    ],

    'mail' => [

        'registration' => [
            'subject' => 'New Customer Registration',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Welcome and thank you for registering with us!',
            'points-rewarded' => 'You have rewarded :points points for registration',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
        ],

        'review' => [
            'subject' => 'Customer Review',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Thank you for review the :product_name !',
            'points-rewarded' => 'You have rewarded :points for review',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
        ],

        'dob' => [
            'subject' => 'Customer Date of Birth',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Happy Birthday to you!',
            'points-rewarded' => 'You have rewarded :points for birthday',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
        ],

        'pending' => [
            'subject' => 'Customer Order',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Thank you for ordering the products from our website !',
            'points-rewarded' => 'After Order No. #:order_id approved you can use :points Points ',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'pending'
        ],

        'used' => [
            'subject' => 'Customer Use Reward Points',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Thank you for using reward points to buy products from our website !',
            'points-rewarded' => 'You have used :points Points for Order No. #:order_id',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'Used'
        ],

        'approved' => [
            'subject' => 'Reward Point Approved',
            'dear' => 'Dear :customer_name',
            'greeting' => 'You Reward Points have been Approved !',
            'points-rewarded' => 'You have rewarded :points Points for Order No #:order_id',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'approved'
        ],

        'processing' => [
            'subject' => 'Reward Point Proccessing',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Statu Changed on :date to Processing !',
            'points-rewarded' => 'Status Changed for Order No #:order_id',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'approved'
        ],

        'expire' => [
            'subject' => 'Reward Point Expired',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed on :date To Expired !',
            'points-rewarded' => 'Status Changed for Order No #:order_id',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'expired'
        ],

        'closed' => [
            'subject' => 'Reward Point Expired',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed on :date to  Closed !',
            'points-rewarded' => 'Status Changed To Closed for Order No #:order_id',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'closed'
        ],


        'cancel' => [
            'subject' => 'Reward Point Expired',
            'dear' => 'Dear :customer_name',
            'greeting' => 'You Reward Points have  been Cancel on :date  !',
            'points-rewarded' => 'You have canceled :points for Order No #:order_id',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'cancel'
        ],



        'fraud' => [
            'subject' => 'Reward Point Fraud',
            'dear' => 'Dear :customer_name',
            'greeting' => 'Status Changed To Fraud !',
            'points-rewarded' => 'You have canceled :points for Order No #:order_id on :date ',
            'used-points' => 'You have used  :used_reward_points points',
            'total-point-left' => 'You have :total_reward_points left',
            'thanks' => 'Thanks!',
            'status' => 'Fraud'
        ],

    ],


];
