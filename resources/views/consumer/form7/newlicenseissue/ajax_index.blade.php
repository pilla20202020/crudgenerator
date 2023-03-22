@extends('dftqc.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">{{ __('lang.Newlicenseissue') }}</h1>
                                    <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">{{ __('lang.Newlicenseissue') }}</a></li>
                                            <li class="breadcrumb-item"><a href="#">{{ __('lang.Newlicenseissue') }} {{ __('lang.Manage') }}</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Newlicenseissue') }}
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    {!! createCanvasButton('customBtnAdd', '', 'Newlicenseissue', 'form7.newlicenseissue.create') !!}
                                </ul>
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
                                        <!-- <th class="tb-col"><span class="overline-title">lang.logo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryAddressTol</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.MunicipalityVDC</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryDistrict</span></th> -->
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.Industry Address') }}</span></th>
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.Industry Type') }}</span></th>
                                        <!-- <th class="tb-col"><span class="overline-title">lang.industryManagerFirstName</span>
                                        </th> -->
                                        <!-- <th class="tb-col"><span
                                                class="overline-title">lang.industryManagerMiddleName</span></th> -->
                                        <!-- <th class="tb-col"><span class="overline-title">lang.industryManagerLastName</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">lang.industryManagerAddress</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">lang.fatherName</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.grandFatherName</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.permanentAddress</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.temporaryAddress</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.foodNameOne</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.foodNameTwo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.foodNameThree</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.packingSizeOne</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.packingSizeTwo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.packingSizeThree</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.brandOne</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.brandTwo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.brandThree</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryMachineOne</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryMachineTwo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryMachineThree</span>
                                        </th>
                                        <th class="tb-col"><span class="overline-title">lang.industryMachineFour</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryManageOne</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryManageTwo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryManageThree</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryManageFour</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.labManage</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.labWorksOne</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.labWorksTwo</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.labWorksThree</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryCost</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.industryCapacity</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.userName</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.userAddress</span></th>
                                        <th class="tb-col"><span class="overline-title">lang.alias</span></th> -->
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.Status') }}</span>
                                        </th>

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
                                            <!-- <td class="tb-col">
                                                @if($item->company_logo)
                                                    <img src="{{ asset('storage/' . $item->company_logo) }}" alt="{{ $item->industryName }}" height="100" width="100">
                                                @endif
                                            </td> -->
                                            <!-- <td class="tb-col">{{ $item->industryAddressTol }}</td> -->
                                            <!-- <td class="tb-col">{{ $item->MunicipalityVDC }}</td>
                                            <td class="tb-col">{{ $item->industryDistrict }}</td> -->
                                            <td class="tb-col">{{ $item->industryAddress }}</td>
                                            <td class="tb-col">{{ $item->industryType }}</td>
                                            <!-- <td class="tb-col">{{ $item->industryManagerFirstName }}</td>
                                            <td class="tb-col">{{ $item->industryManagerMiddleName }}</td>
                                            <td class="tb-col">{{ $item->industryManagerLastName }}</td>
                                            <td class="tb-col">{{ $item->industryManagerAddress }}</td>
                                            <td class="tb-col">{{ $item->fatherName }}</td>
                                            <td class="tb-col">{{ $item->grandFatherName }}</td>
                                            <td class="tb-col">{{ $item->permanentAddress }}</td>
                                            <td class="tb-col">{{ $item->temporaryAddress }}</td>
                                            <td class="tb-col">{{ $item->foodNameOne }}</td>
                                            <td class="tb-col">{{ $item->foodNameTwo }}</td>
                                            <td class="tb-col">{{ $item->foodNameThree }}</td>
                                            <td class="tb-col">{{ $item->packingSizeOne }}</td>
                                            <td class="tb-col">{{ $item->packingSizeTwo }}</td>
                                            <td class="tb-col">{{ $item->packingSizeThree }}</td>
                                            <td class="tb-col">{{ $item->brandOne }}</td>
                                            <td class="tb-col">{{ $item->brandTwo }}</td>
                                            <td class="tb-col">{{ $item->brandThree }}</td>
                                            <td class="tb-col">{{ $item->industryMachineOne }}</td>
                                            <td class="tb-col">{{ $item->industryMachineTwo }}</td>
                                            <td class="tb-col">{{ $item->industryMachineThree }}</td>
                                            <td class="tb-col">{{ $item->industryMachineFour }}</td>
                                            <td class="tb-col">{{ $item->industryManageOne }}</td>
                                            <td class="tb-col">{{ $item->industryManageTwo }}</td>
                                            <td class="tb-col">{{ $item->industryManageThree }}</td>
                                            <td class="tb-col">{{ $item->industryManageFour }}</td>
                                            <td class="tb-col">{{ $item->labManage }}</td>
                                            <td class="tb-col">{{ $item->labWorksOne }}</td>
                                            <td class="tb-col">{{ $item->labWorksTwo }}</td>
                                            <td class="tb-col">{{ $item->labWorksThree }}</td>
                                            <td class="tb-col">{{ $item->industryCost }}</td>
                                            <td class="tb-col">{{ $item->industryCapacity }}</td>
                                            <td class="tb-col">{{ $item->userName }}</td>
                                            <td class="tb-col">{{ $item->userAddress }}</td>
                                            <td class="tb-col">{{ $item->alias }}</td> -->
                                            <td class="tb-col">{!! $item->status_name !!}</td>
                                            <td class="tb-col">
                                                <ul class="d-flex flex-wrap ">
                                                    <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-showCanvas',
                                                            'showoffcanvas',
                                                            'eye',
                                                            'form7.newlicenseissue.show',
                                                            $item->newlicenseissue_id,
                                                        ) !!}
                                                    </li>
                                                    <li>
                                                        {!! actionCanvasButton(
                                                            '',
                                                            'btn-editCanvas',
                                                            'editoffcanvas',
                                                            'edit',
                                                            'form7.newlicenseissue.edit',
                                                            $item->newlicenseissue_id,
                                                        ) !!}
                                                    </li>
                                                    <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'form7.newlicenseissue.destroy', $item->newlicenseissue_id) !!}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.AddNewlicenseissue') }}
                                    </h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Editlicenseissue') }}<h5><button
                                            type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
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
