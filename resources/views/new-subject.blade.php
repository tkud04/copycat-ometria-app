@extends('layout')

@section('title',"Add New Subject")

@section('content')
<?php
$pu = url('profile');
?>
 
@include('banner-2',['class' => "signup", 'title' => "Add New Subject"])
<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="signup-form">
<form id="signup-form" method="post" action="{{url('new-subject')}}">
    {!! csrf_field() !!}
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12"> 
<div class="form-group">
<input type="text" class="form-control"  name="name" placeholder="Subject name">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select class="form-control" name="class_id">
    <option value="none">Select class</option>
    <?php
     foreach($classes as $c)
     {
    ?>
    <option value="{{$c['id']}}">{{$c['name']}}</option>
    <?php
     }
    ?>
</select>
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