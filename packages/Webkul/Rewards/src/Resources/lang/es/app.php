<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Configuración de Canjes',
                    'reward-point-on-attribute' => 'Punto de Recompensa en Atributo',
                    'reward-point-on-cart' => 'Punto de Recompensa en Carrito',
                    'reward-point-on-category-for-specific-time' => 'Punto de Recompensa en Categoría por Tiempo Específico',
                    'reward-point-on-category' => 'Punto de Recompensa en Categoría',
                    'reward-point-on-product-for-specific-time' => 'Punto de Recompensa en Producto por Tiempo Específico',
                    'reward-point-on-product' => 'Punto de Recompensa en Producto',
                    'reward-point' => 'Punto de Recompensa',
                    'reward-system-details' => 'Detalles del Sistema de Recompensas',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Un programa de fidelización que realiza un seguimiento de la actividad del cliente y los recompensa con puntos para futuros descuentos o beneficios.',
                    'setting' => 'configuración',
                    'title' => 'Punto de Recompensa',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name eliminado con éxito.',
                            'email-notification' => 'Notificaciones por Correo Electrónico',
                            'reward-used-at-one-time' => 'Puntos de Recompensa Usados en Una Vez',
                            'reward-when-customer-dob-exp-days' => 'Después de cuántos días expiran los Puntos de Recompensa por Fecha de Nacimiento del Cliente',
                            'reward-when-customer-dob' => 'Recompensa por Fecha de Nacimiento del Cliente',
                            'reward-when-customer-register-exp-days' => 'Después de cuántos días expiran los Puntos de Recompensa al Registrarse el Cliente',
                            'reward-when-customer-register' => 'Recompensa al Registrarse el Cliente',
                            'reward-when-product-reviewed-exp-days' => 'Después de cuántos días expiran los Puntos de Recompensa al Reseñar Producto',
                            'reward-when-product-reviewed' => 'Recompensa al Reseñar Producto',
                            'status' => 'Estado del Módulo',
                            'update-success' => ':name actualizado con éxito.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Crear Recompensa de Producto',
                    'create-success' => 'Recompensa de Producto creada exitosamente',
                    'delete-failed' => '¡No se pudo eliminar la Recompensa de Producto!',
                    'delete-success' => 'Recompensa de Producto eliminada exitosamente',
                    'error-product' => 'No se ha seleccionado ningún Producto',
                    'title' => 'Puntos de Recompensa en Producto',
                    'update-success' => 'Recompensa de Producto actualizada exitosamente',

                    'datagrid' => [
                        'delete' => 'Eliminar',
                        'edit' => 'Editar',
                        'end-date' => 'Fecha de Fin',
                        'id' => 'ID',
                        'mass-delete-success' => 'Recompensa de Producto eliminada exitosamente',
                        'mass-update-success' => 'Recompensa de Producto actualizada exitosamente',
                        'name' => 'Nombre',
                        'reward-points' => 'Puntos de Recompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Fecha de Inicio',
                        'status' => 'Estado',
                        'update-status' => 'Actualizar',

                        'options' => [
                            'active' => 'Activo',
                            'inactive' => 'Inactivo',
                        ],
                    ],

                    'create' => [
                        'active' => 'Activo',
                        'create-btn' => 'Crear Recompensa Específica de Producto',
                        'end-date' => 'Fecha de Fin',
                        'enter-reward-points' => 'Ingresar Puntos de Recompensa',
                        'inactive' => 'Inactivo',
                        'save-btn' => 'Guardar Recompensa de Producto',
                        'select-product' => 'Seleccionar Producto',
                        'select-status' => 'Seleccionar Estado',
                        'start-date' => 'Fecha de Inicio',
                        'status' => 'Estado',
                        'title' => 'Puntos de Recompensa en Producto',
                    ],

                    'edit' => [
                        'active' => 'Activo',
                        'create-btn' => 'Crear Recompensa Específica de Producto',
                        'end-date' => 'Fecha de Fin',
                        'enter-reward-points' => 'Ingresar Puntos de Recompensa',
                        'inactive' => 'Inactivo',
                        'save-btn' => 'Actualizar Recompensa de Producto',
                        'select-product' => 'Seleccionar Producto',
                        'select-status' => 'Seleccionar Estado',
                        'start-date' => 'Fecha de Inicio',
                        'status' => 'Estado',
                        'title' => 'Puntos de Recompensa en Producto',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Crear Recompensa de Producto',
                    'title' => 'Puntos de Recompensa en Producto para Tiempo Específico',

                    'create' => [
                        'create-btn' => 'Crear Recompensa Específica de Tiempo',
                        'save-btn' => 'Guardar Recompensa Específica de Tiempo',
                        'title' => 'Agregar Recompensa Específica de Tiempo',
                    ],

                    'edit' => [
                        'save-btn' => 'Actualizar Recompensa Específica de Tiempo',
                        'title' => 'Editar Recompensa Específica de Tiempo',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Crear Recompensa de Categoría',
                    'category-specific-time' => 'Categoría para Tiempo Específico',
                    'create-success' => 'Recompensa de Categoría creada exitosamente',
                    'delete-failed' => '¡No se pudo eliminar la Recompensa de Categoría!',
                    'delete-success' => 'Recompensa de Categoría eliminada exitosamente',
                    'error-category' => 'No se ha seleccionado ninguna Categoría',
                    'specific-title' => 'Crear Recompensa Específica de Categoría',
                    'title' => 'Puntos de Recompensa en Categoría',
                    'update-success' => 'Recompensa de Categoría actualizada exitosamente',

                    'datagrid' => [
                        'delete' => 'Eliminar',
                        'edit' => 'Editar',
                        'end-date' => 'Fecha de Fin',
                        'id' => 'ID',
                        'mass-delete-success' => 'Recompensa de Categoría eliminada exitosamente',
                        'mass-update-success' => 'Recompensa de Categoría actualizada exitosamente',
                        'name' => 'Nombre',
                        'reward-points' => 'Puntos de Recompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Fecha de Inicio',
                        'status' => 'Estado',
                        'update-status' => 'Actualizar',

                        'options' => [
                            'active' => 'Activo',
                            'inactive' => 'Inactivo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Activo',
                    'add-btn' => 'Crear Recompensa de Categoría',
                    'end-date' => 'Fecha de Fin',
                    'enter-reward-points' => 'Ingresar Puntos de Recompensa',
                    'inactive' => 'Inactivo',
                    'save-btn' => 'Guardar Recompensa de Categoría',
                    'select-category' => 'Seleccionar Categoría',
                    'select-status' => 'Seleccionar Estado',
                    'start-date' => 'Fecha de Inicio',
                    'status' => 'Estado',
                    'title' => 'Agregar Puntos de Recompensa en Categoría',
                ],

                'edit' => [
                    'active' => 'Activo',
                    'add-btn' => 'Crear Recompensa de Categoría',
                    'end-date' => 'Fecha de Fin',
                    'enter-reward-points' => 'Ingresar Puntos de Recompensa',
                    'inactive' => 'Inactivo',
                    'save-btn' => 'Actualizar Recompensa de Categoría',
                    'select-category' => 'Seleccionar Categoría',
                    'select-status' => 'Seleccionar Estado',
                    'start-date' => 'Fecha de Inicio',
                    'status' => 'Estado',
                    'title' => 'Editar Puntos de Recompensa en Categoría',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Crear Recompensa de Categoría para Tiempo Específico',
                    'category-specific-time' => 'Categoría para Tiempo Específico',
                    'title' => 'Puntos de Recompensa en Categoría para Tiempo Específico',
                ],

                'create' => [
                    'save-btn' => 'Guardar Recompensa de Categoría para Tiempo Específico',
                    'title' => 'Agregar Recompensa de Categoría para Tiempo Específico',
                ],

                'edit' => [
                    'save-btn' => 'Actualizar Recompensa de Categoría para Tiempo Específico',
                    'title' => 'Editar Recompensa de Categoría para Tiempo Específico',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Agregar Puntos de Recompensa al Carrito',
                    'create-success' => 'Recompensa del carrito creada con éxito',
                    'delete-failed' => '¡No se pudo eliminar la recompensa del carrito!',
                    'delete-success' => 'Recompensa del carrito eliminada con éxito',
                    'error-cart' => 'No hay carrito seleccionado',
                    'title' => 'Puntos de Recompensa en el Carrito',
                    'update-success' => 'Recompensa del carrito actualizada con éxito',

                    'datagrid' => [
                        'amount-from' => 'Cantidad Desde',
                        'amount-to' => 'Cantidad Hasta',
                        'delete' => 'Eliminar',
                        'edit' => 'Editar',
                        'end-date' => 'Fecha de Fin',
                        'id' => 'ID',
                        'mass-delete-success' => 'Recompensas del carrito eliminadas con éxito',
                        'mass-update-success' => 'Recompensas del carrito actualizadas con éxito',
                        'name' => 'Nombre',
                        'reward-points' => 'Puntos de Recompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Fecha de Inicio',
                        'status' => 'Estado',
                        'update-status' => 'Actualizar',

                        'options' => [
                            'active' => 'Activo',
                            'inactive' => 'Inactivo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Activo',
                    'add-btn' => 'Agregar Puntos de Recompensa al Carrito',
                    'amount-from' => 'Cantidad Desde',
                    'amount-to' => 'Cantidad Hasta',
                    'end-date' => 'Fecha de Fin',
                    'enter-reward-points' => 'Ingresar Puntos de Recompensa',
                    'inactive' => 'Inactivo',
                    'save-btn' => 'Guardar Recompensa del Carrito',
                    'select-status' => 'Seleccionar Estado',
                    'start-date' => 'Fecha de Inicio',
                    'status' => 'Estado',
                    'title' => 'Agregar Puntos de Recompensa al Carrito',
                ],

                'edit' => [
                    'active' => 'Activo',
                    'add-btn' => 'Agregar Puntos de Recompensa al Carrito',
                    'amount-from' => 'Cantidad Desde',
                    'amount-to' => 'Cantidad Hasta',
                    'end-date' => 'Fecha de Fin',
                    'enter-reward-points' => 'Ingresar Puntos de Recompensa',
                    'inactive' => 'Inactivo',
                    'save-btn' => 'Actualizar Recompensa del Carrito',
                    'select-status' => 'Seleccionar Estado',
                    'start-date' => 'Fecha de Inicio',
                    'status' => 'Estado',
                    'title' => 'Editar Puntos de Recompensa en el Carrito',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Agregar puntos de recompensa al atributo',
                    'create-success' => 'Atributo de recompensa creado con éxito',
                    'delete-failed' => '¡No se pudo eliminar el atributo!',
                    'delete-success' => 'Atributo eliminado con éxito',
                    'error-cart' => 'No se ha seleccionado ningún atributo',
                    'title' => 'Puntos de recompensa para atributos',
                    'update-success' => 'Atributo de recompensa actualizado con éxito',

                    'datagrid' => [
                        'code' => 'Código',
                        'delete' => 'Eliminar',
                        'edit' => 'Editar',
                        'id' => 'ID',
                        'mass-delete-success' => 'Atributo eliminado con éxito',
                        'mass-update-success' => 'Atributo actualizado con éxito',
                        'name' => 'Nombre',
                        'reward-points' => 'Puntos de recompensa',
                        'sku' => 'Código SKU',
                        'status' => 'Estado',
                        'update-status' => 'Actualizar',

                        'options' => [
                            'active' => 'Activo',
                            'inactive' => 'Inactivo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Activo',
                    'enter-reward-points' => 'Ingrese puntos de recompensa',
                    'inactive' => 'Inactivo',
                    'reward_points' => 'Puntos del atributo',
                    'save-btn' => 'Guardar puntos de recompensa en el atributo',
                    'select-attributes' => 'Seleccione el atributo',
                    'select-status' => 'Seleccione el estado',
                    'status' => 'Estado',
                    'title' => 'Puntos de recompensa para atributos',
                ],

                'edit' => [
                    'active' => 'Activo',
                    'edit-btn' => 'Editar puntos de recompensa del atributo',
                    'enter-reward-points' => 'Ingrese puntos de recompensa',
                    'inactive' => 'Inactivo',
                    'reward_points' => 'Puntos del atributo',
                    'select-attributes' => 'Seleccione el atributo',
                    'select-status' => 'Seleccione el estado',
                    'status' => 'Estado',
                    'title' => 'Puntos de recompensa para atributos',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Detalles del sistema de recompensas',

                    'datagrid' => [
                        'active' => 'Activo',
                        'id' => 'ID',
                        'inactive' => 'Inactivo',
                        'name' => 'Nombre',
                        'reward-points' => 'Puntos de recompensa',
                        'status' => 'Estado',
                        'used-rewards-points' => 'Puntos de recompensa usados',
                        'view' => 'Ver',
                    ],
                ],

                'view' => [
                    'title' => 'Detalles del sistema de recompensas',

                    'datagrid' => [
                        'approved' => 'Aprobado',
                        'attribute-id' => 'ID del atributo',
                        'canceled' => 'Cancelado',
                        'category-id' => 'ID de categoría',
                        'closed' => 'Cerrado',
                        'created-at' => 'Fecha de creación',
                        'exp-date' => 'Fecha de expiración',
                        'expire' => 'Expirado',
                        'fraud' => 'Fraude',
                        'id' => 'ID',
                        'name' => 'Nombre',
                        'note' => 'Nota',
                        'order-id' => 'ID del pedido',
                        'pending' => 'Pendiente',
                        'processing' => 'En proceso',
                        'product-id' => 'ID del producto',
                        'reward-points' => 'Puntos de recompensa',
                        'status' => 'Estado',
                        'total-reward-points' => 'Puntos de recompensa totales',
                        'used' => 'Usado',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Tasa de conversión del total del carrito',
                    'conversion' => 'Tasa de conversión',
                    'enable-apply-points-label' => 'Permitir a los clientes aplicar puntos durante el pago',
                    'enable-apply-points' => 'Habilitar aplicación de puntos durante el pago',
                    'points' => 'Puntos',
                    'redemption-cart-label' => 'Permitir a los clientes aplicar puntos durante la compra',
                    'redemption-cart' => 'Redención sobre el total del carrito',
                    'save-btn' => 'Guardar',
                    'title' => 'Detalles del sistema de recompensas',
                    'update-success' => 'Configuraciones de redención actualizadas con éxito',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Puntos de recompensa',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Tus puntos de recompensa',

                        'datagrid' => [
                            'approved' => 'Aprobado',
                            'attribute-id' => 'ID de atributo',
                            'canceled' => 'Cancelado',
                            'category-id' => 'ID de categoría',
                            'closed' => 'Cerrado',
                            'created-at' => 'Fecha de transacción',
                            'exp-date' => 'Fecha de vencimiento',
                            'expire' => 'Vencer',
                            'fraud' => 'Fraude',
                            'id' => 'ID',
                            'name' => 'Nombre',
                            'note' => 'Nota',
                            'order-id' => 'ID de pedido',
                            'pending' => 'Pendiente',
                            'processing' => 'En proceso',
                            'product-id' => 'ID de producto',
                            'reward-points' => 'Puntos de recompensa',
                            'status' => 'Estado',
                            'total-reward-points' => 'Puntos de recompensa totales',
                            'used' => 'Usado',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Compra este producto y obtén :reward puntos. Oferta válida hasta :end_date',
            'product-reward' => 'Compra este producto y obtén :reward puntos',

            'review' => [
                'review-points' => 'Haz una reseña y obtén :points puntos',
            ],
        ],

        'register' => [
            'register-reward' => 'Regístrate como miembro de nuestra familia y obtén :points puntos',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Puntos de recompensa',
                    'reward-points-earned' => 'Puntos de recompensa ganados',

                    'summary' => [
                        'reward_points' => 'Puntos de recompensa totales',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Aplicar puntos',
                    'button-title' => 'Aplicar',
                    'enter-points' => 'Ingresar puntos',
                    'reward-points' => 'Aplicar puntos de recompensa',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Aplicar Puntos',
            'enter-points' => 'Ingresar Puntos',
            'points-used' => 'Puntos Usados',
            'redemption-setting' => 'Información: :points punto(s) es igual a :conversion_rate',
            'total-point' => 'Tu Total de Puntos: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'No se pueden aplicar puntos',
            'grandtotal' => 'Total',
            'invalid-points' => 'El campo de puntos es obligatorio',
            'only-number' => 'El campo de puntos debe ser 1 o más',
            'points-applied' => 'Puntos Aplicados',
            'points-apply-issue' => 'No se puede aplicar el código de puntos.',
            'points' => 'Puntos',
            'redem-points' => 'Canjear Puntos (-)',
            'remove-points' => 'Eliminar Puntos',
            'success-points' => 'Código de puntos aplicado con éxito.',
            'total-reward-points-awarded' => 'Total de Puntos de Recompensa Otorgados',
            'unauthorized-use-points' => 'No puede usar puntos de recompensa en este momento, contacte al administrador.',
            'use-can-use-only' => 'Solo puede usar ',
            'warning-required-less-point' => 'El canje de puntos de recompensa debe ser menor que el precio del producto.',
            'you-have-only' => 'Solo tienes ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Bienvenido y gracias por registrarte con nosotros!',
            'points-rewarded' => 'Has ganado :points puntos por registrarte',
            'subject' => 'Nuevo registro de cliente',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'review' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Gracias por revisar el :product_name!',
            'points-rewarded' => 'Has ganado :points puntos por la revisión',
            'subject' => 'Revisión del cliente',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'dob' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Feliz cumpleaños!',
            'points-rewarded' => 'Has ganado :points puntos por tu cumpleaños',
            'subject' => 'Fecha de nacimiento del cliente',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'pending' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Gracias por ordenar productos en nuestro sitio web!',
            'points-rewarded' => 'Después de que se apruebe el Pedido No. #:order_id, podrás usar :points puntos',
            'status' => 'pendiente',
            'subject' => 'Pedido del cliente',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'used' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Gracias por usar puntos de recompensa para comprar productos en nuestro sitio web!',
            'points-rewarded' => 'Has utilizado :points puntos para el Pedido No. #:order_id',
            'status' => 'Usado',
            'subject' => 'Uso de puntos de recompensa por el cliente',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'approved' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Tus puntos de recompensa han sido aprobados!',
            'points-rewarded' => 'Has ganado :points puntos por el Pedido No. #:order_id',
            'status' => 'aprobado',
            'subject' => 'Puntos de recompensa aprobados',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'processing' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => 'Estado cambiado el :date a Procesamiento!',
            'points-rewarded' => 'Estado cambiado para el Pedido No. #:order_id',
            'status' => 'aprobado',
            'subject' => 'Procesamiento de puntos de recompensa',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'expire' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => 'Estado cambiado el :date a Caducado!',
            'points-rewarded' => 'Estado cambiado para el Pedido No. #:order_id',
            'status' => 'caducado',
            'subject' => 'Puntos de recompensa caducados',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'closed' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => 'Estado cambiado el :date a Cerrado!',
            'points-rewarded' => 'Estado cambiado a Cerrado para el Pedido No. #:order_id',
            'status' => 'cerrado',
            'subject' => 'Puntos de recompensa cerrados',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'cancel' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => 'Tus puntos de recompensa han sido cancelados el :date!',
            'points-rewarded' => 'Has cancelado :points puntos para el Pedido No. #:order_id',
            'status' => 'cancelado',
            'subject' => 'Puntos de recompensa cancelados',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],

        'fraud' => [
            'dear' => 'Estimado :customer_name',
            'greeting' => '¡Estado cambiado a Fraude!',
            'points-rewarded' => 'Has cancelado :points puntos para el Pedido No. #:order_id en :date',
            'status' => 'fraude',
            'subject' => 'Fraude en puntos de recompensa',
            'thanks' => '¡Gracias!',
            'total-point-left' => 'Te quedan :total_reward_points puntos',
            'used-points' => 'Has utilizado :used_reward_points puntos',
        ],
    ],
];
