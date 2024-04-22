@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(8) p {
	background: url(../img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<div id="back_gallery">
	    <img src="/zignum/public/img/btn-regresar0.png">
	    <img src="/zignum/public/img/btn-regresar1.png">
    </div>
	<section class="cont_all">
		{{$galeria_text_title}}
		
		<div id="albums">
			{{$galeria_text_desc}}
			
			<div  class="list">
				<img id="up" src="/zignum/public/img/flecha-galeria.png">
				<ul>
				</ul>
				<img id="down" src="/zignum/public/img/flecha-galeria.png">
			</div>
		</div>	
		<div id="photos">
			<p id="subtitle"><span></span></p>
			<p id="desc_album"></p>
			<img id="up_img" src="/zignum/public/img/flecha-galeria.png">
			<ul>
			</ul>
			<img id="down_img" src="/zignum/public/img/flecha-galeria.png">
		</div>
	</section>
</section>
<section id="photos_lightbox">
	<img src="">
	<img src="/zignum/public/img/btn-cerrarlightbox.jpg">
</section>
@stop