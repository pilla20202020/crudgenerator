
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("chalaninoOne","chalaninoOne","ChalaninoOne",'',$data->chalaninoOne)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryWork","industryWork","IndustryWork",'',$data->industryWork)}}
</div><div class="col-lg-6">{{createText("industryOwner","industryOwner","IndustryOwner",'',$data->industryOwner)}}
</div><div class="col-lg-6">{{createText("recommendationDate","recommendationDate","RecommendationDate",'',$data->recommendationDate)}}
</div><div class="col-lg-6">{{createText("etc","etc","Etc",'',$data->etc)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>