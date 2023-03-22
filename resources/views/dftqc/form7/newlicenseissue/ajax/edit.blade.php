<form action="{{ route('form7.newlicenseissue.update', [$data->newlicenseissue_id]) }}" id="updateCustomForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{ createText('industryName', 'industryName', 'IndustryName', '', $data->industryName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryAddressTol', 'industryAddressTol', 'Industry Address Tol', '', $data->industryAddressTol) }}
        </div>
        <div class="col-lg-6">
            {{ createText('MunicipalityVDC', 'MunicipalityVDC', 'Municipality VDC', '', $data->MunicipalityVDC) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryDistrict', 'industryDistrict', 'Industry District', '', $data->industryDistrict) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryAddress', 'industryAddress', 'Industry Address', '', $data->industryAddress) }}
        </div>
        <div class="col-lg-6">{{ createText('industryType', 'industryType', 'Industry Type', '', $data->industryType) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManagerFirstName', 'industryManagerFirstName', 'Industry Manager First Name', '', $data->industryManagerFirstName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManagerMiddleName', 'industryManagerMiddleName', 'Industry Manager Middle Name', '', $data->industryManagerMiddleName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManagerLastName', 'industryManagerLastName', 'Industry Manager Last Name', '', $data->industryManagerLastName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManagerAddress', 'industryManagerAddress', 'Industry Manager Address', '', $data->industryManagerAddress) }}
        </div>
        <div class="col-lg-6">{{ createText('fatherName', 'fatherName', 'Father Name', '', $data->fatherName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('grandFatherName', 'grandFatherName', 'Grand Father Name', '', $data->grandFatherName) }}
        </div>
        <div class="col-lg-6">
            {{ createText('permanentAddress', 'permanentAddress', 'Permanent Address', '', $data->permanentAddress) }}
        </div>
        <div class="col-lg-6">
            {{ createText('temporaryAddress', 'temporaryAddress', 'Temporary Address', '', $data->temporaryAddress) }}
        </div>
        <div class="col-lg-6">{{ createText('foodNameOne', 'foodNameOne', 'Food Name', '', $data->foodNameOne) }}
        </div>
        <div class="col-lg-6">{{ createText('foodNameTwo', 'foodNameTwo', 'Food Name', '', $data->foodNameTwo) }}
        </div>
        <div class="col-lg-6">{{ createText('foodNameThree', 'foodNameThree', 'Food Name', '', $data->foodNameThree) }}
        </div>
        <div class="col-lg-6">
            {{ createText('packingSizeOne', 'packingSizeOne', 'Packing Size', '', $data->packingSizeOne) }}
        </div>
        <div class="col-lg-6">
            {{ createText('packingSizeTwo', 'packingSizeTwo', 'Packing Size', '', $data->packingSizeTwo) }}
        </div>
        <div class="col-lg-6">
            {{ createText('packingSizeThree', 'packingSizeThree', 'Packing Size', '', $data->packingSizeThree) }}
        </div>
        <div class="col-lg-6">{{ createText('brandOne', 'brandOne', 'Brand ', '', $data->brandOne) }}
        </div>
        <div class="col-lg-6">{{ createText('brandTwo', 'brandTwo', 'Brand', '', $data->brandTwo) }}
        </div>
        <div class="col-lg-6">{{ createText('brandThree', 'brandThree', 'Brand ', '', $data->brandThree) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryMachineOne', 'industryMachineOne', 'Industry Machine', '', $data->industryMachineOne) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryMachineTwo', 'industryMachineTwo', 'Industry Machine', '', $data->industryMachineTwo) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryMachineThree', 'industryMachineThree', 'Industry Machine', '', $data->industryMachineThree) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryMachineFour', 'industryMachineFour', 'Industry Machine', '', $data->industryMachineFour) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManageOne', 'industryManageOne', 'Industry Manage', '', $data->industryManageOne) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManageTwo', 'industryManageTwo', 'Industry Manage', '', $data->industryManageTwo) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManageThree', 'industryManageThree', 'Industry Manage', '', $data->industryManageThree) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryManageFour', 'industryManageFour', 'Industry Manage', '', $data->industryManageFour) }}
        </div>
        <div class="col-lg-6">{{ createText('labManage', 'labManage', 'Lab Manage', '', $data->labManage) }}
        </div>
        <div class="col-lg-6">{{ createText('labWorksOne', 'labWorksOne', 'Lab Works', '', $data->labWorksOne) }}
        </div>
        <div class="col-lg-6">{{ createText('labWorksTwo', 'labWorksTwo', 'Lab Works', '', $data->labWorksTwo) }}
        </div>
        <div class="col-lg-6">{{ createText('labWorksThree', 'labWorksThree', 'Lab Works', '', $data->labWorksThree) }}
        </div>
        <div class="col-lg-6">{{ createText('industryCost', 'industryCost', 'Industry Cost', '', $data->industryCost) }}
        </div>
        <div class="col-lg-6">
            {{ createText('industryCapacity', 'industryCapacity', 'Industry Capacity', '', $data->industryCapacity) }}
        </div>
        <div class="col-lg-6">{{ createText('userName', 'userName', 'User Name', '', $data->userName) }}
        </div>
        <div class="col-lg-6">{{ createText('userAddress', 'userAddress', 'User Address', '', $data->userAddress) }}
        </div>
        <div class="col-lg-6 ">
                     
            <div class="form-group ">
                <label for="amount" class="col-form-label pt-0">Company Logo</label>
                <div class="">
                    @if (isset($data) && $data->company_logo)
                        <input type="file" name="company_logo" class="dropify"
                            data-default-file="{{ asset('storage/' . $data->company_logo) }}" />
                    @else
                        <input type="file" name="company_logo" class="dropify" />
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-updateimage', '', 'Submit'); ?>
        </div>
</form>
