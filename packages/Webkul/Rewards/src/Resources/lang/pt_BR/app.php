<?php

return [
    'admin' => [
        'components' => [
            'layouts' => [
                'sidebar' => [
                    'redemptions-settings' => 'Configurações de Resgates',
                    'reward-point-on-attribute' => 'Ponto de Recompensa por Atributo',
                    'reward-point-on-cart' => 'Ponto de Recompensa no Carrinho',
                    'reward-point-on-category-for-specific-time' => 'Ponto de Recompensa por Categoria para Tempo Específico',
                    'reward-point-on-category' => 'Ponto de Recompensa por Categoria',
                    'reward-point-on-product-for-specific-time' => 'Ponto de Recompensa por Produto para Tempo Específico',
                    'reward-point-on-product' => 'Ponto de Recompensa por Produto',
                    'reward-point' => 'Ponto de Recompensa',
                    'reward-system-details' => 'Detalhes do Sistema de Recompensas',
                ],
            ],
        ],

        'configuration' => [
            'title' => [
                'general' => [
                    'info' => 'Um programa de fidelidade que acompanha a atividade do cliente e os recompensa com pontos para descontos ou benefícios futuros.',
                    'setting' => 'Contexto',
                    'title' => 'Pontos de Recompensa',

                    'reward' => [
                        'setting' => [
                            'delete-success' => ':name excluído com sucesso.',
                            'email-notification' => 'Notificações por E-mail',
                            'reward-used-at-one-time' => 'Pontos de Recompensa Utilizados de Uma Só Vez',
                            'reward-when-customer-dob-exp-days' => 'Depois de quantos dias os Pontos de Recompensa expiram após a Data de Nascimento do Cliente',
                            'reward-when-customer-dob' => 'Recompensa pela Data de Nascimento do Cliente',
                            'reward-when-customer-register-exp-days' => 'Depois de quantos dias os Pontos de Recompensa expiram após o Registro do Cliente',
                            'reward-when-customer-register' => 'Recompensa pelo Registro do Cliente',
                            'reward-when-product-reviewed-exp-days' => 'Depois de quantos dias os Pontos de Recompensa expiram após a Avaliação do Produto',
                            'reward-when-product-reviewed' => 'Recompensa pela Avaliação do Produto',
                            'status' => 'Status do Módulo',
                            'update-success' => ':name atualizado com sucesso.',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'products' => [
                'index' => [
                    'add-btn' => 'Criar Recompensa de Produto',
                    'create-success' => 'Recompensa de Produto criada com sucesso',
                    'delete-failed' => 'Recompensa de Produto não excluída!',
                    'delete-success' => 'Recompensa de Produto excluída com sucesso',
                    'error-product' => 'Nenhum Produto Selecionado',
                    'title' => 'Pontos de Recompensa no Produto',
                    'update-success' => 'Recompensa de Produto atualizada com sucesso',

                    'datagrid' => [
                        'delete' => 'Excluir',
                        'edit' => 'Editar',
                        'end-date' => 'Data de Término',
                        'id' => 'Id',
                        'mass-delete-success' => 'Recompensa de Produto excluída com sucesso',
                        'mass-update-success' => 'Recompensa de Produto atualizada com sucesso',
                        'name' => 'Nome',
                        'reward-points' => 'Pontos de Recompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Data de Início',
                        'status' => 'Status',
                        'update-status' => 'Atualizar',

                        'options' => [
                            'active' => 'Ativo',
                            'inactive' => 'Inativo',
                        ],
                    ],

                    'create' => [
                        'active' => 'Ativo',
                        'create-btn' => 'Criar Recompensa Específica do Produto',
                        'end-date' => 'Data de Término',
                        'enter-reward-points' => 'Insira os Pontos de Recompensa',
                        'inactive' => 'Inativo',
                        'save-btn' => 'Salvar Recompensa de Produto',
                        'select-product' => 'Selecionar Produto',
                        'select-status' => 'Selecionar Status',
                        'start-date' => 'Data de Início',
                        'status' => 'Status',
                        'title' => 'Pontos de Recompensa no Produto',
                    ],

                    'edit' => [
                        'active' => 'Ativo',
                        'create-btn' => 'Criar Recompensa Específica do Produto',
                        'end-date' => 'Data de Término',
                        'enter-reward-points' => 'Insira os Pontos de Recompensa',
                        'inactive' => 'Inativo',
                        'save-btn' => 'Atualizar Recompensa de Produto',
                        'select-product' => 'Selecionar Produto',
                        'select-status' => 'Selecionar Status',
                        'start-date' => 'Data de Início',
                        'status' => 'Status',
                        'title' => 'Pontos de Recompensa no Produto',
                    ],
                ],
            ],

            'products-specific' => [
                'index' => [
                    'add-btn' => 'Criar Recompensa de Produto',
                    'title' => 'Pontos de Recompensa no Produto para Tempo Específico',

                    'create' => [
                        'create-btn' => 'Criar Recompensa de Tempo Específico',
                        'save-btn' => 'Salvar Recompensa de Produto para Tempo Específico',
                        'title' => 'Adicionar Recompensa de Tempo Específico',
                    ],

                    'edit' => [
                        'save-btn' => 'Atualizar Recompensa de Produto para Tempo Específico',
                        'title' => 'Editar Recompensa de Tempo Específico',
                    ],
                ],
            ],

            'category' => [
                'index' => [
                    'add-btn' => 'Criar Recompensa de Categoria',
                    'category-specific-time' => 'Tempo Específico da Categoria',
                    'create-success' => 'Recompensa de Categoria criada com sucesso',
                    'delete-failed' => 'Recompensa de Categoria não excluída!',
                    'delete-success' => 'Recompensa de Categoria excluída com sucesso',
                    'error-category' => 'Nenhuma Categoria Selecionada',
                    'specific-title' => 'Criar Recompensa Específica da Categoria',
                    'title' => 'Pontos de Recompensa na Categoria',
                    'update-success' => 'Recompensa de Categoria atualizada com sucesso',

                    'datagrid' => [
                        'delete' => 'Excluir',
                        'edit' => 'Editar',
                        'end-date' => 'Data de Término',
                        'id' => 'Id',
                        'mass-delete-success' => 'Recompensa de Categoria excluída com sucesso',
                        'mass-update-success' => 'Recompensa de Categoria atualizada com sucesso',
                        'name' => 'Nome',
                        'reward-points' => 'Pontos de Recompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Data de Início',
                        'status' => 'Status',
                        'update-status' => 'Atualizar',

                        'options' => [
                            'active' => 'Ativo',
                            'inactive' => 'Inativo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Ativo',
                    'add-btn' => 'Criar Recompensa de Categoria',
                    'end-date' => 'Data de Término',
                    'enter-reward-points' => 'Insira os Pontos de Recompensa',
                    'inactive' => 'Inativo',
                    'save-btn' => 'Salvar Recompensa de Categoria',
                    'select-category' => 'Selecionar Categoria',
                    'select-status' => 'Selecionar Status',
                    'start-date' => 'Data de Início',
                    'status' => 'Status',
                    'title' => 'Adicionar Pontos de Recompensa na Categoria',
                ],

                'edit' => [
                    'active' => 'Ativo',
                    'add-btn' => 'Criar Recompensa de Categoria',
                    'end-date' => 'Data de Término',
                    'enter-reward-points' => 'Insira os Pontos de Recompensa',
                    'inactive' => 'Inativo',
                    'save-btn' => 'Atualizar Recompensa de Categoria',
                    'select-category' => 'Selecionar Categoria',
                    'select-status' => 'Selecionar Status',
                    'start-date' => 'Data de Início',
                    'status' => 'Status',
                    'title' => 'Editar Pontos de Recompensa na Categoria',
                ],
            ],

            'category-specific' => [
                'index' => [
                    'add-btn' => 'Criar Recompensa de Tempo Específico para Categoria',
                    'category-specific-time' => 'Tempo Específico da Categoria',
                    'title' => 'Pontos de Recompensa na Categoria para Tempo Específico',
                ],

                'create' => [
                    'save-btn' => 'Salvar Recompensa de Tempo Específico para Categoria',
                    'title' => 'Adicionar Pontos de Recompensa na Categoria para Tempo Específico',
                ],

                'edit' => [
                    'save-btn' => 'Atualizar Recompensa de Tempo Específico para Categoria',
                    'title' => 'Editar Pontos de Recompensa na Categoria para Tempo Específico',
                ],
            ],

            'cart' => [
                'index' => [
                    'add-btn' => 'Adicionar Pontos de Recompensa ao Carrinho',
                    'create-success' => 'Recompensa do carrinho criada com sucesso',
                    'delete-failed' => 'Recompensa do carrinho não foi excluída!',
                    'delete-success' => 'Recompensa do carrinho excluída com sucesso',
                    'error-cart' => 'Nenhum carrinho selecionado',
                    'title' => 'Pontos de Recompensa no Carrinho',
                    'update-success' => 'Recompensa do carrinho atualizada com sucesso',

                    'datagrid' => [
                        'amount-from' => 'Quantia De',
                        'amount-to' => 'Quantia Até',
                        'delete' => 'Excluir',
                        'edit' => 'Editar',
                        'end-date' => 'Data de Término',
                        'id' => 'ID',
                        'mass-delete-success' => 'Recompensa do carrinho excluída com sucesso',
                        'mass-update-success' => 'Recompensa do carrinho atualizada com sucesso',
                        'name' => 'Nome',
                        'reward-points' => 'Pontos de Recompensa',
                        'sku' => 'SKU',
                        'start-date' => 'Data de Início',
                        'status' => 'Status',
                        'update-status' => 'Atualizar',

                        'options' => [
                            'active' => 'Ativo',
                            'inactive' => 'Inativo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Ativo',
                    'add-btn' => 'Adicionar Pontos de Recompensa ao Carrinho',
                    'amount-from' => 'Quantia De',
                    'amount-to' => 'Quantia Até',
                    'end-date' => 'Data de Término',
                    'enter-reward-points' => 'Insira os Pontos de Recompensa',
                    'inactive' => 'Inativo',
                    'save-btn' => 'Salvar Recompensa do Carrinho',
                    'select-status' => 'Selecionar Status',
                    'start-date' => 'Data de Início',
                    'status' => 'Status',
                    'title' => 'Adicionar Pontos de Recompensa ao Carrinho',
                ],

                'edit' => [
                    'active' => 'Ativo',
                    'add-btn' => 'Adicionar Pontos de Recompensa ao Carrinho',
                    'amount-from' => 'Quantia De',
                    'amount-to' => 'Quantia Até',
                    'end-date' => 'Data de Término',
                    'enter-reward-points' => 'Insira os Pontos de Recompensa',
                    'inactive' => 'Inativo',
                    'save-btn' => 'Atualizar Recompensa do Carrinho',
                    'select-status' => 'Selecionar Status',
                    'start-date' => 'Data de Início',
                    'status' => 'Status',
                    'title' => 'Editar Pontos de Recompensa no Carrinho',
                ],
            ],

            'attributes' => [
                'index' => [
                    'create-btn' => 'Criar Pontos de Recompensa no Atributo',
                    'create-success' => 'Recompensa do Atributo criada com sucesso',
                    'delete-failed' => 'Recompensa do Atributo não excluída!',
                    'delete-success' => 'Recompensa do Atributo excluída com sucesso',
                    'error-cart' => 'Nenhum Atributo Selecionado',
                    'title' => 'Pontos de Recompensa em Atributos',
                    'update-success' => 'Recompensa do Atributo atualizada com sucesso',

                    'datagrid' => [
                        'code' => 'Código',
                        'delete' => 'Excluir',
                        'edit' => 'Editar',
                        'id' => 'Id',
                        'mass-delete-success' => 'Recompensa do Atributo excluída com sucesso',
                        'mass-update-success' => 'Recompensa do Atributo atualizada com sucesso',
                        'name' => 'Nome',
                        'reward-points' => 'Pontos de Recompensa',
                        'sku' => 'SKU',
                        'status' => 'Status',
                        'update-status' => 'Atualizar',

                        'options' => [
                            'active' => 'Ativo',
                            'inactive' => 'Inativo',
                        ],
                    ],
                ],

                'create' => [
                    'active' => 'Ativo',
                    'enter-reward-points' => 'Inserir Pontos de Recompensa',
                    'inactive' => 'Inativo',
                    'reward_points' => 'Pontos do Atributo',
                    'save-btn' => 'Salvar Pontos de Recompensa no Atributo',
                    'select-attributes' => 'Selecionar Atributo',
                    'select-status' => 'Selecionar Status',
                    'status' => 'Status',
                    'title' => 'Pontos de Recompensa em Atributos',
                ],

                'edit' => [
                    'active' => 'Ativo',
                    'edit-btn' => 'Atualizar Pontos de Recompensa no Atributo',
                    'enter-reward-points' => 'Inserir Pontos de Recompensa',
                    'inactive' => 'Inativo',
                    'reward_points' => 'Pontos do Atributo',
                    'select-attributes' => 'Selecionar Atributo',
                    'select-status' => 'Selecionar Status',
                    'status' => 'Status',
                    'title' => 'Pontos de Recompensa em Atributos',
                ],
            ],

            'system' => [
                'index' => [
                    'title' => 'Detalhes do Sistema de Recompensa',

                    'datagrid' => [
                        'active' => 'Ativo',
                        'id' => 'ID',
                        'inactive' => 'Inativo',
                        'name' => 'Nome',
                        'reward-points' => 'Pontos de Recompensa',
                        'status' => 'Status',
                        'used-rewards-points' => 'Pontos de Recompensa Utilizados',
                        'view' => 'Visualizar',
                    ],
                ],

                'view' => [
                    'title' => 'Detalhes do Sistema de Recompensa',

                    'datagrid' => [
                        'approved' => 'Aprovado',
                        'attribute-id' => 'ID do Atributo',
                        'canceled' => 'Cancelado',
                        'category-id' => 'ID da Categoria',
                        'closed' => 'Fechado',
                        'created-at' => 'Criado em',
                        'exp-date' => 'Data de Expiração',
                        'expire' => 'Expirar',
                        'fraud' => 'Fraude',
                        'id' => 'ID',
                        'name' => 'Nome',
                        'note' => 'Nota',
                        'order-id' => 'ID do Pedido',
                        'pending' => 'Pendente',
                        'processing' => 'Processando',
                        'product-id' => 'ID do Produto',
                        'reward-points' => 'Pontos de Recompensa',
                        'status' => 'Status',
                        'total-reward-points' => 'Total de Pontos de Recompensa',
                        'used' => 'Utilizado',
                    ],
                ],
            ],

            'redemption' => [
                'index' => [
                    'conversion-rate' => 'Taxa de conversão para Resgate do Subtotal do Carrinho',
                    'conversion' => 'taxa de conversão',
                    'enable-apply-points-label' => 'Permitir que os clientes apliquem pontos durante o checkout',
                    'enable-apply-points' => 'Habilitar aplicação de pontos durante o checkout',
                    'points' => 'Pontos',
                    'redemption-cart-label' => 'Permitir que os clientes apliquem pontos durante o carrinho',
                    'redemption-cart' => 'Resgate sobre Subtotal do Carrinho',
                    'save-btn' => 'Salvar',
                    'title' => 'Configurações de Resgate',
                    'update-success' => 'Configurações de Resgate atualizadas com sucesso',
                ],
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'account' => [
                'layouts' => [
                    'reward-points' => 'Pontos de recompensa',
                ],

                'rewards' => [
                    'index' => [
                        'your-reward-points' => 'Seus pontos de recompensa',

                        'datagrid' => [
                            'approved' => 'Aprovado',
                            'attribute-id' => 'ID do atributo',
                            'canceled' => 'Cancelado',
                            'category-id' => 'ID da categoria',
                            'closed' => 'Fechado',
                            'created-at' => 'Data da transação',
                            'exp-date' => 'Data de expiração',
                            'expire' => 'Expirar',
                            'fraud' => 'Fraude',
                            'id' => 'ID',
                            'name' => 'Nome',
                            'note' => 'Nota',
                            'order-id' => 'ID do pedido',
                            'pending' => 'Pendente',
                            'processing' => 'Em processamento',
                            'product-id' => 'ID do produto',
                            'reward-points' => 'Pontos de recompensa',
                            'status' => 'Status',
                            'total-reward-points' => 'Total de pontos de recompensa',
                            'used' => 'Usado',
                        ],
                    ],
                ],
            ],
        ],

        'product' => [
            'product-reward-end-date' => 'Compre este produto e ganhe :reward pontos. Oferta válida até :end_date',
            'product-reward' => 'Compre este produto e ganhe :reward pontos',

            'review' => [
                'review-points' => 'Deixe uma avaliação e ganhe :points pontos',
            ],
        ],

        'register' => [
            'register-reward' => 'Registre-se como membro da nossa família e ganhe :points pontos',
        ],

        'checkout' => [
            'cart' => [
                'mini-cart' => [
                    'reward-points' => 'Pontos de recompensa',
                    'reward-points-earned' => 'Pontos de recompensa ganhos',

                    'summary' => [
                        'reward_points' => 'Total de pontos de recompensa',
                    ],
                ],

                'points' => [
                    'apply-points' => 'Aplicar pontos',
                    'button-title' => 'Aplicar',
                    'enter-points' => 'Inserir pontos',
                    'reward-points' => 'Aplicar pontos de recompensa',
                ],
            ],
        ],
    ],

    'checkout' => [
        'onepage' => [
            'apply-points' => 'Aplicar Pontos',
            'enter-points' => 'Inserir Pontos',
            'points-used' => 'Pontos Usados',
            'redemption-setting' => 'Info: :points ponto(s) é igual a :conversion_rate',
            'total-point' => 'Seu Total de Pontos: :total_reward_points',
        ],

        'total' => [
            'cannot-apply-points' => 'Não é possível aplicar pontos',
            'grandtotal' => 'Total',
            'invalid-points' => 'O campo de pontos é obrigatório',
            'only-number' => 'O campo de pontos deve ser 1 ou mais',
            'points-applied' => 'Pontos Aplicados',
            'points-apply-issue' => 'Código de pontos não pode ser aplicado.',
            'points' => 'Pontos',
            'redem-points' => 'Resgatar Pontos (-)',
            'remove-points' => 'Remover Pontos',
            'success-points' => 'Código de pontos aplicado com sucesso.',
            'total-reward-points-awarded' => 'Total de Pontos de Recompensa Concedidos',
            'unauthorized-use-points' => 'Você não pode usar pontos de recompensa no momento, entre em contato com o administrador.',
            'use-can-use-only' => 'Você pode usar apenas ',
            'warning-required-less-point' => 'O resgate de pontos de recompensa deve ser menor que o preço do produto.',
            'you-have-only' => 'Você tem apenas ',
        ],
    ],

    'mail' => [
        'registration' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Bem-vindo e obrigado por se registrar conosco!',
            'points-rewarded' => 'Você recebeu :points pontos por registro',
            'subject' => 'Nova Registro de Cliente',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'review' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Obrigado pela avaliação do :product_name!',
            'points-rewarded' => 'Você recebeu :points pontos pela avaliação',
            'subject' => 'Avaliação de Cliente',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'dob' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Feliz Aniversário!',
            'points-rewarded' => 'Você recebeu :points pontos pelo aniversário',
            'subject' => 'Data de Nascimento do Cliente',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'pending' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Obrigado por encomendar os produtos do nosso site!',
            'points-rewarded' => 'Após a aprovação do Pedido Nr. #:order_id, você poderá usar :points Pontos',
            'status' => 'Pendente',
            'subject' => 'Pedido do Cliente',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'used' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Obrigado por usar pontos para comprar produtos em nosso site!',
            'points-rewarded' => 'Você usou :points Pontos para o Pedido Nr. #:order_id',
            'status' => 'Usado',
            'subject' => 'Uso de Pontos do Cliente',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'approved' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Seus Pontos foram Aprovados!',
            'points-rewarded' => 'Você recebeu :points Pontos para o Pedido Nr. #:order_id',
            'status' => 'Aprovado',
            'subject' => 'Pontos Aprovados',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'processing' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Status alterado para Processamento em :date!',
            'points-rewarded' => 'Status alterado para o Pedido Nr. #:order_id',
            'status' => 'Aprovado',
            'subject' => 'Processamento de Pontos',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'expire' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Status alterado para Expirado em :date!',
            'points-rewarded' => 'Status alterado para o Pedido Nr. #:order_id',
            'status' => 'Expirado',
            'subject' => 'Pontos Expirados',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'closed' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Status alterado para Fechado em :date!',
            'points-rewarded' => 'Status alterado para Fechado para o Pedido Nr. #:order_id',
            'status' => 'Fechado',
            'subject' => 'Pontos Fechados',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'cancel' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Seus Pontos foram Cancelados em :date!',
            'points-rewarded' => 'Você cancelou :points Pontos para o Pedido Nr. #:order_id',
            'status' => 'Cancelado',
            'subject' => 'Cancelamento de Pontos',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],

        'fraud' => [
            'dear' => 'Caro/a :customer_name',
            'greeting' => 'Status alterado para Fraude!',
            'points-rewarded' => 'Você cancelou :points Pontos para o Pedido Nr. #:order_id em :date',
            'status' => 'Fraude',
            'subject' => 'Fraude de Pontos',
            'thanks' => 'Obrigado!',
            'total-point-left' => 'Você tem :total_reward_points pontos restantes',
            'used-points' => 'Você usou :used_reward_points pontos',
        ],
    ],
];
