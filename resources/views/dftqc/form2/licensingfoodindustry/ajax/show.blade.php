<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowLicensingfoodindustry') }}</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">

                <h2>{{ __('lang.Licensingfoodindustry') }} {{ __('lang.Details') }}</h2>

            </div>
            <div class="card w-100">
                <div class="p-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div> <b>{{ __('lang.License Number') }} :</b> <span>{{$data->number}}</span> </div>
                            <div> <b>{{ __('lang.Date') }} :</b><span>{{$data->date}}</span>  </div>

                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table  table-bordered table-striped-columns small">

                                <tbody>
                                    <tr>
                                    <th scope="row">{{ __('lang.Industry Name') }}</th>
                                    <td>{{ $data->industryName }}</td>
                                    <th scope="row">{{ __('lang.Industry Address') }}</th>
                                    <td>{{ $data->address}}</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">{{ __('lang.Owner Name And Surname') }}</th>
                                    <td>{{ $data->ownerName }}</td>
                                    <th scope="row">{{ __('lang.Responsible Person Name And Surname') }}</th>
                                    <td>{{ $data->responsiblePersonName }}</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">{{ __('lang.Father Name') }}</th>
                                    <td>{{ $data->fatherName }}</td>
                                    <th scope="row">{{ __('lang.Grand Father Name') }}</th>
                                    <td>{{ $data->grandFatherName }}</td>
                                    </tr>


                                    </tbody>
                                    </table>
                                    </div>
                        <div class="table-responsive">
                            <table class="table  table-bordered table-striped-columns small">

                                <tbody>
                                    <tr>
                                    <th scope="row">{{ __('lang.Temporary Address') }}</th>
                                    <td>{{ $data->temporaryAddress }}</td>
                                    <th scope="row">{{ __('lang.Permanent Address') }}</th>
                                    <td>{{ $data->permanentAddress }}</td>
                                    </tr>



                                    </tr>
                                    <div class="table-responsive">
                                        <table class="table  table-bordered table-striped-columns small">

                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ __('lang.Name of the food item to be produced and sold') }}</th>
                                                    <td>{{ $data->producedFoodName }}</td>
                                                    </tr>


                                    </tbody>
                                    </table>
                                    </div>

    </div>


    </div>
            </div>
        </div>
    </div>
</div>
