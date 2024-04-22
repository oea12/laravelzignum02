<?php
//Route::get('sitemap.xml','MainController@sitemap');
    Route::get('sitemap.xml',function(){
        $file = public_path(). "/views/sitemap.xml";  // <- Replace with the path to your .xml file
        // check if the file exists
        if (file_exists($file)) {
            // read the file into a string
            $content = file_get_contents($file);
            // create a Laravel Response using the content string, an http response code of 200(OK),
            //  and an array of html headers including the pdf content type
            return Response::make($content, 200, array('content-type'=>'application/xml'));
        }
    });
// When visitors hit the root path, redirect them to the default language
    Route::get('/', 'MainController@index');
    Route::get('/home', 'MainController@home');
    Route::get('/zignumsilver', 'MainController@zignumsilver');
    Route::get('/zignumreposado', 'MainController@zignumreposado');
    Route::get('/zignumanejo', 'MainController@zignumanejo');
    Route::get('/zignumelmezcal', 'MainController@zignumelmezcal');
    Route::get('/mezclaperfecta', 'MainController@mezclaperfecta');
    Route::get('/premios', 'MainController@premios');
    Route::get('/galeria','MainController@galeria');
    Route::get('/contacto','MainController@contacto');
    Route::get('/elmezcal','MainController@elmezcal');
    Route::get('/cocteleszignumreposado', 'MainController@cocteleszignumreposado');
    Route::get('/cocteleszignumsilver', 'MainController@cocteleszignumsilver');
    Route::get('/lomasnuevo', 'MainController@vine');
    Route::get('/gamejson', 'MainController@gamejson');
    Route::post('/validate', 'MainController@validate');
    Route::get('/gallerypictures', 'MainController@gallerypictures');
    Route::post('/sendmail', 'MainController@sendMail');
    Route::post('/sendmailtf', 'MainController@sendMailTF');
    Route::get('/feed', 'MainController@feed');
    Route::get('/formulario', 'MainController@getDownloadTerms');
    Route::get('/procedimiento', 'MainController@getDownloadProcedimiento');

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception){ 
  return Redirect::to('/');
});