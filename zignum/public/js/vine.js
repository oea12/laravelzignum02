function load_vine (){ 
	$.ajax({
    url: '/feed',
    type: 'GET',
    dataType: 'json',
    error: function(error){
      console.log("error al cargar datos en feed");
      console.log(error);
    },
    success: function(data){
      $("#vine_thumbnail").css({"background": "url(/zignum/public/img/vine/" + data.vine.vine_thumbnail + ")"});
      $("#vine_video")[0].setAttribute("href", data.vine.vine_video);
      for(var i = 0; i < data.feed_images.length; i++){
        var list_new = document.createElement("li");
        var a_new = document.createElement("a");
        list_new.style.background = "url(/zignum/public/img/socialimages/" + data.feed_images[i] + ")";
        if(data.feed_link[i]===""){

        }else{
        a_new.setAttribute("href", data.feed_link[i]);
        a_new.setAttribute("target", "_blank");
        }
        list_new.appendChild(a_new);
        $("#carrusel_vine .bjqs").append(list_new);
      }
      $('#carrusel_vine').bjqs({
        'height' : 320,
        'width' : 620,
        'responsive' : true,
        'animduration' : 550,
        'nexttext' : '<img src="/zignum/public/img/btn_siguientevine_movil.png">',
        'prevtext' : '<img src="/zignum/public/img/btn_siguientevine_movil.png">'
      });
    }
  });
}

function resize_vine() {
  $("#fade_vine").width($("#link_mezcla").width());
}

window.onresize = resize_vine;

$(window).on('load', function() {
  $("#cont_left_vine").animate({opacity:1},500);
  $("#carrusel_vine").fadeIn();
  return resize_vine();
});
$(document).ready(function(){
  load_vine();
});
