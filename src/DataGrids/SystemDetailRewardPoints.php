<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class SystemDetailRewardPoints extends DataGrid
{
    protected $index = 'customer_id';

    protected $sortOrder = 'desc';

    protected $itemsPerPage = 10;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('customers')
            ->addSelect('customers.id as customer_id','customers.status')
            ->addSelect(DB::raw('CONCAT(' . DB::getTablePrefix() . 'customers.first_name, " ", ' . DB::getTablePrefix() . 'customers.last_name) as full_name'))
            ->addSelect(DB::raw("(select COALESCE(SUM(reward_points.reward_points), 0) from `reward_points` where reward_points.customer_id = customers.id AND reward_points.status = 'approved') as reward_points"))
            ->addSelect(DB::raw("(select COALESCE(SUM(reward_points.reward_points), 0) from `reward_points` where reward_points.customer_id = customers.id AND reward_points.status = 'used') as used_points"));
           
        $this->addFilter('customer_id', 'customers.id');
        $this->addFilter('full_name', DB::raw('CONCAT(' . DB::getTablePrefix() . 'customers.first_name, " ", ' . DB::getTablePrefix() . 'customers.last_name)'));
  
        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'customer_id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'full_name',
            'label'      => trans('admin::app.datagrid.name'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'reward_points',
            'label'      => 'Total Rewards Point',
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'used_points',
            'label'      => 'Used Rewards Point',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);
        
        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('admin::app.datagrid.status'),
            'type'       => 'boolean',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
            'closure'    => true,
            'wrapper'    => function ($row) {
                if ($row->status == 1) {
                    return '<span class="badge badge-md badge-success">'. trans('admin::app.customers.customers.active') .'</span>';
                } else {
                    return '<span class="badge badge-md badge-danger">'. trans('admin::app.customers.customers.inactive') .'</span>';
                }
            },
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'  => trans('admin::app.datagrid.view'),
            'method' => 'GET',
            'route'  => 'admin.rewards.system.view',
            'icon'   => 'icon eye-icon',
        ]);
    }

}

