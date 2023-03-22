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
                                            <h3 class="nk-block-title mb-1">Register to DFTQC Application</h3>
                                            <p class="small">Please sign-up to get account
                                            </p>
                                        </div>
                                    </div>
                                    <!-- @if ($errors->any())
                                    {{ implode('', $errors->all('<div>:message</div>')) }}
                                    @endif -->
                                    <form method="POST" action="{{ route('post.register') }}">
                                        @csrf
                                        <div class="row gy-3">
                                            <div class="col-12">
                                                <div class="form-group"><label for="username" class="form-label">Name
                                                    </label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                                                    </div>
                                                    @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong class="text-danger">
                                                        {{ $errors->first('name') }}
                                                    </strong>
                                                </span>
                                            @endif
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group"><label for="username" class="form-label">Phone
                                                    </label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter Your Phone">
                                                    </div>
                                                    @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong class="text-danger">
                                                        {{ $errors->first('phone') }}
                                                    </strong>
                                                </span>
                                            @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"><label for="username" class="form-label">Email
                                                    </label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                                    </div>
                                                    @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong class="text-danger">
                                                        {{ $errors->first('email') }}
                                                    </strong>
                                                </span>
                                            @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"><label for="password" class="form-label">Password</label>
                                                    <div class="form-control-wrap">
                                                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                                                    </div>
                                                    @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong class="text-danger">
                                                        {{ $errors->first('password') }}
                                                    </strong>
                                                </span>
                                            @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-check-sm">
                                                    <input class="form-check-input" type="checkbox" value="1" id="iAgree" name="iAgree"><label class="form-check-label" for="iAgree"> I agree to privacy policy & terms </label>
                                                </div>
                                   
                                                @if ($errors->has('iAgree'))
                                                <span class="help-block">
                                                    <strong class="text-danger">
                                                        {{ $errors->first('iAgree') }}
                                                    </strong>
                                                </span>
                                            @endif
                                           

                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid"><button class="btn btn-primary" type="submit">Sign Up
                                                    </button></div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <p class="small">Already have an account? <a href="{{route('login')}}">Login</a></p>
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