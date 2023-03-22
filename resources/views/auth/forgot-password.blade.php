<!-- Session Status -->
<div class="alert alert-danger print-error-msg d-none"><x-auth-session-status class="mb-4" :status="session('status')" /></div>

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
                                            <div class="nk-block-title mb-1">
                                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-input-label for="email" :value="__('Enter your email')" />
                                            <input type="text" class="form-control mt-2" id="email" name="email" :value="old('email')" placeholder="Enter Email"  required autofocus >
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <button type="submit" class="btn btn-outline-danger mt-2">
                                            {{ __('Email Password Reset Link') }}
                                        </button>
                                        <a class="btn btn-outline-primary mt-2" href="{{route('login')}}">Login</a>
                                    </form>
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