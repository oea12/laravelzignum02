@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Show </h1>

    <p>{{ link_to_route('backend.pictures.index', 'Return to all pictures',array($record->album_id)) }}</p>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    <section class="resource-show">
      <div class="form-group">
        <strong>Picture:</strong>
        <img src="/zignum/public/img/album/{{{ ($record->picture  != null)?$record->picture :'default_picture_icon.svg' }}}" class="img-thumbnail img-responsive">
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Album Id:') }}
        <pre class="well well-sm">{{{ $record->album_id }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Alt:') }}
        <pre class="well well-sm">{{{ $record->alt }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Title:') }}
        <pre class="well well-sm">{{{ $record->title }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Alt (en) :') }}
        <pre class="well well-sm">{{{ $record->alt_en }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Title (en) :') }}
        <pre class="well well-sm">{{{ $record->title_en }}}</pre>
      </div>

      <div class="form-group">
        {{ _d(link_to_route('backend.pictures.edit', '<i class="fa fa-pencil"></i> Edit', array($album_id,$record->id), array('class' => 'btn btn-info'))) }}
        {{ link_to_route('backend.pictures.index', 'Cancel', array($album_id), array('class' => 'btn btn-default')) }}
      </div>
    </section>
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop