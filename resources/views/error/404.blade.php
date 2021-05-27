@extends('layouts.Font.App')
@section('title')
404 page not found
@endsection
@section('content')
  <div class="wrapper">
    <div class="container pt-5">
        <div class="row no-gutters">
            <div class="col-sm-12 text-center">
                <div class="iq-error position-relative mt-5">
                    <img src=" {!! asset('FontAssets') !!}/images/error/01.png" class="img-fluid iq-error-img" alt="">
                    <h1 class="text-in-box">404</h1>
                    <h2 class="mb-0">Oops! This Page is Not Found.</h2>
                    <p>The requested page dose not exist.</p>
                    <a class="btn btn-primary mt-3" href="{!! route('home') !!}"><i class="ri-home-4-line"></i>Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
