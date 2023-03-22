
                <form action="{{route('form8.regardingissuancelicense.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","Industry Name")}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","Industry Address")}}
</div><div class="col-lg-6">{{createDate('enrollmentDate','enrollmentDate','Enrollment Date')}}
</div><div class="col-lg-6">{{createDate("submissionDate","submissionDate","Submission Date")}}
</div><div class="col-lg-6">{{createText("nameOfInspector","nameOfInspector","Name Of Inspector")}}
</div><div class="col-lg-6">{{createDate("dateOfInspection","dateOfInspection","Date Of Inspection")}}
</div><div class="col-lg-6">{{createDate("correctionDate","correctionDate","Correction Date")}}
</div><div class="col-lg-6">{{createText("certificateNo","certificateNo","Certificate No")}}
</div><div class="col-lg-12">{{createLabel("","form-label col-form-label","Inspection Report")}}
</div><div class="col-lg-6">{{createRadio("inspectionReport","","",["satisfactory"],"Satisfactory")}}
</div><div class="col-lg-6">{{createRadio("inspectionReport","","",["Dissatisfactory"],"Dissatisfactory")}}

<!-- </div><div class="col-lg-6">{{createText("dissatisfaction","dissatisfaction","Dissatisfaction")}}
</div><div class="col-lg-6">{{createText("satisfaction","satisfaction","Satisfaction")}} -->
</div><div class="col-lg-6">{{createText("foodName","foodName","Food Name")}}
</div><div class="col-lg-6">{{createText("labelName","labelName","Label Name")}}
</div><div class="col-lg-6">{{createText("packingSize","packingSize","Packing Size")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div>
        <div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','Remarks')}}{{createTextArea("remarks","remarks",'',"Remarks")}}
</div><br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>