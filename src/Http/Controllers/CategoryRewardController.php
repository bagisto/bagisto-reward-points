<?php

namespace Webkul\Rewards\Http\Controllers;


use Webkul\Product\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\CategoryRewardRepository;
use Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository;
use Webkul\Category\Repositories\CategoryRepository;

class CategoryRewardController extends Controller
{
    /**
     * CategoryRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CategoryRepository
     */

    protected $categoryRepository;

    /**
     * CategoryRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CategoryRewardRepository
     */

    protected $categoryRewardRepository;

    
    /**
     * CategorySpecificTimeRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository
     */

    protected $categorySpecificTimeRewardRepository;

     /**
     * Create a new controller instance.
     *
     * @param  Webkul\Rewards\Repositories\CategoryRewardRepository  $categoryRewardRepository
     * @param  Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository  $categorySpecificTimeRewardRepository
     * @return void
     */


    public function __construct(
        CategoryRewardRepository $categoryRewardRepository,
        CategorySpecificTimeRewardRepository $categorySpecificTimeRewardRepository,
        CategoryRepository $categoryRepository
    )
    {
        $this->categoryRewardRepository = $categoryRewardRepository;
        $this->categorySpecificTimeRewardRepository = $categorySpecificTimeRewardRepository;
        $this->categoryRepository = $categoryRepository;
        $this->_config = request('_config');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categorys = $this->categoryRepository->getPartial();
        return view($this->_config['view'],compact('categorys'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryRewardStore()
    {
        if(empty(request()->category_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Category select']));      
            return redirect()->back();
        }

        $this->categoryRewardRepository->create(request()->all());

        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Category Reward']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryRewardUpdate($id)
    {
        if(empty(request()->category_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Category select']));      
            return redirect()->back();
        }

        $this->categoryRewardRepository->update(request()->all(),$id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Category Reward']));

        return redirect()->route($this->_config['redirect']);
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function editCategoryReward($id)
    {
        $categoryreward = $this->categoryRewardRepository->edit($id);
        
        $categorys = $this->categoryRepository->getPartial();

        if ($categoryreward) {
            return view($this->_config['view'],compact('categoryreward','categorys'));
        }

        return redirect()->back();
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function editCategorySpecificReward($id)
    {
        $categoryreward = $this->categorySpecificTimeRewardRepository->edit($id);
        
        $categorys = $this->categoryRepository->getPartial();

        if ($categoryreward) {
            return view($this->_config['view'],compact('categoryreward','categorys'));
        }

        return redirect()->back();

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorySpecificTimeRewardStore()
    {
        if(empty(request()->category_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Category select']));      
            return redirect()->back();
        }

        $this->categorySpecificTimeRewardRepository->create(request()->all());

        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Category Specific Time Reward']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorySpecificTimeRewardUpdate($id)
    {
        if(empty(request()->category_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Category select']));      
            return redirect()->back();
        }

        $this->categorySpecificTimeRewardRepository->update(request()->all(),$id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Category Specific Time Reward']));

        return redirect()->route($this->_config['redirect']);
    }
   
}