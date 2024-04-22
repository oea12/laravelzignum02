@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Add a Picture for the Album {{$album->album_name}}</h1>

        <p>{{ link_to_route('backend.pictures.index', 'Return to all pictures', array($album->id)) }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::open(array('method' => 'POST', 'route' => array('backend.pictures.do_create',$album->id), 'role'=>'form','file' => true, 'enctype' => 'multipart/form-data')) }}

        <!--FORM_FIELDS-->
                {{Form::bsField('Alt', 'alt', [], 'text',null, [])}}
                
                {{Form::bsField('Title', 'title', [], 'text',null, [])}}

                {{Form::bsField('Picture', 'picture', [], 'file',null, [])}}

                <hr>

                <h4>Picture (en)</h4>
                
                {{Form::bsField('Alt (en)', 'title_en', [], 'text',null, [])}}
                {{Form::bsField('Title (en)', 'title_en', [], 'text',null, [])}}
            
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-plus"></i> Create', array('class' => 'btn btn-primary','name'=>'id' ,'type'=>'submit', 'value'=>$album->id)) }}
            {{ link_to_route('backend.pictures.index', 'Cancel', array($album->id), array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop