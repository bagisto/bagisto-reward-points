<?php

namespace Webkul\Rewards\Http\Controllers;
use Webkul\Rewards\Http\Controllers\Controller;
use Webkul\Customer\Repositories\CustomerRepository;

class RewardController extends Controller
{
 

    /**
     * CustomerRepository object
     *
     * @var \Webkul\Customer\Repositories\CustomerRepository
     */
    protected $customerRepository;

 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        CustomerRepository $customerRepository
    )
    {
        $this->middleware('customer');
        parent::__construct();
        $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        $customer = $this->customerRepository->find(auth()->guard('customer')->user()->id);
        
        return view($this->_config['view'],compact('customer'));
    }

    

    
}