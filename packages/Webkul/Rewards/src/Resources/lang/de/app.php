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
                    'add-btn' => 'Produktprämie erstellen',
                    'create-success' => 'Produktprämie erfolgreich erstellt',
                    'delete-failed' => 'Produktprämie konnte nicht gelöscht werden!',
                    'delete-success' => 'Produktprämie erfolgreich gelöscht',
                    'error-product' => 'Kein Produkt ausgewählt',
                    'title' => 'Prämienpunkte auf Produkt',
                    'update-success' => 'Produktprämie erfolgreich aktualisiert',

                    'datagrid' => [
                        'delete' => 'Löschen',
                        'edit' => 'Bearbeiten',
                        'end-date' => 'Enddatum',
                        'id' => 'ID',
                        'mass-delete-success' => 'Produktprämie erfolgreich gelöscht',
                        'mass-update-success' => 'Produktprämie erfolgreich aktualisiert',
                        'name' => 'Name',
                        'reward-points' => 'Prämienpunkte',
                        'sku' => 'SKU',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'update-status' => 'Aktualisieren',

                        'options' => [
                            'active' => 'Aktiv',
                            'inactive' => 'Inaktiv',
                        ],
                    ],

                    'create' => [
                        'active' => 'Aktiv',
                        'create-btn' => 'Produktspezifische Prämie erstellen',
                        'end-date' => 'Enddatum',
                        'enter-reward-points' => 'Prämienpunkte eingeben',
                        'inactive' => 'Inaktiv',
                        'save-btn' => 'Produktprämie speichern',
                        'select-product' => 'Produkt auswählen',
                        'select-status' => 'Status auswählen',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'title' => 'Prämienpunkte auf Produkt',
                    ],

                    'edit' => [
                        'active' => 'Aktiv',
                        'create-btn' => 'Produktspezifische Prämie erstellen',
                        'end-date' => 'Enddatum',
                        'enter-reward-points' => 'Prämienpunkte eingeben',
                        'inactive' => 'Inaktiv',
                        'save-btn' => 'Produktprämie aktualisieren',
                        'select-product' => 'Produkt auswählen',
                        'select-status' => 'Status auswählen',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'title' => 'Prämienpunkte auf Produkt',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Produktprämie erstellen',
                    'title' => 'Prämienpunkte auf Produkt für einen bestimmten Zeitraum',

                    'create' => [
                        'create-btn' => 'Zeitlich begrenzte Prämie erstellen',
                        'save-btn' => 'Zeitlich begrenzte Produktprämie speichern',
                        'title' => 'Zeitlich begrenzte Prämie hinzufügen',
                    ],

                    'edit' => [
                        'save-btn' => 'Zeitlich begrenzte Produktprämie aktualisieren',
                        'title' => 'Zeitlich begrenzte Produktprämie bearbeiten',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Kategorieprämie erstellen',
                    'category-specific-time' => 'Kategorie für einen bestimmten Zeitraum',
                    'create-success' => 'Kategorieprämie erfolgreich erstellt',
                    'delete-failed' => 'Kategorieprämie konnte nicht gelöscht werden!',
                    'delete-success' => 'Kategorieprämie erfolgreich gelöscht',
                    'error-category' => 'Keine Kategorie ausgewählt',
                    'specific-title' => 'Kategoriespezifische Prämie erstellen',
                    'title' => 'Prämienpunkte auf Kategorie',
                    'update-success' => 'Kategorieprämie erfolgreich aktualisiert',

                    'datagrid' => [
                        'delete' => 'Löschen',
                        'edit' => 'Bearbeiten',
                        'end-date' => 'Enddatum',
                        'id' => 'ID',
                        'mass-delete-success' => 'Kategorieprämie erfolgreich gelöscht',
                        'mass-update-success' => 'Kategorieprämie erfolgreich aktualisiert',
                        'name' => 'Name',
                        'reward-points' => 'Prämienpunkte',
                        'sku' => 'SKU',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'update-status' => 'Aktualisieren',

                        'options' => [
                            'active' => 'Aktiv',
                            'inactive' => 'Inaktiv',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktiv',
                    'add-btn' => 'Kategorieprämie erstellen',
                    'end-date' => 'Enddatum',
                    'enter-reward-points' => 'Prämienpunkte eingeben',
                    'inactive' => 'Inaktiv',
                    'save-btn' => 'Kategorieprämie speichern',
                    'select-category' => 'Kategorie auswählen',
                    'select-status' => 'Status auswählen',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Prämienpunkte auf Kategorie hinzufügen',
                ],

                'edit' => [
                    'active' => 'Aktiv',
                    'add-btn' => 'Kategorieprämie erstellen',
                    'end-date' => 'Enddatum',
                    'enter-reward-points' => 'Prämienpunkte eingeben',
                    'inactive' => 'Inaktiv',
                    'save-btn' => 'Kategorieprämie aktualisieren',
                    'select-category' => 'Kategorie auswählen',
                    'select-status' => 'Status auswählen',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Prämienpunkte auf Kategorie bearbeiten',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Zeitlich begrenzte Kategorieprämie erstellen',
                    'category-specific-time' => 'Kategorie für einen bestimmten Zeitraum',
                    'title' => 'Prämienpunkte auf Kategorie für einen bestimmten Zeitraum',
                ],

                'create' => [
                    'save-btn' => 'Zeitlich begrenzte Kategorieprämie speichern',
                    'title' => 'Zeitlich begrenzte Kategorieprämie hinzufügen',
                ],

                'edit' => [
                    'save-btn' => 'Zeitlich begrenzte Kategorieprämie aktualisieren',
                    'title' => 'Zeitlich begrenzte Kategorieprämie bearbeiten',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Belohnungspunkte zum Warenkorb hinzufügen',
                    'create-success' => 'Warenkorb-Belohnung erfolgreich erstellt',
                    'delete-failed' => 'Warenkorb-Belohnung konnte nicht gelöscht werden!',
                    'delete-success' => 'Warenkorb-Belohnung erfolgreich gelöscht',
                    'error-cart' => 'Kein Warenkorb ausgewählt',
                    'title' => 'Belohnungspunkte im Warenkorb',
                    'update-success' => 'Warenkorb-Belohnung erfolgreich aktualisiert',

                    'datagrid' => [
                        'amount-from' => 'Betrag von',
                        'amount-to' => 'Betrag bis',
                        'delete' => 'Löschen',
                        'edit' => 'Bearbeiten',
                        'end-date' => 'Enddatum',
                        'id' => 'ID',
                        'mass-delete-success' => 'Warenkorb-Belohnungen erfolgreich gelöscht',
                        'mass-update-success' => 'Warenkorb-Belohnungen erfolgreich aktualisiert',
                        'name' => 'Name',
                        'reward-points' => 'Belohnungspunkte',
                        'sku' => 'SKU',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'update-status' => 'Aktualisieren',

                        'options' => [
                            'active' => 'Aktiv',
                            'inactive' => 'Inaktiv',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktiv',
                    'add-btn' => 'Belohnungspunkte zum Warenkorb hinzufügen',
                    'amount-from' => 'Betrag von',
                    'amount-to' => 'Betrag bis',
                    'end-date' => 'Enddatum',
                    'enter-reward-points' => 'Belohnungspunkte eingeben',
                    'inactive' => 'Inaktiv',
                    'save-btn' => 'Warenkorb-Belohnung speichern',
                    'select-status' => 'Status auswählen',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Belohnungspunkte zum Warenkorb hinzufügen',
                ],

                'edit' => [
                    'active' => 'Aktiv',
                    'add-btn' => 'Belohnungspunkte zum Warenkorb hinzufügen',
                    'amount-from' => 'Betrag von',
                    'amount-to' => 'Betrag bis',
                    'end-date' => 'Enddatum',
                    'enter-reward-points' => 'Belohnungspunkte eingeben',
                    'inactive' => 'Inaktiv',
                    'save-btn' => 'Warenkorb-Belohnung aktualisieren',
                    'select-status' => 'Status auswählen',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Belohnungspunkte im Warenkorb bearbeiten',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Belohnungspunkte zu Attribut hinzufügen',
                    'create-success' => 'Belohnungsattribut erfolgreich erstellt',
                    'delete-failed' => 'Attribut konnte nicht gelöscht werden!',
                    'delete-success' => 'Attribut erfolgreich gelöscht',
                    'error-cart' => 'Kein Attribut ausgewählt',
                    'title' => 'Belohnungspunkte für Attribute',
                    'update-success' => 'Belohnungsattribut erfolgreich aktualisiert',

                    'datagrid' => [
                        'code' => 'Code',
                        'delete' => 'Löschen',
                        'edit' => 'Bearbeiten',
                        'id' => 'ID',
                        'mass-delete-success' => 'Attribut erfolgreich gelöscht',
                        'mass-update-success' => 'Attribut erfolgreich aktualisiert',
                        'name' => 'Name',
                        'reward-points' => 'Belohnungspunkte',
                        'sku' => 'SKU-Code',
                        'status' => 'Status',
                        'update-status' => 'Aktualisieren',

                        'options' => [
                            'active' => 'Aktiv',
                            'inactive' => 'Inaktiv',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktiv',
                    'enter-reward-points' => 'Belohnungspunkte eingeben',
                    'inactive' => 'Inaktiv',
                    'reward_points' => 'Attributpunkte',
                    'save-btn' => 'Belohnungspunkte für Attribut speichern',
                    'select-attributes' => 'Attribut auswählen',
                    'select-status' => 'Status auswählen',
                    'status' => 'Status',
                    'title' => 'Belohnungspunkte für Attribute',
                ],

                'edit' => [
                    'active' => 'Aktiv',
                    'edit-btn' => 'Belohnungspunkte für Attribut bearbeiten',
                    'enter-reward-points' => 'Belohnungspunkte eingeben',
                    'inactive' => 'Inaktiv',
                    'reward_points' => 'Attributpunkte',
                    'select-attributes' => 'Attribut auswählen',
                    'select-status' => 'Status auswählen',
                    'status' => 'Status',
                    'title' => 'Belohnungspunkte für Attribute',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Belohnungssystemdetails',

                    'datagrid' => [
                        'active' => 'Aktiv',
                        'id' => 'ID',
                        'inactive' => 'Inaktiv',
                        'name' => 'Name',
                        'reward-points' => 'Belohnungspunkte',
                        'status' => 'Status',
                        'used-rewards-points' => 'Verwendete Belohnungspunkte',
                        'view' => 'Anzeigen',
                    ],
                ],

                'view' => [
                    'title' => 'Belohnungssystemdetails',

                    'datagrid' => [
                        'approved' => 'Genehmigt',
                        'attribute-id' => 'Attribut-ID',
                        'canceled' => 'Abgesagt',
                        'category-id' => 'Kategorie-ID',
                        'closed' => 'Geschlossen',
                        'created-at' => 'Erstellungsdatum',
                        'exp-date' => 'Ablaufdatum',
                        'expire' => 'Abgelaufen',
                        'fraud' => 'Betrug',
                        'id' => 'ID',
                        'name' => 'Name',
                        'note' => 'Notiz',
                        'order-id' => 'Bestell-ID',
                        'pending' => 'Ausstehend',
                        'processing' => 'In Bearbeitung',
                        'product-id' => 'Produkt-ID',
                        'reward-points' => 'Belohnungspunkte',
                        'status' => 'Status',
                        'total-reward-points' => 'Gesamtbelohnungspunkte',
                        'used' => 'Verwendet',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Umwandlungsrate für den Gesamtwarenkorb',
                    'conversion' => 'Umwandlungsrate',
                    'enable-apply-points-label' => 'Kunden erlauben, Punkte beim Checkout anzuwenden',
                    'enable-apply-points' => 'Punkte beim Checkout anwenden aktivieren',
                    'points' => 'Punkte',
                    'redemption-cart-label' => 'Kunden erlauben, Punkte beim Einkauf anzuwenden',
                    'redemption-cart' => 'Warenkorb umwandeln',
                    'save-btn' => 'Speichern',
                    'title' => 'Belohnungssystemdetails',
                    'update-success' => 'Einstellungen zur Einlösung erfolgreich aktualisiert',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Belohnungspunkte',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Ihre Belohnungspunkte',

                        'datagrid' => [
                            'approved' => 'Genehmigt',
                            'attribute-id' => 'Attribut-ID',
                            'canceled' => 'Storniert',
                            'category-id' => 'Kategorie-ID',
                            'closed' => 'Geschlossen',
                            'created-at' => 'Transaktionsdatum',
                            'exp-date' => 'Ablaufdatum',
                            'expire' => 'Ablaufen',
                            'fraud' => 'Betrug',
                            'id' => 'ID',
                            'name' => 'Name',
                            'note' => 'Notiz',
                            'order-id' => 'Bestell-ID',
                            'pending' => 'Ausstehend',
                            'processing' => 'In Bearbeitung',
                            'product-id' => 'Produkt-ID',
                            'reward-points' => 'Belohnungspunkte',
                            'status' => 'Status',
                            'total-reward-points' => 'Gesamtbelohnungspunkte',
                            'used' => 'Verwendet',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Kaufen Sie dieses Produkt und erhalten Sie :reward Punkte. Angebot gültig bis :end_date',
            'product-reward' => 'Kaufen Sie dieses Produkt und erhalten Sie :reward Punkte',

            'review' => [
                'review-points' => 'Bewerten Sie und erhalten Sie :points Punkte',
            ],
        ],

        'register' => [
            'register-reward' => 'Registrieren Sie sich als Mitglied unserer Familie und erhalten Sie :points Punkte',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Belohnungspunkte',
                    'reward-points-earned' => 'Verdiente Belohnungspunkte',

                    'summary' => [
                        'reward_points' => 'Gesamtbelohnungspunkte',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Punkte anwenden',
                    'button-title' => 'Anwenden',
                    'enter-points' => 'Punkte eingeben',
                    'reward-points' => 'Belohnungspunkte anwenden',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Punkte anwenden',
            'enter-points' => 'Punkte eingeben',
            'points-used' => 'Verwendete Punkte',
            'redemption-setting' => 'Info: :points Punkt(e) entsprechen :conversion_rate',
            'total-point' => 'Ihre Gesamten Punkte: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Punkte können nicht angewendet werden',
            'grandtotal' => 'Gesamtbetrag',
            'invalid-points' => 'Das Punktfeld ist erforderlich',
            'only-number' => 'Das Punktfeld muss 1 oder mehr sein',
            'points-applied' => 'Angewandte Punkte',
            'points-apply-issue' => 'Punktcode kann nicht angewendet werden.',
            'points' => 'Punkte',
            'redem-points' => 'Punkte einlösen (-)',
            'remove-points' => 'Punkte entfernen',
            'success-points' => 'Punktcode erfolgreich angewendet.',
            'total-reward-points-awarded' => 'Gesamtzahl der vergebenen Belohnungspunkte',
            'unauthorized-use-points' => 'Sie können momentan keine Belohnungspunkte verwenden, wenden Sie sich an den Administrator.',
            'use-can-use-only' => 'Sie können nur ',
            'warning-required-less-point' => 'Die Einlösung von Belohnungspunkten sollte weniger als den Produktpreis betragen.',
            'you-have-only' => 'Sie haben nur ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Willkommen und vielen Dank für Ihre Registrierung bei uns!',
            'points-rewarded' => 'Sie haben :points Punkte für die Registrierung erhalten',
            'subject' => 'Neue Kundenregistrierung',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'review' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Vielen Dank für Ihre Bewertung des :product_name!',
            'points-rewarded' => 'Sie haben :points Punkte für die Bewertung erhalten',
            'subject' => 'Kundenbewertung',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'dob' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Herzlichen Glückwunsch zum Geburtstag!',
            'points-rewarded' => 'Sie haben :points Punkte für Ihren Geburtstag erhalten',
            'subject' => 'Geburtstag des Kunden',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'pending' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Vielen Dank für Ihre Bestellung auf unserer Website!',
            'points-rewarded' => 'Nach Genehmigung der Bestellung Nr. #:order_id können Sie :points Punkte verwenden',
            'status' => 'Ausstehend',
            'subject' => 'Kundenbestellung',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'used' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Vielen Dank für die Nutzung von Belohnungspunkten zum Kauf von Produkten auf unserer Website!',
            'points-rewarded' => 'Sie haben :points Punkte für die Bestellung Nr. #:order_id verwendet',
            'status' => 'Verwendet',
            'subject' => 'Kundenbelohnungspunkte verwendet',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'approved' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Ihre Belohnungspunkte wurden genehmigt!',
            'points-rewarded' => 'Sie haben :points Punkte für die Bestellung Nr. #:order_id erhalten',
            'status' => 'Genehmigt',
            'subject' => 'Belohnungspunkte genehmigt',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'processing' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Status geändert auf Verarbeitung am :date!',
            'points-rewarded' => 'Status geändert für Bestellung Nr. #:order_id',
            'status' => 'Genehmigt',
            'subject' => 'Belohnungspunkte Verarbeitung',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'expire' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Status geändert auf Abgelaufen am :date!',
            'points-rewarded' => 'Status geändert für Bestellung Nr. #:order_id',
            'status' => 'Abgelaufen',
            'subject' => 'Belohnungspunkte Abgelaufen',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'closed' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Status geändert auf Geschlossen am :date!',
            'points-rewarded' => 'Status geändert auf Geschlossen für Bestellung Nr. #:order_id',
            'status' => 'Geschlossen',
            'subject' => 'Belohnungspunkte Abgelaufen',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'cancel' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Ihre Belohnungspunkte wurden am :date storniert!',
            'points-rewarded' => 'Sie haben :points Punkte für Bestellung Nr. #:order_id storniert',
            'status' => 'Storniert',
            'subject' => 'Belohnungspunkte Storniert',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],

        'fraud' => [
            'dear' => 'Liebe:r :customer_name',
            'greeting' => 'Status geändert auf Betrug!',
            'points-rewarded' => 'Sie haben :points Punkte für Bestellung Nr. #:order_id am :date storniert',
            'status' => 'Betrug',
            'subject' => 'Belohnungspunkte Betrug',
            'thanks' => 'Danke!',
            'total-point-left' => 'Sie haben noch :total_reward_points Punkte übrig',
            'used-points' => 'Sie haben :used_reward_points Punkte verwendet',
        ],
    ],
];
