<?php
namespace Thor\Backend;

use View,
Redirect,
Input;
/*
|--------------------------------------------------------------------------
| Backend controller for \Thor\Models\Picture 
|--------------------------------------------------------------------------
|
| This is a default Thor CMS backend controller template for resource management.
| Feel free to change it to your needs.
|
*/
class PicturesController extends \Thor\Backend\Controller {

    /**
     * Model repository
     *
     * @var \Thor\Models\Picture     */
    protected $record;
    private $album_id;
    /**
      * Carpeta donde se guardaran las imagenes.
      */
    private $destination_path;

    public function __construct(\Thor\Models\Picture $record) {
      $this->record = $record;
      $this->destination_path= base_path().'/public/img/album';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($album_id) {
      $this->album_id=$album_id;
      $album = \Thor\Models\Album::find($album_id);
      $records =\Thor\Models\Picture::where('album_id','=',$album_id)->get();
      $module = \Thor\Models\Picture::relatedModule();
      return View::make('thor::backend.pictures.index', compact('records', 'module','album'));
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
      $filename='album_'.$this->album_id.'_'.$filename.'.'.$extension; 
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
    public function create($album_id){
      $module = \Thor\Models\Picture::relatedModule();
      $album = \Thor\Models\Album::find($album_id);
      return View::make('thor::backend.pictures.create', compact('module','album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function do_create() {
      
      /*----------*/
      $input_text = Input::all();
      $this->album_id = (Int)$input_text['id'];
      $input_file = array('file'=>Input::file('picture'));
      $input = array_merge($input_text,$input_file);
      /*----------*/
      
      $transl_errors = array();

      if ($this->record->validate($input)) {
        /*----------*/
        if (Input::hasFile('picture')){
          $filename = $this->uploadFile('picture',$this->destination_path,Input::file('picture'));
          $input['picture']=$filename;
        }
        /*----------*/
        $record = $this->record->create(array_merge($input,array('album_id'=>$this->album_id)));
        return Redirect::route('backend.pictures.index', $this->album_id);
      }

      return Redirect::route('backend.pictures.create',$this->album_id)
      ->withInput()
      ->withErrors($this->record->errors())
      ->withErrors($transl_errors)                        ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Thor\Models\Picture  $record 
     * @return Response
     */
    public function show($album_id,$id) {
      $record =\Thor\Models\Picture::find($id);
      $module = \Thor\Models\Picture::relatedModule();
      return View::make('thor::backend.pictures.show', compact('record', 'module','album_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Thor\Models\Picture  $record 
     * @return Response
     */
    public function edit($album_id,$id) {
      $record =\Thor\Models\Picture::find($id);
      if (is_null($record)) {
        return Redirect::route('backend.pictures.index');
      }
      $module = \Thor\Models\Picture::relatedModule();
      $album = \Thor\Models\Album::find($album_id);
      return View::make('thor::backend.pictures.edit', compact('record', 'module','album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Thor\Models\Picture  $record 
     * @return Response
     */
    public function do_edit(\Thor\Models\Picture $record) {
      
      /*----------*/
      $input_text = Input::all();
      $this->album_id = (Int)$input_text['id'];
      $input_file = array('file'=>Input::file('picture'));
      $input = array_merge($input_text,$input_file);
      /*----------*/
       
        $transl_errors = array();
        if ($record->validate($input)) {
          /*----------*/
          if (Input::hasFile('picture')){
            $filename = $this->uploadFile('picture',$this->destination_path,Input::file('picture'));
            $input['picture']=$filename;
          }else{
                $input['picture']= \Thor\Models\Picture::find($record->id)->picture;
          } 
          /*----------*/
          $record->update($input);
            return Redirect::route('backend.pictures.index', $this->album_id);
        }
        return Redirect::route('backend.pictures.edit', array($this->album_id,$record->id))
        ->withInput()
        ->withErrors($record->errors())
        ->withErrors($transl_errors)->with('message', 'There were validation errors.');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Thor\Models\Picture  $record 
     * @return Response
     */
    public function do_delete($album_id,$id) {
      $record=\Thor\Models\Picture::find($id);
      $record->delete();

      return Redirect::route('backend.pictures.index',$album_id);
    }

  }