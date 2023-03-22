<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowLicensinginspectionbranch') }}</h5><button type="button"
        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>{{ __('lang.Licensinginspectionbranch') }} {{ __('lang.Details') }}</h2>
            <button class="btn btn-primary print_pdf">Print PDF</button>
        </div>
        <div class="card w-100">
            <div class="p-5">

                <!-- <div class="card-head">
                    <h2 class="text-center">{{$data['industryName']}}</h2>
                </div> -->
                <div class="card-body">
                    <!-- Content start -->
                    <!-- header start -->
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="p-2">
                            <div class="row text-center">

                                <p class="col-12 heading"><h3>खाद्य प्रविधि तथा गुण नियन्त्रण विभाग</h3></p>
                                <p class="col-12 heading"><h3>खाद्य तथा दाना स्वच्छता एवं गुणस्तर नियमन महाशाखा</h3></p>
                                <p class="col-12 heading"><h3>अनुज्ञापत्र तथा निरीक्षण शाखा</h3></p>
                              
                                <p class="col-12 d-flex justify-content-end align-items-center">
                                    <label class="m-label">मिति: <span>{{$data->date}}</span></label></p>
                                <p class="col-12 d-flex align-items-center"><label
                                        class="m-label">श्री: <span>{{$data->ownerName}}</span></label></p>
                              

                                <p class="col-12 content">तल उल्लेखित उद्योगको सात (७) दिन भित्र उद्योग निरीक्षण
                                    सम्पन्न गरेको प्रतिवेदन र उक्त उद्योगको उत्पादनको नमूनाहरु उपलब्ध
                                    गराई दिनु हुन अनुरोध गरिन्छ ।</p>
                            </div>
                        </div>
                    </div>
                    <!-- header End -->
                    <!-- Body Start -->
                    <div class="row g-3">

                        <div class="col-md-12">
                           <p>१. उद्योगको नाम: <span>{{$data->industryName}}</span></p>    
                        </div>
                        <div class="col-md-12">
                            <p>२. ठेगाना: <span>{{$data->industryAddress}}</span></p>
                        </div>
                        <div class="col-md-12">
                          <p>३. फोन नं: <span>{{$data->industryPhone}}</span></p>
                        </div>
                        
                            <div class="col-md-12">
                               
                               <p>
                                    Flow Chart, Plant Layout, Plant Sanitation: <span>{{$data->flow}}</span></p>
                            </div>
                            <div class="col-md-12">
                              
                                <p>
                                    Personal Hygiene: <span>{{$data->personalHg}}</span></p>
                            </div>
                            <div class="col-md-12">
                                
                                <p>
                                    Condition of raw and finished products: <span>{{$data->products}}</span> </p>
                            </div>
                        
                       
                            <div class="col-md-12">
                               
                                <p>
                                    Machinery used and manufactured by treatment of raw water: <span>{{$data->machinery}}</span></p>
                            </div>
                            <div class="col-md-12">
                               
                                <p>
                                    Foods additives used: <span>{{$data->foods}}</span></p>
                            </div>
                            <div class="col-md-12">
                               
                                <p>
                                    Plant Location(map): <span>{{$data->plantLocation}}</span></p>
                            </div>
                            <div class="col-md-12">
                               
                                <p>
                                    Label Information: <span>{{$data->labelInformation}}</span> </p>
                            </div>
                        
                        <div class="col-md-12">
                          <p>अन्य: <span>{{$data->remarks}}</span></p>
                        </div>
                        
                    </div>


                    <!-- Body End -->
                    <!-- Content end -->
                </div>
            </div>
        </div>
    </div>
</div>