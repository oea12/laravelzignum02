<?php
namespace Thor\Backend;

use View,
Redirect,
Input;
/*
|--------------------------------------------------------------------------
| Backend controller for \Thor\Models\Vine 
|--------------------------------------------------------------------------
|
| This is a default Thor CMS backend controller template for resource management.
| Feel free to change it to your needs.
|
*/
class VinesController extends \Thor\Backend\Controller {

  /**
     * Model repository
     *
     * @var \Thor\Models\Vine     */
  protected $record;
  /**
  * Carpeta donde se guardaran las imagenes.
  */
  private $destination_path;
  public function __construct(\Thor\Models\Vine $record) {
    $this->record = $record;
    $this->destination_path= base_path().'/public/img/vine';
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
     * Display a listing of the resource.
     *
     * @return Response
     */
  public function index() {
    $records = $this->record->all();
    $module = \Thor\Models\Vine::relatedModule();
    return View::make('thor::backend.vines.index', compact('records', 'module'));
  }

  /**
     * Display the specified resource.
     *
     * @param  \Thor\Models\Vine  $record 
     * @return Response
     */
  public function show(\Thor\Models\Vine $record) {
    $module = \Thor\Models\Vine::relatedModule();
    return View::make('thor::backend.vines.show', compact('record', 'module'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \Thor\Models\Vine  $record 
  * @return Response
  */
  public function edit(\Thor\Models\Vine $record) {
    if (is_null($record)) {
      return Redirect::route('backend.vines.index');
    }
    $module = \Thor\Models\Vine::relatedModule();

    return View::make('thor::backend.vines.edit', compact('record', 'module'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Thor\Models\Vine  $record 
  * @return Response
  */
  public function do_edit(\Thor\Models\Vine $record) {
     /*----------*/
      $input_text = Input::all();
      $input_file = array('file'=>Input::file('icon'));
      $input = array_merge($input_text,$input_file);
      /*----------*/
    if ($record->validate($input)) {
      /*----------*/
      if (Input::hasFile('icon')){
        $filename = $this->uploadFile('icon',$this->destination_path,Input::file('icon'));
        $input['icon']=$filename;
      }else{
        $input['icon']= \Thor\Models\Vine::find($record->id)->icon;
      } 
      /*----------*/
      $record->update($input);
      $records = $this->record->all();
      $module = \Thor\Models\Vine::relatedModule();
      return View::make('thor::backend.vines.index', compact('records', 'module'));
    }
    
    return Redirect::route('backend.vines.edit', $record->id)
    ->withInput()
    ->withErrors($record->errors())
    ->with('message', 'There were validation errors.');
  }

}
