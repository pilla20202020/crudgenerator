<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowRenewalfoodindustrylicense') }}</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>{{ __('lang.Renewalfoodindustrylicense') }} {{ __('lang.Details') }}</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
<!--     
                    <div class="card-head">
                        <h2 class="text-center">{{$data['industryName']}}</h2>
                    </div> -->
                    <div class="card-body">
                        <!-- Content start -->
                <!-- header start -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="p-2">
                                <div class="row">
                    
                    
                        <div class="col-md-6">
                            <p>श्रीमान महानिर्देशकज्यु,</p>
                            <p>खाद्य प्रविधि तथा गुण नियन्त्रण विभाग</p>
                            <p>बबरमहल, काठमाडौं ।</p></div>
                        <p class="col-md-6 d-flex align-items-center gap-2 justify-content-end"><label class="miti">मिति:</label><span></span> </p>
                    <p class="col-12 text-center subject">विषयः- खाद्य उद्योग अनुज्ञापत्र (नविकरण गरी) पाउँ बारे ।</p>
                    <p class="col-12"><p>महोदय,</p></p>
                    <p class="col-12">मैले/हामीले निम्न बमोजिमको खाद्य पदार्थ उत्पादन/प्रशोधन तथा बिक्री वितरण गर्न चाहेकोले लाग्ने दस्तुर समेत संलग्न राखी
                        रू. १० |- को टिकट टाँसी यस उद्योगको नाममा नियमानुसार अनुज्ञापत्र जारी गरी पाउनको लागि निम्नानुसारको विवरण सहित अनुरोध
                        गरेको छु/छौं।</p>
                    <p class="col-12">विवरण:-</p>
                        </div>
                            </div>
                        </div>
                        <!-- header end -->

                        <!-- body start -->
                      <div class="row g-3">
                            <div class="text-center form3-head d-flex justify-content-center align-content-center">
                             
                            </div>
                            <div class="col-md-12">
                               <p>१. उद्योगको नाम: <span> {{$data->industryName}}</span></p>
                            </div>
                            <label for="exampleFormControlInput1" class="form-label mb-0">२. उद्योगको ठेगाना :-</label>
                            <div class="col-md-3">
                                <p>टोल: <span>{{$data->industryName}}</span></p>
                            </div>
                            <div class="col-md-3">
                                <p>न.पा. / गा.बि.स: <span>{{$data->industryName}}</span></p>
                            </div>
                            <div class="col-md-3">
                                <p>जिल्ला: <span>{{$data->district}}</span></p>
                            </div>
                            <div class="col-md-3">
                                <p>फोन नं: <span>{{$data->phone}}</span></p> 
                           </div>
                            <div class="col-md-12">
                                <p>३. उद्योग/फर्मको को किसिम: <span>{{$data->type}}</span></p>
                            </div>
                            <div class="col-md-12">
                    <p>४. उद्योगपतिको नाम ठेगाना: <span>{{$data->addressTwo}}</span></p>
                            </div>
                            <label for="exampleFormControlInput1" class="form-label mb-0">५. उद्योगको काम कारवाही जिम्मा लिनेको नाम, थर, ठेगाना: <span>{{$data->responsiblepersonName}}, {{$data->responsiblepersonAddress}}</span></label>
                            <div class="col-md-12">
                                <label class="form-check-label">(क) बाबुको नाम: <span>{{$data->fatherName}}</span></label>

                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label">(ख) बाजेको नाम: <span>{{$data->grandFatherName}}</span></label>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label">(ग) स्थाही ठेगाना (नागरिकता अनुसार): <span>{{$data->addressThree}}</span></label>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label">(घ) अस्थाही ठेगाना: <span>{{$data->addressFour}}</span></label>
                            </div>
                            <label for="exampleFormControlInput1" class="form-label mb-0">६. उत्पादन तथा बिक्रि वितरण / थप गर्न चाहेको खाद्य पदार्थ सम्बन्धि विवरण *</label>
                            <div class="col-md-4">
                               <p>खाद्य पदार्थको नाम: <span>{{$data->ediblesOne}}</span></p>
                            </div>
                            <div class="col-md-4">
                                <p>प्यकिङ्ग साइज (तौल): <span>{{$data->packingOne}}</span></p>
                            </div>
                            <div class="col-md-4">
                               <p>ब्राण्ड / मार्का : <span>{{$data->brandOne}}</span></p>
                    
                    
                            </div>
                            <div class="col-md-12">
                               <p>७.उद्योगको लागि चाहिने मेसीनरी: <span></span></p>
                            </div>
                            <div class="col-md-12">
                                <label for="skill" class="form-label">८. प्राबिधिक सीप: </label><br>
                              <label class="form-check-label"> क) दक्ष्य जनशक्तिको व्यवस्ता : <span>{{$data->skill}}</span></label>
                    
                            </div>
                            <div class="col-md-12">
                                <label for="parameter" class="form-label">९. प्रयोगशालाको व्यवस्था</label><br>
                                <label class="form-check-label">क) प्रयोगशाला भएमा बिस्लेषण गरिने प्यारामीटरहरु : <span>{{$data->skills}}</span></label>
                            </div>
                         
                           <div class="col-md-8">
                            <label for="sanitation" class="form-label">१०. सरसफाईको व्यवस्ता :-</label>
                            <div class="col-md-12">
                            <div class="form-check">
                               <label class="form-check-label">१. कचा पदार्थको किसिम स्रोत : <span>{{$data->sanitation}}</span></label>
                            </div>
                            <div class="form-check">
                               <label class="form-check-label">२. उत्पादित पदार्थको बजार : <span>{{$data->manufacture}}</span></label>
                            </div>
                            <div class="form-check">
                               <label class="form-check-label">३. उद्योगको लागत: <span></span>{{$data->udhyog}}</label>
                            </div>
                            <div class="form-check">
                               <label class="form-check-label">४. उद्योगको क्ष्यमता: <span>{{$data->potential}}</span></label>
                            </div>
                        </div>
                           </div>
                           <div class="col-md-4">
                            <p>निवेदक,</p>
                            <p>सहि: &nbsp;&nbsp;<span>_____________________</span></p>
                            <p>नाम: <span></span></p>
                            <p>ठेगाना: <span></span></p>
                           </div>
                          
                            <label for="exampleFormControlInput1" class="form-label mb-0">११. नविकरणको हकमा :-</label>
                            <div class="col-md-12">
                                <div class="form-check">
                                   
                                    <label class="form-check-label" for="renew">
                                        क) जारी भएको अनुज्ञापत्र सक्कलै प्रति |</label>
                                </div>
                                <div class="form-check">
                                    
                                    <label class="form-check-label" for="bill">
                                        ख) राजस्व दस्तुर बुझाएको नगदी रसिद |</label>
                                </div>
                                <div class="form-check">
                                  
                                    <label class="form-check-label" for="highlow">
                                        ग) उत्पादित खाद्य पदार्थ विवरणमा थपघट गर्नु परेमा सोको विवरण |</label>
                                </div>
                                <div class="form-check">
                                   
                                    <label class="form-check-label" for="label">
                                        घ) उत्पादित खाद्य वस्तुको लेवल नमुना १ / १ प्रति |</label>
                                </div>
                                <div class="form-check">
                                  
                                    <label class="form-check-label" for="sample">
                                        ङ) उत्पादिन खाद्य वस्तुको नमुना |</label>
                                </div>
                                <div class="form-check">
                                
                                    <label class="form-check-label" for="household">
                                        च) घरेलु तथा साना उद्योग कार्यालयको उद्योग दर्ता प्रमाण पत्रको फोटोकपी / छायाप्रती |</label>
                                </div>
                            </div>
                           
                        </div>


                        <!-- body End -->

    <!-- Content End -->
    </div>
            </div>
        </div>
    </div>
</div>