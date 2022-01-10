<?php

namespace Webkul\Rewards\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;

class ProductRewardSpecificTimeDataGrid extends DataGrid
{
    protected $sortOrder = 'desc';

    protected $index = 'product_id';

    protected $itemsPerPage = 10;

    public function __construct()
    {
        parent::__construct();
    }

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('product_specific_time_rewards')
            ->leftJoin('product_flat', 'product_specific_time_rewards.product_id', '=', 'product_flat.product_id')
            ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
            ->select(
                'product_flat.product_id as product_id',
                'products.sku as product_sku',
                'product_flat.name as product_name',
                'product_specific_time_rewards.status',
                'product_specific_time_rewards.reward_points',
                'product_specific_time_rewards.start_time',
                'product_specific_time_rewards.end_time'

            )->where('product_flat.locale', app()->getLocale());

        $queryBuilder->groupBy('product_flat.product_id');

        $this->addFilter('product_id', 'product_flat.product_id');
        $this->addFilter('product_name', 'product_flat.name');
        $this->addFilter('product_sku', 'products.sku');
        $this->addFilter('status', 'product_specific_time_rewards.status');
        $this->addFilter('product_type', 'products.type');
        $this->addFilter('attribute_family', 'attribute_families.name');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'product_id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'product_sku',
            'label'      => trans('admin::app.datagrid.sku'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'product_name',
            'label'      => trans('admin::app.datagrid.name'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'reward_points',
            'label'      => trans('rewards::app.rewards.reward_points'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'start_time',
            'label'      => trans('rewards::app.rewards.start_time'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'end_time',
            'label'      => trans('rewards::app.rewards.end_time'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);


        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('rewards::app.rewards.status'),
            'type'       => 'boolean',
            'sortable'   => true,
            'searchable' => false,
            'filterable' => true,
            'wrapper'    => function ($value) {
                if ($value->status == 1) {
                    return trans('admin::app.datagrid.active');
                } else {
                    return trans('admin::app.datagrid.inactive');
                }
            },

        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'  => trans('admin::app.datagrid.edit'),
            'method' => 'GET',
            'route'  => 'admin.reward.product.editproductspecificreward',
            'icon'   => 'icon pencil-lg-icon',
        ]);
    }
}
