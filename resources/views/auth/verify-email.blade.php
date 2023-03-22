    
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


                                    <div class="mb-4">
                                     {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                    </div>

                                         @if (session('status') == 'verification-link-sent')
                                     <div class="mb-4">
                                      {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                     </div>
                                        @endif

                                             <div class="">
                          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
                      <div>
                <button class="btn btn-outline-primary">
                    {{ __('Resend Verification Email') }}
                </button>
                    </div>
                         </form>
                             <form method="POST" action="{{ route('logout') }}">
            @csrf

                         <button type="submit" class="btn btn-primary d-none">
                {{ __('Log Out') }}
                              </button>
                            </form>
                                      </div>



                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="card-body is-theme ps-lg-4 pt-5 pt-lg-0">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="h1 title mb-3">Welcome back to <br> {{ env('APP_NAME') }}</div>
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

