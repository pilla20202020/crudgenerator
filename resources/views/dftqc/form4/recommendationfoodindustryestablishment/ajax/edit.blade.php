<form
    action="{{ route('form4.recommendationfoodindustryestablishment.update', [$data->recommendationfoodindustryestablishment_id]) }}"
    id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{ createText('industryName', 'industryName', 'Industry Name', '', $data->industryName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryAddress', 'industryAddress', 'Industry Address', '', $data->industryAddress) }}
        </div>
              <div class="col-lg-12">
                        {{createLabel('industryOwner','form-label col-form-label h3','Industry Owner Description')}}
        </div>
        <div class="col-lg-6">
            {{ createText('industryOwnerName', 'industryOwnerName', 'Industry Owner Name', '', $data->industryOwnerName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryOwnerMiddleName', 'industryOwnerMiddleName', 'Industry Owner Middle Name', '', $data->industryOwnerMiddleName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryOwnerLastName', 'industryOwnerLastName', 'Industry Owner Last Name', '', $data->industryOwnerLastName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryOwnerAddress', 'industryOwnerAddress', 'Industry Owner Address', '', $data->industryOwnerAddress) }}
        </div>
                <div class="col-lg-12">
                                        {{createLabel('productmanufacture','form-label col-form-label h3','Name of food item to be produced')}}
                                    </div>
        <div class="col-lg-6">{{ createText('productName', 'productName', 'Product Name', '', $data->productName) }}
        </div>
        <div class="col-lg-6">{{ createText('productType', 'productType', 'Product Type', '', $data->productType) }}
        </div>
        <div class="col-lg-6" id="additernary">
               {{createLabel('machinery','form-label col-form-label','Machinery')}}
            @if (isset($machinery))
            @foreach ($machinery as $key => $machine)
            <div class="form-group row d-flex align-items-end appended-row mt-2">
                <div class="input-group mt-2">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                        aria-describedby="button-addon1" name="machinery[]" id="machinery" value="{{$machine}}">
                    <button class="removeitemrow btn btn-sm btn-danger mr-1" type="button" id="button-addon1">Remove Row</button>
                </div>
            </div>
            @endforeach
            @endif
            <div class="input-group mt-2">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" name="machinery[]" id="machinery">
                <button id="additemrow" class="btn btn-outline-primary" type="button" id="button-addon1">Add</button>
            </div>
            <input type="hidden" id="temp" value="0" name="temp">
        </div>

        <div class="col-lg-6" id="adddescription">
             {{createLabel('descriptionAndSourceOfRawMaterials','form-label col-form-label','Description And Source Of Raw Materials')}}
            @if (isset($descriptionAndSourceOfRawMaterials))
            @foreach ($descriptionAndSourceOfRawMaterials as $key => $rawmaterial)
            <div class="form-group row d-flex align-items-end descappended-row mt-2">
                <div class="input-group mt-2">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                        aria-describedby="button-addon1" name="descriptionAndSourceOfRawMaterials[]" value="{{$rawmaterial}}" id="descriptionAndSourceOfRawMaterials">
                    <button class="descremoveitemrow btn btn-sm btn-danger mr-1" type="button" id="button-addon1">Remove Row</button>
                </div>
            </div>
            @endforeach
            @endif
            <div class="input-group mt-2">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" name="descriptionAndSourceOfRawMaterials[]" id="descriptionAndSourceOfRawMaterials">
                <button id="adddesc" class="btn btn-outline-primary" type="button" id="button-addon1">Add</button>
            </div>
            <input type="hidden" id="temp_desc" value="0" name="temp_desc">
        </div>
        <div class="col-lg-6">
            {{ createText('techincialSkills', 'techincialSkills', 'Techincial Skills', '', $data->techincialSkills) }}
        </div>
        <div class="col-lg-6">
            {{ createText('cleanManagement', 'cleanManagement', 'Clean Management', '', $data->cleanManagement) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryBudget', 'industryBudget', 'Industry Budget', '', $data->industryBudget) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryCapacity', 'industryCapacity', 'Industry Capacity', '', $data->industryCapacity) }}
        </div>

        <div class="col-lg-6">{{ createText('applicantName', 'applicantName', 'Applicant Name', '', $data->applicantName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('applicantAddress', 'applicantAddress', 'Applicant Address', '', $data->applicantAddress) }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'col-form-label form-label', 'remarks', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>

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
           $('#machineryreplace').replaceWith(tst);
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
        $('#descriptionreplace').replaceWith(tst);
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
