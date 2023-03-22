@extends('dftqc.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Analysisreport</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('form10.analysisreport.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('form10.analysisreport.update',[$data->analysisreport_id])}}" enctype="multipart/form-data">
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
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection