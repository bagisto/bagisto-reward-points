@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.products') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('rewards::app.rewards.products') }}</h1>
            </div>

            <div class="page-action">
                <div class="export-import" @click="showModal('downloadDataGrid')">
                    <i class="export-icon"></i>
                    <span>
                        {{ __('admin::app.export.export') }}
                    </span>
                </div>
                <a href="{{ route('admin.reward.product.addproductspecificreward') }}" class="btn btn-lg btn-primary">
                    {{ __('rewards::app.rewards.add-product-specific-reward') }}
                </a>
            </div>
        </div>

        <div class="page-content">
     


            
            @inject('productSpecificTimeRewardGrid', 'Webkul\Rewards\DataGrids\ProductRewardSpecificTimeDataGrid')
            {!! $productSpecificTimeRewardGrid->render() !!}
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
    @include('admin::export.export', ['gridName' => $productSpecificTimeRewardGrid])
@endpush
