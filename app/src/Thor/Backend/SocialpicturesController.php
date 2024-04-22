<?php
namespace Thor\Backend;

use View,
Redirect,
Input;
/*
|--------------------------------------------------------------------------
| Backend controller for \Thor\Models\Socialpictures 
|--------------------------------------------------------------------------
|
| This is a default Thor CMS backend controller template for resource management.
| Feel free to change it to your needs.
|
*/
class SocialpicturesController extends \Thor\Backend\Controller {

    /**
     * Model repository
     *
     * @var \Thor\Models\Socialpictures     */
    protected $record;

     /**
      * Carpeta donde se guardaran las imagenes.
      */
     private $destination_path;

     public function __construct(\Thor\Models\Socialpictures $record) {
      $this->record = $record;
      $this->destination_path= base_path().'/public/img/socialimages';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
      $records = $this->record->all();
      $module = \Thor\Models\Socialpictures::relatedModule();

      return View::make('thor::backend.socialpictures.index', compact('records', 'module'));
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
      $module = \Thor\Models\Socialpictures::relatedModule();
      return View::make('thor::backend.socialpictures.create', compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function do_create() {
      $input_text = Input::all();
      /*----------*/
      $input_file = array('file'=>Input::file('image'));
      $input = array_merge($input_text,$input_file);
      /*----------*/

      if ($this->record->validate($input)) {
        /*----------*/
        if (Input::hasFile('image')){
          $filename = $this->uploadFile('image',$this->destination_path,Input::file('image'));
          $input['image']=$filename;
        }else{
          $input['image']= \Thor\Models\Socialpictures::find($record->id)->image;
        } 
        /*----------*/
        $record = $this->record->create($input);
        return Redirect::route('backend.socialpictures.index', array($record->id));
      } 

      return Redirect::route('backend.socialpictures.create')
      ->withInput()
      ->withErrors($this->record->errors())
      ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Thor\Models\Socialpictures  $record 
     * @return Response
     */
    public function show(\Thor\Models\Socialpictures $record) {
      $module = \Thor\Models\Socialpictures::relatedModule();
      return View::make('thor::backend.socialpictures.show', compact('record', 'module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Thor\Models\Socialpictures  $record 
     * @return Response
     */
    public function edit(\Thor\Models\Socialpictures $record) {
      if (is_null($record)) {
        return Redirect::route('backend.socialpictures.index');
      }
      $module = \Thor\Models\Socialpictures::relatedModule();

      return View::make('thor::backend.socialpictures.edit', compact('record', 'module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Thor\Models\Socialpictures  $record 
     * @return Response
     */
    public function do_edit(\Thor\Models\Socialpictures $record) {
        $input_text = Input::all();
        /*----------*/
        $input_file = array('file'=>Input::file('image'));
        $input = array_merge($input_text,$input_file);
        /*----------*/
        if ($record->validate($input)) {
          /*----------*/
        if (Input::hasFile('image')){
          $filename = $this->uploadFile('image',$this->destination_path,Input::file('image'));
          $input['image']=$filename;
        }else{
          $input['image']= \Thor\Models\Socialpictures::find($record->id)->image;
        } 
        /*----------*/
          $record->update($input);
          return Redirect::route('backend.socialpictures.index', $record->id);
        }
        
        return Redirect::route('backend.socialpictures.edit', $record->id)
        ->withInput()
        ->withErrors($record->errors())
        ->with('message', 'There were validation errors.');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Thor\Models\Socialpictures  $record 
     * @return Response
     */
    public function do_delete(\Thor\Models\Socialpictures $record) {
      $record->delete();

      return Redirect::route('backend.socialpictures.index');
    }

  }
