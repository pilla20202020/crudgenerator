
                <form action="{{route('form2.licensingfoodindustry.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("number","number","License Number")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("industryName","industryName","Industry Name")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","Owner Name And Surname")}}
</div><div class="col-lg-6">{{createText("responsiblePersonName","responsiblePersonName","Responsible Person Name And Surname")}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","Father Name")}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","Grand Father Name")}}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","Permanent Address")}}
</div><div class="col-lg-6">{{createText("temporaryAddress","temporaryAddress","Temporary Address")}}
</div><div class="col-lg-6">{{createText("producedFoodName","producedFoodName","Name of the food item to be produced and sold")}}
<!-- </div><div class="col-lg-6">{{createText("sign","sign","Sign")}}
</div><div class="col-lg-6">{{createText("fingerPrint","fingerPrint","Finger Print")}}
</div><div class="col-lg-6">{{createText("directorGeneral","directorGeneral","Director General")}}
</div><div class="col-lg-6">{{createText("other","other","Other")}} -->
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'','')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>