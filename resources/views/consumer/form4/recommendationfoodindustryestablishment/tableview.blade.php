@extends('consumer.layouts.employee.employee')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <ul class="d-flex gap-2">
                                <a type="button" class="btn btn-soft btn-info" href="{{route('consumer.dashboard')}}"><em class="icon ni ni-arrow-left"></em> <span>Dashboard</span></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                        <thead class="table-light">
                            <tr>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.S.N.') }}</span></th>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Name') }}</span></th>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Address') }}</span></th>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Owner Name') }}</span></th>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Budget') }}</span></th>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Capacity') }}</span></th>
                                <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Status') }}</span></th>
                                <th class="tb-col" data-sortable="false"><span class="overline-title">{{ __('lang.Action') }}</span></th>
                            </tr>
                        </thead>
                        <tbody >
                            @php
                            $i = 1;
                            @endphp
                            <tr>
                                <td class="tb-col tb-col-center">{{ $i++ }}</td>
                                <td class="tb-col tb-col-center">{{ $newregistration->industryName }}</td>
                                <td class="tb-col tb-col-center">{{ $newregistration->industryAddress }}</td>
                                <td class="tb-col tb-col-center">{{ $newregistration->industryOwnerName }}</td>
                                <td class="tb-col tb-col-center">{{ $newregistration->industryBudget }}</td>
                                <td class="tb-col tb-col-center">{{ $newregistration->industryCapacity }}</td>
                                <td class="tb-col tb-col-center">
                                    @if ($newregistration->newlicenseissue_status == null)
                                    <span class="badge text-bg-warning">Pending</span>
                                    @elseif($newregistration->newlicenseissue_status == 'approved')
                                    <span class="badge text-bg-success">Approved</span>
                                    @else
                                    <span class="badge text-bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td class="tb-col tb-col-center">
                                    <a type="button" class="btn btn-outlined-primary" href="{{route('consumer.form4.recommendationfoodindustryestablishment.show', $newregistration->recommendationfoodindustryestablishment_id)}}">
                                        <span>View</span>
                                    </a>
                                    <a type="button" class="btn btn-outlined-primary" href="{{route('consumer.form4.recommendationfoodindustryestablishment.edit', $newregistration->recommendationfoodindustryestablishment_id)}}">
                                        <span>Edit</span>
                                    </a>            
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- Add Modal --}}
                </div>
                @endsection
            </div>
        </div>
    </div>
</div>