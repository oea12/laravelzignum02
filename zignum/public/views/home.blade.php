@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<section class="contain">
	@include('menu')
	@include('menuleft')
	<div id="cont_home">
		<img id="logo_center" src="{{$menu[23]}}">
		{{$home_text}}
		  <div class="dmp">
		    <a href="/mezclaperfecta">
		      <img src="/zignum/public/img/BTN-tu-mezcla-Off.png">
		      <img src="/zignum/public/img/BTN-tu-mezcla-ON.png">
		      <style type="text/css">
				.nav_left .dmp {
					display: none !important;
				}
		      </style>
		    </a>
		  </div>
	</div>
	<img id="botellas_home" src="/zignum/public/img/botellas-home.png"  alt="{{isset($alt)?$alt:'Zignum Mezcal'}}" title="{{isset($title)?$title:'Zignum Mezcal'}}">
</section>
@stop
