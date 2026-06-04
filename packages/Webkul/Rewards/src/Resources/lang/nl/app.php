<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Instellingen voor Inwisselingen',
                    'reward-point-on-attribute' => 'Beloningspunt op Kenmerk',
                    'reward-point-on-cart' => 'Beloningspunt op Winkelwagen',
                    'reward-point-on-category-for-specific-time' => 'Beloningspunt op Categorie voor Specifieke Tijd',
                    'reward-point-on-category' => 'Beloningspunt op Categorie',
                    'reward-point-on-product-for-specific-time' => 'Beloningspunt op Product voor Specifieke Tijd',
                    'reward-point-on-product' => 'Beloningspunt op Product',
                    'reward-point' => 'Beloningspunt',
                    'reward-system-details' => 'Details van het Beloningssysteem',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Een loyaliteitsprogramma dat de activiteit van klanten bijhoudt en hen beloont met punten voor toekomstige kortingen of voordelen.',
                    'setting' => 'Instelling',
                    'title' => 'Beloning Punt',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name succesvol verwijderd.',
                            'email-notification' => 'E-mailmeldingen',
                            'reward-used-at-one-time' => 'Beloningspunten in één keer gebruikt',
                            'reward-when-customer-dob-exp-days' => 'Na hoeveel dagen de Beloningspunten verlopen na de Geboortedatum van de Klant',
                            'reward-when-customer-dob' => 'Beloning voor de Geboortedatum van de Klant',
                            'reward-when-customer-register-exp-days' => 'Na hoeveel dagen de Beloningspunten verlopen na de Registratie van de Klant',
                            'reward-when-customer-register' => 'Beloning bij de Registratie van de Klant',
                            'reward-when-product-reviewed-exp-days' => 'Na hoeveel dagen de Beloningspunten verlopen na de Productbeoordeling',
                            'reward-when-product-reviewed' => 'Beloning bij Productbeoordeling',
                            'status' => 'Module Status',
                            'update-success' => ':name succesvol bijgewerkt.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Productbeloning aanmaken',
                    'create-success' => 'Productbeloning succesvol aangemaakt',
                    'delete-failed' => 'Productbeloning niet verwijderd!',
                    'delete-success' => 'Productbeloning succesvol verwijderd',
                    'error-product' => 'Er is geen product geselecteerd',
                    'title' => 'Beloningspunten op product',
                    'update-success' => 'Productbeloning succesvol bijgewerkt',

                    'datagrid' => [
                        'delete' => 'Verwijderen',
                        'edit' => 'Bewerken',
                        'end-date' => 'Einddatum',
                        'id' => 'Id',
                        'mass-delete-success' => 'Productbeloning succesvol verwijderd',
                        'mass-update-success' => 'Productbeloning succesvol bijgewerkt',
                        'name' => 'Naam',
                        'reward-points' => 'Beloningspunten',
                        'sku' => 'SKU',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'update-status' => 'Bijwerken',

                        'options' => [
                            'active' => 'Actief',
                            'inactive' => 'Inactief',
                        ],
                    ],

                    'create' => [
                        'active' => 'Actief',
                        'create-btn' => 'Specifieke productbeloning aanmaken',
                        'end-date' => 'Einddatum',
                        'enter-reward-points' => 'Voer beloningspunten in',
                        'inactive' => 'Inactief',
                        'save-btn' => 'Productbeloning opslaan',
                        'select-product' => 'Selecteer product',
                        'select-status' => 'Selecteer status',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'title' => 'Beloningspunten op product',
                    ],

                    'edit' => [
                        'active' => 'Actief',
                        'create-btn' => 'Specifieke productbeloning aanmaken',
                        'end-date' => 'Einddatum',
                        'enter-reward-points' => 'Voer beloningspunten in',
                        'inactive' => 'Inactief',
                        'save-btn' => 'Productbeloning bijwerken',
                        'select-product' => 'Selecteer product',
                        'select-status' => 'Selecteer status',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'title' => 'Beloningspunten op product',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Productbeloning aanmaken',
                    'title' => 'Beloningspunten op product voor specifieke tijd',

                    'create' => [
                        'create-btn' => 'Specifieke tijdbeloning aanmaken',
                        'save-btn' => 'Productbeloning voor specifieke tijd opslaan',
                        'title' => 'Specifieke tijdbeloning toevoegen',
                    ],

                    'edit' => [
                        'save-btn' => 'Productbeloning voor specifieke tijd bijwerken',
                        'title' => 'Specifieke tijdbeloning bewerken',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Categoriebeloning aanmaken',
                    'category-specific-time' => 'Categorie specifieke tijd',
                    'create-success' => 'Categoriebeloning succesvol aangemaakt',
                    'delete-failed' => 'Categoriebeloning niet verwijderd!',
                    'delete-success' => 'Categoriebeloning succesvol verwijderd',
                    'error-category' => 'Er is geen categorie geselecteerd',
                    'specific-title' => 'Specifieke categoriebeloning aanmaken',
                    'title' => 'Beloningspunten op categorie',
                    'update-success' => 'Categoriebeloning succesvol bijgewerkt',

                    'datagrid' => [
                        'delete' => 'Verwijderen',
                        'edit' => 'Bewerken',
                        'end-date' => 'Einddatum',
                        'id' => 'Id',
                        'mass-delete-success' => 'Categoriebeloning succesvol verwijderd',
                        'mass-update-success' => 'Categoriebeloning succesvol bijgewerkt',
                        'name' => 'Naam',
                        'reward-points' => 'Beloningspunten',
                        'sku' => 'SKU',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'update-status' => 'Bijwerken',

                        'options' => [
                            'active' => 'Actief',
                            'inactive' => 'Inactief',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Actief',
                    'add-btn' => 'Categoriebeloning aanmaken',
                    'end-date' => 'Einddatum',
                    'enter-reward-points' => 'Voer beloningspunten in',
                    'inactive' => 'Inactief',
                    'save-btn' => 'Categoriebeloning opslaan',
                    'select-category' => 'Selecteer categorie',
                    'select-status' => 'Selecteer status',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Beloningspunten op categorie toevoegen',
                ],

                'edit' => [
                    'active' => 'Actief',
                    'add-btn' => 'Categoriebeloning aanmaken',
                    'end-date' => 'Einddatum',
                    'enter-reward-points' => 'Voer beloningspunten in',
                    'inactive' => 'Inactief',
                    'save-btn' => 'Categoriebeloning bijwerken',
                    'select-category' => 'Selecteer categorie',
                    'select-status' => 'Selecteer status',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Categoriebeloning bewerken',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Categoriebeloning voor specifieke tijd aanmaken',
                    'category-specific-time' => 'Categorie specifieke tijd',
                    'title' => 'Beloningspunten op categorie voor specifieke tijd',
                ],

                'create' => [
                    'save-btn' => 'Categoriebeloning voor specifieke tijd opslaan',
                    'title' => 'Categoriebeloning voor specifieke tijd toevoegen',
                ],

                'edit' => [
                    'save-btn' => 'Categoriebeloning voor specifieke tijd bijwerken',
                    'title' => 'Categoriebeloning voor specifieke tijd bewerken',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Beloningspunten aan Winkelwagentje Toevoegen',
                    'create-success' => 'Beloning in winkelwagentje succesvol aangemaakt',
                    'delete-failed' => 'Beloning in winkelwagentje kon niet worden verwijderd!',
                    'delete-success' => 'Beloning in winkelwagentje succesvol verwijderd',
                    'error-cart' => 'Geen winkelwagentje geselecteerd',
                    'title' => 'Beloningspunten in Winkelwagentje',
                    'update-success' => 'Beloning in winkelwagentje succesvol bijgewerkt',

                    'datagrid' => [
                        'amount-from' => 'Bedrag Van',
                        'amount-to' => 'Bedrag Tot',
                        'delete' => 'Verwijderen',
                        'edit' => 'Bewerken',
                        'end-date' => 'Einddatum',
                        'id' => 'ID',
                        'mass-delete-success' => 'Beloning in winkelwagentje succesvol verwijderd',
                        'mass-update-success' => 'Beloning in winkelwagentje succesvol bijgewerkt',
                        'name' => 'Naam',
                        'reward-points' => 'Beloningspunten',
                        'sku' => 'SKU',
                        'start-date' => 'Startdatum',
                        'status' => 'Status',
                        'update-status' => 'Bijwerken',

                        'options' => [
                            'active' => 'Actief',
                            'inactive' => 'Inactief',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Actief',
                    'add-btn' => 'Beloningspunten aan Winkelwagentje Toevoegen',
                    'amount-from' => 'Bedrag Van',
                    'amount-to' => 'Bedrag Tot',
                    'end-date' => 'Einddatum',
                    'enter-reward-points' => 'Voer Beloningspunten In',
                    'inactive' => 'Inactief',
                    'save-btn' => 'Beloning in Winkelwagentje Opslaan',
                    'select-status' => 'Status Selecteren',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Beloningspunten aan Winkelwagentje Toevoegen',
                ],

                'edit' => [
                    'active' => 'Actief',
                    'add-btn' => 'Beloningspunten aan Winkelwagentje Toevoegen',
                    'amount-from' => 'Bedrag Van',
                    'amount-to' => 'Bedrag Tot',
                    'end-date' => 'Einddatum',
                    'enter-reward-points' => 'Voer Beloningspunten In',
                    'inactive' => 'Inactief',
                    'save-btn' => 'Beloning in Winkelwagentje Bijwerken',
                    'select-status' => 'Status Selecteren',
                    'start-date' => 'Startdatum',
                    'status' => 'Status',
                    'title' => 'Beloningspunten in Winkelwagentje Bewerken',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Maak beloningspunt op attribuut',
                    'create-success' => 'Attribuutbeloning succesvol aangemaakt',
                    'delete-failed' => 'Attribuutbeloning niet verwijderd!',
                    'delete-success' => 'Attribuutbeloning succesvol verwijderd',
                    'error-cart' => 'Er is geen attribuut geselecteerd',
                    'title' => 'Beloningspunt op attributen',
                    'update-success' => 'Attribuutbeloning succesvol bijgewerkt',

                    'datagrid' => [
                        'code' => 'Code',
                        'delete' => 'Verwijderen',
                        'edit' => 'Bewerken',
                        'id' => 'Id',
                        'mass-delete-success' => 'Attribuutbeloning succesvol verwijderd',
                        'mass-update-success' => 'Attribuutbeloning succesvol bijgewerkt',
                        'name' => 'Naam',
                        'reward-points' => 'Beloningspunten',
                        'sku' => 'SKU',
                        'status' => 'Status',
                        'update-status' => 'Bijwerken',

                        'options' => [
                            'active' => 'Actief',
                            'inactive' => 'Inactief',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Actief',
                    'enter-reward-points' => 'Voer beloningspunten in',
                    'inactive' => 'Inactief',
                    'reward_points' => 'Attribuutpunten',
                    'save-btn' => 'Sla beloningspunt op attribuut op',
                    'select-attributes' => 'Selecteer attribuut',
                    'select-status' => 'Selecteer status',
                    'status' => 'Status',
                    'title' => 'Beloningspunt op attributen',
                ],

                'edit' => [
                    'active' => 'Actief',
                    'edit-btn' => 'Bijwerk beloningspunt op attribuut',
                    'enter-reward-points' => 'Voer beloningspunten in',
                    'inactive' => 'Inactief',
                    'reward_points' => 'Attribuutpunten',
                    'select-attributes' => 'Selecteer attribuut',
                    'select-status' => 'Selecteer status',
                    'status' => 'Status',
                    'title' => 'Beloningspunt op attributen',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Beloningssysteem Details',

                    'datagrid' => [
                        'active' => 'Actief',
                        'id' => 'ID',
                        'inactive' => 'Inactief',
                        'name' => 'Naam',
                        'reward-points' => 'Beloningspunten',
                        'status' => 'Status',
                        'used-rewards-points' => 'Gebruikte beloningspunten',
                        'view' => 'Bekijken',
                    ],
                ],

                'view' => [
                    'title' => 'Beloningssysteem Details',

                    'datagrid' => [
                        'approved' => 'Goedgekeurd',
                        'attribute-id' => 'Attribuut ID',
                        'canceled' => 'Geannuleerd',
                        'category-id' => 'Categorie ID',
                        'closed' => 'Gesloten',
                        'created-at' => 'Transactiedatum',
                        'exp-date' => 'Vervaldatum',
                        'expire' => 'Verlopen',
                        'fraud' => 'Fraude',
                        'id' => 'ID',
                        'name' => 'Naam',
                        'note' => 'Notitie',
                        'order-id' => 'Bestelling ID',
                        'pending' => 'In afwachting',
                        'processing' => 'Verwerking',
                        'product-id' => 'Product ID',
                        'reward-points' => 'Beloningspunten',
                        'status' => 'Status',
                        'total-reward-points' => 'Totaal beloningspunten',
                        'used' => 'Gebruikt',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Conversiekoers voor inwisseling van winkelwagen subtotaal',
                    'conversion' => 'Conversieratio',
                    'enable-apply-points-label' => 'Klanten toestaan punten toe te passen tijdens het afrekenen',
                    'enable-apply-points' => 'Punten toepassen tijdens het afrekenen inschakelen',
                    'points' => 'Punten',
                    'redemption-cart-label' => 'Klanten toestaan punten toe te passen tijdens het winkelen',
                    'redemption-cart' => 'Inwisseling over winkelwagen subtotaal',
                    'save-btn' => 'Opslaan',
                    'title' => 'Instellingen voor inwisseling',
                    'update-success' => 'Instellingen voor inwisseling succesvol bijgewerkt',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Beloningspunten',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Jouw beloningspunten',

                        'datagrid' => [
                            'approved' => 'Goedgekeurd',
                            'attribute-id' => 'Attribuut-ID',
                            'canceled' => 'Geannuleerd',
                            'category-id' => 'Categorie-ID',
                            'closed' => 'Gesloten',
                            'created-at' => 'Transactiedatum',
                            'exp-date' => 'Vervaldatum',
                            'expire' => 'Vervallen',
                            'fraud' => 'Fraude',
                            'id' => 'ID',
                            'name' => 'Naam',
                            'note' => 'Opmerking',
                            'order-id' => 'Order-ID',
                            'pending' => 'In afwachting',
                            'processing' => 'Verwerken',
                            'product-id' => 'Product-ID',
                            'reward-points' => 'Beloningspunten',
                            'status' => 'Status',
                            'total-reward-points' => 'Totaal aantal beloningspunten',
                            'used' => 'Gebruikt',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Koop dit product en ontvang :reward punten. Aanbieding geldig tot :end_date',
            'product-reward' => 'Koop dit product en ontvang :reward punten',

            'review' => [
                'review-points' => 'Schrijf een beoordeling en ontvang :points punten',
            ],
        ],

        'register' => [
            'register-reward' => 'Registreer als lid van onze familie en ontvang :points punten',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Beloningspunten',
                    'reward-points-earned' => 'Verwonnen beloningspunten',

                    'summary' => [
                        'reward_points' => 'Totaal aantal beloningspunten',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Punten toepassen',
                    'button-title' => 'Toepassen',
                    'enter-points' => 'Voer punten in',
                    'reward-points' => 'Beloningspunten toepassen',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Pas Punten Toe',
            'enter-points' => 'Voer Punten In',
            'points-used' => 'Gebruikte Punten',
            'redemption-setting' => 'Info: :points punt(en) is gelijk aan :conversion_rate',
            'total-point' => 'Je Totale Punten: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Punten kunnen niet worden toegepast',
            'grandtotal' => 'Totaal',
            'invalid-points' => 'Het puntveld is vereist',
            'only-number' => 'Het puntveld moet 1 of meer zijn',
            'points-applied' => 'Toegepaste Punten',
            'points-apply-issue' => 'Puntencode kan niet worden toegepast.',
            'points' => 'Punten',
            'redem-points' => 'Punten Inwisselen (-)',
            'remove-points' => 'Punten Verwijderen',
            'success-points' => 'Puntencode succesvol toegepast.',
            'total-reward-points-awarded' => 'Totaal Toegekende Beloningspunten',
            'unauthorized-use-points' => 'Je kunt op dit moment geen beloningspunten gebruiken, neem contact op met de beheerder.',
            'use-can-use-only' => 'Je kunt alleen gebruiken ',
            'warning-required-less-point' => 'De inwisseling van beloningspunten moet lager zijn dan de prijs van het product.',
            'you-have-only' => 'Je hebt alleen ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Welkom en bedankt voor uw registratie bij ons!',
            'points-rewarded' => 'U heeft :points punten ontvangen voor registratie',
            'subject' => 'Nieuwe Klantregistratie',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'review' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Bedankt voor uw review van :product_name!',
            'points-rewarded' => 'U heeft :points punten ontvangen voor uw review',
            'subject' => 'Klantbeoordeling',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'dob' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Gefeliciteerd met uw verjaardag!',
            'points-rewarded' => 'U heeft :points punten ontvangen voor uw verjaardag',
            'subject' => 'Geboortedatum Klant',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'pending' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Bedankt voor uw bestelling bij onze website!',
            'points-rewarded' => 'Na goedkeuring van Order Nr. #:order_id kunt u :points punten gebruiken',
            'status' => 'In behandeling',
            'subject' => 'Klantbestelling',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'used' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Bedankt voor het gebruiken van uw punten om producten op onze website te kopen!',
            'points-rewarded' => 'U heeft :points punten gebruikt voor Order Nr. #:order_id',
            'status' => 'Gebruikt',
            'subject' => 'Gebruik van Klantpunten',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'approved' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Uw punten zijn goedgekeurd!',
            'points-rewarded' => 'U heeft :points punten ontvangen voor Order Nr. #:order_id',
            'status' => 'Goedgekeurd',
            'subject' => 'Punten Goedkeuring',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'processing' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Status is op :date gewijzigd naar Verwerking!',
            'points-rewarded' => 'Status gewijzigd voor Order Nr. #:order_id',
            'status' => 'Goedgekeurd',
            'subject' => 'Verwerking van Punten',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'expire' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Status is op :date gewijzigd naar Verlopen!',
            'points-rewarded' => 'Status gewijzigd voor Order Nr. #:order_id',
            'status' => 'Verlopen',
            'subject' => 'Punten Verlopen',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'closed' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Status is op :date gewijzigd naar Gesloten!',
            'points-rewarded' => 'Status gewijzigd naar Gesloten voor Order Nr. #:order_id',
            'status' => 'Gesloten',
            'subject' => 'Punten Gesloten',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'cancel' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Uw punten zijn op :date geannuleerd!',
            'points-rewarded' => 'U heeft :points punten geannuleerd voor Order Nr. #:order_id',
            'status' => 'Geannuleerd',
            'subject' => 'Annulering van Punten',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],

        'fraud' => [
            'dear' => 'Beste :customer_name',
            'greeting' => 'Status gewijzigd naar Fraude!',
            'points-rewarded' => 'U heeft :points punten geannuleerd voor Order Nr. #:order_id op :date',
            'status' => 'Fraude',
            'subject' => 'Punten Fraude',
            'thanks' => 'Dank u!',
            'total-point-left' => 'U heeft nog :total_reward_points punten over',
            'used-points' => 'U heeft :used_reward_points punten gebruikt',
        ],
    ],
];
