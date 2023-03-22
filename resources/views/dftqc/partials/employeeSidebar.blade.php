<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="#" class="logo-link">
                <div class="logo-wrap">
                    <!-- <img src="assets/images/logo/logo1.png"> -->
                    <img src="{{ url('assets/images/logo/logo1.png') }}" alt="Image" />
                </div>
            </a>
            <div class="nk-compact-toggle me-n1"><button class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em class="icon off ni ni-chevrons-left"></em><em class="icon on ni ni-chevrons-right"></em></button>
            </div>
            <div class="nk-sidebar-toggle me-n1"><button class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle"><em class="icon ni ni-arrow-left"></em></button></div>
        </div>
    </div>

    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                <!-- Applicants for licensing -->
                   
                <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                            <span class="nk-menu-text">Applicants for licensing</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}" class="nk-menu-link"><span class="nk-menu-text">Industry Establish Recomendation</span></a></li>

                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}" class="nk-menu-link"><span class="nk-menu-text">New License Issue</span></a></li>

                            <li class="nk-menu-item"><a href="{{ route('form2.licensingfoodindustry.index') }}" class="nk-menu-link"><span class="nk-menu-text">Licensing Food
                                        Industry</span></a>
                            </li>
                            <!-- form 5 according to paper -->
                            <li class="nk-menu-item"><a href="{{ route('form9.licensinginspectionbranch.index') }}" class="nk-menu-link"><span class="nk-menu-text">License Inspection
                                        Branch</span></a>
                            </li>

                            <li class="nk-menu-item"><a href="{{ route('form5.renewalfoodindustrylicense.index') }}" class="nk-menu-link"><span class="nk-menu-text">Renewal
                                        Foodindustry License</span></a>
                            </li>

                            <li class="nk-menu-item"><a href="{{ route('form8.regardingissuancelicense.index') }}" class="nk-menu-link"><span class="nk-menu-text">Regarding Issuance
                                        License</span></a>
                            </li>
                        </ul>

                    </li>
                    <!-- Applicants for licensing -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                            <span class="nk-menu-text">Applicants for Lab Branch</span></a>
                        <ul class="nk-menu-sub">

                        <li class="nk-menu-item"><a
                            href="{{ route('foodindustryinspectionreport.foodindustryinspectionreport.index') }}"class="nk-menu-link">
                            <span class="nk-menu-text">Food Industry Inspection Report</span></a>
                    </li>
                    <li class="nk-menu-item"><a
                            href="{{ route('form3.nationalfoodandfeedreferencelaboratory.index') }}"
                            class="nk-menu-link"><span class="nk-menu-text">Food and
                                Feed Laboratory</span></a>
                    </li>
                        </ul>

                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>