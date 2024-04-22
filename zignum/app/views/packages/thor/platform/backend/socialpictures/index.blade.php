@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  All Social Pictures            
      @if(Entrust::can('create_socialpictures'))
      {{ _d(link_to_route('backend.socialpictures.create', '<i class="fa fa-plus"></i> Add new socialpicture',[],['class'=>'btn btn-success pull-right'])) }}
      @endif
    </h1>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    @if ($records->count())
    <table class="table table-striped table-hover table-responsive widget-datatable">
      <thead>
        <tr>
          <th>Image</th>
          <th>Url</th>
          <th class="al-r">Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($records as $record)
        <tr>
          <td><img src="/zignum/public/img/socialimages/{{{ ($record->image != null)?$record->image:'default_place_icon.jpg' }}}" class="img-thumbnail img-responsive"></td>
          <td>{{{ $record->url }}}</td>
          <td class="al-r">
            @if(Entrust::can('update_socialpictures'))
            {{ link_to_route('backend.socialpictures.edit', 'Edit', array($record->id), array('class' => 'btn btn-sm btn-primary')) }}
            @endif

            @if(Entrust::can('delete_socialpictures'))
            {{ Form::open(array('method' => 'DELETE', 'class' => 'inl-bl', 'route' => array('backend.socialpictures.do_delete', $record->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger btn-destroy')) }}
            {{ Form::close() }}
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    There are no socialpictures        @endif
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop