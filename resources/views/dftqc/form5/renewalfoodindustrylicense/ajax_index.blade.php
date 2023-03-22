@extends('dftqc.partials.layouts')
    @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">{{ __('lang.Renewalfoodindustrylicense') }}</h1>
                                        <nav>
                                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Renewalfoodindustrylicense') }}</a></li>
                                                <li class="breadcrumb-item"><a href="#">{{ __('lang.Renewalfoodindustrylicense') }} {{ __('lang.Manage') }}</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Renewalfoodindustrylicense') }}
                                                </li>
                                            </ol>
                                        </nav>
                                </div>
                                <div class="nk-block-head-content">
                                    <!-- <ul class="d-flex">
                                        {!!createCanvasButton("customBtnAdd","","Renewalfoodindustrylicense","form5.renewalfoodindustrylicense.create") !!}
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
<!-- <th class="tb-col"><span class="overline-title">lang.tole</span></th>
<th class="tb-col"><span class="overline-title">lang.municipality</span></th>
<th class="tb-col"><span class="overline-title">lang.district</span></th>
<th class="tb-col"><span class="overline-title">lang.phone</span></th>
<th class="tb-col"><span class="overline-title">lang.type</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Owner Name') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.addressTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.fatherName</span></th>
<th class="tb-col"><span class="overline-title">lang.grandFatherName</span></th>
<th class="tb-col"><span class="overline-title">lang.addressThree</span></th>
<th class="tb-col"><span class="overline-title">lang.addressFour</span></th>
<th class="tb-col"><span class="overline-title">lang.ediblesOne</span></th>
<th class="tb-col"><span class="overline-title">lang.ediblesTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.ediblessThree</span></th>
<th class="tb-col"><span class="overline-title">lang.packingOne</span></th>
<th class="tb-col"><span class="overline-title">lang.packingTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.packingThree</span></th>
<th class="tb-col"><span class="overline-title">lang.brandOne</span></th>
<th class="tb-col"><span class="overline-title">lang.brandTwo</span></th>
<th class="tb-col"><span class="overline-title">lang.brandThree</span></th>
<th class="tb-col"><span class="overline-title">lang.skill</span></th>
<th class="tb-col"><span class="overline-title">lang.skills</span></th>
<th class="tb-col"><span class="overline-title">lang.sanitation</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Manufacture') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.udhyog</span></th> -->
<th class="tb-col"><span class="overline-title">{{ __('lang.Potential') }}</span></th>
<!-- <th class="tb-col"><span class="overline-title">lang.issueDate</span></th>
<th class="tb-col"><span class="overline-title">lang.receipt</span></th>
<th class="tb-col"><span class="overline-title">lang.production</span></th>
<th class="tb-col"><span class="overline-title">lang.label</span></th>
<th class="tb-col"><span class="overline-title">lang.sample</span></th>
<th class="tb-col"><span class="overline-title">lang.photocopy</span></th>
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
                                            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->industryName }}</td>
<!-- <td class="tb-col">{{ $item->tole }}</td>
<td class="tb-col">{{ $item->municipality }}</td>
<td class="tb-col">{{ $item->district }}</td>
<td class="tb-col">{{ $item->phone }}</td>
<td class="tb-col">{{ $item->type }}</td> -->
<td class="tb-col">{{ $item->ownerName }}</td>
<!-- <td class="tb-col">{{ $item->addressTwo }}</td>
<td class="tb-col">{{ $item->fatherName }}</td>
<td class="tb-col">{{ $item->grandFatherName }}</td>
<td class="tb-col">{{ $item->addressThree }}</td>
<td class="tb-col">{{ $item->addressFour }}</td>
<td class="tb-col">{{ $item->ediblesOne }}</td>
<td class="tb-col">{{ $item->ediblesTwo }}</td>
<td class="tb-col">{{ $item->ediblessThree }}</td>
<td class="tb-col">{{ $item->packingOne }}</td>
<td class="tb-col">{{ $item->packingTwo }}</td>
<td class="tb-col">{{ $item->packingThree }}</td>
<td class="tb-col">{{ $item->brandOne }}</td>
<td class="tb-col">{{ $item->brandTwo }}</td>
<td class="tb-col">{{ $item->brandThree }}</td>
<td class="tb-col">{{ $item->skill }}</td>
<td class="tb-col">{{ $item->skills }}</td>
<td class="tb-col">{{ $item->sanitation }}</td> -->
<td class="tb-col">{{ $item->manufacture }}</td>
<!-- <td class="tb-col">{{ $item->udhyog }}</td> -->
<td class="tb-col">{{ $item->potential }}</td>
<!-- <td class="tb-col">{{ $item->issueDate }}</td>
<td class="tb-col">{{ $item->receipt }}</td>
<td class="tb-col">{{ $item->production }}</td>
<td class="tb-col">{{ $item->label }}</td>
<td class="tb-col">{{ $item->sample }}</td>
<td class="tb-col">{{ $item->photocopy }}</td>
<td class="tb-col">{{ $item->alias }}</td> -->
<td class="tb-col">
                                                @if ($item->newlicenseissue_status == null)
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @elseif($item->newlicenseissue_status == 'approved')
                                                    <span class="badge text-bg-success">Approved</span>
                                                @else
                                                    <span class="badge text-bg-danger">Rejected</span>
                                                @endif
                                            </td>
<td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                <li>    
                                                    {!! actionCanvasButton("","btn-showCanvas","showoffcanvas","eye",'form5.renewalfoodindustrylicense.show',$item->renewalfoodindustrylicense_id) !!}
                                                </li>
                                               <!-- <li> 
                                                        {!! actionCanvasButton("","btn-editCanvas","editoffcanvas","edit",'form5.renewalfoodindustrylicense.edit',$item->renewalfoodindustrylicense_id) !!}
                                                </li>
                                                <li>{!! deleteCanvasButton("","btn-hover-danger",'form5.renewalfoodindustrylicense.destroy',$item->renewalfoodindustrylicense_id) !!}</li> -->
                                               </ul> </td>
                                               </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                {{-- Add Modal --}}
                       <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                        <div class="offcanvas-header border-bottom border-light">
                            <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.AddRenewalfoodindustrylicense') }}</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.EditRenewalfoodindustrylicense') }}<h5><button type="button" class="btn-close"
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
    