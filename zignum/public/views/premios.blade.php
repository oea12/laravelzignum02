@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(7) p {
	background: url(/zignum/public/img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<div id="cont_prem">
		<p>{{$premios[0]}}</p>
		{{$premios[1]}}
		<div id="links">
			<p id="silv" data-src="/zignum/public/img/img_particle/spark" data-style="snow" data-src-no="3" class="sparkling list selected" onclick="ga('send', 'event', 'Premios', 'Zignum Silver')">ZIGNUM SILVER</p>
			<p id="ani" data-src="/zignum/public/img/img_particle/spark" data-style="snow" data-src-no="3" class="sparkling list" onclick="ga('send', 'event', 'Premios', 'Zignum Añejo')">ZIGNUM AÑEJO</p>
			<p id="rep" data-src="/zignum/public/img/img_particle/spark" data-style="snow" data-src-no="3" class="sparkling list" onclick="ga('send', 'event', 'Premios', 'Zignum Reposado')">ZIGNUM REPOSADO</p>
		</div>
		<div id="lis_prem">
			{{$premios[2]}}
			{{$premios[3]}}
			{{$premios[4]}}
		</div>
	</div>
</section>
@stop