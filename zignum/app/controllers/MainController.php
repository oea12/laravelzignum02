<?php
use Facebook\Entities\AccessToken;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookJavaScriptLoginHelper;
class MainController extends \BaseController {

	private $text; 

	public function __construct(){
		$this->text = new Textos();
	}
	public function index(){
		Doc::title('Zignum');
		Doc::keyword($this->text->keywords);
		Doc::description("Zignum aquí encontraras los mejores mezcales.");
		if ((Cookie::get('zignum')==='recuerdame')){
			return Redirect::to('/home');
		}
		return View::make('index',
			array(
				'css'=>'/zignum/public/css/validate.css',
				'js'=>'/zignum/public/js/validate.js',
				'menu'=>$this->text->getMenuArray('es')
				)
			);
	}


	public function home(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try {
				if($_COOKIE['lengua']==='es'){
					Doc::title('Zignum - Un Mezcal hecho 100% de Agave');
					Doc::keyword('Zignum Mezcal, Zignum, Mezcales, Mezcales');
					Doc::description("Zignum, aquí encontraras los mejores mezcales hecho 100% de Agave. Diferentes meses de maduración, diferentes sabores y mezclas recomendadas.");
					return View::make('home',array(
						'home_text'=>$this->text->getHome('es'),
						'menu'=>$this->text->getMenuArray('es')
						)
					);
				}else{
					Doc::keyword('Zignum Mezcal, Zignum, Mezcales, Mezcales');
					Doc::title('Zignum - A 100% Agave mezcal');
					Doc::description("Zignum, you will find the best 100% Agave mezcals here. Various months of aging, different flavors and recommended mixes.");
					return View::make('home',array(
						'home_text'=>$this->text->getHome('en'),
						'menu'=>$this->text->getMenuArray('en'),
						'alt'=>'Zignum Mezcal',
						'title'=>'Zignum Mezcal'
						)
					);
				}
			} catch (Exception $e) {			
				setcookie('lengua','es');
				Doc::keyword('Zignum Mezcal, Zignum, Mezcales, Mezcales');
				Doc::title('Zignum - Un Mezcal hecho 100% de Agave');
				Doc::description("Zignum, aquí encontraras los mejores mezcales hecho 100% de Agave. Diferentes meses de maduración, diferentes sabores y mezclas recomendadas.");
				return View::make('home',array(
					'home_text'=>$this->text->getHome('es'),
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
			
		}else{
				//crea cookie
			Cookie::queue('redirect','home', 1);
			return Redirect::to('/');
		}
	}
	/**
	*	Shows the zignun reposado view in the requested language
	*/
	public function zignumreposado(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Cocteles Zignum Reposado, Cocteles Zignum, Zignum Reposado');
					Doc::title('Cocteles Zignum Reposado - Mezcales Zignum');
					Doc::description("Con 8 meses de maduración en barricas de roble blanco americano. Posee una apariencia naranja con elegantes tintes marrón, aroma a vainilla y un sabor pleno a madera.");
					return View::make('zignumreposado',array(
						'reposado_text'=> $this->text->getReposado('es'),
						'menu'=>$this->text->getMenuArray('es')
						)
					);
				}else{
					Doc::keyword('Zignum Reposado cocktails,Zignum coktails,Zignum Reposado');
					Doc::title('Zignum Reposado cocktails- Zignum mezcals');
					Doc::description("Aged for 8 months in American white oak barrels. Orange tones with elegant tints of brown, vanilla aroma and full woody flavor.");
					return View::make('zignumreposado',array(
						'reposado_text'=> $this->text->getReposado('en'),
						'menu'=>$this->text->getMenuArray('en'),
						'alt'=>'Zignum Reposado cocktails',
						'title'=>'Zignum Reposado mezcal'
						)
					);
				}
			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Cocteles Zignum Reposado, Cocteles Zignum, Zignum Reposado');
				Doc::title('Cocteles Zignum Reposado - Mezcales Zignum');
				Doc::description("Con 8 meses de maduración en barricas de roble blanco americano. Posee una apariencia naranja con elegantes tintes marrón, aroma a vainilla y un sabor pleno a madera.");
				return View::make('zignumreposado',array(
					'reposado_text'=> $this->text->getReposado('es'),
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
		}else{
				//crea cookie
			Cookie::queue('redirect','zignumreposado', 1);
			return Redirect::to('/');
		}	
	}


	public function zignumsilver(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Cocteles Zignum Reposado, Zignum Silver, Zignum Silver');
					Doc::title('Cocteles Zignum Silver - Mezcales Zignum');
					Doc::description("Zignum Silver es un mezcal joven con un suave aroma herbáceo y cítrico, rescata el sabor original del agave. Disfrútalo con refresco de lima/limón y jugo de arándano.");
					return View::make('zignumsilver',array(
						'silver_text'=>$this->text->getSilver('es'),
						'menu'=>$this->text->getMenuArray('es')
						)
					);
				}else{
					Doc::keyword('Zignum Silver cocktails,Zignum Silver,Zignum Silver');
					Doc::title('Zignum Silver cocktails- Zignum mezcals');
					Doc::description("Zignum Silver is a young mezcal with a soft herbal and citric aroma, preserving the orginal flavor of agave. Enjoy with lime/lemon soda and cranberry juice.");
					return View::make('zignumsilver',array(
						'silver_text'=>$this->text->getSilver('en'),
						'menu'=>$this->text->getMenuArray('en'),
						'alt'=>'Zignum Silver cocktails',
						'title'=>'Zignum Silver mezcal'
						)
					);
				}
			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Cocteles Zignum Reposado, Zignum Silver, Zignum Silver');
				Doc::title('Cocteles Zignum Silver - Mezcales Zignum');
				Doc::description("Zignum Silver es un mezcal joven con un suave aroma herbáceo y cítrico, rescata el sabor original del agave. Disfrútalo con refresco de lima/limón y jugo de arándano.");
				return View::make('zignumsilver',array(
					'silver_text'=>$this->text->getAnejo('es'),
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
		}else{
				//crea cookie
			Cookie::queue('redirect','zignumsilver', 1);
			return Redirect::to('/');
		}
	}

	public function zignumanejo(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Cocteles Zignum Añejo, Cocteles Zignum, Zignum Añejo');
					Doc::title('Cocteles Zignum Añejo - Mezcales Zignum');
					Doc::description(" Zignum Añejo con 16 meses de maduración en barricas de roble blanco francés, posee un color ámbar brillante y una robusta mezcla de aromas de madera.");
					return View::make('zignumanejo',array(
						'anejo_text'=>$this->text->getAnejo('es'),
						'menu'=>$this->text->getMenuArray('es'),
						'alt'=>'Zignum Añejo cocktails',
						'title'=>'Zignum Añejo mezcal'
						)
					);
				}else{
					Doc::keyword('Zignum Añejo coktails,Zignum cocktails,Zignum Añejo');
					Doc::title('Zignum Añejo coktails - Zignum mezcals');
					Doc::description("Aged for 16 months in French white oak barrels, Zignum Añejo has a bright ambar tone and a robust mix of woody aromas.");
					return View::make('zignumanejo',array(
						'anejo_text'=>$this->text->getAnejo('en'),
						'menu'=>$this->text->getMenuArray('en')
						)
					);
				}
			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Cocteles Zignum Añejo, Cocteles Zignum, Zignum Añejo');
				Doc::title('Cocteles Zignum Añejo - Mezcales Zignum');
				Doc::description(" Zignum Añejo con 16 meses de maduración en barricas de roble blanco francés, posee un color ámbar brillante y una robusta mezcla de aromas de madera.");
				return View::make('zignumanejo',array(
					'anejo_text'=>$this->text->getAnejo('es'),
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
		}else{
				//crea cookie
			Cookie::queue('redirect','zignumanejo', 1);
			return Redirect::to('/');
		}
	}

	public function elmezcal(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('¿Qué es el Mezcal?, El mezcal');
					Doc::title('¿Qué es el Mezcal? - Mezcales Zignum');
					Doc::description("Mezcal es la bebida obtenida por la destilación de los jugos fermentados de un agave. Hay varios tipos de agaves con los que se puede llevar a cabo su producción.");
					return View::make('elmezcal',array(
						'elmezcal_text'=>$this->text->getElMezcal('es'),
						'menu'=>$this->text->getMenuArray('es')
						)
					);
				}else{
					Doc::keyword('What is mezcal?,Mezcal');
					Doc::title('What is mezcal? - Zignum mezcals');
					Doc::description("MMezcal  is the name of a beverage obtained through the distillation of the fermented juices of the agave. Mezcal can be produced with different types of agave.");
					return View::make('elmezcal',array(
						'elmezcal_text'=>$this->text->getElMezcal('en'),
						'menu'=>$this->text->getMenuArray('en')
						));
				}
			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('¿Qué es el Mezcal?, El mezcal');
				Doc::title('¿Qué es el Mezcal? - Mezcales Zignum');
				Doc::description("Mezcal es la bebida obtenida por la destilación de los jugos fermentados de un agave. Hay varios tipos de agaves con los que se puede llevar a cabo su producción.");
				return View::make('elmezcal',array(
					'elmezcal_text'=>$this->text->getElMezcal('es'),
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
		}else{
				//crea cookie
			Cookie::queue('redirect','elmezcal', 1);
			return Redirect::to('/');
		}
	}


	public function mezclaperfecta(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Mezcales Zignum, Mezcales Zignum mezclas');
					Doc::title('Descubre la Mezcla Perfecta - Mezcales Zignum');
					Doc::description("Diviértete dando vuelta a la ruleta para saber cuál es tu mezcla perfecta de este día, con quién y donde, en la ruleta de ZIGNUM!!");
					return View::make('mezclaperfecta',array(
						'mezcla_css'=>'/zignum/public/css/mezcla.css',
						'mezcla_js'=>'/zignum/public/js/mezcla.js',
						'mezcla_text'=>$this->text->getMezcla('es'),
						'menu'=>$this->text->getMenuArray('es'),
						'resultados'=>$this->text->getMezclaResultados('es')
						)
					);
				}else{
					Doc::keyword('Zignum mezcals,Zignum mezcals mixes');
					Doc::title('Discover the perfect mix - Zignum mezcals');
					Doc::description("Have fun spinning to find out what is your perfect mix for today, with who and where, with the ZIGNUM wheel!!");
					return View::make('mezclaperfecta',array(
						'mezcla_css'=>'/zignum/public/css/mezcla.css',
						'mezcla_js'=>'/zignum/public/js/mezcla.js',
						'mezcla_text'=>$this->text->getMezcla('en'),
						'menu'=>$this->text->getMenuArray('en'),
						'resultados'=>$this->text->getMezclaResultados('en')
						)
					);
				}

			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Mezcales Zignum, Mezcales Zignum mezclas');
				Doc::title('Descubre la Mezcla Perfecta - Mezcales Zignum');
				Doc::description("Diviértete dando vuelta a la ruleta para saber cuál es tu mezcla perfecta de este día, con quién y donde, en la ruleta de ZIGNUM!!");
				return View::make('mezclaperfecta',array(
					'mezcla_css'=>'/zignum/public/css/mezcla.css',
					'mezcla_js'=>'/zignum/public/js/mezcla.js',
					'mezcla_text'=>$this->text->getMezcla('es'),
					'menu'=>$this->text->getMenuArray('es'),
					'resultados'=>$this->text->getMezclaResultados('es')
					)
				);
			}
		}else{
			//crea cookie
			Cookie::queue('redirect','mezclaperfecta', 1);
			return Redirect::to('/');
		}
	}

	public function premios(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('premios Zignum, Mezcales Zignum');
					Doc::title('Los principales premios de Zignum - Mezcales Zignum');
					Doc::description("Zignum redefine al mezcal como una bebida que puede ser mezclada y es justo esa capacidad, la que hace de Zignum una bebida que rompe paradigmas y gana premios!");
					return View::make('premios',array(
						'premios_css'=>'/zignum/public/css/premios.css',
						'menu'=>$this->text->getMenuArray('es'),
						'premios'=>$this->text->getPremios('es'),
						)
					);
				}else{
					Doc::keyword('Zignum Awards,Zignum mezcals');
					Doc::title('The main awards of Zignum -  Zignum mezcals');
					Doc::description("Zignum redefines mezcal as a mixing drink and that ability makes Zignum to be an award-winning, paradigm-breaking beverage!");
					return View::make('premios',array(
						'premios_css'=>'/zignum/public/css/premios.css',
						'menu'=>$this->text->getMenuArray('en'),
						'premios'=>$this->text->getPremios('en'),
						)
					);
				}

			}catch(Exception $e){
				Doc::keyword('premios Zignum, Mezcales Zignum');
				setcookie('lengua','es');
				Doc::title('Los principales premios de Zignum - Mezcales Zignum');
				Doc::description("Zignum redefine al mezcal como una bebida que puede ser mezclada y es justo esa capacidad, la que hace de Zignum una bebida que rompe paradigmas y gana premios!");
				return View::make('premios',array(
					'premios_css'=>'/zignum/public/css/premios.css',
					'menu'=>$this->text->getMenuArray('es'),
					'premios'=>$this->text->getPremios('es'),
					)
				);
			}
		}else{
			//crea cookie
			Cookie::queue('redirect','premios', 1);
			return Redirect::to('/');
		}
	}

	public function contacto(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('');
					Doc::title('Zignum - Contacto');
					Doc::description("Galeria de fotos de Zignum - Mezcales Zignum");
					return View::make('contacto',array(
						'menu'=>$this->text->getMenuArray('es'),
						'contact'=>$this->text->getContacto('es')
						)
					);
				}else{
					Doc::keyword('');
					Doc::title('Zignum - Contact');
					Doc::description("Contact us, we will answer all your questions. Zignum the best mezcal.");
					return View::make('contacto',array(
						'menu'=>$this->text->getMenuArray('en'),
						'contact'=>$this->text->getContacto('en')
						)
					);
				}

			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('');
				Doc::title('Zignum - Contacto');
				Doc::description("Contactanos, responderemos todas tus dudas. Zignum el mejor mezcal.");
				return View::make('contacto',array(
					'menu'=>$this->text->getMenuArray('es'),
					'contact'=>$this->text->getContacto('es')
					)
				);
			}
		}else{
			//crea cookie
			Cookie::queue('redirect','contacto', 1);
			return Redirect::to('/');
		}
	}

	public function cocteleszignumsilver(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Cocteles Zignum Reposado, Zignum Silver, Zignum Silver');
					Doc::title('Cocteles Zignum Silver - Mezcales Zignum');
					Doc::description("Zignum Silver es un mezcal joven con un suave aroma herbáceo y cítrico, rescata el sabor original del agave. Disfrútalo con refresco de lima/limón y jugo de arándano.");
					$cocktail = \Thor\Models\Cocktail::where('product','like','zignum_silver')->get();
					return View::make('coctelessilver',array('cocktail'=>$cocktail,
						'menu'=>$this->text->getMenuArray('es'),
						'cocteles_js'=>'/zignum/public/js/cocteles.js'
						)
					);
				}else{
					Doc::keyword('Zignum Silver cocktails,Zignum Silver,Zignum Silver');
					Doc::title('Zignum Silver cocktails- Zignum mezcals');
					Doc::description("Zignum Silver is a young mezcal with a soft herbal and citric aroma, preserving the orginal flavor of agave. Enjoy with lime/lemon soda and cranberry juice.");
					$cocktail = \Thor\Models\Cocktail::where('product','like','zignum_silver')->get();
					return View::make('coctelessilver',array('cocktail'=>$cocktail,
						'menu'=>$this->text->getMenuArray('en'),
						'cocteles_js'=>'/zignum/public/js/cocteles.js'
						)
					);
				}

			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Cocteles Zignum Reposado, Zignum Silver, Zignum Silver');
				Doc::title('Cocteles Zignum Silver - Mezcales Zignum');
				Doc::description("Zignum Silver es un mezcal joven con un suave aroma herbáceo y cítrico, rescata el sabor original del agave. Disfrútalo con refresco de lima/limón y jugo de arándano.");
				$cocktail = \Thor\Models\Cocktail::where('product','like','zignum_silver')->get();
				return View::make('coctelessilver',array('cocktail'=>$cocktail,
					'menu'=>$this->text->getMenuArray('es'),
					'cocteles_js'=>'/zignum/public/js/cocteles.js'
					)
				);
			}

		}else{
			//crea cookie
			Cookie::queue('redirect','cocteleszignumsilver', 1);
			return Redirect::to('/');
		}
	}

	public function cocteleszignumreposado(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Cocteles Zignum Reposado, Cocteles Zignum, Zignum Reposado');
					Doc::title('Cocteles Zignum Reposado - Mezcales Zignum');
					Doc::description("Con 8 meses de maduración en barricas de roble blanco americano. Posee una apariencia naranja con elegantes tintes marrón, aroma a vainilla y un sabor pleno a madera.");
					$cocktail = \Thor\Models\Cocktail::where('product','like','zignum_reposado')->get();
					return View::make('coctelesreposado',array(
						'cocktail'=>$cocktail,
						'menu'=>$this->text->getMenuArray('es'),
						'cocteles_js'=>'/zignum/public/js/cocteles.js'
						)
					);
				}else{
					Doc::keyword('Zignum Reposado cocktails,Zignum coktails,Zignum Reposado');
					Doc::title('Zignum Reposado cocktails- Zignum mezcals');
					Doc::description("Aged for 8 months in American white oak barrels. Orange tones with elegant tints of brown, vanilla aroma and full woody flavor.");
					$cocktail = \Thor\Models\Cocktail::where('product','like','zignum_reposado')->get();
					return View::make('coctelesreposado',array(
						'cocktail'=>$cocktail,
						'menu'=>$this->text->getMenuArray('en'),
						'cocteles_js'=>'/zignum/public/js/cocteles.js'
						)
					);
				}

			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Cocteles Zignum Reposado, Cocteles Zignum, Zignum Reposado');
				Doc::title('Cocteles Zignum Reposado - Mezcales Zignum');
				Doc::description("Con 8 meses de maduración en barricas de roble blanco americano. Posee una apariencia naranja con elegantes tintes marrón, aroma a vainilla y un sabor pleno a madera.");
				$cocktail = \Thor\Models\Cocktail::where('product','like','zignum_reposado')->get();
				return View::make('coctelesreposado',array('cocktail'=>$cocktail,
					'menu'=>$this->text->getMenuArray('es'),
					'cocteles_js'=>'/zignum/public/js/cocteles.js'
					)
				);
			}
		}else{
			//crea cookie
			Cookie::queue('redirect','cocteleszignumreposado', 1);
			return Redirect::to('/');
		}
	}

	/**
	 * Muestra la galeria
	 *
	 * @return Response
	 */
	public function galeria(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Galeria de fotos de Zignum, Zignum - Mezcales Zignum, Mezcales Zignum');
					Doc::title('Galeria de fotos de Zignum - Mezcales Zignum');
					Doc::description("Visita nuestra galería de fotos de los mejores eventos y actividades donde está presente Zignum con sus diferentes Mezcales y combinaciones.");
					return View::make('galeria',array(
						'gallery_css'=>'/zignum/public/css/gallery.css',
						'gallery_js'=>'/zignum/public/js/gallery.js',
						'galeria_text_title'=>$this->text->getGalText('es'),
						'galeria_text_desc'=>$this->text->getGalDesc('es'),
						'menu'=>$this->text->getMenuArray('es')
						)
					);
				}else{
					Doc::keyword('Zignum photo gallery,Zignum - Zignum mezcals,Zignum mezcals');
					Doc::title('Zignum photo gallery - Zignum mezcals');
					Doc::description(" Check our photo gallery of the best events and activities where Zignum is present with its array of mezcals and combinations.");
					return View::make('galeria',array(
						'gallery_css'=>'/zignum/public/css/gallery.css',
						'gallery_js'=>'/zignum/public/js/gallery.js',
						'galeria_text_title'=>$this->text->getGalText('en'),
						'galeria_text_desc'=>$this->text->getGalDesc('en'),
						'menu'=>$this->text->getMenuArray('en')
						)
					);
				}

			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Galeria de fotos de Zignum, Zignum - Mezcales Zignum, Mezcales Zignum');
				Doc::title('Galeria de fotos de Zignum - Mezcales Zignum');
				Doc::description("Visita nuestra galería de fotos de los mejores eventos y actividades donde está presente Zignum con sus diferentes Mezcales y combinaciones.");
				return View::make('galeria',array(
					'gallery_css'=>'/zignum/public/css/gallery.css',
					'gallery_js'=>'/zignum/public/js/gallery.js',
					'galeria_text_title'=>$this->text->getGalText('es'),
					'galeria_text_desc'=>$this->text->getGalDesc('es'),
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
			
		}else{
				//crea cookie
			Cookie::queue('redirect','galeria', 1);
			return Redirect::to('/');
		}
	}

	/**
	 * Muestra vine
	 *
	 * @return Response
	 */
	public function vine(){
		if (Cookie::get('zignum')==='recuerdame'||(Cookie::get('tempass')==='recuerdame')){
			try{
				if($_COOKIE['lengua']==='es'){
					Doc::keyword('Zignum - Lo Más Nuevo, Zignum novedades');
					Doc::title('Lo Más Nuevo de Zignum - Mezcales Zignumo');
					Doc::description("Zignum se hace presente en las redes sociales. Enterate de que es lo más nuevo en Zignum y la nueva forma de mezclar.");
					return View::make('vine',array(
						'vine_css'=>'/zignum/public/css/vine.css',
						'vine_js'=>'/zignum/public/js/vine.js',
						'menu'=>$this->text->getMenuArray('es')
						)
					);
				}else{
					Doc::keyword('Zignum - The newest,Zignum novelties');
					Doc::title('The newest of Zignum -  Zignum mezcals');
					Doc::description("Zignum is present in social media. Find here in our website about the newest from Zignum and the new way to mix, and enjoy it!");
					return View::make('vine',array(
						'vine_css'=>'/zignum/public/css/vine.css',
						'vine_js'=>'/zignum/public/js/vine.js',
						'menu'=>$this->text->getMenuArray('en')
						)
					);
				}

			}catch(Exception $e){
				setcookie('lengua','es');
				Doc::keyword('Zignum - Lo Más Nuevo, Zignum novedades');
				Doc::title('Lo Más Nuevo de Zignum - Mezcales Zignum');
				Doc::description("Zignum se hace presente en las redes sociales. Enterate de que es lo más nuevo en Zignum y la nueva forma de mezclar.");
				return View::make('vine',array(
					'vine_css'=>'/zignum/public/css/vine.css',
					'vine_js'=>'/zignum/public/js/vine.js',
					'menu'=>$this->text->getMenuArray('es')
					)
				);
			}
		}else{
			//crea cookie
			Cookie::queue('redirect','vine', 1);
			return Redirect::to('/');
		}
		
	}
	/**-------------------------------FUNCTIONS-----------------------------*/
	public function gamejson(){
		$places= \Thor\Models\Place::all();
		$fruit= \Thor\Models\Fruit::all();
		if($_COOKIE['lengua']==='es'){
			$companion= \Thor\Models\Companion::all();
		}else{
			$companion= \Thor\Models\CompanionText::all();
		}
		
		$aux_place=array();
		$i=0;
		$j=0;
		$k=0;
		foreach ($places as $key => $value) {
			$title="";
			if($_COOKIE['lengua']==='es'){
				$title=$value->title;
			}else{
				$title = \Thor\Models\PlaceText::find($value->id)->title;
			}
			$aux_place[$i]=array('title'=>$title,'icon'=>$value->icon);
			$i++;
		}
		$aux_companion=array();
		foreach ($companion as $key => $value) {
			$icon=null;
			if($_COOKIE['lengua']==='es'){
				$icon =$value->icon;
			}else{
				$icon = $value->icon_en;
			}
			$aux_companion[$j]=array('title'=>$value->title,'icon'=>$icon);
			$j++;
		}
		$aux_fruit=array();
		foreach ($fruit as $key => $value) {
			$title="";
			if($_COOKIE['lengua']==='es'){
				$title=$value->title;
			}else{
				$title = \Thor\Models\FruitText::find($value->id)->title;
			}
			$aux_fruit[$k]=array('title'=>$title,'icon'=>$value->icon);
			$k++;
		}
		$game_arr=array('places'=>$aux_place,'fruits'=>$aux_fruit,'companion'=>$aux_companion);

		$place_id=rand(0,(sizeof($aux_place)-1));
		$companion_id=rand(0,(sizeof($aux_companion)-1));
		$fruit_id=rand(0,(sizeof($aux_fruit)-1));
		$buscado = $aux_fruit[$fruit_id]['title'];
		if($_COOKIE['lengua']==='es'){
			$cocktail= \Thor\Models\Cocktail::where('instructions','LIKE','%'.$buscado.'%')->get();
			if(!count($cocktail)){
				while(!count($cocktail)){
					$cocktail = \Thor\Models\Cocktail::where('id','=',rand(0,(sizeof($aux_fruit)-1)))->get();
					$fruit_id = 1;
				}
			}
		}else{
			$cocktail= \Thor\Models\CocktailText::where('instructions','LIKE','%'.$buscado.'%')->get();
			if(!count($cocktail)){
				while(!count($cocktail)){
					$cocktail = \Thor\Models\CocktailText::where('id','=',rand(0,(sizeof($aux_fruit)-1)))->get();
					$fruit_id = 1;
				}
			}
		}

		$bebida ="";
		$img =  "";
		$bebida_name="";
		foreach ($cocktail as $key => $value) {
			if($_COOKIE['lengua']==='es'){
				$img = $value->cocktailimage;
			}else{
				$img = \Thor\Models\Cocktail::find($value->id)->cocktailimage;
			}
			$bebida_name = $value->name;
			$bebida=$value->product;
		}
		$linkdrink ="";
		if($bebida==='zignum_silver'){
			$bebidap=0;
			$linkdrink = "cocteleszignumsilver";
		}else{
			$bebidap=1;
			$linkdrink = "cocteleszignumreposado";
		}

		return Response::json(
			array(
				'game'=>$game_arr,
				'result'=>array(
					'place'=>$place_id,
					'companion'=>$companion_id,
					'fruit'=>$fruit_id,
					'producto'=>$bebidap,
					'cocktail_name'=>$bebida_name,
					'cocktail'=>$img,
					'cocktailproduct'=>$linkdrink
					)
				)
			);
	}
	/**
    *Method to get the data required for registration from GraphAPI Facebook
    *@return array containing the data from the queries.
    */
	//191661287535478
	public function feed(){
		$links = array();
		$images = array();
		$social = \Thor\Models\Socialpictures::all();
		foreach ($social as  $value) {
			$images[]=$value->image;
			if(!isset($value->url)){
				$links[]="";
			}else{
				$links[]=$value->url;
			}
		}
		$id = \Thor\Models\Vine::find(1)->vine;
		$pic = \Thor\Models\Vine::find(1)->icon;
		$images =array('vine'=>array(
			'vine_thumbnail' => $pic,
			'vine_video'=>$id),
			'feed_images'=>$images,
			'feed_link'=>$links
		);
		return Response::json($images);
	}


	/**
	*	Creates the json with the info about an album and its pictures
	*	@return Response Json
	*/
	public function gallerypictures(){
		$albums = \Thor\Models\Album::all();
		$album_json = array();
		foreach ($albums as $album) {
			$picture_json=array();
			$desc_en = array();
			$desc_es = array();
			$pictures = Thor\Models\Picture::where('album_id','=',$album->id)->get();
			foreach ($pictures as $picture) {
				$picture_json[]=$picture->picture;
				$desc_es[]=array($picture->alt,$picture->title);
				$desc_en[]=array($picture->alt_en,$picture->title_en);
			}
			$album_json[$album->album_name]=array(
				"description"=>$album->description,
				"pictures"=>$picture_json,
				'desc_en'=>$desc_en,
				'desc_es'=>$desc_es
				);
		}
		return Response::json($album_json);
	}

	/**
	 * Valida si marco el checkbox recuerdame
	 * @return Response
	 */
	public function validate(){
		if (Input::get('cookie') == 'yes'){
			//Cookie::queue('zignum', 'recuerdame', 120);
			$value=Cookie::get('redirect');
			if($value!=null){
				$response= Response::json(array('redirect' => $value));
				return $response->withCookie(Cookie::make('zignum', 'recuerdame', 120));
			}else{
				$response= Response::json(array('redirect' => 'home'));
				return $response->withCookie(Cookie::make('zignum', 'recuerdame', 120));
			}
		}else{
			//Cookie::queue('tempass', 'recuerdame', 30);
			$value=Cookie::get('redirect');
			if($value!=null){
				$response= Response::json(array('redirect' => $value));
				return $response->withCookie(Cookie::make('tempass', 'recuerdame', 30));
			}else{
				$response= Response::json(array('redirect' => 'home'));
				return $response->withCookie(Cookie::make('tempass', 'recuerdame', 30));
			}
		}
	}

	public function sendMail(){
		$data = Input::all();
		$datos =array("name"=>$data["s_name"],"email"=>$data["s_email"],"msg"=>$data["s_comment"]);
		Mail::send('emails.email', $datos, function($message){
			$message->to('contacto@agpch.mx', 'Zignum Mezcales')
			->subject('Zignum Mezcales');
		});
		/*Mail::send('emails.email', $datos, function($message){
			$message->to('zignum@zignummezcal.com.mx', 'Zignum Mezcales')
			->subject('Zignum Mezcales');
		});*/
		Mail::send('emails.email', $datos, function($message){
			$message->to('eduardo.miranda@grupojaque.com', 'Zignum Mezcales')
			->subject('Zignum Mezcales');
		});
	}

	public function sendMailTF(){
		$validation = Validator::make(
			array(
				's_name' => Input::get( 's_name' ),
				's_email' => Input::get( 's_email' ),
				),
			array(
				's_name' => array( 'required', 'alpha_dash' ),
				's_email' => array( 'required', 'email' ),
				)
			);
		if ( $validation->fails() ) {
			return Response::json(array('status' => $validation->fails()));
		}else{
			$data = Input::all();
			$datos =array("name"=>$data["s_name"],"email"=>$data["s_email"],"msg"=>$data["s_message"],"result"=>$data["s_mezcla"]);
			Mail::send('emails.email_friend', $datos, function($message) use ($datos){
				
				$message->to($datos["email"], $datos["name"])
				->subject('Mensaje de '.$datos["name"].' desde Zignum Mezcales');
			});

		}
		return Response::json(array('status' => 'success'));
	}

	public function getDownloadTerms(){
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "/download/Formulario.pdf";
    $headers = array(
      'Content-Type: application/pdf',
    );
    return Response::download($file, 'Formulario.pdf', $headers);
	}

	public function getDownloadProcedimiento(){
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "/download/Procedimiento_para_la_atencion.pdf";
    $headers = array(
      'Content-Type: application/pdf',
    );
    return Response::download($file, 'Procedimiento_para_la_atencion.pdf', $headers);
	}
}
?>