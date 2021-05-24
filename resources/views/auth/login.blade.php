<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Merjme - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href=" {!! asset('AuthAssets') !!}/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href=" {!! asset('AuthAssets') !!}/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href=" {!! asset('AuthAssets') !!}/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href=" {!! asset('AuthAssets') !!}/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href=" {!! asset('AuthAssets') !!}/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href=" {!! asset('AuthAssets') !!}/css/skins/default.css">

</head>
<body>
<!-- Login 7 start -->
<div class="login-7" style="background-color: darkslateblue;">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 bg-img none-992 align-self-center">
                <div class="info">
                    <div class="btn-section clearfix">
                        <a href="{!! route('login') !!}" class="link-btn active btn-1 default-bg">Login</a>
                        <div class="clearfix"></div>
                        <a href="{!! route('register') !!}" class="link-btn btn-1">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                <div class="form-section">
                    <h3>Sign into your account</h3>
                    <div class="login-inner-form">
                        <form action="{!! route('login') !!}" method="post">
                          @csrf
                            <div class="form-group form-box">
                                <input class="input-text" id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Email">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box">
                                <input class="input-text" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" >
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}">Forgot Password</a>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Login</button>
                            </div>
                            <p class="text">Don't have an account?<a href="{!! route('register') !!}"> Register here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 7 end -->

<!-- External JS libraries -->
<script src="{!! asset('AuthAssets') !!}/assets/js/jquery-2.2.0.min.js"></script>
<script src="{!! asset('AuthAssets') !!}/assets/js/popper.min.js"></script>
<script src="{!! asset('AuthAssets') !!}/assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->

</body>

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logy/main/login-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 14:35:49 GMT -->
</html>


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
