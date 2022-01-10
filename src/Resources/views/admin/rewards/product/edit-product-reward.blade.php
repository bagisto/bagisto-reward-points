@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.products') }}
@stop

@section('content')
    <form method="post" action="{{ route('admin.reward.product.updateproductReward',$productreward->id) }}">
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
                        <select v-validate="" class="control" id="products" name="product_id" data-vv-as="">
                            <option value="" hidden>Select Product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->product_id }}" @if ($product->product_id == $productreward->product_id)
                                    selected
                                @endif>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.status') }}</label>
                        <select v-validate="" class="control" id="status" name="status" data-vv-as="">
                            
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
    </form>
    </div>

    </form>
@stop
