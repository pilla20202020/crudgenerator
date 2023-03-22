
                <form action="{{route('form6.establishmentrecommendations.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("chalaninoOne","chalaninoOne","Chalanino")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("industryName","industryName","Industry Name")}}
</div><div class="col-lg-6">{{createText("industryWork","industryWork","Industry Work")}}
</div><div class="col-lg-6">{{createText("industryOwner","industryOwner","Industry Owner")}}
</div><div class="col-lg-6">{{createDate("recommendationDate","recommendationDate","Recommendation Date")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('etc','form-label col-form-label','Others')}}{{createTextArea("etc","etc","","Etc")}}

<!-- </div><div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','Remarks')}}{{createTextArea("remarks","remarks",'',"Remarks")}} -->
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>