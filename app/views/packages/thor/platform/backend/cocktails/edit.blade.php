@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Cocktail</h1>

        <p>{{ link_to_route('backend.cocktails.index', 'Return to all cocktails') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::model($record, array('method' => 'PATCH'
    , 'route' => array('backend.cocktails.do_edit', $record->id), 'role'=>'form','files' => true, 'enctype' => 'multipart/form-data')) }}
<?php
    $transl = $record->translation();
?>{{ Form::hidden('translation[id]', $transl->id) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Product', 'product', [], 'select',$options, [])}}
        
                {{Form::bsField('Name', 'name', [], 'text',null, [])}}
        
                {{Form::bsField('Cocktail image', 'cocktailimage', [], 'file',null, [])}}
                <label>Current Cocktail Image</label>
                <img id="img_coct"src="/zignum/public/img/coctel/{{{ ($record->cocktailimage != null)?$record->cocktailimage:'default_fruit_icon.png' }}}" class="img-thumbnail img-responsive">
                {{Form::bsField('Cocktail icon', 'cocktailicon', [], 'file',null, [])}}
                <label>Current Cocktail Icon</label>
                <img id="img_coct"src="/zignum/public/img/coctel/icon/{{{ ($record->cocktailicon != null)?$record->cocktailicon:'default_fruit_icon.png' }}}" class="img-thumbnail img-responsive">
                {{Form::bsField('Instructions', 'instructions', [], 'textarea',null, [])}}
                {{Form::bsField('Video MP4', 'video_mp4', [], 'file',null, [])}}
                {{Form::bsField('Video OGG', 'video_ogg', [], 'file',null, [])}}
                {{Form::bsField('Video WEBM', 'video_web', [], 'file',null, [])}}
                <hr>
                <h4 class="text-center">Translate (En)</h4>
                <hr>
               
        
                {{Form::bsField('Product ('.Lang::code().')', 'translation[product]', [], 'select',$options, [])}}
        
                {{Form::bsField('Name ('.Lang::code().')', 'translation[name]', [], 'text',$transl->name, [])}}
        
                {{Form::bsField('Instructions ('.Lang::code().')', 'translation[instructions]', [], 'textarea',$transl->instructions, [])}}
        
                {{Form::bsField('Is translation finished? ('.Lang::code().')', 'translation[is_translated]', [], 'checkbox',$transl->is_translated, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'update')) }}
            {{ link_to_route('backend.cocktails.index', 'Cancel', array($record->id), array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<style type="text/css">
#img_coct{
    width: 100px;
    height: 100px;
}
</style>
@stop