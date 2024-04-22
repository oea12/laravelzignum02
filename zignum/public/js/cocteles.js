var actual = 0, actual_1 = -1, actual_2 = -2, actual_3 = -3;

$("#carrusel_selector ul li").each(function(index,elem){
//Click a algun elemento del selector para mostrar el elemento del carrusel
	$(elem).click(function(){
//Caso en el que la resolucion de la pantalla sea mayor a 800px
		if(ancho > 800){
//verifica si el elemento al que se le dio click es diferente al que esta en ese momento
			if(actual != index){
				var time = (actual - index < 0 ? (actual - index) * -500 : (actual - index) * 500);
//Remueve al clase que hace que se muestre el puntito bajo el selector de los elementos
				$("#carrusel_selector ul li").removeClass("apuntador").css({"pointer-events":"none"});
//Caso en el que se mueve hacia a la izquierda el carrusel      (index    <-----    actual)
				if(actual > index){
					$($("#carrusel_desc > li")[actual]).animate({opacity: 0}, 600)
					$($("#carrusel_desc > li")[actual]).delay(650).css({display: "none"});
					$("#carrusel_desc").animate({width:"0"},600);
					setTimeout(function(){
//Se manda llamar la funcion que genera el movimiento de derecha a izquierda
						move_right(500, index);
					}, 700);
				}else{
//Caso en el que se mueve hacia a la derecha el carrusel      (index    ---->    actual)
					$($("#carrusel_desc > li")[actual]).animate({opacity: 0}, 600)
					$($("#carrusel_desc > li")[actual]).delay(650).css({display: "none"});
					$("#carrusel_desc").animate({width:"0"},600);
					setTimeout(function(){
//Se manda llamar la funcion que genera el movimiento de izquierda a derecha
						move_left(500, index);
					}, 700);
				}
			}
		}else{
//Caso en el que la resolucion de la pantalla sea mayor a 800px
//verifica si el elemento al que se le dio click es diferente al que esta en ese momento
			if(actual != index){
//Remueve al clase que hace que se muestre el puntito bajo el selector de los elementos y desactiva los click sobre los elementos del selector
				$("#carrusel_selector ul li").removeClass("apuntador").css({"pointer-events":"none"});
				$($("#carrusel_desc > li")[actual]).animate({opacity: 0}, 600)
				$($("#carrusel_desc > li")[actual]).delay(650).css({display: "none"});
//Cierra la descripcion del elemento
				$("#carrusel_desc").animate({width:"0"},600);
				var timer, longt = (index * 561) * -1;

				setTimeout(function(){
//Caso en el que se mueve hacia a la izquierda el carrusel      (index    <-----    actual)
					if(actual > index){
						timer = actual - index;
						$("#carrusel_img").css({"-webkit-transform":"translate("+longt+"px)", "-webkit-transition-duration": (timer * 500) + "ms", "-moz-transform":"translate("+longt+"px)", "-moz-transition-duration": (timer * 500) + "ms", transform:"translate("+longt+"px)", "transition-duration": (timer * 500) + "ms"});	
					}else{
//Caso en el que se mueve hacia a la derecha el carrusel      (index    ---->    actual)
						timer = index - actual;
						$("#carrusel_img").css({"-webkit-transform":"translate("+longt+"px)", "-webkit-transition-duration": (timer * 500) + "ms", "-moz-transform":"translate("+longt+"px)", "-moz-transition-duration": (timer * 500) + "ms", transform:"translate("+longt+"px)", "transition-duration": (timer * 500) + "ms"});	
					}
					for(var q = 0; q < timer; q++){
						if(actual > index){
							setTimeout(function(){
								$($("#carrusel_img li")[actual]).animate({opacity: "0"}, 400);
								$($("#carrusel_img li")[actual - 1]).animate({opacity: "1"}, 400);
								actual--;
								currentImg = actual;
							}, q * 450)
						}else{
							setTimeout(function(){
								$($("#carrusel_img li")[actual]).animate({opacity: "0"}, 400);
								$($("#carrusel_img li")[actual + 1]).animate({opacity: "1"}, 400);
								actual++;
								currentImg = actual;
							}, q * 450)
						}		
					}
					setTimeout(function(){
//Añade la clase que hace que se muestre el puntito bajo el selector de los elementos
						$($("#carrusel_selector ul li")[index]).addClass("apuntador");
//Vuelve a activar los click sobre los elementos del selector
						$("#carrusel_selector ul li").css({"pointer-events":"visible"});
//Abre la descripcion del elemento
						$("#carrusel_desc").animate({width:"55%"},600);
						$($("#carrusel_desc > li")[index]).delay(1000).css({display: "block"}).animate({opacity: 1}, 600);
						setTimeout(function(){
//Calcula la altura del contenedor para centrarlo
							$($("#carrusel_desc > li")[index]).css({height: $($("#carrusel_desc > li div")[index]).height() + "px"});
						},1010);
					}, timer * 500);
				}, 700);
			}
		}
	});
});
//Funcion que genera el movimiento de los elementos hacia la derecha
function move_left(time_out, index){
	var longt = (((actual + 1) * 560) - 215) * -1;
//Traslada las imagenes a la posicion definida dependiendo de en que posicion este 
		$("#carrusel_img").css({"-webkit-transform":"translate("+longt+"px)", "-moz-transform":"translate("+longt+"px)", transform:"translate("+longt+"px)"});
		$($("#carrusel_img li img")[actual_2]).css({"-webkit-transform": "translate(1980px, -175px) scale(.55)", "-moz-transform": "translate(1980px, -175px) scale(.55)", "-ms-transform": "translate(1980px, -175px) scale(.55)", transform: "translate(1980px, -175px) scale(.55)"});
		$($("#carrusel_img li img")[actual_1]).css({"-webkit-transform": "translate(1200px, -120px) scale(.65)", "-moz-transform": "translate(1200px, -120px) scale(.65)", "-ms-transform": "translate(1200px, -120px) scale(.65)", transform: "translate(1200px, -120px) scale(.65)", "-webkit-filter": "blur(8px)", "-moz-filter": "blur(8px)", "-ms-filter": "blur(8px)", "filter": "blur(8px)"});
		$($("#carrusel_img li img")[actual]).css({"-webkit-transform": "translate(400px, -65px) scale(.75)", "-moz-transform": "translate(400px, -65px) scale(.75)", "-ms-transform": "translate(400px, -65px) scale(.75)", transform: "translate(400px, -65px) scale(.75)", "-webkit-filter": "blur(4px)", "-moz-filter": "blur(4px)", "-ms-filter": "blur(4px)", "filter": "blur(4px)"});
		$($("#carrusel_img li img")[actual + 1]).css({"-webkit-transform": "translate(0px, 0px) scale(1)", "-moz-transform": "translate(0px, 0px) scale(1)", "-ms-transform": "translate(0px, 0px) scale(1)", transform: "translate(0px, 0px) scale(1)"});
	setTimeout(function(){
//Desvanece las imagenes dependiendo la posicion de este
		$($("#carrusel_img li")[actual + 1]).animate({opacity:1}, 500);
		$($("#carrusel_img li")[actual]).animate({opacity:.4}, 500);
		$($("#carrusel_img li")[actual_1]).animate({opacity:.2}, 500);
		$($("#carrusel_img li")[actual_2]).animate({opacity:0}, 500);
		actual++; actual_1++; actual_2++; actual_3++;
		setTimeout(function(){
//Verifica si el elemento al que se traslado es el final si lo es se vuelve a mover y si no muestra todo
			if(actual != index){
				move_left(time_out, index);
			}else{
				$("#carrusel_desc").animate({width:"55%"},600);
				$($("#carrusel_desc > li")[actual]).delay(1000).css({display: "block"}).animate({opacity: 1}, 600);
				$("#carrusel_selector ul li").css({"pointer-events":"visible"});
				setTimeout(function(){
					$($("#carrusel_desc > li")[actual]).css({height: $($("#carrusel_desc > li div")[actual]).height() + "px"});
				},1010);
				$($("#carrusel_selector ul li")[index]).addClass("apuntador");
			}
		}, 500);
	}, 0);
}
//Funcion que genera el movimiento de los elementos hacia la izquierda
function move_right(time_out, index){
	var longt = (((actual - 1) * 560) - 215) * -1;
//Traslada las imagenes a la posicion definida dependiendo de en que posicion este 
		$("#carrusel_img").css({"-webkit-transform":"translate("+longt+"px)", "-moz-transform":"translate("+longt+"px)", transform:"translate("+longt+"px)"});
		$($("#carrusel_img li img")[actual_1]).css({"-webkit-transform": "translate(0px, -0px) scale(1)", "-moz-transform": "translate(0px, -0px) scale(1)", transform: "translate(0px, -0px) scale(1)", "-webkit-filter": "blur(0px)", "-moz-filter": "blur(0px)", "-ms-filter": "blur(0px)", "filter": "blur(0px)"});
		$($("#carrusel_img li img")[actual_2]).css({"-webkit-transform": "translate(400px, -65px) scale(.75)", "-moz-transform": "translate(400px, -65px) scale(.75)", transform: "translate(400px, -65px) scale(.75)", "-webkit-filter": "blur(4px)", "-moz-filter": "blur(4px)", "-ms-filter": "blur(4px)", "filter": "blur(4px)"});
		$($("#carrusel_img li img")[actual_3]).css({"-webkit-transform": "translate(1200px, -120px) scale(.65)", "-moz-transform": "translate(1200px, -120px) scale(.65)", transform: "translate(1200px, -120px) scale(.65)", "-webkit-filter": "blur(8px)", "-moz-filter": "blur(8px)", "-ms-filter": "blur(8px)", "filter": "blur(8px)"});
//Desvanece las imagenes dependiendo la posicion de este
	setTimeout(function(){
		$($("#carrusel_img li")[actual]).animate({opacity:0}, 500);
		$($("#carrusel_img li")[actual_1]).animate({opacity:1}, 500);
		$($("#carrusel_img li")[actual_2]).animate({opacity:.4}, 500);
		$($("#carrusel_img li")[actual_3]).animate({opacity:.2}, 500);
		actual--; actual_1--; actual_2--; actual_3--;
		setTimeout(function(){
//Verifica si el elemento al que se traslado es el final si lo es se vuelve a mover y si no muestra todo
			if(actual != index){
				move_right(time_out, index);
			}else{
				$("#carrusel_desc").animate({width:"55%"},600);
				$($("#carrusel_desc > li")[actual]).css({display: "block"}).delay(1000).animate({opacity: 1}, 600);
				$("#carrusel_selector ul li").css({"pointer-events":"visible"});
				setTimeout(function(){
					$($("#carrusel_desc > li")[actual]).css({height: $($("#carrusel_desc > li div")[actual]).height() + "px"});
				},1010);
				$($("#carrusel_selector ul li")[index]).addClass("apuntador");
			}
		}, 500);
	}, 0);
}
$("#carrusel_selector ul li").hover(function(){
	$(this).removeClass("anim_box_shadow_out");
	$(this).addClass("anim_box_shadow_in");
},function(){
	$(this).addClass("anim_box_shadow_out");
	$(this).removeClass("anim_box_shadow_in");
});
function redirect_mix() {
	var cookie = $.cookie("coctel_mezcla");
	cookie = (cookie.replace(/\s/g,'')).toLowerCase();
	$("#carrusel_desc li").each(function(index,elem){
		var search = $($("#carrusel_desc > li div p")[index]).text().replace(/\s/g,'').toLowerCase();
		if(cookie == search){
			if(index != 0){
				$($("#carrusel_selector li")[index]).click();
			}else{
				$("#carrusel_desc").animate({width:"55%"},600);
				$($("#carrusel_desc > li")[index]).delay(1000).css({display: "block"}).animate({opacity: 1}, 600);
				setTimeout(function(){
					$("#carrusel_selector li:first-child").addClass("apuntador");
					$($("#carrusel_desc > li")[index]).css({height: $($("#carrusel_desc > li div")[index]).height() + "px"});
				},1010);
			}
		}
	});
}

function video(dir_mp4, dir_ogg, dir_web) {
	var video = document.createElement("video");
	var mp4 = document.createElement("source");
	var ogg = document.createElement("source");
	var web = document.createElement("source");
	video.setAttribute("autoplay", "true");
	video.setAttribute("poster", "true");
	video.setAttribute("preload", "true");
	video.setAttribute("controls", "true");
	mp4.setAttribute("src", "/zignum/public/img/coctelvideo/" + dir_mp4);
	ogg.setAttribute("src", "/zignum/public/img/coctelvideo/" + dir_ogg);
	web.setAttribute("src", "/zignum/public/img/coctelvideo/" + dir_web);
	video.appendChild(mp4);
	video.appendChild(ogg);
	video.appendChild(web);
	$("#lightbox_video div")[0].appendChild(video);
	$("#lightbox_video").fadeIn("slow");
	$("#lightbox_video video").height($("#lightbox_video video").width()/2);
	$("#lightbox_video > img").css({top: $("#lightbox_video video").offset().top, left: $("#lightbox_video video").width() + $("#lightbox_video video").offset().left - 30});
}
function exit_video(){
	$("#lightbox_video").fadeOut("slow");
	$("#lightbox_video div").empty();
}

$(window).on('load', function() {
	if(ancho > 768){
		$("#carrusel_img").delay(3800).css({"-webkit-transform":"translate(215px)", "-moz-transform":"translate(215px)", transform:"translate(215px)"});
	}else{
		activeSwipe();
	}
	if($.cookie("coctel_mezcla") != undefined && $.cookie("coctel_mezcla") != ""){
		$("#carrusel_img li:first-child").animate({opacity: "1"},2000);
		setTimeout(function(){
			redirect_mix();
			$.cookie("coctel_mezcla", "");
		}, 2050);
	}else{
		$("#carrusel_img li:first-child").animate({opacity: "1"},4000);
		$("#carrusel_desc").delay(1000).animate({width:"55%"},600);
		$($("#carrusel_desc > li")[actual]).delay(2000).css({display: "block"}).animate({opacity: 1}, 600);
		setTimeout(function(){
			$("#carrusel_selector li:first-child").addClass("apuntador");
			$($("#carrusel_desc > li")[actual]).css({height: $($("#carrusel_desc > li div")[actual]).height() + "px"});
		},2010);
	}
});

//Swipe!!!

var currentImg = 0;
function activeSwipe() {
var IMG_WIDTH = 561;
var maxImages = $("#carrusel_img li").length;
var speed = 500;
var imgs;
var swipeOptions = {
    triggerOnTouchEnd: true,
    swipeStatus: swipeStatus,
    allowPageScroll: "vertical",
    threshold: 75
};
var active = false;

	$(function () {
	    imgs = $("#carrusel_img");
	    imgs.swipe(swipeOptions);
	});
	/**
	 * Catch each phase of the swipe.
	 * move : we drag the div
	 * cancel : we animate back to where we were
	 * end : we animate to the next image
	 */
	function swipeStatus(event, phase, direction, distance) {
	    //If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
	    if (phase == "start" || phase == "move" && (direction == "left" || direction == "right")) {
	        var duration = 0;
	    	if(active == false){
				$($("#carrusel_desc > li")[actual]).animate({opacity: 0}, 600)
				$($("#carrusel_desc > li")[actual]).delay(650).css({display: "none"});
				$("#carrusel_desc").animate({width:"0"},600);
				active = true;
	    	}
	        if (direction == "left") {
	            scrollImages((IMG_WIDTH * currentImg) + distance, duration);
	        } else if (direction == "right") {
	            scrollImages((IMG_WIDTH * currentImg) - distance, duration);
	        }
	    }else{
	    	$("#carrusel_img").swipe("disable");
	    	if(phase == "cancel") {
	        	scrollImages(IMG_WIDTH * currentImg, speed);
	    	} else{
		    	if (phase == "end") {
		        	if (direction == "right") {
		            	previousImage();
		        	}else 
		        		if (direction == "left") {
		            		nextImage();
		        		}
		    	}
	    	}
	       	active = false;
	       	setTimeout(function(){
				$("#carrusel_desc").animate({width:"55%"},500);
				$($("#carrusel_desc > li")[actual]).delay(520).css({display: "block"});
				setTimeout(function(){
					console.log($($("#carrusel_desc > li div")[actual]).height());
					$($("#carrusel_desc > li")[actual]).animate({opacity: 1}, 500);
					$($("#carrusel_desc > li")[actual]).css({height: $($("#carrusel_desc > li div")[actual]).height() + "px"});
					setTimeout(function(){
						$("#carrusel_img").swipe("enable");
					},500);
				},650);
	    	}, 150);
	    }
	}
	function previousImage() {
	    currentImg = Math.max(currentImg - 1, 0);
	    scrollImages(IMG_WIDTH * currentImg, speed);
	    if(actual != 0){
			$("#carrusel_selector ul li").removeClass("apuntador");
		   	$($("#carrusel_img li")[actual]).animate({opacity: "0"}, 400);
			$($("#carrusel_img li")[actual - 1]).animate({opacity: "1"}, 400);
			actual--;
	    	setTimeout(function(){
				$($("#carrusel_selector ul li")[actual]).addClass("apuntador");
	    	}, 100);
	    }
	}
	function nextImage() {
	    currentImg = Math.min(currentImg + 1, maxImages - 1);
	    scrollImages(IMG_WIDTH * currentImg, speed);
	    if(actual != maxImages - 1){
			$("#carrusel_selector ul li").removeClass("apuntador");
		    $($("#carrusel_img li")[actual]).animate({opacity: "0"}, 400);
			$($("#carrusel_img li")[actual + 1]).animate({opacity: "1"}, 400);
			actual++;
	    	setTimeout(function(){
				$($("#carrusel_selector ul li")[actual]).addClass("apuntador");
	    	}, 100);
	    }
	}
	/**
	 * Manually update the position of the imgs on drag
	 */
	function scrollImages(distance, duration) {
	    imgs.css("-webkit-transition-duration", (duration / 1000).toFixed(1) + "s");
	    imgs.css("-moz-transition-duration", (duration / 1000).toFixed(1) + "s");
	    imgs.css("transition-duration", (duration / 1000).toFixed(1) + "s");
	    //inverse the number we set in the css
	    var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
	    imgs.css("-webkit-transform", "translate(" + value + "px,0)");
	    imgs.css("-moz-transform", "translate(" + value + "px,0)");
	    imgs.css("transform", "translate(" + value + "px,0)");
	}

}

