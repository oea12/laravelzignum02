@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Create Album</h1>

        <p>{{ link_to_route('backend.albums.index', 'Return to all albums') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::open(array('method' => 'POST', 'route' => array('backend.albums.do_create'), 'role'=>'form')) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Album Name', 'album_name', [], 'text',null, [])}}
        
                {{Form::bsField('Description', 'description', [], 'textarea',null, [])}}
        
                
                {{Form::bsField('Album Name ('.Lang::code().')', 'translation[album_name]', [], 'text',null, [])}}
        
                {{Form::bsField('Description ('.Lang::code().')', 'translation[description]', [], 'textarea',null, [])}}
        
                {{Form::bsField('Is translation finished? ('.Lang::code().')', 'translation[is_translated]', [], 'checkbox',null, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-plus"></i> Create', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'create')) }}
            {{ link_to_route('backend.albums.index', 'Cancel', null, array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop