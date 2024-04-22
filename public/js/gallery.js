var desp = 0, //Numero de veces que se podra trasladar los album
pos = 0, //Posicion en la que se encuentra actualmente en el desplazamiento por los albums
data_photos, //Objeto que contiene el nombre del album, descipcion, nombre y fotos del mismo 
num_img = 0, //Numero de veces que se podra trasladar las imagens del album
pos_img = 0; //Posicion en la que se encuentra actualmente en el desplazamiento por las imagenes del album
//Muestra los albums siguientes en la galeria
$("#up").click(function(){
	if(desp > 0 && pos > 0){
		pos--;
		$(".list ul li").css({"-webkit-transform": "translateY(" + (pos * -100) + "%)", transform: "translateY(" + (pos * -100) + "%)"});
	}
});
//Muestra los albums anteriores en la galeria
$("#down").click(function(){
	if(desp > 0 && pos < desp){
		pos++;
		$(".list ul li").css({"-webkit-transform": "translateY(" + (pos * -100) + "%)", transform: "translateY(" + (pos * -100) + "%)"});
	}
});
//Muestra las imagenes siguientes dentro del album
$("#up_img").click(function(){
	if(num_img > 0 && pos_img > 0){
		pos_img--;
		$("#photos ul li").css({"-webkit-transform": "translateY(" + (pos_img * -100) + "%)", transform: "translateY(" + (pos_img * -100) + "%)"});
	}
});
//Muestra las imagenes anterires dentro del album
$("#down_img").click(function(){
	if(num_img > 0 && pos_img < num_img){
		pos_img++;
		$("#photos ul li").css({"-webkit-transform": "translateY(" + (pos_img * -100) + "%)", transform: "translateY(" + (pos_img * -100) + "%)"});
	}
});
function anim_gallery_start(){
	$("#albums").delay(1000).fadeIn("slow");	
}

$("#back_gallery").hover(function() {
	$("#back_gallery img:nth-child(2)").fadeIn("slow");
},function(){
	$("#back_gallery img:nth-child(2)").fadeOut("slow");
});

$("#back_gallery").click(function() {
	$(this).fadeOut("slow");
	anim_gallery_start();
	$("#photos").fadeOut("slow");	
	$("#photos ul").empty();
	pos_img = 0;
	num_img = 0;
});

function click_album() {
	$(".list ul li").each(function(index,elem){
		$(elem).click(function(){
			show_album($(elem.children).text());
			$("#albums").fadeOut("slow");		
			$("#back_gallery").delay(1000).fadeIn("slow");	
			$("#photos").delay(1000).fadeIn("slow");	
		});
	});
}
function show_album(index){
	$("#subtitle span").text(index);
	$("#desc_album").text(data_photos[index].description);
	if(data_photos[index].pictures.length > 0){
		num_img = 0;
		for(var i = 0; i < data_photos[index].pictures.length; i++){
			var list_new = document.createElement("li");
			if($.cookie('lengua')==="es"){
				list_new.setAttribute("title", data_photos[index].desc_es[i][0]);
				list_new.setAttribute("alt", data_photos[index].desc_es[i][1]);
			}else{
				list_new.setAttribute("title", data_photos[index].desc_en[i][0]);
				list_new.setAttribute("alt", data_photos[index].desc_en[i][1]);
			}
			$(list_new).css({background: "url(/zignum/public/img/album/" + data_photos[index].pictures[i] + ")"});
			$("#photos ul").append(list_new);
			num_img++;
		}
		num_img = parseInt((num_img / 2) - 1);
	}
	$("#photos ul li").click(function(){
		$("body").css({"overflow-y":"hidden"});
		$("#photos_lightbox img")[0].setAttribute("src", "img" + $(this).css("background-image").split("(")[1].split(")")[0].split("img")[1].split("\"")[0]);
		$("#photos_lightbox").fadeIn("slow");
		$("#photos_lightbox img:nth-child(2)").css({top: $("#photos_lightbox img").position().top + 5, left: ($("#photos_lightbox img").width() + $("#photos_lightbox img").position().left - 23) + "px"});
	});
}

$("#photos_lightbox img:nth-child(2)").click(function() {
	$("body").css({"overflow-y":"auto"});
	$("#photos_lightbox").fadeOut("slow");
});
//Carga el json que contiene toda la informacon sobre los album
function load_gallery (){ 
	$.ajax({
        url: '/gallerypictures',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            console.log("error al cargar datos en galeria");
            console.log(error);
        },
        success: function(data){
        	load_data_gallery(data)
        }
    });
}
//Carga las portadas de los album
function load_data_gallery(datta){
	$.each(datta, function (index, elem) {
		var list_new = document.createElement("li");
		var text_new = document.createElement("p");
		var text = document.createTextNode(index);
		text_new.appendChild(text);
		list_new.appendChild(text_new);
		list_new.setAttribute("onClick", "ga('Galeria', '" + index + "')");
//Si el album no contiene fotos se muestra negro si no la primera foto del album
		if(datta[index].pictures.length > 0) {
			$(list_new).css({background: "url(/zignum/public/img/album/" + datta[index].pictures[0] + ")"});
		}else{
			$(list_new).css({"background-color": "black"})
		}
		$(".list ul").append(list_new);
	});
//Guardamos los datos en una variable global
	data_photos = datta;
	desp = parseInt($(".list ul li").length / 2) - 1;
	click_album();
}
function resizing_gal() {
	if($("#photos_lightbox").css("display") == "block") {
		$("#photos_lightbox img:nth-child(2)").css({top: $("#photos_lightbox img").position().top + 5, left: $("#photos_lightbox img").width() + $("#photos_lightbox img").position().left + "px)"});
	}
}

$(window).resize(function(){
	resizing_gal();
});

$(window).on('load', function() {
	load_gallery();
	anim_gallery_start();
});