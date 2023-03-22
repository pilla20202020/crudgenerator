
                <form action="{{route('form9.licensinginspectionbranch.store')}}" id="storeCustomForm">
 @csrf 
<div class="row">
   <div class="col-lg-6">
   {{createDate("date","date","Date")}}
</div>
<div class="col-lg-6">
   {{createText("ownerName","ownerName","Owner Name")}}
</div>   
<div class="col-lg-4">
   {{createText("industryName","industryName","Industry Name")}}
</div>
   

<div class="col-lg-4">{{createText("industryAddress","industryAddress","Industry Address")}}
</div><div class="col-lg-4">{{createText("industryPhone","industryPhone","Industry Phone")}}

</div><div class="col-lg-12 mt-5">
{{createCheck("flow","flow","Flow Chart, Plant Layout, Plant Sanitation","","1","")}}
   </div>
   
</div><div class="col-lg-12">
{{createCheck("personalHg","personalHg","Personal Hygiene","","1","")}}
   </div>
</div><div class="col-lg-12">
{{createCheck("products","products","Condition of raw and finished products","","1","")}}
   </div>
</div><div class="col-lg-12">
{{createCheck("machinery","machinery","Machinery used and manufactured by, treatment of raw water","","1","")}}
   </div>
</div><div class="col-lg-12">
{{createCheck("foods","foods","Food additives used","","1","")}}
   </div>
</div><div class="col-lg-12">
{{createCheck("plantLocation","plantLocation","Plant Location(map)","","1","")}}
   </div>
</div><div class="col-lg-12">
{{createCheck("labelInformation","labelInformation","Label Information","","1","")}}
   </div>


</div><div class="col-lg-">{{createLabel("remarks",'form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","","")}} 

</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>