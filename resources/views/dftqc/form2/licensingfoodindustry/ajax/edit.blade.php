
        <form action="{{route('form2.licensingfoodindustry.update',[$data->licensingfoodindustry_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("number","number","Number",'',$data->number)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("industryName","industryName","Industry Name",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","Owner Name",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("responsiblePersonName","responsiblePersonName","Responsible Person Name",'',$data->responsiblePersonName)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","Father Name",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","Grand Father Name",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","Permanent Address",'',$data->permanentAddress)}}
</div><div class="col-lg-6">{{createText("temporaryAddress","temporaryAddress","Temporary Address",'',$data->temporaryAddress)}}
</div><div class="col-lg-6">{{createText("producedFoodName","producedFoodName","Produced Food Name",'',$data->producedFoodName)}}
</div><div class="col-lg-6">{{createText("sign","sign","Sign",'',$data->sign)}}
</div><div class="col-lg-6">{{createText("fingerPrint","fingerPrint","Finger Print",'',$data->fingerPrint)}}
</div><div class="col-lg-6">{{createText("directorGeneral","directorGeneral","Director General",'',$data->directorGeneral)}}
</div><div class="col-lg-6">{{createText("other","other","Other",'',$data->other)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>