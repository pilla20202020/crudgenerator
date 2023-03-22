@extends('dftqc.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Regardingissuancelicense</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('form8.regardingissuancelicense.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('form8.regardingissuancelicense.update',[$data->regardingissuancelicense_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","IndustryAddress",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("enrollmentDate","enrollmentDate","EnrollmentDate",'',$data->enrollmentDate)}}
</div><div class="col-lg-6">{{createText("submissionDate","submissionDate","SubmissionDate",'',$data->submissionDate)}}
</div><div class="col-lg-6">{{createText("nameOfInspector","nameOfInspector","NameOfInspector",'',$data->nameOfInspector)}}
</div><div class="col-lg-6">{{createText("dateOfInspection","dateOfInspection","DateOfInspection",'',$data->dateOfInspection)}}
</div><div class="col-lg-6">{{createText("correctionDate","correctionDate","CorrectionDate",'',$data->correctionDate)}}
</div><div class="col-lg-6">{{createText("certificateNo","certificateNo","CertificateNo",'',$data->certificateNo)}}
</div><div class="col-lg-6">{{createText("dissatisfaction","dissatisfaction","Dissatisfaction",'',$data->dissatisfaction)}}
</div><div class="col-lg-6">{{createText("satisfaction","satisfaction","Satisfaction",'',$data->satisfaction)}}
</div><div class="col-lg-6">{{createText("foodName","foodName","FoodName",'',$data->foodName)}}
</div><div class="col-lg-6">{{createText("labelName","labelName","LabelName",'',$data->labelName)}}
</div><div class="col-lg-6">{{createText("packingSize","packingSize","PackingSize",'',$data->packingSize)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection