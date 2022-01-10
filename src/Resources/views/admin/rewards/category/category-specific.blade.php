@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.category-specific-time') }}
@stop

@section('content')
 
    
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{ __('rewards::app.rewards.category-specific-time') }}</h1>
                </div>

                <div class="page-action">
                    <div class="export-import" @click="showModal('downloadDataGrid')">
                        <i class="export-icon"></i>
                        <span>
                            {{ __('admin::app.export.export') }}
                        </span>
                    </div>
                    <a href="{{ route('admin.reward.category.addcategoryspecificreward') }}" class="btn btn-lg btn-primary">
                        {{ __('rewards::app.rewards.add-category-specific-reward') }}
                    </a>
                </div>
            </div>

            <div class="page-content">

                @inject('orderGrid', 'Webkul\Rewards\DataGrids\CategoryRewardSpecificTimeDataGrid')
                {!! $orderGrid->render() !!}
            </div>
        </div>

        <modal id="downloadDataGrid" :is-open="modalIds.downloadDataGrid">
            <h3 slot="header">{{ __('admin::app.export.download') }}</h3>
            <div slot="body">
                <export-form></export-form>
            </div>
        </modal>

@stop

@push('scripts')
    @include('admin::export.export', ['gridName' => $orderGrid])
@endpush
