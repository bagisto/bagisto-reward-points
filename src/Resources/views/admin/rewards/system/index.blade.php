@extends('admin::layouts.content')

@inject('moduleReward', 'Webkul\Rewards\Helpers\ModuleHelper')

@section('page_title')
    {{ __('rewards::app.rewards.system-details') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('rewards::app.rewards.system-details') }}</h1>
            </div>

            @if ($moduleReward->checkModuleStatus())
                <div class="page-action">
                    <div class="export-import" @click="showModal('downloadDataGrid')">
                        <i class="export-icon"></i>
                        <span>
                            {{ __('admin::app.export.export') }}
                        </span>
                    </div>
                </div>
            @endif
        </div>

        <div class="page-content">
            @if ($moduleReward->checkModuleStatus())
                @inject('SystemDetailRewardPoints', 'Webkul\Rewards\DataGrids\SystemDetailRewardPoints')
                {!! $SystemDetailRewardPoints->render() !!}      
            @else
                  <p>Please Enable the Module to See the Customer Rewards</p>                
            @endif
        </div>
        </form>
    </div>

    <modal id="downloadDataGrid" :is-open="modalIds.downloadDataGrid">
        <h3 slot="header">{{ __('admin::app.export.download') }}</h3>
        <div slot="body">
            <export-form></export-form>
        </div>
    </modal>
@stop

@if ($moduleReward->checkModuleStatus())
    @push('scripts')
        @include('admin::export.export', ['gridName' => $SystemDetailRewardPoints])
    @endpush
@endif
