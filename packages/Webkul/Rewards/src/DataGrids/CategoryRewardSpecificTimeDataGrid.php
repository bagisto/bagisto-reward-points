<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class CategoryRewardSpecificTimeDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('category_specific_time_rewards')
            ->leftJoin('categories as cat', 'category_specific_time_rewards.category_id', '=', 'cat.id')
            ->select(
                'category_specific_time_rewards.id',
                'ct.name',
                'cat.position',
                'ct.locale',
                'category_specific_time_rewards.reward_points',
                'category_specific_time_rewards.start_time',
                'category_specific_time_rewards.end_time',
                'category_specific_time_rewards.status',
            )
            ->leftJoin('category_translations as ct', function ($leftJoin) {
                $leftJoin->on('cat.id', '=', 'ct.category_id')
                    ->where('ct.locale', app()->getLocale());
            })->groupBy('cat.id');

        $this->addFilter('id', 'category_specific_time_rewards.id');
        $this->addFilter('status', 'category_specific_time_rewards.status');
        $this->addFilter('start_time', 'category_specific_time_rewards.start_time');
        $this->addFilter('end_time', 'category_specific_time_rewards.end_time');

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
            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.id'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'name',
            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'reward_points',
            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.reward-points'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'start_time',
            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.start-date'),
            'type' => 'datetime',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'end_time',
            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.end-date'),
            'type' => 'datetime',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.status'),
            'type' => 'string',
            'options' => [
                'type' => 'basic',

                'params' => [
                    'options' => [
                        [
                            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.options.active'),
                            'value' => '1',
                        ], [
                            'label' => trans('rewards::app.admin.rewards.category.index.datagrid.options.inactive'),
                            'value' => '0',
                        ],
                    ],
                ],
            ],
            'sortable' => true,
            'searchable' => true,
            'filterable' => true,
            'closure' => function ($row) {
                if ($row->status) {
                    return '<span class="label-active">'.trans('rewards::app.admin.rewards.category.index.datagrid.options.active').'</span>';
                }

                return '<span class="label-info">'.trans('rewards::app.admin.rewards.category.index.datagrid.options.inactive').'</span>';
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
            'title' => trans('rewards::app.admin.rewards.category.index.datagrid.edit'),
            'method' => 'GET',
            'url' => function ($row) {
                return route('admin.reward.category.edit_category_specific_reward', $row->id);
            },
        ]);

        $this->addAction([
            'icon' => 'icon-delete',
            'title' => trans('rewards::app.admin.rewards.category.index.datagrid.delete'),
            'method' => 'POST',
            'url' => function ($row) {
                return route('admin.reward.category.delete_category_specific_reward', $row->id);
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
            'title' => trans('rewards::app.admin.rewards.category.index.datagrid.delete'),
            'url' => route('admin.reward.category.mass_delete_specific'),
            'method' => 'POST',
            'type' => 'delete',
        ]);

        $this->addMassAction([
            'title' => trans('rewards::app.admin.rewards.category.index.datagrid.update-status'),
            'method' => 'POST',
            'url' => route('admin.reward.category.mass_update_specific'),
            'options' => [
                [
                    'label' => trans('rewards::app.admin.rewards.category.index.datagrid.options.active'),
                    'value' => 1,
                ], [
                    'label' => trans('rewards::app.admin.rewards.category.index.datagrid.options.inactive'),
                    'value' => 0,
                ],
            ],
        ]);
    }
}
