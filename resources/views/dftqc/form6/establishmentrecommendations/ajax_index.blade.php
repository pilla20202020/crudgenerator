@extends('dftqc.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">{{ __('lang.Establishmentrecommendations') }}</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Establishmentrecommendations') }}</a></li>
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Establishmentrecommendations') }} {{ __('lang.Manage') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Establishmentrecommendations') }}
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <!-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Establishmentrecommendations","form6.establishmentrecommendations.create") !!}
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
<!-- <th class="tb-col"><span class="overline-title">lang.chalaninoOne</span></th> -->
<!-- <th class="tb-col"><span class="overline-title">{{ __('lang.Date') }}</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Industry Name') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.industryWork</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Industry Owner') }}</span></th>
<th class="tb-col"><span class="overline-title">{{ __('lang.Recommendation Date') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.etc</span></th>
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
                                            <!-- <td class="tb-col">{{ $item->chalaninoOne }}</td> -->
<!-- <td class="tb-col">{{ $item->date }}</td> -->
<td class="tb-col">{{ $item->industryName }}</td>
<!-- <td class="tb-col">{{ $item->industryWork }}</td> -->
<td class="tb-col">{{ $item->industryOwner }}</td>
<td class="tb-col">{{ $item->recommendationDate }}</td>
<!-- <td class="tb-col">{{ $item->etc }}</td> -->
<!-- <td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'form6.establishmentrecommendations.show',$item->establishmentrecommendations_id) !!}
                                                </li>
                                               <!-- <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'form6.establishmentrecommendations.edit',$item->establishmentrecommendations_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'form6.establishmentrecommendations.destroy',$item->establishmentrecommendations_id) !!}</li> -->
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.AddEstablishmentrecommendations') }}</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.EditEstablishmentrecommendations') }}<h5><button type="button" class="btn-close"
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
    