@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Show </h1>

    <p>{{ link_to_route('backend.cocktails.index', 'Return to all cocktails') }}</p>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    <section class="resource-show">
      <div class="form-group">
        {{ Form::label(null, 'Product:') }}
        <pre class="well well-sm">{{{ $record->product }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Name:') }}
        <pre class="well well-sm">{{{ $record->name }}}</pre>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <strong> Cocktail image:</strong>
            <img src="/zignum/public/img/coctel/{{{ ($record->cocktailimage  != null)?$record->cocktailimage :'default_cocktail_icon.png' }}}" class="img-thumbnail img-responsive">
          </div>
          <div class="col-md-6">
            <strong> Cocktail icon:</strong>
            <img src="/zignum/public/img/coctel/icon/{{{ ($record->cocktailicon  != null)?$record->cocktailicon :'default_cocktail_icon.png' }}}" class="img-thumbnail img-responsive">
          </div>
        </div>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Instructions:') }}
        <pre class="well well-sm">{{{ $record->instructions }}}</pre>
      </div>

      <div class="form-group">
        {{ Form::label(null, 'Video Mp4:') }}
        <pre class="well well-sm">{{{ $record->video_mp4 }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Video Ogg:') }}
        <pre class="well well-sm">{{{ $record->video_ogg }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Video Webm:') }}
        <pre class="well well-sm">{{{ $record->video_web }}}</pre>
      </div>

      <div class="form-group">
        {{ Form::label(null, 'Product:') }}
        <pre class="well well-sm">{{{ $record->translation()->product }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Name:') }}
        <pre class="well well-sm">{{{ $record->translation()->name }}}</pre>
      </div>
      <div class="form-group">
        {{ Form::label(null, 'Instructions:') }}
        <pre class="well well-sm">{{{ $record->translation()->instructions }}}</pre>
      </div>
      <div class="form-group">
        {{ _d(link_to_route('backend.cocktails.edit', '<i class="fa fa-pencil"></i> Edit', array($record->id), array('class' => 'btn btn-info'))) }}
        {{ link_to_route('backend.cocktails.index', 'Cancel', null, array('class' => 'btn btn-default')) }}
      </div>
    </section>
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop