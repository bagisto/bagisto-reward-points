<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class SystemDetailRewardPoints extends DataGrid
{
    /**
     * Index.
     *
     * @var string
     */
    protected $index = 'customer_id';

    /**
     * Prepare query builder.
     *
     * @return void
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('customers')
            ->addSelect(
                'customers.id as customer_id',
                'customers.status',
            )
            ->addSelect(DB::raw('CONCAT('.DB::getTablePrefix().'customers.first_name, " ", '.DB::getTablePrefix().'customers.last_name) as full_name'))
            ->addSelect(DB::raw("(select COALESCE(SUM(reward_points.reward_points), 0) from `reward_points` where reward_points.customer_id = customers.id AND reward_points.status = 'approved') as reward_points"))
            ->addSelect(DB::raw("(select COALESCE(SUM(reward_points.reward_points), 0) from `reward_points` where reward_points.customer_id = customers.id AND reward_points.status = 'used') as used_points"));

        $this->addFilter('customer_id', 'customers.id');
        $this->addFilter('full_name', DB::raw('CONCAT('.DB::getTablePrefix().'customers.first_name, " ", '.DB::getTablePrefix().'customers.last_name)'));
        $this->addFilter('reward_points', DB::raw("(select COALESCE(SUM(reward_points.reward_points), 0) from `reward_points` where reward_points.customer_id = customers.id AND reward_points.status = 'approved')"));
        $this->addFilter('used_points', DB::raw("(select COALESCE(SUM(reward_points.reward_points), 0) from `reward_points` where reward_points.customer_id = customers.id AND reward_points.status = 'used')"));

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
            'index' => 'customer_id',
            'label' => trans('rewards::app.admin.rewards.products.index.datagrid.id'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'full_name',
            'label' => trans('rewards::app.admin.rewards.system.index.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'reward_points',
            'label' => trans('rewards::app.admin.rewards.system.index.datagrid.reward-points'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'used_points',
            'label' => trans('rewards::app.admin.rewards.system.index.datagrid.used-rewards-points'),
            'type' => 'string',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('rewards::app.admin.rewards.system.index.datagrid.status'),
            'type' => 'boolean',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
            'closure' => function ($row) {
                if ($row->status) {
                    return '<span class="label-active">'.trans('rewards::app.admin.rewards.system.index.datagrid.active').'</span>';
                }

                return '<span class="label-info">'.trans('rewards::app.admin.rewards.system.index.datagrid.inactive').'</span>';
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
            'icon' => 'icon-view',
            'title' => trans('rewards::app.admin.rewards.products.index.datagrid.view'),
            'method' => 'GET',
            'url' => function ($row) {
                return route('admin.reward.system.view', $row->customer_id);
            },
        ]);
    }
}
