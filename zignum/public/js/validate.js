var ancho;

function resizing() {
	ancho = $(window).width();
		$("#exit_note").css({left: $("#note p").position().left + $("#note p").width() + 49, top: $("#note p").position().top});
}
//Boton de compartir de twitter
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

//Click para validar la edad
$("#send").click(function(){
	if(validar() == true){
		$.cookie("anim_left","true");
		if($("#recuerda")[0].checked){
		$.post(
			'/validate',
			{cookie:'yes'},
			function(data,status){
    			if(status=='success'){
    				window.location.assign('/'+data.redirect);
    			}else{
    				window.location.href('/');
    			}
  			}	
		);
		}else{
			$.post(
			'/validate',
			{cookie:'no'},
			function(data,status){
    			if(status=='success'){
    				window.location.assign('/'+data.redirect);
    			}else{
    				window.location.href('/');
    			}
  			});
		}
	}else{
		$("#note").css("display","block");
		$("#note").animate({opacity:1},800);
		$("#exit_note").css({left: $("#note p").position().left + $("#note p").width() + 49, top: $("#note p").position().top});
		$("#cont").css("overflow","hidden");
	}
} );

//Salir de la ventada de acceso denegado
function exitNote() {
	$("#note").velocity({opacity:0},800,function(){
		$("#note").css("display","none");
		$("#cont").css("overflow","visible");
	});
}

//Validar mayoria de edad para poder entrar al sitio
function validar() {
	var date = new Date(), mes = $("#month").val() - 1, dia = $("#days").val(), anio = $("#years").val();
	if(date.getFullYear() - anio == 18){
		if(date.getMonth() == mes){
			if(date.getDate() >= dia){
				return true;
			}else{
				return false;
			}
		}else{
			if(date.getMonth() > mes){
				return true;
			}else{
				return false;
			}
		}
	}else{
		if(date.getFullYear() - anio > 18){
			return true;
		}else{
			false;
		}
	}
}

// Animacio  de entrada
function animation_start() {
	$("#cont_view").animate({opacity:1},800);
	$("#view").delay(600).animate({opacity:1},800);
	setTimeout(function(){
		$("#view > p:first-child").animate({opacity:1},1600);
		$("#img_logo_index").delay(150).animate({opacity:1}, 1600);
		$("#text_intro").delay(300).animate({opacity:1}, 1600);
		$("#birthDate").delay(450).animate({opacity:1}, 1600);
		$("#recordar").delay(600).animate({opacity:1}, 1600);
		$("#send").delay(750).animate({opacity:1}, 1600);
		$(".social").delay(900).animate({opacity:1}, 1600);
		$("#footer p").delay(1050).animate({opacity:1}, 1600);
		$("p").delay(1300).css({opacity:1});
	}, 800);
}


//---------HOVER-----------
//mouseover del boton enviar
$("#cont_send #send").hover(function(){
	if(ancho > 768){	
		$("#img_boton").animate({marginTop:"-14%", marginLeft:"40%", opacity:1},300)
	}else{
		$("#img_boton").animate({marginTop:"-18%", marginLeft:"40%", opacity:1},300)
	}
},function(){
	if(ancho >768){
		$("#img_boton").animate({marginTop:"-12%", marginLeft:"38%", opacity:0},300)
	}else{
		$("#img_boton").animate({marginTop:"-14%", marginLeft:"38%", opacity:0},300)
	}
});
//Cambia el idioma español/ingles de todo el sitio
$("#esp").click(function(){
	$("#cont_view").animate({opacity:0},500);
	$("#footer").animate({opacity:0},800);
	setTimeout(function(){
		animation_start();
		$("#esp").html("ESPAÑOL");
		$("#ing").html("INGLES");
		$("#idioma").html("Idioma:");
		$("#rememberme").html("Recuerdame:");
		$("#send").html("ENVIAR");
		$("#day").html("DÍA");
		$("#month").html("MES");
		$("#year").html("AÑO");
		$("#welcome").html("BIENVENIDO A:");
		$("#text_intro").html("PROPORCIONA TU EDAD<br>PARA SABER SI ERES MAYOR DE EDAD.");
		$("#aviso").html("Aviso de privacidad.");
		$("#terminos").html("Términos y condiciones.");
		$("#contacto").html("Contacto.");
		$("#evita").html("EVITA EL EXCESO");
		$("#sorry").html("LO SENTIMOS PERO <br>NO TIENES LA EDAD<br>REQUERIDA PARA ENTRAR A <br>ESTE SITIO");
		$("#footer").animate({opacity:1},800);
		$("#avi p").html(aviso_es);
		$("#term p").html(term_es);
	},1000);
});
$("#ing").click(function(){
	$("#cont_view").animate({opacity:0},500);
	$("#footer").animate({opacity:0},800);
	setTimeout(function(){
		animation_start();
		$("#esp").html("SPANISH");
		$("#ing").html("ENGLISH");
		$("#idioma").html("Language:");
		$("#rememberme").html("Remember:");
		$("#send").html("SEND");
		$("#day").html("DATE OF BIRTH");
		$("#month").html("MONTH");
		$("#year").html("YEAR");
		$("#welcome").html("WELCOME TO:");
		$("#text_intro").html("PROVIDE YOUR AGE <br> TO KNOW IF YOU ARE OF LEGAL AGE.");
		$("#aviso").html("Privacy warning.");
		$("#terminos").html("Térms and conditions.");
		$("#contacto").html("Contact.");
		$("#evita").html("ENJOY RESPONSIBLY");
		$("#sorry").html("WE ARE SORRY, <br>YOU DO NOT MEET <br>THE MINIMUM AGE REQUIREMENT <br>TO VISIT THIS PAGE.");
		$("#footer").animate({opacity:1},800);
		$("#avi p").html(aviso_en);
		$("#term p").html(term_en);
	},1000);
});

$("a.id").click(function(){
	if(!$(this).hasClass("selected")){
		if(this.text == "ESPAÑOL"||this.text == "SPANISH"){
			$.cookie("lengua", "es"), { expires: 1 };
			$($("a.id")[1]).removeClass("selected");
			$($("a.id")[0]).addClass("selected");
		}else{
			$.cookie("lengua", "en"), { expires: 1 };
			$($("a.id")[0]).removeClass("selected");
			$($("a.id")[1]).addClass("selected");
		}
	}
});

window.onresize = resizing;

$(window).on('load', function() {
  resizing();
  animation_start();
  $.cookie("lengua", "es"), { expires: 1 };
});
