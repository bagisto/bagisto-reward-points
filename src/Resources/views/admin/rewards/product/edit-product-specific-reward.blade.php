@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.products') }}
@stop

@section('content')
<form method="post" action="{{route('admin.reward.product.updateproductspecificReward',$productreward->id)}}">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('rewards::app.rewards.products') }}</h1>
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
                <input type="text" v-validate="" class="control" id="reward_points" name="reward_points" value="{{$productreward->reward_points}}"
                        data-vv-as="">
                </div>
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.product') }}</label>
                    <select v-validate="" class="control" id="status" name="product_id" data-vv-as="">
                        <option value="" hidden>Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->product_id }}" @if ($product->product_id == $productreward->product_id)
                                selected
                            @endif>{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.start_date') }}</label>
                    <input type="datetime-local" v-validate="" class="control" id="" name="start_time" value="{{\Carbon\Carbon::parse($productreward->start_time)->toDateTimeLocalString()}}"
                        data-vv-as=";">
                </div>
                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.end_date') }}</label>
                    <input type="datetime-local" v-validate="" class="control" id="" name="end_time" value="{{\Carbon\Carbon::parse($productreward->end_time)->toDateTimeLocalString()}}"
                        data-vv-as="&quot;Enter Points&quot;">
                </div>

                <div class="control-group">
                    <label for="">{{ __('rewards::app.rewards.status') }}</label>
                    <select v-validate="" class="control" id="status" name="status" data-vv-as="">
                        <option value="">Select Status</option>
                        <option value="1" @if ($productreward->status == 1)
                            selected
                        @endif>Active</option>
                        <option value="0" @if ($productreward->status == 0)
                            selected
                        @endif>Inactive</option>
                    </select>
                </div>
            </div>
          
        </div>
  
    </div>

   
</form>
@stop