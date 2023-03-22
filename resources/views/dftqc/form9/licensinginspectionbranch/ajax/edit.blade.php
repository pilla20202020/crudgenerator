
        <form action="{{route('form9.licensinginspectionbranch.update',[$data->licensinginspectionbranch_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-4">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-4">{{createText("industryAddress","industryAddress","Industry Address",'',$data->industryAddress)}}
</div><div class="col-lg-4">{{createText("industryPhone","industryPhone","Industry Phone",'',$data->industryPhone)}}




</div><div class="col-lg-12 mt-5">
        {{createCheck("flow","flow","Flow Chart, Plant Layout, Plant Sanitation","", $data->flow)}}
           </div>
           
        </div><div class="col-lg-12 mt-5">
        {{createCheck("personalHg","personalHg","Personal Hygiene","","1","")}}
           </div>
        </div><div class="col-lg-12 mt-5">
        {{createCheck("products","products","Condition of raw and finished products","","1","")}}
           </div>
        </div><div class="col-lg-12 mt-5">
        {{createCheck("machinery","machinery","Machinery used and manufactured by, treatment of raw water","","1","")}}
           </div>
        </div><div class="col-lg-12 mt-5">
        {{createCheck("foods","foods","Food additives used","","1","")}}
           </div>
        </div><div class="col-lg-12 mt-5">
        {{createCheck("plantLocation","plantLocation","Plant Location(map)","","1","")}}
           </div>
        </div><div class="col-lg-12 mt-5">
        {{createCheck("labelInformation","labelInformation","Label Information","","1","")}}
           </div>

<div class="col-lg-12">{{createLabel("remarks",'form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>