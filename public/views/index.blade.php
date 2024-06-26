@extends('layout')
@section('main')
<section id="cont">
	<section id="cont_view">
		<section id="view">
			<p id="welcome">BIENVENIDO A:</p>
			<img id="img_logo_index" src="{{$menu[0]}}" alt="Logo Zignum Mezcal" title="Logo Zignum Mezcal">
			<p id="text_intro">PROPORCIONA TU EDAD
				PARA SABER SI ERES MAYOR DE EDAD.
			</p>
			<div id="birthDate">
				<div>
					<p id="day">DÍA</p>
					<div id="select">
						<select id="days" class="date">
							<option value="1" class="select-selected">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
						</select>
					</div>
				</div>
				<div>
					<P id="month">MES</P>
					<div>
						<select id="month" class="date">
							<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
						</select>
					</div>
				</div>
				<div>
					<P id="year">AÑO</P>
					<div>
						<select id="years" class="date">
							<option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>
						</select>
					</div>
				</div>
			</div>
			<div id="recordar">
				<input id="recuerda" type="checkbox" onclick="ga('send', 'event', 'Landing','Recuerdame');">
				<label id ="rememberme">Recuérdame</label>
			</div>
			<div id="cont_send">
				<button id="send">ENVIAR</button>
				<img id="img_boton" src="/zignum/public/img/btnover-enviar.jpg">
			</div>

			<div class="social">
				<a target="blank" href="https://www.facebook.com/ZignumMezcal" class="socicon" onclick="ga('send', 'event', 'Footer','RS', 'Facebook');">b</a>
				<a target="blank" href="https://twitter.com/zignummezcal" class="socicon" onclick="ga('send', 'event', 'Footer','RS', 'Twitter');">a</a>
				<a target="blank" href="https://vine.co/u/1147306442412412928" class="socicon" onclick="ga('send', 'event', 'Footer','RS', 'Vine');">u</a>
			</div>
			<div id="lenguage">
				<p id ="idioma" class="id">Idioma:</p>
				<a id ="esp" class="id selected" onclick="ga('send', 'event', 'Landing','Idioma', 'Español');">ESPAÑOL</a>
				<p class="id">/</p>
				<a id ="ing"class="id" onclick="ga('send', 'event', 'Landing','Idioma', 'Inglés');">INGLÉS</a>
			</div>
		</section>
	</section>
</section>
<section id="note">
	<img id="exit_note" onClick="exitNote()" src="/zignum/public/img/btn-cerrarlightbox.jpg">
	<p id="sorry">LO SENTIMOS
		PERO NO TIENES LA EDAD
		REQUERIDA PARA ENTRAR A 
		ESTE SITIO
	</p>
</section>
<section id="save">
	<p id="select-value_days"></p>
	<p id="select-value_month"></p>
	<p id="select-value_years"></p>
</section>
@stop