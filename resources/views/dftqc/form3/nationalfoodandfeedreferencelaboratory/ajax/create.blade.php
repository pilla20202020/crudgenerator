
                <form action="{{route('form3.nationalfoodandfeedreferencelaboratory.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("sampleNumber","sampleNumber","Sample Number")}}
</div><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-4">{{createText("parameter","parameter","Parameter")}}
</div><div class="col-lg-4">{{createText("examinationFee","examinationFee","Examination Fee")}}
</div><div class="col-lg-4">{{createText("voucherNumber","voucherNumber","Voucher Number")}}
</div><div class="col-lg-6">{{createDate("dateOfRemittanceRevenue","dateOfRemittanceRevenue","Date Of Remittance Revenue")}}
<!-- </div><div class="col-lg-6">{{createText("other","other","Other")}} -->
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('sampleDetails','form-label col-form-label','Sample Details')}}{{createTextArea("sampleDetails","sampleDetails","Sample Details")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks",'','')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> 
</div></form>