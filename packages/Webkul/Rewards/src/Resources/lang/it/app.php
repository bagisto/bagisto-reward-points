<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Impostazioni di Riscatto',
                    'reward-point-on-attribute' => 'Punto di Ricompensa su Attributo',
                    'reward-point-on-cart' => 'Punto di Ricompensa su Carrello',
                    'reward-point-on-category-for-specific-time' => 'Punto di Ricompensa su Categoria per Tempo Specifico',
                    'reward-point-on-category' => 'Punto di Ricompensa su Categoria',
                    'reward-point-on-product-for-specific-time' => 'Punto di Ricompensa su Prodotto per Tempo Specifico',
                    'reward-point-on-product' => 'Punto di Ricompensa su Prodotto',
                    'reward-point' => 'Punto di Ricompensa',
                    'reward-system-details' => 'Dettagli del Sistema di Ricompensa',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => "Un programma fedeltà che tiene traccia dell'attività del cliente e li ricompensa con punti per sconti o vantaggi futuri.",
                    'setting' => 'Setting',
                    'title' => 'Punto Premio',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name eliminato con successo.',
                            'email-notification' => 'Notifiche via Email',
                            'reward-used-at-one-time' => 'Punti di Ricompensa Usati in Una Volta',
                            'reward-when-customer-dob-exp-days' => 'Dopo quanti giorni scadono i Punti di Ricompensa per la Data di Nascita del Cliente',
                            'reward-when-customer-dob' => 'Ricompensa per la Data di Nascita del Cliente',
                            'reward-when-customer-register-exp-days' => 'Dopo quanti giorni scadono i Punti di Ricompensa alla Registrazione del Cliente',
                            'reward-when-customer-register' => 'Ricompensa alla Registrazione del Cliente',
                            'reward-when-product-reviewed-exp-days' => 'Dopo quanti giorni scadono i Punti di Ricompensa per la Recensione del Prodotto',
                            'reward-when-product-reviewed' => 'Ricompensa per la Recensione del Prodotto',
                            'status' => 'Stato del Modulo',
                            'update-success' => ':name aggiornato con successo.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Crea Ricompensa Prodotto',
                    'create-success' => 'Ricompensa Prodotto creata con successo',
                    'delete-failed' => 'Ricompensa Prodotto non eliminata!',
                    'delete-success' => 'Ricompensa Prodotto eliminata con successo',
                    'error-product' => 'Nessun prodotto selezionato',
                    'title' => 'Punti Ricompensa sul Prodotto',
                    'update-success' => 'Ricompensa Prodotto aggiornata con successo',

                    'datagrid' => [
                        'delete' => 'Elimina',
                        'edit' => 'Modifica',
                        'end-date' => 'Data di Fine',
                        'id' => 'ID',
                        'mass-delete-success' => 'Ricompensa Prodotto eliminata con successo',
                        'mass-update-success' => 'Ricompensa Prodotto aggiornata con successo',
                        'name' => 'Nome',
                        'reward-points' => 'Punti Ricompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Data di Inizio',
                        'status' => 'Stato',
                        'update-status' => 'Aggiorna Stato',

                        'options' => [
                            'active' => 'Attivo',
                            'inactive' => 'Inattivo',
                        ],
                    ],

                    'create' => [
                        'active' => 'Attivo',
                        'create-btn' => 'Crea Ricompensa Specifica per Prodotto',
                        'end-date' => 'Data di Fine',
                        'enter-reward-points' => 'Inserisci Punti Ricompensa',
                        'inactive' => 'Inattivo',
                        'save-btn' => 'Salva Ricompensa Prodotto',
                        'select-product' => 'Seleziona Prodotto',
                        'select-status' => 'Seleziona Stato',
                        'start-date' => 'Data di Inizio',
                        'status' => 'Stato',
                        'title' => 'Punti Ricompensa sul Prodotto',
                    ],

                    'edit' => [
                        'active' => 'Attivo',
                        'create-btn' => 'Crea Ricompensa Specifica per Prodotto',
                        'end-date' => 'Data di Fine',
                        'enter-reward-points' => 'Inserisci Punti Ricompensa',
                        'inactive' => 'Inattivo',
                        'save-btn' => 'Aggiorna Ricompensa Prodotto',
                        'select-product' => 'Seleziona Prodotto',
                        'select-status' => 'Seleziona Stato',
                        'start-date' => 'Data di Inizio',
                        'status' => 'Stato',
                        'title' => 'Punti Ricompensa sul Prodotto',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Crea Ricompensa Prodotto',
                    'title' => 'Punti Ricompensa sul Prodotto per un Tempo Specifico',

                    'create' => [
                        'create-btn' => 'Crea Ricompensa Specifica per il Tempo',
                        'save-btn' => 'Salva Ricompensa Specifica per il Tempo del Prodotto',
                        'title' => 'Aggiungi Ricompensa Specifica per il Tempo',
                    ],

                    'edit' => [
                        'save-btn' => 'Aggiorna Ricompensa Specifica per il Tempo del Prodotto',
                        'title' => 'Modifica Ricompensa Specifica per il Tempo',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Crea Ricompensa Categoria',
                    'category-specific-time' => 'Tempo Specifico per la Categoria',
                    'create-success' => 'Ricompensa Categoria creata con successo',
                    'delete-failed' => 'Ricompensa Categoria non eliminata!',
                    'delete-success' => 'Ricompensa Categoria eliminata con successo',
                    'error-category' => 'Nessuna Categoria selezionata',
                    'specific-title' => 'Crea Ricompensa Specifica per la Categoria',
                    'title' => 'Punti Ricompensa sulla Categoria',
                    'update-success' => 'Ricompensa Categoria aggiornata con successo',

                    'datagrid' => [
                        'delete' => 'Elimina',
                        'edit' => 'Modifica',
                        'end-date' => 'Data di Fine',
                        'id' => 'ID',
                        'mass-delete-success' => 'Ricompensa Categoria eliminata con successo',
                        'mass-update-success' => 'Ricompensa Categoria aggiornata con successo',
                        'name' => 'Nome',
                        'reward-points' => 'Punti Ricompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Data di Inizio',
                        'status' => 'Stato',
                        'update-status' => 'Aggiorna Stato',

                        'options' => [
                            'active' => 'Attivo',
                            'inactive' => 'Inattivo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Attivo',
                    'add-btn' => 'Crea Ricompensa Categoria',
                    'end-date' => 'Data di Fine',
                    'enter-reward-points' => 'Inserisci Punti Ricompensa',
                    'inactive' => 'Inattivo',
                    'save-btn' => 'Salva Ricompensa Categoria',
                    'select-category' => 'Seleziona Categoria',
                    'select-status' => 'Seleziona Stato',
                    'start-date' => 'Data di Inizio',
                    'status' => 'Stato',
                    'title' => 'Aggiungi Punti Ricompensa sulla Categoria',
                ],

                'edit' => [
                    'active' => 'Attivo',
                    'add-btn' => 'Crea Ricompensa Categoria',
                    'end-date' => 'Data di Fine',
                    'enter-reward-points' => 'Inserisci Punti Ricompensa',
                    'inactive' => 'Inattivo',
                    'save-btn' => 'Aggiorna Ricompensa Categoria',
                    'select-category' => 'Seleziona Categoria',
                    'select-status' => 'Seleziona Stato',
                    'start-date' => 'Data di Inizio',
                    'status' => 'Stato',
                    'title' => 'Modifica Punti Ricompensa sulla Categoria',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Crea Ricompensa Tempo Specifico per la Categoria',
                    'category-specific-time' => 'Tempo Specifico per la Categoria',
                    'title' => 'Punti Ricompensa sulla Categoria per un Tempo Specifico',
                ],

                'create' => [
                    'save-btn' => 'Salva Ricompensa Categoria per Tempo Specifico',
                    'title' => 'Aggiungi Punti Ricompensa sulla Categoria per Tempo Specifico',
                ],

                'edit' => [
                    'save-btn' => 'Aggiorna Ricompensa Categoria per Tempo Specifico',
                    'title' => 'Modifica Punti Ricompensa sulla Categoria per Tempo Specifico',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Aggiungi Punti Premio al Carrello',
                    'create-success' => 'Premio Carrello creato con successo',
                    'delete-failed' => 'Premio Carrello non eliminato!',
                    'delete-success' => 'Premio Carrello eliminato con successo',
                    'error-cart' => 'Nessun carrello selezionato',
                    'title' => 'Punti Premio nel Carrello',
                    'update-success' => 'Premio Carrello aggiornato con successo',

                    'datagrid' => [
                        'amount-from' => 'Importo Da',
                        'amount-to' => 'Importo A',
                        'delete' => 'Elimina',
                        'edit' => 'Modifica',
                        'end-date' => 'Data di Fine',
                        'id' => 'ID',
                        'mass-delete-success' => 'Premio Carrello eliminato con successo',
                        'mass-update-success' => 'Premio Carrello aggiornato con successo',
                        'name' => 'Nome',
                        'reward-points' => 'Punti Premio',
                        'sku' => 'SKU',
                        'start-date' => 'Data di Inizio',
                        'status' => 'Stato',
                        'update-status' => 'Aggiorna',

                        'options' => [
                            'active' => 'Attivo',
                            'inactive' => 'Non Attivo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Attivo',
                    'add-btn' => 'Aggiungi Punti Premio al Carrello',
                    'amount-from' => 'Importo Da',
                    'amount-to' => 'Importo A',
                    'end-date' => 'Data di Fine',
                    'enter-reward-points' => 'Inserisci Punti Premio',
                    'inactive' => 'Non Attivo',
                    'save-btn' => 'Salva Premio Carrello',
                    'select-status' => 'Seleziona Stato',
                    'start-date' => 'Data di Inizio',
                    'status' => 'Stato',
                    'title' => 'Aggiungi Punti Premio al Carrello',
                ],

                'edit' => [
                    'active' => 'Attivo',
                    'add-btn' => 'Aggiungi Punti Premio al Carrello',
                    'amount-from' => 'Importo Da',
                    'amount-to' => 'Importo A',
                    'end-date' => 'Data di Fine',
                    'enter-reward-points' => 'Inserisci Punti Premio',
                    'inactive' => 'Non Attivo',
                    'save-btn' => 'Aggiorna Premio Carrello',
                    'select-status' => 'Seleziona Stato',
                    'start-date' => 'Data di Inizio',
                    'status' => 'Stato',
                    'title' => 'Modifica Punti Premio nel Carrello',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Aggiungi punti ricompensa all\'attributo',
                    'create-success' => 'Attributo ricompensa creato con successo',
                    'delete-failed' => 'Impossibile eliminare l\'attributo!',
                    'delete-success' => 'Attributo eliminato con successo',
                    'error-cart' => 'Nessun attributo selezionato',
                    'title' => 'Punti ricompensa per attributi',
                    'update-success' => 'Attributo ricompensa aggiornato con successo',

                    'datagrid' => [
                        'code' => 'Codice',
                        'delete' => 'Elimina',
                        'edit' => 'Modifica',
                        'id' => 'ID',
                        'mass-delete-success' => 'Attributo eliminato con successo',
                        'mass-update-success' => 'Attributo aggiornato con successo',
                        'name' => 'Nome',
                        'reward-points' => 'Punti ricompensa',
                        'sku' => 'Codice SKU',
                        'status' => 'Stato',
                        'update-status' => 'Aggiorna',

                        'options' => [
                            'active' => 'Attivo',
                            'inactive' => 'Non attivo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Attivo',
                    'enter-reward-points' => 'Inserisci i punti ricompensa',
                    'inactive' => 'Non attivo',
                    'reward_points' => 'Punti attributo',
                    'save-btn' => 'Salva i punti ricompensa per l\'attributo',
                    'select-attributes' => 'Seleziona attributo',
                    'select-status' => 'Seleziona stato',
                    'status' => 'Stato',
                    'title' => 'Punti ricompensa per attributi',
                ],

                'edit' => [
                    'active' => 'Attivo',
                    'edit-btn' => 'Modifica punti ricompensa per attributo',
                    'enter-reward-points' => 'Inserisci i punti ricompensa',
                    'inactive' => 'Non attivo',
                    'reward_points' => 'Punti attributo',
                    'select-attributes' => 'Seleziona attributo',
                    'select-status' => 'Seleziona stato',
                    'status' => 'Stato',
                    'title' => 'Punti ricompensa per attributi',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Dettagli del sistema di ricompense',

                    'datagrid' => [
                        'active' => 'Attivo',
                        'id' => 'ID',
                        'inactive' => 'Non attivo',
                        'name' => 'Nome',
                        'reward-points' => 'Punti ricompensa',
                        'status' => 'Stato',
                        'used-rewards-points' => 'Punti ricompensa utilizzati',
                        'view' => 'Visualizza',
                    ],
                ],

                'view' => [
                    'title' => 'Dettagli del sistema di ricompense',

                    'datagrid' => [
                        'approved' => 'Approvato',
                        'attribute-id' => 'ID attributo',
                        'canceled' => 'Annullato',
                        'category-id' => 'ID categoria',
                        'closed' => 'Chiuso',
                        'created-at' => 'Data di creazione',
                        'exp-date' => 'Data di scadenza',
                        'expire' => 'Scaduto',
                        'fraud' => 'Frode',
                        'id' => 'ID',
                        'name' => 'Nome',
                        'note' => 'Nota',
                        'order-id' => 'ID ordine',
                        'pending' => 'In sospeso',
                        'processing' => 'In elaborazione',
                        'product-id' => 'ID prodotto',
                        'reward-points' => 'Punti ricompensa',
                        'status' => 'Stato',
                        'total-reward-points' => 'Totale punti ricompensa',
                        'used' => 'Utilizzato',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Tasso di conversione per l\'importo totale del carrello',
                    'conversion' => 'Tasso di conversione',
                    'enable-apply-points-label' => 'Consenti ai clienti di applicare punti al momento del pagamento',
                    'enable-apply-points' => 'Abilita l\'applicazione dei punti al momento del pagamento',
                    'points' => 'Punti',
                    'redemption-cart-label' => 'Consenti ai clienti di applicare punti durante l\'acquisto',
                    'redemption-cart' => 'Conversione per l\'importo totale del carrello',
                    'save-btn' => 'Salva',
                    'title' => 'Dettagli del sistema di ricompense',
                    'update-success' => 'Impostazioni di riscatto aggiornate con successo',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Punti fedeltà',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'I tuoi punti fedeltà',

                        'datagrid' => [
                            'approved' => 'Approvato',
                            'attribute-id' => 'ID attributo',
                            'canceled' => 'Annullato',
                            'category-id' => 'ID categoria',
                            'closed' => 'Chiuso',
                            'created-at' => 'Data transazione',
                            'exp-date' => 'Data di scadenza',
                            'expire' => 'Scadere',
                            'fraud' => 'Frode',
                            'id' => 'ID',
                            'name' => 'Nome',
                            'note' => 'Nota',
                            'order-id' => 'ID ordine',
                            'pending' => 'In attesa',
                            'processing' => 'In elaborazione',
                            'product-id' => 'ID prodotto',
                            'reward-points' => 'Punti fedeltà',
                            'status' => 'Stato',
                            'total-reward-points' => 'Punti fedeltà totali',
                            'used' => 'Utilizzato',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Acquista questo prodotto e ricevi :reward punti. Offerta valida fino al :end_date',
            'product-reward' => 'Acquista questo prodotto e ricevi :reward punti',

            'review' => [
                'review-points' => 'Scrivi una recensione e ricevi :points punti',
            ],
        ],

        'register' => [
            'register-reward' => 'Registrati come membro della nostra famiglia e ricevi :points punti',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Punti fedeltà',
                    'reward-points-earned' => 'Punti fedeltà guadagnati',

                    'summary' => [
                        'reward_points' => 'Punti fedeltà totali',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Applica punti',
                    'button-title' => 'Applica',
                    'enter-points' => 'Inserisci punti',
                    'reward-points' => 'Applica punti fedeltà',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Applica Punti',
            'enter-points' => 'Inserisci Punti',
            'points-used' => 'Punti Usati',
            'redemption-setting' => 'Info: :points punto(i) è uguale a :conversion_rate',
            'total-point' => 'Il tuo Totale Punti :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Impossibile applicare i punti',
            'grandtotal' => 'Totale',
            'invalid-points' => 'Il campo dei punti è obbligatorio',
            'only-number' => 'Il campo dei punti deve essere 1 o più',
            'points-applied' => 'Punti Applicati',
            'points-apply-issue' => 'Il codice punti non può essere applicato.',
            'points' => 'Punti',
            'redem-points' => 'Riscatta Punti (-)',
            'remove-points' => 'Rimuovi Punti',
            'success-points' => 'Codice punti applicato con successo.',
            'total-reward-points-awarded' => 'Totale Punti Ricompensa Assegnati',
            'unauthorized-use-points' => 'Non puoi utilizzare punti ricompensa al momento, contatta l\'amministratore.',
            'use-can-use-only' => 'Puoi utilizzare solo ',
            'warning-required-less-point' => 'Il riscatto dei punti ricompensa deve essere inferiore al prezzo del prodotto.',
            'you-have-only' => 'Hai solo ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Benvenuto e grazie per esserti registrato con noi!',
            'points-rewarded' => 'Hai ricevuto :points punti per la registrazione',
            'subject' => 'Nuova Registrazione Cliente',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'review' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Grazie per la recensione su :product_name!',
            'points-rewarded' => 'Hai ricevuto :points punti per la recensione',
            'subject' => 'Recensione Cliente',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'dob' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Buon Compleanno!',
            'points-rewarded' => 'Hai ricevuto :points punti per il compleanno',
            'subject' => 'Data di Nascita Cliente',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'pending' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Grazie per aver ordinato prodotti dal nostro sito!',
            'points-rewarded' => 'Dopo l’approvazione dell’Ordine N° #:order_id, potrai utilizzare :points punti',
            'status' => 'In attesa',
            'subject' => 'Ordine Cliente',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'used' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Grazie per aver utilizzato i punti premio per acquistare prodotti dal nostro sito!',
            'points-rewarded' => 'Hai utilizzato :points punti per l’Ordine N° #:order_id',
            'status' => 'Utilizzato',
            'subject' => 'Utilizzo Punti Premio Cliente',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'approved' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'I tuoi punti premio sono stati approvati!',
            'points-rewarded' => 'Hai ricevuto :points punti per l’Ordine N° #:order_id',
            'status' => 'Approvato',
            'subject' => 'Punti Premio Approvati',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'processing' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Stato cambiato a Elaborazione il :date!',
            'points-rewarded' => 'Stato cambiato per l’Ordine N° #:order_id',
            'status' => 'Approvato',
            'subject' => 'Elaborazione Punti Premio',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'expire' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Stato cambiato a Scaduto il :date!',
            'points-rewarded' => 'Stato cambiato per l’Ordine N° #:order_id',
            'status' => 'Scaduto',
            'subject' => 'Punti Premio Scaduti',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'closed' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Stato cambiato a Chiuso il :date!',
            'points-rewarded' => 'Stato cambiato a Chiuso per l’Ordine N° #:order_id',
            'status' => 'Chiuso',
            'subject' => 'Punti Premio Chiusi',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'cancel' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'I tuoi punti premio sono stati annullati il :date!',
            'points-rewarded' => 'Hai annullato :points punti per l’Ordine N° #:order_id',
            'status' => 'Annullato',
            'subject' => 'Annullo Punti Premio',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],

        'fraud' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Stato cambiato a Frode!',
            'points-rewarded' => 'Hai annullato :points punti per l’Ordine N° #:order_id il :date',
            'status' => 'Frode',
            'subject' => 'Frode Punti Premio',
            'thanks' => 'Grazie!',
            'total-point-left' => 'Hai :total_reward_points punti rimanenti',
            'used-points' => 'Hai utilizzato :used_reward_points punti',
        ],
    ],
];
