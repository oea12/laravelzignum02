@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Social Picture</h1>

    <p>{{ link_to_route('backend.socialpictures.index', 'Return to all socialpictures') }}</p>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    {{ Form::model($record, array('method' => 'PATCH'
    , 'route' => array('backend.socialpictures.do_edit', $record->id), 'role'=>'form','file' => true, 'enctype' => 'multipart/form-data')) }}

    <!--FORM_FIELDS-->
    
    {{Form::bsField('Image', 'image', [], 'file',null, [])}}
    
    {{Form::bsField('Url', 'url', [], 'text',null, [])}}
    
    
    
    
    <!--FORM_FIELDS_END-->

    <div class="form-group">
      {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'update')) }}
      {{ link_to_route('backend.socialpictures.index', 'Cancel', array($record->id), array('class' => 'btn btn-default')) }}
    </div>

    {{ Form::close() }}
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop