<?php
namespace Thor\Backend;

use View,
Redirect,
Input;
/*
|--------------------------------------------------------------------------
| Backend controller for \Thor\Models\Companion 
|--------------------------------------------------------------------------
|
| This is a default Thor CMS backend controller template for resource management.
| Feel free to change it to your needs.
|
*/
class CompanionsController extends \Thor\Backend\Controller {

    /**
     * Model repository
     *
     * @var \Thor\Models\Companion     */
    protected $record;
    /**
    * Carpeta donde se guardaran las imagenes.
    */
    private $destination_path;

    public function __construct(\Thor\Models\Companion $record) {
      $this->record = $record;
      $this->destination_path= base_path().'/public/img/companion';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
      $records = $this->record->all();
      $module = \Thor\Models\Companion::relatedModule();
      return View::make('thor::backend.companions.index', compact('records', 'module'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \Thor\Models\Companion  $record 
     * @return Response
     */
    public function edit(\Thor\Models\Companion $record) {
      if (is_null($record)) {
        return Redirect::route('backend.companions.index');
      }
      $module = \Thor\Models\Companion::relatedModule();

      return View::make('thor::backend.companions.edit', compact('record', 'module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Thor\Models\Companion  $record 
     * @return Response
     */
    public function do_edit(\Thor\Models\Companion $record) {
      /*----------*/
      $input_text = Input::all();
      $input_file = array('file'=>Input::file('icon'),'file1'=>Input::file('icon_en'));
      $input = array_merge($input_text,$input_file);
      /*----------*/
        $transl_input = array_merge(array( // for unchecked checkboxes:
          'is_translated'=>false,
          ), array_except(Input::get('translation'), 'id'));
        $transl_record = new \Thor\Models\CompanionText();
        $transl_errors = array();
        
        if ($record->validate($input)) {
          /*----------*/
          if (Input::hasFile('icon')){
            $filename = $this->uploadFile('icon',$this->destination_path,Input::file('icon'));
            $input['icon']=$filename;
          }else{
            $input['icon']= \Thor\Models\Companion::find($record->id)->icon;
          } 
          /*----------*/
          $record->update($input);
          if ($transl_record->validate($transl_input)) {
                // Save translation
            if (Input::get('translation.id')) {
              $transl_record = \Thor\Models\CompanionText::find(Input::get('translation.id'));
              /*----------*/
              if (Input::hasFile('icon_en')){
                $filename = $this->uploadFile('icon_en',$this->destination_path,Input::file('icon_en'));
                $transl_input['icon_en']=$filename;
                var_dump($transl_input);
              }else{
                $transl_input['icon_en']= \Thor\Models\CompanionText::find($record->id)->icon_en;
              } 
              /*----------*/
              $transl_record->update($transl_input);
            } else {
              $transl_record = $transl_record->create(array_merge(array('language_id' => \Lang::id(), 'companion_id' => $record->id), $transl_input));
            }
            var_dump($transl_input);
            $records = $this->record->all();
            $module = \Thor\Models\Companion::relatedModule();
            return View::make('thor::backend.companions.index', compact('records', 'module'));
          }else{
            $transl_errors = $transl_record->errors();
          }
        }
        
        return Redirect::route('backend.companions.edit', $record->id)
        ->withInput()
        ->withErrors($record->errors())
        ->withErrors($transl_errors)                        ->with('message', 'There were validation errors.');
      }

  }
