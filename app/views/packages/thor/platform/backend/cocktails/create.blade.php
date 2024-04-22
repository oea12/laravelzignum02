@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Create Cocktail</h1>

        <p>{{ link_to_route('backend.cocktails.index', 'Return to all cocktails') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        {{ Form::open(array('method' => 'POST', 'route' => array('backend.cocktails.do_create'), 'role'=>'form','file' => true, 'enctype' => 'multipart/form-data')) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Product', 'product', [], 'select',$options, [])}}
        
                {{Form::bsField('Name', 'name', [], 'text',null, [])}}
        
                {{Form::bsField('Cocktail image', 'cocktailimage', [], 'file',null, [])}}
        
                {{Form::bsField('Cocktail icon', 'cocktailicon', [], 'file',null, [])}}
        
                {{Form::bsField('Instructions', 'instructions', [], 'textarea',null, [])}}

                {{Form::bsField('Video MP4', 'video_mp4', [], 'file',null, [])}}
                {{Form::bsField('Video OGG', 'video_ogg', [], 'file',null, [])}}
                {{Form::bsField('Video WEBM', 'video_web', [], 'file',null, [])}}
                <hr>
                <h4 class="text-center">Translate (En)</h4>
                <hr>
                {{Form::bsField('Product ('.Lang::code().')', 'translation[product]', [], 'select',$options, [])}}
        
                {{Form::bsField('Name ('.Lang::code().')', 'translation[name]', [], 'text',null, [])}}
        
                {{Form::bsField('Instructions ('.Lang::code().')', 'translation[instructions]', [], 'textarea',null, [])}}
        
                {{Form::bsField('Is translation finished? ('.Lang::code().')', 'translation[is_translated]', [], 'checkbox',null, [])}}
        
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-plus"></i> Create', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'create')) }}
            {{ link_to_route('backend.cocktails.index', 'Cancel', null, array('class' => 'btn btn-default')) }}
        </div>

        {{ Form::close() }}
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop