@extends('dftqc.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">{{ __('lang.Analysis Report') }}</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Analysis Report') }} </a></li>
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Analysis Report') }} {{ __('lang.Manage') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Analysis Report') }}
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <!-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Analysis Report","form10.analysisreport.create") !!}
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
<!-- <th class="tb-col"><span class="overline-title">lang.sampleDetails</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">lang.invoiceDate</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">lang.sampleRegistartionDate</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Sample Code') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.packingCondition</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">lang.analysisRequired</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">lang.analysisStartDate</span></th>
<th class="tb-col"><span class="overline-title">lang.analysisEndDate</span></th>
<th class="tb-col"><span class="overline-title">lang.parameter</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Test Method') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Unit') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.output</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Prescribed criteria') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.mood</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">lang.alias</span></th> -->
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
                                            <!-- <td class="tb-col">{{ $item->sampleDetails }}</td> -->
<!-- <td class="tb-col">{{ $item->invoiceDate }}</td>
<td class="tb-col">{{ $item->sampleRegistartionDate }}</td> -->
<td class="tb-col">{{ $item->sampleCode }}</td>
<!-- <td class="tb-col">{{ $item->packingCondition }}</td>
<td class="tb-col">{{ $item->analysisRequired }}</td>
<td class="tb-col">{{ $item->analysisStartDate }}</td>
<td class="tb-col">{{ $item->analysisEndDate }}</td>
<td class="tb-col">{{ $item->parameter }}</td> -->
<td class="tb-col">{{ $item->testMethod }}</td>
<td class="tb-col">{{ $item->theUnit }}</td>
<!-- <td class="tb-col">{{ $item->output }}</td> -->
<td class="tb-col">{{ $item->prescribedcriteria }}</td>
<!-- <td class="tb-col">{{ $item->mood }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'form10.analysisreport.show',$item->analysisreport_id) !!}
                                                </li>
                                               <!-- <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'form10.analysisreport.edit',$item->analysisreport_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'form10.analysisreport.destroy',$item->analysisreport_id) !!}</li> -->
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Add Analysis Report') }}</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Edit Analysis Report') }}<h5><button type="button" class="btn-close"
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
    