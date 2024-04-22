<?php
namespace Thor\Backend;

use View,
Redirect,
Input;
/*
|--------------------------------------------------------------------------
| Backend controller for \Thor\Models\Cocktail 
|--------------------------------------------------------------------------
|
| This is a default Thor CMS backend controller template for resource management.
| Feel free to change it to your needs.
|
*/
class CocktailsController extends \Thor\Backend\Controller {

    /**
     * Model repository
     *
     * @var \Thor\Models\Cocktail     */
    protected $record;
    /**
    * Carpeta donde se guardaran las imagenes.
    */
    private $destination_path;
    /*
    * Carpeta donde se guardaran los videos
    */
    private $video_destination_path;
    /*
    * Carpeta donde se guardaran los iconos
    */
    private $destination_icon_path;

    public function __construct(\Thor\Models\Cocktail $record) {
      $this->record = $record;
      $this->destination_path= base_path().'/public/img/coctel';
      $this->destination_icon_path= base_path().'/public/img/coctel/icon';
      $this->video_destination_path= base_path().'/public/img/coctelvideo';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
      $records = $this->record->all();
      $module = \Thor\Models\Cocktail::relatedModule();

      return View::make('thor::backend.cocktails.index', compact('records', 'module'));
    }


    /**
    * Metodo que obtinene los datos de la imagen subida
    * y la renombre
    * @return Nombre de la imagen renombrada
    */
    public function uploadFile($input_name,$upload_path,$file){
      $filename = str_random(12);
        //$filename = $file1->getClientOriginalName();
      $extension =$file->getClientOriginalExtension();
      $filename=$filename.'.'.$extension; 
      $upload_success = Input::file($input_name)->move($upload_path, $filename);
      if($upload_success){
        return $filename;
      }else{

      }
    }

    /**
    * Metodo que obtinene los datos de la imagen subida
    * y la renombre
    * @return Nombre de la imagen renombrada
    */
    public function uploadVideo($input_name,$upload_path,$file){
      $filename = str_random(12);
      //$filename = $file1->getClientOriginalName();
      $extension =$file->getClientOriginalExtension();
      $filename=$filename.'.'.$extension; 
      $upload_success = Input::file($input_name)->move($upload_path, $filename);
      if($upload_success){
        return $filename;
      }else{

      }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
      $module = \Thor\Models\Cocktail::relatedModule();
      $options=array('zignum_silver'=>'Zignum Silver','zignum_reposado'=>'Zignum Reposado',);
      return View::make('thor::backend.cocktails.create', compact('module','options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function do_create() {
      /*----------*/
      $input_text = Input::all();
      $input_file = array(
        'file'=>Input::file('cocktailimage'),
        'file'=>Input::file('cocktailicon'),
        'video_mp4'=>Input::file('video_mp4'),
        'video_ogg'=>Input::file('video_ogg'),
        'video_web'=>Input::file('video_web'),
      );
      $input = array_merge($input_text,$input_file);
      /*----------*/
      $transl_record = new \Thor\Models\CocktailText();
      $transl_input = array_except(Input::get('translation'), 'id');
      $transl_errors = array();

      if ($this->record->validate($input)) {
        /*----------*/
        if (Input::hasFile('cocktailimage')){
          $filename = $this->uploadFile('cocktailimage',$this->destination_path,Input::file('cocktailimage'));
          $input['cocktailimage']=$filename;
        }

        if(Input::hasFile('cocktailicon')){
          $filename = $this->uploadFile('cocktailicon',$this->destination_path,Input::file('cocktailicon'));
          $input['cocktailicon']=$filename;
        }
        //Video Mp4
        if(Input::hasFile('video_mp4')){
          $filename = $this->uploadVideo('video_mp4',$this->video_destination_path,Input::file('video_mp4'));
          $input['video_mp4']=$filename;
        }
        //Video ogg
        if(Input::hasFile('video_ogg')){
          $filename = $this->uploadVideo('video_ogg',$this->video_destination_path,Input::file('video_ogg'));
          $input['video_ogg']=$filename;
        }
        //Video Webm
        if(Input::hasFile('video_web')){
          $filename = $this->uploadVideo('video_web',$this->video_destination_path,Input::file('video_web'));
          $input['video_web']=$filename;
        } 
        /*----------*/
        $record = $this->record->create($input);
        if ($transl_record->validate($transl_input)) {
          $transl_record = $transl_record->create(array_merge(array('language_id' => \Lang::id(), 'cocktail_id' => $record->id), $transl_input));
          $records = $this->record->all();
          $module = \Thor\Models\Cocktail::relatedModule();
          return View::make('thor::backend.cocktails.index', compact('records', 'module'));
        }else{
          $transl_errors = $transl_record->errors();
        }
      }

      return Redirect::route('backend.cocktails.create')
      ->withInput()
      ->withErrors($this->record->errors())
      ->withErrors($transl_errors)                        ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Thor\Models\Cocktail  $record 
     * @return Response
     */
    public function show(\Thor\Models\Cocktail $record) {
      $module = \Thor\Models\Cocktail::relatedModule();
      return View::make('thor::backend.cocktails.show', compact('record', 'module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Thor\Models\Cocktail  $record 
     * @return Response
     */
    public function edit(\Thor\Models\Cocktail $record) {
      if (is_null($record)) {
        return Redirect::route('backend.cocktails.index');
      }
      $module = \Thor\Models\Cocktail::relatedModule();

      $options=array('zignum_silver'=>'Zignum Silver','zignum_reposado'=>'Zignum Reposado',);
      return View::make('thor::backend.cocktails.edit', compact('record', 'module','options'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Thor\Models\Cocktail  $record 
     * @return Response
     */
    public function do_edit(\Thor\Models\Cocktail $record) {
      /*----------*/
      $input_text = Input::all();
      $input_file = array(
        'file'=>Input::file('cocktailimage'),
        'file'=>Input::file('cocktailicon'),
        'video_mp4'=>Input::file('video_mp4'),
        'video_ogg'=>Input::file('video_ogg'),
        'video_web'=>Input::file('video_web')
        );
      $input = array_merge($input_text,$input_file);
      /*----------*/
        $transl_input = array_merge(array( // for unchecked checkboxes:                                                                                                    'is_translated'=>false,
          ), array_except(Input::get('translation'), 'id'));
        $transl_record = new \Thor\Models\CocktailText();
        $transl_errors = array();
        
        if ($record->validate($input)) {
        /*----------*/
        if (Input::hasFile('cocktailimage')){
          $filename = $this->uploadFile('cocktailimage',$this->destination_path,Input::file('cocktailimage'));
          $input['cocktailimage']=$filename;
        }else{
          $input['cocktailimage']= \Thor\Models\Cocktail::find($record->id)->cocktailimage;
        }  
        if(Input::hasFile('cocktailicon')){
          $filename = $this->uploadFile('cocktailicon',$this->destination_icon_path,Input::file('cocktailicon'));
          $input['cocktailicon']=$filename;
        }else{
          $input['cocktailicon']= \Thor\Models\Cocktail::find($record->id)->cocktailicon;
        } 

        //Video Mp4
        if(Input::hasFile('video_mp4')){
          $filename = $this->uploadVideo('video_mp4',$this->video_destination_path,Input::file('video_mp4'));
          $input['video_mp4']=$filename;
        }else{
          $input['video_mp4']= \Thor\Models\Cocktail::find($record->id)->video_mp4;
        }
        //Video ogg
        if(Input::hasFile('video_ogg')){
          $filename = $this->uploadVideo('video_ogg',$this->video_destination_path,Input::file('video_ogg'));
          $input['video_ogg']=$filename;
        }else{
          $input['video_ogg']= \Thor\Models\Cocktail::find($record->id)->video_ogg;
        } 
        //Video Webm
        if(Input::hasFile('video_web')){
          $filename = $this->uploadVideo('video_web',$this->video_destination_path,Input::file('video_web'));
          $input['video_web']=$filename;
        }else{
          $input['video_web']= \Thor\Models\Cocktail::find($record->id)->video_web;
        }
        $record->update($input);
        if ($transl_record->validate($transl_input)) {

                // Save translation
          if (Input::get('translation.id')) {
            $transl_record = \Thor\Models\CocktailText::find(Input::get('translation.id'));
            $transl_record->update($transl_input);
          } else {
            $transl_record = $transl_record->create(array_merge(array('language_id' => \Lang::id(), 'cocktail_id' => $record->id), $transl_input));
          }
          $records = $this->record->all();
          $module = \Thor\Models\Cocktail::relatedModule();
          return View::make('thor::backend.cocktails.index', compact('records', 'module'));
        }else{
          $transl_errors = $transl_record->errors();
        }
      }
      
      return Redirect::route('backend.cocktails.edit', $record->id)
      ->withInput()
      ->withErrors($record->errors())
      ->withErrors($transl_errors)                        ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Thor\Models\Cocktail  $record 
     * @return Response
     */
    public function do_delete(\Thor\Models\Cocktail $record) {
      $record->delete();

      return Redirect::route('backend.cocktails.index');
    }

  }
