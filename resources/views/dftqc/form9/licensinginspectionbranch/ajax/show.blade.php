<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowLicensinginspectionbranch') }}</h5><button type="button"
        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>{{ __('lang.Licensinginspectionbranch') }} {{ __('lang.Details') }}</h2>

        </div>
        <div class="card w-100">
            <div class="p-5">


                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div> <b>{{ __('lang.Date') }} :</b><span>{{$data->date}}</span>  </div>

                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table  table-bordered table-striped-columns small">

                            <tbody>
                                <tr>

                                <th scope="row">{{ __('lang.Mr/Ms.') }}</th>
                                <td>{{ $data->ownerName}}</td>

                                <th scope="row">{{ __('lang.Industry Name') }}</th>
                                <td>{{ $data->industryName}}</td>


                            </tr>
                            <tr>
                                <th scope="row">{{ __('lang.Address') }}</th>
                                <td>{{ $data->industryAddress}}</td>
                                <th scope="row">{{ __('lang.Phone Number') }}</th>
                                <td>{{ $data->industryPhone }}</td>
                            </tr>




                                </tbody>
                                </table>
                                </div>
                    <div class="table-responsive mt-2">
                        <table class="table  table-bordered table-striped-columns small">

                            <tbody>
                                <tr>
                                <th scope="row">{{ __('lang.Flow Chart, Plant Layout, Plant Sanitation') }}</th>
                                <td>{{ $data->flow}}</td>

                                </tr>
                                <tr>
                                <th scope="row">{{ __('lang.Personal Hygiene') }}</th>
                                <td>{{ $data->personalHg}}</td>

                                </tr>
                                <tr>
                                <th scope="row">{{ __('lang.Condition of raw and finished products') }}</th>
                                <td>{{ $data->products}}</td>

                                </tr>
                                <tr>
                                <th scope="row">{{ __('lang.Machinery used and manufactured by, treatment of raw water') }}</th>
                                <td>{{ $data->machinery}}</td>

                                </tr>
                                <tr>
                                <th scope="row">{{ __('lang.Food additives used') }}</th>
                                <td>{{ $data->foods}}</td>

                                </tr>
                                <tr>
                                <th scope="row">{{ __('lang.Plant Location(map)') }}</th>
                                <td>{{ $data->plantLocation}}</td>

                                </tr>
                                <tr>
                                <th scope="row">{{ __('lang.Label Information') }}</th>
                                <td>{{ $data->labelInformation}}</td>

                                </tr>



                                </tbody>
                                </table>
                                </div>
                                <div class="table-responsive mt-2">
                                    <table class="table  table-bordered table-striped-columns small">

                                        <tbody>
                                            <tr>
                                            <th scope="row">{{ __('lang.Others') }}</th>
                                            <td>{{ $data->remarks}}</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                </div>
            </div>
        </div>
    </div>
</div>
