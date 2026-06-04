<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Rewards\DataGrids\CategoryRewardSpecificTimeDataGrid;
use Webkul\Rewards\Repositories\CategoryRewardRepository;
use Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository;

class CategorySpecificRewardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected CategoryRepository $categoryRepository,
        protected CategoryRewardRepository $categoryRewardRepository,
        protected CategorySpecificTimeRewardRepository $categorySpecificTimeRewardRepository,
    ) {}

    /**
     * Show the form for creating a new resource for category specific time.
     *
     * @return View
     */
    public function specificIndex()
    {
        if (request()->ajax()) {
            return app(CategoryRewardSpecificTimeDataGrid::class)->toJson();
        }

        return view('rewards::admin.rewards.category.specific-time.index-category-specific');
    }

    /**
     * Show the form for creating a new resource for category specific time.
     *
     * @return View
     */
    public function specificCreate()
    {
        return view('rewards::admin.rewards.category.specific-time.add-category-specific-reward');
    }

    /**
     * search a category
     *
     * @return void
     */
    public function searchCategoriesSpecific()
    {
        $searchQuery = request()->input('query');

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $categoryRewardIds = $this->categorySpecificTimeRewardRepository->where('end_time', '<', $now)
            ->get()
            ->pluck('category_id');
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $categories = $this->categoryRepository->getPartial();

        $categories = collect($categories)
            ->skip('1')
            ->reject(function ($category) use ($categoryRewardIds) {
                return $categoryRewardIds->contains($category['id']);
            })
            ->filter(function ($category) use ($searchQuery) {
                return stripos($category['name'], $searchQuery) !== false;
            })
            ->values();

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function specificStore()
    {
        request()->validate([
            'start_time' => 'required|date|after:yesterday',
            'end_time' => 'required|date|after:start_time',
            'category_id' => 'required',
        ], [
            'category_id.required' => 'The category field is required.',
        ]);

        if (empty(request()->category_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.category.index.error-category'));

            return redirect()->back();
        }

        $this->categorySpecificTimeRewardRepository->create(request()->only([
            'reward_points',
            'category_id',
            'start_time',
            'end_time',
            'status',
        ]));

        session()->flash('success', trans('rewards::app.admin.rewards.category.index.create-success'));

        return redirect()->route('admin.reward.category.category_specific_time');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return View
     */
    public function specificEdit($id)
    {
        $categoryReward = $this->categorySpecificTimeRewardRepository->find($id);

        if ($categoryReward) {
            return view('rewards::admin.rewards.category.specific-time.edit-category-specific-reward', compact('categoryReward'));
        }

        return redirect()->back();
    }

    /**
     * search a category
     *
     * @param  mixed  $id
     * @return void
     */
    public function searchCategoriesSpecificUpdate($id)
    {
        $searchQuery = request()->input('query');

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $categoryReward = $this->categorySpecificTimeRewardRepository->find($id);

        $categoryRewardIds = $this->categorySpecificTimeRewardRepository->where('end_time', '<', $now)
            ->get()
            ->pluck('category_id')
            ->filter(function ($categoryId) use ($categoryReward) {
                return $categoryId !== $categoryReward->category_id;
            });

        $categories = $this->categoryRepository->getPartial();

        $categories = collect($categories)
            ->skip('1')
            ->reject(function ($category) use ($categoryRewardIds) {
                return $categoryRewardIds->contains($category['id']);
            })
            ->filter(function ($category) use ($searchQuery) {
                return stripos($category['name'], $searchQuery) !== false;
            })
            ->values();

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function specificUpdate($id)
    {
        request()->validate([
            'start_time' => 'required|date|after:yesterday',
            'end_time' => 'required|date|after:start_time',
            'category_id' => 'required',
        ], [
            'category_id.required' => 'The category field is required.',
        ]);

        if (empty(request()->category_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.category.index.error-category'));

            return redirect()->back();
        }

        $this->categorySpecificTimeRewardRepository->update(request()->all([
            'reward_points',
            'category_id',
            'start_time',
            'end_time',
            'status',
        ]), $id);

        session()->flash('success', trans('rewards::app.admin.rewards.category.index.update-success'));

        return redirect()->route('admin.reward.category.category_specific_time');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroySpecific($id)
    {
        try {
            Event::dispatch('reward.category.specific.delete.before', $id);

            $this->categorySpecificTimeRewardRepository->delete($id);

            Event::dispatch('reward.category.specific.delete.after', $id);

            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.category.index.delete-success')]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.category.index.delete-failed')], 500);
        }
    }

    /**
     * Mass delete the category rewards for specific time.
     */
    public function massDestroySpecific(MassDestroyRequest $massDestroyRequest): JsonResponse
    {
        $categoryRewardIds = $massDestroyRequest->input('indices');

        try {
            Event::dispatch('reward.category.specific.delete.before', $categoryRewardIds);

            $this->categorySpecificTimeRewardRepository->whereIn('id', $categoryRewardIds)->delete();

            Event::dispatch('reward.category.specific.delete.after', $categoryRewardIds);

            return new JsonResponse([
                'message' => trans('rewards::app.admin.rewards.category.index.datagrid.mass-delete-success'),
            ], 200);
        } catch (\Exception $e) {
            return new JsonResponse([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Mass update the category rewards for specific time.
     */
    public function massUpdateSpecific(MassUpdateRequest $massUpdateRequest): JsonResponse
    {
        $categoryRewardIds = $massUpdateRequest->input('indices');

        foreach ($categoryRewardIds as $categoryRewardId) {
            Event::dispatch('reward.category.specific.update.before', $categoryRewardId);

            $categoryReward = $this->categorySpecificTimeRewardRepository->update([
                'status' => $massUpdateRequest->input('value'),
            ], $categoryRewardId);

            Event::dispatch('reward.category.specific.update.after', $categoryReward);
        }

        return new JsonResponse([
            'message' => trans('rewards::app.admin.rewards.category.index.datagrid.mass-update-success'),
        ], 200);
    }
}
