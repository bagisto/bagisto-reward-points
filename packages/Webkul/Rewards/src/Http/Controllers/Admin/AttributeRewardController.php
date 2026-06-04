<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Rewards\DataGrids\AttributeRewardDataGrid;
use Webkul\Rewards\Repositories\AttributeRewardRepository;

class AttributeRewardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected AttributeRepository $attributeRepository,
        protected AttributeRewardRepository $attributeRewardRepository,
    ) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(AttributeRewardDataGrid::class)->toJson();
        }

        return view('rewards::admin.rewards.attributes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $attributeRewardIds = $this->attributeRewardRepository->pluck('attribute_id');

        $attributes = $this->attributeRepository->latest()->get();

        $attributes = collect($attributes)
            ->reject(function ($attribute) use ($attributeRewardIds) {
                return $attributeRewardIds->contains($attribute['id']);
            })
            ->values();

        return view('rewards::admin.rewards.attributes.create', compact('attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->validate(request(), [
            'reward_points' => 'required|integer',
            'attribute_id' => 'required',
            'status' => 'required',
        ]);

        $this->attributeRewardRepository->create(request()->only([
            'reward_points',
            'attribute_id',
            'status',
        ]));

        session()->flash('success', trans('rewards::app.admin.rewards.attributes.index.create-success'));

        return redirect()->route('admin.reward.attribute.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $attributesReward = $this->attributeRewardRepository->find($id);

        $attributeRewardIds = $this->attributeRewardRepository->get()
            ->pluck('attribute_id')
            ->filter(function ($attributeId) use ($attributesReward) {
                return $attributeId !== $attributesReward->attribute_id;
            });

        $attributes = $this->attributeRepository->latest()->get();

        $attributes = collect($attributes)
            ->reject(function ($attribute) use ($attributeRewardIds) {
                return $attributeRewardIds->contains($attribute['id']);
            })
            ->values();

        if ($attributesReward) {
            return view('rewards::admin.rewards.attributes.edit', compact('attributesReward', 'attributes'));
        }

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $this->validate(request(), [
            'reward_points' => 'required|integer',
            'attribute_id' => 'required',
            'status' => 'required',
        ]);

        $this->attributeRewardRepository->update(request()->only([
            'reward_points',
            'attribute_id',
            'status',
        ]), $id);

        session()->flash('success', trans('rewards::app.admin.rewards.attributes.index.update-success'));

        return redirect()->route('admin.reward.attribute.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id): JsonResponse
    {
        try {
            Event::dispatch('reward.attribute.delete.before', $id);

            $this->attributeRewardRepository->delete($id);

            Event::dispatch('reward.attribute.delete.after', $id);

            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.attributes.index.delete-success')]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.attributes.index.delete-failed')], 500);
        }
    }

    /**
     * Mass delete Attribute rewards.
     */
    public function massDestroy(MassDestroyRequest $massDestroyRequest): JsonResponse
    {
        $attributeRewardIds = $massDestroyRequest->input('indices');

        try {
            Event::dispatch('reward.attribute.delete.before', $attributeRewardIds);

            $this->attributeRewardRepository->whereIn('id', $attributeRewardIds)->delete();

            Event::dispatch('reward.attribute.delete.after', $attributeRewardIds);

            return new JsonResponse([
                'message' => trans('rewards::app.admin.rewards.attributes.index.datagrid.mass-delete-success'),
            ], 200);
        } catch (\Exception $e) {
            return new JsonResponse([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Mass updated the attribute rewards.
     */
    public function massUpdate(MassUpdateRequest $massUpdateRequest): JsonResponse
    {
        $attributeRewardIds = $massUpdateRequest->input('indices');

        foreach ($attributeRewardIds as $attributeRewardId) {
            Event::dispatch('reward.attribute.update.before', $attributeRewardId);

            $attributeReward = $this->attributeRewardRepository->update([
                'status' => $massUpdateRequest->input('value'),
            ], $attributeRewardId);

            Event::dispatch('reward.attribute.update.after', $attributeReward);
        }

        return new JsonResponse([
            'message' => trans('rewards::app.admin.rewards.attributes.index.datagrid.mass-update-success'),
        ], 200);
    }
}
