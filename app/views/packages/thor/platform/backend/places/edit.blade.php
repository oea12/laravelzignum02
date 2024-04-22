@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Place</h1>

        <p>{{ link_to_route('backend.places.index', 'Return to all places') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::model($record, array('method' => 'PATCH'
    , 'route' => array('backend.places.do_edit', $record->id), 'role'=>'form','file' => true, 'enctype' => 'multipart/form-data')) }}
<?php
    $transl = $record->translation();
?>{{ Form::hidden('translation[id]', $transl->id) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Title', 'title', [], 'text',null, [])}}
        
                {{Form::bsField('Icon', 'icon', [], 'file',null, [])}}
        
               
        
                {{Form::bsField('Title ('.Lang::code().')', 'translation[title]', [], 'text',$transl->title, [])}}
        
                {{Form::bsField('Is translation finished? ('.Lang::code().')', 'translation[is_translated]', [], 'checkbox',$transl->is_translated, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'update')) }}
            {{ link_to_route('backend.places.index', 'Cancel', array($record->id), array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop