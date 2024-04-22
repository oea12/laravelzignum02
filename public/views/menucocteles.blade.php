@section('menucocteles')
<section class="nav_left">
  <ul>
    <li class="nav_left_option" id="cocteles">
      <a href="cocteleszignumsilver" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'Cocteles', 'Cocteles')">
        <img src="{{$menu[21]}}" alt="Cocteles Zignum" title="Cocteles Zignum">
        <img src="{{$menu[22]}}" alt="Cocteles Zignum" title="Cocteles Zignum">
      </a>
    </li>
    <li class="nav_left_option" id="silver">
      <a href="/cocteleszignumsilver" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'Cocteles', 'Coctel Zilver')">
        <img src="/zignum/public/img/btn-silver-off.png" alt="Zignum Silver" title="Zignum Silver">
        <img src="/zignum/public/img/btn-silver-on.png" alt="Zignum Silver" title="Zignum Silver">
      </a>
    </li>
    <li class="nav_left_option" id="reposado">
      <a href="/cocteleszignumreposado" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'Cocteles', 'Coctel Reposado')">
        <img src="/zignum/public/img/btn-reposado-off.png" alt="Zignum Reposado" title="Zignum Reposado">
        <img src="/zignum/public/img/btn-reposado-on.png" alt="Zignum Reposado" title="Zignum Reposado">
      </a>
    </li>
    <li class="nav_left_option" id="back">
      <a href="/home" onclick="ga('send', 'event', 'Menu','Menu Lateral', 'Cocteles', 'Regresar')">
        <img src="{{$menu[25]}}" alt="Zignum Mezcal home" title="Zignum Mezcal home">
        <img src="{{$menu[26]}}" alt="Zignum Mezcal home" title="Zignum Mezcal home">
      </a>
    </li>
  </ul>
  <div class="social">
    <a target="_blank" href="https://www.facebook.com/ZignumMezcal" class="socicon" alt="facebook Zignum Mezcal" title="facebook Zignum Mezcal" onclick="ga('send', 'event', 'Footer','RS', 'Facebook');">b</a>
    <a target="_blank" href="https://twitter.com/zignummezcal" class="socicon" alt="twitter Zignum Mezcal" title="twitter Zignum Mezcal" onclick="ga('send', 'event', 'Footer','RS', 'Twitter');">a</a>
    <a target="_blank" href="https://vine.co/u/1147306442412412928" class="socicon" alt="vine Zignum Mezcal" title="vine Zignum Mezcal" onclick="ga('send', 'event', 'Footer','RS', 'Vine');">u</a>
  </div>
  <div class="dmp">
    <a href="/mezclaperfecta">
      <img src="/zignum/public/img/BTN-tu-mezcla-Off.png">
      <img src="/zignum/public/img/BTN-tu-mezcla-ON.png">
    </a>
  </div>
</section>
@show