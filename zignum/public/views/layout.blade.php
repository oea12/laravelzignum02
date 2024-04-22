<!DOCTYPE html>
<html lang="{{$doc_lang}}" class="{{implode(' ', $doc_classes)}} view-{{$doc_view_slug}}">
<head>
  <meta charset="{{$doc_charset}}">
  <meta name="viewport" content="{{$doc_viewport}}">
  <meta name="description" content="{{$doc_description}}">
  <meta name="author" content="{{$doc_author}}">
  <meta property="og:title" content="Zignum Mezcal">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://zignummezcal.com.mx">
  <meta property="og:description" content="Zignum Mezcal la nueva forma de mezclar">
  <meta property="og:image" content="http://zignummezcal.com.mx/zignum/public/img/logo_zignumblack.png">
  <meta name="google-site-verification" content="KPr-c8Xd8To7mYgM5XgSgx-VgZGt6M7iy2--PbzMfFk" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="/zignum/public/img/share_zignum.jpg"/>
  <title>{{$doc_title}}</title>
  <meta name="keywords" content="{{$doc_keyword===''?'
  100%,
  Agave, 
  Alcohol, 
  Amigos, 
  Angustifolia, 
  Añejamiento, 
  Añejo, 
  Apple, 
  Arandano, 
  Armando, 
  Autentico, 
  Bar, 
  Bartender, 
  Bebida, 
  Botella, 
  Casa, 
  Celebración, 
  Cocido, 
  Coctelería, 
  Compartir, 
  Corazón, 
  Cristalino, 
  Denominación, 
  Destilado, 
  Diferente, 
  Espaladín, 
  Esperituosa, 
  Fiesta, 
  Fresa, 
  Frozen, 
  Guillermo, 
  Jima, 
  Joven, 
  Kiwi, 
  Madera, 
  Maguey, 
  Margarita, 
  Mexicalli, 
  Mexicana, 
  México, 
  Mezcal, 
  Mezcaleŕia, 
  Mezcla, 
  Neblina, 
  Oaxaca, 
  Origen, 
  Original, 
  Penca, 
  Playa, 
  Premios,
  Prieto, 
  Reconocimiento, 
  Reposado, 
  Shot, 
  Silver, 
  Tierra, 
  Tlacolula, 
  Tropical, 
  Xocolatzin, 
  Zignum,
  100%,
  Agave,
  Alcohol,
  Friends,
  Angustifolia,
  Aging,
  Aged,
  Apple,
  Cranberry,
  Armando,
  Authentic,
  Bar,
  Bartender,
  Beverage,
  Bottle,
  House,
  Celebration,
  Cooked,
  Cocktail,
  Share,
  Heart,
  Crystalline,
  Denomination,
  Distilled,
  Different,
  Espadín,
  Spirituous,
  Party,
  Strawberry,
  Frozen,
  Guillermo,
  Jima,
  Young,
  Kiwi,
  Wood,
  Maguey,
  Margarita,
  Mexicalli,
  Mexican,
  Mexico,
  Mezcal,
  Mescal,
  Mezcalería,
  Mix,
  Fog,
  Oaxaca,
  Origin,
  Original,
  Main rib,
  Beach,
  Awards,
  Dark-hued,
  Acknowledgements,
  Rested,
  Shot,
  Silver,
  Soil,
  Tlacolula,
  Tropical,
  Xocolatzin,
  Zignum
  ':$doc_keyword}}">
  <!-- Bootstrap core CSS -->
  <style type="text/css" id="relativecss">html,body{position:relative;}body *{position:relative}</style>
  <link href="/zignum/public/packages/thor/platform/css/app.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/main.css">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/home.css">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/footer.css">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/mezcales.css">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/cocteles.css">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/contacto.css">
  <link rel="stylesheet" type="text/css" href="{{{isset($vine_css)?$vine_css:''}}}">
  <link rel="stylesheet" type="text/css" href="{{{isset($mezcla_css)?$mezcla_css:''}}}">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/bjqs.css">
  <link rel="stylesheet" type="text/css" href="{{{isset($premios_css)?$premios_css:''}}}">
  <link rel="stylesheet" type="text/css" href="{{{isset($gallery_css)?$gallery_css:''}}}">
  <link href="{{Doc::asset()}}" rel="stylesheet">
  <link href="{{{isset($css)?$css:''}}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/zignum/public/css/responsive.css">
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59774733-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<body>
  @yield('main')
  @include('footer')
  <script type="text/javascript" src="/zignum/public/js/jquery.js"></script>
  <script type="text/javascript" src="/zignum/public/js/particle.js"></script>
  <script type="text/javascript" src="/zignum/public/js/jquery.cookie.js"></script>
  <script type="text/javascript" src="/zignum/public/js/social_twitter.js"></script>
  <script type="text/javascript" src="/zignum/public/js/velocity.js"></script>
  <script type="text/javascript" src="/zignum/public/js/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="/zignum/public/js/animation_nav_left.js"></script>
  <script type="text/javascript" src="/zignum/public/js/main.js"></script>
  <script type="text/javascript" src="/zignum/public/js/home.js"></script>
  <script type="text/javascript" src="{{{isset($cocteles_js)?$cocteles_js:''}}}"></script>
  <script type="text/javascript" src="{{{isset($mezcla_js)?$mezcla_js:''}}}"></script>
  <script type="text/javascript" src="{{{isset($vine_js)?$vine_js:''}}}"></script>
  <script type="text/javascript" src="/zignum/public/js/bjqs-1.3.min.js"></script>
  <script type="text/javascript" src="{{{isset($gallery_js)?$gallery_js:''}}}"></script>
  <script type="text/javascript" src="{{{isset($js)?$js:''}}}"></script>
  <script type="text/javascript" src="/zignum/public/js/validate_contacto.js"></script>
</body>
</html>
