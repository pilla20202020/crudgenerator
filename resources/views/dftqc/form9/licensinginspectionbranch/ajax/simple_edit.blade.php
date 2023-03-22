
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","IndustryAddress",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("industryPhone","industryPhone","IndustryPhone",'',$data->industryPhone)}}
</div><div class="col-lg-6">{{createText("more","more","More",'',$data->more)}}
</div><div class="col-lg-6">{{createText("flow","flow","Flow",'',$data->flow)}}
</div><div class="col-lg-6">{{createText("personalHg","personalHg","PersonalHg",'',$data->personalHg)}}
</div><div class="col-lg-6">{{createText("products","products","Products",'',$data->products)}}
</div><div class="col-lg-6">{{createText("machinery","machinery","Machinery",'',$data->machinery)}}
</div><div class="col-lg-6">{{createText("foods","foods","Foods",'',$data->foods)}}
</div><div class="col-lg-6">{{createText("plantLocation","plantLocation","PlantLocation",'',$data->plantLocation)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>