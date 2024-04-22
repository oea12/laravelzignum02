@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(4) p {
	background: url(/zignum/public/img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<section id="cont_left_vine">
		<div id="fade_vine">
			<img src="/zignum/public/img/vine_transparente.png">
			<a id="vine_video" target="_blank" href="" onclick="ga('send', 'event', 'Lo mas nuevo', 'Link Vine')"><div id="vine_thumbnail"></div></a>
		</div>
		<!-- <a href="/mezclaperfecta" onclick="ga('send', 'event', 'Lo mas nuevo', 'Mezcla Perfecta')">
			<img id="link_mezcla" src="{{$menu[24]}}" alt="Descubre tu mezcla perfecta Zignum">
			<img id="link_mezcla_mov" src="/zignum/public/img/btn_descubremovil.png" alt="Descubre tu mezcla perfecta Zignum">
		</a> -->
	</section>
	<section id="carrusel_vine">
		<ul class="bjqs">
		</ul>
	</section>
</section>
@stop