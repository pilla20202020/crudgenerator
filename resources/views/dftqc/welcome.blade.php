@extends('dftqc.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="row g-gs">
                    <div class="col-sm-6 col-xl-6 col-xxl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="card-title-group align-items-start">
                                    <div class="card-title">
                                        <h4 class="title">Total New Licence Register</h4>
                                    </div>
                                    <div class="media media-middle media-circle media-sm text-bg-primary-soft">
                                        <em class="icon icon-md ni ni-bar-chart-fill"></em>
                                    </div>
                                </div>
                                <div class="mt-2 ">
                                    <div class="amount h1">2,765</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-6 col-xxl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="card-title-group align-items-start">
                                    <div class="card-title">
                                        <h4 class="title">Total Renew Register</h4>
                                    </div>
                                    <div class="media media-middle media-circle media-sm text-bg-success-soft">
                                        <em class="icon icon-md ni ni-user-alt-fill"></em>
                                    </div>
                                </div>
                                <div class="mt-2 ">
                                    <div class="amount h1">250</div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 col-xxl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="card-title-group align-items-start">
                                    <div class="card-title">
                                        <h4 class="title">Today Lab Testing</h4>
                                    </div>
                                    <div class="media media-middle media-circle media-sm text-bg-info-soft">
                                        <em class="icon icon-md ni ni-tag-fill"></em>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="amount h1">2,153</div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 col-xxl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="card-title-group align-items-start">
                                    <div class="card-title">
                                        <h4 class="title">Today Leaves</h4>
                                    </div>
                                    <div class="media media-middle media-circle media-sm text-bg-info-soft">
                                        <em class="icon icon-md ni ni-tag-fill"></em>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="amount h1">2,153</div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-body flex-grow-0 py-2">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="title">Latest New Licence Registration</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="table-responsive">
                            <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col"><span class="overline-title">{{ __('lang.S.N.') }}</span></th>
                                        <th class="tb-col"><span
                                                class="overline-title">{{ __('lang.Industry Name') }}</span></th>
                                        <!-- <th class="tb-col"><span class="overline-title">lang.logo</span></th>
                                                    <th class="tb-col"><span class="overline-title">lang.industryAddressTol</span></th>
                                                    <th class="tb-col"><span class="overline-title">lang.MunicipalityVDC</span></th>
                                                    <th class="tb-col"><span class="overline-title">lang.industryDistrict</span></th> -->
                                        <th class="tb-col"><span
                                                class="overline-title">{{ __('lang.Industry Address') }}</span></th>
                                        <th class="tb-col"><span
                                                class="overline-title">{{ __('lang.Industry Type') }}</span></th>
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

                                        <th class="tb-col tb-col-center" data-sortable="false"><span
                                                class="overline-title">{{ __('lang.Action') }}</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($newlicense as $item)
                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->industryName }}</td>
                                            <!-- <td class="tb-col">
                                                            @if ($item->company_logo)
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
                                            <td class="tb-col">
                                                @if ($item->newlicenseissue_status == null)
                                                    <span class="badge text-bg-warning">Pending</span>
                                                @elseif($item->newlicenseissue_status == 'approved')
                                                    <span class="badge text-bg-success">Approved</span>
                                                @elseif($item->newlicenseissue_status == 'forwarded')
                                                    <span class="badge text-bg-info">Forwarded</span>
                                                @else
                                                    <span class="badge text-bg-danger">Reasigned</span>
                                                @endif
                                            </td>
                                            <td class="tb-col tb-col-center">
                                                <ul class="d-flex flex-wrap gap g-3">
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
                                                 
                                                    <!-- <li>
                                                                {!! actionCanvasButton(
                                                                    '',
                                                                    'btn-editCanvas',
                                                                    'editoffcanvas',
                                                                    'edit',
                                                                    'form7.newlicenseissue.edit',
                                                                    $item->newlicenseissue_id,
                                                                ) !!}
                                                            </li>
                                                            <li>{!! deleteCanvasButton('', 'btn-hover-danger', 'form7.newlicenseissue.destroy', $item->newlicenseissue_id) !!}</li> -->
                                                    @if (
                                                        $item->newlicenseissue_status == null &&
                                                            auth()->user()->hasRole('license-officer'))
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-color-info btn-soft"
                                                                onclick="forwardthis({{ $item->newlicenseissue_id }})"
                                                                value="1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                title="Forward"> Forward</button>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-color-danger btn-icon btn-soft"
                                                                onclick="rejectthis({{ $item->newlicenseissue_id }})"
                                                                value="0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Reasign">
                                                                Reasign</button>
                                                        </li>
                                                    @elseif(
                                                        $item->newlicenseissue_status == 'forwarded' &&
                                                            auth()->user()->hasRole('license-head-department'))
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-color-success btn-soft"
                                                                onclick="approvedthis({{ $item->newlicenseissue_id }})"
                                                                value="1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                title="Approve"> Approve</button>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-color-danger btn-soft"
                                                                onclick="rejectthis({{ $item->newlicenseissue_id }})"
                                                                value="0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Reasign">
                                                                Reasign</button>
                                                        </li>

                                                     
                                                    @endif
                                                    <li>
                                                        <a href="{{ route('form7.newlicenseissue.print', $item->newlicenseissue_id) }}"
                                                            class="btn btn-sm btn-icon btn-lighter mt-1 noprint"><em class="icon ni ni-printer"></em></a>
                                                    </li>
                                                    
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- Add Modal --}}
                            <div class="addoffcanvas offcanvas offcanvas-end offcanvas-size-xxlg" id="addOffcanvas">
                                <div class="offcanvas-header border-bottom border-light">
                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">
                                        {{ __('lang.AddNewlicenseissue') }}
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
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Editlicenseissue') }}<h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
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

                        {{-- Reject Modal --}}
                        <div class="modal fade rejectModal" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title align-self-center mt-0 text-center" id="exampleModalLabel">
                                            Reject</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="{{ route('form7.recommendationfoodindustryestablishment.tobereject') }}"
                                            method="GET">
                                            <div class="form-group row">
                                                <input type="hidden" name="rejected_id" class="rejected_id"
                                                    value="">

                                                <div class="col-md-12">
                                                    <div class="col-lg-12">
                                                        {{ createText('newlicenseissue_remarks', 'newlicenseissue_remarks', 'Rejected Remarks') }}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <?php createButton('btn-primary', '', 'Save'); ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script>
        function approvedthis(id) {
            var approved_id = JSON.parse(id);
            $.ajax({
                type: 'get',
                url: '{{ route('form7.recommendationfoodindustryestablishment.tobeapprove') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    approved_id: approved_id,
                },
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = JSON.parse(response)
                    }
                    if (response.status) {
                        window.location.reload();
                    }
                }

            })
        }

        function rejectthis(id) {
            var rejected_id = JSON.parse(id);
            $('.rejected_id').val(rejected_id);
            $('.rejectModal').modal('show');

        }

        function forwardthis(id) {
            var forwardthis = JSON.parse(id);
            $.ajax({
                type: 'get',
                url: '{{ route('form7.recommendationfoodindustryestablishment.tobeforward') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    forwardthis: forwardthis,
                },
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = JSON.parse(response)
                    }
                    if (response.status) {
                        window.location.reload();
                    }
                }

            })
        }
    </script>
@endsection