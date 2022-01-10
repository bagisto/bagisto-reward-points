@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.general') }}
@stop

@section('content')
    <form method="post" action="{{ route('admin.reward.general.store') }}">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{ __('rewards::app.rewards.general') }}</h1>
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
                        <label for="module_status">{{ __('rewards::app.rewards.module-status') }}</label>
                        <select v-validate="" class="control" id="module_status" name="module_status" data-vv-as="">
                            <option value="" hidden>Select {{ __('rewards::app.rewards.module-status') }}</option>
                            <option value="1" @if ($result)
                                @if ($result['module_status'] == 1)
                                    selected
                                @endif
                                @endif>Enable
                            </option>
                            <option value="0" @if ($result)
                                @if ($result['module_status'] == 0)
                                    selected
                                @endif
                                @endif>Disable
                            </option>
                        </select>
                    </div>

                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.reward-when-customer-register') }}</label>
                        <input type="number" v-validate="" class="control" id="customer_register" name="customer_register"
                            value="{{ $result ? $result['customer_register'] : '' }}" data-vv-as="">
                    </div>

                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.reward-when-customer-register-exp-days') }}</label>
                        <input type="number" v-validate="" class="control" id="" name="customer_register_exp_days"
                            value="{{ $result ? $result['customer_register_exp_days'] : '' }}">
                    </div>

                    <div class="control-group">
                        <label for="customer_dob">{{ __('rewards::app.rewards.reward-when-customer-dob') }}</label>
                        <input type="number" v-validate="" class="control" id="customer_dob" name="customer_dob"
                            value="{{ $result ? $result['customer_dob'] : '' }}" data-vv-as="">
                    </div>

                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.reward-when-customer-dob-exp-days') }}</label>
                        <input type="number" v-validate="" class="control" id="" name="customer_dob_exp_days"
                            value="{{ $result ? $result['customer_dob_exp_days'] : '' }}">
                    </div>


                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.reward-when-product-reviewed') }}</label>
                        <input type="number" v-validate="" class="control" id="customer_review" name="customer_review"
                            value="{{ $result ? $result['customer_review'] : '' }}" data-vv-as="">
                    </div>

                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.reward-when-product-reviewed-exp-days') }}</label>
                        <input type="number" v-validate="" class="control" id="customer_review"
                            name="customer_review_exp_days" value="{{ $result ? $result['customer_review_exp_days'] : '' }}"
                            data-vv-as="">
                    </div>

                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.reward-used-at-one-time') }}</label>
                        <input type="number" v-validate="" class="control" id="used_at_one_time" name="used_at_one_time"
                            value="{{ $result ? $result['used_at_one_time'] : '' }}" data-vv-as="">
                    </div>

                    <div class="control-group">
                        <label for="email_notification">{{ __('rewards::app.rewards.email-notification') }}</label>
                        <select v-validate="" class="control" id="email_notification" name="email_notification"
                            data-vv-as="">
                            <option value="" hidden>Select {{ __('rewards::app.rewards.module-status') }}</option>
                            <option value="1" @if ($result)
                                @if ($result['email_notification'] == 1)
                                    selected
                                @endif
                                @endif>Enable
                            </option>
                            <option value="0" @if ($result)
                                @if ($result['email_notification'] == 0)
                                    selected
                                @endif
                                @endif>Disable
                            </option>
                        </select>
                    </div>
                </div>
            </div>
    </form>
@stop
