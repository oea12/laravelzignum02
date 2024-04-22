@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(12) p {
	background: url(/zignum/public/img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
#silver, #silver a img:nth-child(2) {
	display: block !important;
	pointer-events: none;
}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<img class="botella_dem" src="/zignum/public/img/botellabig_silver.png" alt="{{isset($alt)?$alt:'Cocteles Zignum Silver'}}" title="{{isset($title)?$title:'Zignum Silver Mezcal'}}">
	<div class="dec_mezcal">
		{{$silver_text}}
	</div>
</section>
@stop