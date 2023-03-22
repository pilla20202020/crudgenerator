@extends('consumer.layouts.employee.employee')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">{{ __('lang.Recommendationfoodindustryestablishment') }}</h1>
                                <nav>
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="#">{{ __('lang.Recommendationfoodindustryestablishment') }}</a></li>
                                        <li class="breadcrumb-item"><a href="#">{{ __('lang.Recommendationfoodindustryestablishment') }} {{ __('lang.Manage') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Recommendationfoodindustryestablishment') }}
                                        </li>
                                    </ol>
                                </nav>
                        </div>
                        <div class="nk-block-head-content">
                        <ul class="d-flex gap-2">
                        <a type="button" class="btn btn-soft btn-info" href="{{route('consumer.dashboard')}}"><em class="icon ni ni-arrow-left"></em> <span>Dashboard</span></a>
                       </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="alert alert-danger print-error-msg" style="display:none">
                                <ul></ul>
                            </div>
                            <form action="{{route('form4.recommendationfoodindustryestablishment.store')}}" id="storeCustomForm" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">{{createText("industryName","industryName","Industry Name")}}
                                    </div>
                                    <div class="col-lg-6">{{createText("industryAddress","industryAddress","Industry Address")}}
                                    </div>
                                    <div class="col-lg-12">
                                        {{createLabel('industryOwner','form-label col-form-label h3','Industry Owner Description')}}
                                    </div>
                                    <div class="col-lg-3">{{createText("industryOwnerName","industryOwnerName","Industry Owner Name")}}
                                    </div>
                                    <div class="col-lg-3">{{createText("industryOwnerMiddleName","industryOwnerMiddleName","Industry Owner Middle Name")}}
                                    </div>
                                    <div class="col-lg-3">{{createText("industryOwnerLastName","industryOwnerLastName","Industry Owner Last Name")}}
                                    </div>
                                    <div class="col-lg-3">{{createText("industryOwnerAddress","industryOwnerAddress","Industry Owner Address")}}
                                    </div>
                                    <div class="col-lg-12">
                                        {{createLabel('productmanufacture','form-label col-form-label h3','Name of food item to be produced')}}
                                    </div>
                                    <div class="col-lg-6">{{createText("productName","productName","Product Name")}}
                                    </div>
                                    <div class="col-lg-6">{{createText("productType","productType","Product Type")}}
                                    </div>

                                    <div class="col-lg-6" id="additernary">
                                        {{createLabel('machinery','form-label col-form-label','Machinery')}}

                                        <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="additemrow"></em>
                                        <div class="input-group" id="machineryreplace">
                                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="machinery[]" id="machinery">
                                            <button id="additemrow" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                                        </div>
                                        <input type="hidden" id="temp" value="0" name="temp">
                                    </div>

                                    <div class="col-lg-6" id="adddescription">
                                        {{createLabel('descriptionAndSourceOfRawMaterials','form-label col-form-label','Description And Source Of Raw Materials')}}

                                                <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="adddesc"></em>
                                        <div class="input-group" id="descriptionreplace">
                                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="descriptionAndSourceOfRawMaterials[]" id="descriptionAndSourceOfRawMaterials">
                                            <button id="adddesc" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                                        </div>
                                        <input type="hidden" id="temp_desc" value="0" name="temp_desc">
                                    </div>


                                    <div class="col-lg-12">
                                        {{createLabel('techincialSkills','form-label col-form-label','Techincial Skill')}}
                                        {{createTextArea("techincialSkills","techincialSkills",'',"Techincial Skills")}}
                                    </div>
                                    <div class="col-lg-12">
                                        {{createLabel('cleanManagement','form-label col-form-label','Clean Management')}}
                                        {{createTextArea("cleanManagement","cleanManagement",'',"Clean Management")}}
                                    </div>

                                    <div class="col-lg-6">{{createText("industryBudget","industryBudget","Industry Budget")}}
                                    </div>
                                    <div class="col-lg-6">{{createText("industryCapacity","industryCapacity","Industry Capacity")}}
                                    </div>
                                    <!-- <div class="col-lg-6">{{createText("floatingInput","floatingInput","Floating Input")}}
                                    </div> -->
                                    <div class="col-lg-6">{{createText("applicantName","applicantName","Applicant Name")}}
                                    </div>
                                    <div class="col-lg-6">{{createText("applicantAddress","applicantAddress","Applicant Address")}}
                                    </div>
                                    <div class="col-lg-4 d-none">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
                                    </div>
                                    <div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','Remarks')}}{{createTextArea("remarks","remarks",'',"Remarks")}}
                                    </div> <br>
                                    <div class="col-md-12"><?php createButton("btn-primary ", "", "Submit"); ?>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--machinery and description of raw materials repeater code -->
<script>
    $(document).on('click', '#additemrow', function() {
        var b = parseFloat($("#temp").val());
        b = b + 1;
        $("#temp").val(b);
        var temp = $("#temp").val();
        var tst = `<div class="form-group row d-flex align-items-end appended-row mt-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" name="machinery[]" id="machinery">
                   <button id="additemrow" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button> <button class="removeitemrow btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
            </div>

            </div>`

        $('#additernary').append(tst);
    });

    //for description of food

    $(document).on('click', '#adddesc', function() {
        var b = parseFloat($("#temp_desc").val());
        b = b + 1;
        $("#temp_desc").val(b);
        var temp = $("#temp_desc").val();
        var tst = `<div class="form-group row d-flex align-items-end descappended-row mt-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" name="descriptionAndSourceOfRawMaterials[]" id="descriptionAndSourceOfRawMaterials">    <button id="adddesc" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                <button class="descremoveitemrow btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
            </div>
            </div>`

        $('#adddescription').append(tst);
    });

    $(document).on('click', '.removeitemrow', function() {
        $(this).closest('.appended-row').remove();
    })

    $(document).on('click', '.descremoveitemrow', function() {
        $(this).closest('.descappended-row').remove();
    })

    function remove_product(o) {
        var p = o.parentNode.parentNode;
        p.parentNode.removeChild(p);
    }

    function remove_productforedit(o) {
        var p = o.parentNode.parentNode;
        p.parentNode.removeChild(p);
    }
</script>
<!--machinery and description of raw materials repeater code -->


@endsection
