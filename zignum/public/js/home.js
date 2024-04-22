var ancho; //Ancho de ventana del navegador
function resize_home() {
    ancho = $(window).width();
	$("#Av").css({left: $("#avi p").position().left + $("#avi p").width() + 30, top: $("#avi p").position().top});
	$("#Tm").css({left: $("#term p").position().left + $("#term p").width() + 30, top: $("#term p").position().top});
    if(ancho > 1100){
		$("#botellas_home").css({marginRight:"13%"});
	}else{
		$("#botellas_home").css({marginRight:"0%"});	
	}
	if(ancho < 768){
    	$("#carrusel_img").swipe("enable");
	}else {
    	$("#carrusel_img").swipe("disable");
	}
	if($("#lightbox_video video").length != 0){
		$("#lightbox_video > img").css({top: $("#lightbox_video video").offset().top, left: $("#lightbox_video video").width() + $("#lightbox_video video").offset().left - 30});
	}
}
function ani_elem() {
	$(".contain").animate({opacity:"1"},1000);
	$("#footer").animate({opacity:"1"},2000);
	$("#img_logo, .navbar>.container-fluid .navbar-brand").fadeIn("slow");
	anim_main_left();
}
function not_ani_elem() {
	$(".contain").css({opacity:"1"});
	$("#footer").css({opacity:"1"});
	$(".nav_left li").css({display:"block", opacity:"1", marginTop:"0"});
	$("#img_logo, .navbar>.container-fluid .navbar-brand").css({display: "initial"});
	$(".nav_left .social").css({display:"block"});
	$(".nav_left .socicon").css({"-webkit-transform": "scale(1)", "-moz-transform": "scale(1)", "transform": "scale(1)"}).removeClass("cero_normal");
	setTimeout(function(){
		$(".dmp").fadeIn(800);
	}, 2500);
}
//Activa las animaciones al entrar al home
function ani_home() {
	setTimeout(function(){
		if(ancho > 1100){
			$("#botellas_home").velocity({
				marginRight:"13%",
				opacity:"1"
			}, {
				duration: 1000,
				easing: "easeOutCirc"
			});
		}else{
			$("#botellas_home").velocity({
				marginRight:"0%",
				opacity:"1"
			}, {
				duration: 1000,
				easing: "easeOutCirc"
			});
		}
		$("#logo_center").fadeIn(3000);
		$("#dec_center").delay(800).animate({opacity:"1"}, 3000);
	},1000);
}
//Activa las animacion de la seccion de contacto
function anim_contact() {
	$(".contacto").delay(1000).animate({opacity:"1"},1000);
}
//Activa las animacion de la seccion zignum
function anim_zimgnum(){
	$(".botella_dem").delay(2100).fadeIn("slow");
	$(".dec_mezcal").animate({opacity: 1}, 2500);
	if(ancho > 800){
		$(".dec_mezcal").animate({width:"35%", "padding-left": "3%", "padding-right": "3%"},500);
	}else{
		if($(".dec_mezcal").hasClass("elmezcal")){
			$(".dec_mezcal").animate({width:"85%", "padding-left": "3%", "padding-right": "3%"},500);	
		}else{
			$(".dec_mezcal").animate({width:"55%", "padding-left": "6%", "padding-right": "0%"},500);
		}
	}
	$(".dec_mezcal > *, #mezcal").delay(3100).animate({opacity:"1"},800);
}
//Animacion de la seccion de premios, dependiendo de cual elemento se mostrara
$("#silv").click(function(){
	if(!$(this).hasClass("selected")){
		$(".list").css("pointer-events", "none");
		$(".list").velocity({
			"opacity":"0"
		},{
			duration: 400,
			complete: function() {
				$(".list").removeClass("selected");
				$("#silv").addClass("selected");
				$("#ani, #rep").css({
					position: "relative",
					top: 0,
					left: 0,
					right: 0
				});
				$(".list").animate({
					opacity: 1,
				},{
					duration: 400
				});
			}
		});
		$(".selected_list").fadeOut();
		$("#lis_prem").velocity({
			width: "0%"
		},{
			delay: 500,
			duration: 400,
			begin: function(){
				$("#lis_prem").css({"background": " left url(/zignum/public/img/linea-azul-left.png), right url(/zignum/public/img/linea-azul-right.png)"});
				$("#lis_prem ul").removeClass("selected_list");
			},
			complete: function(){
				if(ancho >= 640){
					$("#lis_prem").velocity({
						width: "55%"
					},{
						duration: 400,
						complete: function(){
							$("#list_silver").fadeIn().addClass("selected_list");
							$(".list").css("pointer-events", "visible");
						}
					});
				}else{
					$("#lis_prem").velocity({
						width: "90%"
					},{
						duration: 400,
						complete: function(){
							$("#list_silver").fadeIn().addClass("selected_list");
							$(".list").css("pointer-events", "visible");
						}
					});
				}
			}
		});
	}
});

$("#ani").click(function(){
	if(!$(this).hasClass("selected")){
		$(".list").css("pointer-events", "none");
		$(".list").velocity({
			"opacity":"0"
		},{
			duration: 400,
			complete: function() {
				$(".list").removeClass("selected");
				$("#ani").addClass("selected");
				$("#silv").css({
					position: "absolute",
					right: "auto",
					left: 0
				});
				$("#rep").css({
					position: "absolute",
					left: 0,
					top: "25px"
				});
				$(".list").animate({
					opacity: 1,
				},{
					duration: 400
				});
			}
		});
		$(".selected_list").fadeOut();
		$("#lis_prem").velocity({
			width: "0%"
		},{
			delay: 500,
			duration: 400,
			begin: function(){
				$("#lis_prem").css({"background": " left url(/zignum/public/img/linea-roja-left.png), right url(/zignum/public/img/linea-roja-right.png)"});
				$("#lis_prem ul").removeClass("selected_list");
			},
			complete: function(){
				if(ancho >= 640){
					$("#lis_prem").velocity({
						width: "55%"
					},{
						duration: 400,
						complete: function(){
							$("#list_aniejo").fadeIn().addClass("selected_list");
							$(".list").css("pointer-events", "visible");
						}
					});
				}else{
					$("#lis_prem").velocity({
						width: "90%"
					},{
						duration: 400,
						complete: function(){
							$("#list_aniejo").fadeIn().addClass("selected_list");
							$(".list").css("pointer-events", "visible");
						}
					});
				}
			}
		});
	}
});
$("#rep").click(function(){
	if(!$(this).hasClass("selected")){
		$(".list").css("pointer-events", "none");
		$(".list").velocity({
			"opacity":"0"
		},{
			duration: 400,
			complete: function() {
				$(".list").removeClass("selected");
				$("#rep").addClass("selected");
				$("#silv").css({
					position: "absolute",
					right: 0,
					left: "auto"
				});
				$("#ani").css({
					position: "absolute",
					right: 0,
					left: "auto",
					top: "25px"
				});
				$(".list").animate({
					opacity: 1,
				},{
					duration: 400
				});
			}
		});

		$(".selected_list").fadeOut();
		$("#lis_prem").velocity({
			width: "0%"
		},{
			delay: 500,
			duration: 400,
			begin: function(){
				$("#lis_prem").css({"background": "left url(/zignum/public/img/linea-amarilla-left.png), right url(/zignum/public/img/linea-amarilla-right.png)"});
				$("#lis_prem ul").removeClass("selected_list");
			},
			complete: function(){
				if(ancho >= 640){
					$("#lis_prem").velocity({
						width: "55%"
					},{
						duration: 400,
						complete: function(){
							$("#list_repos").fadeIn().addClass("selected_list");
							$(".list").css("pointer-events", "visible");
						}
					});
				}else{
					$("#lis_prem").velocity({
						width: "90%"
					},{
						duration: 400,
						complete: function(){
							$("#list_repos").fadeIn().addClass("selected_list");
							$(".list").css("pointer-events", "visible");
						}
					});
				}
			}
		});
	}
});

window.onresize = resize_home;

$(window).on('load', function() {
    ancho = $(window).width();
    if($.cookie("anim_left") == "true" || $.cookie("anim_left") == undefined){
    	ani_elem();
    	$.cookie("anim_left", "false");
    }else{
    	not_ani_elem();
    }
	ani_home();
	anim_contact();
	anim_zimgnum();
});