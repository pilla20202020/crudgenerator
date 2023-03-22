<form action="{{ route('foodindustryinspectionreport.foodindustryinspectionreport.store') }}" id="storeCustomForm">
    @csrf
    <div class="row g-3">
        <div class="col-lg-4">{{ createText('industryName', 'industryName', 'Industry Name') }}
        </div>
        <div class="col-lg-4">{{ createText('addressTwo', 'addressTwo', 'Address') }}
        </div>
        <div class="col-lg-4">{{ createText('propritorName', 'propritorName', 'Name Of Industrialist') }}
        </div>
        <div class="col-lg-6">{{ createText('management', 'management', 'Name Of Management') }}
        </div>
        <div class="col-lg-6">{{ createDate('estalishedDate', 'estalishedDate', 'Industry Establishment Year') }}

        </div>


        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.udhyogswarup:') }}</label>
                <div class="form-control-wrap">
                    <ul class="col-12">
                        
                        <li class="">
                            <div class="row">
                            <div class="col-4">
                                <input class="form-check-input" type="radio" name="industryFormat"
                                    id="Sanatathagharelu" value="Sanatathagharelu" ><label class="form-check-label"
                                    for="Sanatathagharelu">{{ __('lang.Sanatathagharelu') }}</label>
                            </div>
                            <div class="col-4">
                                <!-- {{ createRadio('industryFormat', 'industryFormat',"form-check-input", ['Majhaula'],'Majhaula') }} -->
                                <input class="form-check-input" type="radio" name="industryFormat" id="Majhaula"
                                    value="Majhaula">
                                <label class="form-check-label" for="Majhaula">{{ __('lang.Majhaula') }}</label>
                            </div>
                            <div class=" col-4">
                                <input class="form-check-input" type="radio" name="industryFormat" id="Thulo"
                                    value="Thulo">
                                <label class="form-check-label" for="Thulo">{{ __('lang.Thulo') }}</label>
                            </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">{{ createLabel('', 'form-label col-form-label', 'Employee Numbers:') }}
        </div>
        <div class="col-lg-6">{{ createText('technical', 'technical', 'Technical') }}
        </div>
        <div class="col-lg-6">{{ createText('prasasanik', 'prasasanik', 'Prasasanik') }}
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.License') }}</label>
                <div class="form-control-wrap">
                    <ul class="g-4">
                        <li class="row col-12">
                            <div class="col-6">
                                <input class="form-check-input" type="radio" name="license" id="Liyeko"
                                    value="Liyeko" ><label class="form-check-label"
                                    for="Liyeko">{{ __('lang.Liyeko') }}</label>
                            </div>
                            <div class="col-6">
                                <input class="form-check-input" type="radio" name="license" id="Naliyeko"
                                    value="Naliyeko">
                                <label class="form-check-label" for="Naliyeko">{{ __('lang.Naliyeko') }}</label>
                            </div>
                            <div class="col-6">
                                <input class="form-check-input" type="radio" name="license" id="renew"
                                    value="Renew">
                                <label class="form-check-label" for="renew">{{ __('lang.Renew') }}</label>
                            </div>
                            <div class="col-6">
                                <input class="form-check-input" type="radio" name="license" id="nonRenew"
                                    value="NonRenew">
                                <label class="form-check-label" for="nonRenew">{{ __('lang.NonRenew') }}</label>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <!-- End -->

        <div class="col-lg-12">{{ createLabel('', 'form-label col-form-label', 'Product Details:') }}
        </div>
        <div class="col-lg-3">{{ createText('products', 'products', 'Manufactured Goods') }}
        </div>
        <div class="col-lg-3">{{ createText('brand', 'brand', 'Brand') }}
        </div>
        <div class="col-lg-3">{{ createText('time', 'time', 'Consumable Period') }}
        </div>
        <div class="col-lg-3">{{ createText('area', 'area', 'Sales Distribution Area') }}
        </div>
        <!--  -->


        <div class="col-12">
            <div class="form-group">{{ createLabel('', 'form-label', 'Label and Packaging Details') }}<br>
                {{ createLabel('', 'form-label', 'Packaging way:') }}
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="packagingWay" id="wellProtected"
                                value="well Protected" ><label class="form-check-label"
                                for="wellProtected">{{ __('lang.Well Protected') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="packagingWay" id="badlySafe"
                                value="Badly Safe">
                            <label class="form-check-label" for="badlySafe">{{ __('lang.badlySafe') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label
                    class="form-label">{{ __('lang.Industry Full Name And Address:') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="industryNameAddress" id="indName"
                                value="have" ><label class="form-check-label"
                                for="indName">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="industryNameAddress"
                                id="industryadd" value="haveNot">
                            <label class="form-check-label" for="industryadd">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.Manufacture Date') }}</label>
                <ul class="">
                    <li class="col-12 row d-flex">
                        <div class=" col-6">
                            <input class="form-check-input" type="radio" name="manufactureDate" id="manuDate"
                                value="have" ><label class="form-check-label"
                                for="manuDate">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="manufactureDate"
                                id="manufactureDate" value="haveNot">
                            <label class="form-check-label" for="manufactureDate">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.Batch No.') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="batchNumberOne" id="batchnoyes"
                                value="have" ><label class="form-check-label"
                                for="batchnoyes">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="batchNumberOne" id="batchno"
                                value="haveNot">
                            <label class="form-check-label" for="batchno">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.usebydate') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="upayog" id="upayogyes"
                                value="have" ><label class="form-check-label"
                                for="upayogyes">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="upayog" id="updayogno"
                                value="haveNot">
                            <label class="form-check-label" for="updayogno">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.Composition of raw materials') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="samrichan" id="samrichanyes"
                                value="have" ><label class="form-check-label"
                                for="samrichanyes">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="samrichan" id="samrichanno"
                                value="haveNot">
                            <label class="form-check-label" for="samrichanno">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.methodused') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="proyog" id="methodyes"
                                value="have" ><label class="form-check-label"
                                for="methodyes">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="proyog" id="methodno"
                                value="haveNot">
                            <label class="form-check-label" for="methodno">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.healthandnutritionclaim') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="swasthya" id="healthyes"
                                value="have" ><label class="form-check-label"
                                for="healthyes">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="swasthya" id="healthno"
                                value="haveNot">
                            <label class="form-check-label" for="healthno">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label
                    class="form-label">{{ __('lang.Health and nutrition claims accepted') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="swikrit" id="swikrityes"
                                value="have" ><label class="form-check-label"
                                for="swikrityes">{{ __('lang.have') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="swikrit" id="swikritno"
                                value="haveNot">
                            <label class="form-check-label" for="swikritno">{{ __('lang.haveNot') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>



        <div class="col-lg-12">{{ createLabel('', 'form-label col-form-label', 'Storage arrangement:') }}
        </div>

        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.Cleanliness') }}</label>
                <ul class="g-4">
                    <li class="row col-12">
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sarsafai" id="sarsafaigood"
                                value="Good" ><label class="form-check-label"
                                for="sarsafaigood">{{ __('lang.Good') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sarsafai" id="sarsafaimedium"
                                value="Medium">
                            <label class="form-check-label" for="sarsafaimedium">{{ __('lang.Medium') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sarsafai" id="sarsafaibad"
                                value="Bad">
                            <label class="form-check-label" for="sarsafaibad">{{ __('lang.Bad') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>



        <div class="col-lg-12">{{ createText('prakashHawa', 'prakashHawa', 'Light air') }}
        </div>


        <div class="col-12 mt-3">
            <div class="form-group"><label class="form-label">{{ __('lang.Temperature') }}</label>
                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="tapkram" id="Control"
                                value="Control">
                            <label class="form-check-label" for="Control">{{ __('lang.Control') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="tapkram" id="Ordinary"
                                value="Ordinary">
                            <label class="form-check-label" for="Ordinary">{{ __('lang.Ordinary') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group"><label
                    class="form-label">{{ __('lang.Bird, rodent, fly, pest control') }}</label>
                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="chara" id="charaGood"
                                value="Good">
                            <label class="form-check-label" for="charaGood">{{ __('lang.Good') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="chara" id="charaMedium"
                                value="Medium">
                            <label class="form-check-label" for="charaMedium">{{ __('lang.Medium') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="chara" id="charaBad"
                                value="Bad">
                            <label class="form-check-label" for="charaBad">{{ __('lang.Bad') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group"><label
                    class="form-label">{{ __('lang.Industry and Worker Sanitation Details') }}</label><br>
                <label for="">{{ __('lang.Employee Personal Hygiene') }}</label>
                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="hygiene" id="hyieneGood"
                                value="Good">
                            <label class="form-check-label" for="hyieneGood">{{ __('lang.Good') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="hygiene" id="hyieneMedium"
                                value="Satisfactory">
                            <label class="form-check-label" for="hyieneMedium">{{ __('lang.Satisfactory') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="hygiene" id="hyieneBad"
                                value="Bad">
                            <label class="form-check-label" for="hyieneBad">{{ __('lang.Bad') }}</label>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.IndustrialArea') }}</label>

                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="chetra" id="City"
                                value="City">
                            <label class="form-check-label" for="City">{{ __('lang.City') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="chetra" id="Village"
                                value="Village">
                            <label class="form-check-label" for="Village">{{ __('lang.Village') }}</label>
                        </div>



                    </li>
                </ul>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.Bathroom and toilet condition:') }}</label>

                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="bathroom" id="bathroomGood"
                                value="Good">
                            <label class="form-check-label" for="bathroomGood">{{ __('lang.Good') }}</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" type="radio" name="bathroom" id="badthroomBad"
                                value="Bad">
                            <label class="form-check-label" for="badthroomBad">{{ __('lang.Bad') }}</label>
                        </div>



                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.State of production cycle:') }}</label>

                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="condition" id="conditionGood"
                                value="Good">
                            <label class="form-check-label" for="conditionGood">{{ __('lang.Good') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="condition"
                                id="conditionSatisfactory" value="Satisfactory">
                            <label class="form-check-label"
                                for="conditionSatisfactory">{{ __('lang.Satisfactory') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="condition" id="conditionBad"
                                value="Bad">
                            <label class="form-check-label" for="conditionBad">{{ __('lang.Bad') }}</label>
                        </div>



                    </li>
                </ul>
            </div>
        </div>





        <div class="col-lg-6">{{ createText('productName', 'productName', 'Product Name') }}
        </div>
        <div class="col-lg-6">{{ createText('productSouce', 'productSouce', 'ProductSource') }}
        </div>
        <div class="col-lg-4">{{ createText('praichad', 'praichad', 'Parameters to be tested') }}
        </div>
        <div class="col-lg-4">{{ createText('prayog', 'prayog', 'If there is no laboratory, where is the test done?') }}
        </div>
        <div class="col-lg-4">{{ createText('sample', 'sample', 'Collected sample details') }}

        </div>
        <div class="col-12">
            <div class="form-group"><label class="form-label">{{ __('lang.Overall assessment (results):') }}</label>

                <ul class="g-4">
                    <li class="row col-12">

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="conclusion" id="conclusionBest"
                                value="Best">
                            <label class="form-check-label" for="conclusionBest">{{ __('lang.Best') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="conclusion"
                                id="conclusionSatisfactory" value="Satisfactory">
                            <label class="form-check-label"
                                for="conclusionSatisfactory">{{ __('lang.Satisfactory') }}</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="conclusion" id="conclusionBad"
                                value="Bad">
                            <label class="form-check-label" for="conclusionBad">{{ __('lang.Bad') }}</label>
                        </div>



                    </li>
                </ul>
            </div>
        </div>





    <div class="col-lg-6">{{ createDate('date', 'date', 'Date of Extinction:') }}
 
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div>
        <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
        </div>
</form>
