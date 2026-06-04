<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Rewards\DataGrids\CartRewardDataGrid;
use Webkul\Rewards\Repositories\CartRewardRepository;

class CartRewardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected CartRewardRepository $cartRewardRepository) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(CartRewardDataGrid::class)->toJson();
        }

        return view('rewards::admin.rewards.cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('rewards::admin.rewards.cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function store()
    {
        request()->validate([
            'start_date' => 'required|date|after:yesterday',
            'end_date' => 'required|date|after:start_date',
        ]);

        $this->cartRewardRepository->create(request()->only([
            'reward_points',
            'amount_from',
            'amount_to',
            'start_date',
            'end_date',
            'status',
        ]));

        session()->flash('success', trans('rewards::app.admin.rewards.cart.index.create-success'));

        return redirect()->route('admin.reward.cart.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $cart = $this->cartRewardRepository->find($id);

        return view('rewards::admin.rewards.cart.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update($id)
    {
        request()->validate([
            'start_date' => 'required|date|after:yesterday',
            'end_date' => 'required|date|after:start_date',
        ]);

        $this->cartRewardRepository->update(request()->only([
            'reward_points',
            'amount_from',
            'amount_to',
            'start_date',
            'end_date',
            'status',
        ]), $id);

        session()->flash('success', trans('rewards::app.admin.rewards.cart.index.update-success'));

        return redirect()->route('admin.reward.cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id): JsonResponse
    {
        try {
            Event::dispatch('reward.cart.delete.before', $id);

            $this->cartRewardRepository->delete($id);

            Event::dispatch('reward.cart.delete.after', $id);

            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.cart.index.delete-success')]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.cart.index.delete-failed')], 500);
        }
    }

    /**
     * Mass delete the cart rewards.
     */
    public function massDestroy(MassDestroyRequest $massDestroyRequest): JsonResponse
    {
        $cartRewardIds = $massDestroyRequest->input('indices');

        try {
            Event::dispatch('reward.cart.delete.before', $cartRewardIds);

            $this->cartRewardRepository->whereIn('id', $cartRewardIds)->delete();

            Event::dispatch('reward.cart.delete.after', $cartRewardIds);

            return new JsonResponse([
                'message' => trans('rewards::app.admin.rewards.cart.index.datagrid.mass-delete-success'),
            ], 200);
        } catch (\Exception $e) {
            return new JsonResponse([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Mass update the cart rewards.
     */
    public function massUpdate(MassUpdateRequest $massUpdateRequest): JsonResponse
    {
        $cartRewardIds = $massUpdateRequest->input('indices');

        foreach ($cartRewardIds as $cartRewardId) {
            Event::dispatch('reward.cart.update.before', $cartRewardId);

            $cartReward = $this->cartRewardRepository->update([
                'status' => $massUpdateRequest->input('value'),
            ], $cartRewardId);

            Event::dispatch('reward.cart.update.after', $cartReward);
        }

        return new JsonResponse([
            'message' => trans('rewards::app.admin.rewards.cart.index.datagrid.mass-update-success'),
        ], 200);
    }
}
