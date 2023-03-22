<form class="row g-3" action="{{route('form5.renewalfoodindustrylicense.store')}}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-12">{{createText("industryName","industryName","Industry Name")}}
        </div>
        <div class="col-lg-12">
            {{createLabel('industryAddress','col-form-label form-label h3','Industry Address')}}
        </div>
        <div class="col-lg-3">{{createText("tole","tole","Tole")}}
        </div>
        <div class="col-lg-3">{{createText("municipality","municipality","Municipality")}}
        </div>
        <div class="col-lg-3">{{createText("district","district","District")}}
        </div>
        <div class="col-lg-3">{{createText("phone","phone","Phone")}}
        </div>
        <div class="col-lg-12">{{createText("type","type","Industry / Form Type")}}
        </div>

        <div class="col-lg-6">{{createText("ownerName","ownerName","Owner Name")}}
        </div>

        <div class="col-lg-6">{{createText("addressTwo","addressTwo","Address")}}
        </div>
        <div class="col-lg-12">
            {{createLabel('industryAddress','col-form-label form-label h3','Name, Surname and address of the person taking charge of the industry')}}
        </div>
        <div class="col-lg-3">{{createText("fatherName","fatherName","Father Name")}}
        </div>
        <div class="col-lg-3">{{createText("grandFatherName","grandFatherName","Grandfather Name")}}
        </div>
        <div class="col-lg-3">{{createText("addressThree","addressThree","Permanent Address")}}
        </div>
        <div class="col-lg-3">{{createText("addressFour","addressFour","Temporary Address")}}
        </div>


        <div class="row g-3">
            <div class="col-lg-3">
                {{createLabel('ediblesOne','form-label col-form-label','Edibles')}}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="ediblesOne[]" id="ediblesOne">
                </div>

            </div>
            <div class="col-lg-3">
                {{createLabel('packingOne','form-label col-form-label','PackagingOne')}}
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="button-addon1" name="packingOne[]" id="packingOne">
                </div>
            </div>
            <div class="col-lg-3">
                {{createLabel('brandOne','form-label col-form-label','Brand')}}
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="button-addon1" name="brandOne[]" id="brandOne">
                </div>
            </div>
            <div class="col-lg-3">
                {{createLabel('addnew','form-label col-form-label','Add new')}}
                <div class="input-group">
                    <a class="btn btn-primary" id="addbrand">{{ __('lang.Add Row') }}</a>
                </div>
            </div>
        </div>


        <div id="addrow">

        <input type="hidden" id="temp_desc_all" value="0" name="temp_desc_all">
        </div>



        <!-- insert new field in database machinery -->
        <div class="col-lg-6" id="machineryfield">
            {{createLabel('wantedMachinery','form-label col-form-label','Machinery for manufacture')}}
            <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addmachinery"></em>
            <div class="input-group" id="replacemacahinery">
                <input type="text" class="form-control" aria-describedby="button-addon1" name="machinery[]" id="machinery">
                <button id="addmachinery" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
            </div>
            <input type="hidden" id="temp_desc" value="0" name="temp_desc_machinery">
        </div>
        <!-- insert new field in database machinery -->

        <div class="col-lg-6" id="skillsfield">
            {{createLabel('skills','form-label col-form-label','Skills, Provision of skilled manpower')}}
            <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addskills"></em>
            <div class="input-group" id="replaceskills">
                <input type="text" class="form-control" aria-describedby="button-addon1" name="skills[]" id="skills">
                <button id="addskills" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
            </div>
            <input type="hidden" id="temp_desc" value="0" name="temp_desc_skills">
        </div>


        <div class="col-lg-12">
            {{createLabel('laboratoryManagement','col-form-label form-label h3','Laboratory Management')}}
        </div>

        <!-- प्रयोगशाला भएमा विश्लेषण गरिने प्यारामीटरहरु -->
        <div class="col-lg-12" id="paramaterfield">
            {{createLabel('skill','form-label col-form-label','Paramater')}}
            <em class="icon ni ni-plus-sm bg-light text-primary p-1 mx-2 rounded-2" id="addparamater"></em>
            <div class="input-group" id="replaceparamater">
                <input type="text" class="form-control" aria-describedby="button-addon1" name="paramater[]" id="paramater">
                <button id="addparamater" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
            </div>
            <input type="hidden" id="temp_desc" value="0" name="temp_desc_paramater">
        </div>
        <!-- प्रयोगशाला भएमा विश्लेषण गरिने प्यारामीटरहरु -->



        <div class="col-lg-12">
            {{createLabel('cleanManagement','col-form-label form-label h3','Clean Management')}}
        </div>


        <!-- १०.१ कचा पदार्थको किसिम स्रोत : आयातित / स्वदेशी उत्पादन-->
        <div class="col-lg-3">
            {{customCreateSelect("sanitation","sanitation",'',"Sanitation",['1'=>'आयातित','0'=>'स्वदेशी'])}}
        </div>
        <!-- १०.१ कचा पदार्थको किसिम स्रोत : आयातित / स्वदेशी उत्पादन-->


        <!--१०.२ उत्पादित पदार्थको बजार : अन्तरिक / बाह्र्य -->
        <div class="col-lg-3">
            {{customCreateSelect("manufacture","manufacture",'',"Manufacture",['1'=>'अन्तरिक','0'=>'बाह्र्य'])}}
        </div>
        <!--१०.२ उत्पादित पदार्थको बजार : अन्तरिक / बाह्र्य -->


        <!-- ३ उद्योगको लागत -->
        <div class="col-lg-3">
            {{createText("udhyog","udhyog","Udhyog")}}
        </div>
        <!-- ३ उद्योगको लागत -->

        <!-- १०. ४ उद्योगको क्षमता -->
        <div class="col-lg-3">
            {{createText("potential","potential","Potential")}}
        </div>
        <!-- १०. ४ उद्योगको क्षमता -->

        <div class="col-lg-12">
            {{createLabel('Incaseofrenewal','col-form-label form-label h3','In case of renewal')}}
        </div>

        <div class="col-lg-12">
            <div class="form-check my-2"> <input class="form-check-input" type="checkbox" value="1" id="issueDate" name="issueDate"> <label class="form-check-label" for="issueDate"> जारी भएको अनुज्ञापत्र सक्कली प्रति </label><input class="form-control-sm mx-2" id="formFileRg" type="file"></div>
        </div>

        <div class="col-lg-12">
            <div class="form-check my-2"> <input class="form-check-input" type="checkbox" value="1" id="receipt" name="receipt"> <label class="form-check-label" for="receipt"> राजस्व दस्तुर बुझाएको नगदी रशिद</label><input class="form-control-sm mx-2" id="formFileRg" type="file"></div>
        </div>
        <div class="col-lg-12">
            <div class="form-check my-2"> <input class="form-check-input" type="checkbox" value="1" id="production" name="production"> <label class="form-check-label" for="production"> उत्पादिन खाद्य पदार्थ बिवरणमा थपघट गर्नु परेमा सोको बिवरण</label><input class="form-control-sm mx-2" id="formFileRg" type="file"></div>
        </div>
        <div class="col-lg-12">
            <div class="form-check my-2"> <input class="form-check-input" type="checkbox" value="1" id="label" name="label"> <label class="form-check-label" for="label">उत्पादिन खाद्य वस्तुको लेवल नमुना १ / १ प्रति</label><input class="form-control-sm mx-2" id="formFileRg" type="file"></div>
        </div>
        <div class="col-lg-12">
            <div class="form-check my-2"> <input class="form-check-input" type="checkbox" value="1" id="sample" name="sample"> <label class="form-check-label" for="sample">उत्पादिन खाद्य वस्तुको नमुना</label></div>
        </div>
        <div class="col-lg-12 my-2">
            <div class="form-check"> <input class="form-check-input" type="checkbox" value="1" id="photocopy" name="photocopy"> <label class="form-check-label" for="photocopy">घरेलु तथा साना उद्योग कार्यालयको उद्योग दर्ता प्रमाण पत्रको फोटोकपी / छाँयाप्रति</label><input class="form-control-sm mx-2" id="formFileRg" type="file"></div>
        </div>

        <div class="col-lg-12">
            {{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks","remarks","remarks","","")}}
        </div> <br>
        <div class="col-md-12"><?php createButton(
                                    "btn-primary btn-store",
                                    "",
                                    "Submit"
                                ); ?>
        </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--machinery and description of raw materials repeater code -->
<script>
      $(document).on('click', '#addbrand', function() {
        var b = parseFloat($("#temp_desc_all").val());
        b = b + 1;
        $("#temp_desc_all").val(b);
        var temp = $("#temp_desc_all").val();
        const tst1 = `
        <div class="row mt-2 descappended">
        <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="ediblesOne[]" id="ediblesOne">
                </div>

            </div>
            <div class="col-lg-3 ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="packingOne[]" id="packingOne">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="brandOne[]" id="brandOne">
                </div>
            </div>
            <div class="col-lg-3  ">
                <div class="input-group">
                    <a class="btn btn-primary" id="addbrand">Add Row</a> <a class="mx-1 descremovebrandrow btn btn-danger">Remove Row</a>
                </div>
            </div>
        </div>
        </div>`
        $('#addrow').append(tst1);
    })

    $(document).on('click', '.descremovebrandrow', function() {
        $(this).closest('.descappended').remove();

    })


    $(document).on('click', '#addmachinery', function() {
        var b = parseFloat($("#temp_desc_machinery").val());
        b = b + 1;
        $("#temp_desc_machinery").val(b);
        var temp = $("#temp_desc_machinery").val();
        var tst = `<div class="form-group row d-flex align-items-end descappended-row mt-2">
        <div class="input-group">
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="machinery[]" id="machinery">
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
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="skills[]" id="skills">
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
                                            <input type="text" class="form-control" aria-describedby="button-addon1" name="paramater[]" id="paramater">
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
