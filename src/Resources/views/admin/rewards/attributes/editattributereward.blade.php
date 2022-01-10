@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.attributes') }}
@stop

@section('content')
    <form method="post" action="{{ route('admin.reward.attribute.updateAttributeReward', $result->id) }}">
        @csrf
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{ __('rewards::app.rewards.attributes') }}</h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('rewards::app.rewards.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    <div class="control-group">
                        <label for="">{{ __('rewards::app.rewards.enter-reward-points') }}</label>
                        <input type="text" v-validate="" class="control" id="" name="reward_points"
                            value="{{ $result->reward_points }}" data-vv-as="&quot;Enter Points&quot;">
                    </div>
                    <div class="control-group">
                        <label for=""> {{ __('rewards::app.rewards.attribute') }} </label>
                        <select v-validate="" class="control" id="" name="attribute_id" data-vv-as="">
                            <option value="">Select Attribute</option>
                            @foreach ($attributes as $item)
                                <option value="{{ $item->id }}" @if ($result->attribute_id == $item->id)
                                    selected
                            @endif>{{ $item->admin_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="control-group">
                        <label for=""> {{ __('rewards::app.rewards.status') }} </label>
                        <select v-validate="" class="control" id="" name="status" data-vv-as="">
                            <option value="">Select Status</option>
                            <option value="1" @if ($result->status == 1)
                                selected
                            @endif>Active</option>
                            <option value="0" @if ($result->status == 0)
                                selected
                            @endif>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
