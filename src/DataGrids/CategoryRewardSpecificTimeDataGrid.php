<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class CategoryRewardSpecificTimeDataGrid extends DataGrid
{
    protected $index = 'category_id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('category_specific_time_rewards')
             ->leftJoin('categories as cat', 'category_specific_time_rewards.category_id', '=', 'cat.id')
            ->select('cat.id as category_id', 'ct.name', 'cat.position', 'ct.locale','category_specific_time_rewards.reward_points','category_specific_time_rewards.start_time','category_specific_time_rewards.end_time','category_specific_time_rewards.status')
            ->leftJoin('category_translations as ct', function($leftJoin) {
                $leftJoin->on('cat.id', '=', 'ct.category_id')
                         ->where('ct.locale', app()->getLocale());
            })
            ->groupBy('cat.id');


        $this->addFilter('category_id', 'cat.id');
        $this->addFilter('status', 'category_specific_time_rewards.status');

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
            'index'      => 'start_time',
            'label'      => trans('rewards::app.rewards.start_time'),
            'type'       => 'text',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'end_time',
            'label'      => trans('rewards::app.rewards.end_time'),
            'type'       => 'text',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('admin::app.datagrid.status'),
            'type'       => 'boolean',
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
            'route'  => 'admin.reward.category.editcategoryspecificreward',
            'icon'   => 'icon pencil-lg-icon',
        ]);

    }
}