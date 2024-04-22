@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Show </h1>

        <p>{{ link_to_route('backend.socialpictures.index', 'Return to all socialpictures') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        <section class="resource-show">
            <div class="form-group">
                {{ Form::label(null, 'ID:') }}
                <pre class="well well-sm">{{{ $record->id }}}</pre>
            </div>
                            <div class="form-group">
                    {{ Form::label(null, 'Image:') }}
                    <pre class="well well-sm">{{{ $record->image }}}</pre>
                </div>
                            <div class="form-group">
                    {{ Form::label(null, 'Url:') }}
                    <pre class="well well-sm">{{{ $record->url }}}</pre>
                </div>
                                    <div class="form-group">
                {{ Form::label(null, 'Created at:') }}
                <pre class="well well-sm">{{{ $record->created_at }}}</pre>
            </div>
            <div class="form-group">
                {{ Form::label(null, 'Updated at:') }}
                <pre class="well well-sm">{{{ $record->updated_at }}}</pre>
            </div>

            <div class="form-group">
                {{ _d(link_to_route('backend.socialpictures.edit', '<i class="fa fa-pencil"></i> Edit', array($record->id), array('class' => 'btn btn-info'))) }}
                {{ link_to_route('backend.socialpictures.index', 'Cancel', null, array('class' => 'btn btn-default')) }}
            </div>
        </section>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop