/*
Realiza la animacaion de la barra navegadora de lateral
*/

function anim_main_left() {
	setTimeout(function(){
		for(i = 0; i < 4; i++){
			$($(".nav_left li")[i]).css({display:"block"});
			$($(".nav_left li")[i]).delay(i * 250).animate(
				{
					opacity:"1",
					marginTop:"0"
				}, 
			(i + 2) * 250);	
		}
		setTimeout(function(){
			$(".nav_left .social").css({display:"block"});
			$(".nav_left .socicon").addClass("cero_normal");
			$(".dmp").fadeIn(1000);
			setTimeout(function(){
				$(".nav_left .socicon").css({"-webkit-transform": "scale(1)", "-moz-transform": "scale(1)", "transform": "scale(1)"}).removeClass("cero_normal");
			}, 1500);
		}, 2000);
	}, 500);
}
