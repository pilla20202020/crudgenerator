@extends('dftqc.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">{{ __('lang.Regardingissuancelicense') }}</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Regardingissuancelicense') }}</a></li>
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Regardingissuancelicense') }} {{ __('lang.Manage') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Regardingissuancelicense') }}
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <!-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Regardingissuancelicense","form8.regardingissuancelicense.create") !!}
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card">
                                <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                    <thead class="table-light">
                                        <tr>
                                        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Industry Name') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Industry Address') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Enrollment Date') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Submission Date') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">{{ __('lang.name Of Inspector') }}</span></th>
<th class="tb-col"><span class="overline-title">lang.dateOfInspection</span></th>
<th class="tb-col"><span class="overline-title">lang.correctionDate</span></th>
<th class="tb-col"><span class="overline-title">lang.certificateNo</span></th>
<th class="tb-col"><span class="overline-title">lang.dissatisfaction</span></th>
<th class="tb-col"><span class="overline-title">lang.satisfaction</span></th>
<th class="tb-col"><span class="overline-title">lang.foodName</span></th>
<th class="tb-col"><span class="overline-title">lang.labelName</span></th>
<th class="tb-col"><span class="overline-title">lang.packingSize</span></th>
<th class="tb-col"><span class="overline-title">lang.alias</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Status') }}</span></th>

<th class="tb-col" data-sortable="false"><span
                                                    class="overline-title">{{ __('lang.Action') }}</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->industryName }}</td>
<td class="tb-col">{{ $item->industryAddress }}</td>
<td class="tb-col">{{ $item->enrollmentDate }}</td>
<td class="tb-col">{{ $item->submissionDate }}</td>
<!-- <td class="tb-col">{{ $item->nameOfInspector }}</td>
<td class="tb-col">{{ $item->dateOfInspection }}</td>
<td class="tb-col">{{ $item->correctionDate }}</td>
<td class="tb-col">{{ $item->certificateNo }}</td>
<td class="tb-col">{{ $item->dissatisfaction }}</td>
<td class="tb-col">{{ $item->satisfaction }}</td>
<td class="tb-col">{{ $item->foodName }}</td>
<td class="tb-col">{{ $item->labelName }}</td>
<td class="tb-col">{{ $item->packingSize }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'form8.regardingissuancelicense.show',$item->regardingissuancelicense_id) !!}
                                                </li>
                                               <!-- <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'form8.regardingissuancelicense.edit',$item->regardingissuancelicense_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'form8.regardingissuancelicense.destroy',$item->regardingissuancelicense_id) !!}</li> -->
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.AddRegardingissuancelicense') }}</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" data-simplebar>
                          <div class="card h-100">
                                <div class="card-body">
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div id="addConvasByAjax">
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg editoffcanvas" id="editoffcanvas">
                            <div class="offcanvas-header border-bottom border-light">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.EditRegardingissuancelicense') }}<h5><button type="button" class="btn-close"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar>
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div id="editConvasByAjax">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Edit Modal --}}

                            {{-- Edit Modal --}}
                            <div class="offcanvas offcanvas-end offcanvas-size-xxlg showoffcanvas" id="showoffcanvas">

                            </div>
                            {{-- Edit Modal --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    