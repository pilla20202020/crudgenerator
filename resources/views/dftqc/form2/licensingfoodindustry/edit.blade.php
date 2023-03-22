@extends('dftqc.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Licensingfoodindustry</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('form2.licensingfoodindustry.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('form2.licensingfoodindustry.update',[$data->licensingfoodindustry_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("number","number","Number",'',$data->number)}}
</div><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("ownerName","ownerName","OwnerName",'',$data->ownerName)}}
</div><div class="col-lg-6">{{createText("responsiblePersonName","responsiblePersonName","ResponsiblePersonName",'',$data->responsiblePersonName)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","FatherName",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","GrandFatherName",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","PermanentAddress",'',$data->permanentAddress)}}
</div><div class="col-lg-6">{{createText("temporaryAddress","temporaryAddress","TemporaryAddress",'',$data->temporaryAddress)}}
</div><div class="col-lg-6">{{createText("producedFoodName","producedFoodName","ProducedFoodName",'',$data->producedFoodName)}}
</div><div class="col-lg-6">{{createText("sign","sign","Sign",'',$data->sign)}}
</div><div class="col-lg-6">{{createText("fingerPrint","fingerPrint","FingerPrint",'',$data->fingerPrint)}}
</div><div class="col-lg-6">{{createText("directorGeneral","directorGeneral","DirectorGeneral",'',$data->directorGeneral)}}
</div><div class="col-lg-6">{{createText("other","other","Other",'',$data->other)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection