<?php

namespace Webkul\Rewards\Http\Controllers;


use Webkul\Product\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\RewardConfigRepository;

class GeneralController extends Controller
{
    /**
     * RewardConfigRepository object
     *
     * @var Webkul\Rewards\Repositories\RewardConfigRepository
     */

    protected $rewardConfigRepository;



    /**
     * Create a new controller instance.
     * @param  \Webkul\Rewards\Repositories\RewardConfigRepository  $rewardConfigRepository
     * @return void
     */


    public function __construct(
        RewardConfigRepository $rewardConfigRepository
    ) {
        $this->rewardConfigRepository = $rewardConfigRepository;
        $this->_config = request('_config');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $temp = $this->rewardConfigRepository->all();
        
        $result = [];

        foreach($temp as $keys => $value){
          $result[$value->code] = $value->value;
        }
    
        
        return view($this->_config['view'],compact('result'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->rewardConfigRepository->create(request()->all());
        
        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'General Setting']));
        
        return redirect()->back();
    }

}
