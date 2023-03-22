@extends('dftqc.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Recommendationfoodindustryestablishment</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('form4.recommendationfoodindustryestablishment.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('form4.recommendationfoodindustryestablishment.update',[$data->recommendationfoodindustryestablishment_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","IndustryAddress",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("industryOwnerName","industryOwnerName","IndustryOwnerName",'',$data->industryOwnerName)}}
</div><div class="col-lg-6">{{createText("industryOwnerMiddleName","industryOwnerMiddleName","IndustryOwnerMiddleName",'',$data->industryOwnerMiddleName)}}
</div><div class="col-lg-6">{{createText("industryOwnerLastName","industryOwnerLastName","IndustryOwnerLastName",'',$data->industryOwnerLastName)}}
</div><div class="col-lg-6">{{createText("industryOwnerAddress","industryOwnerAddress","IndustryOwnerAddress",'',$data->industryOwnerAddress)}}
</div><div class="col-lg-6">{{createText("productName","productName","ProductName",'',$data->productName)}}
</div><div class="col-lg-6">{{createText("productType","productType","ProductType",'',$data->productType)}}
</div><div class="col-lg-6">{{createText("machinery","machinery","Machinery",'',$data->machinery)}}
</div><div class="col-lg-6">{{createText("descriptionAndSourceOfRawMaterials","descriptionAndSourceOfRawMaterials","DescriptionAndSourceOfRawMaterials",'',$data->descriptionAndSourceOfRawMaterials)}}
</div><div class="col-lg-6">{{createText("techincialSkills","techincialSkills","TechincialSkills",'',$data->techincialSkills)}}
</div><div class="col-lg-6">{{createText("cleanManagement","cleanManagement","CleanManagement",'',$data->cleanManagement)}}
</div><div class="col-lg-6">{{createText("industryBudget","industryBudget","IndustryBudget",'',$data->industryBudget)}}
</div><div class="col-lg-6">{{createText("industryCapacity","industryCapacity","IndustryCapacity",'',$data->industryCapacity)}}
</div><div class="col-lg-6">{{createText("floatingInput","floatingInput","FloatingInput",'',$data->floatingInput)}}
</div><div class="col-lg-6">{{createText("applicantName","applicantName","ApplicantName",'',$data->applicantName)}}
</div><div class="col-lg-6">{{createText("applicantAddress","applicantAddress","ApplicantAddress",'',$data->applicantAddress)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection