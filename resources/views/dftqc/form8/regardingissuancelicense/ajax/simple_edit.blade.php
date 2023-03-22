
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","IndustryAddress",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("enrollmentDate","enrollmentDate","EnrollmentDate",'',$data->enrollmentDate)}}
</div><div class="col-lg-6">{{createText("submissionDate","submissionDate","SubmissionDate",'',$data->submissionDate)}}
</div><div class="col-lg-6">{{createText("nameOfInspector","nameOfInspector","NameOfInspector",'',$data->nameOfInspector)}}
</div><div class="col-lg-6">{{createText("dateOfInspection","dateOfInspection","DateOfInspection",'',$data->dateOfInspection)}}
</div><div class="col-lg-6">{{createText("correctionDate","correctionDate","CorrectionDate",'',$data->correctionDate)}}
</div><div class="col-lg-6">{{createText("certificateNo","certificateNo","CertificateNo",'',$data->certificateNo)}}
</div><div class="col-lg-6">{{createText("dissatisfaction","dissatisfaction","Dissatisfaction",'',$data->dissatisfaction)}}
</div><div class="col-lg-6">{{createText("satisfaction","satisfaction","Satisfaction",'',$data->satisfaction)}}
</div><div class="col-lg-6">{{createText("foodName","foodName","FoodName",'',$data->foodName)}}
</div><div class="col-lg-6">{{createText("labelName","labelName","LabelName",'',$data->labelName)}}
</div><div class="col-lg-6">{{createText("packingSize","packingSize","PackingSize",'',$data->packingSize)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>