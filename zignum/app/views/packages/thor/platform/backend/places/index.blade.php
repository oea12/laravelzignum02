@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  All Places            

    </h1>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    @if ($records->count())
    <table class="table table-striped table-hover table-responsive">
      <thead>
        <tr>
          <th>Name</th>
          <th>Name (en)</th>
          <th>Icon</th>
          <th class="al-r">Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($records as $record)
        <tr>
          <td><strong>{{{ $record->title }}}</strong></td>
          <td><strong>
          <?php
          $title_en="";
          $title_en = \Thor\Models\PlaceText::find($record->id)->title;
          ?>
          {{$title_en}}
          </strong></td>
          <td><img src="/zignum/public/img/places/{{{ ($record->icon != null)?$record->icon:'default_place_icon.jpg' }}}" class="img-thumbnail img-responsive"></td>

          <td class="al-r">
            @if(Entrust::can('update_places'))
            {{ link_to_route('backend.places.edit', 'Replace', array($record->id), array('class' => 'btn btn-sm btn-success')) }}
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    There are no places        @endif
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop