@extends('dftqc.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <div class="d-flex justify-content-between pb-4 ">

                                    <h2 class="noprint">{{ __('lang.Newlicenseissue') }} {{ __('lang.Details') }}</h2>
                                  
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <!-- <ul class="d-flex">
                                                {!! createCanvasButton('customBtnAdd', '', 'Newlicenseissue', 'form7.newlicenseissue.create') !!}
                                            </ul> -->
                                            <button class="btn btn-primary print_pdf float-end" onclick="javascript:window.print()">Print
                                        PDF</button>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block printableArea">

                        <div class="card w-100">
                            <div class="p-5">

                                <!-- <div class="card-head">
                                <h2 class="text-center">{{ $data['industryName'] }}</h2>
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
                                                    <p>बबरमहल, काठमाडौं ।</p>
                                                </div>
                                                <p class="col-md-6 d-flex align-items-center gap-2 justify-content-end">
                                                    <label class="miti">मिति:</label><span></span>
                                                </p>
                                                <p class="col-12 text-center subject">विषयः- खाद्य उद्योग अनुज्ञापत्र (नया
                                                    जारी) पाउँ
                                                    बारे ।</p>
                                                <p class="col-12">
                                                <p>महोदय,</p>
                                                </p>
                                                <p class="col-12">मैले/हामीले निम्न बमोजिमको खाद्य पदार्थ उत्पादन/प्रशोधन
                                                    तथा बिक्री
                                                    वितरण गर्न चाहेकोले लाग्ने दस्तुर समेत संलग्न राखी
                                                    रू. १०-| को टिकट टाँसी यस उद्योगको नाममा नियमानुसार अनुज्ञापत्र जारी गरी
                                                    पाउनको लागि
                                                    निम्नानुसारको विवरण सहित अनुरोध
                                                    गरेको छु/छौं।</p>
                                                <p class="col-12">विवरण:-</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- header end -->

                                    <!-- body start -->
                                    <div class="row g-3">
                                        <div
                                            class="text-center form3-head d-flex justify-content-center align-content-center">

                                        </div>
                                        <div class="col-md-12">
                                            <p>१. उद्योगको नाम: <span> {{ $data['industryName'] }}</span></p>
                                        </div>
                                        <label for="exampleFormControlInput1" class="form-label mb-0">२. उद्योगको ठेगाना
                                            :-</label>
                                        <div class="col-md-3">
                                            <p>टोल: <span>{{ $data['industryAddressTol'] }}</span></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>न.पा / ग.बि.स: <span>{{ $data['MunicipalityVDC'] }}</span></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>जिल्ला: <span>{{ $data['industryDistrict'] }}</span></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>फोन नं: <span></span></p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>३. उद्योग/फर्मको को किसिम: <span>{{ $data['industryType'] }}</span></p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>४. उद्योगपतिको नाम ठेगाना: <span>{{ $data['industryManagerAddress'] }}</span>
                                            </p>
                                        </div>
                                        <label for="exampleFormControlInput1" class="form-label mb-0">५. उद्योगको काम
                                            कारवाही जिम्मा
                                            लिनेको नाम, थर, ठेगाना: <span>{{ $data['responsiblepersonName'] }},
                                                {{ $data['responsiblepersonAddress'] }}</span></label>
                                        <div class="col-md-12">
                                            <label class="form-check-label">(क) बाबुको नाम:
                                                <span>{{ $data['fatherName'] }}</span></label>

                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-check-label">(ख) बाजेको नाम:
                                                <span>{{ $data['grandFatherName'] }}</span></label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-check-label">(ग) स्थाही ठेगाना (नागरिकता अनुसार):
                                                <span>{{ $data['permanentAddress'] }}</span></label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-check-label">(घ) अस्थाही ठेगाना:
                                                <span>{{ $data['temporaryAddress'] }}</span></label>
                                        </div>
                                        <label for="exampleFormControlInput1" class="form-label mb-0">६. उत्पादन तथा बिक्रि
                                            वितरण / थप
                                            गर्न चाहेको खाद्य पदार्थ सम्बन्धी विवरण *</label>
                                        <div class="col-md-4">
                                            <p>खाद्य पदार्थको नाम:<br><span>{{ $data['foodNameOne'] }}</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>प्यकिङ्ग साइज (तौल):<br><span>{{ $data['packingSizeOne'] }}</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>ब्राण्ड / मार्का : <br><span>{{ $data['brandOne'] }}</span></p>


                                        </div>
                                        <div class="col-md-12">
                                            <p>७.उद्योगको लागि चाहिने मशिनरी: <span>{{ $data['industryMachineOne'] }}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="skill" class="form-label">८. प्राबिधिक सीप: </label><br>
                                            <label class="form-check-label"> क) दक्ष्य जनशक्तिको व्यवस्ता :
                                                <span>{{ $data['industryManageOne'] }}</span></label>

                                        </div>
                                        <div class="col-md-12">
                                            <label for="parameter" class="form-label">९. प्रयोगशालाको व्यवस्था</label><br>
                                            <label class="form-check-label">क) प्रयोगशाला भएमा बिस्लेसन गरिने प्यारामीटरहरु
                                                :
                                                <span>{{ $data['labWorksOne'] }}</span></label>
                                        </div>

                                        <div class="col-md-8">
                                            <label for="sanitation" class="form-label">१०. सरसफाईको व्यवस्था :-</label>
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">१. कचा पदार्थको किसिम स्रोत :
                                                        <span></span></label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">२. उत्पादित पदार्थको बजार :
                                                        <span></span></label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">३. उद्योगको लागत:
                                                        <span>{{ $data['industryCost'] }}</span></label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">४. उद्योगको क्ष्य्मता:
                                                        <span>{{ $data['industryCapacity'] }}</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>निवेदक,</p>
                                            <p>सहि: &nbsp;&nbsp;<span>....................................</span></p>
                                            <p>नाम: <span></span></p>
                                            <p>ठेगाना: <span></span></p>
                                        </div>

                                        <label for="exampleFormControlInput1" class="form-label mb-0">११. संगलग् गर्नु पर्ने
                                            विवरणहरु
                                            :-</label>
                                        <div class="col-md-12">
                                            <div>
                                                <p>नया जारिको हकमा</p>
                                            </div>
                                            <div class="form-check">

                                                <label class="form-check-label" for="renew">
                                                    क) उद्योग दर्ताको प्रमाणपत्र प्रतिलिपि | </label>
                                            </div>
                                            <div class="form-check">

                                                <label class="form-check-label" for="bill">
                                                    ख) राजस्व दस्तुर बुझाएको नगदी रशिद |</label>
                                            </div>
                                            <div class="form-check">

                                                <label class="form-check-label" for="highlow">
                                                    ग) बोर्डको हकमा दिएको आधिकारिक पत्र </label>
                                            </div>
                                            <div class="form-check">

                                                <label class="form-check-label" for="label">
                                                    घ) उद्योगपतिको अधिकारिक पत्र (उद्योगको कारबाहीमा जिम्मा लिने व्यक्ति
                                                    उद्योगपति
                                                    नभएमा) </label>
                                            </div>
                                            <div class="form-check">

                                                <label class="form-check-label" for="sample">
                                                    ङ) अनुज्ञापत्र लिने व्यक्तिको २ प्रति पस्स्पोर्ट साईजको फोटो </label>
                                            </div>
                                            <div class="form-check">

                                                <label class="form-check-label" for="household">
                                                    च) प्याक गरिएका खाद्य पदार्थको लेबल १/१ प्रति लोगो वा ब्रान्ड भएमा सो
                                                    अनुरुपको
                                                </label>
                                            </div>
                                            <label class="form-check-label" for="household">
                                                छ) उद्योग सम्म पुग्ने नक्सा(म्याप सहित )</label>
                                        </div>
                                        <label class="form-check-label" for="household">
                                            ज) नागरिकताको प्रतिलिपि </label>
                                    </div>
                                    <label class="form-check-label" for="household">
                                        झ) प्रसोधित पिउने पनि उद्योगले अनुज्ञापत्र जारिको लागि पुर्याउनु पर्ने थप विवरणहरु |
                                        स्वचछकर तथा
                                        गुणस्तरीय प्रशोदित पिउने पानी उत्पादन तथा बिक्रि बितरणका लागि प्रसोधित पिउने पनि
                                        उद्योग
                                        अनुज्ञापत्र जारीको लागि दिईने निवेदन तथा आवश्यक कागजातहरुका साथमा निम्न बमोजिमका थप
                                        विवरण
                                        अनिवार्य रूपमा पेश गरि मात्र निवेदन दर्ता हुने | </label>
                                </div>


                            </div>

                        </div>

                        <div class="card w-100 mt-3">
                            <div class="p-5">
                                <div class="card-body">
                                    <!-- content Start -->

                                    <div class="row g-3">
                                        <div class="col-md-9">
                                            <p>
                                                श्रीमान महानिर्देशक ज्यु ,
                                            </p>
                                            <p>
                                                (महाशाखा/ शाखा प्रमुख ज्यु )
                                            </p>
                                            <p>
                                                खाद्य प्रविधि तथा गुण नियन्त्रण बिभाग
                                            </p>
                                            <p>
                                                बबरमहल काठमाडौँ |

                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>
                                                मिति: <span>{{ $recommendation['date'] }}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p>बिषय: खाद्य उद्योग स्थापना गर्न सिफारिश पाउंँ |</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>महोदय ,</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>



                                                हामीले/मैले निम्न विवरण बमोजिमका खाद्य पदार्थ उत्पादन÷प्रशोधन विक्री वितरण
                                                गर्न चाहेकोले
                                                खाद्य नियमावली २०४७ को नियम २ को उपनियम (२) बमोजिम उद्योग स्थापनार्थ घरेलु
                                                तथा साना
                                                उद्योग कार्यालयको नाउँमा सिफारिश गरी पाउन उक्त कार्यालयमा दिने उद्योग दर्ता
                                                निवेदन फाराम
                                                (ख) को प्रतिलिपि साथै राखी रु १०/– को टिकट टाँसी यो निवेदन पेश गरेको छौ/छु ।
                                                उद्योग
                                                स्थापना पश्चात नियमावली २०२७ को नियम (२८) (४) बमोजिम अनुज्ञापत्र लिई मात्र
                                                उत्पादित
                                                खाद्य पदार्थ विक्री वितरण गरिने व्यहोरा गर्दछौ/छु ।



                                            </p>

                                        </div>
                                        <div class="col-md-12">
                                            विवरण :

                                        </div>
                                        <div class="col-md-12">
                                            १. उद्योगको नाम: <span>{{ $recommendation['industryName'] }}</span>
                                        </div>
                                        <div class="col-md-12">
                                            २. ठेगाना: <span>{{ $recommendation['industryAddress'] }}</span>
                                        </div>
                                        <div class="col-md-12">
                                            ३. उद्योगपतिको


                                        </div>
                                        <div class="col-md-12">
                                            <P class="form-check-label">क. नाम थर: <span>{{ $recommendation['industryOwnerName'] }}
                                                    {{ $recommendation['industryOwnerMiddleName'] }}
                                                    {{ $recommendation['industryOwnerLastName'] }}</span></P>
                                            <P class="form-check-label">ख.
                                                ठेगाना:<span>{{ $recommendation['industryOwnerAddress'] }}</span></P>

                                        </div>
                                        <div class="col-md-12">
                                            <p>४. उत्पादन गर्न चाहेको खाद्य पदार्थको नाम:
                                                <span>{{ $recommendation['productName'] }}</span>
                                            </p>


                                        </div>
                                        <div class="col-md-12">
                                            <p>
                                                ५. उद्योगको किसिम : <span>{{ $recommendation['productType'] }}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>६. उद्योगको लागि चाहने मेसीनरी: <span>{{ $recommendation['machinery'] }}</span> </p>

                                        </div>
                                        <div class="col-md-12">
                                            <p>७. प्राबिधिक सीप (तालिम अनुभव आधि ):
                                                <span>{{ $recommendation['techincialSkills'] }}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>८. सरसफाईको व्यवस्था: <span>{{ $recommendation['cleanManagement'] }}</span> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>९. कच्चा पदार्थको विवरण र श्रोत :
                                                <span>{{ $recommendation['descriptionAndSourceOfRawMaterials'] }}</span>
                                            </p>

                                        </div>
                                        <div class="col-md-12">
                                            <p>१० उद्योगको पुंजी: <span>{{ $recommendation['industryBudget'] }}</span></p>

                                        </div>


                                        <div class="col-md-12">
                                            <p>११. उद्योगको क्ष्यमता: <span>{{ $recommendation['industryCapacity'] }}</span> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>१२ अन्य: <span>{{ $recommendation['remarks'] }}</span> </p>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <div>
                                                <p>निवेदक: <span></span> </p>
                                                <p>सही: <span>__________________</span></p>
                                                <p>नाम: <span>{{ $recommendation['applicantName'] }}</span></p>
                                                <p>ठेगाना: <span>{{ $recommendation['applicantAddress'] }}</span> </p>

                                            </div>
                                        </div>



                                    </div>








                                    <!-- content End -->
                                </div>
                            </div>
                        </div>

                        @if ($data['roadMap'])
                            <div class="card w-100 mt-3">
                                <td class="tb-col">
                                        <img src="{{ asset('storage/' . $data['roadMap']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                                </td>
                            </div>
                        @endif

                        @if ($data['packagedLogo'])
                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['packagedLogo']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                                    </td>
                        </div>
                        @endif

                        @if ($data['industryregistrationCertificate'])
                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['industryregistrationCertificate']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                                    </td>
                        </div>
                        @endif

                        @if ($data['revenueReceipt'])
                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['revenueReceipt']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                                    </td>
                        </div>
                        @endif

                        @if ($data['letter'])
                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['letter']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                                    </td>
                        </div>
                        @endif

                        @if ($data['industralistLetter'])
                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['industralistLetter']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                                    </td>
                        </div>
                        @endif

                        @if ($data['passportSize'])
                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['passportSize']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                            </td>
                        </div>
                        @endif

                        @if ($data['citizenshipCopy'])

                        <div class="card w-100 mt-3">
                            <td class="tb-col">
                                    <img src="{{ asset('storage/' . $data['citizenshipCopy']) }}"
                                        alt="{{ $data['industryName'] }}" class="img img-fluid p-3">
                            </td>
                        </div>
                        @endif


                        <!-- body End -->

                        <!-- Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
