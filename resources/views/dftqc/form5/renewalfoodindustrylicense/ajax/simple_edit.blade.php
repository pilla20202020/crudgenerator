
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("tole","tole","Tole",'',$data->tole)}}
</div><div class="col-lg-6">{{createText("municipality","municipality","Municipality",'',$data->municipality)}}
</div><div class="col-lg-6">{{createText("district","district","District",'',$data->district)}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone",'',$data->phone)}}
</div><div class="col-lg-6">{{createText("type","type","Type",'',$data->type)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","OwnerName",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("addressTwo","addressTwo","AddressTwo",'',$data->addressTwo)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","FatherName",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","GrandFatherName",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("addressThree","addressThree","AddressThree",'',$data->addressThree)}}
</div><div class="col-lg-6">{{createText("addressFour","addressFour","AddressFour",'',$data->addressFour)}}
</div><div class="col-lg-6">{{createText("ediblesOne","ediblesOne","EdiblesOne",'',$data->ediblesOne)}}
</div><div class="col-lg-6">{{createText("ediblesTwo","ediblesTwo","EdiblesTwo",'',$data->ediblesTwo)}}
</div><div class="col-lg-6">{{createText("ediblessThree","ediblessThree","EdiblessThree",'',$data->ediblessThree)}}
</div><div class="col-lg-6">{{createText("packingOne","packingOne","PackingOne",'',$data->packingOne)}}
</div><div class="col-lg-6">{{createText("packingTwo","packingTwo","PackingTwo",'',$data->packingTwo)}}
</div><div class="col-lg-6">{{createText("packingThree","packingThree","PackingThree",'',$data->packingThree)}}
</div><div class="col-lg-6">{{createText("brandOne","brandOne","BrandOne",'',$data->brandOne)}}
</div><div class="col-lg-6">{{createText("brandTwo","brandTwo","BrandTwo",'',$data->brandTwo)}}
</div><div class="col-lg-6">{{createText("brandThree","brandThree","BrandThree",'',$data->brandThree)}}
</div><div class="col-lg-6">{{createText("skill","skill","Skill",'',$data->skill)}}
</div><div class="col-lg-6">{{createText("skills","skills","Skills",'',$data->skills)}}
</div><div class="col-lg-6">{{createText("sanitation","sanitation","Sanitation",'',$data->sanitation)}}
</div><div class="col-lg-6">{{createText("manufacture","manufacture","Manufacture",'',$data->manufacture)}}
</div><div class="col-lg-6">{{createText("udhyog","udhyog","Udhyog",'',$data->udhyog)}}
</div><div class="col-lg-6">{{createText("potential","potential","Potential",'',$data->potential)}}
</div><div class="col-lg-6">{{createText("issueDate","issueDate","IssueDate",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createText("receipt","receipt","Receipt",'',$data->receipt)}}
</div><div class="col-lg-6">{{createText("production","production","Production",'',$data->production)}}
</div><div class="col-lg-6">{{createText("label","label","Label",'',$data->label)}}
</div><div class="col-lg-6">{{createText("sample","sample","Sample",'',$data->sample)}}
</div><div class="col-lg-6">{{createText("photocopy","photocopy","Photocopy",'',$data->photocopy)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>