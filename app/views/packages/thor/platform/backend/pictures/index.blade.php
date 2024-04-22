@extends('thor::backend.layout')
@section('main')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  All {{$album->album_name}} Pictures            
      @if(Entrust::can('create_pictures'))
      {{ _d(link_to_route('backend.pictures.create', '<i class="fa fa-plus"></i> Add new picture',array($album->album_id),['class'=>'btn btn-success pull-right'])) }}
      @endif
    </h1>

    @if ($errors->any())

    {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

    @endif

    @if ($records->count())
    <table class="table table-striped table-hover table-responsive widget-datatable">
      <thead>
        <tr>
          <th>Picture</th>
          <th>Alt</th>
          <th>Title</th>
          <th>Alt (en)</th>
          <th>Title (en)</th>
          <th class="al-r">Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($records as $record)
        <tr>
          <td>{{{ $record->picture }}}</td>
          <td>{{{ $record->alt }}}</td>
          <td>{{{ $record->title }}}</td>
          <td>{{{ $record->alt_en }}}</td>
          <td>{{{ $record->title_en }}}</td>
          <td class="al-r">
            @if(Entrust::can('read_pictures'))
            {{ link_to_route('backend.pictures.show', 'Show', array($album->album_id,$record->id), array('class' => 'btn btn-sm btn-default')) }}
            @endif

            @if(Entrust::can('update_pictures'))
            {{ link_to_route('backend.pictures.edit', 'Edit', array($album->album_id,$record->id), array('class' => 'btn btn-sm btn-primary')) }}
            @endif

            @if(Entrust::can('delete_pictures'))
            {{ Form::open(array('method' => 'DELETE', 'class' => 'inl-bl', 'route' => array('backend.pictures.do_delete',$album->album_id,$record->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-danger btn-destroy')) }}
            {{ Form::close() }}
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    There are no pictures        @endif
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop