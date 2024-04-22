@section('menu')
<div class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button-->
      <a class="navbar-brand" href="/home" onclick="ga('send', 'event', 'Menu','Menu Superior', 'Logo/Home')">
        <img id="img_logo" src="{{$menu[0]}}" alt="LOGO" />
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="my_navbar">
        <li>
          <a class="show" href="/elmezcal"  onclick="ga('send', 'event', 'Menu','Menu Superior', 'El mezcal')">{{$menu[1]}}</a>
          <div>
            <a class="show_sec" href="/elmezcal"  onclick="ga('send', 'event', 'Menu','Menu Superior', 'El mezcal')">{{$menu[2]}}</a>
          </div>
        </li>
        <li>
          <a class="show" href="/lomasnuevo"  onclick="ga('send', 'event', 'Menu','Menu Superior', 'Lo mas nuevo')">{{$menu[3]}}</a>
          <div>
            <a class="show_sec" href="/lomasnuevo"  onclick="ga('send', 'event', 'Menu','Menu Superior', 'Lo mas nuevo')">{{$menu[4]}}</a>
            <!-- <a class="show_sec" href="/mezclaperfecta" onclick="ga('send', 'event', 'Menu','Menu Superior', 'Mezcla Perfecta')">{{$menu[5]}}</a> -->
          </div>
        </li>
        <li>
          <a class="show" href="/premios" onclick="ga('send', 'event', 'Menu','Menu Superior', 'Premios')">{{$menu[6]}}</a>
          <div>
            <a class="show_sec" href="/premios" onclick="ga('send', 'event', 'Menu','Menu Superior', 'Premios')">{{$menu[7]}}</a>
            <a class="show_sec" href="/galeria" onclick="ga('send', 'event', 'Menu','Menu Superior', 'Galeria')">{{$menu[8]}}</a>
          </div>
        </li>
      </ul>
      @if(Config::get('thor::i18n.enabled'))
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Lang::language()->name}} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">Change language:</li>
            @foreach(Lang::getActiveLanguages() as $i => $lang)
            <li @if($lang->code == Lang::code())class="active"@endif><a href="{{URL::langSwitch($lang->code)}}">{{$lang->name}}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
      @endif
    </div><!--/.nav-collapse -->
    <div class="movil">
      <img id="img_menu" src="/zignum/public/img/menu01.png">
      <ul>
        <li>
          <p>{{$menu[13]}}</p>
          <img id="img_ocultar" src="/zignum/public/img/ocultar-menu.png">
        </li>
        <li>
          <a href="/elmezcal" onclick="ga('send', 'event', 'Menu','Movil', 'El mezcal')"><p class="tit">{{$menu[1]}}</p></a>
        </li>
        <li>
          <p class="tit">{{$menu[3]}}</p>
        </li>
        <li>
          <a href="/lomasnuevo" onclick="ga('send', 'event', 'Menu','Movil', 'Lo mas nuevo')"><p>{{$menu[4]}}</p></a>
        </li>
        <!-- <li>
          <a href="/mezclaperfecta" onclick="ga('send', 'event', 'Menu','Movil', 'Mezcla perfecta')"><p>{{$menu[5]}}</p></a>
        </li> -->
        <li>
          <p class="tit">{{$menu[6]}}</p>
        </li>
        <li>
          <a href="/premios" onclick="ga('send', 'event', 'Menu','Movil', 'Premios')"><p>{{$menu[7]}}</p></a>
        </li>
        <li>
          <a href="/galeria" onclick="ga('send', 'event', 'Menu','Movil', 'Galería')"><p>{{$menu[8]}}</p></a>
        </li>
        <li>
          <p class="tit">{{$menu[14]}}</p>
        </li>
        <li>
          <a href="/cocteleszignumsilver" onclick="ga('send', 'event', 'Menu','Movil', 'Cocteles Silver')"><p>{{$menu[15]}}</p></a>
        </li>
        <li>
          <a href="/cocteleszignumreposado" onclick="ga('send', 'event', 'Menu','Movil', 'Cocteles Reposado')"><p>{{$menu[16]}}</p></a>
        </li>
        <li>
          <a href="/zignumsilver" onclick="ga('send', 'event', 'Menu','Movil', 'Zignum Silver')"><p class="tit">{{$menu[17]}}</p></a>
        </li>
        <li>
          <a href="/zignumreposado" onclick="ga('send', 'event', 'Menu','Movil', 'Zignum Reposado')"><p class="tit">{{$menu[18]}}</p></a>
        </li>
        <li>
          <a href="/zignumanejo" onclick="ga('send', 'event', 'Menu','Movil', 'Zignum Añejo')"><p class="tit">{{$menu[19]}}</p></a>
        </li>
        <li>
          <a href="/contacto" onclick="ga('send', 'event', 'Menu','Movil', 'Contacto')"><p class="tit">{{$menu[20]}}</p></a>
        </li>
      </ul>
    </div>
  </div><!--/.container-fluid -->
</div>
@show