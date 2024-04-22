@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  All Events            
      @if(Entrust::can('create_albums'))
      {{ _d(link_to_route('backend.albums.create', '<i class="fa fa-plus"></i> Add new event',[],['class'=>'btn btn-success pull-right'])) }}
      @endif
    </h1>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif
    
    @if ($records->count())
    <table class="table table-striped table-hover table-responsive widget-datatable">
      <thead>
        <tr>
          <th>Event Name</th>
          <th>Description</th>
          <th class="al-r">Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($records as $record)
        <tr>
          <td>{{{ $record->album_name }}}</td>
          <td>{{{ $record->description }}}</td>
          <td class="al-r">
            @if(Entrust::can('read_albums'))
            {{ link_to_route('backend.pictures.index', 'Pictures', array($record->id), array('class' => 'btn btn-sm btn-success')) }}
            @endif
            
            @if(Entrust::can('update_albums'))
            {{ link_to_route('backend.albums.edit', 'Edit', array($record->id), array('class' => 'btn btn-sm btn-primary')) }}
            @endif
            
            @if(Entrust::can('delete_albums'))
            {{ Form::open(array('method' => 'DELETE', 'class' => 'inl-bl', 'route' => array('backend.albums.do_delete', $record->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger btn-destroy')) }}
            {{ Form::close() }}
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    There are no albums        @endif
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop