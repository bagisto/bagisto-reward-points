<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ProductRewardSpecificTimeDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('product_specific_time_rewards')
            ->leftJoin('product_flat', 'product_specific_time_rewards.product_id', '=', 'product_flat.product_id')
            ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
            ->select(
                'product_specific_time_rewards.id',
                'products.sku as product_sku',
                'product_flat.name as product_name',
                'product_specific_time_rewards.status',
                'product_specific_time_rewards.reward_points',
                'product_specific_time_rewards.start_time',
                'product_specific_time_rewards.end_time',

            )->where('product_flat.locale', app()->getLocale());

        $queryBuilder->groupBy('product_flat.product_id');

        $this->addFilter('id', 'product_specific_time_rewards.id');
        $this->addFilter('product_name', 'product_flat.name');
        $this->addFilter('product_sku', 'products.sku');
        $this->addFilter('status', 'product_specific_time_rewards.status');
        $this->addFilter('reward_points', 'product_specific_time_rewards.reward_points');
        $this->addFilter('start_time', 'product_specific_time_rewards.start_time');

        return $queryBuilder;
    }

    /**
     * Prepare columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.id'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'product_sku',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.sku'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'product_name',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'reward_points',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.reward-points'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'start_time',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.start-date'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'end_time',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.end-date'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.status'),
            'type' => 'string',
            'options' => [
                'type' => 'basic',

                'params' => [
                    'options' => [
                        [
                            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.options.active'),
                            'value' => '1',
                        ], [
                            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.options.inactive'),
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
                    return '<span class="label-active">'.trans('rewards::app.admin.rewards.products.index.datagrid.options.active').'</span>';
                }

                return '<span class="label-info">'.trans('rewards::app.admin.rewards.products.index.datagrid.options.inactive').'</span>';
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
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.edit'),
            'method' => 'GET',
            'url' => function ($row) {
                return route('admin.reward.product.edit_product_specific_reward', $row->id);
            },
        ]);

        $this->addAction([
            'icon' => 'icon-delete',
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.delete'),
            'method' => 'POST',
            'url' => function ($row) {
                return route('admin.reward.product.delete_product_specific_Reward', $row->id);
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
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.delete'),
            'url' => route('admin.reward.product.mass_delete_specific'),
            'method' => 'POST',
        ]);

        $this->addMassAction([
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.update-status'),
            'method' => 'POST',
            'url' => route('admin.reward.product.mass_update_specific'),
            'options' => [
                [
                    'label' => trans('rewards::app.admin.rewards.products.index.datagrid.options.active'),
                    'value' => 1,
                ], [
                    'label' => trans('rewards::app.admin.rewards.products.index.datagrid.options.inactive'),
                    'value' => 0,
                ],
            ],
        ]);
    }
}
