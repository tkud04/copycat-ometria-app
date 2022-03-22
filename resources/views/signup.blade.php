@extends('layout')

@section('title',"Sign Up")

@section('content')

@include('banner-2',['class' => "signup", 'title' => "Sign up"])

<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="signup-form">
<h2>Welcome Back!</h2>
<form id="signup-form" method="post" action="{{url('signup')}}">
    {!! csrf_field() !!}
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" id="signup-fname" name="fname" placeholder="First name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" id="signup-lname" name="lname" placeholder="Last name">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select class="form-control" name="role" id="signup-role">
    <option value="none">Select role</option>
    <option value="student">Student</option>
    <option value="teacher">Teacher</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" id="signup-email" name="email" placeholder="Email address">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" name="password" id="signup-password" class="form-control" placeholder="Password">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" name="password_confirmation" id="signup-password2" class="form-control" placeholder="Confirm password">
</div>
</div>
<div class="col-lg-12">
<a href="javascript:void(0)" id="signup-submit" class="box-btn">
Sign up
</a>
</div>
<span class="already">Existing user? <a href="{{url('login')}}">Log in</a></span>
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