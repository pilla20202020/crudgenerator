
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("sampleDetails","sampleDetails","SampleDetails",'',$data->sampleDetails)}}
</div><div class="col-lg-6">{{createText("invoiceDate","invoiceDate","InvoiceDate",'',$data->invoiceDate)}}
</div><div class="col-lg-6">{{createText("sampleRegistartionDate","sampleRegistartionDate","SampleRegistartionDate",'',$data->sampleRegistartionDate)}}
</div><div class="col-lg-6">{{createText("sampleCode","sampleCode","SampleCode",'',$data->sampleCode)}}
</div><div class="col-lg-6">{{createText("packingCondition","packingCondition","PackingCondition",'',$data->packingCondition)}}
</div><div class="col-lg-6">{{createText("analysisRequired","analysisRequired","AnalysisRequired",'',$data->analysisRequired)}}
</div><div class="col-lg-6">{{createText("analysisStartDate","analysisStartDate","AnalysisStartDate",'',$data->analysisStartDate)}}
</div><div class="col-lg-6">{{createText("analysisEndDate","analysisEndDate","AnalysisEndDate",'',$data->analysisEndDate)}}
</div><div class="col-lg-6">{{createText("parameter","parameter","Parameter",'',$data->parameter)}}
</div><div class="col-lg-6">{{createText("testMethod","testMethod","TestMethod",'',$data->testMethod)}}
</div><div class="col-lg-6">{{createText("theUnit","theUnit","TheUnit",'',$data->theUnit)}}
</div><div class="col-lg-6">{{createText("output","output","Output",'',$data->output)}}
</div><div class="col-lg-6">{{createText("prescribedcriteria","prescribedcriteria","Prescribedcriteria",'',$data->prescribedcriteria)}}
</div><div class="col-lg-6">{{createText("mood","mood","Mood",'',$data->mood)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>