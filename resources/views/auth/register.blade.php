<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Merjme - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{!! asset('AuthAssets') !!}/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{!! asset('AuthAssets') !!}/nts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{!! asset('AuthAssets') !!}/nts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{!! asset('AuthAssets') !!}/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{!! asset('AuthAssets') !!}/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{!! asset('AuthAssets') !!}/css/skins/default.css">

</head>
<body>

<!-- Login 7 start -->
<div class="login-7" style="background-color: darkslateblue;">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 bg-img none-992 col-pad-0 align-self-center">
                <div class="info">
                    <div class="btn-section clearfix">
                        <a href="{!! route('login') !!}" class="link-btn active btn-1">Login</a>
                        <div class="clearfix"></div>
                        <a href="{!! route('register') !!}" class="link-btn btn-1 default-bg">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                <div class="form-section">

                    <h3>Create an account</h3>
                    <div class="login-inner-form">
                        <form action="#" method="GET">
                            <div class="form-group form-box">
                                <input class="input-text" id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Full name">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="form-group form-box">
                                <input class="input-text" type="email" id="email" type="email" name="email" :value="old('email')" required placeholder="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box">
                                <input type="password" id="password"
                                                class="input-text"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        I agree to the <a href="#">terms of service</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Register</button>
                            </div>
                            <p class="text">Already a member?<a href="{!! route('login') !!}"> Login here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 7 end -->

<!-- External JS libraries -->
<script src="{!! asset('AuthAssets') !!}/js/jquery-2.2.0.min.js"></script>
<script src="{!! asset('AuthAssets') !!}/js/popper.min.js"></script>
<script src="{!! asset('AuthAssets') !!}/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->

</body>
</html>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
