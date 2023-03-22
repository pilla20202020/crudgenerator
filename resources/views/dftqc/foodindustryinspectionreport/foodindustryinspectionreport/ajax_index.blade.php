@extends('dftqc.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">{{ __('lang.foodindustryinspectionreport.') }}</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.foodindustryinspectionreport.') }}</a></li>
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.foodindustryinspectionreport.') }} {{ __('lang.Manage') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.foodindustryinspectionreport.') }}
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <!-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","foodindustryinspectionreport.","foodindustryinspectionreport.foodindustryinspectionreport.create") !!}
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
<th class="tb-col"><span class="overline-title">{{ __('lang.Industry Name') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.addressTwo</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Propritor Name') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.management</span></th>
<th class="tb-col"><span class="overline-title">lang.estalishedDate</span></th>
<th class="tb-col"><span class="overline-title">lang.sanatathagharelu</span></th>
<th class="tb-col"><span class="overline-title">lang.majhaula</span></th>
<th class="tb-col"><span class="overline-title">lang.thulo</span></th>
<th class="tb-col"><span class="overline-title">lang.liyeko</span></th>
<th class="tb-col"><span class="overline-title">lang.naliyeko</span></th>
<th class="tb-col"><span class="overline-title">lang.renew</span></th>
<th class="tb-col"><span class="overline-title">lang.nonRenew</span></th>
<th class="tb-col"><span class="overline-title">lang.technical</span></th>
<th class="tb-col"><span class="overline-title">lang.prasasanik</span></th>
<th class="tb-col"><span class="overline-title">lang.sn</span></th>
<th class="tb-col"><span class="overline-title">lang.products</span></th>
<th class="tb-col"><span class="overline-title">lang.brand</span></th>
<th class="tb-col"><span class="overline-title">lang.time</span></th>
<th class="tb-col"><span class="overline-title">lang.area</span></th>
<th class="tb-col"><span class="overline-title">lang.packagingOne</span></th>
<th class="tb-col"><span class="overline-title">lang.packagingTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.udhyogOne</span></th>
<th class="tb-col"><span class="overline-title">lang.udhyogTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.productionOne</span></th>
<th class="tb-col"><span class="overline-title">lang.productionTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.batchNumberOne</span></th>
<th class="tb-col"><span class="overline-title">lang.upayog</span></th>
<th class="tb-col"><span class="overline-title">lang.samrichan</span></th>
<th class="tb-col"><span class="overline-title">lang.potential</span></th>
<th class="tb-col"><span class="overline-title">lang.proyog</span></th>
<th class="tb-col"><span class="overline-title">lang.swasthya</span></th>
<th class="tb-col"><span class="overline-title">lang.highlow</span></th>
<th class="tb-col"><span class="overline-title">lang.swikrit</span></th>
<th class="tb-col"><span class="overline-title">lang.sarsafai</span></th>
<th class="tb-col"><span class="overline-title">lang.tapkram</span></th>
<th class="tb-col"><span class="overline-title">lang.chara</span></th>
<th class="tb-col"><span class="overline-title">lang.timespan</span></th>
<th class="tb-col"><span class="overline-title">lang.hygiene</span></th>
<th class="tb-col"><span class="overline-title">lang.chetra</span></th>
<th class="tb-col"><span class="overline-title">lang.bathroom</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Condition') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Product Name') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Product Source') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.praichad</span></th>
<th class="tb-col"><span class="overline-title">lang.prayog</span></th>
<th class="tb-col"><span class="overline-title">lang.sample</span></th>
<th class="tb-col"><span class="overline-title">lang.conclusion</span></th>
<th class="tb-col"><span class="overline-title">lang.date</span></th>
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
                                            <td class="tb-col">{{ convertNumAccToLang($i++) }}</td><td class="tb-col">{{ $item->industryName }}</td>
<!-- <td class="tb-col">{{ $item->addressTwo }}</td> -->
<td class="tb-col">{{ $item->propritorName }}</td>
<!-- <td class="tb-col">{{ $item->management }}</td>
<td class="tb-col">{{ $item->estalishedDate }}</td>
<td class="tb-col">{{ $item->sanatathagharelu }}</td>
<td class="tb-col">{{ $item->majhaula }}</td>
<td class="tb-col">{{ $item->thulo }}</td>
<td class="tb-col">{{ $item->liyeko }}</td>
<td class="tb-col">{{ $item->naliyeko }}</td>
<td class="tb-col">{{ $item->renew }}</td>
<td class="tb-col">{{ $item->nonRenew }}</td>
<td class="tb-col">{{ $item->technical }}</td>
<td class="tb-col">{{ $item->prasasanik }}</td>
<td class="tb-col">{{ $item->sn }}</td>
<td class="tb-col">{{ $item->products }}</td>
<td class="tb-col">{{ $item->brand }}</td>
<td class="tb-col">{{ $item->time }}</td>
<td class="tb-col">{{ $item->area }}</td>
<td class="tb-col">{{ $item->packagingOne }}</td>
<td class="tb-col">{{ $item->packagingTwo }}</td>
<td class="tb-col">{{ $item->udhyogOne }}</td>
<td class="tb-col">{{ $item->udhyogTwo }}</td>
<td class="tb-col">{{ $item->productionOne }}</td>
<td class="tb-col">{{ $item->productionTwo }}</td>
<td class="tb-col">{{ $item->batchNumberOne }}</td>
<td class="tb-col">{{ $item->upayog }}</td>
<td class="tb-col">{{ $item->samrichan }}</td>
<td class="tb-col">{{ $item->potential }}</td>
<td class="tb-col">{{ $item->proyog }}</td>
<td class="tb-col">{{ $item->swasthya }}</td>
<td class="tb-col">{{ $item->highlow }}</td>
<td class="tb-col">{{ $item->swikrit }}</td>
<td class="tb-col">{{ $item->sarsafai }}</td>
<td class="tb-col">{{ $item->tapkram }}</td>
<td class="tb-col">{{ $item->chara }}</td>
<td class="tb-col">{{ $item->timespan }}</td>
<td class="tb-col">{{ $item->hygiene }}</td>
<td class="tb-col">{{ $item->chetra }}</td>
<td class="tb-col">{{ $item->bathroom }}</td> -->
<td class="tb-col">{{ $item->condition }}</td>
<td class="tb-col">{{ $item->productName }}</td>
<td class="tb-col">{{ $item->productSouce }}</td>
<!-- <td class="tb-col">{{ $item->praichad }}</td>
<td class="tb-col">{{ $item->prayog }}</td>
<td class="tb-col">{{ $item->sample }}</td>
<td class="tb-col">{{ $item->conclusion }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <!-- <ul class="d-flex flex-wrap ">
                                                <li>
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'foodindustryinspectionreport.foodindustryinspectionreport.show',$item->foodindustryinspectionreport_id) !!}
                                                </li>
                                               <li>
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'foodindustryinspectionreport.foodindustryinspectionreport.edit',$item->foodindustryinspectionreport_id) !!}
                                                </li> -->
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'foodindustryinspectionreport.foodindustryinspectionreport.destroy',$item->foodindustryinspectionreport_id) !!}</li>
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Addfoodindustryinspectionreport') }}</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Editfoodindustryinspectionreport') }}<h5><button type="button" class="btn-close"
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
