@extends('admin::layouts.content')

@section('page_title')
    {{ __('rewards::app.rewards.system-details') }}
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{$customer->name}} {{ __('rewards::app.rewards.system-details') }}</h1>
            </div>

            <div class="page-action">
                <div class="export-import" @click="showModal('downloadDataGrid')">
                    <i class="export-icon"></i>
                    <span>
                        {{ __('admin::app.export.export') }}
                    </span>
                </div>

            </div>
        </div>

        <div class="page-content">
            @inject('SystemDetailByCustomerDataGrid', 'Webkul\Rewards\DataGrids\SystemDetailByCustomerDataGrid')
            {!! $SystemDetailByCustomerDataGrid->render() !!}
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

@push('scripts')
    @include('admin::export.export', ['gridName' => $SystemDetailByCustomerDataGrid])
@endpush
