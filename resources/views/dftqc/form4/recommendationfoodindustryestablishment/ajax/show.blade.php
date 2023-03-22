<div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowRecommendationfoodindustryestablishment') }}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body" data-simplebar>
    <div class="nk-block-head-content w-100">
        <div class="d-flex justify-content-between pb-4">

            <h2>{{ __('lang.Recommendationfoodindustryestablishment') }} {{ __('lang.Details') }}</h2>
            <button class="btn btn-primary print_pdf">Print PDF</button>
        </div>
        <div class="card w-100">
            <div class="p-5">

                <!-- <div class="card-head">
                        <h2 class="text-center">{{ $data['industryName'] }}</h2>
                    </div> -->
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
                                मिति: <span>{{ $data->date }}</span>
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



                                हामीले/मैले निम्न विवरण बमोजिमका खाद्य पदार्थ उत्पादन÷प्रशोधन विक्री वितरण गर्न चाहेकोले
                                खाद्य नियमावली २०४७ को नियम २ को उपनियम (२) बमोजिम उद्योग स्थापनार्थ घरेलु तथा साना
                                उद्योग कार्यालयको नाउँमा सिफारिश गरी पाउन उक्त कार्यालयमा दिने उद्योग दर्ता निवेदन फाराम
                                (ख) को प्रतिलिपि साथै राखी रु १०/– को टिकट टाँसी यो निवेदन पेश गरेको छौ/छु । उद्योग
                                स्थापना पश्चात नियमावली २०२७ को नियम (२८) (४) बमोजिम अनुज्ञापत्र लिई मात्र उत्पादित
                                खाद्य पदार्थ विक्री वितरण गरिने व्यहोरा गर्दछौ/छु ।



                            </p>

                        </div>
                        <div class="col-md-12">
                            विवरण :

                        </div>
                        <div class="col-md-12">
                            १. उद्योगको नाम: <span>{{ $data->industryName }}</span>
                        </div>
                        <div class="col-md-12">
                            २. ठेगाना: <span>{{ $data->industryAddress }}</span>
                        </div>
                        <div class="col-md-12">
                            ३. उद्योगपतिको


                        </div>
                        <div class="col-md-12">
                            <P class="form-check-label">क. नाम थर: <span>{{ $data->industryOwnerName }}
                                    {{ $data->industryOwnerMiddleName }} {{ $data->industryOwnerLastName }}</span></P>
                            <P class="form-check-label">ख. ठेगाना:<span>{{ $data->industryOwnerAddress }}</span></P>

                        </div>
                        <div class="col-md-12">
                            <p>४. उत्पादन गर्न चाहेको खाद्य पदार्थको नाम: <span>{{ $data->productName }}</span></p>


                        </div>
                        <div class="col-md-12">
                            <p>
                                ५. उद्योगको किसिम : <span>{{ $data->productType }}</span>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p>६. उद्योगको लागि चाहने मेसीनरी: <span>{{ $data->machinery }}</span> </p>

                        </div>
                        <div class="col-md-12">
                            <p>७. प्राबिधिक सीप (तालिम अनुभव आधि ): <span>{{ $data->techincialSkills }}</span></p>
                        </div>
                        <div class="col-md-12">
                            <p>८. सरसफाईको व्यवस्था: <span>{{ $data->cleanManagement }}</span> </p>
                        </div>
                        <div class="col-md-12">
                            <p>९. कच्चा पदार्थको विवरण र श्रोत :
                                <span>{{ $data->descriptionAndSourceOfRawMaterials }}</span></p>

                        </div>
                        <div class="col-md-12">
                            <p>१० उद्योगको पुंजी: <span>{{ $data->industryBudget }}</span></p>

                        </div>


                        <div class="col-md-12">
                            <p>११. उद्योगको क्ष्यमता: <span>{{ $data->industryCapacity }}</span> </p>
                        </div>
                        <div class="col-md-12">
                            <p>१२ अन्य: <span>{{ $data->remarks }}</span> </p>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <div>
                                <p>निवेदक: <span></span> </p>
                                <p>सही: <span>__________________</span></p>
                                <p>नाम: <span>{{ $data->applicantName }}</span></p>
                                <p>ठेगाना: <span>{{ $data->applicantAddress }}</span> </p>

                            </div>
                        </div>



                    </div>








                    <!-- content End -->
                </div>
            </div>
        </div>
    </div>
</div>
