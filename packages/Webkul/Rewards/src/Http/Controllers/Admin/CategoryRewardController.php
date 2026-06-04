<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Rewards\DataGrids\CategoryRewardDataGrid;
use Webkul\Rewards\Repositories\CategoryRewardRepository;
use Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository;

class CategoryRewardController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(CategoryRewardDataGrid::class)->toJson();
        }

        return view('rewards::admin.rewards.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $categoryRewards = $this->categoryRewardRepository->get()->pluck('category_id');

        $categories = $this->categoryRepository->getPartial();

        $categories = collect($categories)
            ->skip('1')
            ->reject(function ($category) use ($categoryRewards) {
                return $categoryRewards->contains($category['id']);
            })
            ->values();

        return view('rewards::admin.rewards.category.add-category-reward', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function searchCategories()
    {
        $searchQuery = request()->input('query');

        $categoryRewards = $this->categoryRewardRepository->get()->pluck('category_id');

        $categories = $this->categoryRepository->getPartial();

        $categories = collect($categories)
            ->skip(1)
            ->reject(function ($category) use ($categoryRewards) {
                return $categoryRewards->contains($category['id']);
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
    public function store()
    {
        $this->validate(request(), [
            'reward_points' => 'required|integer',
            'category_id' => 'required',
            'status' => 'required',
        ], [
            'category_id.required' => 'The category field is required.',
        ]);

        if (empty(request()->category_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.category.index.error-category'));

            return redirect()->back();
        }

        $this->categoryRewardRepository->create(request()->only([
            'reward_points',
            'category_id',
            'status',
        ]));

        session()->flash('success', trans('rewards::app.admin.rewards.category.index.create-success'));

        return redirect()->route('admin.reward.category.index');
    }

    /**
     * Edit the form for creating a new resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $categoryReward = $this->categoryRewardRepository->find($id);

        $rewardedCategoryIds = $this->categoryRewardRepository->get()
            ->pluck('category_id')
            ->filter(function ($categoryId) use ($categoryReward) {
                return $categoryId !== $categoryReward->category_id;
            });

        $categories = $this->categoryRepository->getPartial();

        $categories = collect($categories)
            ->skip('1')
            ->reject(function ($category) use ($rewardedCategoryIds) {
                return $rewardedCategoryIds->contains($category['id']);
            })
            ->values();

        if ($categoryReward) {
            return view('rewards::admin.rewards.category.edit-category-reward', compact('categoryReward', 'categories'));
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function searchCategoriesUpdate($id)
    {
        $searchQuery = request()->input('query');

        $categoryReward = $this->categoryRewardRepository->find($id);

        $rewardedCategoryIds = $this->categoryRewardRepository->get()
            ->pluck('category_id')
            ->filter(function ($categoryId) use ($categoryReward) {
                return $categoryId !== $categoryReward->category_id;
            });

        $categories = $this->categoryRepository->getPartial();

        $categories = collect($categories)
            ->skip('1')
            ->reject(function ($category) use ($rewardedCategoryIds) {
                return $rewardedCategoryIds->contains($category['id']);
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
    public function update($id)
    {
        $this->validate(request(), [
            'reward_points' => 'required|integer',
            'category_id' => 'required',
            'status' => 'required',
        ], [
            'category_id.required' => 'The category field is required.',
        ]);

        if (empty(request()->category_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.category.index.error-category'));

            return redirect()->back();
        }

        $this->categoryRewardRepository->update(request()->only([
            'reward_points',
            'category_id',
            'status',
        ]), $id);

        session()->flash('success', trans('rewards::app.admin.rewards.category.index.update-success'));

        return redirect()->route('admin.reward.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id): JsonResponse
    {
        try {
            Event::dispatch('reward.category.delete.before', $id);

            $this->categoryRewardRepository->delete($id);

            Event::dispatch('reward.category.delete.after', $id);

            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.products.index.delete-success')]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.products.index.delete-failed')], 500);
        }
    }

    /**
     * Mass delete the category rewards.
     */
    public function massDestroy(MassDestroyRequest $massDestroyRequest): JsonResponse
    {
        $categoryRewardIds = $massDestroyRequest->input('indices');

        try {

            Event::dispatch('reward.category.delete.before', $categoryRewardIds);

            $this->categoryRewardRepository->whereIn('id', $categoryRewardIds)->delete();

            Event::dispatch('reward.category.delete.after', $categoryRewardIds);

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
     * Mass update the category rewards.
     */
    public function massUpdate(MassUpdateRequest $massUpdateRequest): JsonResponse
    {
        $categoryRewardIds = $massUpdateRequest->input('indices');

        foreach ($categoryRewardIds as $categoryRewardId) {
            Event::dispatch('reward.category.update.before', $categoryRewardId);

            $categoryReward = $this->categoryRewardRepository->update([
                'status' => $massUpdateRequest->input('value'),
            ], $categoryRewardId);

            Event::dispatch('reward.category.update.after', $categoryReward);
        }

        return new JsonResponse([
            'message' => trans('rewards::app.admin.rewards.category.index.datagrid.mass-update-success'),
        ], 200);
    }
}
