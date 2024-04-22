<?php
namespace Thor\Backend;
use View,
Redirect,
Input;
    /*
    |--------------------------------------------------------------------------
    | Backend controller for \Thor\Models\Place 
    |--------------------------------------------------------------------------
    |
    | This is a default Thor CMS backend controller template for resource management.
    | Feel free to change it to your needs.
    |
    */
    class PlacesController extends \Thor\Backend\Controller {

        /**
         * Model repository
         *
         * @var \Thor\Models\Place     */
        protected $record;
        /**
        * Carpeta donde se guardaran las imagenes.
        */
        private $destination_path;

        public function __construct(\Thor\Models\Place $record) {
          $this->destination_path= base_path().'/public/img/places';
          $this->record = $record;
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index() {
          $records = $this->record->orderBy('id','asc')->get();
          $module = \Thor\Models\Place::relatedModule();
          return View::make('thor::backend.places.index', compact('records', 'module'));
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
         * @param  \Thor\Models\Place  $record 
         * @return Response
         */
        public function edit(\Thor\Models\Place $record) {
          if (is_null($record)) {
            return Redirect::route('backend.places.index');
          }        $module = \Thor\Models\Place::relatedModule();

          return View::make('thor::backend.places.edit', compact('record', 'module'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Thor\Models\Place  $record 
         * @return Response
         */
        public function do_edit(\Thor\Models\Place $record) {
          /*----------*/
          $input_text = Input::all();
          $input_file = array('file'=>Input::file('icon'));
          $input = array_merge($input_text,$input_file);
          /*----------*/
            $transl_input = array_merge(array( // for unchecked checkboxes:
              'is_translated'=>false,
              ), array_except(Input::get('translation'), 'id'));
            
            $transl_record = new \Thor\Models\PlaceText();
            $transl_errors = array();
            
            if ($record->validate($input)) {
              /*----------*/
              if (Input::hasFile('image')){
                $filename = $this->uploadFile('image',$this->destination_path,Input::file('image'));
                $input['image']=$filename;
              }else{
                $input['image']= \Thor\Models\Place::find($record->id)->image;
              } 
              /*----------*/
              $record->update($input);
              if ($transl_record->validate($transl_input)) {
                // Save translation
                if (Input::get('translation.id')) {
                  $transl_record = \Thor\Models\PlaceText::find(Input::get('translation.id'));
                  $transl_record->update($transl_input);
                } else {
                  $transl_record = $transl_record->create(array_merge(array('language_id' => \Lang::id(), 'place_id' => $record->id), $transl_input));
                }
                $records = $this->record->all();
                $module = \Thor\Models\Place::relatedModule();
                return View::make('thor::backend.places.index', compact('records', 'module'));
              }else{
                $transl_errors = $transl_record->errors();
              }
            }
            return Redirect::route('backend.places.edit', $record->id)
            ->withInput()
            ->withErrors($record->errors())
            ->withErrors($transl_errors)->with('message', 'There were validation errors.');
          }

        }
