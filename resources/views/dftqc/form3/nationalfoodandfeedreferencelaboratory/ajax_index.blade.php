@extends('dftqc.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">{{ __('lang.Nationalfoodandfeedreferencelaboratory') }}</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Nationalfoodandfeedreferencelaboratory') }}</a></li>
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Nationalfoodandfeedreferencelaboratory') }} {{ __('lang.Manage') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Nationalfoodandfeedreferencelaboratory') }}
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <!-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Nationalfoodandfeedreferencelaboratory","form3.nationalfoodandfeedreferencelaboratory.create") !!}
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card">
                                <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                    <thead class="table-light">
                                        <tr>
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.S.N.') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Sample Number') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Date') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.sampleDetails</span></th>
<th class="tb-col"><span class="overline-title">lang.parameter</span></th>
<th class="tb-col"><span class="overline-title">lang.examinationFee</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">lang.voucherNumber</span></th>
<th class="tb-col"><span class="overline-title">lang.dateOfRemittanceRevenue</span></th>
<th class="tb-col"><span class="overline-title">lang.other</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->sampleNumber }}</td>
<td class="tb-col">{{ $item->date }}</td>
<!-- <td class="tb-col">{{ $item->sampleDetails }}</td>
<td class="tb-col">{{ $item->parameter }}</td>
<td class="tb-col">{{ $item->examinationFee }}</td>
<td class="tb-col">{{ $item->voucherNumber }}</td>
<td class="tb-col">{{ $item->dateOfRemittanceRevenue }}</td>
<td class="tb-col">{{ $item->other }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'form3.nationalfoodandfeedreferencelaboratory.show',$item->nationalfoodandfeedreferencelaboratory_id) !!}
                                                </li>
                                               <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'form3.nationalfoodandfeedreferencelaboratory.edit',$item->nationalfoodandfeedreferencelaboratory_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'form3.nationalfoodandfeedreferencelaboratory.destroy',$item->nationalfoodandfeedreferencelaboratory_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.AddNationalfoodandfeedreferencelaboratory') }}</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.EditNationalfoodandfeedreferencelaboratory') }}<h5><button type="button" class="btn-close"
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
    