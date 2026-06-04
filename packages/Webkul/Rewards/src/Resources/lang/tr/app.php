<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'İade Ayarları',
                    'reward-point-on-attribute' => 'Özellik Üzerinden Ödül Puanı',
                    'reward-point-on-cart' => 'Sepet Üzerinden Ödül Puanı',
                    'reward-point-on-category-for-specific-time' => 'Belirli Bir Süre İçin Kategori Üzerinden Ödül Puanı',
                    'reward-point-on-category' => 'Kategori Üzerinden Ödül Puanı',
                    'reward-point-on-product-for-specific-time' => 'Belirli Bir Süre İçin Ürün Üzerinden Ödül Puanı',
                    'reward-point-on-product' => 'Ürün Üzerinden Ödül Puanı',
                    'reward-point' => 'Ödül Puanı',
                    'reward-system-details' => 'Ödül Sistemi Detayları',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Müşteri etkinliklerini takip eden ve gelecekteki indirimler veya faydalar için puanlarla ödüllendiren bir sadakat programı.',
                    'setting' => 'Ayar',
                    'title' => 'Ödül Puanı',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name başarıyla silindi.',
                            'email-notification' => 'E-posta Bildirimleri',
                            'reward-used-at-one-time' => 'Bir Kez Kullanılan Ödül Puanı',
                            'reward-when-customer-dob-exp-days' => 'Müşteri Doğum Tarihinden Kaç Gün Sonra Ödül Puanı Sona Eriyor',
                            'reward-when-customer-dob' => 'Müşteri Doğum Tarihi İçin Ödül',
                            'reward-when-customer-register-exp-days' => 'Müşteri Kaydından Kaç Gün Sonra Ödül Puanı Sona Eriyor',
                            'reward-when-customer-register' => 'Müşteri Kaydolduğunda Ödül',
                            'reward-when-product-reviewed-exp-days' => 'Ürün İnceleme Sonrası Kaç Gün İçinde Ödül Puanı Sona Eriyor',
                            'reward-when-product-reviewed' => 'Ürün İncelendiğinde Ödül',
                            'status' => 'Modül Durumu',
                            'update-success' => ':name başarıyla güncellendi.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Ürün Ödülü Oluştur',
                    'create-success' => 'Ürün Ödülü başarıyla oluşturuldu',
                    'delete-failed' => 'Ürün Ödülü silinemedi!',
                    'delete-success' => 'Ürün Ödülü başarıyla silindi',
                    'error-product' => 'Ürün Seçilmedi',
                    'title' => 'Ürün Üzerindeki Ödül Puanı',
                    'update-success' => 'Ürün Ödülü başarıyla güncellendi',

                    'datagrid' => [
                        'delete' => 'Sil',
                        'edit' => 'Düzenle',
                        'end-date' => 'Bitiş Tarihi',
                        'id' => 'Id',
                        'mass-delete-success' => 'Ürün Ödülü başarıyla silindi',
                        'mass-update-success' => 'Ürün Ödülü başarıyla güncellendi',
                        'name' => 'Ad',
                        'reward-points' => 'Ödül Puanları',
                        'sku' => 'SKU',
                        'start-date' => 'Başlangıç Tarihi',
                        'status' => 'Durum',
                        'update-status' => 'Güncelle',

                        'options' => [
                            'active' => 'Aktif',
                            'inactive' => 'Pasif',
                        ],
                    ],

                    'create' => [
                        'active' => 'Aktif',
                        'create-btn' => 'Ürün Özel Ödülü Oluştur',
                        'end-date' => 'Bitiş Tarihi',
                        'enter-reward-points' => 'Ödül Puanlarını Girin',
                        'inactive' => 'Pasif',
                        'save-btn' => 'Ürün Ödülünü Kaydet',
                        'select-product' => 'Ürün Seçin',
                        'select-status' => 'Durumu Seçin',
                        'start-date' => 'Başlangıç Tarihi',
                        'status' => 'Durum',
                        'title' => 'Ürün Üzerindeki Ödül Puanı',
                    ],

                    'edit' => [
                        'active' => 'Aktif',
                        'create-btn' => 'Ürün Özel Ödülü Oluştur',
                        'end-date' => 'Bitiş Tarihi',
                        'enter-reward-points' => 'Ödül Puanlarını Girin',
                        'inactive' => 'Pasif',
                        'save-btn' => 'Ürün Ödülünü Güncelle',
                        'select-product' => 'Ürün Seçin',
                        'select-status' => 'Durumu Seçin',
                        'start-date' => 'Başlangıç Tarihi',
                        'status' => 'Durum',
                        'title' => 'Ürün Üzerindeki Ödül Puanı',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Ürün Ödülü Oluştur',
                    'title' => 'Belirli Zaman İçin Ürün Üzerindeki Ödül Puanı',

                    'create' => [
                        'create-btn' => 'Ödül Zamanı Belirli Ödül Oluştur',
                        'save-btn' => 'Ürün Zamanı Belirli Ödülünü Kaydet',
                        'title' => 'Ödül Zamanı Belirli Ödül Ekleyin',
                    ],

                    'edit' => [
                        'save-btn' => 'Ürün Zamanı Belirli Ödülünü Güncelle',
                        'title' => 'Ürün Zamanı Belirli Ödülünü Düzenle',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Kategori Ödülü Oluştur',
                    'category-specific-time' => 'Kategoriye Özel Zaman',
                    'create-success' => 'Kategori Ödülü başarıyla oluşturuldu',
                    'delete-failed' => 'Kategori Ödülü silinemedi!',
                    'delete-success' => 'Kategori Ödülü başarıyla silindi',
                    'error-category' => 'Kategori Seçilmedi',
                    'specific-title' => 'Kategoriye Özel Ödül Oluştur',
                    'title' => 'Kategori Üzerindeki Ödül Puanı',
                    'update-success' => 'Kategori Ödülü başarıyla güncellendi',

                    'datagrid' => [
                        'delete' => 'Sil',
                        'edit' => 'Düzenle',
                        'end-date' => 'Bitiş Tarihi',
                        'id' => 'Id',
                        'mass-delete-success' => 'Kategori Ödülü başarıyla silindi',
                        'mass-update-success' => 'Kategori Ödülü başarıyla güncellendi',
                        'name' => 'Ad',
                        'reward-points' => 'Ödül Puanları',
                        'sku' => 'SKU',
                        'start-date' => 'Başlangıç Tarihi',
                        'status' => 'Durum',
                        'update-status' => 'Güncelle',

                        'options' => [
                            'active' => 'Aktif',
                            'inactive' => 'Pasif',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktif',
                    'add-btn' => 'Kategori Ödülü Oluştur',
                    'end-date' => 'Bitiş Tarihi',
                    'enter-reward-points' => 'Ödül Puanlarını Girin',
                    'inactive' => 'Pasif',
                    'save-btn' => 'Kategori Ödülünü Kaydet',
                    'select-category' => 'Kategori Seçin',
                    'select-status' => 'Durumu Seçin',
                    'start-date' => 'Başlangıç Tarihi',
                    'status' => 'Durum',
                    'title' => 'Kategori Üzerindeki Ödül Puanını Ekleyin',
                ],

                'edit' => [
                    'active' => 'Aktif',
                    'add-btn' => 'Kategori Ödülü Oluştur',
                    'end-date' => 'Bitiş Tarihi',
                    'enter-reward-points' => 'Ödül Puanlarını Girin',
                    'inactive' => 'Pasif',
                    'save-btn' => 'Kategori Ödülünü Güncelle',
                    'select-category' => 'Kategori Seçin',
                    'select-status' => 'Durumu Seçin',
                    'start-date' => 'Başlangıç Tarihi',
                    'status' => 'Durum',
                    'title' => 'Kategori Üzerindeki Ödül Puanını Düzenle',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Kategori Zamanı Belirli Ödül Oluştur',
                    'category-specific-time' => 'Kategoriye Özel Zaman',
                    'title' => 'Belirli Zaman İçin Kategori Üzerindeki Ödül Puanı',
                ],

                'create' => [
                    'save-btn' => 'Kategori Ödülünü Zamanı Belirli Olarak Kaydet',
                    'title' => 'Belirli Zaman İçin Kategori Üzerindeki Ödül Puanını Ekleyin',
                ],

                'edit' => [
                    'save-btn' => 'Kategori Ödülünü Zamanı Belirli Olarak Güncelle',
                    'title' => 'Belirli Zaman İçin Kategori Üzerindeki Ödül Puanını Düzenle',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Sepete Ödül Puanı Ekle',
                    'create-success' => 'Sepet ödülü başarıyla oluşturuldu',
                    'delete-failed' => 'Sepet ödülü silinemedi!',
                    'delete-success' => 'Sepet ödülü başarıyla silindi',
                    'error-cart' => 'Seçili sepet yok',
                    'title' => 'Sepette Ödül Puanları',
                    'update-success' => 'Sepet ödülü başarıyla güncellendi',

                    'datagrid' => [
                        'amount-from' => 'Tutar Başlangıç',
                        'amount-to' => 'Tutar Bitiş',
                        'delete' => 'Sil',
                        'edit' => 'Düzenle',
                        'end-date' => 'Bitiş Tarihi',
                        'id' => 'ID',
                        'mass-delete-success' => 'Sepet ödülü başarıyla silindi',
                        'mass-update-success' => 'Sepet ödülü başarıyla güncellendi',
                        'name' => 'Ad',
                        'reward-points' => 'Ödül Puanları',
                        'sku' => 'SKU',
                        'start-date' => 'Başlangıç Tarihi',
                        'status' => 'Durum',
                        'update-status' => 'Güncelle',

                        'options' => [
                            'active' => 'Aktif',
                            'inactive' => 'Pasif',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktif',
                    'add-btn' => 'Sepete Ödül Puanı Ekle',
                    'amount-from' => 'Tutar Başlangıç',
                    'amount-to' => 'Tutar Bitiş',
                    'end-date' => 'Bitiş Tarihi',
                    'enter-reward-points' => 'Ödül Puanlarını Girin',
                    'inactive' => 'Pasif',
                    'save-btn' => 'Sepet Ödülünü Kaydet',
                    'select-status' => 'Durum Seç',
                    'start-date' => 'Başlangıç Tarihi',
                    'status' => 'Durum',
                    'title' => 'Sepete Ödül Puanı Ekle',
                ],

                'edit' => [
                    'active' => 'Aktif',
                    'add-btn' => 'Sepete Ödül Puanı Ekle',
                    'amount-from' => 'Tutar Başlangıç',
                    'amount-to' => 'Tutar Bitiş',
                    'end-date' => 'Bitiş Tarihi',
                    'enter-reward-points' => 'Ödül Puanlarını Girin',
                    'inactive' => 'Pasif',
                    'save-btn' => 'Sepet Ödülünü Güncelle',
                    'select-status' => 'Durum Seç',
                    'start-date' => 'Başlangıç Tarihi',
                    'status' => 'Durum',
                    'title' => 'Sepette Ödül Puanını Düzenle',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Özniteliğe ödül puanı ekle',
                    'create-success' => 'Ödül özniteliği başarıyla oluşturuldu',
                    'delete-failed' => 'Öznitelik silinemedi!',
                    'delete-success' => 'Öznitelik başarıyla silindi',
                    'error-cart' => 'Hiçbir öznitelik seçilmedi',
                    'title' => 'Öznitelikler için ödül puanları',
                    'update-success' => 'Ödül özniteliği başarıyla güncellendi',

                    'datagrid' => [
                        'code' => 'Kod',
                        'delete' => 'Sil',
                        'edit' => 'Düzenle',
                        'id' => 'ID',
                        'mass-delete-success' => 'Öznitelik başarıyla silindi',
                        'mass-update-success' => 'Öznitelik başarıyla güncellendi',
                        'name' => 'Ad',
                        'reward-points' => 'Ödül Puanları',
                        'sku' => 'SKU Kodu',
                        'status' => 'Durum',
                        'update-status' => 'Güncelle',

                        'options' => [
                            'active' => 'Aktif',
                            'inactive' => 'Pasif',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Aktif',
                    'enter-reward-points' => 'Ödül puanlarını girin',
                    'inactive' => 'Pasif',
                    'reward_points' => 'Öznitelik Puanları',
                    'save-btn' => 'Ödül puanlarını özniteliğe kaydet',
                    'select-attributes' => 'Öznitelik seçin',
                    'select-status' => 'Durum seçin',
                    'status' => 'Durum',
                    'title' => 'Öznitelikler için ödül puanları',
                ],

                'edit' => [
                    'active' => 'Aktif',
                    'edit-btn' => 'Ödül puanlarını düzenle',
                    'enter-reward-points' => 'Ödül puanlarını girin',
                    'inactive' => 'Pasif',
                    'reward_points' => 'Öznitelik Puanları',
                    'select-attributes' => 'Öznitelik seçin',
                    'select-status' => 'Durum seçin',
                    'status' => 'Durum',
                    'title' => 'Öznitelikler için ödül puanları',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Ödül Sistemi Detayları',

                    'datagrid' => [
                        'active' => 'Aktif',
                        'id' => 'ID',
                        'inactive' => 'Pasif',
                        'name' => 'Ad',
                        'reward-points' => 'Ödül Puanları',
                        'status' => 'Durum',
                        'used-rewards-points' => 'Kullanılmış Ödül Puanları',
                        'view' => 'Görünüm',
                    ],
                ],

                'view' => [
                    'title' => 'Ödül Sistemi Detayları',

                    'datagrid' => [
                        'approved' => 'Onaylı',
                        'attribute-id' => 'Öznitelik ID',
                        'canceled' => 'İptal Edildi',
                        'category-id' => 'Kategori ID',
                        'closed' => 'Kapalı',
                        'created-at' => 'Oluşturulma Tarihi',
                        'exp-date' => 'Son Kullanma Tarihi',
                        'expire' => 'Süresi Dolmuş',
                        'fraud' => 'Dolandırıcılık',
                        'id' => 'ID',
                        'name' => 'Ad',
                        'note' => 'Not',
                        'order-id' => 'Sipariş ID',
                        'pending' => 'Beklemede',
                        'processing' => 'İşleniyor',
                        'product-id' => 'Ürün ID',
                        'reward-points' => 'Ödül Puanları',
                        'status' => 'Durum',
                        'total-reward-points' => 'Toplam Ödül Puanları',
                        'used' => 'Kullanıldı',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Sepetteki Toplamı İçin Dönüşüm Oranı',
                    'conversion' => 'Dönüşüm Oranı',
                    'enable-apply-points-label' => 'Müşterilerin ödeme sırasında puan kullanmalarına izin ver',
                    'enable-apply-points' => 'Ödemede puan kullanımını etkinleştir',
                    'points' => 'Puanlar',
                    'redemption-cart-label' => 'Müşterilerin alışverişte puan kullanmalarına izin ver',
                    'redemption-cart' => 'Sepetteki Toplam İçin Dönüşüm',
                    'save-btn' => 'Kaydet',
                    'title' => 'Ödül Sistemi Detayları',
                    'update-success' => 'Kurtarma ayarları başarıyla güncellendi',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Ödül Puanları',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Ödül Puanlarınız',

                        'datagrid' => [
                            'approved' => 'Onaylandı',
                            'attribute-id' => 'Özellik ID',
                            'canceled' => 'İptal Edildi',
                            'category-id' => 'Kategori ID',
                            'closed' => 'Kapalı',
                            'created-at' => 'İşlem Tarihi',
                            'exp-date' => 'Son Kullanma Tarihi',
                            'expire' => 'Süresi Dolmuş',
                            'fraud' => 'Dolandırıcılık',
                            'id' => 'ID',
                            'name' => 'Ad',
                            'note' => 'Not',
                            'order-id' => 'Sipariş ID',
                            'pending' => 'Beklemede',
                            'processing' => 'İşleniyor',
                            'product-id' => 'Ürün ID',
                            'reward-points' => 'Ödül Puanları',
                            'status' => 'Durum',
                            'total-reward-points' => 'Toplam Ödül Puanları',
                            'used' => 'Kullanıldı',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Bu ürünü satın alın ve :reward puan kazanın. Teklif :end_date tarihine kadar geçerlidir',
            'product-reward' => 'Bu ürünü satın alın ve :reward puan kazanın',

            'review' => [
                'review-points' => 'Bir inceleme yazın ve :points puan kazanın',
            ],
        ],

        'register' => [
            'register-reward' => 'Ailemizin bir üyesi olarak kayıt olun ve :points puan kazanın',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Ödül Puanları',
                    'reward-points-earned' => 'Kazanan Ödül Puanları',

                    'summary' => [
                        'reward_points' => 'Toplam Ödül Puanları',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Puanları Uygula',
                    'button-title' => 'Uygula',
                    'enter-points' => 'Puanları Girin',
                    'reward-points' => 'Ödül Puanlarını Uygula',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Puanları Uygula',
            'enter-points' => 'Puanları Gir',
            'points-used' => 'Kullanılan Puanlar',
            'redemption-setting' => 'Bilgi: :points puan(lar) :conversion_rate eşdeğerdir',
            'total-point' => 'Toplam Puanlarınız: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Puanlar uygulanamaz',
            'grandtotal' => 'Toplam',
            'invalid-points' => 'Puanlar alanı gereklidir',
            'only-number' => 'Puanlar alanı 1 veya daha fazla olmalıdır',
            'points-applied' => 'Uygulanan Puanlar',
            'points-apply-issue' => 'Puan kodu uygulanamıyor.',
            'points' => 'Puanlar',
            'redem-points' => 'Puanları Kullan (-)',
            'remove-points' => 'Puanları Kaldır',
            'success-points' => 'Puan kodu başarıyla uygulandı.',
            'total-reward-points-awarded' => 'Toplam Ödül Puanları',
            'unauthorized-use-points' => 'Bu anda ödül puanlarını kullanamazsınız, lütfen yöneticiyle iletişime geçin.',
            'use-can-use-only' => 'Sadece kullanabilirsiniz ',
            'warning-required-less-point' => 'Ödül puanlarının kullanımı ürünün fiyatından daha az olmalıdır.',
            'you-have-only' => 'Sadece ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => 'Aramıza katıldığınız için teşekkür ederiz!',
            'points-rewarded' => 'Kaydolma için :points puan kazandınız',
            'subject' => 'Yeni Müşteri Kaydı',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'review' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => ':product_name için yorum yaptığınız için teşekkür ederiz!',
            'points-rewarded' => 'Yorumunuz için :points puan kazandınız',
            'subject' => 'Müşteri Yorumları',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'dob' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => 'Doğum gününüz kutlu olsun!',
            'points-rewarded' => 'Doğum gününüz için :points puan kazandınız',
            'subject' => 'Müşteri Doğum Günü',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'pending' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => 'Web sitemizden ürün siparişiniz için teşekkür ederiz!',
            'points-rewarded' => 'Sipariş No. #:order_id onaylandığında :points puan kullanabilirsiniz',
            'status' => 'Beklemede',
            'subject' => 'Müşteri Siparişi',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'used' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => 'Web sitemizden ürün satın almak için puanlarınızı kullandığınız için teşekkür ederiz!',
            'points-rewarded' => 'Sipariş No. #:order_id için :points puan kullandınız',
            'status' => 'Kullanıldı',
            'subject' => 'Müşteri Puan Kullanımı',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'approved' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => 'Puanlarınız onaylandı!',
            'points-rewarded' => 'Sipariş No #:order_id için :points puan kazandınız',
            'status' => 'Onaylandı',
            'subject' => 'Puan Onayı',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'processing' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => ':date tarihinde İşleme durumu değiştirildi!',
            'points-rewarded' => 'Sipariş No. #:order_id için durum değiştirildi',
            'status' => 'Onaylandı',
            'subject' => 'Puan İşleme',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'expire' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => ':date tarihinde Durum Süresi Dolmuş olarak değiştirildi!',
            'points-rewarded' => 'Sipariş No. #:order_id için durum değiştirildi',
            'status' => 'Süresi Dolmuş',
            'subject' => 'Süresi Dolmuş Puanlar',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'closed' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => ':date tarihinde Kapalı olarak değiştirildi!',
            'points-rewarded' => 'Sipariş No. #:order_id için durum Kapalı olarak değiştirildi',
            'status' => 'Kapalı',
            'subject' => 'Kapalı Puanlar',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'cancel' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => ':date tarihinde Puanlarınız İptal Edildi!',
            'points-rewarded' => 'Sipariş No. #:order_id için :points puan iptal edildi',
            'status' => 'İptal Edildi',
            'subject' => 'Puan İptali',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],

        'fraud' => [
            'dear' => 'Sevgili :customer_name',
            'greeting' => 'Durum Dolandırıcılık olarak değiştirildi!',
            'points-rewarded' => 'Sipariş No. #:order_id için :points puan :date tarihinde iptal edildi',
            'status' => 'Dolandırıcılık',
            'subject' => 'Puan Dolandırıcılığı',
            'thanks' => 'Teşekkürler!',
            'total-point-left' => 'Kalan puanınız :total_reward_points',
            'used-points' => 'Kullanılan puanlarınız :used_reward_points',
        ],
    ],
];
