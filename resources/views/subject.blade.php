@extends('layout')

@section('title',$s['name'])

@section('content')
<?php
$eu = url('edit-subject')."?xf=".$s['id'];
$ru = url('remove-subject')."?xf=".$s['id'];
?>

@include('banner-2',['class' => "terms", 'title' => $s['name']])
<section class="class-area">
<div class="container">
<div class="row">
@if($user->role == "teacher")
<div class="col-lg-12 mb-5">
        <h2 class="text-info">Quick Links</h2>
        <div class="row">
            <div class="col-md-12"><p>Edit information about this subject <a href="{{$eu}}" class="btn btn-info">Edit subject</a></p></div>
            <div class="col-md-12"><p>Remove this subject from class <span class="text-danger">WARNING! This cannot be undone</span> <a href="{{$ru}}" class="btn btn-danger">Remove subject</a></p></div>
        </div>      
</div>
@endif
<div class="col-lg-12 col-md-12">
 <h2 class="text-primary">Topics <a href="{{url('new-topic')}}" class="btn btn-primary">Add new topic</a></h2>
 <hr>
</div>
<?php
if(count($s['topics']) > 0)
{
    foreach($s['topics'] as $t)
    {
        $su = url('topic')."?xf=".$t['id'];
?>
<div class="col-lg-4 col-md-6" onclick="window.location='{{$su}}';">
<div class="single-ragular-course">
<div class="course-img">
<img src="assets/images/courses/img3.png" alt="ragular">
<h2>{{$t['name']}}</h2>
</div>
<div class="course-content">
<p>
{!! $t['content'] !!}
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
 <p class="text-danger">No topics found.</p>
</div>
<?php
}
?>

</div>
</div>
</section>
@stop