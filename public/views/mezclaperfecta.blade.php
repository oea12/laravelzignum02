@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(5) p {
	background: url(/zignum/public/img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
.dmp {
	pointer-events: none;
}
.dmp img {
	display: block !important;
}
</style>
<section class="contain">
	@include('menu')
	@include('menuleft')
	<div id="cont_ruleta">
		{{$mezcla_text}}
		<div id="ruleta">
			<img id="table_place" src="/zignum/public/img/base04_compania2.png">
			<img id="table_compani" src="/zignum/public/img/base04_compania.png">
			<img id="table_fruit" src="/zignum/public/img/base02_frutas.png">
			<img id="table_battle" src="/zignum/public/img/base01_botellas.png">
			<ul id="place">
			</ul>
			<ul id="people">
			</ul>
			<ul id="fruit">
			</ul>
			<img id="marco" src="/zignum/public/img/Juego_marco-ruleta.png" alt="Ruleta de la mezcla perfecta Zignum" title="Ruleta de la mezcla perfecta Zignum">
			<img id="palanca" src="/zignum/public/img/btn-palanca.png" alt="Gira la ruleta de la mezcla perfecta Zignum" title="Gira la ruleta de la mezcla perfecta Zignum" onclick="ga('send', 'event', 'Mezcla', 'Palanca')">
			<img id="btn_palanca" src="/zignum/public/img/btn_girarruleta.png" alt="boton ruleta de mezcla perfecta Zignum" title="boton ruleta de mezcla perfecta Zignum"  onclick="ga('send', 'event', 'Mezcla', 'Boton/Palanca')">
			<img class="instruc" id="ins_img" src="/zignum/public/img/instrucciones (1).png">
			<img class="instruc" id="ins_exit" src="/zignum/public/img/btn-cerrarinstrucciones.png">
		</div>
	</div>
	<div id="instruction">
	</div>
	<div id="lightbox_mezclas">
		<div id="cont_inf_mezcla">
			<img id="cerrar_resp_mezcla" src="/zignum/public/img/btn_cerrar-resultadoJuego.png">
			<div id="resp_mezcla">
				{{$resultados[0]}}
				<div>
					<a id="cocktail_result" href=""> <img id="cocktail_lightbox" src=""></a>
					<p id="cocktail_txt_lightbox"></p>
				</div>
				<div>
					<p>{{$resultados[1]}}</p>
					<p id="compani_txt_lightbox"></p>
				</div>
				<div>
					<img id="place_lightbox" src="">
					<p id="placetxt_lightbox"></p>
				</div>
			</div>
			<div id="buttons_lightbox">
				<button id="publicar" onclick="ga('send', 'event', 'Mezcla', 'Resultado', 'Facebook')">{{$resultados[2]}}</button>
				<button id="recomendar" onclick="ga('send', 'event', 'Mezcla', 'Resultado', 'Compartir a amigos')">{{$resultados[3]}}</button>
				<button id="volver" onclick="ga('send', 'event', 'Mezcla', 'Resultado', 'Volver a girar')">{{$resultados[4]}}</button>
			</div>
		</div>
	</div>
</section>
<div id="fb-root"></div>
<h1 id="fb-welcome"></h1>
<div id="recomend">
<div id="nota">
	<img id="exit_nota" onClick="exitNota2()" src="/zignum/public/img/btn-cerrarlightbox.jpg">
	<div class="form">
			<p>{{$resultados[5]}}</p>
			<label>{{$resultados[6]}}</label><br>
			<input id="name" type="text"><br>
			<label>{{$resultados[7]}}</label><br>
			<input id="email" type="email"><br>
			<label class="email_error">Tu correo no es valido, verificalo</label><br class="email_error">
			<label>{{$resultados[8]}}</label><br>
			<textarea id="comment" id="comment"></textarea><br>
			<button id="send2" onclick="ga('send', 'event', 'Mezcla', 'Resultado', 'Compartir a amigos', 'Enviar')">{{$resultados[9]}}</button>	
			<p>* {{$menu[27]}}</p>
		</div>
</div>
</div>


@stop