<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowNewlicenseissue') }}</h5><button type="button"
        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>{{ __('lang.Newlicenseissue') }} {{ __('lang.Details') }}</h2>

            <ul class="d-flex flex-wrap gap g-3">
            @if ($data->newlicenseissue_status == null &&
                                                            auth()->user()->hasRole('license-officer'))

                                                            <li>
                                                            <button type="button"
                                                                class="btn btn-info btn-soft"
                                                                onclick="forwardthis({{ $data->newlicenseissue_id }})"
                                                                value="1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                title="Forward"> Forward</button>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-danger btn-soft"
                                                                onclick="rejectthis({{ $data->newlicenseissue_id }})"
                                                                value="0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Reasign">
                                                                Reasign</button>
                                                        </li>
                                                    @elseif(
                                                        $data->newlicenseissue_status == 'forwarded' &&
                                                            auth()->user()->hasRole('license-head-department'))
                                                            <li><button class="btn btn-primary print_pdf">Print PDF </button></li>
                                                            <li>
                                                            <button type="button"
                                                                class="btn btn-success btn-soft"
                                                                onclick="approvedthis({{ $data->newlicenseissue_id }})"
                                                                value="1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                title="Approve"> Approve</button>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn btn-danger btn-soft"
                                                                onclick="rejectthis({{ $data->newlicenseissue_id }})"
                                                                value="0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip" title="Reasign">
                                                                Reasign</button>
                                                        </li>
                                                    @endif
                                                            </ul>
        </div>
        <div class="card w-100">
            <div class="p-5">
                <div class="card-body">
                    <div class="row g-3">
                        <!--start  -->
                        <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                                    type="button">New License Issue</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                                    type="button">Recommendation Food Industry Establishment</button>
                            </li>
                            <li class="nav-item">

                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home-tab-pane">

                                <div class="row">
                                    <div class="col-lg-12">{{ __('lang.Date') }}:<span></span></div>
                                    <div class="col-lg-12 my-2"><h4>{{ __('lang.Industry Name') }}: {{ $data->industryName }}</h4></div>

                                    <div class="col-lg-12">

                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped-columns small">

                                                <tbody>
                                                    <tr>
                                                    <th scope="row">{{ __('lang.Industry Address Tole') }}:</th>
                                                    <td>{{ $data->industryAddressTol }}</td>
                                                    <th scope="row">{{ __('lang.Municipality') }}:</th>
                                                    <td>{{ $data->MunicipalityVDC }}</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">     {{ __('lang.Industry District') }}</th>
                                                    <td>{{ $data->industryDistrict }}</td>
                                                    <th scope="row">{{ __('lang.Industry Type') }}:</th>
                                                    <td>{{ $data->industryType }}</td>
                                                    </tr>
                                                    </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table  table-bordered table-striped-columns small">

                                                            <tbody>
                                                                <tr>

                                                                    <th scope="row">{{ __('lang.Responsible Person Name And SurName') }}:</th>
                                                                    <td>{{ $data->responsiblepersonName }}</td>
                                                                    <th scope="row">{{ __('lang.Responsible Person Address') }}:</th>
                                                                    <td>{{ $data->responsiblepersonAddress }}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">{{ __('lang.Father Name') }}:</th>
                                                    <td>{{ $data->fatherName }}</td>
                                                    <th scope="row">{{ __('lang.Grand Father Name') }}:</th>
                                                    <td>{{ $data->grandFatherName }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">{{ __('lang.Permanent Address') }}</th>
                                                                        <td>{{ $data->permanentAddress }}</td>
                                                                        <th scope="row">{{ __('lang.Temporary Address') }}:</th>
                                                                        <td>{{ $data->temporaryAddress }}</td>
                                                                    </tr>
                                                                    </tbody>
                                                                    </table>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table  table-bordered table-striped-columns small">

                                                                            <tbody>

                                                                            <tr>
                                                                                <th scope="row">{{ __('lang.Food Name') }}:</th>
                                                                                <td>{{ $data->foodNameOne }}</td>
                                                                                <th scope="row">{{ __('lang.Packing Size') }}:</th>
                                                                                <td>{{ $data->packingSizeOne }}</td>
                                                                                <th scope="row">{{ __('lang.Brand') }}:</th>
                                                                                <td>{{ $data->brandOne }}</td>



                                                                                </tr>
                                                                                </tbody>
                                                                                </table>
                                                                                </div>
                                                                                <div class="table-responsive">
                                                                                    <table class="table  table-bordered table-striped-columns small">

                                                                                        <tbody>


                                                                                        <tr>
                                                                                            <th scope="row">{{ __('lang.Wanted Machinery') }}:</th>
                                                                                            <td>{{ $data->industryMachineOne }}</td>
                                                                                            <th scope="row">{{ __('lang.Provision Of Skilled Manpower') }}:</th>
                                                                                            <td>{{ $data->industryManageOne }}</td>
                                                                                            <th scope="row">{{ __('lang.Parameters To Be Analyzed If Laboratory Is Available') }}:</th>
                                                                                            <td>{{ $data->labWorksOne }}</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                            </table>
                                                                                            </div>

                                                                                            <div class="table-responsive">
                                                                                                <table class="table  table-bordered table-striped-columns small">

                                                                                                    <tbody>



                                                                                                    <tr>

                                                                                                        <th scope="row">{{ __('lang.Type of source of raw material') }}:</th>
                                                                                                        <td>{{ $data->industryMachineOne }}</td>
                                                                                                        <th scope="row">{{ __('lang.Markets for manufactured goods') }}:</th>
                                                                                                        <td>{{ $data->industryManageOne }}</td>


                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">{{ __('lang.Cost Of Industry') }}:</th>
                                                                                                        <td>{{ $data->industryCost }}</td>
                                                                                                        <th scope="row">{{ __('lang.Industry Capacity') }}:</th>
                                                                                                        <td>{{ $data->industryCapacity }}</td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                        </table>
                                                                                                        </div>
                                    <div class="col-lg-12">

                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped-columns small">

                                                <tbody>




                                                <tr>

                                                    <th scope="row">{{ __('lang.Applicant Name') }}:</th>
                                                    <td>{{ $data->userName }}</td>
                                                    <th scope="row">{{ __('lang.Applicant Address') }}:</th>
                                                    <td>{{ $data->userAddress }}</td>

                                                </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4">
                                        <div class="table-responsive">
                                        <table class="table  table-bordered table-striped-columns small">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ __('lang.Industry Address Tol') }}:</th>
                                                    <td>{{ $data->industryAddressTol }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ __('lang.Industry Address Tol') }}:</th>
                                                    <td>{{ $data->industryAddressTol }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div> -->

                                    <div class="col-lg-12">

                                            <div class="col-lg-12 my-2"><h4>{{ __('lang.In case of new issue') }}:-</h4>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table  table-bordered table-striped-columns small">

                                                    <tbody>


                                                        <tr>
                                                            <th scope="row"> {{ __('lang.a.Copy of Certificate of Industry Registration') }}</th>
                                                            <td><a href="{{ asset('storage/' . $data->industryregistrationCertificate) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.b.Cash receipt of revenue receipt') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->revenueReceipt) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.Official letter issued on behalf of the Board') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->letter) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.Industrialist official letter (if the person in charge of the industrial action is not an industrialist)') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->industralistLetter) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.2 copies of passport size photograph of the licensee') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->passportSize) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.Packaged food labels 1/1 per logo or brand if applicable') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->packagedLogo) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.Map to reach the industry (with map)') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->roadMap) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.Copy of citizenship') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->citizenshipCopy) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">{{ __('lang.Additional details to be provided by the processed beverage industry for issuance of licence For the production and distribution of clean and quality processed drinking water, the application for the issuance of an industry license for the production and distribution of processed drinking water will be registered only after submitting the following additional details along with the necessary documents.') }} </th>
                                                            <td><a
                                                                href="{{ asset('storage/' . $data->drinkingWater) }}"
                                                                target="_blank" class="btn btn-primary btn-sm">View Uploaded
                                                                File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>




                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact-tab-pane">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-2">{{ __('lang.Date') }}: {{ $recommendation->date}}</div>
                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped-columns small">

                                                <tbody>
                                                    <tr>

                                                    <th scope="row">{{ __('lang.Industry Name') }}:</th>
                                                    <td>{{ $recommendation->industryName }}</td>
                                                    <th scope="row">{{ __('lang.Industry Address') }}:</th>
                                                    <td>{{ $recommendation->industryAddress }}</td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">{{ __('lang.Industry Owner Name') }}:</th>
                                                    <td>{{ $recommendation->industryOwnerName }} {{ $recommendation->industryOwnerMiddleName }} {{ $recommendation->industryOwnerLastName }}</td>

                                                    <th scope="row">{{ __('lang.Industry Owner Address') }}:</th>
                                                    <td>{{ $recommendation->industryOwnerAddress }}</td>

                                                </tr>
                                                    </tbody>
                                                    </table>
                                                    </div>
                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped-columns small">

                                                <tbody>
                                                    <tr>

                                                    <th scope="row">{{ __('lang.Name of food item to be produced') }}:</th>
                                                    <td>{{ $recommendation->productName }}</td>
                                                    <th scope="row">{{ __('lang.Product Type') }}:</th>
                                                    <td>{{ $recommendation->productType }}</td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">{{ __('lang.Wanted Machinery') }}:</th>
                                                    <td>{{ $recommendation->machinery }} </td>

                                                    <th scope="row">{{ __('lang.Technical Skills') }}:</th>
                                                    <td>{{ $recommendation->techincialSkills }} </td>

                                                </tr>
                                                   <tr>
                                                    <th scope="row">{{ __('lang.Clean Management') }}:</th>
                                                    <td>{{ $recommendation->cleanManagement }} </td>
                                                    <th scope="row">{{ __('lang.Others') }}:</th>
                                                    <td>{{ $recommendation->remarks }} </td>


                                                </tr>
                                                    </tbody>
                                                    </table>
                                                    </div>
                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped-columns small">

                                                <tbody>
                                                    <tr>

                                                    <th scope="row">{{ __('lang.Industry Budget') }}:</th>
                                                    <td>{{ $recommendation->industryBudget }}</td>
                                                    <th scope="row">{{ __('lang.Industry Capacity') }}:</th>
                                                    <td>{{ $recommendation->industryCapacity }}</td>
                                                   </tr>

                                                    </tbody>
                                                    </table>
                                                    </div>
                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped-columns small">

                                                <tbody>


                                                    </tbody>
                                                    </table>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--end  -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

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

