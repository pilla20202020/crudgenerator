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
                                            <li class="breadcrumb-item"><a
                                                    href="#">{{ __('lang.Newlicenseissue') }}</a></li>
                                            <li class="breadcrumb-item"><a href="#">{{ __('lang.Newlicenseissue') }}
                                                    {{ __('lang.Manage') }}</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ __('lang.Newlicenseissue') }}
                                            </li>
                                        </ol>
                                    </nav>
                            </div>
                            <div class="nk-block-head-content">
                                <!-- <ul class="d-flex">
                                                    {!! createCanvasButton('customBtnAdd', '', 'Newlicenseissue', 'form7.newlicenseissue.create') !!}
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
                                    @foreach ($data as $item)

                                        <tr>
                                            <td class="tb-col">{{ $i++ }}</td>
                                            <td class="tb-col">{{ $item->industryName }}</td>
                                            <td class="tb-col">{{ $item->industryAddress }}</td>
                                            <td class="tb-col">{{ $item->industryType }}</td>
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
                                                    @if ($item->newlicenseissue_status == 'forwarded')
                                                        <li>
                                                            <a href="{{ route('form7.newlicenseissue.print', $item->newlicenseissue_id) }}"
                                                                class="btn btn-sm btn-icon btn-lighter mt-1 noprint"><em
                                                                    class="icon ni ni-printer"></em></a>
                                                        </li>
                                                    @endif

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
                                                            <button type="button" class="btn btn-color-info btn-soft"
                                                                onclick="forwardthis({{ $item->newlicenseissue_id }})"
                                                                value="1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Forward">
                                                                Forward</button>
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
                                                            <button type="button" class="btn btn-color-success btn-soft"
                                                                onclick="approvedthis({{ $item->newlicenseissue_id }})"
                                                                value="1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Approve">
                                                                Approve</button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-color-danger btn-soft"
                                                                onclick="rejectthis({{ $item->newlicenseissue_id }})"
                                                                value="0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Reasign">
                                                                Reasign</button>
                                                        </li>
                                                    @endif


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
