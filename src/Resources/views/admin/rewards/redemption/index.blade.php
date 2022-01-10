@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.redemption') }}
@stop

@section('content')
    <form method="post" action="{{ route('admin.reward.redemption.update') }}">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{ __('rewards::app.rewards.redemption') }}</h1>
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
                    <div class="control-group" style="margin-top: 5px;">
                        <h4> {{ __('rewards::app.rewards.redemption-cart') }}</h4>
                        <span class="checkbox">
                            <input type="checkbox" id="redemp_over_subtotal" @if ($data && $data->redemp_over_subtotal == 1)
                                checked
                            @endif  name="redemp_over_subtotal" value="1">
                            <label class="checkbox-view" for="redemp_over_subtotal"></label>
                                {{ __('rewards::app.rewards.redemption-cart-label') }}
                        </span>
                    </div>
                    <div class="control-group" style="margin-top: 5px;">
                        <h4> {{ __('rewards::app.rewards.conversion-rate') }}</h4>
                        <div class="row" style="justify-content: flex-start !important">
                            <div class="col-md-2">
                                <input type="number" v-validate="" class="control" id="points" name="points"
                                value="@if($data && $data->points){{$data->points}}@endif">&nbsp;
                                Points
                                =
                            </div>
                            <div class="col-md-2">
                               $ <input type="number" v-validate="" class="control" id="conversion_rate" name="conversion_rate"
                                value="@if($data && $data->conversion_rate == 1){{$data->conversion_rate}}@endif" 
                                >
                            </div>
                        </div>
                    </div>
                    <div class="control-group" style="margin-top: 5px;">
                        <h4> {{ __('rewards::app.rewards.enable-apply-points') }}</h4>
                        <span class="checkbox">
                            <input type="checkbox" id="apply_points_checkout" @if ($data && $data->apply_points_checkout == 1)
                            checked
                             @endif  name="apply_points_checkout" value="1">

                            <label class="checkbox-view" for="apply_points_checkout"></label>
                                {{ __('rewards::app.rewards.enable-apply-points-label') }}
                        </span>
                    </div>
                </div>
            </div>
    </form>
    </div>
    </form>
@stop

