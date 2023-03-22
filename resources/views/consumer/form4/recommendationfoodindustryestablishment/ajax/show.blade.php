@extends('consumer.layouts.employee.employee')
@section('content')
<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Show Recommendationfoodindustryestablishment</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="nk-block-head-content w-100">
            <div class="d-flex justify-content-between pb-4">
    
                <h2>Recommendationfoodindustryestablishment Details</h2>
                <button class="btn btn-primary print_pdf">Print PDF</button>
            </div>
            <div class="card w-100">
                <div class="p-5">
    
                    <div class="card-head">
                        <h2 class="text-center">{{$data['industryName']}}</h2>
                    </div>
                    <div class="card-body">
                <p><b>IndustryName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryName}}</span></p><p><b>IndustryAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryAddress}}</span></p><p><b>IndustryOwnerName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryOwnerName}}</span></p><p><b>IndustryOwnerMiddleName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryOwnerMiddleName}}</span></p><p><b>IndustryOwnerLastName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryOwnerLastName}}</span></p><p><b>IndustryOwnerAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryOwnerAddress}}</span></p><p><b>ProductName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->productName}}</span></p><p><b>ProductType :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->productType}}</span></p><p><b>Machinery :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->machinery}}</span></p><p><b>DescriptionAndSourceOfRawMaterials :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->descriptionAndSourceOfRawMaterials}}</span></p><p><b>TechincialSkills :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->techincialSkills}}</span></p><p><b>CleanManagement :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->cleanManagement}}</span></p><p><b>IndustryBudget :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryBudget}}</span></p><p><b>IndustryCapacity :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->industryCapacity}}</span></p><p><b>FloatingInput :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->floatingInput}}</span></p><p><b>ApplicantName :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applicantName}}</span></p><p><b>ApplicantAddress :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->applicantAddress}}</span></p><p><b>Alias :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->alias}}</span></p><p><b>Status :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span
                class="{{$data->status == 1 ? 'text-success' : 'text-danger'}}">{{$data->status == 1 ? 'Active' : 'Inactive'}}</span></p><p><b>Remarks :&nbsp;&nbsp;&nbsp;&nbsp;</b> <span>{{$data->remarks}}</span></p><div class="d-flex justify-content-between">
        <div>
            <p><b>Created On :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->created_at}}</span></p>
            <p><b>Created By :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->createdBy}}</span></p>
        </div>
        <div>
            <p><b>Updated On :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->updated_at}}</span></p>
            <p><b>Updated By :</b>&nbsp;&nbsp;&nbsp;<span>{{$data->updatedBy}}</span></p>

        </div>
    </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection