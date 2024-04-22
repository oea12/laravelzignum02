@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Album</h1>

        <p>{{ link_to_route('backend.albums.index', 'Return to all albums') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::model($record, array('method' => 'PATCH'
    , 'route' => array('backend.albums.do_edit', $record->id), 'role'=>'form')) }}
<?php
    $transl = $record->translation();
?>{{ Form::hidden('translation[id]', $transl->id) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Album Name', 'album_name', [], 'text',null, [])}}
        
                {{Form::bsField('Description', 'description', [], 'textarea',null, [])}}
        
               
        
                {{Form::bsField('Album Name ('.Lang::code().')', 'translation[album_name]', [], 'text',$transl->album_name, [])}}
        
                {{Form::bsField('Description ('.Lang::code().')', 'translation[description]', [], 'textarea',$transl->description, [])}}
        
                {{Form::bsField('Is translation finished? ('.Lang::code().')', 'translation[is_translated]', [], 'checkbox',$transl->is_translated, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'update')) }}
            {{ link_to_route('backend.albums.index', 'Cancel', array($record->id), array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop