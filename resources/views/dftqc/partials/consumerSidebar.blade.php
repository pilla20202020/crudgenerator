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
                            <span class="nk-menu-text">My Application forms</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}" class="nk-menu-link"><span class="nk-menu-text">Industry Establish Recomendation</span></a></li>

                            <li class="nk-menu-item"><a href="{{ route('settings.organizationsettings.index') }}" class="nk-menu-link"><span class="nk-menu-text">New License Issue</span></a></li>
                        </ul>

                    </li>
                    <!-- Applicants for licensing -->

                </ul>
            </div>
        </div>
    </div>

</div>