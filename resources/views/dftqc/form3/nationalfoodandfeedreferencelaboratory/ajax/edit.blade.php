
        <form action="{{route('form3.nationalfoodandfeedreferencelaboratory.update',[$data->nationalfoodandfeedreferencelaboratory_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("sampleNumber","sampleNumber","Sample Number",'',$data->sampleNumber)}}
</div><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("parameter","parameter","Parameter",'',$data->parameter)}}
</div><div class="col-lg-6">{{createText("examinationFee","examinationFee","Examination Fee",'',$data->examinationFee)}}
</div><div class="col-lg-6">{{createText("voucherNumber","voucherNumber","Voucher Number",'',$data->voucherNumber)}}
</div><div class="col-lg-6">{{createDate("dateOfRemittanceRevenue","dateOfRemittanceRevenue","Date Of Remittance Revenue",'',$data->dateOfRemittanceRevenue)}}
</div><div class="col-lg-6">{{createText("other","other","Other",'',$data->other)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('sampleDetails','form-label col-form-label','Sample Details')}}{{createTextArea("sampleDetails","sampleDetails","SampleDetails",'',$data->sampleDetails)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>