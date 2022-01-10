<?php
namespace Webkul\Rewards\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;
use Webkul\Customer\Repositories\CustomerRepository;

class SystemDetailByCustomerDataGrid extends DataGrid
{
    /**
     * CustomerRepository object
     *
     * @var object
     */
    protected $customerRepository;

    /**
     * Create a new datagrid instance.
     *
     * @param  Webkul\Customer\Repositories\CustomerRepository $customerRepository
     * @return void
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;

        parent::__construct();
    }

    protected $index = 'id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $customer = $this->customerRepository->find(request('id'));

        $queryBuilder = DB::table('reward_points')
            ->addSelect('orders.id','reward_points.order_id','reward_points.category_id','reward_points.attribute_id','reward_points.product_id', 'reward_points.status','reward_points.exp_date', 'reward_points.created_at', 'reward_points.reward_points','reward_points.note','reward_points.status')
            ->leftJoin('orders', 'reward_points.order_id', '=', 'orders.id')
            ->where('reward_points.customer_id', $customer->id);

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'reward_points',
            'label'      => trans('rewards::app.account.reward_points.index.reward-points'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('rewards::app.account.reward_points.index.transaction_at'),
            'type'       => 'text',
            'searchable' => false,
            'sortable'   => true,
            'closure'    => true,
            'wrapper'    => function ($value) {

                    if($value->order_id) {                    
                        $data[] =  '<span>'. trans('rewards::app.account.reward_points.index.order-id') .' = '.$value->order_id. '</span> <br><br>';      
                    } 
                    
                    if ($value->product_id) {                    
                        $data[] =  '<span>'. trans('rewards::app.account.reward_points.index.product-id') .' = '. $value->product_id. '</span> <br><br>';         
                    } 

                    if($value->category_id) {                    
                        $data[] =  '<span> '. trans('rewards::app.account.reward_points.index.category-id') .' = '.$value->category_id. '</span> <br><br>';      
                    } 

                    if($value->attribute_id) {                    
                        $data[] =  '<span> '. trans('rewards::app.account.reward_points.index.attribute-id') .' = '.$value->attribute_id. '</span> <br><br>';      
                    } 

                    $data[] = '<span>' . trans('rewards::app.account.reward_points.index.transaction_at') .' = '.$value->created_at. '</span> <br><br>';

                    return implode(' ',$data);
            },
            
        ]);

        $this->addColumn([
            'index'      => 'exp_date',
            'label'      => trans('rewards::app.account.reward_points.index.exp-date'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
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
    }
}
