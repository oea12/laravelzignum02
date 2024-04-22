@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<style type="text/css">
.movil ul li:nth-child(11) p {
	background: url(/zignum/public/img/basesubmenu_on.jpg);	
	background-size: cover;
	background-position: top;
	background-repeat: no-repeat;
}
#cocteles, #cocteles a img:nth-child(2), #reposado, #reposado a img:nth-child(2) {
	display: block !important;
	pointer-events: none;
}
</style>
<section class="contain">
	@include('menu')
	@include('menucocteles')
	<div class="gallery">
		<?php
		  $coc_lan = "";
			if($_COOKIE['lengua']==='en'){
				$coc_lan = '<p class="title">ZIGNUM REPOSADO <span>COCKTAILS</span></p>';
			}else{
				$coc_lan='<p class="title"><span>COCTELES</span> ZIGNUM REPOSADO</p>';
			}
		?>
		{{$coc_lan}}
		@if (count($cocktail) >= 1)
		<div id="carrusel">
			<ul id="carrusel_img">
				@foreach ($cocktail as $cocktails)
		    		<li>
		    		<img src="/zignum/public/img/coctel/{{ $cocktails->cocktailimage }}" alt="Cocteles Zignum Reposado" title="Zignum Reposado Mezcal">
		    		</li>
				@endforeach
			</ul>
		    		<!-- <img onclick="video('{{ $cocktails->video_mp4 }}', '{{ $cocktails->video_ogg }}', '{{ $cocktails->web }}')" src="img/coctel/{{ $cocktails->cocktailimage }}" alt="Cocteles Zignum Reposado" title="Zignum Reposado Mezcal"> -->
			<ul id="carrusel_desc">
				@foreach ($cocktail as $cocktails)
				<?php
					if($_COOKIE['lengua']==='en'){
							$cocktails=\Thor\Models\CocktailText::find($cocktails->id);
						}
				?>
		    		<li>
		    			<div>
		    				<?php 
			    				$cadena = $cocktails->name;
									$patrón = '/ /';
									$sustitución = '<br>';
									echo "<p>".preg_replace($patrón, $sustitución, $cadena,1)."</p>"; 
								?>
		    				<ul>
		    					<?php
		    					$instructions = str_replace("(", "<br>(", $cocktails->instructions);
		    					$instructions = preg_split('/((\r(?!\n))|((?<!\r)\n)|(\r\n))/', $instructions);
		    					$vacio = array(" ","\n","");
		    					$instructions =array_diff($instructions,$vacio); 
		    					?>
		    					@foreach ($instructions as $recipe)
		    						<li>
		    							{{$recipe}}
		    						</li>
		    					@endforeach
		    				</ul>
		    			</div>
		    		</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
	@if (count($cocktail) >= 1)
	<div id="carrusel_selector" class="selector_repos">
		<ul>
			@foreach ($cocktail as $cocktails)
				<?php
		   			$coc = "";
						if($_COOKIE['lengua']==='en'){
							$coc=\Thor\Models\CocktailText::find($cocktails->id);
						}else{
							$coc = $cocktails->name;
						}
					?>
					<li onclick="ga('send', 'event', 'Cocteles', 'Reposado', '{{$cocktails->name}}')" data-src="/zignum/public/img/img_particle/spark" data-style="snow" data-src-no="3" class="sparkling" >
		   		<!--li class="apuntador"-->
		   		<img src="/zignum/public/img/coctel/icon/{{ $cocktails->cocktailicon }}" alt="{{isset($alt)?$alt:'Cocteles Zignum Reposado'}}" title="{{isset($title)?$title:'Zignum Reposado Mezcal'}}">
		   		</li>
			@endforeach
		</ul>
	</div>
	@endif
</section>
<section class="lbox" id="lightbox_video">
	<img onclick="exit_video()" src="/zignum/public/img/btn-cerrarlightbox.jpg">
	<div></div>
</section>
@stop