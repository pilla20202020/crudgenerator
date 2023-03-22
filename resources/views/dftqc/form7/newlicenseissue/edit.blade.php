@extends('dftqc.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Newlicenseissue</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('form7.newlicenseissue.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('form7.newlicenseissue.update',[$data->newlicenseissue_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("industryName","industryName","IndustryName",'',$data->industryName)}}
</div><div class="col-lg-6">{{createText("industryAddressTol","industryAddressTol","IndustryAddressTol",'',$data->industryAddressTol)}}
</div><div class="col-lg-6">{{createText("MunicipalityVDC","MunicipalityVDC","MunicipalityVDC",'',$data->MunicipalityVDC)}}
</div><div class="col-lg-6">{{createText("industryDistrict","industryDistrict","IndustryDistrict",'',$data->industryDistrict)}}
</div><div class="col-lg-6">{{createText("industryAddress","industryAddress","IndustryAddress",'',$data->industryAddress)}}
</div><div class="col-lg-6">{{createText("industryType","industryType","IndustryType",'',$data->industryType)}}
</div><div class="col-lg-6">{{createText("industryManagerFirstName","industryManagerFirstName","IndustryManagerFirstName",'',$data->industryManagerFirstName)}}
</div><div class="col-lg-6">{{createText("industryManagerMiddleName","industryManagerMiddleName","IndustryManagerMiddleName",'',$data->industryManagerMiddleName)}}
</div><div class="col-lg-6">{{createText("industryManagerLastName","industryManagerLastName","IndustryManagerLastName",'',$data->industryManagerLastName)}}
</div><div class="col-lg-6">{{createText("industryManagerAddress","industryManagerAddress","IndustryManagerAddress",'',$data->industryManagerAddress)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","FatherName",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","GrandFatherName",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","PermanentAddress",'',$data->permanentAddress)}}
</div><div class="col-lg-6">{{createText("temporaryAddress","temporaryAddress","TemporaryAddress",'',$data->temporaryAddress)}}
</div><div class="col-lg-6">{{createText("foodNameOne","foodNameOne","FoodNameOne",'',$data->foodNameOne)}}
</div><div class="col-lg-6">{{createText("foodNameTwo","foodNameTwo","FoodNameTwosuperadmin outsise edit",'',$data->foodNameTwo)}}
</div><div class="col-lg-6">{{createText("foodNameThree","foodNameThree","FoodNameThree",'',$data->foodNameThree)}}
</div><div class="col-lg-6">{{createText("packingSizeOne","packingSizeOne","PackingSizeOne",'',$data->packingSizeOne)}}
</div><div class="col-lg-6">{{createText("packingSizeTwo","packingSizeTwo","PackingSizeTwo",'',$data->packingSizeTwo)}}
</div><div class="col-lg-6">{{createText("packingSizeThree","packingSizeThree","PackingSizeThree",'',$data->packingSizeThree)}}
</div><div class="col-lg-6">{{createText("brandOne","brandOne","BrandOne",'',$data->brandOne)}}
</div><div class="col-lg-6">{{createText("brandTwo","brandTwo","BrandTwo",'',$data->brandTwo)}}
</div><div class="col-lg-6">{{createText("brandThree","brandThree","BrandThree",'',$data->brandThree)}}
</div><div class="col-lg-6">{{createText("industryMachineOne","industryMachineOne","IndustryMachineOne",'',$data->industryMachineOne)}}
</div><div class="col-lg-6">{{createText("industryMachineTwo","industryMachineTwo","IndustryMachineTwo",'',$data->industryMachineTwo)}}
</div><div class="col-lg-6">{{createText("industryMachineThree","industryMachineThree","IndustryMachineThree",'',$data->industryMachineThree)}}
</div><div class="col-lg-6">{{createText("industryMachineFour","industryMachineFour","IndustryMachineFour",'',$data->industryMachineFour)}}
</div><div class="col-lg-6">{{createText("industryManageOne","industryManageOne","IndustryManageOne",'',$data->industryManageOne)}}
</div><div class="col-lg-6">{{createText("industryManageTwo","industryManageTwo","IndustryManageTwo",'',$data->industryManageTwo)}}
</div><div class="col-lg-6">{{createText("industryManageThree","industryManageThree","IndustryManageThree",'',$data->industryManageThree)}}
</div><div class="col-lg-6">{{createText("industryManageFour","industryManageFour","IndustryManageFour",'',$data->industryManageFour)}}
</div><div class="col-lg-6">{{createText("labManage","labManage","LabManage",'',$data->labManage)}}
</div><div class="col-lg-6">{{createText("labWorksOne","labWorksOne","LabWorksOne",'',$data->labWorksOne)}}
</div><div class="col-lg-6">{{createText("labWorksTwo","labWorksTwo","LabWorksTwo",'',$data->labWorksTwo)}}
</div><div class="col-lg-6">{{createText("labWorksThree","labWorksThree","LabWorksThree",'',$data->labWorksThree)}}
</div><div class="col-lg-6">{{createText("industryCost","industryCost","IndustryCost",'',$data->industryCost)}}
</div><div class="col-lg-6">{{createText("industryCapacity","industryCapacity","IndustryCapacity",'',$data->industryCapacity)}}
</div><div class="col-lg-6">{{createText("userName","userName","UserName",'',$data->userName)}}
</div><div class="col-lg-6">{{createText("userAddress","userAddress","UserAddress",'',$data->userAddress)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection