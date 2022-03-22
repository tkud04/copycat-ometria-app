@extends('layout')

@section('title',"Add New Class")

@section('content')
<?php
$pu = url('profile');
?>

@include('banner-2',['class' => "signup", 'title' => "Add New Class"])
<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="signup-form">
<h2>Welcome Back!</h2>
<form id="signup-form" method="post" action="{{url('new-class')}}">
    {!! csrf_field() !!}
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control"  name="name" placeholder="Class name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="img" placeholder="Image URL">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea class="form-control" name="description" rows="15" placeholder="Description"></textarea>
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
</div>
</div>
</section>
@stop