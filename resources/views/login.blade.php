@extends('layout')

@section('title',"Sign Up")

@section('content')

@include('banner-2',['class' => "signup", 'title' => "Sign in"])

<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="signup-form">
<h2>Welcome Back!</h2>
<form id="login-form" method="post" action="{{url('login')}}">
    {!! csrf_field() !!}
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" id="login-email" name="id" placeholder="Email address">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" id="login-password" name="pass" class="form-control" placeholder="Password">
</div>
</div>
<div class="col-lg-12">
<a href="javascript:void(0)" id="login-submit" class="box-btn">
Sign In
</a>
</div>
<span class="already">New to MySchool? <a href="{{url('signup')}}">Sign Up</a></span>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<div class="sign-up-img">
<img src="assets/images/signup.svg" alt="singup">
</div>
</div>
</div>
</div>
</section>

@stop