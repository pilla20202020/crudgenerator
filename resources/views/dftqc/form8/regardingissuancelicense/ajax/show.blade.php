<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowRegardingissuancelicense') }}</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>{{ __('lang.Regardingissuancelicense') }} {{ __('lang.Details') }}</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <!-- <div class="card-head">
                        <h2 class="text-center">{{$data['industryName']}}</h2>
                    </div> -->
                    <div class="card-body">
                        <!-- content Start -->
                        <div class="">
                            <div class="content pt-2">
                                <h3 style="color: #333;" class="text-center">
                                    अनुज्ञापत्र जारी सम्बन्धमा ।
                                </h3>
                                <p> श्रीमान, <br>
                                    प्रस्तुत विषयमा <span><u>{{$data->industryName}}</u></span> <span><u>{{$data->industryAddress}}</u></span> मिति <span><u>{{$data->enrollmentDate}}</u></span> मा नियमानुसारको राजस्व
                                    दाखिला गरेको आम्दानि रसिद संलग्न राखि अनुज्ञापत्र जारी गरिपाउँ भनि निवेदन गरेको, नमुना परिक्षण बापतको
                                    पेश गरेको नमुनाको
                        
                                    राजस्व बुझाएको भौचर संलग्न गरी उद्योगले  अनुज्ञापत्र शाखामा मिति <span><u>{{$data->submissionDate}}</u></span>मा पेश गरेको नमुनाको
                                    परिक्षण गरेको पारामिटर गुणस्तर अनुकुल पाइएको, खाद्य निरिक्षक <span><u>{{$data->nameOfInspector}}ले</u></span> मिति <span><u>{{$data->dateOfInspection}}</u></span> मा उद्योग
                        
                                    निरिक्षण गर्दा <u>{{$data->inspectionReport}}</u> रहेको उद्योग निरिक्षण प्रतिवेदन प्राप्त भएको, उद्योगले पेश गरेको लेवलको नमुना सुधार
                                    गर्न भनेकोमा मिति <span><u>{{$data->correctionDate}}</u></span> मा पेश गरेको लेवलको नमुना खाद्य नियमावली २०२७ को नियम १८
                                    अनुसारको रहेको हुँदा तपशिल बमोजिमका खाद्य पदार्थ उत्पादन तथा बिक्रिवितरण गर्न खाद्य ऐन २०२३ को दफा
                                    ४(ख) र खाद्य नियमावलि २०२७ को नियम २४ मा व्यवस्था भए अनुसार <u> {{$data->industryName}}</u>
                        
                                    को नाममा <span><u>{{$data->certificateNo}}</u></span> को प्रमाणपत्र जारी हुन मुनासीव देखि फाइल पेश गर्दछु । <br>
                        
                                    तपशिलः
                                </p>
                            </div>
                        
                        
                            <div class="table-form">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">खाद्य पदार्थको नाम</th>
                                            <th scope="col">लेवलमा उल्लेख भएको नाम</th>
                                            <th scope="col">प्याकिङ्ग साइज</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                               {{$data->foodName}}
                                            </td>
                                            <td>
                                            {{$data->labelName}}
                                              
                                            </td>
                                            <td>
                                                {{$data->packingSize}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="content pt-2">
                                <p>
                                    श्रीमान,<br>
                        
                                    उपरोक्त बमोजिमको <u>{{$data->industryName}}</u> को नाममा खाद्य ऐन २०२३ को दफा ४(ख) र खाद्य
                                    नियमावलि २०२७ नियम २४ मा व्यवस्था भए अनुसार ०१-४०-७९-०७-७८१ को अनुज्ञापत्र जारी हुन उपयुक्त
                        
                                    देखी निर्णयार्थ पेश गर्दछु ।
                                </p>
                                <div class="d-flex justify-content-end">
                                    <p>___________________________</p>
                                </div>
                            </div>
                          
                        </div>
    <!-- content End -->
    </div>
            </div>
        </div>
    </div>
</div>