@extends('layout')

@section('title',"Profile")

@section('content')

@include('banner-2',['class' => "signup", 'title' => "Profile"])

<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="signup-form">
<h2>Welcome Back!</h2>
<form id="signup-form" method="post" action="{{url('profile')}}">
    {!! csrf_field() !!}
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control"  name="fname" placeholder="First name" value="{{$user->fname}}">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="lname" placeholder="Last name" value="{{$user->lname}}">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control"  name="email" placeholder="Email address" value="{{$user->email}}">
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="box-btn">
Submit
</a>
</div>
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