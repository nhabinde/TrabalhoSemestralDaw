<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IMEST - login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url({{asset('assets/images/others/login-3.png')}})">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
{{--                                    <div class="d-flex align-items-center justify-content-between m-b-30">--}}
                                    <div class="text-center">
{{--                                        <img style="max-width: 100px" class="img-fluid" alt="" src="/img/logo.png">--}}
                                        <h2 class="m-b-0">Login</h2>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">{{ __('E-Mail Address') }}</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror"  value="{{ old('email') }}" id="userName" placeholder="Username" required autocomplete="email" autofocus>
                                                <br>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">{{ __('Password') }}</label>
                                            <a class="float-right font-size-13 text-muted" href="">Esqueceu a senha?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
{{--                                                <span class="font-size-13 text-muted">--}}
{{--                                                    Don't have an account?--}}
{{--                                                    <a class="small" href=""> Signup</a>--}}
{{--                                                </span>--}}
                                                <button class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
{{--                    <span class="">?? {{date('Y')}} AAi desenvolvido por <a target="_blank" href="https://rumuka.co.mz">Rumuka, Inc</a> </span>--}}
{{--                    <ul class="list-inline">--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a class="text-dark text-link" href="">Legal</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                            <a class="text-dark text-link" href="">Privacy</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>
