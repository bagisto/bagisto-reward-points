<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ProductRewardDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('product_rewards')
            ->leftJoin('product_flat', 'product_rewards.product_id', '=', 'product_flat.product_id')
            ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
            ->select(
                'product_rewards.id',
                'products.sku as product_sku',
                'product_flat.name as product_name',
                'product_rewards.status',
                'product_rewards.reward_points',
            )->where('product_flat.locale', app()->getLocale());

        $queryBuilder->groupBy('product_flat.product_id');

        $this->addFilter('id', 'product_rewards.id');
        $this->addFilter('product_name', 'product_flat.name');
        $this->addFilter('product_sku', 'products.sku');
        $this->addFilter('status', 'product_rewards.status');
        $this->addFilter('reward_points', 'product_rewards.reward_points');

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
            'index' => 'status',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.status'),
            'type' => 'boolean',
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
                return route('admin.reward.product.edit_product_reward', $row->id);
            },
        ]);

        $this->addAction([
            'icon' => 'icon-delete',
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.delete'),
            'method' => 'POST',
            'url' => function ($row) {
                return route('admin.reward.product.delete_product_reward', $row->id);
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
            'url' => route('admin.reward.product.mass_delete'),
            'method' => 'POST',
        ]);

        $this->addMassAction([
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.update-status'),
            'method' => 'POST',
            'url' => route('admin.reward.product.mass_update'),
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
