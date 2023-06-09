<form method="post" action="{{ route('hr.employee.store') }}">
    @csrf
    <div class="row g-gs">
        <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-9">
            <div class="gap gy-4">
                <div class="gap-col">
                    <div class="card card-gutter-md">
                        <div class="card-body">
                            <div class="row g-gs">
                                <div class="col-6">
                                    <label class="form-label">Employee ID -
                                        {{ $emp_id }}
                                    </label>
                                </div>
                                <hr class="border-primary border-2 opacity-85">

                                <div class="col-lg-12">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Personal Details</h2>
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createText('firstName', 'firstName', 'First Name') }}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createText('lastName', 'lastName', 'Last Name') }}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ customCreateSelect('gender_id', 'gender_id', '', 'Gender', ['1' => 'Male', '0' => 'Female', '2' => 'Others']) }}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createEmail('emailAddress', 'emailAddress', 'Email Address') }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createPassword('password', 'password', 'Password') }}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createText('phoneNumber', 'phoneNumber', 'Phone Number') }}
                                        </div>

                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Address Details</h2>
                                        </div>

                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', '', 'Country Name') !!}
                                        </div>

                                        <div class="col-lg-4">
                                            {{-- {!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '', '', 'State Name') !!} --}}
                                            {{  customCreateSelect('state_id', 'state_id', '','State Name', [])  }}

                                        </div>
                                        <div class="col-lg-4">
                                            {{-- {!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '', '', 'District Name') !!} --}}
                                            {{  customCreateSelect('district_id', 'district_id', '','District Name', [])  }}

                                        </div>
                                        <div class="col-lg-3 d-none">
                                            {{-- {!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '', '', 'City Name') !!} --}}
                                            {{  customCreateSelect('city_id', 'city_id', '','City Name', [])  }}

                                        </div>
                                        <div class="col-lg-12">
                                            {{ createText('permanentAddress', 'permanentAddress', 'Address') }}
                                        </div>
                                        <div class="col-lg-6 d-none">
                                            {{ createText('temproryAddress', 'temproryAddress', 'Temporary Address') }}
                                        </div>
                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Organization Role</h2>
                                        </div>
                                        <div class="col-lg-4">
                                            {{customCreateSelect('role_id', 'role_id', '', 'User Role', getRoles()->pluck('name','id')->toArray())}}
                                        </div>
                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '', '', 'Department Name') !!}
                                        </div>
                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_designation', 'designation_id','designationName','', '','Designation' ) !!}
                                        </div>

                                    </div>
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
                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'],'1') }}
                         
                        </div>
                        <div class="col-lg-12">
                            {{ createNumber('panNo', 'panNo', 'Govt. Pan No.') }}
                        </div>
                        <hr>
                        <div class="col-12 d-none">
                            <div class="form-group"><label class="form-label">Thumbnail</label>
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
                                                    id="loginAllowedYes" value="1" checked><label
                                                    class="form-check-label" for="loginAllowedYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_login"
                                                    id="loginAllowedNo" value="0">
                                                <label class="form-check-label" for="loginAllowedNo">No</label>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gap-col">
                            <ul class="d-flex align-items-center gap g-3">
                                <li><button type="submit" class="btn btn-primary">Submit</button></li>
                                <!-- <li><a href="products.html" class="btn border-0">Cancel</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function(){
        $(document).on('click', '#nepali-datepicker', function(e) {
            var mainInput = document.getElementById("nepali-datepicker");
            mainInput.nepaliDatePicker();
        });
    });

    // Fetch state according to country
    $('#country_id').on('change',function(e){
        e.preventDefault();
        var country_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('master.state.getState')}}",
                data: {
                    'country_id': country_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#state_id').html('<option value="#" selected disabled>Choose State</option>');
                    $.each(response.message, function(key,value){
                        $('#state_id').append('<option value='+value.state_id+'>'+value.stateName+'</option>');
                    });
                }
            });
    });

    // Fetch District according to state
    $('#state_id').on('change',function(e){
        e.preventDefault();
        var state_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('master.state.getDistrict')}}",
                data: {
                    'state_id': state_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#district_id').html('<option value="#" selected disabled>Choose District</option>');
                    $.each(response.message, function(key,value){
                        $('#district_id').append('<option value='+value.district_id+'>'+value.districtName+'</option>');
                    });
                }
            });
    });

    // Fetch City according to district
    $('#district_id').on('change',function(e){
        e.preventDefault();
        var district_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('master.state.getCity')}}",
                data: {
                    'district_id': district_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#city_id').html('<option value="#" selected disabled>Choose City</option>');
                    $.each(response.message, function(key,value){
                        $('#city_id').append('<option value='+value.city_id+'>'+value.cityName+'</option>');
                    });
                }
            });
    });

    // Fetch Manager according to department
    $('#department_id').on('change',function(e){
        e.preventDefault();
        var department_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('hr.employee.getHeadOfDepartment')}}",
                data: {
                    'department_id': department_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);
                    $('#reportingTo').html('<option value="#" selected disabled>Select Reporting To</option>');
                    $.each(response.message, function(key,value){
                        $('#reportingTo').append('<option value='+value.employee_id+'>'+value.firstName+' '+value.middleName+' '+value.lastName+'</option>');
                    });
                }
            });
    });

    // select2 tags
    $('.skills').select2({
        tags: true
    });
</script>




