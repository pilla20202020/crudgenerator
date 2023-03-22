
        <form action="{{route('form10.analysisreport.update',[$data->analysisreport_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("sampleDetails","sampleDetails","Sample Details",'',$data->sampleDetails)}}
</div><div class="col-lg-6">{{createText("invoiceDate","invoiceDate","InvoiceDate",'',$data->invoiceDate)}}
</div><div class="col-lg-6">{{createText("sampleRegistartionDate","sampleRegistartionDate","Sample Registartion Date",'',$data->sampleRegistartionDate)}}
</div><div class="col-lg-6">{{createText("sampleCode","sampleCode","Sample Code",'',$data->sampleCode)}}
</div><div class="col-lg-6">{{createText("packingCondition","packingCondition","Packing Condition",'',$data->packingCondition)}}
</div><div class="col-lg-6">{{createText("analysisRequired","analysisRequired","Analysis Required",'',$data->analysisRequired)}}
</div><div class="col-lg-6">{{createText("analysisStartDate","analysisStartDate","Analysis Start Date",'',$data->analysisStartDate)}}
</div><div class="col-lg-6">{{createText("analysisEndDate","analysisEndDate","Analysis End Date",'',$data->analysisEndDate)}}
</div><div class="col-lg-6">{{createText("parameter","parameter","Parameter",'',$data->parameter)}}
</div><div class="col-lg-6">{{createText("testMethod","testMethod","Test Method",'',$data->testMethod)}}
</div><div class="col-lg-6">{{createText("theUnit","theUnit","Unit",'',$data->theUnit)}}
</div><div class="col-lg-6">{{createText("output","output","Output",'',$data->output)}}
</div><div class="col-lg-6">{{createText("prescribedcriteria","prescribedcriteria","Prescribed criteria",'',$data->prescribedcriteria)}}
</div><div class="col-lg-6">{{createText("mood","mood","Mood",'',$data->mood)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Submit"); ?>
</div> </form>