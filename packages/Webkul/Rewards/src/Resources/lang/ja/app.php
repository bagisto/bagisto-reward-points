<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => '交換設定',
                    'reward-point-on-attribute' => '属性に対するリワードポイント',
                    'reward-point-on-cart' => 'カートに対するリワードポイント',
                    'reward-point-on-category-for-specific-time' => '特定の時間に対するカテゴリのリワードポイント',
                    'reward-point-on-category' => 'カテゴリに対するリワードポイント',
                    'reward-point-on-product-for-specific-time' => '特定の時間に対する製品のリワードポイント',
                    'reward-point-on-product' => '製品に対するリワードポイント',
                    'reward-point' => 'リワードポイント',
                    'reward-system-details' => 'リワードシステムの詳細',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => '顧客の活動を追跡し、将来の割引や特典に対してポイントで報酬を与えるプログラムを設定します。',
                    'setting' => '設定',
                    'title' => 'リワードポイント',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name を正常に削除しました。',
                            'email-notification' => 'メール通知',
                            'reward-used-at-one-time' => '一度に使用されるリワードポイント',
                            'reward-when-customer-dob-exp-days' => '顧客の誕生日にリワードポイントが有効期限切れになるまでの日数',
                            'reward-when-customer-dob' => '顧客の誕生日に対する報酬',
                            'reward-when-customer-register-exp-days' => '顧客登録後、リワードポイントの有効期限が切れるまでの日数',
                            'reward-when-customer-register' => '顧客が登録したときの報酬',
                            'reward-when-product-reviewed-exp-days' => '製品レビュー後、リワードポイントの有効期限が切れるまでの日数',
                            'reward-when-product-reviewed' => '製品がレビューされたときの報酬',
                            'status' => 'モジュールのステータス',
                            'update-success' => ':name を正常に更新しました。',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => '製品リワードを作成',
                    'create-success' => '製品リワードが正常に作成されました',
                    'delete-failed' => '製品リワードが削除されませんでした!',
                    'delete-success' => '製品リワードが正常に削除されました',
                    'error-product' => '選択された製品はありません',
                    'title' => '製品のリワードポイント',
                    'update-success' => '製品リワードが正常に更新されました',

                    'datagrid' => [
                        'delete' => '削除',
                        'edit' => '編集',
                        'end-date' => '終了日',
                        'id' => 'ID',
                        'mass-delete-success' => '製品リワードが正常に削除されました',
                        'mass-update-success' => '製品リワードが正常に更新されました',
                        'name' => '名前',
                        'reward-points' => 'リワードポイント',
                        'sku' => 'SKU',
                        'start-date' => '開始日',
                        'status' => 'ステータス',
                        'update-status' => '更新',

                        'options' => [
                            'active' => 'アクティブ',
                            'inactive' => '非アクティブ',
                        ],
                    ],

                    'create' => [
                        'active' => 'アクティブ',
                        'create-btn' => '製品特定のリワードを作成',
                        'end-date' => '終了日',
                        'enter-reward-points' => 'リワードポイントを入力',
                        'inactive' => '非アクティブ',
                        'save-btn' => '製品リワードを保存',
                        'select-product' => '製品を選択',
                        'select-status' => 'ステータスを選択',
                        'start-date' => '開始日',
                        'status' => 'ステータス',
                        'title' => '製品のリワードポイント',
                    ],

                    'edit' => [
                        'active' => 'アクティブ',
                        'create-btn' => '製品特定のリワードを作成',
                        'end-date' => '終了日',
                        'enter-reward-points' => 'リワードポイントを入力',
                        'inactive' => '非アクティブ',
                        'save-btn' => '製品リワードを更新',
                        'select-product' => '製品を選択',
                        'select-status' => 'ステータスを選択',
                        'start-date' => '開始日',
                        'status' => 'ステータス',
                        'title' => '製品のリワードポイント',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => '製品リワードを作成',
                    'title' => '特定の時間内の製品のリワードポイント',

                    'create' => [
                        'create-btn' => '時間特定のリワードを作成',
                        'save-btn' => '時間特定の製品リワードを保存',
                        'title' => '時間特定のリワードを追加',
                    ],

                    'edit' => [
                        'save-btn' => '時間特定の製品リワードを更新',
                        'title' => '時間特定のリワードを編集',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'カテゴリリワードを作成',
                    'category-specific-time' => 'カテゴリ特定の時間',
                    'create-success' => 'カテゴリリワードが正常に作成されました',
                    'delete-failed' => 'カテゴリリワードが削除されませんでした!',
                    'delete-success' => 'カテゴリリワードが正常に削除されました',
                    'error-category' => '選択されたカテゴリはありません',
                    'specific-title' => 'カテゴリ特定のリワードを作成',
                    'title' => 'カテゴリのリワードポイント',
                    'update-success' => 'カテゴリリワードが正常に更新されました',

                    'datagrid' => [
                        'delete' => '削除',
                        'edit' => '編集',
                        'end-date' => '終了日',
                        'id' => 'ID',
                        'mass-delete-success' => 'カテゴリリワードが正常に削除されました',
                        'mass-update-success' => 'カテゴリリワードが正常に更新されました',
                        'name' => '名前',
                        'reward-points' => 'リワードポイント',
                        'sku' => 'SKU',
                        'start-date' => '開始日',
                        'status' => 'ステータス',
                        'update-status' => '更新',

                        'options' => [
                            'active' => 'アクティブ',
                            'inactive' => '非アクティブ',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'アクティブ',
                    'add-btn' => 'カテゴリリワードを作成',
                    'end-date' => '終了日',
                    'enter-reward-points' => 'リワードポイントを入力',
                    'inactive' => '非アクティブ',
                    'save-btn' => 'カテゴリリワードを保存',
                    'select-category' => 'カテゴリを選択',
                    'select-status' => 'ステータスを選択',
                    'start-date' => '開始日',
                    'status' => 'ステータス',
                    'title' => 'カテゴリにリワードポイントを追加',
                ],

                'edit' => [
                    'active' => 'アクティブ',
                    'add-btn' => 'カテゴリリワードを作成',
                    'end-date' => '終了日',
                    'enter-reward-points' => 'リワードポイントを入力',
                    'inactive' => '非アクティブ',
                    'save-btn' => 'カテゴリリワードを更新',
                    'select-category' => 'カテゴリを選択',
                    'select-status' => 'ステータスを選択',
                    'start-date' => '開始日',
                    'status' => 'ステータス',
                    'title' => 'カテゴリのリワードポイントを編集',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'カテゴリの時間特定リワードを作成',
                    'category-specific-time' => 'カテゴリ特定の時間',
                    'title' => '特定の時間内のカテゴリのリワードポイント',
                ],

                'create' => [
                    'save-btn' => '時間特定のカテゴリリワードを保存',
                    'title' => '特定の時間内のカテゴリリワードを追加',
                ],

                'edit' => [
                    'save-btn' => '時間特定のカテゴリリワードを更新',
                    'title' => '時間特定のカテゴリリワードを編集',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'カートに報酬ポイントを追加',
                    'create-success' => 'カート報酬が成功裏に作成されました',
                    'delete-failed' => 'カート報酬を削除できませんでした!',
                    'delete-success' => 'カート報酬が成功裏に削除されました',
                    'error-cart' => '選択されたカートがありません',
                    'title' => 'カート内の報酬ポイント',
                    'update-success' => 'カート報酬が成功裏に更新されました',

                    'datagrid' => [
                        'amount-from' => '金額から',
                        'amount-to' => '金額まで',
                        'delete' => '削除',
                        'edit' => '編集',
                        'end-date' => '終了日',
                        'id' => 'ID',
                        'mass-delete-success' => 'カート報酬が成功裏に削除されました',
                        'mass-update-success' => 'カート報酬が成功裏に更新されました',
                        'name' => '名前',
                        'reward-points' => '報酬ポイント',
                        'sku' => 'SKU',
                        'start-date' => '開始日',
                        'status' => 'ステータス',
                        'update-status' => '更新',

                        'options' => [
                            'active' => 'アクティブ',
                            'inactive' => '非アクティブ',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'アクティブ',
                    'add-btn' => 'カートに報酬ポイントを追加',
                    'amount-from' => '金額から',
                    'amount-to' => '金額まで',
                    'end-date' => '終了日',
                    'enter-reward-points' => '報酬ポイントを入力',
                    'inactive' => '非アクティブ',
                    'save-btn' => 'カート報酬を保存',
                    'select-status' => 'ステータスを選択',
                    'start-date' => '開始日',
                    'status' => 'ステータス',
                    'title' => 'カートに報酬ポイントを追加',
                ],

                'edit' => [
                    'active' => 'アクティブ',
                    'add-btn' => 'カートに報酬ポイントを追加',
                    'amount-from' => '金額から',
                    'amount-to' => '金額まで',
                    'end-date' => '終了日',
                    'enter-reward-points' => '報酬ポイントを入力',
                    'inactive' => '非アクティブ',
                    'save-btn' => 'カート報酬を更新',
                    'select-status' => 'ステータスを選択',
                    'start-date' => '開始日',
                    'status' => 'ステータス',
                    'title' => 'カート内の報酬ポイントを編集',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => '属性に報酬ポイントを追加',
                    'create-success' => '属性報酬が成功裏に作成されました',
                    'delete-failed' => '属性の削除に失敗しました!',
                    'delete-success' => '属性が成功裏に削除されました',
                    'error-cart' => '選択された属性がありません',
                    'title' => '属性の報酬ポイント',
                    'update-success' => '属性報酬が成功裏に更新されました',

                    'datagrid' => [
                        'code' => 'コード',
                        'delete' => '削除',
                        'edit' => '編集',
                        'id' => 'ID',
                        'mass-delete-success' => '属性が成功裏に削除されました',
                        'mass-update-success' => '属性が成功裏に更新されました',
                        'name' => '名前',
                        'reward-points' => '報酬ポイント',
                        'sku' => 'SKUコード',
                        'status' => 'ステータス',
                        'update-status' => '更新',

                        'options' => [
                            'active' => 'アクティブ',
                            'inactive' => '非アクティブ',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'アクティブ',
                    'enter-reward-points' => '報酬ポイントを入力してください',
                    'inactive' => '非アクティブ',
                    'reward_points' => '属性ポイント',
                    'save-btn' => '属性に報酬ポイントを保存',
                    'select-attributes' => '属性を選択してください',
                    'select-status' => 'ステータスを選択してください',
                    'status' => 'ステータス',
                    'title' => '属性の報酬ポイント',
                ],

                'edit' => [
                    'active' => 'アクティブ',
                    'edit-btn' => '属性に報酬ポイントを編集',
                    'enter-reward-points' => '報酬ポイントを入力してください',
                    'inactive' => '非アクティブ',
                    'reward_points' => '属性ポイント',
                    'select-attributes' => '属性を選択してください',
                    'select-status' => 'ステータスを選択してください',
                    'status' => 'ステータス',
                    'title' => '属性の報酬ポイント',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => '報酬システムの詳細',

                    'datagrid' => [
                        'active' => 'アクティブ',
                        'id' => 'ID',
                        'inactive' => '非アクティブ',
                        'name' => '名前',
                        'reward-points' => '報酬ポイント',
                        'status' => 'ステータス',
                        'used-rewards-points' => '使用済み報酬ポイント',
                        'view' => '表示',
                    ],
                ],

                'view' => [
                    'title' => '報酬システムの詳細',

                    'datagrid' => [
                        'approved' => '承認済み',
                        'attribute-id' => '属性ID',
                        'canceled' => 'キャンセル済み',
                        'category-id' => 'カテゴリーID',
                        'closed' => '閉鎖済み',
                        'created-at' => '作成日',
                        'exp-date' => '期限日',
                        'expire' => '期限切れ',
                        'fraud' => '詐欺',
                        'id' => 'ID',
                        'name' => '名前',
                        'note' => 'メモ',
                        'order-id' => '注文ID',
                        'pending' => '保留中',
                        'processing' => '処理中',
                        'product-id' => '商品ID',
                        'reward-points' => '報酬ポイント',
                        'status' => 'ステータス',
                        'total-reward-points' => '総報酬ポイント',
                        'used' => '使用済み',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'カート合計の変換率',
                    'conversion' => '変換率',
                    'enable-apply-points-label' => 'チェックアウト時にポイントの適用を顧客に許可する',
                    'enable-apply-points' => 'チェックアウト時のポイント適用を有効にする',
                    'points' => 'ポイント',
                    'redemption-cart-label' => '購入時にポイントの適用を顧客に許可する',
                    'redemption-cart' => 'カート合計の変換',
                    'save-btn' => '保存',
                    'title' => '報酬システムの詳細',
                    'update-success' => 'リデンプション設定が成功裏に更新されました',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'リワードポイント',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'あなたのリワードポイント',

                        'datagrid' => [
                            'approved' => '承認済み',
                            'attribute-id' => '属性ID',
                            'canceled' => 'キャンセル済み',
                            'category-id' => 'カテゴリID',
                            'closed' => '閉鎖済み',
                            'created-at' => '取引日',
                            'exp-date' => '有効期限',
                            'expire' => '期限切れ',
                            'fraud' => '詐欺',
                            'id' => 'ID',
                            'name' => '名前',
                            'note' => 'メモ',
                            'order-id' => '注文ID',
                            'pending' => '保留中',
                            'processing' => '処理中',
                            'product-id' => '商品ID',
                            'reward-points' => 'リワードポイント',
                            'status' => 'ステータス',
                            'total-reward-points' => '総リワードポイント',
                            'used' => '使用済み',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'この商品を購入して :reward ポイントを獲得。オファーは :end_date まで有効です',
            'product-reward' => 'この商品を購入して :reward ポイントを獲得',

            'review' => [
                'review-points' => 'レビューを書いて :points ポイントを獲得',
            ],
        ],

        'register' => [
            'register-reward' => '私たちの家族の一員として登録して :points ポイントを獲得',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'リワードポイント',
                    'reward-points-earned' => '獲得したリワードポイント',

                    'summary' => [
                        'reward_points' => '総リワードポイント',
                    ],
                ],

                'points' => [
                    'apply-points' => 'ポイントを適用',
                    'button-title' => '適用',
                    'enter-points' => 'ポイントを入力',
                    'reward-points' => 'リワードポイントを適用',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'ポイントを適用する',
            'enter-points' => 'ポイントを入力する',
            'points-used' => '使用済みポイント',
            'redemption-setting' => '情報: :points ポイントは :conversion_rate に相当します',
            'total-point' => 'あなたの合計ポイント: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'ポイントを適用できません',
            'grandtotal' => '合計',
            'invalid-points' => 'ポイント欄は必須です',
            'only-number' => 'ポイント欄は1以上でなければなりません',
            'points-applied' => '適用されたポイント',
            'points-apply-issue' => 'ポイントコードを適用できません。',
            'points' => 'ポイント',
            'redem-points' => 'ポイントを引き換える (-)',
            'remove-points' => 'ポイントを削除',
            'success-points' => 'ポイントコードが正常に適用されました。',
            'total-reward-points-awarded' => '授与された合計報酬ポイント',
            'unauthorized-use-points' => '現在、報酬ポイントを使用することはできません。管理者に連絡してください。',
            'use-can-use-only' => 'のみ使用できます ',
            'warning-required-less-point' => '報酬ポイントの引き換えは、商品の価格よりも少なくする必要があります。',
            'you-have-only' => 'あなたにはまだ ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => 'ご登録ありがとうございます、そしてようこそ!',
            'points-rewarded' => '登録のために :points ポイントが付与されました',
            'subject' => '新規顧客登録',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'review' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => ':product_name のレビューありがとうございます!',
            'points-rewarded' => 'レビューに対して :points ポイントが付与されました',
            'subject' => '顧客レビュー',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'dob' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => 'お誕生日おめでとうございます!',
            'points-rewarded' => 'お誕生日のために :points ポイントが付与されました',
            'subject' => '顧客の誕生日',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'pending' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => '当サイトでのご注文ありがとうございます!',
            'points-rewarded' => '注文番号 #:order_id の承認後、:points ポイントをご利用いただけます',
            'status' => '保留中',
            'subject' => '顧客注文',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'used' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => '当サイトでの製品購入に対してポイントを使用していただきありがとうございます!',
            'points-rewarded' => '注文番号 #:order_id に対して :points ポイントを使用しました',
            'status' => '使用済み',
            'subject' => '顧客のポイント使用',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'approved' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => 'ポイントが承認されました!',
            'points-rewarded' => '注文番号 #:order_id に対して :points ポイントが付与されました',
            'status' => '承認済み',
            'subject' => 'ポイント承認',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'processing' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => ':date に処理中にステータスが変更されました!',
            'points-rewarded' => '注文番号 #:order_id のステータスが変更されました',
            'status' => '承認済み',
            'subject' => 'ポイント処理',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'expire' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => ':date にステータスが期限切れに変更されました!',
            'points-rewarded' => '注文番号 #:order_id のステータスが変更されました',
            'status' => '期限切れ',
            'subject' => 'ポイント期限切れ',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'closed' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => ':date にステータスがクローズに変更されました!',
            'points-rewarded' => '注文番号 #:order_id のステータスがクローズに変更されました',
            'status' => 'クローズ',
            'subject' => 'ポイントクローズ',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'cancel' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => ':date にポイントがキャンセルされました!',
            'points-rewarded' => '注文番号 #:order_id のために :points ポイントがキャンセルされました',
            'status' => 'キャンセル',
            'subject' => 'ポイントキャンセル',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],

        'fraud' => [
            'dear' => '親愛なる :customer_name 様',
            'greeting' => 'ステータスが不正行為に変更されました!',
            'points-rewarded' => ':date に注文番号 #:order_id の :points ポイントがキャンセルされました',
            'status' => '不正行為',
            'subject' => 'ポイント不正行為',
            'thanks' => 'ありがとうございます!',
            'total-point-left' => '残り :total_reward_points ポイントがあります',
            'used-points' => '使用済みポイント :used_reward_points ポイント',
        ],
    ],
];
