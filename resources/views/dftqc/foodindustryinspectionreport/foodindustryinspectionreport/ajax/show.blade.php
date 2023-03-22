<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ __('lang.Showfoodindustryinspectionreport.') }}</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
           
                <h2>{{ __('lang.foodindustryinspectionreport.') }} {{ __('lang.Details') }}</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                   
                    <div class="card-body">
                        <!-- content start -->
               
<!-- header start -->

  
        <div class="row">

<!-- <div class="col-md-2 d-flex align-items-center justify-content-center">
<img src="nepallogo.png" class="nepal-logo">

</div> -->
<div class="col-md-12 text-center">
    <p class="nepal-sarkar"><h3>नेपाल सरकार</h3>
    </p>
    <p><h3>कृषि तथा पशुपन्छी विकास मन्त्रालय</h3></p>
    <p><h3>खाद्य प्रविधि तथा गुण न्नियन्त्रण बिभाग</h3></p>
<p><h3><u class="">खाद्य उद्योग निरिक्षण प्रतिवेदन</u></h3></p> 
</div>
    </div>

<!-- header End -->
<!-- body start -->

 <div class="row g-3 mt-3"> 
       
        <div class="col-md-12">
            <p>१. उद्योगको नाम, ठेगाना: <span>{{$data->industryName}}, {{$data->addressTwo}}</span></p>
            
        </div>
       
        <div class="col-md-4">
<p>२. उद्योगपतिको नाम: <span>{{$data->propritorName}}</span></p>
        </div>
        <div class="col-md-12">
            <p>३. ब्यवस्थापनको नाम: <span>{{$data->management}}</span></p>
        </div>
        <div class="col-md-12">
            <p>४. उद्योग स्थापना वर्ष: <span>{{$data->estalishedDate}}</span></p>
        </div>
        <div class="col-md-12">
<p>५. उद्योगको स्वरुप : <span>{{$data->industryFormat}}</span></p>         
        </div>
        <div class="col-md-12">
<p>६. कर्मचारी संख्या: <span></span></p>
            
                <div>
<p class="form-check-label">क) प्राविधिक: <span>{{$data->technical}}</span></p>
                </div>
                <div>
<p class="form-check-label">ख) प्रसाशनिक: <span>{{$data->prasasanik}}</span></p>
                </div>
         
        </div>
        <div class="col-md-12">
          
          <p>७. अनुज्ञापत्र: <span>{{$data->license}}</span></p>
        </div>
        <div class="col-md-12">
<p>८. उत्पादित वस्तुको विवरण:</p>
        </div>
<div class="col-md-12">
<table class="table table-bordered">
    <tr>
        <th>सी.न.</th>
        <th>उत्पादित वस्तु</th>
        <th>ब्रान्ड</th>
        <th>उपभोग्य अवधी
        </th>
        <th>विक्री वितरण गर्ने क्षेत्र</th>
    </tr>
    <tr>
        <td>
            @php
            $counter=0;
            echo ++$counter;
            @endphp

            
        </td>
        <td>{{$data->products}}</td>
        <td>{{$data->brand}}</td>
        <td>{{$data->time}}</td>
        <td>{{$data->area}}</td>
    </tr>
</table>
</div>
        <div class="col-md-12">
            <p>९. लेबल तथा प्याकेजिङ विवरण:</p>
            <p class="form-check-label">क) प्याकेजिङ तरिका: <span>{{$data->packagingWay}}</span></p>
            <p class="form-check-label">ख) उद्योगको पुरा नाम, ठेगाना: <span>{{$data->industryNameAddress}}</span></p>
            <p class="form-check-label">ग) उत्पादन मिति: <span>{{$data->manufactureDate}}</span></p>
            <p class="form-check-label">घ) ब्याच न: <span>{{$data->batchNumberOne}}</span></p>
            <p class="form-check-label">ङ) उपभोग्य मिति: <span>{{$data->upayog}}</span></p>
            <p class="form-check-label">च) कचा पदार्थको समिश्रण: <span>{{$data->samrichan}}</span></p>
            <p class="form-check-label">छ) प्रयोग विधि: {{$data->proyog}}</p>
            <p class="form-check-label">ज) स्वास्थ्य तथा पोषण सम्बन्धि दावी: <span>{{$data->swasthya}}</span></p>
            <p class="form-check-label">झ) स्वास्थ्य तथा पोषण दाबी स्विकृत भएको:{{$data->swikrit}}</p>
        </div>
        
        <div class="col-md-12">
            <p>१०. संचयन व्यवस्था:</p>
            <p class="form-check-label">क) सरसफाई: <span>{{$data->sarsafai}}</span></p>
            <p class="form-check-label">ख) प्रकाश, हावा: <span></span>{{$data->prakashHawa}}</p>
            <p class="form-check-label">ग) तापक्रम: <span>{{$data->tapkram}}</span></p>
            <p class="form-check-label">घ) चरा, मुसा, झिंगा, किरा नियन्त्रण: <span>{{$data->chara}}</span></p>
            
        </div>
    

        <div class="col-md-6">
            <p>११. उद्योग तथा कामदार सरसफाई विवरण:</p>
            <p class="form-check-label">क) कर्मचारी व्यक्तिगत सरसफाई: <span>{{$data->hygiene}}</span></p>   
            <p class="form-check-label">ख) उद्योग रहने क्षेत्र: <span>{{$data->chetra}}</span></p>   
            <p class="form-check-label">ग) बाथरूम तथा चर्पीको अवस्था: <span>{{$data->bathroom}}</span></p>   
            <p class="form-check-label">घ) उत्पादन कक्ष्यको अवस्था: <span>{{$data->condition}}</span></p>   
            
        </div>
<div class="col-md-12">
    <p>१२. कचा पदार्थको नाम तथा स्रोत:</p>
    <p class="form-check-label">नाम: <span>{{$data->productName}}</span></p>
    <p class="form-check-label">स्रोत: <span>{{$data->productSouce}}</span></p>
</div>
<div class="col-md-12">
    <p>१३. प्रयोगशाला भए प्रयोगशाला विवरण:</p>
    <p class="form-check-label">क) परिक्षण  गरिने पारामीटरहरु: <span>{{$data->praichad}}</span></p>
    <p class="form-check-label">ख) प्रयोगशाला नभए कहाँ परिक्षण गर्ने गरिएको: <span>{{$data->prayog}}</span></p>
</div>
<div class="col-md-12">
<p>१४. संकलित नमुना विवरण: <span>{{$data->sample}}</span></p>
</div>
<div class="col-md-12">
    <p>१५. समग्र मुल्यांकन (निस्कर्स): <span>{{$data->conclusion}}</span></p>
</div>
<div class="col-md-8">
    <p>निक्षरण  मिति: <span>{{$data->date}}</span></p>
    <p>उद्योगको तर्फा बाट</p>
</div>
<div class="col-md-4">
    <p>_______________</p>
    <p>खाद्य निरिक्षक</p>
</div>
      
 </div>

<!-- body End -->


    <!-- content End -->
    </div>
            </div>
        </div>
    </div>
</div>