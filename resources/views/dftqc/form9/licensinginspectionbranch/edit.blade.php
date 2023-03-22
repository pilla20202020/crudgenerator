@extends('dftqc.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Licensinginspectionbranch</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('form9.licensinginspectionbranch.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('form9.licensinginspectionbranch.update',[$data->licensinginspectionbranch_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","IndustryAddress",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("industryPhone","industryPhone","IndustryPhone",'',$data->industryPhone)}}
</div><div class="col-lg-6">{{createText("more","more","More",'',$data->more)}}
</div><div class="col-lg-6">{{createText("flow","flow","Flow",'',$data->flow)}}
</div><div class="col-lg-6">{{createText("personalHg","personalHg","PersonalHg",'',$data->personalHg)}}
</div><div class="col-lg-6">{{createText("products","products","Products",'',$data->products)}}
</div><div class="col-lg-6">{{createText("machinery","machinery","Machinery",'',$data->machinery)}}
</div><div class="col-lg-6">{{createText("foods","foods","Foods",'',$data->foods)}}
</div><div class="col-lg-6">{{createText("plantLocation","plantLocation","PlantLocation",'',$data->plantLocation)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection