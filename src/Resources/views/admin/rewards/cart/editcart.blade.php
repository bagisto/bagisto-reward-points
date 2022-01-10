@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.cart') }}
@stop

@section('content')
    <form method="post" action="{{ route('admin.reward.cart.updatecartReward',$cart->id) }}">
        @csrf
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{ __('rewards::app.rewards.cart') }}</h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.update') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.enter-reward-points') }}</label>
                    <input type="number" v-validate="" class="control" id="" name="reward_points" value="{{$cart->reward_points}}"
                            data-vv-as="&quot;Enter Points&quot;">
                    </div>
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.amount_from') }}</label>
                        <input type="number" v-validate="" class="control" id="" name="amount_from" value="{{$cart->amount_from}}"
                            data-vv-as="&quot;Enter Points&quot;">
                    </div>
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.amount_to') }}</label>
                        <input type="number" v-validate="" class="control" id="" name="amount_to" value="{{$cart->amount_to}}"
                            data-vv-as="&quot;Enter Points&quot;">
                    </div>
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.start_date') }}</label>
                        <input type="date" v-validate="" class="control" id="" name="start_date" value="{{$cart->start_date}}"
                            data-vv-as="&quot;Enter Points&quot;">
                    </div>
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.end_date') }}</label>
                        <input type="date" v-validate="" class="control" id="" name="end_date" value="{{$cart->end_date}}"
                            data-vv-as="&quot;Enter Points&quot;">
                    </div>
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.status') }}</label>
                        <select v-validate="" class="control" id="" name="status" data-vv-as="">
                            <option value="">Select Status</option>
                            <option value="1" @if ($cart->status == 1)
                                selected
                            @endif>Active</option>
                            <option value="0" @if ($cart->status == 0)
                                selected
                            @endif>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
