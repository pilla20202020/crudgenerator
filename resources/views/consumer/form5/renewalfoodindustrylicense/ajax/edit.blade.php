
        <form action="{{route('form5.renewalfoodindustrylicense.update',[$data->renewalfoodindustrylicense_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-12">{{createText("industryName","industryName","Industry Name",'',$data->industryName)}}
</div><div class="col-lg-4">{{createText("tole","tole","Tole",'',$data->tole)}}
</div><div class="col-lg-4">{{createText("municipality","municipality","Municipality",'',$data->municipality)}}
</div><div class="col-lg-4">{{createText("district","district","District",'',$data->district)}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone",'',$data->phone)}}
</div><div class="col-lg-6">{{createText("type","type","Type",'',$data->type)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","Owner Name",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("addressTwo","addressTwo","Address",'',$data->addressTwo)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","Father Name",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","Grand Father Name",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("addressThree","addressThree","Address",'',$data->addressThree)}}
</div><div class="col-lg-6">{{createText("addressFour","addressFour","Address",'',$data->addressFour)}}
</div><div class="col-lg-4">{{createText("ediblesOne","ediblesOne","Edibles",'',$data->ediblesOne)}}
</div><div class="col-lg-4">{{createText("ediblesTwo","ediblesTwo","Edibles",'',$data->ediblesTwo)}}
</div><div class="col-lg-4">{{createText("ediblessThree","ediblessThree","Edibles",'',$data->ediblessThree)}}
</div><div class="col-lg-4">{{createText("packingOne","packingOne","PackagingOne",'',$data->packingOne)}}
</div><div class="col-lg-4">{{createText("packingTwo","packingTwo","PackagingTwo",'',$data->packingTwo)}}
</div><div class="col-lg-4">{{createText("packingThree","packingThree","PackagingThree",'',$data->packingThree)}}
</div><div class="col-lg-4">{{createText("brandOne","brandOne","Brand",'',$data->brandOne)}}
</div><div class="col-lg-4">{{createText("brandTwo","brandTwo","Brand",'',$data->brandTwo)}}
</div><div class="col-lg-4">{{createText("brandThree","brandThree","Brand",'',$data->brandThree)}}
</div><div class="col-lg-6">{{createText("skill","skill","Skills",'',$data->skill)}}
</div><div class="col-lg-6">{{createText("skills","skills","Skills",'',$data->skills)}}
</div><div class="col-lg-6">{{createText("sanitation","sanitation","Sanitation",'',$data->sanitation)}}
</div><div class="col-lg-6">{{createText("manufacture","manufacture","Manufacture",'',$data->manufacture)}}
</div><div class="col-lg-6">{{createText("udhyog","udhyog","Udhyog",'',$data->udhyog)}}
</div><div class="col-lg-6">{{createText("potential","potential","Potential",'',$data->potential)}}
</div><div class="col-lg-6">{{createDate("issueDate","issueDate","Issue Date",'',$data->issueDate)}}
</div><div class="col-lg-6">{{createText("receipt","receipt","Receipt",'',$data->receipt)}}
</div><div class="col-lg-6">{{createText("production","production","Production",'',$data->production)}}
</div><div class="col-lg-6">{{createText("label","label","Label",'',$data->label)}}
</div><div class="col-lg-4">{{createText("sample","sample","Sample",'',$data->sample)}}
</div><div class="col-lg-4">{{createText("photocopy","photocopy","Photocopy",'',$data->photocopy)}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>