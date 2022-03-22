@extends('layout')

@section('title',"Dashboard")

@section('content')
<?php
$pu = url('profile');
?>

@include('banner-2',['class' => "terms", 'title' => "Teacher Dashboard"])
<section class="service-area"> 
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-6" onclick="window.location='{{$pu}}';">

<div class="single-service text-center">
<div class="service-icon">
<i class="flaticon-account"></i>
</div>
<div class="service-content">
<h2>Profile</h2>
<p>{{$user->fname." ".$user->lname}}</p>
<p>Role: {{$user->role}}<p>
</div>
</div>

</div>
<div class="col-lg-6 col-sm-6" onclick="window.location='subjects';">
<div class="single-service text-center">
<div class="service-icon">
<i class="flaticon-pinn"></i>
</div>
<div class="service-content">
<h2>Classes</h2>
<p>{{count($classes)}} classes available</p>
</div>
</div>
</div>
</div>
<div class="row mt-5">
    <div class="col-lg-12">
        <h2 class="text-info">Quick Links</h2>
        <div class="row">
            <div class="col-md-6"><p>Enroll student to a class <a href="{{url('add-student')}}" class="btn btn-info">Add student</a></p></div>
            <div class="col-md-6"><p>Add a new class to MySchool <a href="{{url('new-class')}}" class="btn btn-info">Add class</a></p></div>
            <div class="col-md-6"><p>Add a new subject to a class <a href="{{url('new-subject')}}" class="btn btn-info">Add subject</a></p></div>
            <div class="col-md-6"><p>Add a new topic to a subject <a href="{{url('new-topic')}}" class="btn btn-info">Add subject</a></p></div>
        </div>
       
    </div>
</div>
</div>
</section>

@stop