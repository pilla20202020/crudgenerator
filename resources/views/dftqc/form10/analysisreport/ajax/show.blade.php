<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel"> {{ __('lang.ShowAnalysisreport') }}</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>{{ __('lang.Analysis Report') }} {{ __('lang.Details') }}</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <!-- <div class="card-head">
                        <h2 class="text-center">{{$data['sampleDetails']}}</h2>
                    </div> -->
                    <div class="card-body">
               
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-2">
            <div class="">
<div class="row">
    <div class="col-9 text-center">
        <p class="nepal-sarkar"><h3>नेपाल सरकार</h3></p>
        <p class="krishi"><h3>कृषि तथा पशुपन्छी विकास मन्त्रालय</h3></p>
        <p class="largeheading"><h2>खाद्य प्रविधि तथा गुण नियन्त्रण बिभाग</h2></p>
        <p class="rastriya">राष्ट्रिय खाद्य तथा दाना रिफ्रेन्स प्रयोगशाला</p>
        <p class="bislesan">विश्लेषण प्रतिवेदन </p>
    </div>
    <div class="col-3">
        <div class="d-flex align-items-center gap-2">
        <p>फोन न </p>
        <div>
            <p>४-२६२३६९ </p>
            <p>४-२६२७३९</p>
            <p>४-२६२४३०</p>
            <p>४-२४००१६ </p>
        </div>
        </div>
        <p>फ्याक्स :info@dftqc.gc</p>
        <p>वेभपेज: www.dftqc.gov.np</p>
        <p>बबरमहल, काठमाडौँ </p>
      
        </div>
<div class="col-12 pb-2">
<p>लाई</p>
<p>श्री अनुज्ञापत्र तथा निरीक्षण शाखा</p>
<p>खाद्य तथा दाना स्वच्छता एव गुणस्तर नियमन महाशाखा,</p>
<p>खाद्य प्रविधि तथा गुण नियन्त्रण विभाग</p>
<p>बबरमहल, काठमाण्डौ</p>
</div>
<div class="col-md-6">नमुना विवरण:<span>{{$data->sampleDetails}} </span></div>
<div class="col-md-6 chalani pb-2">चलानी मिति: <span>{{$data->invoiceDate}}</span></div>
<div class="row border p-3 table-below">
<div class="col-md-6">
    <p>नमुना दर्ता मिति: <span>{{$data->sampleRegistartionDate}}</span></p>
        <p>प्याकेजिड् अवस्था : <span>{{$data->packingCondition}}</span></p>
        <p>विश्लेषण सुरु मिति : <span>{{$data->analysisStartDate}}</span></p>
</div>
<div class="col-md-6 second-coll">
    <p>नमुगा कोड: <span>{{$data->sampleCode}}</span></p>
    <p>बिश्लेषण आवश्यक :{{$data->analysisRequired}}</p>
    <p>बिश्लेषण समाप्त मिति : <span>{{$data->analysisStartDate}}</span></p>
</div>
</div>
<div class="col-12 text-center bisla mb-2 mt-4">विश्लेषण नतिजा</div>
<div class="table-responsive">
    <table class="table col-12 table-bordered">
<tr>
    <th>क.सं</th>
    <th>परीक्षण पारामिटर</th>
    <th>परीक्षण विधि</th>
    <th>एकाई</th>
    <th>नतिजा</th>
    <th>तोकिएको मापदण्ड</th>
    <th>कैफियत</th>
</tr>
<tr>
<td>
    @php
    $counter=0;
    echo ++$counter;
    @endphp
</td>
<td>{{$data->parameter}}</td>
<td>{{$data->testMethod}}</td>
<td>{{$data->theUnit}}</td>
<td>{{$data->output}}</td>
<td>{{$data->prescribedcriteria}}</td>
<td>{{$data->mood}}</td>
</tr>

    </table>
    </div>

<div class="col-6 text-center">
    <p>...................</p>

<p>प्रमाणित गर्ने</p>
<p></p>
<p>बरिष्ठ खाद्य अनुसन्धान अधिकृत </p>
</div>
<div class="col-6 text-center">
 <p>...................</p>
    <p>आधिकारिक दस्तखत</p>
    <p></p>
    <p>( उप-महानिर्देशक )</p>
    
</div>
<div class="col-12">
<p>नोट:</p>
<p>१. यो बिश्लेषण नतिजा यस प्रयोगशालामा प्राप्त भएको नमुनाको लागि मात्र लागु हुनेछ |</p>
<p>२. यो बिश्लेषण प्रतिवेदन प्रयोगशालाको लिखित अनुमति बिना पुन: प्रकाशन गर्न पाइने छैन | बोधार्थ श्रीमान महानिर्देशक ज्यु खाद्य प्रबिधि तथा गुण नियन्त्रण विभाग, बबरमहल, काठमाडौँ |</p>


</div>

</div>


    </div>

    </div>
            </div>
        </div>
    </div>
</div>