@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.categorys') }}
@stop

@section('content')

        @csrf
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{ __('rewards::app.rewards.categorys') }}</h1>
                </div>

                <div class="page-action">
                    <div class="export-import" @click="showModal('downloadDataGrid')">
                        <i class="export-icon"></i>
                        <span>
                            {{ __('admin::app.export.export') }}
                        </span>
                    </div>
                    <a href="{{ route('admin.reward.category.addcategoryreward') }}" class="btn btn-lg btn-primary">
                        {{ __('rewards::app.rewards.add-category-reward') }}
                    </a>
                </div>
            </div>

            <div class="page-content">
    
                
                @inject('orderGrid', 'Webkul\Rewards\DataGrids\CategoryRewardDataGrid')
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
