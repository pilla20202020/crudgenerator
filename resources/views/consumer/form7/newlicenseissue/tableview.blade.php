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
                                        <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Type') }}</span></th>
                                        <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Industry Type') }}</span></th>
                                        <th class="tb-col tb-col-center"><span class="overline-title">{{ __('lang.Status') }}</span></th>
                                        <th class="tb-col tb-col-center" data-sortable="false"><span
                                                class="overline-title">{{ __('lang.Action') }}</span></th>
                                    </tr>
                                </thead>
                                <tbody>  
                                @php
                                        $i = 1;
                                    @endphp

                                    <tr>
                                            <td class="tb-col tb-col-center">{{ $i++ }}</td>
                                            <td class="tb-col tb-col-center">{{ $newlisence->industryName }}</td>
                                            <td class="tb-col tb-col-center">{{ $newlisence->industryType }}</td>
                                            <td class="tb-col tb-col-center">{!! $newlisence->status_name !!}</td>
                                            <td class="tb-col tb-col-center">
                                    @if ($newlisence->newlisence == null)
                                    <span class="badge text-bg-warning">Pending</span>
                                    @elseif($newlisence->newlisence == 'approved')
                                    <span class="badge text-bg-success">Approved</span>
                                    @else
                                    <span class="badge text-bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td class="tb-col tb-col-center">
                                    <a type="button" class="btn btn-outlined-primary" href="{{route('consumer.form7.newlicenseissue.show', $newlisence->newlicenseissue_id)}}">
                                        <span>View</span>
                                    </a>
                                    <a type="button" class="btn btn-outlined-primary" href="{{route('consumer.form7.newlicenseissue.edit', $newlisence->newlicenseissue_id)}}">
                                        <span>Edit</span>
                                    </a>            
                                </td>

                                </tbody>
                            </table>
                    {{-- Add Modal --}}
                </div>
                @endsection
            </div>
        </div>
    </div>
</div>