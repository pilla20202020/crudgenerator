<form action="{{ route('hr.employee.update', [$data->employee_id]) }}" id="updateCustomForm" method="POST">
    @csrf
    @method('PUT')

    <div class="row g-gs">
        <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-9">
            <div class="gap gy-4">
                <div class="gap-col">
                    <div class="card card-gutter-md">
                        <div class="card-body">
                            <div class="row g-gs">
                                <div class="col-6">
                                    <label class="form-label">Employee Id -
                                        {{ $data->employee_id }}</label>

                                </div>
                                <hr class="border-primary border-2 opacity-85">

                                <div class="col-lg-12">
                                    <div class="row">
                                        <!-- <div class="col-lg-6">
                                            </div> -->
                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Personal Details</h2>
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createText('firstName', 'firstName', 'First Name', '', $data->firstName) }}
                                        </div>
                                        <div class="col-lg-4 d-none">
                                            {{ createText('middleName', 'middleName', 'Middle Name', '', $data->middleName) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createText('lastName', 'lastName', 'Last Name', '', $data->lastName) }}
                                        </div>
                                        <div class="col-lg-4 d-none">
                                            {{ customCreateSelect('gender_id', 'gender_id', '', 'Gender', ['1' => 'Male', '0' => 'Female', '2' => 'Others'], $data->gender_id) }}
                                        </div>
                                        <div class="col-lg-6 d-none">
                                            {{ createDate('dateOfBirth', 'dateOfBirth', 'Date Of Birth', '', $data->dateOfBirth) }}
                                        </div>

                                        <div class="col-lg-6 d-none">
                                            {!! getSelectForForeignColumn(
                                                'tbl_nationality',
                                                'nationality_id',
                                                'nationalityName',
                                                '',
                                                $data,
                                                'Nationality Name',
                                            ) !!}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createText('phoneNumber', 'phoneNumber', 'Phone Number', '', $data->phoneNumber) }}
                                        </div>



                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Address Details</h2>
                                        </div>

                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', $data, 'Country Name') !!}
                                        </div>

                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '', $data, 'State Name') !!}
                                        </div>
                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '', $data, 'District Name') !!}
                                        </div>
                                        <div class="col-lg-3 d-none">
                                            {!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '', $data, 'City Name') !!}
                                        </div>
                                        <div class="col-lg-12">
                                            {{ createText('permanentAddress', 'permanentAddress', 'Address', '', $data->permanentAddress) }}
                                        </div>
                                        <div class="col-lg-6 d-none">
                                            {{ createText('temproryAddress', 'temproryAddress', 'Temprory Address', '', $data->temproryAddress) }}
                                        </div>
                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Organization Role</h2>
                                        </div>
                                        <div class="col-lg-4">
                                            {{ customCreateSelect('role_id','role_id','','User Role',getRoles()->pluck('name', 'id')->toArray(),$data->role_id) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '', $data, 'Department Name') !!}
                                        </div>
                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_designation', 'designation_id', 'designationName', '', $data, 'Designation') !!}
                                        </div>
                                        <div class="col-lg-6 d-none">
                                            {{ createDate('joiningDate', 'joiningDate', 'Join Date','',$data->joiningDate) }}
                                        </div>
                             





                                        <div class="col-lg-12 d-none">
                                            {{ createLabel('Skills', 'form-label col-form-label', 'Skills') }}
                                            <select name="skills[]" class="form-control skills" multiple>
                                                @if (!empty($skills[0]))
                                                    @foreach ($skills as $skill)
                                                        <option value="{{ $skill }}" selected>
                                                            {{ $skill }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

<!-- 
                                        <div class="col-lg-12">
                                            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', $data->remarks) }}
                                        </div> -->




                                    </div>

                                    <!-- end -->
                                </div>




                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="card card-gutter-md">
                <div class="card-body">
                    <div class="row g-gs">

                        <div class="col-12">
                            <!--switch -->
                            <!-- <div class="form-check form-switch form-check-lg">
                                    <input class="form-check-input" type="checkbox"
                                        value="" id="flexSwitchSizeLg">
                                    <label class="form-check-label"
                                        for="flexSwitchSizeLg"> Status</label>
                                </div> -->

                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
                      

                        </div>
                        <div class="col-lg-12">
                            {{ createText('panNo', 'panNo', 'Govt. Pan No', '', $data->panNo) }}
                        </div>
                        <hr>
                        <div class="col-12 d-none">
                            <div class="form-group"><label class="form-label">Thumbnail</label>
                                @if ($data->profilePhoto)
                                    <img id="holder" style="margin-top:15px;max-height:300px;" class="img img-fluid"
                                        src="{{ $data->profilePhoto }}">
                                @endif
                                <div class="form-control-wrap">
                                    <input id="thumbnail" class="form-control" type="text" name="profilePhoto"
                                        value="" readonly>
                                    <button id="lfm btn-image" data-input="thumbnail" data-preview="holder"
                                        class="lfm btn icon-left btn-primary mt-2 btn-image">
                                        <i class="fa fa-upload"></i> &nbsp;Choose
                                    </button>
                                </div>
                                <div class="form-note mt-3">Set the product
                                    thumbnail image. Only *.png, *.jpg and *.jpeg
                                    image files are accepted.</div>
                            </div>
                        </div>




                        <div class="col-12 d-none">
                            <div class="form-group"><label class="form-label">Login Allowed</label>
                                <div class="form-control-wrap">
                                    <ul class="g-4">
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_login"
                                                    id="loginAllowedYes" value="1"
                                                    {{ $data->is_login == 1 ? 'checked' : '' }}><label
                                                    class="form-check-label" for="loginAllowedYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_login"
                                                    id="loginAllowedNo" value="0"
                                                    {{ $data->is_login == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="loginAllowedNo">No</label>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-none">
                            <div class="form-group"><label class="form-label">Receive email
                                    notifications?</label>
                                <div class="form-control-wrap">
                                    <ul class="g-4">
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="is_email_notification" id="inlineRadio1" value="1"
                                                    {{ $data->is_email_notification == 1 ? 'checked' : '' }}><label
                                                    class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="is_email_notification" id="inlineRadio2" value="0"
                                                    {{ $data->is_email_notification == 0 ? 'checked' : '' }}><label
                                                    class="form-check-label" for="inlineRadio2">No</label>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gap-col">
                            <ul class="d-flex align-items-center gap g-3">
                                <li><button type="submit" class="btn btn-primary">Update</button></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    // Fetch state according to country
    $('#country_id').on('change', function(e) {
        e.preventDefault();
        var country_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('master.state.getState') }}",
            data: {
                'country_id': country_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('#state_id').html('<option value="#" selected disabled>Choose State</option>');
                $.each(response.message, function(key, value) {
                    $('#state_id').append('<option value=' + value.state_id + '>' + value
                        .stateName + '</option>');
                });
            }
        });
    });

    // Fetch District according to state
    $('#state_id').on('change', function(e) {
        e.preventDefault();
        var state_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('master.state.getDistrict') }}",
            data: {
                'state_id': state_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('#district_id').html(
                    '<option value="#" selected disabled>Choose District</option>');
                $.each(response.message, function(key, value) {
                    $('#district_id').append('<option value=' + value.district_id + '>' +
                        value.districtName + '</option>');
                });
            }
        });
    });

    // Fetch City according to district
    $('#district_id').on('change', function(e) {
        e.preventDefault();
        var district_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('master.state.getCity') }}",
            data: {
                'district_id': district_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('#city_id').html('<option value="#" selected disabled>Choose City</option>');
                $.each(response.message, function(key, value) {
                    $('#city_id').append('<option value=' + value.city_id + '>' + value
                        .cityName + '</option>');
                });
            }
        });
    });

    // Skill tag
    $('.skills').select2({
        tags: true
    });
</script>
