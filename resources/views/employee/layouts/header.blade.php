<div class="nk-header nk-header-fixed">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <nav class="nk-header-menu nk-navbar">
            <a href="#" class="logo-link">
                <div class="logo-wrap">
                    <!-- <img src="assets/images/logo/logo1.png"> -->
                    <h2 class="nk-block-title p-2 text-uppercase text-uppercase">Welcome, {{ auth()->user()->name }}</h2></span>
                </div>
            </a>
            </nav>

            <div class="nk-header-tools">
                <ul class="nk-quick-nav ms-2">
                <div class="form-group">
                                    <div class="form-control-wrap"> <select class="form-select changeLang " id="exampleFormSelect1" aria-label="Default select example">
                                            <option value="ne" {{ session()->get('locale') == 'ne' ? 'selected' : '' }}>Nepali
                                            </option>
                                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                                            </option>
                                        </select> </div>
                                </div>
                    <li class="dropdown"><a href="#" data-bs-toggle="dropdown">
                            <div class="d-sm-none">
                                <div class="media media-md media-circle"><img src="{{ asset('assets/images/avatar/a.jpg') }}" alt="" class="img-thumbnail"></div>
                            </div>
                            <div class="d-none d-sm-block">
                                <div class="media media-circle"><img src="{{ asset('assets/images/avatar/a.jpg') }}" alt="" class="img-thumbnail"></div>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-md">
                            <div class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light">
                                <div class="media-group">
                                    <div class="media media-xl media-middle media-circle"><img
                                            src="{{ asset('assets/images/avatar/a.jpg') }}" alt=""
                                            class="img-thumbnail"></div>
                                    <div class="media-text">
                                        <div class="lead-text">{{ auth()->user()->name }}</div><span class="sub-text">{{ auth()->user()->user_type }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light">
                                <ul class="link-list">
                                    <li><a href="profile.html"><em class="icon ni ni-user"></em> <span>My
                                                Profile</span></a></li>
                                    <li><a href="profile-edit.html"><em class="icon ni ni-setting-alt"></em>
                                            <span>Account Settings</span></a></li>
                                    <li><a href="profile-edit.html"><em class="icon ni ni-menu-circled"></em>
                                            <span>Dashboard Widgets</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-content dropdown-content-x-lg py-3">
                                <ul class="link-list">
                                    <li><a href="{{ route('logout') }}"><em class="icon ni ni-signout"></em> <span>Log
                                                Out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>