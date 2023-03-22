
        <form action="{{route('foodindustryinspectionreport.foodindustryinspectionreport.update',[$data->foodindustryinspectionreport_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-4">{{createText("industryName","industryName","Industry Name",'',$data->industryName)}}
</div><div class="col-lg-4">{{createText("addressTwo","addressTwo","Address",'',$data->addressTwo)}}
</div><div class="col-lg-4">{{createText("propritorName","propritorName","Propritor Name",'',$data->propritorName)}}
</div><div class="col-lg-6">{{createText("management","management","Management",'',$data->management)}}
</div><div class="col-lg-6">{{createText("estalishedDate","estalishedDate","Estalished Date",'',$data->estalishedDate)}}
</div><div class="col-lg-4">{{createText("sanatathagharelu","sanatathagharelu","Sanatathagharelu",'',$data->sanatathagharelu)}}
</div><div class="col-lg-4">{{createText("majhaula","majhaula","Majhaula",'',$data->majhaula)}}
</div><div class="col-lg-4">{{createText("thulo","thulo","Thulo",'',$data->thulo)}}
</div><div class="col-lg-6">{{createText("liyeko","liyeko","Liyeko",'',$data->liyeko)}}
</div><div class="col-lg-6">{{createText("naliyeko","naliyeko","Naliyeko",'',$data->naliyeko)}}
</div><div class="col-lg-6">{{createText("renew","renew","Renew",'',$data->renew)}}
</div><div class="col-lg-6">{{createText("nonRenew","nonRenew","NonRenew",'',$data->nonRenew)}}
</div><div class="col-lg-4">{{createText("technical","technical","Technical",'',$data->technical)}}
</div><div class="col-lg-4">{{createText("prasasanik","prasasanik","Prasasanik",'',$data->prasasanik)}}
</div><div class="col-lg-4">{{createText("sn","sn","Sn",'',$data->sn)}}
</div><div class="col-lg-6">{{createText("products","products","Products",'',$data->products)}}
</div><div class="col-lg-6">{{createText("brand","brand","Brand",'',$data->brand)}}
</div><div class="col-lg-6">{{createText("time","time","Time",'',$data->time)}}
</div><div class="col-lg-6">{{createText("area","area","Area",'',$data->area)}}
</div><div class="col-lg-6">{{createText("packagingOne","packagingOne","PackagingOne",'',$data->packagingOne)}}
</div><div class="col-lg-6">{{createText("packagingTwo","packagingTwo","PackagingTwo",'',$data->packagingTwo)}}
</div><div class="col-lg-6">{{createText("udhyogOne","udhyogOne","UdhyogOne",'',$data->udhyogOne)}}
</div><div class="col-lg-6">{{createText("udhyogTwo","udhyogTwo","UdhyogTwo",'',$data->udhyogTwo)}}
</div><div class="col-lg-6">{{createText("productionOne","productionOne","ProductionOne",'',$data->productionOne)}}
</div><div class="col-lg-6">{{createText("productionTwo","productionTwo","ProductionTwo",'',$data->productionTwo)}}
</div><div class="col-lg-4">{{createText("batchNumberOne","batchNumberOne","BatchNumberOne",'',$data->batchNumberOne)}}
</div><div class="col-lg-4">{{createText("upayog","upayog","Upayog",'',$data->upayog)}}
</div><div class="col-lg-4">{{createText("samrichan","samrichan","Samrichan",'',$data->samrichan)}}
</div><div class="col-lg-4">{{createText("potential","potential","Potential",'',$data->potential)}}
</div><div class="col-lg-4">{{createText("proyog","proyog","Proyog",'',$data->proyog)}}
</div><div class="col-lg-4">{{createText("swasthya","swasthya","Swasthya",'',$data->swasthya)}}
</div><div class="col-lg-3">{{createText("highlow","highlow","Highlow",'',$data->highlow)}}
</div><div class="col-lg-3">{{createText("swikrit","swikrit","Swikrit",'',$data->swikrit)}}
</div><div class="col-lg-3">{{createText("sarsafai","sarsafai","Sarsafai",'',$data->sarsafai)}}
</div><div class="col-lg-3">{{createText("tapkram","tapkram","Tapkram",'',$data->tapkram)}}
</div><div class="col-lg-3">{{createText("chara","chara","Chara",'',$data->chara)}}
</div><div class="col-lg-3">{{createText("timespan","timespan","Timespan",'',$data->timespan)}}
</div><div class="col-lg-3">{{createText("hygiene","hygiene","Hygine",'',$data->hygiene)}}
</div><div class="col-lg-3">{{createText("chetra","chetra","Chetra",'',$data->chetra)}}
</div><div class="col-lg-6">{{createText("bathroom","bathroom","Bathroom",'',$data->bathroom)}}
</div><div class="col-lg-6">{{createText("condition","condition","Condition",'',$data->condition)}}
</div><div class="col-lg-6">{{createText("productName","productName","Product Name",'',$data->productName)}}
</div><div class="col-lg-6">{{createText("productSouce","productSouce","ProductSource",'',$data->productSouce)}}
</div><div class="col-lg-3">{{createText("praichad","praichad","Praichad",'',$data->praichad)}}
</div><div class="col-lg-3">{{createText("prayog","prayog","Prayog",'',$data->prayog)}}
</div><div class="col-lg-3">{{createText("sample","sample","Sample",'',$data->sample)}}
</div><div class="col-lg-3">{{createText("conclusion","conclusion","Conclusion",'',$data->conclusion)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>