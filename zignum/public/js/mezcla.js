var list_img, //Imagenes de la ruleta
resultado_mezcla, //Objeto que guarda el resultado de la ruleta
cook = 0, //Varible que define si giraste la ruleta
fb_resultado; //Variable que mantiene el resultado del juego anterior

function isSafari(){
   var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    return isSafari;
}
//Manda llamar la funcion que carga las imagenes de la ruleta y la muestra al terminar
function load_mezcla (){ 
  $.ajax({
    url: '/gamejson',
    type: 'GET',
    dataType: 'json',
    error: function(error){
      console.log("error al cargar datos en mezcla_perfecta");
      console.log(error);
    },
    success: function(data){
      tem = data;
      if(cook == 0){
        acomoda(data);
        $("#ruleta").delay(1000).fadeIn(2000);
        cook = 1;
      }else{
        resultado_mezcla = data.result;
      }
    }
  });
}
//Funcion que acomoda las imagenes en la ruleta
function acomoda(datta) {
  list_img = datta.game;
  resultado_mezcla = datta.result;
//Para dispositivos de resoluciones menores a 450px
  if(ancho > 640){
    for(var i = 0; i < 16; i++){
      //Agrega una imagen en la seccion de "frutas"
      if(i < 12){
        var lif_new = document.createElement("li");
        var imgf_new = document.createElement("img");
        imgf_new.setAttribute("src", "/zignum/public/img/fruit/" + list_img.fruits[i].icon)
        imgf_new.style.webkitTransform = "rotate(" + i*30 + "deg) translate(0px, -40px)";
        imgf_new.style.MozTransform = "rotate(" + i*30 + "deg) translate(0px, -40px)";
        imgf_new.style.transform = "rotate(" + i*30 + "deg) translate(0px, -40px)";
        lif_new.appendChild(imgf_new);
        $("#fruit").append(lif_new);
      }
      //Agrega una imagen en la seccion de "en compañia"
      if(i < 8){
        var lic_new = document.createElement("li");
        var imgc_new = document.createElement("img");
        imgc_new.setAttribute("src", "/zignum/public/img/companion/" + list_img.companion[i].icon)
        imgc_new.style.webkitTransform = "rotate(" + i*45 + "deg) translate(0px, -80px)";
        imgc_new.style.MozTransform = "rotate(" + i*45 + "deg) translate(0px, -80px)";
        imgc_new.style.transform = "rotate(" + i*45 + "deg) translate(0px, -80px)";
        lic_new.appendChild(imgc_new);
        $("#people").append(lic_new);
      }
      //Agrega una imagen en la seccion de "lugar"
      var lip_new = document.createElement("li");
      var imgp_new = document.createElement("img");
      imgp_new.setAttribute("src", "/zignum/public/img/places/" + list_img.places[i].icon)
      imgp_new.style.webkitTransform = "rotate(" + i*22.5 + "deg) translate(0px, -125px)";
      imgp_new.style.MozTransform = "rotate(" + i*22.5 + "deg) translate(0px, -125px)";
      imgp_new.style.transform = "rotate(" + i*22.5 + "deg) translate(0px, -125px)";
      lip_new.appendChild(imgp_new);
      $("#place").append(lip_new);
    }
  }else{
//Para dispositivos de resoluciones mayores o iguales a 450px
    for(var i = 0; i < 16; i++){
      //Agrega una imagen en la seccion de "frutas"
      if(i < 12){
        var lif_new = document.createElement("li");
        var imgf_new = document.createElement("img");
        imgf_new.setAttribute("src", "/zignum/public/img/fruit/" + list_img.fruits[i].icon)
        imgf_new.style.webkitTransform = "rotate(" + i*30 + "deg) translate(0px, -25px)";
        imgf_new.style.MozTransform = "rotate(" + i*30 + "deg) translate(0px, -25px)";
        imgf_new.style.transform = "rotate(" + i*30 + "deg) translate(0px, -25px)";
        lif_new.appendChild(imgf_new);
        $("#fruit").append(lif_new);
      }
      //Agrega una imagen en la seccion de "en compañia"
      if(i < 8){
        var lic_new = document.createElement("li");
        var imgc_new = document.createElement("img");
        imgc_new.setAttribute("src", "/zignum/public/img/companion/" + list_img.companion[i].icon)
        imgc_new.style.webkitTransform = "rotate(" + i*45 + "deg) translate(0px, -50px)";
        imgc_new.style.MozTransform = "rotate(" + i*45 + "deg) translate(0px, -50px)";
        imgc_new.style.transform = "rotate(" + i*45 + "deg) translate(0px, -50px)";
        lic_new.appendChild(imgc_new);
        $("#people").append(lic_new);
      }
      //Agrega una imagen en la seccion de "lugar"
      var lip_new = document.createElement("li");
      var imgp_new = document.createElement("img");
      imgp_new.setAttribute("src", "/zignum/public/img/places/" + list_img.places[i].icon)
      imgp_new.style.webkitTransform = "rotate(" + i*22.5 + "deg) translate(0px, -78.1px)";
      imgp_new.style.MozTransform = "rotate(" + i*22.5 + "deg) translate(0px, -78.1px)";
      imgp_new.style.transform = "rotate(" + i*22.5 + "deg) translate(0px, -78.1px)";
      lip_new.appendChild(imgp_new);
      $("#place").append(lip_new);
    }
  }
}
//Funcion que hace girar la seccion de "lugar"
function gira_place(stop){
  var rotation = 1800 + (360 - (stop * 22.5));
  $("#table_place").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
  $("#place").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
}
//Funcion que hace girar la seccion de "en compañia"
function gira_compani(stop){
  var rotation = -1800 - (stop * 45);
  $("#table_compani").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
  $("#people").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
}
//Funcion que hace girar la seccion de "frutas"
function gira_fruit(stop){
  var rotation = 1800 + (360 - (stop * 30));
  $("#table_fruit").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
  $("#fruit").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
}
//Funcion que hace girar la seccion de "botellas"
function gira_battle(stop){
  if(stop == 0){
    stop = (Math.random() * 175) - 180;
    var rotation = -1800 - stop;
    $("#table_battle").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
  }else{
    stop = Math.random() * 175;
    var rotation = -1800 - stop;
    $("#table_battle").css({"-webkit-transform": "rotate(" + rotation + "deg)", "-moz-transform": "rotate(" + rotation + "deg)", transform: "rotate(" + rotation + "deg)","-webkit-transition-duration": "5s", "-moz-transition-duration": "5s", "transition-duration": "5s"});
  }
}
//Inicializa la ruleta
function reiniciar() {
  $("#table_place").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#place").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#table_compani").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#people").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#table_fruit").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#fruit").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#table_battle").css({"-webkit-transform": "rotate(0deg)", "-moz-transform": "rotate(0deg)", transform: "rotate(0deg)", "-webkit-transition-duration": "150ms", "-moz-transition-duration": "150ms", "transition-duration": "150ms"});
  $("#place li, #people li, #fruit li").css({opacity: "1"});
}
//Cierra el lightbox de resultados
function cerrar_lightbox() {
  $("#palanca, #btn_palanca").css("pointer-events", "visible");
  if(ancho < 800){
    $("#btn_palanca").fadeIn();
  }
  $("#lightbox_mezclas").fadeOut();
}
//Hace el efecto de girar la ruleta
$("#palanca, #btn_palanca").click(function(){
  console.log(resultado_mezcla);
  $(this).css("pointer-events", "none");
  $("#btn_palanca").fadeOut();
  gira_place(resultado_mezcla.place);
  gira_compani(resultado_mezcla.companion);
  gira_fruit(resultado_mezcla.fruit);
  gira_battle(resultado_mezcla.producto);
  $("#palanca").css({transform: "rotate(20deg) translate(35px,50px)"});
  setTimeout(function(){
    $("#palanca").css({transform: "rotate(0deg) translate(0px,0px)"});
  },250);
  $("#cocktail_lightbox")[0].setAttribute("src", "/zignum/public/img/coctel/" + resultado_mezcla.cocktail);
  setTimeout(function(){
    $("#place li, #people li, #fruit li").css({opacity: ".3"});
    $($("#place li")[resultado_mezcla.place]).css({opacity: 1});
    $($("#people li")[resultado_mezcla.companion]).css({opacity: 1});
    $($("#fruit li")[resultado_mezcla.fruit]).css({opacity: 1});
  },5000);
//Muestra el lightbox con el resultado
  setTimeout(function(){
    $("#cocktail_txt_lightbox").text(resultado_mezcla.cocktail_name);
    $("#place_lightbox")[0].setAttribute("src", "/zignum/public/img/places/" + list_img.places[resultado_mezcla.place].icon);
    $("#placetxt_lightbox").text(list_img.places[resultado_mezcla.place].title);
    $("#compani_txt_lightbox").text(list_img.companion[resultado_mezcla.companion].title);
    $("#cocktail_result")[0].setAttribute("href", resultado_mezcla.cocktailproduct);
    $("#lightbox_mezclas").fadeIn();
    fb_resultado = resultado_mezcla;
    setTimeout(function(){
      load_mezcla ();
    },250);
  },7000);
  $.cookie("coctel_mezcla", resultado_mezcla.cocktail_name);
});
$("#cerrar_resp_mezcla").click(function(){
  reiniciar();
  cerrar_lightbox();
});
$("#volver").click(function(){
  reiniciar();
  setTimeout(function(){
    $("#palanca").click();
  }, 400);
  cerrar_lightbox();
});

window.fbAsyncInit = function() {
  FB.init({
    appId      : '559936614151690',
    xfbml      : true,
    version    : 'v2.2'
  });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));

if(!isSafari()){
  function share_result(datos,result){
     if($.cookie("lengua") == "en"){
      FB.ui({
       method:'feed',  
       name: "Zignum Mezcales Perfect Mix",
       description: "My mix perfect is: " + result.cocktail_name.toLowerCase() + " " + datos.game.places[result.place].title.toLowerCase() + " with " + datos.game.companion[result.companion].title.toLowerCase(),
       link: "http://"+location.hostname+"/",
        picture: location.hostname+"/zignum/public/img/share_zignum.jpg",
       }, function(response){});
     }else{
       FB.ui({
         method:'feed',
         name: "Zignum Mezcales Mezcla Perfecta",
         description: "Mi mezcla perfecta es: " + result.cocktail_name.toLowerCase() + " " + datos.game.places[result.place].title.toLowerCase() + " con " + datos.game.companion[result.companion].title.toLowerCase(),
         link: "http://"+location.hostname+"/",
         picture:  location.hostname+"/zignum/public/img/share_zignum.jpg",
         }, function(response){});
     }
   } 

   function face_share_result(){    
    $.ajax({
      type: "GET",
      url:'/gamejson' ,
      dataType: "json",
      success: function(data){
        share_result(data,fb_resultado);
      },
      error: function(data){
              //console.error(data);
            }
    });
  }

  $('#publicar').click(function(event) {
    face_share_result();
  });
}else{
    var share_result_fb = "";
    function share (){
       $.get(
        '/gamejson',
        function(datos){
          if($.cookie("lengua") == "es"){
            share_result_fb="https://www.facebook.com/v2.2/dialog/feed?app_id=559936614151690&description="+"Mi%20mezcla%20perfecta%20es%3A%20"
            +encodeURI(fb_resultado.cocktail_name)+"%20"+encodeURI(datos.game.places[fb_resultado.place].title)+"%20con%20"+encodeURI(datos.game.companion[fb_resultado.companion].title)+"&display=popup&e2e=%7B%7D&link=http%3A%2F%2F"+location.hostname+"%2F&locale=en_US"+
            "&name=Zignum%20Mezcales%20Mezcla%20Perfecta&next=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FQjK2hWv6uak.js%3Fversion%3D41%23cb%3Df25e0c053c%26domain%3D"+location.hostname
            +"%26origin%3Dhttp%253A%252F%252F"+location.hostname+"%252Ff3d41d75f8%26relation%3Dopener%26frame%3Df20c56218c%26result%3D%2522xxRESULTTOKENxx%2522&picture="+location.hostname+"%2Fimg%2Fshare_zignum.jpg&sdk=joey&version=v2.2";
          }else{
            share_result_fb="https://www.facebook.com/v2.2/dialog/feed?app_id=559936614151690&description=My%20mix%20perfect%20is%3A%20"
            +encodeURI(fb_resultado.cocktail_name)+"%20"+encodeURI(datos.game.places[fb_resultado.place].title)+"%20with%20"+encodeURI(datos.game.companion[fb_resultado.companion].title)+"&display=popup&e2e=%7B%7D&link=http%3A%2F%2F"+location.hostname+"%2F&locale=en_US"+
            "&name=Zignum%20Mezcales%20Perfect%20Mix&next=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FQjK2hWv6uak.js%3Fversion%3D41%23cb%3Df25e0c053c%26domain%3D"+location.hostname
            +"%26origin%3Dhttp%253A%252F%252F"+location.hostname+"%252Ff3d41d75f8%26relation%3Dopener%26frame%3Df20c56218c%26result%3D%2522xxRESULTTOKENxx%2522&picture="+location.hostname+"%2Fimg%2Fshare_zignum.jpg&sdk=joey&version=v2.2";
          }
          var width  = 600,
      height = 300,
      left   = ($(window).width()  - width)  / 2,
      top    = ($(window).height() - height) / 2,
      opts   = 'status=1' +
      ',width='  + width  +
      ',height=' + height +
      ',top='    + top    +
      ',left='   + left;
      window.open(share_result_fb, 'twitter', opts);
        }
        );
    }
    

  $('#publicar').click(function(event) {
     share();
  });
}
//Salir de la ventada de acceso denegado
function exitNota2() {
  $("#recomend").velocity({opacity:0},800,function(){
    $("#recomend").css("display","none");
    $("#cont").css("overflow","visible");
  });
}
//Abre lightbox para recomendar a un amigo
$("#recomendar").click(function(){
  $("#recomend").css("display","block");
  $("#recomend").animate({opacity:1},800);
  $("#cont").css("overflow","hidden");
});
//Envia los datos a un amigo
$("#recomend #send2").click(function(){
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('comment').value;
  var miMezcla = fb_resultado.cocktail_name + " en " + list_img.places[fb_resultado.place].title + " con " + list_img.companion[fb_resultado.companion].title;
//Confirma que los datos no esten vacios
  if(name!=""&&email!=""&&message!=""){

    var formData = {
      s_name: String(name),
      s_email: String(email),
      s_message: String(message),
      s_mezcla: String(miMezcla)
    };

    $.ajax({
      url : "/sendmailtf",
      type: "POST",
      data : formData,

      success: function(data, textStatus, jqXHR){
        console.log(data);
        if(data.status == "error"){
          $(".email_error").fadeIn();
        }else{
          $("#recomend").velocity({opacity:0},800,function(){
            $("#recomend").css("display","none");
            $("#cont").css("overflow","visible");
            $("#email_error").fadeOut();
            setTimeout(function(){
              $("#name").val("");
              $("#email").val("");
              $("#comment").val("");
              $(".email_error").fadeOut();
              $("#nota .form > :last-child").fadeOut();
            }, 1000);
          });
        }
      },
      error: function (jqXHR, textStatus, errorThrown){
        console.log(textStatus);
      }
    });
  }else{
    $("#nota .form > :last-child").fadeIn();
  }
});

//Redimenciona las imagenes de la ruleta
function resize_mezcla() {
  ancho = $(window).width();
  if(ancho > 640){
    for(var i = 0; i < 16; i++){
      if(i < 12){
        var rotation = $("#fruit li img")[i].style.transform.split("translate")[0];
        $("#fruit li img")[i].style.webkitTransform = rotation + "translate(0px, -40px)";
        $("#fruit li img")[i].style.MozTransform = rotation + "translate(0px, -40px)";
        $("#fruit li img")[i].style.transform = rotation + "translate(0px, -40px)";
      }
      if(i < 8){
        var rotation = $("#people li img")[i].style.transform.split("translate")[0];
        $("#people li img")[i].style.webkitTransform = rotation + "translate(0px, -80px)";
        $("#people li img")[i].style.MozTransform = rotation + "translate(0px, -80px)";
        $("#people li img")[i].style.transform = rotation + "translate(0px, -80px)";
      }
      var rotation_p = $("#place li img")[i].style.transform.split("translate")[0];
      $("#place li img")[i].style.webkitTransform = rotation_p + "translate(0px, -125px)";
      $("#place li img")[i].style.MozTransform = rotation_p + "translate(0px, -125px)";
      $("#place li img")[i].style.transform = rotation_p + "translate(0px, -125px)";
    }
  }else{
    for(var i = 0; i < 16; i++){
      if(i < 12){
        var rotation = $("#fruit li img")[i].style.transform.split("translate")[0];
        $("#fruit li img")[i].style.webkitTransform = rotation + "translate(0px, -25px)";
        $("#fruit li img")[i].style.MozTransform = rotation + "translate(0px, -25px)";
        $("#fruit li img")[i].style.transform = rotation + "translate(0px, -25px)";
      }
      if(i < 8){
        var rotation = $("#people li img")[i].style.transform.split("translate")[0];
        $("#people li img")[i].style.webkitTransform = rotation + "translate(0px, -50px)";
        $("#people li img")[i].style.MozTransform = rotation + "translate(0px, -50px)";
        $("#people li img")[i].style.transform = rotation + "translate(0px, -50px)";
      }
      var rotation_p = $("#place li img")[i].style.transform.split("translate")[0];
      $("#place li img")[i].style.webkitTransform = rotation_p + "translate(0px, -78.1px)";
      $("#place li img")[i].style.MozTransform = rotation_p + "translate(0px, -78.1px)";
      $("#place li img")[i].style.transform = rotation_p + "translate(0px, -78.1px)";
    }
  }
}

$("#cont_ruleta > p:nth-child(3) span").click(function(){
  $("#instruction").fadeIn();
  $(".instruc").fadeIn();
});
$("#ruleta #ins_exit").click(function(){
  $("#instruction").fadeOut();
  $(".instruc").fadeOut();
  ga('Mezcla', 'Instrucciones');
});
window.onresize = resize_mezcla;

$(window).on('load', function() {
  load_mezcla();
});