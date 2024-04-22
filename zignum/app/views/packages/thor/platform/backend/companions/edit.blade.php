@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Companion</h1>

        <p>{{ link_to_route('backend.companions.index', 'Return to all companions') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::model($record, array('method' => 'PATCH'
    , 'route' => array('backend.companions.do_edit', $record->id), 'role'=>'form','file' => true, 'enctype' => 'multipart/form-data')) }}
<?php
    $transl = $record->translation();
?>{{ Form::hidden('translation[id]', $transl->id) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Title', 'title', [], 'text',null, [])}}
        
                {{Form::bsField('Icon', 'icon', [], 'file',null, [])}}
        
               
        
                {{Form::bsField('Title ('.Lang::code().')', 'translation[title]', [], 'text',$transl->title, [])}}
                {{Form::bsField('Icon ('.Lang::code().')', 'icon_en', [], 'file',null, [])}}
                {{Form::bsField('Is translation finished? ('.Lang::code().')', 'translation[is_translated]', [], 'checkbox',$transl->is_translated, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'update')) }}
            {{ link_to_route('backend.companions.index', 'Cancel', array($record->id), array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop