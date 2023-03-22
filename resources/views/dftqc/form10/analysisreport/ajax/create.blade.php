
                <form action="{{route('form10.analysisreport.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("sampleDetails","sampleDetails","SampleDetails")}}
</div><div class="col-lg-6">{{createDate("invoiceDate","invoiceDate","invoice Date")}}
</div><div class="col-lg-6">{{createDate("sampleRegistartionDate","sampleRegistartionDate","Sample Registartion Date")}}
</div><div class="col-lg-6">{{createText("sampleCode","sampleCode","Sample Code")}}
</div><div class="col-lg-6">{{createText("packingCondition","packingCondition","Packing Condition")}}
</div><div class="col-lg-6">{{createText("analysisRequired","analysisRequired","Analysis Required")}}
</div><div class="col-lg-6">{{createDate("analysisStartDate","analysisStartDate","Analysis Start Date")}}
</div><div class="col-lg-6">{{createDate("analysisEndDate","analysisEndDate","Analysis End Date")}}
</div><div class="col-lg-6">{{createText("parameter","parameter","Test Parameter")}}
</div><div class="col-lg-6">{{createText("testMethod","testMethod","Test Method")}}
</div><div class="col-lg-6">{{createText("theUnit","theUnit","Unit")}}
</div><div class="col-lg-6">{{createText("output","output","Output")}}
</div><div class="col-lg-4">{{createText("prescribedcriteria","prescribedcriteria","Prescribed criteria")}}
</div><div class="col-lg-4">{{createText("mood","mood","Mood")}}
</div><div class="col-lg-4">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','Remarks')}}{{createTextArea("remarks","remarks",'',"Remarks")}}
</div><br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>