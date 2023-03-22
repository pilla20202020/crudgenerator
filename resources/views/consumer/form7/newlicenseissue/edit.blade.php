@extends('consumer.layouts.employee.employee')
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
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ route('form7.newlicenseissue.index') }}"
                                            class="btn btn-md d-md-none btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                            <span>View Cities</span>
                                        </a>
                                    </li>
                                    <li>  <a type="button" class="btn btn-soft btn-info" href="{{route('consumer.dashboard')}}"><em class="icon ni ni-arrow-left"></em> <span>Dashboard</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                            <form action="{{ route('form7.newlicenseissue.update', [$data->newlicenseissue_id]) }}" id="updateCustomForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-lg-6">{{ createDate('date', 'date', 'Date','','$data->date') }}
                                    </div>   
    <div class="col-lg-6">{{ createText('industryName', 'industryName', 'IndustryName', '', $data->industryName) }}
        </div>
        <div class="col-lg-12">
                                        {{createLabel('industryAddress','col-form-label form-label h3','Industry Address')}}
                                    </div>
        <div class="col-lg-3">
            {{ createText('industryAddressTol', 'industryAddressTol', 'Industry Address Tol', '', $data->industryAddressTol) }}
        </div>
  
        <div class="col-lg-3">
            {{ createText('MunicipalityVDC', 'MunicipalityVDC', 'Municipality VDC', '', $data->MunicipalityVDC) }}
        </div>
        <div class="col-lg-3">
            {{ createText('industryDistrict', 'industryDistrict', 'Industry District', '', $data->industryDistrict) }}
        </div>
        <div class="col-lg-3">
            {{ createText('industryAddress', 'industryAddress', 'Industry Address', '', $data->industryAddress) }}
        </div>
        <div class="col-lg-12">{{ createText('industryType', 'industryType', 'Industry Type', '', $data->industryType) }}
        </div>
        
        <div class="col-lg-3">
            {{ createText('industryManagerFirstName', 'industryManagerFirstName', 'Industry Manager First Name', '', $data->industryManagerFirstName) }}
        </div>
        <div class="col-lg-3">
            {{ createText('industryManagerMiddleName', 'industryManagerMiddleName', 'Industry Manager Middle Name', '', $data->industryManagerMiddleName) }}
        </div>
        <div class="col-lg-3">
            {{ createText('industryManagerLastName', 'industryManagerLastName', 'Industry Manager Last Name', '', $data->industryManagerLastName) }}
        </div>
        <div class="col-lg-3">
            {{ createText('industryManagerAddress', 'industryManagerAddress', 'Industry Manager Address', '', $data->industryManagerAddress) }}
        </div>
        <div class="col-lg-12">
                                                {{createLabel('careTaker','col-form-label form-label h3','Name, Surname and address of the person taking charge of the industry')}}
                                            </div>

                                            <div class="col-lg-6">
                                                {{ createText('responsiblepersonName', 'responsiblepersonName', 'Name','',$data->responsiblepersonName) }}
                                            </div>
                                            <div class="col-lg-6">
                                                {{ createText('responsiblepersonAddress', 'responsiblepersonAddress', 'Address','',$data->responsiblepersonAddress) }}
                                            </div>
        <div class="col-lg-3">{{ createText('fatherName', 'fatherName', 'Father Name', '', $data->fatherName) }}
        </div>
        <div class="col-lg-3">
            {{ createText('grandFatherName', 'grandFatherName', 'Grand Father Name', '', $data->grandFatherName) }}
        </div>
        <div class="col-lg-3">
            {{ createText('permanentAddress', 'permanentAddress', 'Permanent Address', '', $data->permanentAddress) }}
        </div>
        <div class="col-lg-3">
            {{ createText('temporaryAddress', 'temporaryAddress', 'Temporary Address', '', $data->temporaryAddress) }}
        </div>


        <div class="row">
                                        <!-- <div class="col-lg-3">
                                            {{createLabel('foodNameOne','form-label col-form-label','Edibles')}}
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="foodNameOne[]" id="ediblesOne">
                                            </div>

                                        </div>
                                        <div class="col-lg-3">
                                            {{createLabel('packingSizeOne','form-label col-form-label','PackagingOne')}}
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="packingSizeOne[]" id="packingOne">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            {{createLabel('brandOne','form-label col-form-label','Brand')}}
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="brandOne[]" id="brandOne">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            {{createLabel('addnew','form-label col-form-label','Add new')}}
                                            <div class="input-group">
                                                <a class="btn btn-primary" id="addbrand">{{ __('lang.Add Row') }}</a>
                                            </div>
                                        </div> -->

                                        <!--  -->
                                        @if (isset($data->newLicenseSubstance) && $data->newLicenseSubstance->isEmpty() == false)
                                        @foreach ($data->newLicenseSubstance as $key => $substance)
                                            <div class="row g-3 descappended">
                                                <input type="hidden" class="form-control" name="substanceDetail_id[]" value={{ $substance->newlicensesubstance_id }}>
                                                <div class="col-lg-3">
                                                    {{ createLabel('foodNameOne', 'form-label col-form-label', 'Food Name') }}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-describedby="button-addon1" name="foodNameOne[]"
                                                            id="foodNameOne" value="{{$substance->foodNameOne}}">
                                                    </div>
                            
                                                </div>
                                                <div class="col-lg-3">
                                                    {{ createLabel('packingSizeOne', 'form-label col-form-label', 'packing Size') }}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"aria-describedby="button-addon1" name="packingSizeOne[]"
                                                            id="packingSizeOne" value="{{$substance->packingSizeOne}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    {{ createLabel('brandOne', 'form-label col-form-label', 'Brand') }}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"aria-describedby="button-addon1" name="brandOne[]"
                                                            id="brandOne" value="{{$substance->brandOne}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 mt-3">
                                                    <div class="input-group mt-5">
                                                        <a class="btn btn-primary" id="addbrand">Add Row</a> <a class="mx-1 descremovebrandrow btn btn-danger">Remove Row</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                        
                                        
                                        <!--  -->
                                    </div>
                                    <div class="row" id="addrow">
                                        <input type="hidden" id="temp_desc_all" value="0" name="temp_desc_all">
                                    </div>

                                    <div class="col-lg-6" id="machineryfield">
                                        
                                        
                                        {{createLabel('industryMachineOne','form-label col-form-label','Machinery for manufacture')}}
                                        <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addmachinery"></em>

                                        @if (isset($industryMachineOne))
                                        @foreach ($industryMachineOne as $key => $machine)
                                        <div class="form-group row d-flex align-items-end appended-row mt-2">
                                            <div class="input-group mt-2">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                                                    aria-describedby="button-addon1" name="industryMachineOne[]" id="industryMachineOne" value="{{$machine}}">
                                                <button class="removeitemrow btn btn-sm btn-danger mr-1" type="button" id="button-addon1">Remove Row</button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <!-- <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addmachinery"></em>
                                        <div class="input-group" id="replacemacahinery">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="industryMachineOne[]" id="industryMachineOne">
                                            <button id="addmachinery" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                                        </div> -->
                                        <input type="hidden" id="temp_desc" value="0" name="temp_desc_machinery">
                                    </div>
                                    <div class="col-lg-6" id="skillsfield">
                                        {{createLabel('industryManageOne','form-label col-form-label','Skills, Provision of skilled manpower')}}
                                        <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addskills"></em>
                                        
                                        @if (isset($industryManageOne))
                                        @foreach ($industryManageOne as $key => $machine)
                                        <div class="form-group row d-flex align-items-end appended-row mt-2">
                                            <div class="input-group mt-2">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                                                    aria-describedby="button-addon1" name="industryManageOne[]" id="industryManageOne" value="{{$machine}}">
                                                <button class="removeitemrow btn btn-sm btn-danger mr-1" type="button" id="button-addon1">Remove Row</button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <!-- <div class="input-group" id="replaceskills">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="industryManageOne[]" id="industryManageOne">
                                            <button id="addskills" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                                        </div> -->
                                        <input type="hidden" id="temp_desc" value="0" name="temp_desc_skills">
                                    </div>
                                    <div class="col-lg-12">
                                        {{createLabel('laboratoryManagement','col-form-label form-label h3','Laboratory Management')}}
                                    </div>
                                    <div class="col-lg-12">{{ createText('labManage', 'labManage', 'Lab Manage','',$data->labManage) }}
                                    </div>

                                    <div class="col-lg-12" id="paramaterfield">
                                        {{createLabel('labWorksOne','form-label col-form-label','Paramater')}}
                                        <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addparamater"></em>
                                        
                                        @if (isset($labWorksOne))
                                        @foreach ($labWorksOne as $key => $machine)
                                        <div class="form-group row d-flex align-items-end appended-row mt-2">
                                            <div class="input-group mt-2">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                                                    aria-describedby="button-addon1" name="labWorksOne[]" id="labWorksOne" value="{{$machine}}">
                                                <button class="removeitemrow btn btn-sm btn-danger mr-1" type="button" id="button-addon1">Remove Row</button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <!-- <div class="input-group" id="replaceparamater">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="labWorksOne[]" id="labWorksOne">
                                            <button id="addparamater" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                                        </div> -->
                                    </div>

                               
                                        <div class="col-lg-3">
                                        {{customCreateSelect("sanitation","sanitation",'',"Sanitation",['1'=>'आयातित','0'=>'स्वदेशी'],$data->sanitataion)}}
                                    </div>
                                    <!-- १०.१ कचा पदार्थको किसिम स्रोत : आयातित / स्वदेशी उत्पादन-->


                                    <!--१०.२ उत्पादित पदार्थको बजार : अन्तरिक / बाह्र्य -->
                                    <div class="col-lg-3">
                                        {{customCreateSelect("manufacture","manufacture",'',"Manufacture",['1'=>'अन्तरिक','0'=>'बाह्र्य'],$data->manufacture)}}
                                    </div>
                                    <!--१०.२ उत्पादित पदार्थको बजार : अन्तरिक / बाह्र्य -->
                               
                                        <div class="col-lg-3">{{ createText('industryCost', 'industryCost', 'Industry Cost', '', $data->industryCost) }}
                                        </div>

                                        <div class="col-lg-3">
                                            {{ createText('industryCapacity', 'industryCapacity', 'Industry Capacity', '', $data->industryCapacity) }}
                                        </div>

                                        <div class="col-lg-4">{{ createText('userName', 'userName', 'User Name', '', $data->userName) }}
                                        </div>
                                        <div class="col-lg-4">{{ createText('userAddress', 'userAddress', 'User Address', '', $data->userAddress) }}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
                                        </div>
                                        <div class="col-lg-12">
                                        {{createLabel('Incaseofrenewal','col-form-label form-label h3','संग्लगन गर्नु पर्ने बिवरणहरु')}}
                                    </div>
                                    <div class="col-lg-12">
                                        {{createLabel('Incaseofrenewal','col-form-label form-label h5','नया जारी गरेको हकमा')}}
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check my-2"><label class="form-check-label" for="industryregistrationCertificate"> उद्योग दर्ताको प्रमरणपत्र प्रतिलिप</label><input class="form-control-sm mx-2" id="industryregistrationCertificate" name="industryregistrationCertificate" type="file"></div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-check my-2"><label class="form-check-label" for="revenueReceipt">राजस्वो दस्तुर बुझाएको नगदी रसिद</label><input class="form-control-sm mx-2" id="revenueReceipt" name="revenueReceipt" type="file"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check my-2"><label class="form-check-label" for="letter">बोर्डको हकमा देएको आदिकरिक पत्र</label><input class="form-control-sm mx-2" id="letter" name="letter" type="file"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check my-2"><label class="form-check-label" for="industralistLetter">उद्योगपतिको आदिकरिक पत्र (उद्योगपतिको कारवाहीमा जिम्मा लिने वेक्ती उद्योगपति नभएमा )</label><input class="form-control-sm mx-2" id="industralistLetter" name="industralistLetter" type="file"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check my-2"><label class="form-check-label" for="passportSize">आनुग्यपत्र लिने वेक्तीको २ पासपोर्ट सिज़े फोटो</label><input class="form-control-sm mx-2" id="passportSize" name="passportSize" type="file"></div>
                                    </div>
                                    <div class="col-lg-12 my-2">
                                        <div class="form-check"><label class="form-check-label" for="packagedLogo">प्याक गरियेका खाध पदार्थको लेवेल १/१ प्रति लोगो वा ब्रान्ड वयेमा सो अनुरूपको</label><input class="form-control-sm mx-2" id="packagedLogo" name="packagedLogo" type="file"></div>
                                    </div>
                                    <div class="col-lg-12 my-2">
                                        <div class="form-check"><label class="form-check-label" for="roadMap">उद्योग सम्म पुगने नक्सा (म्याप सहित)</label><input class="form-control-sm mx-2" id="roadMap" name="roadMap" type="file"></div>
                                    </div>
                                    <div class="col-lg-12 my-2">
                                        <div class="form-check"><label class="form-check-label" for="citizenshipCopy">नागरिकताको प्रातिलिप</label><input class="form-control-sm mx-2" id="citizenshipCopy" name="citizenshipCopy" type="file"></div>
                                    </div>
                                    <div class="col-lg-12 my-2">
                                        <label class="form-check-label h3" for="industryofLicense">पर्सोधित पिउने पनि उद्योगले आनुग्यपत्र जारी लागि पुर्याउनु पर्ने थप वेवारणहरु।</label>
                                    </div>

                                    <div class="col-lg-12 my-2">
                                        <label class="form-check-label" for="saleDistribution">स्वोक्षकर तथा गुरास्थारेया प्रसोधित पिउने पानी उत्पादन तथा बिक्रि वितरणका लागि प्रसोधित पिउने पानी उद्योग आनुग्यपत्र जारीको लागि दीईने नीवेदन तथा आवसेक कागजातहरुका साथमा निम्न बमोजिमका थप वितरणहरु अनिवार्य रुपमा पेश गरि निवेदन दर्ता हुने। </label>
                                    </div>
                                    <div class="col-lg-12">{{createLabel('remarks','col-form-label form-label','Remarks')}}{{createTextArea("remarks","remarks",'',"Remarks",$data->remarks)}}
                                    </div> <br>
                                        <div class="col-md-12"><?php createButton('btn-primary btn-updateimage', '', 'Submit'); ?>
                                        </div>
                                </form>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                <script>
    $(document).on('click', '#addbrand', function() {
        var b = parseFloat($("#temp_desc_all").val());
        b = b + 1;
        $("#temp_desc_all").val(b);
        var temp = $("#temp_desc_all").val();
        const tst1 = `
        <div class="row gy-2 gx-2 descappended">
        <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="foodNameOne[]" id="foodNameOne">
                </div>

            </div>
            <div class="col-lg-3 ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="packingSizeOne[]" id="packingOne">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="brandOne[]" id="brandOne">
                </div>
            </div>
            <div class="col-lg-3  ">
                <div class="input-group">
                    <a class="btn btn-primary" id="addbrand">{{ __('lang.Add Row') }}</a> <a class="mx-1 descremovebrandrow btn btn-danger">{{ __('lang.Remove Row') }}</a>
                </div>
            </div>
        </div>
        </div>`
        $('#addrow').append(tst1);
    })

    $(document).on('click', '.descremovebrandrow', function() {
        $(this).closest('.descappended').remove();

    })
    $(document).on('click', '.removeitemrow', function() {
        $(this).closest('.appended-row').remove();

    })

    $(document).on('click', '#addmachinery', function() {
        var b = parseFloat($("#temp_desc_machinery").val());
        b = b + 1;
        $("#temp_desc_machinery").val(b);
        var temp = $("#temp_desc_machinery").val();
        var tst = `<div class="form-group row d-flex align-items-end descappended-row mt-2">
        <div class="input-group">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="industryMachineOne[]" id="industryMachineOne">
                                              <button id="addmachinery" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button><button class="machineryremove btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
       </div>
            </div>`

        $('#machineryfield').append(tst);

    })
    $(document).on('click', '#addskills', function() {
        var b = parseFloat($("#temp_desc_skills").val());
        b = b + 1;
        $("#temp_desc_skills").val(b);
        var temp = $("#temp_desc_skills").val();
        var tst = `<div class="form-group row d-flex align-items-end descappended-row mt-2">
        <div class="input-group">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="industryManageOne[]" id="industryManageOne">
                                            <button id="addskills" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button><button class="skillsremove btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
       </div>
            </div>`

        $('#skillsfield').append(tst);
    })
    $(document).on('click', '#addparamater', function() {
        var b = parseFloat($("#temp_desc_paramater").val());
        b = b + 1;
        $("#temp_desc_paramater").val(b);
        var temp = $("#temp_desc_paramater").val();
        var tst = `<div class="form-group row d-flex align-items-end descappended-row mt-2">
        <div class="input-group">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="labWorksOne[]" id="labWorksOne">
                                            <button id="addparamater" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button><button class="paramaterremove btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
       </div>
            </div>`

        $('#paramaterfield').append(tst);
    })


    $(document).on('click', '.machineryremove', function() {
        $(this).closest('.descappended-row').remove();
    })
    $(document).on('click', '.skillsremove', function() {
        $(this).closest('.descappended-row').remove();
    })
    $(document).on('click', '.paramaterremove', function() {
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
