@extends('thor::backend.layout')
@section('main')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  All Fruits            
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
          <td>
            <?php
          $title_en="";
          $title_en = \Thor\Models\FruitText::find($record->id)->title;
          ?>
          {{$title_en}}
          </td>
          <td><img src="/zignum/public/img/fruit/{{{ ($record->icon != null)?$record->icon:'default_fruit_icon.png' }}}" class="img-thumbnail img-responsive"></td>
          <td class="al-r">
            @if(Entrust::can('update_fruits'))
            {{ link_to_route('backend.fruits.edit', 'Replace', array($record->id), array('class' => 'btn btn-sm btn-success')) }}
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    There are no fruits        @endif
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop