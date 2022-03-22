@extends('layout')

@section('title',$t['name'])

@section('content')
<?php
$pu = url('profile');
?>

@include('banner-2',['class' => "signup", 'title' => $t['name']])
<section class="signup-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="signup-form">
<form id="signup-form" method="post" action="{{url('edit-topic')}}">
    {!! csrf_field() !!}
    <input type="hidden" name="xf" value="{{$t['id']}}">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" value="{{$t['name']}}" name="name" placeholder="Topic name">
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select class="form-control" name="subject_id">
    <option value="none">Select subject</option>
    <?php
     $ss = ""; $types = [
         'html' => "HTML",
         'powerpoint' => "PowerPoint"
     ];
     foreach($subjects as $s)
     {
        if($s['id'] == $t['subject_id']) $ss = " selected='selected'";
    ?>
    <option value="{{$s['id']}}"{{$ss}}>{{$s['name']}}</option>
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
    <?php
      foreach($types as $k => $v)
      {
         if($k == $t['type']) $ss = " selected='selected'";
    ?>
     <option value="{{$k}}"{{$ss}}>{{$v}}</option>
     <?php
      }
     ?>
</select>
</div>

</div>
<div class="col-lg-12">
<div class="form-group">
<textarea class="form-control" name="content" rows="15" placeholder="Content">
    {!! $t['content'] !!}
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