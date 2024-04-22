@extends('thor::backend.layout')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Show </h1>

        <p>{{ link_to_route('backend.vines.index', 'Return to all vines') }}</p>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif

        <section class="resource-show">
            <div class="form-group">
                <h1><strong>Vine:</strong></h1>
                <pre class="well well-sm">{{{ $record->vine }}}</pre>
            </div>

            <div class="form-group">
                {{ _d(link_to_route('backend.vines.edit', '<i class="fa fa-pencil"></i> Edit', array($record->id), array('class' => 'btn btn-success'))) }}
                {{ link_to_route('backend.vines.index', 'Cancel', null, array('class' => 'btn btn-default')) }}
            </div>
        </section>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop