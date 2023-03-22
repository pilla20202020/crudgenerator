
        <form action="{{route('form8.regardingissuancelicense.update',[$data->regardingissuancelicense_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","Industry Name",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","Industry Address",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("enrollmentDate","enrollmentDate","Enrollment Date",'',$data->enrollmentDate)}}
</div><div class="col-lg-6">{{createDate("submissionDate","submissionDate","Submission Date",'',$data->submissionDate)}}
</div><div class="col-lg-6">{{createText("nameOfInspector","nameOfInspector","Name Of Inspector",'',$data->nameOfInspector)}}
</div><div class="col-lg-6">{{createDate("dateOfInspection","dateOfInspection","Date Of Inspection",'',$data->dateOfInspection)}}
</div><div class="col-lg-6">{{createDate("correctionDate","correctionDate","Correction Date",'',$data->correctionDate)}}
</div><div class="col-lg-6">{{createText("certificateNo","certificateNo","Certificate No",'',$data->certificateNo)}}
</div><div class="col-lg-6">{{createText("dissatisfaction","dissatisfaction","Dissatisfaction",'',$data->dissatisfaction)}}
</div><div class="col-lg-6">{{createText("satisfaction","satisfaction","Satisfaction",'',$data->satisfaction)}}
</div><div class="col-lg-6">{{createText("foodName","foodName","Food Name",'',$data->foodName)}}
</div><div class="col-lg-6">{{createText("labelName","labelName","Label Name",'',$data->labelName)}}
</div><div class="col-lg-6">{{createText("packingSize","packingSize","Packing Size",'',$data->packingSize)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','remarks','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>