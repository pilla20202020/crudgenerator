
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("number","number","Number",'',$data->number)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","OwnerName",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("responsiblePersonName","responsiblePersonName","ResponsiblePersonName",'',$data->responsiblePersonName)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","FatherName",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","GrandFatherName",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","PermanentAddress",'',$data->permanentAddress)}}
</div><div class="col-lg-6">{{createText("temporaryAddress","temporaryAddress","TemporaryAddress",'',$data->temporaryAddress)}}
</div><div class="col-lg-6">{{createText("producedFoodName","producedFoodName","ProducedFoodName",'',$data->producedFoodName)}}
</div><div class="col-lg-6">{{createText("sign","sign","Sign",'',$data->sign)}}
</div><div class="col-lg-6">{{createText("fingerPrint","fingerPrint","FingerPrint",'',$data->fingerPrint)}}
</div><div class="col-lg-6">{{createText("directorGeneral","directorGeneral","DirectorGeneral",'',$data->directorGeneral)}}
</div><div class="col-lg-6">{{createText("other","other","Other",'',$data->other)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>