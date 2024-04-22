//-----------HOVER-------------
//Mouseover de los iconos de redes sociales
$(".socicon").hover(function(){
	$(this).addClass("socicon_hover_in");
	$(this).removeClass("socicon_hover_out");
},function(){
	$(this).removeClass("socicon_hover_in");
	$(this).addClass("socicon_hover_out");
});
//Mouseover del boton de compartir twitter
$("#popup_twitter").hover(function(){
	$(this).addClass("tw_hover_in");
	$(this).removeClass("tw_hover_out");
},function(){
	$(this).removeClass("tw_hover_in");
	$(this).addClass("tw_hover_out");
});
//Mouseover del boton de regresar 
$("#back").hover(function(){
		$("#back a img:nth-child(1)").css({display:"none"});
		$("#back a img:nth-child(2)").css({display:"block"}).animate({opacity:"1"},500);
}, function(){
		$("#back a img:nth-child(2)").animate({opacity:".5"},500);
		setTimeout(function(){	
			$("#back a img:nth-child(2)").css({display:"none"});
			$("#back a img:nth-child(1)").css({display:"block"});
		},500);
});
//Mouseover del boton de cocteles 
$("#cocteles").hover(function(){
		$("#cocteles a img:nth-child(2)").fadeIn("slow");
}, function(){
		$("#cocteles a img:nth-child(2)").fadeOut("slow");
});
//Mouseover del boton de silver 
$("#silver").hover(function(){
		$("#silver a img:nth-child(2)").fadeIn("slow");
}, function(){
		$("#silver a img:nth-child(2)").fadeOut("slow");
});
//Mouseover del boton de reposado
$("#reposado").hover(function(){
		$("#reposado a img:nth-child(2)").fadeIn("slow");
}, function(){
		$("#reposado a img:nth-child(2)").fadeOut("slow");
});
//Mouseover del boton de añejo
$("#aniejo").hover(function(){
		$("#aniejo a img:nth-child(2)").fadeIn("slow");
}, function(){
		$("#aniejo a img:nth-child(2)").fadeOut("slow");
});
$(".dmp").hover(function(){
		$(".dmp a img:nth-child(2)").fadeIn("slow");
}, function(){
		$(".dmp a img:nth-child(2)").fadeOut("slow");
});
//Mouseover de los botones del menu 
$(".my_navbar li").hover(function(){
	$(this).children("div").fadeIn();
},function(){
	$(this).children("div").fadeOut();
});
//Mouseover de los botones del menu desplegado
$(".my_navbar li div").hover(function(){
	$(this).children("div").fadeIn();
},function(){
	$(this).children("div").fadeOut();
});
$("#img_menu").click(function(){
	$(".movil ul").animate({left:"0px"});
});
$(".movil ul li:first-child").click(function(){
	$(".movil ul").animate({left:"-230px"});
});
//Muestra el aviso de privacidad
function click_aviso(){
	if($.cookie("lengua") == "en"){
		$("#avi p").html(aviso_en);
	}else{
		$("#avi p").html(aviso_es);
	}
	$("#avi").fadeIn();
	$("body, html").css({"overflow-y": "hidden"});
	setTimeout(function(){
		$("#Av").css({left: $("#avi p").position().left + $("#avi p").width() + 30, top: $("#avi p").position().top});
	}, 150);
}
//Muestra los terminos y condiciones
function click_term(){
	if($.cookie("lengua") == "en"){
		$("#term p").html(term_en);
	}else{
		$("#term p").html(term_es);
	}
	$("#term").fadeIn();
	$("body, html").css({"overflow-y": "hidden"});
	setTimeout(function(){
		$("#Tm").css({left: $("#term p").position().left + $("#term p").width() + 30, top: $("#term p").position().top});
	}, 150);
}
function exitAvTm() {
	$(".lbox").fadeOut();
	$("body, html").css({"overflow-y": "auto"});
}

function download(name) {
	console.log("download");
	var ruta = name == "form" ? "/formulario" : "/procedimiento";
	$.ajax({
      type: "GET",
      url:ruta ,
      success: function(data){
        console.log(data);
      },
      error: function(data){
        console.error(data);
      }
    });
}
		var aviso_es = "<b>POLÍTICA DE PRIVACIDAD DEL SITIO WEB (AVISO DE PRIVACIDAD):</b><br>"+
"CASA ARMANDO GUILLERMO PRIETO, S.A. DE C.V. (en lo sucesivo “CAGP”) esta comprometido a proteger y respetar su privacidad. Esta Política de Privacidad y/o Aviso de Privacidad (junto con los Términos y Condiciones de Uso del Sitio Web y la Política sobre Cookies e IP’s) son los que gobiernan el uso y las finalidades de la información recopilada sobre Usted. Por favor lea lo siguiente para entender nuestros puntos de vista y prácticas respecto a sus datos personales y cómo vamos a tratarlos. Aunque estamos comprometidos a mantener su seguridad y confianza en todas nuestras actividades con Usted, esta Política de Privacidad no rige nuestra recopilación y/o el uso de sus datos a través de canales distintos del presente Sitio Web. <br>"+
"Por favor salga de este Sitio Web de inmediato si Usted no acepta esta Política y/o Aviso de Privacidad, o bien si no tiene la edad legal para consumir bebidas alcohólicas (como se define en los Términos y Condiciones de Uso del Sitio Web) en el país u otro territorio en el que se encuentra o está accediendo a nuestro Sitio en un país u otro territorio donde no se permite el uso de nuestro Sitio.<br>"+
"CAGP con domicilio en Periférico Sur No. 4829, Interior 604, Col. Parques del Pedregal, Del. Tlalpan, Ciudad de México, Distrito Federal, México, le informa que puede obtener, transferir, almacenar y hacer uso de los datos personales que nos proporcione a través del presente Sitio Web, mismos que serán utilizados exclusivamente para acceder a este Sitio Web, así como en su caso, para efectos de ofrecerle publicidad y aquellos servicios que se llegaren a ofrecer y/o prestar en este Sitio Web; así como para otras actividades cuyo acceso exija que el Usuario esté registrado, por lo tanto, sus datos serán utilizados con las siguientes finalidades:<br>"+
"	•	Ingresar al presente Sitio Web.<br>"+
"	•	En su caso, registrar y atender sus solicitudes de reservación y/o compra de nuestros productos.<br>"+
"	•	En su caso, cobro y facturación de los productos y servicios adquiridos.<br>"+
"	•	Atender sus consultas y sugerencias.<br>"+
"	•	Hacer de su conocimiento, promociones, concursos, certámenes y actividades organizadas por CAGP así como sus empresas subsidiarias y/o afiliadas y/o relacionadas.<br>"+
"	•	Documentar sus visitas o eventos.<br>"+
"	•	Realizar encuestas de satisfacción.<br>"+
"	•	Suscribirse a nuestro boletín informativo.<br>"+
"	•	Informarle acerca de nuestros eventos.<br>"+
"	•	Mantener el control de las personas (Usuarios) que acceden al presente Sitio Web.<br>"+
"	•	Participar en la investigación, promoción y comercialización de los servicios y/o productos; por lo que podrán ser puestos a disposición de empresas relacionadas corporativamente y/o contractualmente con CAGP.<br>"+
"	•	El país correcto u otro territorio en el que Usted se encuentra y/o está accediendo al Sitio Web; así como su fecha de nacimiento correcta, lo que requerimos que Usted envíe con precisión para asegurarnos que no se acceda a este Sitio Web si Usted no tiene una edad legal para consumir bebidas alcohólicas en el país o territorio en el que se encuentra o está accediendo a nuestro Sitio Web.<br>"+
"Le informamos que es posible que al asistir a los eventos de CAGP tomemos fotografías y que las mismas sean compartidas en medios de comunicación y redes sociales.<br>"+
"CAGP es el responsable de los datos personales que le recaban y por lo tanto realiza el tratamiento de sus datos personales de conformidad con los principios de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad, en términos de lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento (en lo sucesivo la “Ley”).<br>"+
"Con la finalidad de impedir el acceso y revelación no autorizada, mantener la exactitud de los datos personales y garantizar la utilización correcta de la información, CAGP utiliza los procedimientos físicos, tecnológicos y administrativos apropiados para proteger la información que recaba.<br>"+
"La información personal que nos ha proporcionado se guarda en bases de datos controladas y con acceso limitado de conformidad con la Ley.<br>"+
"Usted podrá ejercer sus derechos de acceso, rectificación, cancelación y/u oposición, también conocidos como “Derechos ARCO”, así como la revocación de su consentimiento a la siguiente dirección de correo electrónico:<br>"+
"<a href='mailto:contacto@agpch.mx'>contacto@agpch.mx</a><br>"+
"CAGP pone a su disposición el procedimiento por el cual puede ejercer sus Derechos ARCO y revocación del consentimiento en el domicilio para oír y recibir notificaciones antes indiciado.<br>"+
"Hacemos de su conocimiento que CAGP se abstendrá de vender, arrendar y/o transferir sus datos personales. Únicamente compartirá su información personal en los siguientes supuestos:<br>"+
"a) Con empresas con las que sostenga una relación corporativa y/o contractual;<br>"+
"b) En su caso, con las instituciones bancarias que sean utilizadas para compra de nuestros productos.<br>"+
"En virtud de lo anterior las personas a las que se les realice la transferencia de datos personales no podrán utilizar la información proporcionada por CAGP de manera diversa a la establecida en el presente Aviso. Estas transferencias de datos serán realizadas con todas las medidas de seguridad apropiadas, de conformidad con los principios contenidos en la Ley.<br>"+
"Si hubiere una vulneración de seguridad en cualquier fase del tratamiento de sus datos personales, CAGP por correo electrónico a través de la figura del responsable, hará de su conocimiento el suceso de vulneración de seguridad de manera inmediata, para que pueda tomar las medidas necesarias correspondientes para la defensa de sus derechos. En caso de no contar con su correo electrónico, la notificación se publicará en el presente Sitio Web.<br>"+
"Con objeto de que pueda limitar el uso y divulgación de su información personal, Usted cuenta con los siguientes medios:<br>"+
"a) Inscripción en el Registro Público de Consumidores y/o en el Registro Público de Usuarios para evitar publicidad, los cuales están a cargo de la Procuraduría Federal del Consumidor (“PROFECO”) y de la Comisión Nacional para la Protección y Defensa de los Usuarios de Servicios Financieros (“CONDUSEF”) respectivamente, con la finalidad de que sus datos personales no sean utilizados para recibir publicidad o promociones de empresas de bienes o servicios. Para mayor información sobre este registro, usted puede consultar los portales de Internet de la PROFECO y CONDUSEF, o bien ponerse en contacto directo con éstas.<br>"+
"b) Si Usted considera que su derecho a la protección de sus datos personales ha sido lesionado por alguna conducta u omisión de nuestra parte, o presume alguna violación a las disposiciones previstas en la Ley, podrá interponer su inconformidad o denuncia ante el Instituto Federal de Acceso a la Información y Protección de Datos (“IFAI”). Para mayor información, le sugerimos visitar su página oficial de Internet <a href='http://www.ifai.org.mx' target='_blanck'>www.ifai.org.mx</a>.<br>"+
"El registro en el presente Sitio Web exige que los datos sean facilitados de forma veraz y completa, dichos datos se actualizarán a través de su cooperación. Si los datos personales que nos llegue a proporcionar fueran incompletos o inexactos o no se actualizan en tiempo, CAGP por ese solo hecho, quedará liberado de cualquier responsabilidad que surja a consecuencia de ello.<br>"+
"De conformidad con lo establecido en la legislación, una vez leído el presente Aviso de Privacidad se considerará que está Usted de acuerdo con la recopilación, tratamiento, transmisión, uso y almacenamiento antes mencionado de los datos personales proporcionados a CAGP.<br>"+
"CAGP se reserva el derecho a modificar el presente aviso de privacidad, mismo que se anunciará en este Sitio Web y en el domicilio antes indicado con razonable antelación a su puesta en práctica.<br>"+
"<br>"+
"<a href='/formulario' onclick('download('form')')>Descargar Formulario Derechos ARCO</a><br>"+
"<a href='/procedimiento' onclick('download('pros')')>Descargar Procedimiento de Atención Derechos ARCO</a><br>"+
"<br>"+
"<b>POLÍTICA SOBRE COOKIES E IP’S:</b><br>"+
"CAGP podrá recopilar información sobre su ordenador (incluyendo, cuando sea posible, su dirección de IP, sistema operativo y tipo de navegador) para la administración del sistema y para brindar información general a nuestros anunciantes. Se trata de datos estadísticos sobre las acciones y patrones de navegación de nuestros usuarios, y no identifica a ninguna persona. Nuestros servidores de Internet también pueden realizar un seguimiento del número de visitantes a nuestros sitios, las páginas visitadas y cuánto tiempo permanecieron. Ninguna de esta información incluye cualquier información personal sobre Usted.<br>"+
"Esta política pretende informarle cómo el Sitio Web utiliza una tecnología llamada cookies y registros del servidor web. Esta política está destinada a ayudarle a tomar decisiones informadas al usar este Sitio Web. Por favor, tómese un minuto para leer y entender esta política.<br>"+
"¿Qué son las cookies? ¿Qué hacen?<br>"+
"Una cookie es un pequeño documento de texto, que a menudo incluye un identificador único anónimo. Cuando usted visita un sitio web, la computadora de ese sitio pide a su equipo permiso para guardar este archivo en una parte de su disco duro específicamente designado para las cookies.<br>"+
"La información recopilada a través de cookies y registros del servidor web puede incluir la fecha y hora de las visitas, las páginas visitadas y el tiempo de estancia en este Sitio Web.<br>"+
"Para más información sobre las cookies, busque en Internet en donde podrá  encontrar amplia información sobre las cookies y tecnologías similares. <br>"+
"Consentimiento para el uso de cookies en este Sitio Web<br>"+
"Al continuar usando nuestro Sitio Web, se considera que dará su consentimiento para el uso de las cookies que se describen en esta política de cookies.<br>"+
"Bloqueo del uso de cookies<br>"+
"Puede bloquear el uso de cookies activando la configuración en su navegador. Por favor, visite Todo sobre Cookies donde se puede encontrar amplia información sobre el manejo de cookies y bloqueo para una amplia variedad de navegadores.<br>"+
"¿Qué pasa si bloqueo las cookies?<br>"+
" Para utilizar ciertos servicios ofrecidos a través de nuestro Sitio Web, su navegador debe aceptar cookies. Si decide negar su consentimiento, o posteriormente bloquear las cookies, algunos aspectos de la Web pueden no funcionar correctamente y es posible que no pueda acceder a toda o parte de nuestro Sitio Web. <br>"+
"<br>"+
"Cómo utilizamos las cookies<br>"+
"Si el acceso a nuestro sitio Web requiere que introduzca su fecha de nacimiento y país, las cookies nos permiten recordar los datos que ha introducido, por lo que no necesitamos pedirle que vuelva a introducirlos cada vez que usted navega a una página diferente del Sitio Web.<br>"+
"También utilizamos 'Webtrend Analytics' cookies que, junto con los archivos de registro de nuestro servidor web, nos permiten calcular el número total de personas que visitan nuestro Sitio Web y que partes son las más populares de nuestro portal. Esto nos ayuda a recopilar información para que podamos mejorar nuestro Sitio Web y servir mejor a nuestros clientes. Por lo general no guardamos ninguna información personal que usted nos proporciona en una cookie. La finalidad de las cookies Webtrend Analytics es el almacenamiento de información, como la vez que visitó el Sitio Web, y si usted lo ha visitado antes (y el sitio web que visitó antes de visitar nuestro Sitio Web).<br>"+
"También podemos utilizar 'Social Media' cookies para personalizar su interacción con plataformas de redes sociales, como Twitter® y Facebook®, donde nuestro Sitio Web utiliza estas características. Estas cookies reconocen a los usuarios de redes sociales cuando Usted ve contenidos de redes sociales en nuestro Sitio Web. También le permiten compartir contenido rápidamente a través de los de las redes de comunicación, a través del simple uso del botón  'compartir'. Utilizamos las siguientes cookies medios sociales: Twitter®, Facebook®, WebTrends®, Google Analytics®.<br>"+
"La mayor parte de nuestras cookies expiran dentro de los 30 días, aunque nuestras cookies  analíticas pueden persistir entre 2 y 10 años.";
		var term_es = "<b>TÉRMINOS Y CONDICIONES DEL USO DEL SITIO:</b> www.zignummezcal.com:<br>"+
"Los términos y condiciones aquí contenidos regulan el uso del sitio www.zignummezcal.com; así como de todas y cualquiera de las otras plataformas en línea y/o digitales, incluyendo móviles y otras aplicaciones, como son de manera enunciativa, más no limitativa, las aplicaciones de Facebook® y Twitter® (en lo sucesivo el “Sitio Web” y/o el “Sitio”) cuya  propiedad corresponde a Casa Armando Guillermo Prieto, S.A. de C.V. (en lo sucesivo “CAGP”), quien tiene su domicilio en Periférico Sur No. 4829, Interior 604, Col. Parques del Pedregal, Del. Tlalpan, C.P. 14010, Ciudad de México, Distrito Federal.<br>"+
"Por favor lea estos términos y condiciones de uso antes de empezar a utilizar nuestro Sitio.<br>"+
"Al acceder y utilizar el Sitio, y en su caso, contratar los servicios que en él se ofrecen, Usted se obliga a respetar y aceptar  todos los Términos y Condiciones de Uso, notificaciones y cláusulas de exclusión de responsabilidad, que se establecen en los presentes Términos y Condiciones de Uso. La aceptación de los Términos y Condiciones de Uso aquí previstos será un paso previo e indispensable, para la adquisición en su caso, de cualquier servicio que esté disponible en el Sitio.<br>"+
"CAGP se reserva el derecho de realizar cambios y/o modificaciones a los Términos y Condiciones de Uso establecidos en el Sitio que considere necesarios o convenientes en cualquier momento sin necesidad de aviso y/o notificación previa a los usuarios del Sitio. Usted podrá verificar y consultar de manera continua estos Términos y Condiciones de Uso con el objeto de conocer dichos cambios y/o modificaciones.<br>"+
"Este Sitio está reservado y dirigido única y exclusivamente a aquellas personas o usuarios que legalmente están permitidos por las leyes aplicables para comprar y consumir bebidas alcohólicas, en Países y territorios, donde la venta, publicidad y consumo de bebidas alcohólicas, es legal y permitido. En el caso de México, Estados Unidos Mexicanos, únicamente los usuarios mayores de edad, es decir, mayores a 18 años, son los que podrán acceder y hacer uso del Sitio.<br>"+
"Por favor salga de nuestro Sitio de inmediato si Usted no acepta estos Términos y Condiciones de Uso, y/o si Usted no tiene la edad legal para consumir bebidas alcohólicas en el País u otro territorio en el que se encuentra, o si Usted está accediendo a nuestro sitio en un País u otro territorio donde no se permite el uso de nuestro Sitio. <br>"+
"CAGP a través del Sitio proporciona información acerca de sus productos y servicios y ofrece a Usted la posibilidad de su consulta.<br>"+
"Los Usuarios deberán utilizar el Sitio de forma responsable y con fines lícitos de conformidad con los presentes Términos y Condiciones de Uso. <br>"+
"A continuación se enumeran de forma enunciativa mas no limita las actividades de las que el Usuario se deberá abstener en relación con el uso del Sitio: (i) Distribuir, divulgar, anunciar o publicar cualquier información o material que degrade, desprestigie, avergüence, humille o amenace a las personas; (ii) Abusar, difamar, hostigar, acusar, amenazar o de alguna otra manera infringir los derechos de otro; (iii) Distribuir, divulgar, anunciar o publicar cualquier material o información indecente que infrinja los derechos de terceros; (iv) Anunciar o enviar, o de cualquier otra forma divulgar información confidencial, secretos de negocios, ya sean industriales o comerciales u otros datos exclusivos, confidenciales y/o protegidos por cualquier ley o reglamento en México y/o en el extranjero; (v) Copiar o crear trabajos derivados de, desplegar, distribuir, otorgar bajo licencia, realizar, publicar, recrear, reproducir, vender, transferir o transmitir cualquier información, productos, servicios o software obtenidos por, desde o a través del Sitio; (vi) Vigilar o copiar cualquier contenido por medio de cualquier proceso; (vii) Participar en cualquier otra conducta que esté o que CAGP considere que está en conflicto con los Términos y Condiciones de Uso, y; (viii) En general, realizar cualquier acto en contra de la legislación vigente, la moral y las buenas costumbres.<br>"+
"Usted es responsable de hacer todos los arreglos necesarios para que Usted tenga acceso al Sitio. Usted también es responsable de asegurar que todas las personas que acceden al Sitio a través de su conexión a Internet son conscientes de estos Términos y Condiciones de Uso, y que cumplan con ellos.<br>"+
"INFORMACIÓN ACERCA DE USTED Y SUS VISITAS A NUESTRO SITIO Y EVENTOS.<br>"+
"La privacidad de los Usuarios del Sitio es muy importante para CAGP. Toda la información que le sea recabada a los Usuarios del Sitio será procesada y tratada de conformidad con la Política de Privacidad de CAGP. Al utilizar el Sitio, Usted acepta el procesamiento y garantiza que los datos proporcionados por Usted son exactos y precisos.<br>"+
"PROPIEDAD INDUSTRIAL E INTELECTUAL.<br>"+
"CAGP así como sus empresas subsidiarias, filiales y/o relacionadas, así como sus licenciantes y licenciatarios, ostentan, ya sea por sí mismos, y/o por virtud de la celebración de algún contrato con terceros, todos los derechos sobre el contenido y diseño del Sitio y, en especial, de forma enunciativa mas no limitativa sobre las campañas, fotografías, imágenes, textos, logotipos, diseños, marcas, nombres comerciales, audios, videos, datos y software (incluido el código, interfaz y estructura del Sitio) que se incluyen en dicho Sitio. Tales derechos están protegidos por la legislación vigente y aplicable en materia de Propiedad Industrial e Intelectual.<br>"+
"Queda totalmente prohibida la copia, reproducción, adaptación, modificación, distribución, comercialización, comunicación pública del Sitio y/o cualquier otra acción que constituya una infracción a la legislación vigente en materia de Propiedad Industrial e Intelectual, así como el uso de los contenidos del Sitio si no es con la previa autorización expresa y por escrito de CAGP.<br>"+
"CAGP informa que el solo hecho de acceder y consultar el Sitio NO concede licencia, autorización o derecho implícito alguno sobre los derechos de Propiedad Intelectual e Industrial o sobre cualquier otro derecho o propiedad relacionado, directa o indirectamente, con los contenidos incluidos en el Sitio.<br>"+
"Zignum®, Señorío®, son marcas registradas ante el Instituto Mexicano de la Propiedad Industrial, de conformidad con la Ley de Propiedad Industrial, propiedad de CAGP, por lo que cualquier uso no autorizado de las mismas, será sancionado de conformidad con la legislación aplicable vigente.<br>"+
"NEGACIÓN DE GARANTÍAS Y LIMITANTES A LA RESPONSABILIDAD. <br>"+
"CAGP actuará diligentemente para que el contenido del Sitio esté disponible en todo momento, sin embargo, CAGP podrá en cualquier momento y sin previo aviso interrumpir o cancelar el acceso al Sitio y/o a su contenido sin responsabilidad alguna para CAGP.<br>"+
"CAGP, en ningún caso será responsable por los daños y perjuicios derivados y/o relacionados con el uso del Sitio y/o su contenido, incluyendo sin limitar, la pérdida de datos, información o programas, daños a las computadoras o redes, virus. Estos Términos y Condiciones de Uso y/o el contenido del Sitio pueden contener errores y/o inexactitudes.<br>"+
"Existen terceras personas diferentes a CAGP y a Usted, quienes podrían llegar a tener acceso al contenido del Sitio y éstos podrían cambiar y/o eliminar dicho contenido sin la autorización de CAGP. CAGP le informa que en ningún caso será responsable en el supuesto de que dichos cambios efectuados, sin autorización de CAGP, se hagan por terceras personas que afecten el contenido del Sitio.<br>"+
"No hay más garantías por parte de CAGP que las que corresponden en su caso a los servicios prestados por CAGP conforme a este documento y que están expresadas en éstos Términos y Condiciones de Uso. CAGP no reconoce ni reconocerá garantías de cualquier tipo o naturaleza que no estén aquí precisadas. Ninguna información que haya sido provista por agentes o empleados de CAGP o cualquier tercero autorizado por éste o por el Sitio, podrá crear garantías de ningún tipo en relación con los Términos y Condiciones de Uso y/o el Sitio.<br>"+
"Los productos y en su caso servicios que se ofrecen en el Sitio son los únicos autorizados por CAGP, por lo que éste no será responsable por cualquier otro producto o en su caso servicio ofrecido por cualquier tercero distinto a CAGP.<br>"+
"El Sitio podrá contener grupos de discusión, grupos de noticias, tableros de noticias, salas de chat y otros servicios en los que participen terceras personas diferentes a CAGP y al Usuario. CAGP no será responsable de las comunicaciones y/o diálogos en el transcurso de los debates, foros, o chats que se organicen a través del Sitio y/o páginas de enlace, ni responderá, por tanto, de los eventuales daños y prejuicios que sufran los Usuarios a consecuencia de dichas comunicaciones o diálogos. La información que el Usuario proporcione en dichas situaciones es pública por lo que CAGP recomienda no proporcionar datos personales y/o información privada relativa a los Usuarios.<br>"+
"Al utilizar el Sitio, Usted acepta en forma expresa que el uso del Sitio se realiza bajo su exclusivo riesgo. El Sitio se proporciona 'tal como está' y 'como está disponible'. Ni CAGP, ni sus afiliadas, subsidiarias y relacionadas, así como tampoco sus respectivos funcionarios, directores, empleados, agentes, proveedores de contenidos de terceros, diseñadores, contratistas, distribuidores, vendedores, patrocinadores, concedentes y demás (en lo sucesivo “Asociados”) garantizan que el uso del Sitio no sufrirá interrupciones ni contendrá errores. Además, CAGP no declara que el contenido provisto en el Sitio sea aplicable a, ni de uso apropiado en, lugares fuera de México. Ningún tipo de asesoramiento verbal ni información por escrito por parte de CAGP o sus Asociados constituirá una garantía.<br>"+
"Bajo ninguna circunstancia CAGP ni sus Asociados serán responsables de ningún daño directo, indirecto, imprevisto, especial ni emergente que se genere, ya sea por el uso o su falta de capacidad para usar el Sitio, incluidos de forma enunciativa más no limitativa, los daños que surjan a raíz de su confianza en la información obtenida en el Sitio que ocasione errores, omisiones, interrupciones, eliminación o corrupción de archivos, virus, demoras en la operación o transmisión, o cualquier otro tipo de error en el funcionamiento. La limitación de responsabilidad precedente se aplicará en toda acción legal, ya sea por contrato, agravio o cualquier otro reclamo, aun cuando un representante autorizado de CAGP haya sido informado o debiera tener conocimiento de la posibilidad de dichos daños. El Usuario reconoce que este párrafo se aplicará a todo contenido y en su caso servicios disponibles por medio del Sitio.<br>"+
"Asimismo, CAGP no será responsable si por cualquier razón el Sitio no está disponible en cualquier momento o por cualquier período.<br>"+
"Si a Usted se le proporciona un código de identificación de usuario, contraseña o cualquier otra pieza de información como parte de un sistema de registro o de un procedimiento de seguridad, Usted deberá tratar dicha información como confidencial, y no deberá revelarla a cualquier tercero. CAGP no será responsable, directa o indirectamente, de ninguna manera por cualquier pérdida o daño de cualquier tipo incurridos como resultado de, o en conexión con, la falta de cumplimiento con estos Términos y Condiciones de Uso. CAGP tiene el derecho de desactivar cualquier código de identificación de usuario o contraseña, ya sea elegido por Usted o asignado por CAGP, en cualquier momento, si en la opinión de CAGP, Usted ha incumplido cualquiera de las disposiciones de estos Términos y Condiciones de Uso. De vez en cuando, es posible restringir el acceso a algunas partes del Sitio, o de todo el Sitio, para los usuarios que se hayan registrado con CAGP.<br>"+
"SUPERVIVENCIA DE LOS TÉRMINOS Y CONDICIONES.<br>"+
"En el caso de que alguna autoridad judicial y/o administrativa declare la nulidad de algún inciso, párrafo o cláusula de los presentes Términos y Condiciones de Uso, los demás incisos, párrafos y cláusulas del presente instrumento continuarán siendo obligatorios para las partes.<br>"+
"INDEMNIZACIÓN. <br>"+
"Usted reconoce y acepta que será responsable de indemnizar y sacar a paz y a salvo a CAGP, sus filiales, subsidiarias y/o cualquier sociedad relacionada corporativamente con ésta, por los daños y perjuicios derivados del incumplimiento a lo establecido en estos Términos y Condiciones de Uso, así como de los daños y perjuicios que deriven de o se relacionen con el uso indebido que Usted haga del Sitio.<br>"+
"ENCABEZADOS E INCISOS. <br>"+
"Todos los títulos, encabezados e incisos de los presentes Términos y Condiciones de Uso se utilizan únicamente para facilitar referencias por lo que no afectarán el contenido o interpretación de los mismos.<br>"+
"JURISDICCIÓN Y LEY APLICABLE.<br>"+
"Para resolver cualquier controversia o conflicto que se derive de los presentes Términos y Condiciones de Uso, de la visita o uso del Sitio, y en su caso de aquellos relacionados con la adquisición de productos o servicios a través del Sitio, las partes se someten a las leyes aplicables de la República Mexicana y a la jurisdicción de los tribunales de la Ciudad de México, Distrito Federal, renunciando expresamente a cualquier otro fuero que pudiere corresponderles por razón de sus domicilios presentes o futuros.<br>"+
"Si tiene alguna duda sobre el material que aparece en el Sitio, por favor póngase en contacto por escrito para la atención de nuestro Asesor Digital en <a href='mailto:contacto@agpch.mx'>contacto@agpch.mx</a>.";

		var aviso_en = "<b>WEBSITE PRIVACY POLICY (PRIVACY NOTICE)</b>:<br>"+
"CASA ARMANDO GUILLERMO PRIETO, S.A. DE C.V. (hereinafter referred to as “CAGP”) is committed to protecting and respecting your privacy. This Privacy Policy and/or Privacy Notice (together with the Terms and Conditions for the Use of the Website and the Cookie and IP’s Policy) govern our use and the purposes of the information gathered about you. Please read the following in order to understand our views and practices regarding your personal data and how we will treat it. Even though we are committed to keeping your safety and trust in all our activities with you, this Privacy Policy does not govern our collection and/or use of data about you through channels other than this Website.<br>"+
"Please exit the Site immediately if you do not accept this Privacy Policy and/or Privacy Notice or if you are not of a Legal Drinking Age (as defined in the Bacardi Terms and Conditions of Website Use) in the country or other territory in which you are located, or if you are accessing our Website in a country or other territory where the use of our Website is not permitted.<br>"+
"CAGP with address at Periférico Sur No. 4829, Interior 604, Col. Parques del Pedregal, Del. Tlalpan, Mexico City, Federal District, Mexico, informs you that it may collect, transfer, store and use the personal data you provide to us through this Website, which will be used exclusively to access this Website as well as for, in given case,  to offer you publicity and services that may be offered and/or provided in this Website; also for other activities whose access demands that the User to be registered- Therefore, your data will be used for the following purposes:<br>"+
"•	To log in to this Website.<br>"+
"•	To register and attend your requests of reservation and or/ purchase of our products.<br>"+
"•	To collect and invoice the acquired products and services.<br>"+
"•	To attend your inquiries and suggestions.<br>"+
"•	To inform you about promotions, competitions, contests and activities organized by CAGP as well as by its subsidiary and/or affiliated and/or related companies.<br>"+
"•	To document your visits or events.<br>"+
"•	To carry out satisfaction surveys.<br>"+
"•	To subscribe to our newsletter.<br>"+
"•	To inform you about our events.<br>"+
"•	To keep control of the people (Users) who access this Website.<br>"+
"•	To participate in the research, promotion and commercialization of the services and/or products, and therefore may be put under the disposition of companies that have a corporative and /or contractual relationship with CAGP.<br>"+
"•	The correct country or other territory in which you are located or are accessing the Website and your correct date of birth, which we require that you submit accurately to ensure that you do not access Our Sites if you are not of a legal age for consuming alcoholic beverages in the country or other territory in which you are located or are accessing our Website.<br>"+
"It is possible that, if you go to CAGP events, we may take pictures which we may share in social media and social networks.<br>"+
"CAGP holds responsibility for the personal data collected from you and therefore it treats your personal data according to the principles of legality, consent, information, quality, purpose and responsibility, as established by the Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento (Federal Law of Protection of Personal Data in Possession of Private Individuals and Its Policy - hereinafter referred to as “the Law”).<br>"+
"In order to prevent unauthorized access and revelation, to keep the precision of personal data and warrant the correct use of the information, CAGP uses physical, technological and administrative procedures to protect the collected information.<br>"+
"The information you give us is stored in access-controlled databases, according to the Law.<br>"+
"You can exercise your rights of access, rectification, cancellation and opposition, also known as “ARCO Rights”, as well as the revocation of your consent, addressing to the following  email address:<br>"+
"<a href='mailto:contacto@agpch.mx'>contacto@agpch.mx</a><br>"+
"CAGP provides to your disposition the procedure by wich you may excersice your ARCO rights and the revocation of consent at the mentioned address to hear and receive notifications.<br>"+
"CAGP will not sell, rent or otherwise share or transfer your Personal Data with third parties. We may share your Personal Data only under the following situations:<br>"+
"a) With companies that we have a corporative and /or contractual relation<br>"+
"b) In a given case, with the financial institutions employed to buy our products.<br>"+
"The people to whom we transfer the personal data will not be allowed to use the information provided by CAGP in any manner different to the established in this Notice. These data transfers will be carried out with all the appropriate security measures, in conformity with the principles established in the Law.<br>"+
"In the event of a security violation in any phase of the management of your personal data, CAGP will inform you immediately by an email through the responsible figure, so you can take the appropriate actions to defend your rights. If we do not have your email, the notification will be published in this Website.<br>"+
"In order to enable you to limit the use and divulgation of your personal information, you have the following options available:<br>"+
"a) Inscription in the Registro Público de Consumidores and / or the Registro Público de Usuarios to avoid publicity, which are under the Procuraduría Federal del Consumidor (“PROFECO”) and of the Comisión Nacional para la Protección y Defensa de los Usuarios de Servicios Financieros (“CONDUSEF”) respectively, to avoid that your personal data may be used to receive publicity or promotions from companies. For further information about this registry, you may search the PROFECO and CONDUSEF Internet Websites or contact them directly.<br>"+
"b) If you consider that your right to the protection of your personal data has been affected by any conduct or omission on our side, or you presume any violation to the dispositions provided by the Law, you can present your inconformity or report it to the Instituto Federal de Acceso a la Información y Protección de Datos (the Federal Institute for Access to Information and Data protection - “IFAI”). For further information, we recommend to search its offcial Website: www.ifai.org.mx.<br>"+
"The registry in this Website requires the provided data to be complete and veracious. Such data will be updated through your help.  If the personal data provided by you is incomplete or inexact or if it is not updated in a timely manner, CAGP will be released from any obligation that may occur in consequence.<br>"+
"In concordance with the Law, once you have read this Privacy Notice it will be considered that you agree to the aforementioned collection, treatment, transmission, use and storage of personal data that has been provided to CAGP.<br>"+
"CAGP reserves the right to modify this privacy notice, in which case it will be announced in this Website and in the  aforementioned address, with a reasonable prior notice to its application.<br>"+
"<br>"+
"<a href='/formulario' onclick('download('form')')>Download the ARCO Rights Form</a><br>"+
"<a href='/procedimiento' onclick('download('pros')')>Download the ARCO Rights Attention Procedure</a><br>"+
"<br>"+
"<b>COOKIES AND IP’S POLICY</b>:<br>"+
"CAGP may collect information about your computer (including, where available, your IP address, operating system and browser type) for system administration and to report aggregate information to our advertisers. This is statistical data about our users’ browsing actions and patterns, and does not identify any individual. Our servers may also collects information in aggregate form to track the total number of visitors to our web sites, the number of visitors to each page of our web site, and the length of the visits. No personally identifiable information is collected. <br>"+
"This policy aims to inform you about how the Website uses a technology called “cookies” and web server logs. This Policy is intended to assist you in making informed decisions when using this Website. Please take a minute to read and understand the Policy. <br>"+
"<br>"+
"What are cookies? What do they do?<br>"+
"A cookie is a very small text document, which often includes an anonymous unique identifier. When you visit a Web site, that site´s computer asks your computer for permission to store this file in a part of your hard drive specifically designated for cookies. <br>"+
"Information gathered through cookies and Web server logs may include the date and time of visits, the pages viewed and the time spent at this Website. For more information about cookies you may search the Internet, where you can find wide information about cookies and similar technologies.<br>"+
"<br>"+
"Consent for the use of cookies in this website<br>"+
"By continuing to use our Website, it is considered you are agreeing to its use of the cookies described in this Cookie Policy.<br>"+
"<br>"+
"Blocking the use of cookies<br>"+
"You can block the use of cookies by activating the relevant settings in your browser. For more information on cookie management and blocking cookies for a wide variety of browsers, please visit All About Cookies.<br>"+
"<br>"+
"What happens if I block cookies?<br>"+
"In order to use some parts of our Website your browser needs to accept cookies. If you choose to withhold consent, or subsequently block cookies, some aspects of our Website may not work properly and you may not be able to access all or part of our Website. <br>"+
"<br>"+
"How we use cookies<br>"+
"If access to our Website requires you to enter your date of birth and country, cookies allow us to remember the data you have entered, so that we do not need to ask you to re-enter them every time you browse to a different page of the Website.<br>"+
"We also use “Webtrend Analytics” cookies which, in conjunction with our web server’s log files, allow us to calculate the aggregate number of people visiting our Website and which parts of our Website are most popular. This helps us gather feedback so that we can improve our Website and better serve our customers. We do not generally store any personal information that you provide to us in a cookie. The purpose of Webtrend Analytics cookies is storing information, such as the time you visited the Website, and whether you have visited it before (and the website that you visited prior to visiting our Website). <br>"+
"We may also use “Social Media” cookies to personalize your interaction with social media platforms such as Twitter® and Facebook®, where our Website uses such features. Such cookies recognize users of social media sites when you view social media content on our Website. They also allow you to quickly share content across media, through the use of “share” buttons. We use the following Social Media cookies: Twitter®, Facebook®, WebTrends®, Google Analytics®.<br>"+
"Most of our cookies expire within 30 days, although our analytics cookies may persist for between 2 and 10 years.";
		var term_en = "TERMS AND COTIONS FOR THE USE OF THE WEBSITE: www.zignummezcal.com:<br>"+
"The terms and conditions presented here regulate the use of the www.zignummezcal.com website, as well as of all and any other online and/or digital platforms, including mobiles and other applications, such as, in an enunciatively but not limiting manner, Facebook® and Twitter® applications (hereinafter referred to as “the Website” and/or “the Site”) whose property corresponds to Casa Armando Guillermo Prieto, S.A. de C.V. (hereinafter referred to as “CAGP”), with address at Periférico Sur No. 4829, Interior 604, Col. Parques del Pedregal, Del. Tlalpan, C.P. 14010, Mexico City, Federal District.<br>"+
"Please read this Privacy Policy Statement carefully before using our website.<br>"+
"By entering and using this website, and given the case, by contracting the services hereby offered, you abide to respect and accept all the Terms and Conditions of Use, notifications and clauses of exclusion of responsibility which are established in this Terms and Conditions of Use. Accepting the Terms and Conditions of Use here foreseen will be an indispensable previous step to acquire any service available at the website.<br>"+
"CAGP reserves the right to change and/or modify the Terms and Conditions of Use established in the website as it considers it necessary or convenient at any time without previous notice and/or notification to the users of the website. You may verify and search this Terms and Conditions of Use in a continuous manner in order to know such changes and /or modifications.<br>"+
"This site is directed and reserved exclusively and only for the use of persons who are lawfully permitted to purchase and consume alcoholic beverages, in countries and other territories where the sale, advertising and consumption of alcoholic beverages is lawful. In the case of the United States of Mexico, only users 18 and over are allowed to enter and use this website.<br>"+
"Please exit our Site immediately if you do not accept these Terms and Conditions of Use, if you are not of legal age for consuming alcoholic beverages in the country or other territory in which you are located, or if you are accessing our Site in a country or other territory where use of our Site is not permitted. CAGP, through the website, provides information regarding its products and services and offers you the possibility to consult it.<br>"+
"The Users must use the website in a responsible manner and abiding to the law in conformity to these Terms and Conditions of Use.<br>"+
"Following we are enumerating in a enunciatively manner, but this does not limit the activities the User must abstain to do when using the website: (i) To distribute, spread, announce or publish any information or material that degrades, shames, humiliates or menaces other people; (ii) To abuse, defame, bully, menace or any other manner that violates other people’s rights. (iii) To distribute, spread, announce or publish any indecent material or information that violates the rights of third parties; (iv) To announce or send, or to divulge in any other form, confidential information, industrial or commercial business secrets or any other exclusive, confidential and/or protected data by any policy in Mexico and overseas;  <br>"+
" (vx) To copy or create derivative works from, display, distribute, award under license, perform, post, reproduce, sell, transfer or transmit any information, products, services or software obtained by, from or through the website; (vi) Keep under surveillance or copy any content through any process;  (vii) To engage in any other conduct that is –or that it is considered by CAGP to be– in conflict with the Terms and Conditions of Use, and (viii) In general, to perform any act against the Law, morals and good manners.<br>"+
"You are responsible for making all arrangements necessary for you to have access to our Site. You are also responsible for ensuring that all persons who access our Site through your Internet connection are aware of these terms, and that they comply with them.<br>"+
"<br>"+
"INFORMATION ABOUT YOU AND YOUR VISITS TO OUR SITE AND EVENTS.<br>"+
"Your privacy is very important to CAGP. All the information we collect from the Users of our website will be processed and treated in accordance with CAGP’s Privacy Policy. By using our Site, you consent to such processing and you warrant that all data provided by you is accurate<br>"+
"<br>"+
"INDUSTRIAL AND INTELECTUAL PROPERTY.<br>"+
"CAGP as well as its subsidiary, filial and/or related companies, as well as its licensees and license holders hold, either by themselves and/or by virtue of the celebration of a contract with third parties, all the rights over the content and design of the website, specially, in an enunciatively but not limiting manner, regarding the campaigns, photos, images, texts, logos, designs, brands, commercial names, audios, videos, data and software (including code, interface and website structure) which are included in the aforementioned website. Such rights are protected by the current and applicable Propiedad Industrial e Intelectual intellectual and industrial property law.<br>"+
"The copying, reproduction, adaptation, modification, distribution, commercial exploitation, public communication of the website and /or any other action that constitutes an infringement to the intellectual and industrial property laws, as well as the use of the contents of the website is prohibited if it has not been previously authorized by expressed and written permission by CAGP.<br>"+
"CAGP informs you that the mere fact of entering and consulting the website does NOT grant any license, authorization or implicit right over the intellectual and industrial property rights or any other directly or indirectly related right or property with the contents included on the site.<br>"+
"Zignum® is a trademark registered at the Instituto Mexicano de la Propiedad Industrial, in concordance with the Ley de Propiedad Industrial industrial property lawproperty of CAGP. Thereby, any unauthorized use of the aforementioned trademarks will be sanctioned according to the applicable current law.<br>"+
"<br>"+
"DENIAL OF WARRANTIES AND LIMITATIONS TO RESPONSIBILITY <br>"+
"CAGP will act diligently in order to make the content of the Site available at any time. Nevertheless, CAGP may, at any given time and without previous notice, to interrupt or cancel the access to the Site and/or to its contents without any responsibility for CAGP.<br>"+
"CAGP will not be hold responsible under any circumstances for any damage caused by and/or related to the use of the Site and/or its contents, including but not limiting it to the loss of data, information or programs, damage to computers or networks, or virus. These Terms and Conditions of Use and /or the content of the Site may have errors and/or inexactitudes.<br>"+
"There are third parties different to CAGP and to you, who could possibly access the contents of the site and they could modify and/or eliminate such content without the authorization of CAGP. CAGP informs you that will not be hold responsible under any circumstances in the case that such modifications, performed without the authorization of CAGP, might be performed by persons who affect the contents of the Site.<br>"+
"There are no more warranties by CAGP than those corresponding to the services offered by CAGP in conformity with this document, which are expressed in these Terms and Conditions of Use. CAGP does not acknowledge and it will not acknowledge warranties of any type or nature that are not specified here. Any information that may have been provided by agents or employees of CAGP or any third party authorized by it or by the Site will not create warranties of any type in relation to the Terms and Conditions of Use and/or the Site.<br>"+
"The products and services offered in the Site are the only authorized ones by CAGP, and therefore it will not be held responsible for any other product or service offered by any third party different to CAGP. The site may include discussion groups, news groups, news boards, chat forums and other services where third parties different to CAGP and the User may participate. CAGP will not be held responsible for the communications and/or dialogues in the course of the debates, forums or chats organized through the Site and or linked pages, and it will not be held responsible for any eventual damages the Users may suffer as a consequence of such communications and/or dialogues. The information provided by the User in such situations is public and therefore CAGP advises to not provide any personal data and /or private information related to the Users.<br>"+
"You understand and expressly agree that use of this Site is at your own risk. The site is provided “as it is” and “it is available”. Nor CAGP nor its affiliates, subsidiaries and related ones, as neither its respective functionaries, directors, employees, agents, third party content providers, designers, contractors, distributors, vendors, sponsors, concedents and any other (herein after referred to as “Associates”) warrant that the use of the Site will not suffer interruptions or contain errors. Besides, CAGP does not declare that the foreseen content in the Site may be applicable, nor of appropriate use, in places outside of Mexico. Any type of verbal counseling or written information by CAGP or its Associates will not constitute a warranty. <br>"+
"CAGP or its Associates will not be responsible or liable, for any direct, indirect, unexpected, special or emergent damage of any kind incurred as a result of, or in connection with, your failure to use the Site, including, in an enunciatively but not limiting manner, the damages that may occur upon your trust in the information obtained through the site which may cause errors, omissions, interruptions, elimination or corruption of files, viruses, delays in the operation or transmission, or any other kind of error in performance.<br>"+
"The limitation of precedent responsibility will be applied in every legal action, whether it is by contract, injury or any other claim, even when a representative authorized by CAGP has been informed or must have been aware of the possibility of such injuries. The User acknowledges that this paragraph will apply to all content and, given the case, to all services available through the Site.<br>"+
"Also CAGP will not be held responsible if by any reason the Site is not available at any moment or during any period of time.<br>"+
"If you are provided with a user identification code, password or any other piece of information as part of a registration scheme or a security procedure, you must treat such information as confidential, and you must not disclose it to any third party. CAGP will not be responsible or liable, directly or indirectly, in any way for any loss or damage of any kind incurred as a result of, or in connection with, your failure to comply with this section of these terms of use. CAGP has the right to disable any user identification code or password, whether chosen by you or allocated by us, at any time, if in our opinion you have failed to comply with any of the provisions of these terms of use. From time to time, we may restrict access to some parts of our Site, or our entire site, to users who have registered with CAGP.<br>"+
"<br>"+
"SURVIVAL OF THE TERMS AND CONDITIONS.<br>"+
"In the case that any judicial and/or authority declares the nullity of any section, paragraph or clause of this Terms and Conditions of Use, the other sections, paragraphs and clauses of this instrument will remain being mandatory for the parts.<br>"+
"<br>"+
"INDEMNITY. <br>"+
"You acknowledge and accept that you will indemnify and hold CAGP, its subsidiaries and/or any other corporate association related to it, harmless, free of any liability against any loss, damage or cost incurred by the failure to fulfill these Terms and Conditions of Use, as well as the damages deriving from or relates to the wrongful use of this site.<br>"+
"<br>"+
"HEADERS AND SECTIONS. <br>"+
"All the titles, headers and sections of these Terms and Conditions of Use are applied exclusively to facilitate references; therefore, they will not affect the content or interpretation of the aforementioned.<br>"+
"JURISDICTION AND APPLICABLE LAW.<br>"+
"In order to solve any controversy related to these Terms and Conditions of Use, the visit of the Site and to those related with the acquisition of products or services through the Site, the parts abide by the applicable laws of Mexico, and abide by the jurisdiction of the competent tribunals located in Mexico City, Federal District, expressly renouncing to any other regional code of laws which could correspond to them by reason of their present or future addresses.<br>"+
"If you have any enquire regarding the material in the Site, please contact by writing for the attention of our Digital Advisor at <a href='mailto:contacto@agpch.mx'>contacto@agpch.mx</a>.";
