<?php
namespace Thor\Backend;

use View,
Redirect,
Input;
/*
|--------------------------------------------------------------------------
| Backend controller for \Thor\Models\Album 
|--------------------------------------------------------------------------
|
| This is a default Thor CMS backend controller template for resource management.
| Feel free to change it to your needs.
|
*/
class AlbumsController extends \Thor\Backend\Controller {

    /**
     * Model repository
     *
     * @var \Thor\Models\Album     */
    protected $record;

    public function __construct(\Thor\Models\Album $record) {
      $this->record = $record;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
      $records = $this->record->all();
      $module = \Thor\Models\Album::relatedModule();
      return View::make('thor::backend.albums.index', compact('records', 'module'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
      $module = \Thor\Models\Album::relatedModule();
      return View::make('thor::backend.albums.create', compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function do_create() {
      $input = Input::all();
      $transl_record = new \Thor\Models\AlbumText();
      $transl_input = array_except(Input::get('translation'), 'id');
      $transl_errors = array();
      
      if ($this->record->validate($input)) {
        $record = $this->record->create($input);
        if ($transl_record->validate($transl_input)) {
          $transl_record = $transl_record->create(array_merge(array('language_id' => \Lang::id(), 'album_id' => $record->id), $transl_input));
          $records = $this->record->all();
          $module = \Thor\Models\Album::relatedModule();
          return View::make('thor::backend.albums.index', compact('records', 'module'));
        }else{
          $transl_errors = $transl_record->errors();
        }
      }

      return Redirect::route('backend.albums.create')
      ->withInput()
      ->withErrors($this->record->errors())
      ->withErrors($transl_errors)                        ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Thor\Models\Album  $record 
     * @return Response
     */
    public function show(\Thor\Models\Album $record) {
      $module = \Thor\Models\Album::relatedModule();
      return View::make('thor::backend.albums.show', compact('record', 'module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Thor\Models\Album  $record 
     * @return Response
     */
    public function edit(\Thor\Models\Album $record) {
      if (is_null($record)) {
        return Redirect::route('backend.albums.index');
      }
      $module = \Thor\Models\Album::relatedModule();

      return View::make('thor::backend.albums.edit', compact('record', 'module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Thor\Models\Album  $record 
     * @return Response
     */
    public function do_edit(\Thor\Models\Album $record) {
        $input = array_merge(array( // for unchecked checkboxes:
          ), Input::all());
        
                $transl_input = array_merge(array( // for unchecked checkboxes:
                  'is_translated'=>false,
                  ), array_except(Input::get('translation'), 'id'));
                $transl_record = new \Thor\Models\AlbumText();
                $transl_errors = array();
                
                if ($record->validate($input)) {
                  $record->update($input);
                  if ($transl_record->validate($transl_input)) {
                    
                // Save translation
                    if (Input::get('translation.id')) {
                      $transl_record = \Thor\Models\AlbumText::find(Input::get('translation.id'));
                      $transl_record->update($transl_input);
                    } else {
                      $transl_record = $transl_record->create(array_merge(array('language_id' => \Lang::id(), 'album_id' => $record->id), $transl_input));
                    }
                    $records = $this->record->all();
                    $module = \Thor\Models\Album::relatedModule();
                    return View::make('thor::backend.albums.index', compact('records', 'module'));
                  }else{
                    $transl_errors = $transl_record->errors();
                  }
                }
                
                return Redirect::route('backend.albums.edit', $record->id)
                ->withInput()
                ->withErrors($record->errors())
                ->withErrors($transl_errors)                        ->with('message', 'There were validation errors.');
              }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Thor\Models\Album  $record 
     * @return Response
     */
    public function do_delete(\Thor\Models\Album $record) {
      $record->delete();

      return Redirect::route('backend.albums.index');
    }

  }
