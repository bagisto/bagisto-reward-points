<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Paramètres de rachat',
                    'reward-point-on-attribute' => 'Point de récompense sur l\'attribut',
                    'reward-point-on-cart' => 'Point de récompense sur le panier',
                    'reward-point-on-category-for-specific-time' => 'Point de récompense sur la catégorie pour un temps spécifique',
                    'reward-point-on-category' => 'Point de récompense sur la catégorie',
                    'reward-point-on-product-for-specific-time' => 'Point de récompense sur le produit pour un temps spécifique',
                    'reward-point-on-product' => 'Point de récompense sur le produit',
                    'reward-point' => 'Point de récompense',
                    'reward-system-details' => 'Détails du système de récompense',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => "Un programme de fidélité qui suit l'activité des clients et les récompense avec des points pour des remises ou des avantages futurs.",
                    'setting' => 'Setting',
                    'title' => 'Point de Récompense',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name supprimé avec succès.',
                            'email-notification' => 'Notifications par email',
                            'reward-used-at-one-time' => 'Point de récompense utilisé en une seule fois',
                            'reward-when-customer-dob-exp-days' => 'Après combien de jours le point de récompense expire sur la date de naissance du client',
                            'reward-when-customer-dob' => 'Récompense pour la date de naissance du client',
                            'reward-when-customer-register-exp-days' => 'Après combien de jours le point de récompense expire après l\'inscription du client',
                            'reward-when-customer-register' => 'Récompense lors de l\'inscription du client',
                            'reward-when-product-reviewed-exp-days' => 'Après combien de jours le point de récompense expire après la revue du produit',
                            'reward-when-product-reviewed' => 'Récompense lors de la revue du produit',
                            'status' => 'Statut du module',
                            'update-success' => ':name mis à jour avec succès.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش محصول',
                    'create-success' => 'پاداش محصول با موفقیت ایجاد شد',
                    'delete-failed' => 'حذف پاداش محصول موفقیت‌آمیز نبود!',
                    'delete-success' => 'پاداش محصول با موفقیت حذف شد',
                    'error-product' => 'هیچ محصولی انتخاب نشده است',
                    'title' => 'امتیازات پاداش بر روی محصول',
                    'update-success' => 'پاداش محصول با موفقیت به‌روزرسانی شد',

                    'datagrid' => [
                        'delete' => 'حذف',
                        'edit' => 'ویرایش',
                        'end-date' => 'تاریخ پایان',
                        'id' => 'شناسه',
                        'mass-delete-success' => 'پاداش محصول با موفقیت حذف شد',
                        'mass-update-success' => 'پاداش محصول با موفقیت به‌روزرسانی شد',
                        'name' => 'نام',
                        'reward-points' => 'امتیازات پاداش',
                        'sku' => 'SKU',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'update-status' => 'به‌روزرسانی',

                        'options' => [
                            'active' => 'فعال',
                            'inactive' => 'غیرفعال',
                        ],
                    ],

                    'create' => [
                        'active' => 'فعال',
                        'create-btn' => 'ایجاد پاداش مخصوص محصول',
                        'end-date' => 'تاریخ پایان',
                        'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                        'inactive' => 'غیرفعال',
                        'save-btn' => 'ذخیره پاداش محصول',
                        'select-product' => 'انتخاب محصول',
                        'select-status' => 'انتخاب وضعیت',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'title' => 'امتیازات پاداش بر روی محصول',
                    ],

                    'edit' => [
                        'active' => 'فعال',
                        'create-btn' => 'ایجاد پاداش مخصوص محصول',
                        'end-date' => 'تاریخ پایان',
                        'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                        'inactive' => 'غیرفعال',
                        'save-btn' => 'به‌روزرسانی پاداش محصول',
                        'select-product' => 'انتخاب محصول',
                        'select-status' => 'انتخاب وضعیت',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'title' => 'امتیازات پاداش بر روی محصول',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش محصول',
                    'title' => 'امتیازات پاداش بر روی محصول برای زمان مشخص',

                    'create' => [
                        'create-btn' => 'ایجاد پاداش مخصوص زمان',
                        'save-btn' => 'ذخیره پاداش مخصوص زمان',
                        'title' => 'افزودن پاداش مخصوص زمان',
                    ],

                    'edit' => [
                        'save-btn' => 'به‌روزرسانی پاداش مخصوص زمان',
                        'title' => 'ویرایش پاداش مخصوص زمان',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش دسته‌بندی',
                    'category-specific-time' => 'دسته‌بندی برای زمان مشخص',
                    'create-success' => 'پاداش دسته‌بندی با موفقیت ایجاد شد',
                    'delete-failed' => 'حذف پاداش دسته‌بندی موفقیت‌آمیز نبود!',
                    'delete-success' => 'پاداش دسته‌بندی با موفقیت حذف شد',
                    'error-category' => 'هیچ دسته‌بندی انتخاب نشده است',
                    'specific-title' => 'ایجاد پاداش مخصوص دسته‌بندی',
                    'title' => 'امتیازات پاداش بر روی دسته‌بندی',
                    'update-success' => 'پاداش دسته‌بندی با موفقیت به‌روزرسانی شد',

                    'datagrid' => [
                        'delete' => 'حذف',
                        'edit' => 'ویرایش',
                        'end-date' => 'تاریخ پایان',
                        'id' => 'شناسه',
                        'mass-delete-success' => 'پاداش دسته‌بندی با موفقیت حذف شد',
                        'mass-update-success' => 'پاداش دسته‌بندی با موفقیت به‌روزرسانی شد',
                        'name' => 'نام',
                        'reward-points' => 'امتیازات پاداش',
                        'sku' => 'SKU',
                        'start-date' => 'تاریخ شروع',
                        'status' => 'وضعیت',
                        'update-status' => 'به‌روزرسانی',

                        'options' => [
                            'active' => 'فعال',
                            'inactive' => 'غیرفعال',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'فعال',
                    'add-btn' => 'ایجاد پاداش دسته‌بندی',
                    'end-date' => 'تاریخ پایان',
                    'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                    'inactive' => 'غیرفعال',
                    'save-btn' => 'ذخیره پاداش دسته‌بندی',
                    'select-category' => 'انتخاب دسته‌بندی',
                    'select-status' => 'انتخاب وضعیت',
                    'start-date' => 'تاریخ شروع',
                    'status' => 'وضعیت',
                    'title' => 'افزودن امتیازات پاداش بر روی دسته‌بندی',
                ],

                'edit' => [
                    'active' => 'فعال',
                    'add-btn' => 'ایجاد پاداش دسته‌بندی',
                    'end-date' => 'تاریخ پایان',
                    'enter-reward-points' => 'وارد کردن امتیازات پاداش',
                    'inactive' => 'غیرفعال',
                    'save-btn' => 'به‌روزرسانی پاداش دسته‌بندی',
                    'select-category' => 'انتخاب دسته‌بندی',
                    'select-status' => 'انتخاب وضعیت',
                    'start-date' => 'تاریخ شروع',
                    'status' => 'وضعیت',
                    'title' => 'ویرایش امتیازات پاداش بر روی دسته‌بندی',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'ایجاد پاداش دسته‌بندی برای زمان مشخص',
                    'category-specific-time' => 'دسته‌بندی برای زمان مشخص',
                    'title' => 'امتیازات پاداش بر روی دسته‌بندی برای زمان مشخص',
                ],

                'create' => [
                    'save-btn' => 'ذخیره پاداش دسته‌بندی برای زمان مشخص',
                    'title' => 'افزودن پاداش دسته‌بندی برای زمان مشخص',
                ],

                'edit' => [
                    'save-btn' => 'به‌روزرسانی پاداش دسته‌بندی برای زمان مشخص',
                    'title' => 'ویرایش پاداش دسته‌بندی برای زمان مشخص',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Ajouter des points de récompense sur le panier',
                    'create-success' => 'Récompense de panier créée avec succès',
                    'delete-failed' => 'La récompense de panier n\'a pas été supprimée !',
                    'delete-success' => 'Récompense de panier supprimée avec succès',
                    'error-cart' => 'Aucun panier sélectionné',
                    'title' => 'Points de récompense sur le panier',
                    'update-success' => 'Récompense de panier mise à jour avec succès',

                    'datagrid' => [
                        'amount-from' => 'Montant De',
                        'amount-to' => 'Montant À',
                        'delete' => 'Supprimer',
                        'edit' => 'Modifier',
                        'end-date' => 'Date de fin',
                        'id' => 'Identifiant',
                        'mass-delete-success' => 'Récompense de panier supprimée avec succès',
                        'mass-update-success' => 'Récompense de panier mise à jour avec succès',
                        'name' => 'Nom',
                        'reward-points' => 'Points de récompense',
                        'sku' => 'Code SKU',
                        'start-date' => 'Date de début',
                        'status' => 'Statut',
                        'update-status' => 'Mettre à jour',

                        'options' => [
                            'active' => 'Actif',
                            'inactive' => 'Inactif',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Actif',
                    'add-btn' => 'Ajouter des points de récompense sur le panier',
                    'amount-from' => 'Montant De',
                    'amount-to' => 'Montant À',
                    'end-date' => 'Date de fin',
                    'enter-reward-points' => 'Entrez les points de récompense',
                    'inactive' => 'Inactif',
                    'save-btn' => 'Enregistrer la récompense de panier',
                    'select-status' => 'Sélectionnez le statut',
                    'start-date' => 'Date de début',
                    'status' => 'Statut',
                    'title' => 'Points de récompense sur le panier',
                ],

                'edit' => [
                    'active' => 'Actif',
                    'add-btn' => 'Ajouter des points de récompense sur le panier',
                    'amount-from' => 'Montant De',
                    'amount-to' => 'Montant À',
                    'end-date' => 'Date de fin',
                    'enter-reward-points' => 'Entrez les points de récompense',
                    'inactive' => 'Inactif',
                    'save-btn' => 'Enregistrer la récompense de panier',
                    'select-status' => 'Sélectionnez le statut',
                    'start-date' => 'Date de début',
                    'status' => 'Statut',
                    'title' => 'Points de récompense sur le panier',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Ajouter des points de récompense à l\'attribut',
                    'create-success' => 'Attribut de récompense créé avec succès',
                    'delete-failed' => 'Échec de la suppression de l\'attribut !',
                    'delete-success' => 'Attribut supprimé avec succès',
                    'error-cart' => 'Aucun attribut sélectionné',
                    'title' => 'Points de récompense pour les attributs',
                    'update-success' => 'Attribut de récompense mis à jour avec succès',

                    'datagrid' => [
                        'code' => 'Code',
                        'delete' => 'Supprimer',
                        'edit' => 'Éditer',
                        'id' => 'ID',
                        'mass-delete-success' => 'Attribut supprimé avec succès',
                        'mass-update-success' => 'Attribut mis à jour avec succès',
                        'name' => 'Nom',
                        'reward-points' => 'Points de récompense',
                        'sku' => 'Code SKU',
                        'status' => 'Statut',
                        'update-status' => 'Mettre à jour',

                        'options' => [
                            'active' => 'Actif',
                            'inactive' => 'Inactif',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Actif',
                    'enter-reward-points' => 'Saisir les points de récompense',
                    'inactive' => 'Inactif',
                    'reward_points' => 'Points de l\'attribut',
                    'save-btn' => 'Enregistrer les points de récompense sur l\'attribut',
                    'select-attributes' => 'Sélectionner l\'attribut',
                    'select-status' => 'Sélectionner le statut',
                    'status' => 'Statut',
                    'title' => 'Points de récompense pour les attributs',
                ],

                'edit' => [
                    'active' => 'Actif',
                    'edit-btn' => 'Modifier les points de récompense de l\'attribut',
                    'enter-reward-points' => 'Saisir les points de récompense',
                    'inactive' => 'Inactif',
                    'reward_points' => 'Points de l\'attribut',
                    'select-attributes' => 'Sélectionner l\'attribut',
                    'select-status' => 'Sélectionner le statut',
                    'status' => 'Statut',
                    'title' => 'Points de récompense pour les attributs',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Détails du système de récompenses',

                    'datagrid' => [
                        'active' => 'Actif',
                        'id' => 'ID',
                        'inactive' => 'Inactif',
                        'name' => 'Nom',
                        'reward-points' => 'Points de récompense',
                        'status' => 'Statut',
                        'used-rewards-points' => 'Points de récompense utilisés',
                        'view' => 'Voir',
                    ],
                ],

                'view' => [
                    'title' => 'Détails du système de récompenses',

                    'datagrid' => [
                        'approved' => 'Approuvé',
                        'attribute-id' => 'ID de l\'attribut',
                        'canceled' => 'Annulé',
                        'category-id' => 'ID de la catégorie',
                        'closed' => 'Fermé',
                        'created-at' => 'Date de création',
                        'exp-date' => 'Date d\'expiration',
                        'expire' => 'Expiré',
                        'fraud' => 'Fraude',
                        'id' => 'ID',
                        'name' => 'Nom',
                        'note' => 'Note',
                        'order-id' => 'ID de commande',
                        'pending' => 'En attente',
                        'processing' => 'En cours',
                        'product-id' => 'ID du produit',
                        'reward-points' => 'Points de récompense',
                        'status' => 'Statut',
                        'total-reward-points' => 'Points de récompense totaux',
                        'used' => 'Utilisé',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Taux de conversion du panier total',
                    'conversion' => 'Taux de conversion',
                    'enable-apply-points-label' => 'Permettre aux clients d\'appliquer des points lors du paiement',
                    'enable-apply-points' => 'Activer l\'application des points lors du paiement',
                    'points' => 'Points',
                    'redemption-cart-label' => 'Permettre aux clients d\'appliquer des points lors de l\'achat',
                    'redemption-cart' => 'Conversion sur le total du panier',
                    'save-btn' => 'Enregistrer',
                    'title' => 'Détails du système de récompenses',
                    'update-success' => 'Paramètres de remboursement mis à jour avec succès',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Points de récompense',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Vos points de récompense',

                        'datagrid' => [
                            'approved' => 'Approuvé',
                            'attribute-id' => 'ID d\'attribut',
                            'canceled' => 'Annulé',
                            'category-id' => 'ID de catégorie',
                            'closed' => 'Fermé',
                            'created-at' => 'Date de transaction',
                            'exp-date' => 'Date d\'expiration',
                            'expire' => 'Expirer',
                            'fraud' => 'Fraude',
                            'id' => 'ID',
                            'name' => 'Nom',
                            'note' => 'Note',
                            'order-id' => 'ID de commande',
                            'pending' => 'En attente',
                            'processing' => 'En traitement',
                            'product-id' => 'ID de produit',
                            'reward-points' => 'Points de récompense',
                            'status' => 'Statut',
                            'total-reward-points' => 'Total des points de récompense',
                            'used' => 'Utilisé',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Achetez ce produit et obtenez :reward points. Offre valable jusqu\'au :end_date',
            'product-reward' => 'Achetez ce produit et obtenez :reward points',

            'review' => [
                'review-points' => 'Laissez un avis et obtenez :points points',
            ],
        ],

        'register' => [
            'register-reward' => 'Inscrivez-vous en tant que membre de notre famille et obtenez :points points',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Points de récompense',
                    'reward-points-earned' => 'Points de récompense gagnés',

                    'summary' => [
                        'reward_points' => 'Total des points de récompense',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Appliquer les points',
                    'button-title' => 'Appliquer',
                    'enter-points' => 'Entrez les points',
                    'reward-points' => 'Appliquer les points de récompense',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Appliquer les Points',
            'enter-points' => 'Entrer les Points',
            'points-used' => 'Points Utilisés',
            'redemption-setting' => 'Info : :points point(s) équivaut à :conversion_rate',
            'total-point' => 'Votre Total de Points : :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Impossible d\'appliquer les points',
            'grandtotal' => 'Total',
            'invalid-points' => 'Le champ des points est obligatoire',
            'only-number' => 'Le champ des points doit être de 1 ou plus',
            'points-applied' => 'Points Appliqués',
            'points-apply-issue' => 'Le code de points ne peut pas être appliqué.',
            'points' => 'Points',
            'redem-points' => 'Échanger des Points (-)',
            'remove-points' => 'Supprimer les Points',
            'success-points' => 'Code de points appliqué avec succès.',
            'total-reward-points-awarded' => 'Total des Points de Récompense Attribués',
            'unauthorized-use-points' => 'Vous ne pouvez pas utiliser de points de récompense pour le moment, contactez l\'administrateur.',
            'use-can-use-only' => 'Vous pouvez seulement utiliser ',
            'warning-required-less-point' => 'Le rachat de points de récompense doit être inférieur au prix du produit.',
            'you-have-only' => 'Vous n\'avez que ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Bienvenue et merci de vous être inscrit chez nous!',
            'points-rewarded' => 'Vous avez reçu :points points pour votre inscription',
            'subject' => 'Nouvelle Inscription Client',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'review' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Merci pour votre avis sur :product_name!',
            'points-rewarded' => 'Vous avez reçu :points points pour votre avis',
            'subject' => 'Avis Client',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'dob' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Joyeux anniversaire!',
            'points-rewarded' => 'Vous avez reçu :points points pour votre anniversaire',
            'subject' => 'Date d’anniversaire du Client',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'pending' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Merci pour votre commande sur notre site web!',
            'points-rewarded' => 'Après l’approbation de la commande n° #:order_id, vous pourrez utiliser :points points',
            'status' => 'En attente',
            'subject' => 'Commande Client',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'used' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Merci d’avoir utilisé des points de récompense pour acheter des produits sur notre site web!',
            'points-rewarded' => 'Vous avez utilisé :points points pour la commande n° #:order_id',
            'status' => 'Utilisé',
            'subject' => 'Utilisation des Points de Récompense Client',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'approved' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Vos points de récompense ont été approuvés!',
            'points-rewarded' => 'Vous avez reçu :points points pour la commande n° #:order_id',
            'status' => 'Approuvé',
            'subject' => 'Points de Récompense Approuvés',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'processing' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Statut changé en Traitement le :date!',
            'points-rewarded' => 'Statut changé pour la commande n° #:order_id',
            'status' => 'Approuvé',
            'subject' => 'Traitement des Points de Récompense',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'expire' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Statut changé en Expiré le :date!',
            'points-rewarded' => 'Statut changé pour la commande n° #:order_id',
            'status' => 'Expiré',
            'subject' => 'Points de Récompense Expirés',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'closed' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Statut changé en Fermé le :date!',
            'points-rewarded' => 'Statut changé en Fermé pour la commande n° #:order_id',
            'status' => 'Fermé',
            'subject' => 'Points de Récompense Fermés',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'cancel' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Vos points de récompense ont été annulés le :date!',
            'points-rewarded' => 'Vous avez annulé :points points pour la commande n° #:order_id',
            'status' => 'Annulé',
            'subject' => 'Points de Récompense Annulés',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],

        'fraud' => [
            'dear' => 'Cher/Chère :customer_name',
            'greeting' => 'Statut changé en Fraude!',
            'points-rewarded' => 'Vous avez annulé :points points pour la commande n° #:order_id le :date',
            'status' => 'Fraude',
            'subject' => 'Fraude aux Points de Récompense',
            'thanks' => 'Merci!',
            'total-point-left' => 'Il vous reste :total_reward_points points',
            'used-points' => 'Vous avez utilisé :used_reward_points points',
        ],
    ],
];
