
        <form action="{{route('form6.establishmentrecommendations.update',[$data->establishmentrecommendations_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("chalaninoOne","chalaninoOne","Chalanino",'',$data->chalaninoOne)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("industryName","industryName","Industry Name",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryWork","industryWork","Industry Work",'',$data->industryWork)}}
</div><div class="col-lg-6">{{createText("industryOwner","industryOwner","Industry Owner",'',$data->industryOwner)}}
</div><div class="col-lg-6">{{createDate("recommendationDate","recommendationDate","Recommendation Date",'',$data->recommendationDate)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('etc','form-label col-form-label','Others')}}{{createTextArea("etc","etc",'',$data->etc)}}

<!-- </div><div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','remarks','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}} -->
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>