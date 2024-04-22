/*
var share_twitter = "";     
$.ajax({
    type: "POST",
    url:'/social/' ,
    dataType: "json",
    success: function(data){
        share_twitter= "https://twitter.com/intent/tweet?&text="/*+data.social_12.title+" "*//*+data.social_12.description+"&hashtags=LaDescargaCrunch";
    },
    error: function(data){
        //console.error(data);
    }
});
*/

$('#popup_twitter').click(function(event) {
    if($.cookie("lengua") == "es"){
        var width  = 400,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    =  "https://twitter.com/intent/tweet?&text="+"Mezcal%20premium%20100%25%20agave.%20www.zignummezcal.com%20Para%20mayores%20de%2018%20a%C3%B1os.%20www.alcoholinformate.org.mx%20%23EviteElExceso%20%23ZignumMezcal";
        opts   = 'status=1' +
        ',width='  + width  +
        ',height=' + height +
        ',top='    + top    +
        ',left='   + left;
        window.open(url, 'twitter', opts);
        return false;
    }else{
        var width  = 400,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    =  "https://twitter.com/intent/tweet?&text="+"Premium%20mezcal%20100%25%20agave.%20www.zignummezcal.com%20For%20over%2018%20years.%20www.alcoholinformate.org.mx%20%23EviteElExceso%20%23ZignumMezcal";
        opts   = 'status=1' +
        ',width='  + width  +
        ',height=' + height +
        ',top='    + top    +
        ',left='   + left;
        window.open(url, 'twitter', opts);
        return false; 
    }
});

