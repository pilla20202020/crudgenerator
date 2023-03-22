<div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.ShowNationalfoodandfeedreferencelaboratory') }}</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>{{ __('lang.Nationalfoodandfeedreferencelaboratory') }} {{ __('lang.Details') }}</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <!-- <div class="card-head">
                        <h2 class="text-center">{{$data['sampleNumber']}}</h2>
                    </div> -->
                    <div class="card-body">
              <!-- Content Start -->
              
    
<div class="container-fluid dashboard p-4 d-flex justify-content-center align-items-center">
    <div class="p-2">
        <div class="">
      <div class="row g-3">
            <!-- <div class="col-12 text-center">
                <img src="nepallogo.png" class="nepallogo">
            </div> -->
            <span class="col-12 nepal-sarkar text-center"><h3>नेपाल सरकार</h3></span>
            <span class="col-12 krishi text-center"><h3>कृषि तथा पशुपन्छी विकास मन्त्रालय</h3></span>
            <span class="col-12 krishi text-center"><h3>खाद्य प्रविधि तथा गुण नियन्त्रण बिभाग</h3></span>
            <span class="col-12 heading text-center"><h3>खाद्य तथा दाना स्वच्छता एवं गुणस्तर नियमन महाशाखा</h3></span>
            <span class="col-12 nepal-sarkar text-center"><h3>बबरमहल, काठमाडौं</h3></span>
            <span class="col-12 heading text-center"><h3>थ्री राष्ट्रिय खाद्य तथा दाना रिफ्रेन्स प्रयोगशाला</h3></span>

        <div class="pb-5 col-12">
            <div class="">
                <p>यस अनुज्ञापत्र तथा निरिक्षण शाखामा प्राप्त भएको तपशिल बमोजिमको खाद्य/दाना पदार्थको नमुनाको तपशिल
                    बमोजिमको पारामिटरको परिक्षण गरि यथासक्य चाँडाे प्रतिवेदन पठाईदिनु हुन अनुरोध छ |</p>

            </div>
        </div>
    
            <div class="col-md-8">
                <div>
                 
                  <p>नमुना संकेत नम्बर: <span>{{$data->sampleNumber}}</span></p>
                    
                   
                </div>
            </div>
            <div class="col-md-4">
                  <p>मिति: <span>{{$data->date}}</span></p>              
            </div>
   
        <div class="col-12">
           <p>खाघ पदार्थ/दाना पदार्थको नमुना विवरण: <span>{{$data->sampleDetails}}</span></p>
        </div>
        <div class="col-12">
           <p>परिक्षण गर्नुपर्ने पारामिटर: <span>{{$data->parameter}}</span></p>
        </div>
       
            <div class="col-12 d-flex">
                <p>परिक्षण दस्तुर रु: <span>{{$data->examinationFee}}</span></p>
              
            </div>
            <div class="col-12">
               <p>राजस्व रसिद/ भौचर नम्बर: <span>{{$data->voucherNumber}}</span></p>
               
            </div>
            <div class="col-12">
        <p>राजस्व बुझाएको मिति: <span>{{$data->dateOfRemittanceRevenue}}</span></p>
            </div>
</div>
     </div>
       </div>
        </div>
              <!-- Content End -->
    </div>
            </div>
        </div>
    </div>
</div>