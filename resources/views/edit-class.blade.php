@extends('layout')

@section('title',$c['name'])

@section('content')
<?php
$pu = url('profile');
?>

@include('banner-2',['class' => "signup", 'title' => $c['name']])
<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
    <a href="{{url('classes')}}" class="btn btn-info">Back to classes</a>
</div>
<div class="col-lg-12">
<div class="signup-form">
<h2>Edit information about this class</h2>
<form id="class-form" method="post" action="{{url('edit-class')}}">
    {!! csrf_field() !!}
    <input type="hidden" name="xf" value="{{$c['id']}}">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control"  name="name" value="{{$c['name']}}" placeholder="Class name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="img" value="{{$c['img']}}" placeholder="Image URL">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea class="form-control" name="description" rows="15" placeholder="Description">
{!! $c['description'] !!}
</textarea>
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