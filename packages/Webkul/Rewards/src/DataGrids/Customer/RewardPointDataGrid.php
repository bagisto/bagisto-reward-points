<?php

namespace Webkul\Rewards\DataGrids\Customer;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;
use Webkul\Rewards\Models\RewardPoint;

class RewardPointDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('reward_points')
            ->addSelect(
                'order_items.id',
                'reward_points.status',
                'reward_points.exp_date',
                'reward_points.note',
                'reward_points.created_at',
                'reward_points.reward_points',
            )
            ->leftJoin('order_items', 'reward_points.order_id', '=', 'order_items.id')
            ->where('reward_points.customer_id', auth()->guard('customer')->user()->id)
            ->latest();

        $this->addFilter('created_at', 'reward_points.created_at');
        $this->addFilter('exp_date', 'reward_points.exp_date');

        return $queryBuilder;
    }

    /**
     * Add columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index' => 'created_at',
            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.created-at'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'reward_points',
            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.reward-points'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'note',
            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.note'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'exp_date',
            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.exp-date'),
            'type' => 'datetime',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.status'),
            'type' => 'string',
            'options' => [
                'type' => 'basic',

                'params' => [
                    'options' => [
                        [
                            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.processing'),
                            'value' => RewardPoint::STATUS_PROCESSING,
                        ], [
                            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.approved'),
                            'value' => RewardPoint::STATUS_APPROVED,
                        ], [
                            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.canceled'),
                            'value' => RewardPoint::STATUS_CANCELED,
                        ], [
                            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.closed'),
                            'value' => RewardPoint::STATUS_CLOSED,
                        ], [
                            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.pending'),
                            'value' => RewardPoint::STATUS_PENDING,
                        ], [
                            'label' => trans('rewards::app.shop.customer.account.rewards.index.datagrid.fraud'),
                            'value' => RewardPoint::STATUS_FRAUD,
                        ],
                    ],
                ],
            ],
            'searchable' => false,
            'filterable' => true,
            'sortable' => true,
            'closure' => function ($value) {
                switch ($value->status) {
                    case RewardPoint::STATUS_PROCESSING:
                        return '<span class="label-info">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.processing').'</span>';
                    case RewardPoint::STATUS_APPROVED:
                        return '<span class="label-active">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.approved').'</span>';
                    case RewardPoint::STATUS_CANCELED:
                        return '<span class="label-cancel">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.canceled').'</span>';
                    case RewardPoint::STATUS_CLOSED:
                        return '<span class="label-closed">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.closed').'</span>';
                    case RewardPoint::STATUS_PENDING:
                        return '<span class="label-pending">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.pending').'</span>';
                    case RewardPoint::STATUS_FRAUD:
                        return '<span class="label-closed">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.fraud').'</span>';
                    case RewardPoint::STATUS_EXPIRE:
                        return '<span class="label-cancel">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.expire').'</span>';
                    case RewardPoint::STATUS_USED:
                        return '<span class="label-processing">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.used').'</span>';
                    case RewardPoint::STATUS_DISAPPROVED:
                        return '<span class="label-closed">'.trans('rewards::app.shop.customer.account.rewards.index.datagrid.canceled').'</span>';
                }
            },
        ]);
    }
}
