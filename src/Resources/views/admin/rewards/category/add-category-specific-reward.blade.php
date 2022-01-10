@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.category-specific-time') }}
@stop

@section('content')
<form method="post" action="{{route('admin.reward.category.addCategorySpecificTimeReward')}}">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('rewards::app.rewards.category-specific-time') }}</h1>
            </div>

            <div class="page-action">
                <button type="submit" class="btn btn-lg btn-primary " style="margin-left:10px ">
                    {{ __('rewards::app.rewards.save-btn-title') }}
                </button>
            </div>
        </div>

        <div class="page-content">
     
            @csrf

            <div class="form-container">
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.enter-reward-points') }}</label>
                    <input type="text" v-validate="" class="control" id="" name="reward_points" value=""
                        data-vv-as="&quot;Enter Points&quot;">
                </div>
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.category') }}</label>
                    <select v-validate="" class="control" id="status" name="category_id" data-vv-as="">
                        <option value="" hidden>Select Category</option>
                        @foreach ($categorys as $category)
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.start_date') }}</label>
                    <input type="datetime-local" v-validate="" class="control" id="" name="start_time" value=""
                        data-vv-as="&quot;Enter Points&quot;">
                </div>
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.end_date') }}</label>
                    <input type="datetime-local" v-validate="" class="control" id="" name="end_time" value=""
                        data-vv-as="&quot;Enter Points&quot;">
                </div>
            
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.status') }}</label>
                    <select v-validate="" class="control" id="" name="status" data-vv-as="">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            
        
          
        </div>
  
    </div>

   
</form>
@stop
