@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
	.movil ul li:nth-child(13) p {
		background: url(/zignum/public/img/basesubmenu_on.jpg);	
		background-size: cover;
		background-position: top;
		background-repeat: no-repeat;
	}
	#reposado, #reposado a img:nth-child(2) {
		display: block !important;
		pointer-events: none;
	}
	.dec_mezcal p:first-child span {
		color: #ab7f18;
	}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<img class="botella_dem" src="/zignum/public/img/botellabig_reposado.png" alt="{{isset($alt)?$alt:'Cocteles Zignum Reposado'}}" title="{{isset($title)?$title:'Zignum Reposado Mezcal'}}">
	<div class="dec_mezcal">
		{{$reposado_text}}
	</div>
</section>
@stop