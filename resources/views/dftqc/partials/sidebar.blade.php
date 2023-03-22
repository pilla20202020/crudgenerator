<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="#" class="logo-link">
                <div class="logo-wrap">
                    <!-- <img src="assets/images/logo/logo1.png"> -->
                    <img src="{{ url('assets/images/logo/logo1.png') }}" alt="Image" />
                </div>
            </a>
            <div class="nk-compact-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em
                        class="icon off ni ni-chevrons-left"></em><em
                        class="icon on ni ni-chevrons-right"></em></button>
            </div>
            <div class="nk-sidebar-toggle me-n1 noprint"><button
                    class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle"><em
                        class="icon ni ni-arrow-left"></em></button></div>
        </div>
    </div>

    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    @if (auth()->user()->user_type == 'APPLICANT')
                        <li class="nk-menu-item">
                            <a href="{{ route('consumer.dashboard') }}" class="nk-menu-link ">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nk-menu-item"><a href="{{ route('form7.newlicenseissue.index') }}"
                                class="nk-menu-link"><span class="nk-menu-icon"><em
                                        class="icon ni ni-book"></em></span><span class="nk-menu-text">New License
                                    Issue</span></a>
                        </li>
                    @endif
                    @if (auth()->user()->user_type == 'EMPLOYEE')
                        <li class="nk-menu-item">
                            <a href="{{ route('employee.dashboard') }}" class="nk-menu-link ">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>
                    @endif


                    @if (auth()->user()->hasRole('super-super-admin') ||
                            auth()->user()->hasRole('super-admin') ||
                            auth()->user()->hasRole('admin'))
                        <li class="nk-menu-item">
                            <a href="{{ route('dashboard') }}" class="nk-menu-link ">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>
                    @else
                        {{-- <li class="nk-menu-item">
                            <a href="{{ route('employee.dashboard') }}" class="nk-menu-link ">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li> --}}
                    @endif

                    @can('settings-users-index')
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Settings</h6>
                        </li>
                    @endcan

                    @if (Gate::check('settings-users-index') ||
                            Gate::check('settings-role-index') ||
                            Gate::check('settings-permission-index'))
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                                <span class="nk-menu-text">User Management</span></a>
                            <ul class="nk-menu-sub">
                                @can('settings-users-index')
                                    <li class="nk-menu-item"><a href="{{ route('setting.users.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">User</span></a>
                                    </li>
                                @endcan
                                @can('settings-role-index')
                                    <li class="nk-menu-item"><a href="{{ route('setting.role.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Role</span></a>
                                    </li>
                                @endcan
                                @can('settings-permission-index')
                                    <li class="nk-menu-item"><a href="{{ route('setting.permission.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Permissions</span></a>
                                    </li>
                                @endcan

                                <li class="nk-menu-item"><a href="{{ route('setting.login.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">User Login Logs</span></a>
                                </li>
                                <li class="nk-menu-item"><a href="{{ route('setting.activity.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">User Activity Logs</span></a>
                                </li>
                                <li class="nk-menu-item"><a href="{{ route('setting.operation.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Operations Logs</span></a>
                                </li>
                                <li class="nk-menu-item"><a href="{{ route('setting.nepalicontent.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Nepali Content</span></a>
                                </li>
                                <li class="nk-menu-item"><a href="{{ route('setting.database.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Database Backup</span></a>
                            </ul>
                        </li>
                    @endif



                    {{-- @if (Gate::check('settings-organization-index'))
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                        <ul class="nk-menu-sub">


                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization
                                        Setting</span></a></li>





                        </ul>
                    </li>
                    @endif --}}


                    {{-- <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span></a>
                    </li> --}}
                    @role('super-super-admin')
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                                    class="nk-menu-text">forms</span></a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item"><a href="{{ route('form.create') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">crud</span></a>
                                </li>
                            </ul>
                        </li>
                    @endrole

                    @if (auth()->user()->hasRole('super-super-admin') ||
                            auth()->user()->hasRole('super-admin'))
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                    class="nk-menu-text">Master</span></a>
                            <ul class="nk-menu-sub">
                                {{-- <li class="nk-menu-item"><a href="{{ route('master.module.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Module </span></a>
                                </li> --}}
                                <li class="nk-menu-item"><a href="{{ route('master.country.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Countries
                                        </span></a>
                                </li>
                                <li class="nk-menu-item"><a href="{{ route('master.state.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">State </span></a>
                                </li>
                                <li class="nk-menu-item"><a href="{{ route('master.district.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">District
                                        </span></a></li>
                                <li class="nk-menu-item d-none"><a href="{{ route('master.city.index') }}"
                                        class="nk-menu-link"><span class="nk-menu-text">Cities </span></a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if (Gate::check('hr-department-index') ||
                            Gate::check('hr-designation-index') ||
                            Gate::check('hr-employee-index') ||
                            Gate::check('hr-applicant-index'))
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                    class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                    class="nk-menu-text">HR</span></a>
                            <ul class="nk-menu-sub">
                                @can('hr-department-index')
                                    <li class="nk-menu-item"><a href="{{ route('hr.department.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Department </span></a>
                                    </li>
                                @endcan

                                @can('hr-designation-index')
                                    <li class="nk-menu-item"><a href="{{ route('hr.designation.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Designation </span></a>
                                    </li>
                                @endcan
                                @can('hr-employee-index')
                                    <li class="nk-menu-item"><a href="{{ route('hr.employee.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Employee </span></a>
                                    </li>
                                @endcan

                                @can('hr-applicant-index')
                                    <li class="nk-menu-item"><a href="{{ route('hr.applicant.index') }}"
                                            class="nk-menu-link"><span class="nk-menu-text">Applicant </span></a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif


                    @if (Gate::check('rfie-index') ||
                            Gate::check('nli-index') ||
                            Gate::check('ier-index') ||
                            Gate::check('lfi-index') ||
                            Gate::check('lib-index') ||
                            Gate::check('rfil-index') ||
                            Gate::check('ril-index'))
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Licences Branch</h6>
                        </li>


                        @can('ier-index')
                            <li class="nk-menu-item"><a href="{{ route('form7.newlicenseissue.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">New License
                                        Issue</span></a>
                            </li>
                        @endcan
                        <!-- form 5 according to paper -->
                        @can('lfi-index')
                            <li class="nk-menu-item"><a href="{{ route('form2.licensingfoodindustry.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">Licensing Food
                                        Industry</span></a>
                            </li>
                        @endcan
                        <!-- form 5 according to paper -->
                        @can('lib-index')
                            <li class="nk-menu-item"><a href="{{ route('form9.licensinginspectionbranch.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">License
                                        Inspection
                                        Branch</span></a>
                            </li>
                        @endcan


                        {{-- form 5 --}}
                        @can('rfil-index')
                            <li class="nk-menu-item"><a href="{{ route('form5.renewalfoodindustrylicense.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">Renewal
                                        Foodindustry License</span></a>
                            </li>
                        @endcan


                        {{-- form 6 --}}
                        @can('ier-index')
                            <li class="nk-menu-item d-none"><a
                                    href="{{ route('form6.establishmentrecommendations.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">Recommend
                                        Establishment
                                    </span></a>
                            </li>
                        @endcan

                        {{-- form 8 --}}
                        @can('ril-index')
                            <li class="nk-menu-item"><a href="{{ route('form8.regardingissuancelicense.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">Regarding
                                        Issuance
                                        License</span></a>
                            </li>
                        @endcan
                    @endif


                    @if (Gate::check('fiir-index') || Gate::check('referenceLab-index'))
                            <!-- <li class="nk-menu-item"><a
                                href="{{ route('form4.recommendationfoodindustryestablishment.index') }}"
                                class="nk-menu-link"><span class="nk-menu-icon"><em
                                        class="icon ni ni-book"></em></span><span class="nk-menu-text">
                                Recommend Industry Establish </span></a>
                        </li> -->


                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Lab Branch</h6>
                        </li>

                        {{-- Form 1 --}}
                        @can('fiir-index')
                            <li class="nk-menu-item"><a
                                    href="{{ route('foodindustryinspectionreport.foodindustryinspectionreport.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">Food Industry
                                        Inspection Report</span></a>
                            </li>
                        @endcan

                        {{-- Form 3 --}}
                        @can('referenceLab-index')
                            <li class="nk-menu-item"><a
                                    href="{{ route('form3.nationalfoodandfeedreferencelaboratory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-icon"><em
                                            class="icon ni ni-book"></em></span><span class="nk-menu-text">Reference
                                        Laboratory</span></a>
                            </li>
                        @endcan
                    @endif

                    @can('analysis-index')
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Law Suits</h6>
                        </li>

                        <li class="nk-menu-item"><a href="{{ route('form10.analysisreport.index') }}"
                                class="nk-menu-link"><span class="nk-menu-icon"><em
                                        class="icon ni ni-book"></em></span><span class="nk-menu-text">Analysis
                                    Report</span></a>
                        </li>
                    @endcan

                </ul>
            </div>
        </div>
    </div>

</div>
