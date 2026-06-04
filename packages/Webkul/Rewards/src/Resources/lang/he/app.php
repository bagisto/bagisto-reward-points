<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'הגדרות מימוש',
                    'reward-point-on-attribute' => 'נקודת תגמול על תכונה',
                    'reward-point-on-cart' => 'נקודת תגמול בעגלה',
                    'reward-point-on-category-for-specific-time' => 'נקודת תגמול על קטגוריה לזמן מסוים',
                    'reward-point-on-category' => 'נקודת תגמול על קטגוריה',
                    'reward-point-on-product-for-specific-time' => 'נקודת תגמול על מוצר לזמן מסוים',
                    'reward-point-on-product' => 'נקודת תגמול על מוצר',
                    'reward-point' => 'נקודת תגמול',
                    'reward-system-details' => 'פרטי מערכת תגמול',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'הגדר תוכנית העוקבת אחר פעילות הלקוחות ומתגמלת אותם בנקודות להנחות או הטבות עתידיות.',
                    'setting' => 'הגדרה',
                    'title' => 'נקודת תגמול',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name נמחק בהצלחה.',
                            'email-notification' => 'התראות בדוא"ל',
                            'reward-used-at-one-time' => 'נקודת תגמול שנעשה בה שימוש פעם אחת',
                            'reward-when-customer-dob-exp-days' => 'לאחר כמה ימים יפוגו נקודות תגמול לפי תאריך לידה של לקוח',
                            'reward-when-customer-dob' => 'תגמול לתאריך הלידה של הלקוח',
                            'reward-when-customer-register-exp-days' => 'לאחר כמה ימים יפוגו נקודות תגמול לאחר רישום לקוח',
                            'reward-when-customer-register' => 'תגמול ברישום לקוח',
                            'reward-when-product-reviewed-exp-days' => 'לאחר כמה ימים יפוגו נקודות תגמול על ביקורת מוצר',
                            'reward-when-product-reviewed' => 'תגמול על ביקורת מוצר',
                            'status' => 'מצב מודול',
                            'update-success' => ':name עודכן בהצלחה.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'צור פרס מוצר',
                    'create-success' => 'פרס מוצר נוצר בהצלחה',
                    'delete-failed' => 'המחיקה נכשלה!',
                    'delete-success' => 'פרס מוצר נמחק בהצלחה',
                    'error-product' => 'לא נבחר מוצר',
                    'title' => 'נקודות פרס על מוצר',
                    'update-success' => 'פרס מוצר עודכן בהצלחה',

                    'datagrid' => [
                        'delete' => 'מחק',
                        'edit' => 'ערוך',
                        'end-date' => 'תאריך סיום',
                        'id' => 'מזהה',
                        'mass-delete-success' => 'פרס מוצר נמחק בהצלחה',
                        'mass-update-success' => 'פרס מוצר עודכן בהצלחה',
                        'name' => 'שם',
                        'reward-points' => 'נקודות פרס',
                        'sku' => 'מק"ט',
                        'start-date' => 'תאריך התחלה',
                        'status' => 'מצב',
                        'update-status' => 'עדכן',

                        'options' => [
                            'active' => 'פעיל',
                            'inactive' => 'לא פעיל',
                        ],
                    ],

                    'create' => [
                        'active' => 'פעיל',
                        'create-btn' => 'צור פרס ייחודי למוצר',
                        'end-date' => 'תאריך סיום',
                        'enter-reward-points' => 'הזן נקודות פרס',
                        'inactive' => 'לא פעיל',
                        'save-btn' => 'שמור פרס מוצר',
                        'select-product' => 'בחר מוצר',
                        'select-status' => 'בחר מצב',
                        'start-date' => 'תאריך התחלה',
                        'status' => 'מצב',
                        'title' => 'נקודות פרס על מוצר',
                    ],

                    'edit' => [
                        'active' => 'פעיל',
                        'create-btn' => 'צור פרס ייחודי למוצר',
                        'end-date' => 'תאריך סיום',
                        'enter-reward-points' => 'הזן נקודות פרס',
                        'inactive' => 'לא פעיל',
                        'save-btn' => 'עדכן פרס מוצר',
                        'select-product' => 'בחר מוצר',
                        'select-status' => 'בחר מצב',
                        'start-date' => 'תאריך התחלה',
                        'status' => 'מצב',
                        'title' => 'נקודות פרס על מוצר',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'צור פרס מוצר',
                    'title' => 'נקודות פרס על מוצר לזמן ייחודי',

                    'create' => [
                        'create-btn' => 'צור פרס לזמן ייחודי',
                        'save-btn' => 'שמור פרס לזמן ייחודי',
                        'title' => 'הוסף פרס לזמן ייחודי',
                    ],

                    'edit' => [
                        'save-btn' => 'עדכן פרס לזמן ייחודי',
                        'title' => 'ערוך פרס לזמן ייחודי',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'צור פרס קטגוריה',
                    'category-specific-time' => 'קטגוריה לזמן ייחודי',
                    'create-success' => 'פרס קטגוריה נוצר בהצלחה',
                    'delete-failed' => 'מחיקת פרס הקטגוריה נכשלה!',
                    'delete-success' => 'פרס קטגוריה נמחק בהצלחה',
                    'error-category' => 'לא נבחרה קטגוריה',
                    'specific-title' => 'צור פרס קטגוריה ייחודי',
                    'title' => 'נקודות פרס על קטגוריה',
                    'update-success' => 'פרס קטגוריה עודכן בהצלחה',

                    'datagrid' => [
                        'delete' => 'מחק',
                        'edit' => 'ערוך',
                        'end-date' => 'תאריך סיום',
                        'id' => 'מזהה',
                        'mass-delete-success' => 'פרס קטגוריה נמחק בהצלחה',
                        'mass-update-success' => 'פרס קטגוריה עודכן בהצלחה',
                        'name' => 'שם',
                        'reward-points' => 'נקודות פרס',
                        'sku' => 'מק"ט',
                        'start-date' => 'תאריך התחלה',
                        'status' => 'מצב',
                        'update-status' => 'עדכן',

                        'options' => [
                            'active' => 'פעיל',
                            'inactive' => 'לא פעיל',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'פעיל',
                    'add-btn' => 'צור פרס קטגוריה',
                    'end-date' => 'תאריך סיום',
                    'enter-reward-points' => 'הזן נקודות פרס',
                    'inactive' => 'לא פעיל',
                    'save-btn' => 'שמור פרס קטגוריה',
                    'select-category' => 'בחר קטגוריה',
                    'select-status' => 'בחר מצב',
                    'start-date' => 'תאריך התחלה',
                    'status' => 'מצב',
                    'title' => 'הוסף נקודות פרס על קטגוריה',
                ],

                'edit' => [
                    'active' => 'פעיל',
                    'add-btn' => 'צור פרס קטגוריה',
                    'end-date' => 'תאריך סיום',
                    'enter-reward-points' => 'הזן נקודות פרס',
                    'inactive' => 'לא פעיל',
                    'save-btn' => 'עדכן פרס קטגוריה',
                    'select-category' => 'בחר קטגוריה',
                    'select-status' => 'בחר מצב',
                    'start-date' => 'תאריך התחלה',
                    'status' => 'מצב',
                    'title' => 'ערוך נקודות פרס על קטגוריה',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'צור פרס קטגוריה לזמן ייחודי',
                    'category-specific-time' => 'קטגוריה לזמן ייחודי',
                    'title' => 'נקודות פרס על קטגוריה לזמן ייחודי',
                ],

                'create' => [
                    'save-btn' => 'שמור פרס קטגוריה לזמן ייחודי',
                    'title' => 'הוסף פרס קטגוריה לזמן ייחודי',
                ],

                'edit' => [
                    'save-btn' => 'עדכן פרס קטגוריה לזמן ייחודי',
                    'title' => 'ערוך פרס קטגוריה לזמן ייחודי',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'הוסף נקודות פרס לסל',
                    'create-success' => 'פרס סל נוצר בהצלחה',
                    'delete-failed' => 'לא ניתן למחוק את פרס הסל!',
                    'delete-success' => 'פרס סל נמחק בהצלחה',
                    'error-cart' => 'לא נבחר סל',
                    'title' => 'נקודות פרס בסל',
                    'update-success' => 'פרס סל עודכן בהצלחה',

                    'datagrid' => [
                        'amount-from' => 'סכום מ',
                        'amount-to' => 'סכום עד',
                        'delete' => 'מחק',
                        'edit' => 'ערוך',
                        'end-date' => 'תאריך סיום',
                        'id' => 'מזהה',
                        'mass-delete-success' => 'פרס סל נמחק בהצלחה',
                        'mass-update-success' => 'פרס סל עודכן בהצלחה',
                        'name' => 'שם',
                        'reward-points' => 'נקודות פרס',
                        'sku' => 'SKU',
                        'start-date' => 'תאריך התחלה',
                        'status' => 'סטטוס',
                        'update-status' => 'עדכן',

                        'options' => [
                            'active' => 'פעיל',
                            'inactive' => 'לא פעיל',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'פעיל',
                    'add-btn' => 'הוסף נקודות פרס לסל',
                    'amount-from' => 'סכום מ',
                    'amount-to' => 'סכום עד',
                    'end-date' => 'תאריך סיום',
                    'enter-reward-points' => 'הכנס נקודות פרס',
                    'inactive' => 'לא פעיל',
                    'save-btn' => 'שמור פרס סל',
                    'select-status' => 'בחר סטטוס',
                    'start-date' => 'תאריך התחלה',
                    'status' => 'סטטוס',
                    'title' => 'הוסף נקודות פרס לסל',
                ],

                'edit' => [
                    'active' => 'פעיל',
                    'add-btn' => 'הוסף נקודות פרס לסל',
                    'amount-from' => 'סכום מ',
                    'amount-to' => 'סכום עד',
                    'end-date' => 'תאריך סיום',
                    'enter-reward-points' => 'הכנס נקודות פרס',
                    'inactive' => 'לא פעיל',
                    'save-btn' => 'עדכן פרס סל',
                    'select-status' => 'בחר סטטוס',
                    'start-date' => 'תאריך התחלה',
                    'status' => 'סטטוס',
                    'title' => 'ערוך נקודות פרס בסל',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'הוסף נקודות תגמול לתכונה',
                    'create-success' => 'תכונת התגמול נוצרה בהצלחה',
                    'delete-failed' => 'כשלון בהסרת התכונה!',
                    'delete-success' => 'התכונה נמחקה בהצלחה',
                    'error-cart' => 'לא נבחרה שום תכונה',
                    'title' => 'נקודות תגמול לתכונות',
                    'update-success' => 'תכונת התגמול עודכנה בהצלחה',

                    'datagrid' => [
                        'code' => 'קוד',
                        'delete' => 'מחק',
                        'edit' => 'ערוך',
                        'id' => 'ID',
                        'mass-delete-success' => 'התכונה נמחקה בהצלחה',
                        'mass-update-success' => 'התכונה עודכנה בהצלחה',
                        'name' => 'שם',
                        'reward-points' => 'נקודות תגמול',
                        'sku' => 'קוד SKU',
                        'status' => 'סטטוס',
                        'update-status' => 'עדכן',

                        'options' => [
                            'active' => 'פעיל',
                            'inactive' => 'לא פעיל',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'פעיל',
                    'enter-reward-points' => 'הזן נקודות תגמול',
                    'inactive' => 'לא פעיל',
                    'reward_points' => 'נקודות תכונה',
                    'save-btn' => 'שמור נקודות תגמול לתכונה',
                    'select-attributes' => 'בחר תכונה',
                    'select-status' => 'בחר סטטוס',
                    'status' => 'סטטוס',
                    'title' => 'נקודות תגמול לתכונות',
                ],

                'edit' => [
                    'active' => 'פעיל',
                    'edit-btn' => 'ערוך נקודות תגמול לתכונה',
                    'enter-reward-points' => 'הזן נקודות תגמול',
                    'inactive' => 'לא פעיל',
                    'reward_points' => 'נקודות תכונה',
                    'select-attributes' => 'בחר תכונה',
                    'select-status' => 'בחר סטטוס',
                    'status' => 'סטטוס',
                    'title' => 'נקודות תגמול לתכונות',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'פרטי מערכת התגמולים',

                    'datagrid' => [
                        'active' => 'פעיל',
                        'id' => 'ID',
                        'inactive' => 'לא פעיל',
                        'name' => 'שם',
                        'reward-points' => 'נקודות תגמול',
                        'status' => 'סטטוס',
                        'used-rewards-points' => 'נקודות תגמול בשימוש',
                        'view' => 'צפה',
                    ],
                ],

                'view' => [
                    'title' => 'פרטי מערכת התגמולים',

                    'datagrid' => [
                        'approved' => 'מאושר',
                        'attribute-id' => 'מזהה תכונה',
                        'canceled' => 'בוטל',
                        'category-id' => 'מזהה קטגוריה',
                        'closed' => 'סגור',
                        'created-at' => 'תאריך יצירה',
                        'exp-date' => 'תאריך פקיעה',
                        'expire' => 'פג',
                        'fraud' => 'תרמית',
                        'id' => 'ID',
                        'name' => 'שם',
                        'note' => 'הערה',
                        'order-id' => 'מזהה הזמנה',
                        'pending' => 'ממתין',
                        'processing' => 'בעיבוד',
                        'product-id' => 'מזהה מוצר',
                        'reward-points' => 'נקודות תגמול',
                        'status' => 'סטטוס',
                        'total-reward-points' => 'סך כל נקודות התגמול',
                        'used' => 'בשימוש',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'שיעור המרה עבור סכום הסל הכולל',
                    'conversion' => 'שיעור המרה',
                    'enable-apply-points-label' => 'אפשר ללקוחות להשתמש בנקודות בעת התשלום',
                    'enable-apply-points' => 'הפעל שימוש בנקודות בעת התשלום',
                    'points' => 'נקודות',
                    'redemption-cart-label' => 'אפשר ללקוחות להשתמש בנקודות במהלך הקנייה',
                    'redemption-cart' => 'המרה עבור סכום הסל הכולל',
                    'save-btn' => 'שמור',
                    'title' => 'פרטי מערכת התגמולים',
                    'update-success' => 'הגדרות ההמרה עודכנו בהצלחה',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'נקודות תגמול',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'נקודות התגמול שלך',

                        'datagrid' => [
                            'approved' => 'אושר',
                            'attribute-id' => 'מזהה תכונה',
                            'canceled' => 'מבוטל',
                            'category-id' => 'מזהה קטגוריה',
                            'closed' => 'סגור',
                            'created-at' => 'תאריך עסקה',
                            'exp-date' => 'תאריך תפוגה',
                            'expire' => 'תפוגה',
                            'fraud' => 'רמייה',
                            'id' => 'מזהה',
                            'name' => 'שם',
                            'note' => 'הערה',
                            'order-id' => 'מזהה הזמנה',
                            'pending' => 'ממתין',
                            'processing' => 'מעובד',
                            'product-id' => 'מזהה מוצר',
                            'reward-points' => 'נקודות תגמול',
                            'status' => 'סטטוס',
                            'total-reward-points' => 'סך הכל נקודות תגמול',
                            'used' => 'משומש',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'קנה מוצר זה וקבל :reward נקודות. ההצעה בתוקף עד :end_date',
            'product-reward' => 'קנה מוצר זה וקבל :reward נקודות',

            'review' => [
                'review-points' => 'כתוב ביקורת וקבל :points נקודות',
            ],
        ],

        'register' => [
            'register-reward' => 'הירשם כחבר במשפחה שלנו וקבל :points נקודות',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'נקודות תגמול',
                    'reward-points-earned' => 'נקודות תגמול שנצברו',

                    'summary' => [
                        'reward_points' => 'סך הכל נקודות תגמול',
                    ],
                ],

                'points' => [
                    'apply-points' => 'השתמש בנקודות',
                    'button-title' => 'החל',
                    'enter-points' => 'הכנס נקודות',
                    'reward-points' => 'השתמש בנקודות תגמול',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'החל פוינטים',
            'enter-points' => 'הכנס פוינטים',
            'points-used' => 'פוינטים שנעשה בהם שימוש',
            'redemption-setting' => 'מידע: :points נקודה(ות) שווה :conversion_rate',
            'total-point' => 'סך הכל נקודותיך: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'לא ניתן להחיל פוינטים',
            'grandtotal' => 'סך הכל',
            'invalid-points' => 'שדה הפוינטים נדרש',
            'only-number' => 'שדה הפוינטים חייב להיות 1 או יותר',
            'points-applied' => 'פוינטים שהוחלו',
            'points-apply-issue' => 'לא ניתן להחיל את קוד הפוינטים.',
            'points' => 'פוינטים',
            'redem-points' => 'מימוש פוינטים (-)',
            'remove-points' => 'הסר פוינטים',
            'success-points' => 'קוד הפוינטים הוחל בהצלחה.',
            'total-reward-points-awarded' => 'סך כל נקודות הפרס שניתנו',
            'unauthorized-use-points' => 'אין באפשרותך להשתמש בנקודות פרס כרגע, פנה למנהל.',
            'use-can-use-only' => 'תוכל להשתמש רק ב',
            'warning-required-less-point' => 'מימוש נקודות פרס צריך להיות פחות ממחיר המוצר.',
            'you-have-only' => 'יש לך רק ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'ברוך הבא ותודה על ההרשמה!',
            'points-rewarded' => 'הוענקו לך :points נקודות על ההרשמה',
            'subject' => 'הרשמה של לקוח חדש',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'review' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'תודה על הביקורת על :product_name!',
            'points-rewarded' => 'הוענקו לך :points נקודות על הביקורת',
            'subject' => 'ביקורת לקוח',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'dob' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'יום הולדת שמח!',
            'points-rewarded' => 'הוענקו לך :points נקודות על יום ההולדת',
            'subject' => 'תאריך הולדת של לקוח',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'pending' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'תודה על הרכישה באתר שלנו!',
            'points-rewarded' => 'לאחר אישור הזמנה מספר #:order_id, תוכל/י להשתמש ב:points נקודות',
            'status' => 'ממתין',
            'subject' => 'הזמנת לקוח',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'used' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'תודה על השימוש בנקודות פרס לרכישת מוצרים באתר שלנו!',
            'points-rewarded' => 'השתמשת ב:points נקודות עבור הזמנה מספר #:order_id',
            'status' => 'בשימוש',
            'subject' => 'שימוש בנקודות פרס של לקוח',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'approved' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'נקודות הפרס שלך אושרו!',
            'points-rewarded' => 'הוענקו לך :points נקודות עבור הזמנה מספר #:order_id',
            'status' => 'מאושר',
            'subject' => 'אישור נקודות פרס',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'processing' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'הסטטוס שונה ל"בעיבוד" בתאריך :date!',
            'points-rewarded' => 'הסטטוס שונה עבור הזמנה מספר #:order_id',
            'status' => 'מאושר',
            'subject' => 'עיבוד נקודות פרס',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'expire' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'הסטטוס שונה ל"פג תוקף" בתאריך :date!',
            'points-rewarded' => 'הסטטוס שונה עבור הזמנה מספר #:order_id',
            'status' => 'פג תוקף',
            'subject' => 'נקודות פרס פג תוקף',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'closed' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'הסטטוס שונה ל"סגור" בתאריך :date!',
            'points-rewarded' => 'הסטטוס שונה ל"סגור" עבור הזמנה מספר #:order_id',
            'status' => 'סגור',
            'subject' => 'נקודות פרס סגורות',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'cancel' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'נקודות הפרס שלך בוטלו בתאריך :date!',
            'points-rewarded' => 'ביטלת :points נקודות עבור הזמנה מספר #:order_id',
            'status' => 'בוטל',
            'subject' => 'ביטול נקודות פרס',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],

        'fraud' => [
            'dear' => 'יקירי/יקירתי :customer_name',
            'greeting' => 'הסטטוס שונה ל"תחמולה!"',
            'points-rewarded' => 'ביטלת :points נקודות עבור הזמנה מספר #:order_id בתאריך :date',
            'status' => 'תחמולה',
            'subject' => 'תחמולה בנקודות פרס',
            'thanks' => 'תודה!',
            'total-point-left' => 'נשארו לך :total_reward_points נקודות',
            'used-points' => 'השתמשת ב:used_reward_points נקודות',
        ],
    ],
];
