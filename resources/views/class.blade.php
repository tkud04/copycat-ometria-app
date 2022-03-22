@extends('layout')

@section('title',$c['name'])

@section('content')
<?php
$eu = url('edit-class')."?xf=".$c['id'];
$ru = url('remove-class')."?xf=".$c['id'];
?>

@include('banner-2',['class' => "terms", 'title' => $c['name']])
<section class="class-area">
<div class="container">
<div class="row">
@if($user->role == "teacher")
<div class="col-lg-12 mb-5">
        <h2 class="text-info">Quick Links</h2>
        <div class="row">
            <div class="col-md-12"><p>Edit information about this class <a href="{{$eu}}" class="btn btn-info">Edit class</a></p></div>
            <div class="col-md-12"><p>Remove this class from MySchool <span class="text-danger">WARNING! This cannot be undone</span> <a href="{{$ru}}" class="btn btn-danger">Remove class</a></p></div>
        </div>      
</div>
@endif
<div class="col-lg-12 col-md-12">
 <h2 class="text-primary">Subjects <a href="{{url('new-subject')}}" class="btn btn-primary">Add new subject</a></h2>
 <hr>
</div>
<?php
if(count($c['subjects']) > 0)
{
    foreach($c['subjects'] as $s)
    {
        $su = url('subject')."?xf=".$s['id'];
?>
<div class="col-lg-4 col-md-6" onclick="window.location='{{$su}}';">
<div class="single-ragular-course">
<div class="course-img">
<img src="assets/images/courses/img3.png" alt="ragular">
<h2>{{$s['name']}}</h2>
</div>
<div class="course-content">
<p>
{{$s['description']}}
</p>
<a href="{{$su}}" class="border-btn">Read More</a>
</div>
</div>
</div>
<?php
}
}
else
{
?>
<div class="col-lg-12 col-md-12">
 <p class="text-danger">No subjects found.</p>
</div>
<?php
}
?>

<div class="col-lg-12 col-md-12">
@if($user->role == "teacher")
 <h2 class="text-primary">Students </h2>
 <hr>
<div class="home-course-slider owl-carousel owl-theme">

<?php
if(count($c['students']) > 0)
{
    foreach($c['students'] as $s)
    {
       // $cu = url('class')."?xf=".$c['id'];
?>
<div class="single-home-special-course">
<div class="course-img">
<img src="assets/images/img6.png" alt="Student">
<div class="course-content">
<h2>{{$s['fname']." ".$s['lname']}}</h2>
<p>
Class member
</p>
<a href="javascript:void(0)" class="btn btn-danger" onclick="removeStudent({{$c['id']}},{{$s['id']}});">Remove student</a>
</div>
</div>
</div>
<?php
    }
}
?>
</div>
@endif
</div>

</div>
</div>
</section>
@stop