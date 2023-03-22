@include('dftqc/partials/headerincludes')

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-wrap align-items-center justify-content-center has-mask">
                <div class="mask mask-3"></div>
                <div class="container p-2 p-sm-4">
                    <div class="row flex-lg-row-reverse">
                        <div class="col-lg-5">
                            <div class="card card-gutter-lg rounded-4 card-auth">
                                <div class="card-body">
                                    <div class="brand-logo mb-4">
                                        <div class="logo-wraps">
                                            <img src="assets/images/logo/logo2.png">

                                        </div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title mb-1">Register to DFTQC Application</h3>
                                            <p class="small">Please sign-up to get account
                                            </p>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                        {{ implode('', $errors->all('<div>:message</div>')) }}
                                    @endif
                                    Dear {{$user->name}}, We have send verification link to your email please check
                                    <p class="small">Go back to login page <a href="{{route('login')}}">Login</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="card-body is-theme ps-lg-4 pt-5 pt-lg-0">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="h1 title mb-3">Welcome to <br> {{ env('APP_NAME') }}</div>
                                        <p>{{ env('APP_DESC') }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('dftqc/partials/footerincludes')
