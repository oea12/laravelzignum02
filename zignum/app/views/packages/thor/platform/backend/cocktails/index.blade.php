@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h2 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  All Cocktails            
      @if(Entrust::can('create_cocktails'))
      {{ _d(link_to_route('backend.cocktails.create', '<i class="fa fa-plus"></i> Add new cocktail',[],['class'=>'btn btn-success pull-right'])) }}
      @endif
    </h2>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    <h3 class="bg-danger text-center">Zignum Reposado Cocktails</h3>
    @if ($records->count())
      <table style="font-size:0.7em;" class="table table-striped table-hover table-responsive widget-datatable">
        <thead>
          <tr>
            <th style="width:3em;">Product</th>
            <th style="width:3em;">Name</th>
            <th style="width:3em;">Cocktail Image</th>
            <th style="width:20em;">Instructions</th>
            <th style="width:6em;">Video Mp4</th>
            <th style="width:6em;">Video Ogg</th>
            <th style="width:6em;">Video Webm</th>
            <th class="al-r">Actions</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($records as $record)
          @if ($record->product === 'zignum_reposado')
          <tr>
            <td>{{{ $record->product }}}</td>
            <td>{{{ $record->name }}}</td>
            <td><img id="img_coct"src="/zignum/public/img/coctel/{{{ ($record->cocktailimage != null)?$record->cocktailimage:'default_fruit_icon.png' }}}" class="img-thumbnail img-responsive"></td>
            <td >{{{ $record->instructions }}}</td>
            <td >{{{ $record->videp_mp4 }}}</td>
            <td >{{{ $record->video_ogg }}}</td>
            <td >{{{ $record->video_web }}}</td>
            <td class="al-r">
              @if(Entrust::can('read_cocktails'))
              {{ link_to_route('backend.cocktails.show', 'Show', array($record->id), array('class' => 'btn btn-sm btn-default')) }}
              @endif

              @if(Entrust::can('update_cocktails'))
              {{ link_to_route('backend.cocktails.edit', 'Edit', array($record->id), array('class' => 'btn btn-sm btn-primary')) }}
              @endif

              @if(Entrust::can('delete_cocktails'))
              {{ Form::open(array('method' => 'DELETE', 'class' => 'inl-bl', 'route' => array('backend.cocktails.do_delete', $record->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger btn-destroy')) }}
              {{ Form::close() }}
              @endif
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>

    @else
    There are no cocktails        @endif
    <br>
    <br>
    <h3 class="bg-info text-center">Zignum Silver Cocktails</h3>
    @if ($records->count())
      <table style="font-size:0.7em;" class="table table-striped table-hover table-responsive widget-datatable">
        <thead>
          <tr>
            <th style="width:3em;">Product</th>
            <th style="width:3em;">Name</th>
            <th style="width:3em;">Cocktail Image</th>
            <th style="width:20em;">Instructions</th>
            <th style="width:6em;">Video Mp4</th>
            <th style="width:6em;">Video Ogg</th>
            <th style="width:6em;">Video Webm</th>
            <th class="al-r">Actions</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($records as $record)
          @if ($record->product === 'zignum_silver')
          <tr>
            <td>{{{ $record->product }}}</td>
            <td>{{{ $record->name }}}</td>
            <td><img id="img_coct"src="/zignum/public/img/coctel/{{{ ($record->cocktailimage != null)?$record->cocktailimage:'default_fruit_icon.png' }}}" class="img-thumbnail img-responsive"></td>
            <td>{{{ $record->instructions }}}</td>
            <td>{{{ $record->video_mp4 }}}</td>
            <td>{{{ $record->video_ogg }}}</td>
            <td>{{{ $record->video_web }}}</td>
            <td class="al-r">
              @if(Entrust::can('read_cocktails'))
              {{ link_to_route('backend.cocktails.show', 'Show', array($record->id), array('class' => 'btn btn-sm btn-default')) }}
              @endif

              @if(Entrust::can('update_cocktails'))
              {{ link_to_route('backend.cocktails.edit', 'Edit', array($record->id), array('class' => 'btn btn-sm btn-primary')) }}
              @endif

              @if(Entrust::can('delete_cocktails'))
              {{ Form::open(array('method' => 'DELETE', 'class' => 'inl-bl', 'route' => array('backend.cocktails.do_delete', $record->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger btn-destroy')) }}
              {{ Form::close() }}
              @endif
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    @else
    There are no cocktails        @endif
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop