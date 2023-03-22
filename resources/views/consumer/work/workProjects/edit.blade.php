@extends('employee.layouts.employee.employee')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit WorkProjects</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('work.workprojects.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('work.workprojects.update',[$data->workProject_id])}}" enctype="multipart/form-data">
 @csrf
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("projectTitle","projectTitle","ProjectTitle",'',$data->projectTitle)}}
</div><div class="col-lg-6">{{createText("projectStartClient","projectStartClient","ProjectStartClient",'',$data->projectStartClient)}}
</div><div class="col-lg-6">{{createDate("projectStartDate","projectStartDate","Start Date",'',$data->projectStartDate, '')}}
</div><div class="col-lg-6">{{createDate("projectEndDate","projectEndDate","End Date",'',$data->projectEndDate, '')}}
</div><div class="col-lg-6">{{createText("projectPriority","projectPriority","Priority",'',$data->projectPriority)}}
</div><div class="col-lg-6">{{createText("companyName_id","companyName_id","CompanyName Id",'',$data->companyName_id)}}
</div><div class="col-lg-6">{{createText("assignedEmployees","assignedEmployees","Assigned Employees",'',$data->assignedEmployees)}}
</div><div class="col-lg-6">{{createText("projectDescription","projectDescription","Description",'',$data->projectDescription)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-12">{{createLabel('remarks', 'form-label col-form-label', 'Remarks')}}{{createTextArea("remarks","remarks","remarks","",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary mt-3","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection
