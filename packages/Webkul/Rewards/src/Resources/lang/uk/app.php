<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Налаштування викупу',
                    'reward-point-on-attribute' => 'Бонусні бали за атрибут',
                    'reward-point-on-cart' => 'Бонусні бали за кошик',
                    'reward-point-on-category-for-specific-time' => 'Бонусні бали за категорію на певний час',
                    'reward-point-on-category' => 'Бонусні бали за категорію',
                    'reward-point-on-product-for-specific-time' => 'Бонусні бали за продукт на певний час',
                    'reward-point-on-product' => 'Бонусні бали за продукт',
                    'reward-point' => 'Бонусні бали',
                    'reward-system-details' => 'Деталі бонусної системи',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Налаштуйте програму, яка відстежує активність клієнтів і винагороджує їх балами для майбутніх знижок або переваг.',
                    'setting' => 'Налаштування',
                    'title' => 'Бонусні бали',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name успішно видалено.',
                            'email-notification' => 'Сповіщення на електронну пошту',
                            'reward-used-at-one-time' => 'Бонусні бали, використані один раз',
                            'reward-when-customer-dob-exp-days' => 'Через скільки днів бонусні бали за дату народження клієнта стануть недійсними',
                            'reward-when-customer-dob' => 'Винагорода за дату народження клієнта',
                            'reward-when-customer-register-exp-days' => 'Через скільки днів бонусні бали за реєстрацію клієнта стануть недійсними',
                            'reward-when-customer-register' => 'Винагорода за реєстрацію клієнта',
                            'reward-when-product-reviewed-exp-days' => 'Через скільки днів бонусні бали за відгук про продукт стануть недійсними',
                            'reward-when-product-reviewed' => 'Винагорода за відгук про продукт',
                            'status' => 'Статус модуля',
                            'update-success' => ':name успішно оновлено.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Створити Нагороду за Продукт',
                    'create-success' => 'Нагорода за продукт успішно створена',
                    'delete-failed' => 'Нагороду за продукт не вдалося видалити!',
                    'delete-success' => 'Нагороду за продукт успішно видалено',
                    'error-product' => 'Продукт не вибрано',
                    'title' => 'Нагородні бали за продукт',
                    'update-success' => 'Нагороду за продукт успішно оновлено',

                    'datagrid' => [
                        'delete' => 'Видалити',
                        'edit' => 'Редагувати',
                        'end-date' => 'Дата закінчення',
                        'id' => 'Id',
                        'mass-delete-success' => 'Нагороду за продукт успішно видалено',
                        'mass-update-success' => 'Нагороду за продукт успішно оновлено',
                        'name' => 'Назва',
                        'reward-points' => 'Нагородні бали',
                        'sku' => 'SKU',
                        'start-date' => 'Дата початку',
                        'status' => 'Статус',
                        'update-status' => 'Оновити',

                        'options' => [
                            'active' => 'Активний',
                            'inactive' => 'Неактивний',
                        ],
                    ],

                    'create' => [
                        'active' => 'Активний',
                        'create-btn' => 'Створити Специфічну Нагороду за Продукт',
                        'end-date' => 'Дата закінчення',
                        'enter-reward-points' => 'Введіть Нагородні Бали',
                        'inactive' => 'Неактивний',
                        'save-btn' => 'Зберегти Нагороду за Продукт',
                        'select-product' => 'Вибрати Продукт',
                        'select-status' => 'Вибрати Статус',
                        'start-date' => 'Дата початку',
                        'status' => 'Статус',
                        'title' => 'Нагородні бали за продукт',
                    ],

                    'edit' => [
                        'active' => 'Активний',
                        'create-btn' => 'Створити Специфічну Нагороду за Продукт',
                        'end-date' => 'Дата закінчення',
                        'enter-reward-points' => 'Введіть Нагородні Бали',
                        'inactive' => 'Неактивний',
                        'save-btn' => 'Оновити Нагороду за Продукт',
                        'select-product' => 'Вибрати Продукт',
                        'select-status' => 'Вибрати Статус',
                        'start-date' => 'Дата початку',
                        'status' => 'Статус',
                        'title' => 'Нагородні бали за продукт',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Створити Нагороду за Продукт',
                    'title' => 'Нагородні бали за продукт для Специфічного Часу',

                    'create' => [
                        'create-btn' => 'Створити Нагороду за Час',
                        'save-btn' => 'Зберегти Нагороду за Час',
                        'title' => 'Додати Нагороду за Час',
                    ],

                    'edit' => [
                        'save-btn' => 'Оновити Нагороду за Час',
                        'title' => 'Редагувати Нагороду за Час',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Створити Нагороду за Категорію',
                    'category-specific-time' => 'Час для Категорії',
                    'create-success' => 'Нагороду за Категорію успішно створено',
                    'delete-failed' => 'Нагороду за Категорію не вдалося видалити!',
                    'delete-success' => 'Нагороду за Категорію успішно видалено',
                    'error-category' => 'Категорія не вибрана',
                    'specific-title' => 'Створити Нагороду за Категорію',
                    'title' => 'Нагородні бали за категорію',
                    'update-success' => 'Нагороду за Категорію успішно оновлено',

                    'datagrid' => [
                        'delete' => 'Видалити',
                        'edit' => 'Редагувати',
                        'end-date' => 'Дата закінчення',
                        'id' => 'Id',
                        'mass-delete-success' => 'Нагороду за Категорію успішно видалено',
                        'mass-update-success' => 'Нагороду за Категорію успішно оновлено',
                        'name' => 'Назва',
                        'reward-points' => 'Нагородні бали',
                        'sku' => 'SKU',
                        'start-date' => 'Дата початку',
                        'status' => 'Статус',
                        'update-status' => 'Оновити',

                        'options' => [
                            'active' => 'Активний',
                            'inactive' => 'Неактивний',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Активний',
                    'add-btn' => 'Створити Нагороду за Категорію',
                    'end-date' => 'Дата закінчення',
                    'enter-reward-points' => 'Введіть Нагородні Бали',
                    'inactive' => 'Неактивний',
                    'save-btn' => 'Зберегти Нагороду за Категорію',
                    'select-category' => 'Вибрати Категорію',
                    'select-status' => 'Вибрати Статус',
                    'start-date' => 'Дата початку',
                    'status' => 'Статус',
                    'title' => 'Додати Нагородні бали за Категорію',
                ],

                'edit' => [
                    'active' => 'Активний',
                    'add-btn' => 'Створити Нагороду за Категорію',
                    'end-date' => 'Дата закінчення',
                    'enter-reward-points' => 'Введіть Нагородні Бали',
                    'inactive' => 'Неактивний',
                    'save-btn' => 'Оновити Нагороду за Категорію',
                    'select-category' => 'Вибрати Категорію',
                    'select-status' => 'Вибрати Статус',
                    'start-date' => 'Дата початку',
                    'status' => 'Статус',
                    'title' => 'Редагувати Нагородні бали за Категорію',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Створити Нагороду за Час для Категорії',
                    'category-specific-time' => 'Час для Категорії',
                    'title' => 'Нагородні бали за Категорію для Специфічного Часу',
                ],

                'create' => [
                    'save-btn' => 'Зберегти Нагороду за Категорію для Специфічного Часу',
                    'title' => 'Додати Нагородні бали за Категорію для Специфічного Часу',
                ],

                'edit' => [
                    'save-btn' => 'Оновити Нагороду за Категорію для Специфічного Часу',
                    'title' => 'Редагувати Нагородні бали за Категорію для Специфічного Часу',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Додати бали за покупку до кошика',
                    'create-success' => 'Нагороду за кошик успішно створено',
                    'delete-failed' => 'Не вдалося видалити нагороду за кошик!',
                    'delete-success' => 'Нагороду за кошик успішно видалено',
                    'error-cart' => 'Кошик не вибрано',
                    'title' => 'Бали за покупку в кошику',
                    'update-success' => 'Нагороду за кошик успішно оновлено',

                    'datagrid' => [
                        'amount-from' => 'Сума від',
                        'amount-to' => 'Сума до',
                        'delete' => 'Видалити',
                        'edit' => 'Редагувати',
                        'end-date' => 'Дата закінчення',
                        'id' => 'ID',
                        'mass-delete-success' => 'Нагороду за кошик успішно видалено',
                        'mass-update-success' => 'Нагороду за кошик успішно оновлено',
                        'name' => 'Назва',
                        'reward-points' => 'Бали за покупку',
                        'sku' => 'SKU',
                        'start-date' => 'Дата початку',
                        'status' => 'Статус',
                        'update-status' => 'Оновити',

                        'options' => [
                            'active' => 'Активний',
                            'inactive' => 'Неактивний',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Активний',
                    'add-btn' => 'Додати бали за покупку до кошика',
                    'amount-from' => 'Сума від',
                    'amount-to' => 'Сума до',
                    'end-date' => 'Дата закінчення',
                    'enter-reward-points' => 'Введіть бали за покупку',
                    'inactive' => 'Неактивний',
                    'save-btn' => 'Зберегти нагороду за кошик',
                    'select-status' => 'Виберіть статус',
                    'start-date' => 'Дата початку',
                    'status' => 'Статус',
                    'title' => 'Додати бали за покупку до кошика',
                ],

                'edit' => [
                    'active' => 'Активний',
                    'add-btn' => 'Додати бали за покупку до кошика',
                    'amount-from' => 'Сума від',
                    'amount-to' => 'Сума до',
                    'end-date' => 'Дата закінчення',
                    'enter-reward-points' => 'Введіть бали за покупку',
                    'inactive' => 'Неактивний',
                    'save-btn' => 'Оновити нагороду за кошик',
                    'select-status' => 'Виберіть статус',
                    'start-date' => 'Дата початку',
                    'status' => 'Статус',
                    'title' => 'Редагувати бали за покупку в кошику',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Додати бали винагороди до атрибута',
                    'create-success' => 'Атрибут винагороди успішно створено',
                    'delete-failed' => 'Атрибут не вдалося видалити!',
                    'delete-success' => 'Атрибут успішно видалено',
                    'error-cart' => 'Жоден атрибут не вибрано',
                    'title' => 'Бали винагороди для атрибутів',
                    'update-success' => 'Атрибут винагороди успішно оновлено',

                    'datagrid' => [
                        'code' => 'Код',
                        'delete' => 'Видалити',
                        'edit' => 'Редагувати',
                        'id' => 'ID',
                        'mass-delete-success' => 'Атрибут успішно видалено',
                        'mass-update-success' => 'Атрибут успішно оновлено',
                        'name' => 'Назва',
                        'reward-points' => 'Бали винагороди',
                        'sku' => 'Код SKU',
                        'status' => 'Статус',
                        'update-status' => 'Оновити',

                        'options' => [
                            'active' => 'Активний',
                            'inactive' => 'Неактивний',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Активний',
                    'enter-reward-points' => 'Введіть бали винагороди',
                    'inactive' => 'Неактивний',
                    'reward_points' => 'Бали атрибута',
                    'save-btn' => 'Зберегти бали винагороди для атрибута',
                    'select-attributes' => 'Виберіть атрибут',
                    'select-status' => 'Виберіть статус',
                    'status' => 'Статус',
                    'title' => 'Бали винагороди для атрибутів',
                ],

                'edit' => [
                    'active' => 'Активний',
                    'edit-btn' => 'Редагувати бали винагороди для атрибута',
                    'enter-reward-points' => 'Введіть бали винагороди',
                    'inactive' => 'Неактивний',
                    'reward_points' => 'Бали атрибута',
                    'select-attributes' => 'Виберіть атрибут',
                    'select-status' => 'Виберіть статус',
                    'status' => 'Статус',
                    'title' => 'Бали винагороди для атрибутів',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Деталі системи винагород',

                    'datagrid' => [
                        'active' => 'Активний',
                        'id' => 'ID',
                        'inactive' => 'Неактивний',
                        'name' => 'Назва',
                        'reward-points' => 'Бали винагороди',
                        'status' => 'Статус',
                        'used-rewards-points' => 'Використані бали винагороди',
                        'view' => 'Перегляд',
                    ],
                ],

                'view' => [
                    'title' => 'Деталі системи винагород',

                    'datagrid' => [
                        'approved' => 'Затверджено',
                        'attribute-id' => 'ID атрибута',
                        'canceled' => 'Скасовано',
                        'category-id' => 'ID категорії',
                        'closed' => 'Закрито',
                        'created-at' => 'Дата створення',
                        'exp-date' => 'Дата закінчення',
                        'expire' => 'Закінчено',
                        'fraud' => 'Шахрайство',
                        'id' => 'ID',
                        'name' => 'Назва',
                        'note' => 'Примітка',
                        'order-id' => 'ID замовлення',
                        'pending' => 'Очікує',
                        'processing' => 'Обробка',
                        'product-id' => 'ID продукту',
                        'reward-points' => 'Бали винагороди',
                        'status' => 'Статус',
                        'total-reward-points' => 'Загальна кількість балів винагороди',
                        'used' => 'Використано',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Коефіцієнт конверсії для загальної кількості в кошику',
                    'conversion' => 'Коефіцієнт конверсії',
                    'enable-apply-points-label' => 'Дозволити клієнтам використовувати бали під час оформлення замовлення',
                    'enable-apply-points' => 'Дозволити використання балів під час оформлення замовлення',
                    'points' => 'Бали',
                    'redemption-cart-label' => 'Дозволити клієнтам використовувати бали при покупці',
                    'redemption-cart' => 'Конверсія на основі загальної кількості в кошику',
                    'save-btn' => 'Зберегти',
                    'title' => 'Деталі системи винагород',
                    'update-success' => 'Налаштування обміну успішно оновлено',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Бонусні бали',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Ваші бонусні бали',

                        'datagrid' => [
                            'approved' => 'Схвалено',
                            'attribute-id' => 'ID атрибута',
                            'canceled' => 'Скасовано',
                            'category-id' => 'ID категорії',
                            'closed' => 'Закрито',
                            'created-at' => 'Дата транзакції',
                            'exp-date' => 'Дата закінчення терміну',
                            'expire' => 'Закінчився',
                            'fraud' => 'Шахрайство',
                            'id' => 'ID',
                            'name' => 'Ім\'я',
                            'note' => 'Примітка',
                            'order-id' => 'ID замовлення',
                            'pending' => 'Очікує',
                            'processing' => 'В обробці',
                            'product-id' => 'ID продукту',
                            'reward-points' => 'Бонусні бали',
                            'status' => 'Статус',
                            'total-reward-points' => 'Загальна кількість бонусних балів',
                            'used' => 'Використано',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Придбайте цей продукт і отримайте :reward балів. Пропозиція дійсна до :end_date',
            'product-reward' => 'Придбайте цей продукт і отримайте :reward балів',

            'review' => [
                'review-points' => 'Напишіть відгук і отримайте :points балів',
            ],
        ],

        'register' => [
            'register-reward' => 'Зареєструйтесь як член нашої сім\'ї та отримайте :points балів',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Бонусні бали',
                    'reward-points-earned' => 'Набрані бонусні бали',

                    'summary' => [
                        'reward_points' => 'Загальна кількість бонусних балів',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Застосувати бали',
                    'button-title' => 'Застосувати',
                    'enter-points' => 'Введіть бали',
                    'reward-points' => 'Застосувати бонусні бали',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Застосувати бали',
            'enter-points' => 'Введіть бали',
            'points-used' => 'Використані бали',
            'redemption-setting' => 'Інформація: :points бал(и) дорівнюють :conversion_rate',
            'total-point' => 'Ваші загальні бали: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Неможливо застосувати бали',
            'grandtotal' => 'Загальна сума',
            'invalid-points' => 'Поле для балів є обов’язковим',
            'only-number' => 'Поле для балів повинно бути 1 або більше',
            'points-applied' => 'Застосовані бали',
            'points-apply-issue' => 'Код балів не може бути застосований.',
            'points' => 'Бали',
            'redem-points' => 'Обмін бали (-)',
            'remove-points' => 'Видалити бали',
            'success-points' => 'Код балів успішно застосовано.',
            'total-reward-points-awarded' => 'Загальна кількість нарахованих балів',
            'unauthorized-use-points' => 'В даний момент ви не можете використовувати бали, будь ласка, зверніться до адміністратора.',
            'use-can-use-only' => 'Ви можете використовувати тільки ',
            'warning-required-less-point' => 'Обмін балів має бути меншим за ціну товару.',
            'you-have-only' => 'У вас є тільки ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Ласкаво просимо і дякуємо за реєстрацію у нас!',
            'points-rewarded' => 'Ви отримали :points балів за реєстрацію',
            'subject' => 'Нова Реєстрація Клієнта',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'review' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Дякуємо за відгук про :product_name!',
            'points-rewarded' => 'Ви отримали :points балів за відгук',
            'subject' => 'Відгук Клієнта',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'dob' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'З Днем народження!',
            'points-rewarded' => 'Ви отримали :points балів за день народження',
            'subject' => 'Дата Народження Клієнта',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'pending' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Дякуємо за замовлення товарів на нашому сайті!',
            'points-rewarded' => 'Після підтвердження Замовлення № #:order_id ви зможете використати :points балів',
            'status' => 'Очікується',
            'subject' => 'Замовлення Клієнта',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'used' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Дякуємо за використання балів для покупки товарів на нашому сайті!',
            'points-rewarded' => 'Ви використали :points балів для Замовлення № #:order_id',
            'status' => 'Використано',
            'subject' => 'Використання Балів Клієнтом',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'approved' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Ваші бали були підтверджені!',
            'points-rewarded' => 'Ви отримали :points балів для Замовлення № #:order_id',
            'status' => 'Підтверджено',
            'subject' => 'Підтвердження Балів',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'processing' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Статус змінено на :date на Обробку!',
            'points-rewarded' => 'Статус змінено для Замовлення № #:order_id',
            'status' => 'Підтверджено',
            'subject' => 'Обробка Балів',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'expire' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Статус змінено на :date на Прострочено!',
            'points-rewarded' => 'Статус змінено для Замовлення № #:order_id',
            'status' => 'Прострочено',
            'subject' => 'Прострочені Бали',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'closed' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Статус змінено на :date на Закрито!',
            'points-rewarded' => 'Статус змінено на Закрито для Замовлення № #:order_id',
            'status' => 'Закрито',
            'subject' => 'Закриті Бали',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'cancel' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Ваші бали були скасовані :date!',
            'points-rewarded' => 'Ви скасували :points балів для Замовлення № #:order_id',
            'status' => 'Скасовано',
            'subject' => 'Скасування Балів',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],

        'fraud' => [
            'dear' => 'Шановний/а :customer_name',
            'greeting' => 'Статус змінено на Шахрайство!',
            'points-rewarded' => 'Ви скасували :points балів для Замовлення № #:order_id :date',
            'status' => 'Шахрайство',
            'subject' => 'Шахрайство з Балами',
            'thanks' => 'Дякуємо!',
            'total-point-left' => 'У вас залишилося :total_reward_points балів',
            'used-points' => 'Ви використали :used_reward_points балів',
        ],
    ],
];
