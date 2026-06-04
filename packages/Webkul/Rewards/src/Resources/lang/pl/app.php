<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Ustawienia Odkupienia',
                    'reward-point-on-attribute' => 'Punkt Nagrody za Atrybut',
                    'reward-point-on-cart' => 'Punkt Nagrody za Koszyk',
                    'reward-point-on-category-for-specific-time' => 'Punkt Nagrody za Kategorię na Określony Czas',
                    'reward-point-on-category' => 'Punkt Nagrody za Kategorię',
                    'reward-point-on-product-for-specific-time' => 'Punkt Nagrody za Produkt na Określony Czas',
                    'reward-point-on-product' => 'Punkt Nagrody za Produkt',
                    'reward-point' => 'Punkt Nagrody',
                    'reward-system-details' => 'Szczegóły Systemu Nagród',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Program lojalnościowy, który śledzi aktywność klientów i nagradza ich punktami, które można wykorzystać na przyszłe rabaty lub korzyści.',
                    'setting' => 'Setting',
                    'title' => 'Punktacja Premii',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name pomyślnie usunięto.',
                            'email-notification' => 'Powiadomienia e-mail',
                            'reward-used-at-one-time' => 'Punkty Nagrody Wykorzystane Jednorazowo',
                            'reward-when-customer-dob-exp-days' => 'Po ilu dniach wygasają Punkty Nagrody po Dacie Urodzenia Klienta',
                            'reward-when-customer-dob' => 'Nagroda za Datę Urodzenia Klienta',
                            'reward-when-customer-register-exp-days' => 'Po ilu dniach wygasają Punkty Nagrody po Rejestracji Klienta',
                            'reward-when-customer-register' => 'Nagroda za Rejestrację Klienta',
                            'reward-when-product-reviewed-exp-days' => 'Po ilu dniach wygasają Punkty Nagrody za Recenzję Produktu',
                            'reward-when-product-reviewed' => 'Nagroda za Recenzję Produktu',
                            'status' => 'Status Modułu',
                            'update-success' => ':name pomyślnie zaktualizowano.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Utwórz nagrodę dla produktu',
                    'create-success' => 'Nagroda dla produktu została pomyślnie utworzona',
                    'delete-failed' => 'Nie udało się usunąć nagrody dla produktu!',
                    'delete-success' => 'Nagroda dla produktu została pomyślnie usunięta',
                    'error-product' => 'Nie wybrano żadnego produktu',
                    'title' => 'Punkty nagród za produkt',
                    'update-success' => 'Nagroda dla produktu została pomyślnie zaktualizowana',

                    'datagrid' => [
                        'delete' => 'Usuń',
                        'edit' => 'Edytuj',
                        'end-date' => 'Data zakończenia',
                        'id' => 'Id',
                        'mass-delete-success' => 'Nagroda dla produktu została pomyślnie usunięta',
                        'mass-update-success' => 'Nagroda dla produktu została pomyślnie zaktualizowana',
                        'name' => 'Nazwa',
                        'reward-points' => 'Punkty nagród',
                        'sku' => 'SKU',
                        'start-date' => 'Data rozpoczęcia',
                        'status' => 'Status',
                        'update-status' => 'Aktualizuj',

                        'options' => [
                            'active' => 'Aktywny',
                            'inactive' => 'Nieaktywny',
                        ],
                    ],

                    'create' => [
                        'active' => 'Aktywny',
                        'create-btn' => 'Utwórz specyficzną nagrodę za produkt',
                        'end-date' => 'Data zakończenia',
                        'enter-reward-points' => 'Wprowadź punkty nagród',
                        'inactive' => 'Nieaktywny',
                        'save-btn' => 'Zapisz nagrodę za produkt',
                        'select-product' => 'Wybierz produkt',
                        'select-status' => 'Wybierz status',
                        'start-date' => 'Data rozpoczęcia',
                        'status' => 'Status',
                        'title' => 'Punkty nagród za produkt',
                    ],

                    'edit' => [
                        'active' => 'Aktywny',
                        'create-btn' => 'Utwórz specyficzną nagrodę za produkt',
                        'end-date' => 'Data zakończenia',
                        'enter-reward-points' => 'Wprowadź punkty nagród',
                        'inactive' => 'Nieaktywny',
                        'save-btn' => 'Aktualizuj nagrodę za produkt',
                        'select-product' => 'Wybierz produkt',
                        'select-status' => 'Wybierz status',
                        'start-date' => 'Data rozpoczęcia',
                        'status' => 'Status',
                        'title' => 'Punkty nagród za produkt',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Utwórz nagrodę za produkt',
                    'title' => 'Punkty nagród za produkt na określony czas',

                    'create' => [
                        'create-btn' => 'Utwórz nagrodę specyficzną dla czasu',
                        'save-btn' => 'Zapisz nagrodę specyficzną dla produktu na czas',
                        'title' => 'Dodaj nagrodę specyficzną dla czasu',
                    ],

                    'edit' => [
                        'save-btn' => 'Aktualizuj nagrodę specyficzną dla produktu na czas',
                        'title' => 'Edytuj nagrodę specyficzną dla czasu',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Utwórz nagrodę dla kategorii',
                    'category-specific-time' => 'Specyficzny czas dla kategorii',
                    'create-success' => 'Nagroda dla kategorii została pomyślnie utworzona',
                    'delete-failed' => 'Nie udało się usunąć nagrody dla kategorii!',
                    'delete-success' => 'Nagroda dla kategorii została pomyślnie usunięta',
                    'error-category' => 'Nie wybrano żadnej kategorii',
                    'specific-title' => 'Utwórz specyficzną nagrodę dla kategorii',
                    'title' => 'Punkty nagród za kategorię',
                    'update-success' => 'Nagroda dla kategorii została pomyślnie zaktualizowana',

                    'datagrid' => [
                        'delete' => 'Usuń',
                        'edit' => 'Edytuj',
                        'end-date' => 'Data zakończenia',
                        'id' => 'Id',
                        'mass-delete-success' => 'Nagroda dla kategorii została pomyślnie usunięta',
                        'mass-update-success' => 'Nagroda dla kategorii została pomyślnie zaktualizowana',
                        'name' => 'Nazwa',
                        'reward-points' => 'Punkty nagród',
                        'sku' => 'SKU',
                        'start-date' => 'Data rozpoczęcia',
                        'status' => 'Status',
                        'update-status' => 'Aktualizuj',

                        'options' => [
                            'active' => 'Aktywny',
                            'inactive' => 'Nieaktywny',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktywny',
                    'add-btn' => 'Utwórz nagrodę dla kategorii',
                    'end-date' => 'Data zakończenia',
                    'enter-reward-points' => 'Wprowadź punkty nagród',
                    'inactive' => 'Nieaktywny',
                    'save-btn' => 'Zapisz nagrodę dla kategorii',
                    'select-category' => 'Wybierz kategorię',
                    'select-status' => 'Wybierz status',
                    'start-date' => 'Data rozpoczęcia',
                    'status' => 'Status',
                    'title' => 'Dodaj punkty nagród za kategorię',
                ],

                'edit' => [
                    'active' => 'Aktywny',
                    'add-btn' => 'Utwórz nagrodę dla kategorii',
                    'end-date' => 'Data zakończenia',
                    'enter-reward-points' => 'Wprowadź punkty nagród',
                    'inactive' => 'Nieaktywny',
                    'save-btn' => 'Aktualizuj nagrodę dla kategorii',
                    'select-category' => 'Wybierz kategorię',
                    'select-status' => 'Wybierz status',
                    'start-date' => 'Data rozpoczęcia',
                    'status' => 'Status',
                    'title' => 'Edytuj punkty nagród za kategorię',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Utwórz specyficzną nagrodę za kategorię na określony czas',
                    'category-specific-time' => 'Specyficzny czas dla kategorii',
                    'title' => 'Punkty nagród za kategorię na określony czas',
                ],

                'create' => [
                    'save-btn' => 'Zapisz nagrodę dla kategorii specyficzną dla czasu',
                    'title' => 'Dodaj punkty nagród za kategorię na określony czas',
                ],

                'edit' => [
                    'save-btn' => 'Aktualizuj nagrodę dla kategorii specyficzną dla czasu',
                    'title' => 'Edytuj punkty nagród za kategorię na określony czas',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Dodaj punkty nagrody do koszyka',
                    'create-success' => 'Nagroda koszyka utworzona pomyślnie',
                    'delete-failed' => 'Nie udało się usunąć nagrody koszyka!',
                    'delete-success' => 'Nagroda koszyka usunięta pomyślnie',
                    'error-cart' => 'Nie wybrano koszyka',
                    'title' => 'Punkty nagrody w koszyku',
                    'update-success' => 'Nagroda koszyka zaktualizowana pomyślnie',

                    'datagrid' => [
                        'amount-from' => 'Kwota od',
                        'amount-to' => 'Kwota do',
                        'delete' => 'Usuń',
                        'edit' => 'Edytuj',
                        'end-date' => 'Data zakończenia',
                        'id' => 'Id',
                        'mass-delete-success' => 'Nagroda koszyka usunięta pomyślnie',
                        'mass-update-success' => 'Nagroda koszyka zaktualizowana pomyślnie',
                        'name' => 'Nazwa',
                        'reward-points' => 'Punkty nagrody',
                        'sku' => 'SKU',
                        'start-date' => 'Data rozpoczęcia',
                        'status' => 'Status',
                        'update-status' => 'Aktualizuj',

                        'options' => [
                            'active' => 'Aktywny',
                            'inactive' => 'Nieaktywny',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktywny',
                    'add-btn' => 'Dodaj punkty nagrody do koszyka',
                    'amount-from' => 'Kwota od',
                    'amount-to' => 'Kwota do',
                    'end-date' => 'Data zakończenia',
                    'enter-reward-points' => 'Wprowadź punkty nagrody',
                    'inactive' => 'Nieaktywny',
                    'save-btn' => 'Zapisz nagrodę koszyka',
                    'select-status' => 'Wybierz status',
                    'start-date' => 'Data rozpoczęcia',
                    'status' => 'Status',
                    'title' => 'Punkty nagrody w koszyku',
                ],

                'edit' => [
                    'active' => 'Aktywny',
                    'add-btn' => 'Dodaj punkty nagrody do koszyka',
                    'amount-from' => 'Kwota od',
                    'amount-to' => 'Kwota do',
                    'end-date' => 'Data zakończenia',
                    'enter-reward-points' => 'Wprowadź punkty nagrody',
                    'inactive' => 'Nieaktywny',
                    'save-btn' => 'Edytuj nagrodę koszyka',
                    'select-status' => 'Wybierz status',
                    'start-date' => 'Data rozpoczęcia',
                    'status' => 'Status',
                    'title' => 'Punkty nagrody w koszyku',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Utwórz punkt nagrody za atrybut',
                    'create-success' => 'Nagroda za atrybut utworzona pomyślnie',
                    'delete-failed' => 'Nie udało się usunąć nagrody za atrybut!',
                    'delete-success' => 'Nagroda za atrybut usunięta pomyślnie',
                    'error-cart' => 'Nie wybrano atrybutu',
                    'title' => 'Punkty nagrody za atrybuty',
                    'update-success' => 'Nagroda za atrybut zaktualizowana pomyślnie',

                    'datagrid' => [
                        'code' => 'Kod',
                        'delete' => 'Usuń',
                        'edit' => 'Edytuj',
                        'id' => 'Id',
                        'mass-delete-success' => 'Nagroda za atrybut usunięta pomyślnie',
                        'mass-update-success' => 'Nagroda za atrybut zaktualizowana pomyślnie',
                        'name' => 'Nazwa',
                        'reward-points' => 'Punkty nagrody',
                        'sku' => 'SKU',
                        'status' => 'Status',
                        'update-status' => 'Aktualizuj',

                        'options' => [
                            'active' => 'Aktywny',
                            'inactive' => 'Nieaktywny',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktywny',
                    'enter-reward-points' => 'Wprowadź punkty nagrody',
                    'inactive' => 'Nieaktywny',
                    'reward_points' => 'Punkty za atrybut',
                    'save-btn' => 'Zapisz punkt nagrody za atrybut',
                    'select-attributes' => 'Wybierz atrybut',
                    'select-status' => 'Wybierz status',
                    'status' => 'Status',
                    'title' => 'Punkty nagrody za atrybuty',
                ],

                'edit' => [
                    'active' => 'Aktywny',
                    'edit-btn' => 'Zaktualizuj punkt nagrody za atrybut',
                    'enter-reward-points' => 'Wprowadź punkty nagrody',
                    'inactive' => 'Nieaktywny',
                    'reward_points' => 'Punkty za atrybut',
                    'select-attributes' => 'Wybierz atrybut',
                    'select-status' => 'Wybierz status',
                    'status' => 'Status',
                    'title' => 'Punkty nagrody za atrybuty',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Szczegóły systemu nagród',

                    'datagrid' => [
                        'active' => 'Aktywny',
                        'id' => 'ID',
                        'inactive' => 'Nieaktywny',
                        'name' => 'Nazwa',
                        'reward-points' => 'Punkty nagród',
                        'status' => 'Status',
                        'used-rewards-points' => 'Wykorzystane punkty nagród',
                        'view' => 'Zobacz',
                    ],
                ],

                'view' => [
                    'title' => 'Szczegóły systemu nagród',

                    'datagrid' => [
                        'approved' => 'Zatwierdzone',
                        'attribute-id' => 'ID atrybutu',
                        'canceled' => 'Anulowane',
                        'category-id' => 'ID kategorii',
                        'closed' => 'Zamknięte',
                        'created-at' => 'Data transakcji',
                        'exp-date' => 'Data ważności',
                        'expire' => 'Wygaśnięte',
                        'fraud' => 'Oszustwo',
                        'id' => 'ID',
                        'name' => 'Nazwa',
                        'note' => 'Notatka',
                        'order-id' => 'ID zamówienia',
                        'pending' => 'Oczekujące',
                        'processing' => 'Przetwarzanie',
                        'product-id' => 'ID produktu',
                        'reward-points' => 'Punkty nagród',
                        'status' => 'Status',
                        'total-reward-points' => 'Całkowita liczba punktów nagród',
                        'used' => 'Wykorzystane',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Współczynnik konwersji dla wykorzystania punktów nad wartość koszyka',
                    'conversion' => 'Stawka konwersji',
                    'enable-apply-points-label' => 'Zezwalaj klientom na zastosowanie punktów podczas realizacji zamówienia',
                    'enable-apply-points' => 'Włącz zastosowanie punktów podczas realizacji zamówienia',
                    'points' => 'Punkty',
                    'redemption-cart-label' => 'Zezwalaj klientom na zastosowanie punktów podczas składania zamówienia',
                    'redemption-cart' => 'Wykorzystanie punktów nad wartość koszyka',
                    'save-btn' => 'Zapisz',
                    'title' => 'Ustawienia wykorzystania punktów',
                    'update-success' => 'Ustawienia wykorzystania punktów zaktualizowane pomyślnie',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Punkty lojalnościowe',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Twoje punkty lojalnościowe',

                        'datagrid' => [
                            'approved' => 'Zatwierdzone',
                            'attribute-id' => 'ID atrybutu',
                            'canceled' => 'Anulowane',
                            'category-id' => 'ID kategorii',
                            'closed' => 'Zamknięte',
                            'created-at' => 'Data transakcji',
                            'exp-date' => 'Data wygaśnięcia',
                            'expire' => 'Wygasa',
                            'fraud' => 'Oszustwo',
                            'id' => 'ID',
                            'name' => 'Nazwa',
                            'note' => 'Notatka',
                            'order-id' => 'ID zamówienia',
                            'pending' => 'Oczekujące',
                            'processing' => 'W trakcie',
                            'product-id' => 'ID produktu',
                            'reward-points' => 'Punkty lojalnościowe',
                            'status' => 'Status',
                            'total-reward-points' => 'Łączna liczba punktów lojalnościowych',
                            'used' => 'Wykorzystane',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Kup ten produkt i otrzymaj :reward punkty. Oferta ważna do :end_date',
            'product-reward' => 'Kup ten produkt i otrzymaj :reward punkty',

            'review' => [
                'review-points' => 'Napisz recenzję i otrzymaj :points punkty',
            ],
        ],

        'register' => [
            'register-reward' => 'Zarejestruj się jako członek naszej rodziny i otrzymaj :points punkty',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Punkty lojalnościowe',
                    'reward-points-earned' => 'Zdobyte punkty lojalnościowe',

                    'summary' => [
                        'reward_points' => 'Łączna liczba punktów lojalnościowych',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Zastosuj punkty',
                    'button-title' => 'Zastosuj',
                    'enter-points' => 'Wprowadź punkty',
                    'reward-points' => 'Zastosuj punkty lojalnościowe',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Zastosuj Punkty',
            'enter-points' => 'Wprowadź Punkty',
            'points-used' => 'Użyte Punkty',
            'redemption-setting' => 'Info: :points punkt(ów) jest równy :conversion_rate',
            'total-point' => 'Twoje Łączne Punkty: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Nie można zastosować punktów',
            'grandtotal' => 'Całkowity',
            'invalid-points' => 'Pole punktów jest wymagane',
            'only-number' => 'Pole punktów musi być równe 1 lub więcej',
            'points-applied' => 'Zastosowane Punkty',
            'points-apply-issue' => 'Kod punktów nie może być zastosowany.',
            'points' => 'Punkty',
            'redem-points' => 'Wykorzystaj Punkty (-)',
            'remove-points' => 'Usuń Punkty',
            'success-points' => 'Kod punktów został pomyślnie zastosowany.',
            'total-reward-points-awarded' => 'Łączna Liczba Przyznanych Punktów Nagrody',
            'unauthorized-use-points' => 'Nie możesz używać punktów nagrody w tym momencie, skontaktuj się z administratorem.',
            'use-can-use-only' => 'Możesz używać tylko ',
            'warning-required-less-point' => 'Wykorzystanie punktów nagrody powinno być mniejsze niż cena produktu.',
            'you-have-only' => 'Masz tylko ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Witamy i dziękujemy za rejestrację u nas!',
            'points-rewarded' => 'Otrzymałeś/aś :points punkty za rejestrację',
            'subject' => 'Nowa Rejestracja Klienta',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'review' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Dziękujemy za recenzję produktu :product_name!',
            'points-rewarded' => 'Otrzymałeś/aś :points punkty za recenzję',
            'subject' => 'Recenzja Klienta',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'dob' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Wszystkiego najlepszego z okazji urodzin!',
            'points-rewarded' => 'Otrzymałeś/aś :points punkty z okazji urodzin',
            'subject' => 'Data Urodzin Klienta',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'pending' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Dziękujemy za zamówienie produktów na naszej stronie!',
            'points-rewarded' => 'Po zatwierdzeniu zamówienia nr #:order_id będziesz mógł/mogła wykorzystać :points punkty',
            'status' => 'Oczekujące',
            'subject' => 'Zamówienie Klienta',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'used' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Dziękujemy za użycie punktów do zakupu produktów na naszej stronie!',
            'points-rewarded' => 'Użyłeś/aś :points punkty do zamówienia nr #:order_id',
            'status' => 'Użyte',
            'subject' => 'Użycie Punktów Klienta',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'approved' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Twoje punkty zostały zatwierdzone!',
            'points-rewarded' => 'Otrzymałeś/aś :points punkty za zamówienie nr #:order_id',
            'status' => 'Zatwierdzone',
            'subject' => 'Zatwierdzenie Punktów',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'processing' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Status zmienił się na Przetwarzanie w dniu :date!',
            'points-rewarded' => 'Status zmieniony dla zamówienia nr #:order_id',
            'status' => 'Zatwierdzone',
            'subject' => 'Przetwarzanie Punktów',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'expire' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Status zmienił się na Wygasłe w dniu :date!',
            'points-rewarded' => 'Status zmieniony dla zamówienia nr #:order_id',
            'status' => 'Wygasłe',
            'subject' => 'Wygasłe Punkty',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'closed' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Status zmienił się na Zamknięte w dniu :date!',
            'points-rewarded' => 'Status zmieniony na Zamknięte dla zamówienia nr #:order_id',
            'status' => 'Zamknięte',
            'subject' => 'Zamknięte Punkty',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'cancel' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Twoje punkty zostały anulowane w dniu :date!',
            'points-rewarded' => 'Anulowałeś/aś :points punkty dla zamówienia nr #:order_id',
            'status' => 'Anulowane',
            'subject' => 'Anulowanie Punktów',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],

        'fraud' => [
            'dear' => 'Drogi/a :customer_name',
            'greeting' => 'Status zmienił się na Oszustwo!',
            'points-rewarded' => 'Anulowałeś/aś :points punkty dla zamówienia nr #:order_id w dniu :date',
            'status' => 'Oszustwo',
            'subject' => 'Punkty Oszustwo',
            'thanks' => 'Dziękujemy!',
            'total-point-left' => 'Masz jeszcze :total_reward_points punkty',
            'used-points' => 'Wykorzystałeś/aś :used_reward_points punkty',
        ],
    ],
];
