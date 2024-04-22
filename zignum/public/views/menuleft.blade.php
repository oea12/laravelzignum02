@section('menuleft')
<section class="nav_left">
  <ul class="desc">
    <li class="nav_left_option" id="cocteles" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'General', 'Cocteles')">
      <a href="cocteleszignumsilver">
        <img src="{{$menu[21]}}" alt="Cocteles Zignum" title="Cocteles Zignum">
        <img src="{{$menu[22]}}" alt="Cocteles Zignum" title="Cocteles Zignum">
      </a>
    </li>
    <li class="nav_left_option" id="silver">
      <a href="/zignumsilver" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'General', 'Zignum Silver')">
        <img src="/zignum/public/img/btn-silver-off.png" alt="Zignum Silver" title="Zignum Silver">
        <img src="/zignum/public/img/btn-silver-on.png" alt="Zignum Silver" title="Zignum Silver">
      </a>
    </li>
    <li class="nav_left_option" id="reposado">
      <a href="/zignumreposado" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'General', 'Zignum Reposado')">
        <img src="/zignum/public/img/btn-reposado-off.png" alt="Zignum Reposado" title="Zignum Reposado">
        <img src="/zignum/public/img/btn-reposado-on.png" alt="Zignum Reposado" title="Zignum Reposado">
      </a>
    </li>
    <li class="nav_left_option" id="aniejo">
      <a href="/zignumanejo" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'General', 'Zignum Añejo')">
        <img src="/zignum/public/img/btn_P-aniejo-Off.png" alt="Zignum Añejo" title="Zignum Añejo">
        <img src="/zignum/public/img/btn_P-aniejo-ON.png" alt="Zignum Añejo" title="Zignum Añejo">
      </a>
    </li>
  </ul>
  <div class="social">
    <a target="_blank" href="https://www.facebook.com/ZignumMezcal" class="socicon" onclick="ga('send', 'event', 'Footer','RS', 'Facebook');">b</a>
    <a target="_blank" href="https://twitter.com/zignummezcal" class="socicon" onclick="ga('send', 'event', 'Footer','RS', 'Twitter');">a</a>
    <a target="_blank" href="https://vine.co/u/1147306442412412928" class="socicon" onclick="ga('send', 'event', 'Footer','RS', 'Vine');">u</a>
  </div>
  <div class="dmp">
    <a href="/mezclaperfecta">
      <img src="/zignum/public/img/BTN-tu-mezcla-Off.png">
      <img src="/zignum/public/img/BTN-tu-mezcla-ON.png">
    </a>
  </div>
</section>
@show