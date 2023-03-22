@extends('consumer.layouts.employee.employee')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">

                            <div class="offcanvas-body" data-simplebar>
                                <div class="nk-block-head-content w-100">
                                    <div class="d-flex justify-content-between pb-4">
                                        <h2>{{ __('lang.newlicenseissue') }}
                                            {{ __('lang.Details') }}</h2>


                                                <a href="{{ route('form7.newlicenseissue.print', $data->newlicenseissue_id) }}"
                                                    class="btn btn-sm btn-icon btn-lighter mt-1 noprint"><em class="icon ni ni-printer"></em></a>

                                    </div>
    <a type="button" class="btn btn-soft btn-info float-end mb-4" href="{{route('consumer.dashboard')}}"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a>
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
                                <div class="row">


                        <div class="col-md-6">
                            <p>श्रीमान महानिर्देशकज्यु,</p>
                            <p>खाद्य प्रविधि तथा गुण नियन्त्रण विभाग</p>
                            <p>बबरमहल, काठमाडौं ।</p></div>
                        <p class="col-md-6 d-flex align-items-center gap-2 justify-content-end"><label class="miti">मिति:</label><span></span> </p>
                    <p class="col-12 text-centerया जारी) पाउँ बारे ।</p>
                    <p class="col-12"><p>महोदय,</p></p>
                    <p class="col-12">मैले/हामीले निम्न बमोजिमको खाद्य पदार्थ उत्पादन/प्रशोधन तथा बिक्री वितरण गर्न चाहेकोले लाग्ने दस्तुर समेत संलग्न राखी
                        रू. १०-| को टिकट टाँसी यस उद्योगको नाममा नियमानुसार अनुज्ञापत्र जारी गरी पाउनको लागि निम्नानुसारको विवरण सहित अनुरोध
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
                                <p>टोल: <span>{{$data->industryAddressTol}}</span></p>
                            </div>
                            <div class="col-md-3">
                                <p>न.पा / ग.बि.स: <span>{{$data->MunicipalityVDC}}</span></p>
                            </div>
                            <div class="col-md-3">
                                <p>जिल्ला: <span>{{$data->industryDistrict}}</span></p>
                            </div>
                            <div class="col-md-3">
                                <p>फोन नं: <span></span></p>
                           </div>
                            <div class="col-md-12">
                                <p>३. उद्योग/फर्मको को किसिम: <span>{{$data->industryType}}</span></p>
                            </div>
                            <div class="col-md-12">
                    <p>४. उद्योगपतिको नाम ठेगाना: <span>{{$data->industryManagerAddress}}</span></p>
                            </div>
                            <label for="exampleFormControlInput1" class="form-label mb-0">५. उद्योगको काम कारवाही जिम्मा लिनेको नाम, थर, ठेगाना:<span>{{$data->responsiblepersonName}}, {{$data->responsiblepersonAddress}}</span></label>
                            <div class="col-md-12">
                                <label class="form-check-label">(क) बाबुको नाम: <span>{{$data->fatherName}}</span></label>

                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label">(ख) बाजेको नाम: <span>{{$data->grandFatherName}}</span></label>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label">(ग) स्थाही ठेगाना (नागरिकता अनुसार): <span>{{$data->permanentAddress}}</span></label>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label">(घ) अस्थाही ठेगाना: <span>{{$data->temporaryAddress}}</span></label>
                            </div>
                            <label for="exampleFormControlInput1" class="form-label mb-0">६. उत्पादन तथा बिक्रि वितरण / थप गर्न चाहेको खाद्य पदार्थ सम्बन्धी विवरण *</label>
                            <div class="col-md-4">
                               <p>खाद्य पदार्थको नाम: <span>{{$data->foodNameOne}}</span></p>
                            </div>
                            <div class="col-md-4">
                                <p>प्यकिङ्ग साइज (तौल): <span>{{$data->packingSizeOne}}</span></p>
                            </div>
                            <div class="col-md-4">
                               <p>ब्राण्ड / मार्का : <span>{{$data->brandOne}}</span></p>


                            </div>
                            <div class="col-md-12">
                               <p>७.उद्योगको लागि चाहिने मशिनरी: <span>{{$data->industryMachineOne}}</span></p>
                            </div>
                            <div class="col-md-12">
                                <label for="skill" class="form-label">८. प्राबिधिक सीप: </label><br>
                              <label class="form-check-label"> क) दक्ष्य जनशक्तिको व्यवस्ता : <span>{{$data->industryManageOne}}</span></label>

                            </div>
                            <div class="col-md-12">
                                <label for="parameter" class="form-label">९. प्रयोगशालाको व्यवस्था</label><br>
                                <label class="form-check-label">क) प्रयोगशाला भएमा बिस्लेसन गरिने प्यारामीटरहरु : <span>{{$data->labWorksOne}}</span></label>
                            </div>

                           <div class="col-md-8">
                            <label for="sanitation" class="form-label">१०. सरसफाईको व्यवस्था :-</label>
                            <div class="col-md-12">
                            <div class="form-check">
                               <label class="form-check-label">१. कचा पदार्थको किसिम स्रोत : <span></span></label>
                            </div>
                            <div class="form-check">
                               <label class="form-check-label">२. उत्पादित पदार्थको बजार : <span></span></label>
                            </div>
                            <div class="form-check">
                               <label class="form-check-label">३. उद्योगको लागत: <span>{{$data->industryCost}}</span></label>
                            </div>
                            <div class="form-check">
                               <label class="form-check-label">४. उद्योगको क्ष्य्मता: <span>{{$data->industryCapacity}}</span></label>
                            </div>
                        </div>
                           </div>
                           <div class="col-md-4">
                            <p>निवेदक,</p>
                            <p>सहि: &nbsp;&nbsp;<span>....................................</span></p>
                            <p>नाम: <span></span></p>
                            <p>ठेगाना: <span></span></p>
                           </div>

                            <label for="exampleFormControlInput1" class="form-label mb-0">११. संगलग् गर्नु पर्ने विवरणहरु  :-</label>
                            <div class="col-md-12">
                                <div>
                                    <p>नया जारिको हकमा</p>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="renew">
                                        क) उद्योग दर्ताको प्रमाणपत्र प्रतिलिपि | <span><a href="{{ asset('storage/' . $data->industryregistrationCertificate) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span> </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="bill">
                                        ख) राजस्व दस्तुर बुझाएको नगदी रशिद | <span><a href="{{ asset('storage/' . $data->revenueReceipt) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span></label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="highlow">
                                        ग) बोर्डको हकमा दिएको आधिकारिक पत्र   <span><a href="{{ asset('storage/' . $data->letter) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span> </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="label">
                                        घ) उद्योगपतिको अधिकारिक पत्र (उद्योगको कारबाहीमा जिम्मा लिने व्यक्ति उद्योगपति नभएमा)  <span><a href="{{ asset('storage/' . $data->industralistLetter) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span></label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="sample">
                                        ङ) अनुज्ञापत्र लिने व्यक्तिको २ प्रति पस्स्पोर्ट साईजको फोटो  <span><a href="{{ asset('storage/' . $data->passportSize) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span></label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label" for="household">
                                        च) प्याक गरिएका खाद्य पदार्थको लेबल १/१ प्रति लोगो वा ब्रान्ड भएमा सो अनुरुपको  <span><a href="{{ asset('storage/' . $data->packagedLogo) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span> </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="household">
                                        छ) उद्योग सम्म पुग्ने नक्सा(म्याप सहित ) <span><a href="{{ asset('storage/' . $data->roadMap) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="household">
                                        ज) नागरिकताको प्रतिलिपि  <span><a href="{{ asset('storage/' . $data->citizenshipCopy) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="household">
                                        झ) प्रसोधित पिउने पनि उद्योगले अनुज्ञापत्र जारिको लागि पुर्याउनु पर्ने थप विवरणहरु | स्वचछकर तथा गुणस्तरीय प्रशोदित पिउने पानी उत्पादन तथा बिक्रि बितरणका लागि प्रसोधित पिउने पनि उद्योग अनुज्ञापत्र जारीको लागि दिईने निवेदन तथा आवश्यक कागजातहरुका साथमा निम्न बमोजिमका थप विवरण अनिवार्य रूपमा पेश गरि मात्र निवेदन दर्ता हुने | <span><a href="{{ asset('storage/' . $data->drinkingWater) }}" target="_blank" class="btn btn-primary">View Uploaded File</a></span></label>
                                </div>
                            </div>

                        </div>


                        <!-- body End -->

                        @endsection
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
    </div>
</div>

