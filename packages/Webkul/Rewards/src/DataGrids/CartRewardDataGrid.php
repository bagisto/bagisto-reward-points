<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class CartRewardDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('cart_rewards')
            ->select(
                'id',
                'reward_points',
                'amount_from',
                'amount_to',
                'start_date',
                'end_date',
                'status',
                'created_at',
            )->groupBy('id');

        $this->addFilter('id', 'id');
        $this->addFilter('status', 'status');
        $this->addFilter('start_date', 'start_date');
        $this->addFilter('end_date', 'end_date');

        return $queryBuilder;
    }

    /**
     * Create columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.id'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'reward_points',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.reward-points'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'amount_from',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.amount-from'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'amount_to',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.amount-to'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'start_date',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.start-date'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'end_date',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.end-date'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.status'),
            'type' => 'string',
            'options' => [
                'type' => 'basic',

                'params' => [
                    'options' => [
                        [
                            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.options.active'),
                            'value' => '1',
                        ], [
                            'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.options.inactive'),
                            'value' => '0',
                        ],
                    ],
                ],
            ],
            'sortable' => true,
            'searchable' => false,
            'filterable' => true,
            'closure' => function ($row) {
                if ($row->status) {
                    return '<span class="label-active">'.trans('rewards::app.admin.rewards.cart.index.datagrid.options.active').'</span>';
                }

                return '<span class="label-info">'.trans('rewards::app.admin.rewards.cart.index.datagrid.options.inactive').'</span>';
            },
        ]);
    }

    /**
     * Prepare actions.
     *
     * @return void
     */
    public function prepareActions()
    {
        $this->addAction([
            'icon' => 'icon-edit',
            'title' => trans('rewards::app.admin.rewards.cart.index.datagrid.edit'),
            'method' => 'GET',
            'url' => function ($row) {
                return route('admin.reward.cart.edit', $row->id);
            },
        ]);

        $this->addAction([
            'icon' => 'icon-delete',
            'title' => trans('rewards::app.admin.rewards.cart.index.datagrid.delete'),
            'method' => 'POST',
            'url' => function ($row) {
                return route('admin.reward.cart.delete', $row->id);
            },
        ]);
    }

    /**
     * Prepare mass actions.
     *
     * @return void
     */
    public function prepareMassActions()
    {
        $this->addMassAction([
            'title' => trans('rewards::app.admin.rewards.cart.index.datagrid.delete'),
            'url' => route('admin.reward.cart.mass_delete'),
            'method' => 'POST',
        ]);

        $this->addMassAction([
            'title' => trans('rewards::app.admin.rewards.cart.index.datagrid.update-status'),
            'method' => 'POST',
            'url' => route('admin.reward.cart.mass_update'),
            'options' => [
                [
                    'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.options.active'),
                    'value' => 1,
                ], [
                    'label' => trans('rewards::app.admin.rewards.cart.index.datagrid.options.inactive'),
                    'value' => 0,
                ],
            ],
        ]);
    }
}
