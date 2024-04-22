<?php

// Backend basic routes

$backend_basepath = Backend::config('basepath');

// Redirect to a lang
Route::any('/' . $backend_basepath . '/', array('as' => 'backend.root', 'uses' => function() {
return Redirect::to(Backend::url(), 302);
}
));

// Backend routes that doesn't need auth
Route::langGroup(array('prefix' => $backend_basepath), function() {
    // Backend Confide routes (that doesn't need auth)
    Route::get('login', array('as' => 'backend.login', 'uses' => '\\Thor\\Backend\\AuthController@login'));
    Route::post('login', '\\Thor\\Backend\\AuthController@do_login');
    Route::get('auth/confirm/{code}', '\\Thor\\Backend\\AuthController@confirm');
    Route::get('auth/forgot_password', array('as' => 'backend.forgot_password', 'uses' => '\\Thor\\Backend\\AuthController@forgot_password'));
    Route::post('auth/forgot_password', '\\Thor\\Backend\\AuthController@do_forgot_password');
    Route::get('auth/reset_password/{token}', '\\Thor\\Backend\\AuthController@reset_password');
    Route::post('auth/reset_password', '\\Thor\\Backend\\AuthController@do_reset_password');
});

// Backend routes with auth
Route::langGroup(array('prefix' => $backend_basepath, 'before' => 'auth.backend'), function() {
    // Backend home
    Route::any('/', array('as' => 'backend.home', 'uses' => '\\Thor\\Backend\\MainController@index'));

    // Backend Confide routes
    Route::get('logout', array('as' => 'backend.logout', 'uses' => '\\Thor\\Backend\\AuthController@logout'));
});

Route::get('pictures/{album_id}',array('as'=>'backend.pictures.index','uses'=>'\Thor\Backend\PicturesControllerPicturesController@index','before'=>'entrust.list_pictures'));
/*Route::get($plural . '/{' . $singular . '}/show', array('as' => $rt . '.show', 'uses' => $ctrl . '@show', 'before' => 'entrust.read_' . $plural));
Route::get($plural . '/create', array('as' => $rt . '.create', 'uses' => $ctrl . '@create', 'before' => 'entrust.create_' . $plural));
Route::post($plural, array('as' => $rt . '.do_create', 'uses' => $ctrl . '@do_create', 'before' => 'entrust.create_' . $plural));
Route::get($plural . '/{' . $singular . '}', array('as' => $rt . '.edit', 'uses' => $ctrl . '@edit', 'before' => 'entrust.update_' . $plural));
Route::patch($plural . '/{' . $singular . '}', array('as' => $rt . '.do_edit', 'uses' => $ctrl . '@do_edit', 'before' => 'entrust.update_' . $plural));
Route::delete($plural . '/{' . $singular . '}', array('as' => $rt . '.do_delete', 'uses' => $ctrl . '@do_delete', 'before' => 'entrust.delete_' . $plural));
*/
// Base modules
CRUD::routes('permission', true);
CRUD::routes('role', true);
CRUD::routes('user', true);
CRUD::routes('language', true);
CRUD::routes('module', true);

// Registered modules
foreach (Backend::modules() as $module) {
    CRUD::routes($module->name, true, $module->controller_class, $module->module_class);
    if($module->is_pageable){
        Route::registerPageable($module->model_class);
    }
}
// All other multilingual routes
Route::langGroup(function() {
    Route::get('/pictures/{album_id}',array('as'=>'backend.pictures.index','uses'=>'\Thor\Backend\PicturesController@index','before'=>'entrust.list_pictures'));
    Route::get('/pictures/{album_id}/show/{id}', array('as' => 'backend.pictures.show', 'uses' => '\Thor\Backend\PicturesController@show', 'before' => 'entrust.read_pictures'));
    Route::get('/pictures/{album_id}/create', array('as' => 'backend.pictures.create', 'uses' => '\Thor\Backend\PicturesController@create', 'before' => 'entrust.create_pictures'));
    Route::post('/pictures', array('as' => 'backend.pictures.do_create', 'uses' => '\Thor\Backend\PicturesController@do_create', 'before' => 'entrust.create_pictures'));
    Route::get('/pictures/{album_id}/edit/{id}', array('as' => 'backend.pictures.edit', 'uses' => '\Thor\Backend\PicturesController@edit', 'before' => 'entrust.update_pictures'));
    Route::delete('/pictures/{album_id}/delete/{id}', array('as' => 'backend.pictures.do_delete', 'uses' => '\Thor\Backend\PicturesController@do_delete', 'before' => 'entrust.delete_pictures'));
});


// Site 404
App::missing(function($e) {
    if (Backend::requestIsBackend()) {
        return Response::view('thor::backend.error', array('page' => 'error'), 404);
    } else {
        Doc::title('Error 404')->h1('Error 404')->content('Page Not Found')->error(true);
        return Response::view('404', array(), 404);
    }
});
