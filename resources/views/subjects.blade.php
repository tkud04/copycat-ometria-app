@extends('layout')

@section('title',"{$class} > Subjects")

@section('content')


@include('banner-2',['class' => "terms", 'title' => "{$class} > Subjects"])
<section class="home-ragular-course pb-100">
<div class="container-fluid">
<div class="section-tittle text-center">
<h2>Subjects<a href="{{url('new-subject')}}" class="btn btn-primary">Add new subject</a></h2>
</div>
<div class="home-course-slider owl-carousel owl-theme">

<?php
if(count($subjects) > 0)
{
    foreach($subjects as $s)
    {
        $su = url('subject')."?xf=".$c['id'];
?>
<div class="single-home-special-course" onclick="window.location='{{$su}}';">
<div class="course-img">
<img src="asstes/img/courses/img3.png" alt="subject">
<div class="course-content">
<h2>{{$s['name']}}</h2>
<p>
{{$s['description']}}
</p>
<a href="{{$su}}" class="box-btn">Read More</a>
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