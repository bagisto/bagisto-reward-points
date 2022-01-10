<?php

namespace Webkul\Rewards\Http\Controllers;


use Webkul\Product\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\AttributeRewardRepository;
use Webkul\Attribute\Repositories\AttributeRepository;

class AttributeRewardController extends Controller
{
    /**
     * AttributeRepository object
     *
     * @var Webkul\Rewards\Repositories\AttributeRepository
     */

    protected $attributeRepository;

    /**
     * AttributeRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\AttributeRewardRepository
     */

    protected $attributeRewardRepository;


    /**
     * Create a new controller instance.
     * @param  \Webkul\Rewards\Repositories\AttributeRepository  $attributeRepository
     * @param  Webkul\Rewards\Repositories\AttributeRewardRepository  $attributeRewardRepository
     * @return void
     */


    public function __construct(
        AttributeRewardRepository $attributeRewardRepository,
        AttributeRepository $attributeRepository
    ) {       
        $this->attributeRepository = $attributeRepository;
        $this->attributeRewardRepository = $attributeRewardRepository;
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

        $attributes = $this->attributeRepository->latest()->get();
        
        return view($this->_config['view'], compact('attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->attributeRewardRepository->create(request()->all());
        
        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Cart Reward']));
        
        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $result = $this->attributeRewardRepository->edit($id);
        
        $attributes = $this->attributeRepository->latest()->get();

        return view($this->_config['view'], compact('result', 'attributes'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = request()->all();

        $cart = $this->attributeRewardRepository->update($data, $id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Cart Reward']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $this->attributeRewardRepository->delete($id);

            session()->flash('success', trans('admin::app.response.delete-success', ['name' => 'Cart Reward']));

            return response()->json(['message' => true], 200);
        } catch (\Exception $e) {
            report($e);

            session()->flash('error', trans('admin::app.response.delete-failed', ['name' => 'Cart Reward']));
        }

        return response()->json(['message' => false], 400);
    }
}
