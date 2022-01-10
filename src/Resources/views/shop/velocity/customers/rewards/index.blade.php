@extends('shop::customers.account.index')

@section('page_title')
    {{ __('rewards::app.account.reward_points.index.page-title') }}
@endsection


@inject('rewardPointRepository', 'Webkul\Rewards\Repositories\RewardPointRepository')

@php
  
  $totalrewardpoints = $rewardPointRepository->totalRewardPoints(auth()->guard('customer')->user()->id);
  
@endphp


@section('page-detail-wrapper')
    <div class="account-head mb-10">
        <span class="back-icon">
            <a href="{{ route('customer.account.index') }}">
                <i class="icon icon-menu-back"></i>
            </a>
        </span>

        <span class="account-heading"> Your Total Point {{$totalrewardpoints}} </span>
    </div>

  
        <div class="account-items-list">
            <div class="account-table-content">

                {!! app('Webkul\Rewards\DataGrids\RewardPointDataGrid')->render() !!}

            </div>
        </div>

@endsection