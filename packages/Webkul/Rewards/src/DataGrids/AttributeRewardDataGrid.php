<?php

namespace Webkul\Rewards\DataGrids;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class AttributeRewardDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('attribute_rewards')
            ->select(
                'attribute_rewards.id',
                'attributes.code',
                'attributes.admin_name',
                'attribute_rewards.reward_points',
                'attribute_rewards.status'
            )
            ->leftJoin('attributes', 'attribute_rewards.attribute_id', '=', 'attributes.id');

        $this->addFilter('id', 'attribute_rewards.id');

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
            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.id'),
            'type' => 'integer',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'code',
            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.code'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'admin_name',
            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'reward_points',
            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.reward-points'),
            'type' => 'string',
            'sortable' => true,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.status'),
            'type' => 'string',
            'options' => [
                'type' => 'basic',

                'params' => [
                    'options' => [
                        [
                            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.options.active'),
                            'value' => '1',
                        ], [
                            'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.options.inactive'),
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
                    return '<span class="label-active">'.trans('rewards::app.admin.rewards.attributes.index.datagrid.options.active').'</span>';
                }

                return '<span class="label-info">'.trans('rewards::app.admin.rewards.attributes.index.datagrid.options.inactive').'</span>';
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
            'title' => trans('rewards::app.admin.rewards.attributes.index.datagrid.edit'),
            'method' => 'GET',
            'url' => function ($row) {
                return route('admin.reward.attribute.edit', $row->id);
            },
        ]);

        $this->addAction([
            'icon' => 'icon-delete',
            'title' => trans('rewards::app.admin.rewards.attributes.index.datagrid.delete'),
            'method' => 'POST',
            'url' => function ($row) {
                return route('admin.reward.attribute.delete', $row->id);
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
            'title' => trans('rewards::app.admin.rewards.attributes.index.datagrid.delete'),
            'url' => route('admin.reward.attribute.mass_delete'),
            'method' => 'POST',
        ]);

        $this->addMassAction([
            'title' => trans('rewards::app.admin.rewards.attributes.index.datagrid.update-status'),
            'method' => 'POST',
            'url' => route('admin.reward.attribute.mass_update'),
            'options' => [
                [
                    'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.options.active'),
                    'value' => 1,
                ], [
                    'label' => trans('rewards::app.admin.rewards.attributes.index.datagrid.options.inactive'),
                    'value' => 0,
                ],
            ],
        ]);
    }
}
