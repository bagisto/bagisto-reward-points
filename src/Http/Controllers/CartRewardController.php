<?php

namespace Webkul\Rewards\Http\Controllers;


use Webkul\Product\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\CartRewardRepository;

class CartRewardController extends Controller
{
    /**
     * CartRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CartRewardRepository
     */

    protected $cartRewardRepository;


    /**
     * Create a new controller instance.
     *
     * @param  Webkul\Rewards\Repositories\CartRewardRepository  $cartRewardRepository
     * @return void
     */


    public function __construct(
        CartRewardRepository $cartRewardRepository
    ) {
        $this->_config = request('_config');

        $this->cartRewardRepository = $cartRewardRepository;
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
        return view($this->_config['view']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->cartRewardRepository->create(request()->all());
        
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
        $cart = $this->cartRewardRepository->edit($id);
        return view($this->_config['view'], compact('cart'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Webkul\Product\Http\Requests\ProductForm  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = request()->all();

        $cart = $this->cartRewardRepository->update($data, $id);

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
                $this->cartRewardRepository->delete($id);

                session()->flash('success', trans('admin::app.response.delete-success', ['name' => 'Cart Reward']));

                return response()->json(['message' => true], 200);
            } catch (\Exception $e) {
                report($e);

                session()->flash('error', trans('admin::app.response.delete-failed', ['name' => 'Cart Reward']));
            }

            return response()->json(['message' => false], 400);
    }
}
