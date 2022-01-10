<?php
namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class RewardPointDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('reward_points')
            ->addSelect('order_items.id', 'reward_points.status','reward_points.exp_date','reward_points.note','reward_points.created_at', 'reward_points.reward_points')
            ->leftJoin('order_items','reward_points.order_id', '=','order_items.id')
            ->where('reward_points.customer_id', auth()->guard('customer')->user()->id)
            ->latest();

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('shop::app.customer.account.order.index.date'),
            'type'       => 'datetime',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'reward_points',
            'label'      => trans('rewards::app.account.reward_points.index.reward-points'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

       

        $this->addColumn([
            'index'      => 'status',
            'label'      =>trans('rewards::app.account.reward_points.index.status'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'closure'    => true,
            'wrapper'    => function ($value) {
                if ($value->status == 'processing') {
                    return '<span class="badge badge-md badge-success">' . trans('rewards::app.account.reward_points.index.processing') . '</span>';
                } elseif ($value->status == 'approved') {
                    return '<span class="badge badge-md badge-success">' . trans('rewards::app.account.reward_points.index.approved') . '</span>';
                } elseif ($value->status == "canceled") {
                    return '<span class="badge badge-md badge-danger">' . trans('rewards::app.account.reward_points.index.canceled'). '</span>';
                } elseif ($value->status == "closed") {
                    return '<span class="badge badge-md badge-info">' . trans('rewards::app.account.reward_points.index.closed') . '</span>';
                } elseif ($value->status == "pending") {
                    return '<span class="badge badge-md badge-warning">' . trans('rewards::app.account.reward_points.index.pending'). '</span>';
                } elseif ($value->status == "fraud") {
                    return '<span class="badge badge-md badge-danger">' . trans('rewards::app.account.reward_points.index.fraud') . '</span>';
                } elseif ($value->status == "expire") {
                    return '<span class="badge badge-md badge-danger">' . trans('rewards::app.account.reward_points.index.expire'). '</span>';
                }  elseif ($value->status == "used") {
                    return '<span class="badge badge-md badge-success">' .trans('rewards::app.account.reward_points.index.used'). '</span>';
                }
            },
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'note',
            'label'      => trans('rewards::app.account.reward_points.index.note'),
            'type'       => 'text',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'exp_date',
            'label'      => trans('rewards::app.account.reward_points.index.exp-date'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }
}
