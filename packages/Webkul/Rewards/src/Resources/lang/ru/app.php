<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Настройки вознаграждений',
                    'reward-point-on-attribute' => 'Баллы вознаграждения за атрибут',
                    'reward-point-on-cart' => 'Баллы вознаграждения за корзину',
                    'reward-point-on-category-for-specific-time' => 'Баллы вознаграждения за категорию на определённое время',
                    'reward-point-on-category' => 'Баллы вознаграждения за категорию',
                    'reward-point-on-product-for-specific-time' => 'Баллы вознаграждения за продукт на определённое время',
                    'reward-point-on-product' => 'Баллы вознаграждения за продукт',
                    'reward-point' => 'Баллы вознаграждения',
                    'reward-system-details' => 'Детали системы вознаграждений',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Настройте программу, которая отслеживает активность клиентов и вознаграждает их баллами для будущих скидок или преимуществ.',
                    'setting' => 'Настройка',
                    'title' => 'Баллы вознаграждения',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name успешно удалён.',
                            'email-notification' => 'Уведомления по электронной почте',
                            'reward-used-at-one-time' => 'Баллы вознаграждения, использованные за один раз',
                            'reward-when-customer-dob-exp-days' => 'Через сколько дней баллы вознаграждения истекают на дату рождения клиента',
                            'reward-when-customer-dob' => 'Вознаграждение за дату рождения клиента',
                            'reward-when-customer-register-exp-days' => 'Через сколько дней баллы вознаграждения истекают после регистрации клиента',
                            'reward-when-customer-register' => 'Вознаграждение при регистрации клиента',
                            'reward-when-product-reviewed-exp-days' => 'Через сколько дней баллы вознаграждения истекают после отзыва о продукте',
                            'reward-when-product-reviewed' => 'Вознаграждение за отзыв о продукте',
                            'status' => 'Статус модуля',
                            'update-success' => ':name успешно обновлён.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Создать награду за продукт',
                    'create-success' => 'Награда за продукт успешно создана',
                    'delete-failed' => 'Награда за продукт не удалена!',
                    'delete-success' => 'Награда за продукт успешно удалена',
                    'error-product' => 'Продукт не выбран',
                    'title' => 'Бонусные баллы за продукт',
                    'update-success' => 'Награда за продукт успешно обновлена',

                    'datagrid' => [
                        'delete' => 'Удалить',
                        'edit' => 'Редактировать',
                        'end-date' => 'Дата окончания',
                        'id' => 'ID',
                        'mass-delete-success' => 'Награда за продукт успешно удалена',
                        'mass-update-success' => 'Награда за продукт успешно обновлена',
                        'name' => 'Название',
                        'reward-points' => 'Бонусные баллы',
                        'sku' => 'SKU',
                        'start-date' => 'Дата начала',
                        'status' => 'Статус',
                        'update-status' => 'Обновить',

                        'options' => [
                            'active' => 'Активен',
                            'inactive' => 'Неактивен',
                        ],
                    ],

                    'create' => [
                        'active' => 'Активен',
                        'create-btn' => 'Создать награду для конкретного продукта',
                        'end-date' => 'Дата окончания',
                        'enter-reward-points' => 'Введите бонусные баллы',
                        'inactive' => 'Неактивен',
                        'save-btn' => 'Сохранить награду за продукт',
                        'select-product' => 'Выбрать продукт',
                        'select-status' => 'Выбрать статус',
                        'start-date' => 'Дата начала',
                        'status' => 'Статус',
                        'title' => 'Бонусные баллы за продукт',
                    ],

                    'edit' => [
                        'active' => 'Активен',
                        'create-btn' => 'Создать награду для конкретного продукта',
                        'end-date' => 'Дата окончания',
                        'enter-reward-points' => 'Введите бонусные баллы',
                        'inactive' => 'Неактивен',
                        'save-btn' => 'Обновить награду за продукт',
                        'select-product' => 'Выбрать продукт',
                        'select-status' => 'Выбрать статус',
                        'start-date' => 'Дата начала',
                        'status' => 'Статус',
                        'title' => 'Бонусные баллы за продукт',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Создать награду за продукт',
                    'title' => 'Бонусные баллы за продукт на определённое время',

                    'create' => [
                        'create-btn' => 'Создать награду на определённое время',
                        'save-btn' => 'Сохранить награду за продукт на определённое время',
                        'title' => 'Добавить награду на определённое время',
                    ],

                    'edit' => [
                        'save-btn' => 'Обновить награду за продукт на определённое время',
                        'title' => 'Редактировать награду на определённое время',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Создать награду за категорию',
                    'category-specific-time' => 'Время для конкретной категории',
                    'create-success' => 'Награда за категорию успешно создана',
                    'delete-failed' => 'Награда за категорию не удалена!',
                    'delete-success' => 'Награда за категорию успешно удалена',
                    'error-category' => 'Категория не выбрана',
                    'specific-title' => 'Создать награду для конкретной категории',
                    'title' => 'Бонусные баллы за категорию',
                    'update-success' => 'Награда за категорию успешно обновлена',

                    'datagrid' => [
                        'delete' => 'Удалить',
                        'edit' => 'Редактировать',
                        'end-date' => 'Дата окончания',
                        'id' => 'ID',
                        'mass-delete-success' => 'Награда за категорию успешно удалена',
                        'mass-update-success' => 'Награда за категорию успешно обновлена',
                        'name' => 'Название',
                        'reward-points' => 'Бонусные баллы',
                        'sku' => 'SKU',
                        'start-date' => 'Дата начала',
                        'status' => 'Статус',
                        'update-status' => 'Обновить',

                        'options' => [
                            'active' => 'Активен',
                            'inactive' => 'Неактивен',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Активен',
                    'add-btn' => 'Создать награду за категорию',
                    'end-date' => 'Дата окончания',
                    'enter-reward-points' => 'Введите бонусные баллы',
                    'inactive' => 'Неактивен',
                    'save-btn' => 'Сохранить награду за категорию',
                    'select-category' => 'Выбрать категорию',
                    'select-status' => 'Выбрать статус',
                    'start-date' => 'Дата начала',
                    'status' => 'Статус',
                    'title' => 'Добавить бонусные баллы за категорию',
                ],

                'edit' => [
                    'active' => 'Активен',
                    'add-btn' => 'Создать награду за категорию',
                    'end-date' => 'Дата окончания',
                    'enter-reward-points' => 'Введите бонусные баллы',
                    'inactive' => 'Неактивен',
                    'save-btn' => 'Обновить награду за категорию',
                    'select-category' => 'Выбрать категорию',
                    'select-status' => 'Выбрать статус',
                    'start-date' => 'Дата начала',
                    'status' => 'Статус',
                    'title' => 'Редактировать бонусные баллы за категорию',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Создать награду за категорию на определённое время',
                    'category-specific-time' => 'Время для конкретной категории',
                    'title' => 'Бонусные баллы за категорию на определённое время',
                ],

                'create' => [
                    'save-btn' => 'Сохранить награду за категорию на определённое время',
                    'title' => 'Добавить бонусные баллы за категорию на определённое время',
                ],

                'edit' => [
                    'save-btn' => 'Обновить награду за категорию на определённое время',
                    'title' => 'Редактировать бонусные баллы за категорию на определённое время',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Добавить баллы за покупку в корзину',
                    'create-success' => 'Вознаграждение за корзину успешно создано',
                    'delete-failed' => 'Не удалось удалить вознаграждение за корзину!',
                    'delete-success' => 'Вознаграждение за корзину успешно удалено',
                    'error-cart' => 'Корзина не выбрана',
                    'title' => 'Баллы за покупку в корзине',
                    'update-success' => 'Вознаграждение за корзину успешно обновлено',

                    'datagrid' => [
                        'amount-from' => 'Сумма от',
                        'amount-to' => 'Сумма до',
                        'delete' => 'Удалить',
                        'edit' => 'Редактировать',
                        'end-date' => 'Дата окончания',
                        'id' => 'ID',
                        'mass-delete-success' => 'Вознаграждение за корзину успешно удалено',
                        'mass-update-success' => 'Вознаграждение за корзину успешно обновлено',
                        'name' => 'Название',
                        'reward-points' => 'Баллы за покупку',
                        'sku' => 'SKU',
                        'start-date' => 'Дата начала',
                        'status' => 'Статус',
                        'update-status' => 'Обновить',

                        'options' => [
                            'active' => 'Активен',
                            'inactive' => 'Неактивен',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Активен',
                    'add-btn' => 'Добавить баллы за покупку в корзину',
                    'amount-from' => 'Сумма от',
                    'amount-to' => 'Сумма до',
                    'end-date' => 'Дата окончания',
                    'enter-reward-points' => 'Введите баллы за покупку',
                    'inactive' => 'Неактивен',
                    'save-btn' => 'Сохранить вознаграждение за корзину',
                    'select-status' => 'Выберите статус',
                    'start-date' => 'Дата начала',
                    'status' => 'Статус',
                    'title' => 'Добавить баллы за покупку в корзину',
                ],

                'edit' => [
                    'active' => 'Активен',
                    'add-btn' => 'Добавить баллы за покупку в корзину',
                    'amount-from' => 'Сумма от',
                    'amount-to' => 'Сумма до',
                    'end-date' => 'Дата окончания',
                    'enter-reward-points' => 'Введите баллы за покупку',
                    'inactive' => 'Неактивен',
                    'save-btn' => 'Обновить вознаграждение за корзину',
                    'select-status' => 'Выберите статус',
                    'start-date' => 'Дата начала',
                    'status' => 'Статус',
                    'title' => 'Редактировать баллы за покупку в корзине',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Добавить баллы за вознаграждение к атрибуту',
                    'create-success' => 'Атрибут вознаграждения успешно создан',
                    'delete-failed' => 'Не удалось удалить атрибут!',
                    'delete-success' => 'Атрибут успешно удален',
                    'error-cart' => 'Не выбрано ни одного атрибута',
                    'title' => 'Баллы за вознаграждение для атрибутов',
                    'update-success' => 'Атрибут вознаграждения успешно обновлен',

                    'datagrid' => [
                        'code' => 'Код',
                        'delete' => 'Удалить',
                        'edit' => 'Редактировать',
                        'id' => 'ID',
                        'mass-delete-success' => 'Атрибут успешно удален',
                        'mass-update-success' => 'Атрибут успешно обновлен',
                        'name' => 'Имя',
                        'reward-points' => 'Баллы за вознаграждение',
                        'sku' => 'Код SKU',
                        'status' => 'Статус',
                        'update-status' => 'Обновить',

                        'options' => [
                            'active' => 'Активен',
                            'inactive' => 'Неактивен',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Активен',
                    'enter-reward-points' => 'Введите баллы вознаграждения',
                    'inactive' => 'Неактивен',
                    'reward_points' => 'Баллы атрибута',
                    'save-btn' => 'Сохранить баллы вознаграждения для атрибута',
                    'select-attributes' => 'Выберите атрибут',
                    'select-status' => 'Выберите статус',
                    'status' => 'Статус',
                    'title' => 'Баллы вознаграждения для атрибутов',
                ],

                'edit' => [
                    'active' => 'Активен',
                    'edit-btn' => 'Редактировать баллы вознаграждения для атрибута',
                    'enter-reward-points' => 'Введите баллы вознаграждения',
                    'inactive' => 'Неактивен',
                    'reward_points' => 'Баллы атрибута',
                    'select-attributes' => 'Выберите атрибут',
                    'select-status' => 'Выберите статус',
                    'status' => 'Статус',
                    'title' => 'Баллы вознаграждения для атрибутов',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Детали системы вознаграждений',

                    'datagrid' => [
                        'active' => 'Активен',
                        'id' => 'ID',
                        'inactive' => 'Неактивен',
                        'name' => 'Имя',
                        'reward-points' => 'Баллы вознаграждений',
                        'status' => 'Статус',
                        'used-rewards-points' => 'Использованные баллы вознаграждений',
                        'view' => 'Просмотреть',
                    ],
                ],

                'view' => [
                    'title' => 'Детали системы вознаграждений',

                    'datagrid' => [
                        'approved' => 'Одобрено',
                        'attribute-id' => 'ID атрибута',
                        'canceled' => 'Отменено',
                        'category-id' => 'ID категории',
                        'closed' => 'Закрыто',
                        'created-at' => 'Дата создания',
                        'exp-date' => 'Дата истечения срока',
                        'expire' => 'Истекло',
                        'fraud' => 'Мошенничество',
                        'id' => 'ID',
                        'name' => 'Имя',
                        'note' => 'Примечание',
                        'order-id' => 'ID заказа',
                        'pending' => 'Ожидание',
                        'processing' => 'В процессе',
                        'product-id' => 'ID продукта',
                        'reward-points' => 'Баллы вознаграждений',
                        'status' => 'Статус',
                        'total-reward-points' => 'Общее количество баллов вознаграждений',
                        'used' => 'Использовано',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Коэффициент конверсии для общего числа в корзине',
                    'conversion' => 'Коэффициент конверсии',
                    'enable-apply-points-label' => 'Разрешить клиентам применять баллы при оформлении заказа',
                    'enable-apply-points' => 'Разрешить применение баллов при оформлении заказа',
                    'points' => 'Баллы',
                    'redemption-cart-label' => 'Разрешить клиентам применять баллы при покупке',
                    'redemption-cart' => 'Конверсия на основе общего числа в корзине',
                    'save-btn' => 'Сохранить',
                    'title' => 'Детали системы вознаграждений',
                    'update-success' => 'Настройки возмещения успешно обновлены',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Баллы за покупки',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Ваши баллы за покупки',

                        'datagrid' => [
                            'approved' => 'Одобрено',
                            'attribute-id' => 'ID атрибута',
                            'canceled' => 'Отменено',
                            'category-id' => 'ID категории',
                            'closed' => 'Закрыто',
                            'created-at' => 'Дата транзакции',
                            'exp-date' => 'Дата истечения',
                            'expire' => 'Истекло',
                            'fraud' => 'Мошенничество',
                            'id' => 'ID',
                            'name' => 'Имя',
                            'note' => 'Примечание',
                            'order-id' => 'ID заказа',
                            'pending' => 'Ожидание',
                            'processing' => 'В обработке',
                            'product-id' => 'ID товара',
                            'reward-points' => 'Баллы за покупки',
                            'status' => 'Статус',
                            'total-reward-points' => 'Общее количество баллов',
                            'used' => 'Использовано',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Купите этот товар и получите :reward баллов. Предложение действительно до :end_date',
            'product-reward' => 'Купите этот товар и получите :reward баллов',

            'review' => [
                'review-points' => 'Оставьте отзыв и получите :points баллов',
            ],
        ],

        'register' => [
            'register-reward' => 'Зарегистрируйтесь как член нашей семьи и получите :points баллов',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Баллы за покупки',
                    'reward-points-earned' => 'Заработанные баллы',

                    'summary' => [
                        'reward_points' => 'Общее количество баллов',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Применить баллы',
                    'button-title' => 'Применить',
                    'enter-points' => 'Введите баллы',
                    'reward-points' => 'Применить баллы за покупки',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Применить Баллы',
            'enter-points' => 'Введите Баллы',
            'points-used' => 'Использованные Баллы',
            'redemption-setting' => 'Информация: :points балл(ов) равен :conversion_rate',
            'total-point' => 'Ваши Общие Баллы: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Невозможно применить баллы',
            'grandtotal' => 'Итог',
            'invalid-points' => 'Поле баллов обязательно для заполнения',
            'only-number' => 'Поле баллов должно содержать 1 или больше',
            'points-applied' => 'Примененные Баллы',
            'points-apply-issue' => 'Код баллов не может быть применен.',
            'points' => 'Баллы',
            'redem-points' => 'Обмен Баллов (-)',
            'remove-points' => 'Удалить Баллы',
            'success-points' => 'Код баллов успешно применен.',
            'total-reward-points-awarded' => 'Общее Количество Наградных Баллов',
            'unauthorized-use-points' => 'Вы не можете использовать баллы награды в данный момент, свяжитесь с администратором.',
            'use-can-use-only' => 'Вы можете использовать только ',
            'warning-required-less-point' => 'Обмен наградных баллов должен быть меньше цены товара.',
            'you-have-only' => 'У вас есть только ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Добро пожаловать и спасибо за регистрацию у нас!',
            'points-rewarded' => 'Вы получили :points баллов за регистрацию',
            'subject' => 'Новая Регистрация Клиента',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'review' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Спасибо за ваш отзыв о :product_name!',
            'points-rewarded' => 'Вы получили :points баллов за отзыв',
            'subject' => 'Отзыв Клиента',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'dob' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'С днём рождения!',
            'points-rewarded' => 'Вы получили :points баллов за день рождения',
            'subject' => 'Дата Рождения Клиента',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'pending' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Спасибо за заказ продуктов на нашем сайте!',
            'points-rewarded' => 'После одобрения заказа № #:order_id вы сможете использовать :points баллов',
            'status' => 'Ожидание',
            'subject' => 'Заказ Клиента',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'used' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Спасибо за использование баллов для покупки товаров на нашем сайте!',
            'points-rewarded' => 'Вы использовали :points баллов для заказа № #:order_id',
            'status' => 'Использовано',
            'subject' => 'Использование Баллов Клиента',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'approved' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Ваши баллы одобрены!',
            'points-rewarded' => 'Вы получили :points баллов за заказ № #:order_id',
            'status' => 'Одобрено',
            'subject' => 'Одобрение Баллов',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'processing' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Статус изменён на Обработка :date!',
            'points-rewarded' => 'Статус изменён для заказа № #:order_id',
            'status' => 'Одобрено',
            'subject' => 'Обработка Баллов',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'expire' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Статус изменён на Истекший :date!',
            'points-rewarded' => 'Статус изменён для заказа № #:order_id',
            'status' => 'Истёк',
            'subject' => 'Истёкшие Баллы',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'closed' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Статус изменён на Закрыт :date!',
            'points-rewarded' => 'Статус изменён на Закрыт для заказа № #:order_id',
            'status' => 'Закрыт',
            'subject' => 'Закрытые Баллы',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'cancel' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Ваши баллы были аннулированы :date!',
            'points-rewarded' => 'Вы аннулировали :points баллов для заказа № #:order_id',
            'status' => 'Аннулировано',
            'subject' => 'Аннулирование Баллов',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],

        'fraud' => [
            'dear' => 'Уважаемый/ая :customer_name',
            'greeting' => 'Статус изменён на Мошенничество!',
            'points-rewarded' => 'Вы аннулировали :points баллов для заказа № #:order_id в :date',
            'status' => 'Мошенничество',
            'subject' => 'Мошенничество с Баллами',
            'thanks' => 'Спасибо!',
            'total-point-left' => 'У вас осталось :total_reward_points баллов',
            'used-points' => 'Вы использовали :used_reward_points баллов',
        ],
    ],
];
