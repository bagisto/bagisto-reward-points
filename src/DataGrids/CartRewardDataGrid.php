<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class CartRewardDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('cart_rewards')
            ->select('id', 'reward_points', 'amount_from', 'amount_to', 'start_date','end_date','status','created_at')
            ->groupBy('id');


        $this->addFilter('id', 'id');
        $this->addFilter('status', 'status');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'number',
            'searchable' => false,
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
            'index'      => 'amount_from',
            'label'      => trans('rewards::app.rewards.amount_from'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        
        $this->addColumn([
            'index'      => 'amount_to',
            'label'      => trans('rewards::app.rewards.amount_to'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'start_date',
            'label'      => trans('rewards::app.rewards.start_date'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'end_date',
            'label'      => trans('rewards::app.rewards.end_date'),
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
            'route'  => 'admin.reward.cart.editCartReward',
            'icon'   => 'icon pencil-lg-icon',
        ]);

        $this->addAction([
            'title'  => trans('admin::app.datagrid.delete'),
            'method' => 'POST',
            'route'  => 'admin.reward.cart.deleteCartReward',
            'icon'  => 'icon trash-icon',
        ]);
    }


    public function prepareMassActions()
    {
        $this->addMassAction([
            'type'   => 'delete',
            'label'  => trans('admin::app.datagrid.delete'),
            'action' => route('admin.catalog.products.massdelete'),
            'method' => 'POST',
        ]);

        $this->addMassAction([
            'type'    => 'update',
            'label'   => trans('admin::app.datagrid.update-status'),
            'action'  => route('admin.catalog.products.massupdate'),
            'method'  => 'POST',
            'options' => [
                'Active'   => 1,
                'Inactive' => 0,
            ],
        ]);
    }
}