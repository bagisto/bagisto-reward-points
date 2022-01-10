<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class CategoryRewardDataGrid extends DataGrid
{
    protected $index = 'category_id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('category_rewards')
            ->leftJoin('categories as cat', 'category_rewards.category_id', '=', 'cat.id')
            ->select('cat.id as category_id', 'ct.name', 'cat.position', 'category_rewards.status', 'ct.locale','category_rewards.reward_points')
            ->leftJoin('category_translations as ct', function($leftJoin) {
                $leftJoin->on('cat.id', '=', 'ct.category_id')
                         ->where('ct.locale', app()->getLocale());
            })
            ->groupBy('cat.id');


        $this->addFilter('category_id', 'cat.id');
        $this->addFilter('status', 'category_rewards.status');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'category_id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('admin::app.datagrid.name'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'reward_points',
            'label'      => trans('rewards::app.rewards.reward_points'),
            'type'       => 'text',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('admin::app.datagrid.status'),
            'type'       => 'text',
            'sortable'   => true,
            'searchable' => true,
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
            'route'  => 'admin.reward.category.editcategoryreward',
            'icon'   => 'icon pencil-lg-icon',
        ]);

    }
}