
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("sampleNumber","sampleNumber","SampleNumber",'',$data->sampleNumber)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("sampleDetails","sampleDetails","SampleDetails",'',$data->sampleDetails)}}
</div><div class="col-lg-6">{{createText("parameter","parameter","Parameter",'',$data->parameter)}}
</div><div class="col-lg-6">{{createText("examinationFee","examinationFee","ExaminationFee",'',$data->examinationFee)}}
</div><div class="col-lg-6">{{createText("voucherNumber","voucherNumber","VoucherNumber",'',$data->voucherNumber)}}
</div><div class="col-lg-6">{{createText("dateOfRemittanceRevenue","dateOfRemittanceRevenue","DateOfRemittanceRevenue",'',$data->dateOfRemittanceRevenue)}}
</div><div class="col-lg-6">{{createText("other","other","Other",'',$data->other)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>