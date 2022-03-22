@extends('layout')

@section('title',"Add New Topic")

@section('content')
<?php
$pu = url('profile');
?>

@include('banner-2',['class' => "signup", 'title' => "Add New Topic"])
<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="signup-form">
<form id="signup-form" method="post" action="{{url('new-topic')}}">
    {!! csrf_field() !!}
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control"  name="name" placeholder="Topic name">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select class="form-control" name="subject_id">
    <option value="none">Select subject</option>
    <?php
     foreach($subjects as $s)
     {
    ?>
    <option value="{{$s['id']}}">{{$s['name']}}</option>
    <?php
     }
    ?>
</select>
</div>

</div>
<div class="col-lg-12">
<div class="form-group">
<select class="form-control" name="type">
    <option value="none">Select type</option>
    <option value="html">HTML</option>
    <option value="powerpoint">PowerPoint</option>
</select>
</div>

</div>
<div class="col-lg-12">
<div class="form-group">
<textarea class="form-control" name="content" rows="15" placeholder="Content"></textarea>
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