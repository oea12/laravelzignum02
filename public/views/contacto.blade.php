@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(15) p {
	background: url(/zignum/public/img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<div class="contacto">
		<div id="form">	
			<p>{{$contact[0]}}</p><br>
			<label>{{$contact[1]}}</label><br>
			<input id="name" type="text"><br>
			<label>{{$contact[2]}}</label><br>
			<input id="email" type="email"><br>
			<label>{{$contact[3]}}</label><br>
			<textarea id="comment" id="comment"></textarea><br>
			<img class="somb" src="/zignum/public/img/btnover-enviar.jpg">
			<button id="send">{{$contact[4]}}</button>
			<img class="somb" src="/zignum/public/img/btnover-enviar.jpg">
			<button id="borrar">{{$contact[5]}}</button>
		</div>
	</div>
</section>
<section id="note">
	<div>
		<img id="exit_note" onClick="exitNote()" src="/zignum/public/img/btn-cerrarlightbox.jpg">
		{{$contact[6]}}
	</div>
</section>

<section id="note2">
	<div>
		<img id="exit_note2" onClick="exitNote2()" src="/zignum/public/img/btn-cerrarlightbox.jpg">
		{{$contact[7]}}
	</div>
</section>
@stop