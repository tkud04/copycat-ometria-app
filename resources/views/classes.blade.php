@extends('layout')

@section('title',"Classes")

@section('content')
<?php
$pu = url('profile');
?>

@include('banner-2',['class' => "terms", 'title' => "Classes"])
<section class="home-ragular-course pb-100">
<div class="container-fluid">
<div class="section-tittle text-center">
<h2>Our Regular Classes <a href="{{url('new-class')}}" class="btn btn-primary">Add new class</a></h2>
<p>
A course is a class offered by our school. These courses are usually part of a program leading.
</p>
</div>
<div class="home-course-slider owl-carousel owl-theme">

<?php
if(count($classes) > 0)
{
    foreach($classes as $c)
    {
        $cu = url('class')."?xf=".$c['id'];
?>
<div class="single-home-special-course" onclick="window.location='{{$cu}}';">
<div class="course-img">
<img src="{{$c['img']}}" alt="course">
<div class="course-content">
<h2>{{$c['name']}}</h2>
<p>
{{$c['description']}}
</p>
<a href="{{$cu}}" class="box-btn">Read More</a>
</div>
</div>
</div>
<?php
    }
}
?>
</div>
</div>
</section>
@stop