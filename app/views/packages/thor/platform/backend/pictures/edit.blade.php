@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Pictures from Album {{$album->album_name}} </h1>

        <p>{{ link_to_route('backend.pictures.index', 'Return to all pictures', array($album->id)) }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::model($record, array('method' => 'PATCH'
    , 'route' => array('backend.pictures.do_edit', $record->id), 'role'=>'form','file' => true, 'enctype' => 'multipart/form-data')) }}
<?php
    $transl = $record->translation();
?>{{ Form::hidden('translation[id]', $transl->id) }}

        <!--FORM_FIELDS-->
        
        
               {{Form::bsField('Alt', 'alt', [], 'text',null, [])}}
                
                {{Form::bsField('Title', 'title', [], 'text',null, [])}}
        
                {{Form::bsField('Picture', 'picture', [], 'file',null, [])}}

                <hr>

                <h3><strong>Picture (en)</strong></h3>
                
                {{Form::bsField('Alt (en)', 'alt_en', [], 'text',null, [])}}
                
                {{Form::bsField('Title (en)', 'title_en', [], 'text',null, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'name'=>'id', 'value'=>$album->id)) }}
            {{ link_to_route('backend.pictures.index', 'Cancel', array($album->id), array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop