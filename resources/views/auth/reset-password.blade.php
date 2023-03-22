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
                                            <h1>DFTQC</h1>

                                        </div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title mb-1">Password reset form</h3>
                                            <p class="small">Please enter a new password</p>
                                        </div>
                                    </div>
                                    <!-- @if ($errors->any())
                                    {{ implode('', $errors->all('<div>:message</div>')) }}
                                    @endif -->
                                    <form method="POST" action="{{ route('password.store') }}">
                                        @csrf

                                        <!-- Password Reset Token -->
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                        <!-- Email Address -->
                                        <div class="form-group"><label for="email" class="form-label" :value="__('Email')">Email Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="email" name="email" value="{{old('email', $request->email)}}" required autofocus>
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group"><label for="email" class="form-label" :value="__('Password')">Password</label>
                                                    <div class="form-control-wrap">
                                                        <input type="password" class="form-control" id="password" name="password" required>
                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    </div>
                                        </div>

                                        <!-- Confirm Password -->

                                        <div class="form-group"><label for="password_confirmation" class="form-label" :value="__('Confirm Password')">Confirm Password</label>
                                                    <div class="form-control-wrap">
                                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                        </div>
  

                                        <div class="flex items-center justify-end mt-4">
                                        <div class="col-12">
                                                <div class="d-grid"><button class="btn btn-primary" type="submit">  {{ __('Reset Password') }}    </button></div>
                                            </div>
                                        </div>
                                        
                                    </form>



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