@extends('thor::backend.layout')
@section('main')
<style type="text/css">
#vine{
    width: 10em!important;
    height: 10em!important;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header clearfix">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Vine id
        </h1>

        @if ($errors->any())

        {{ implode('', $errors->all('<p class="alert alert-danger">:message</p>')) }}

        @endif
        
        @if ($records->count())
        <table class="table table-striped table-hover table-responsive widget-datatable">
            <thead>
                <tr>
                    <th>Vine</th>
                    <th>Vine Thumbnail</th>
                    <th class="al-r">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($records as $record)
                <tr>

                    <td>{{{ $record->vine }}}</td>
                    <td><img id="vine" src="/zignum/public/img/vine/{{{ ($record->icon != null)?$record->icon:'no_image.png' }}}" class="img-thumbnail img-responsive"></td>
                    <td class="al-r">
                        @if(Entrust::can('update_vines'))
                        {{ link_to_route('backend.vines.edit', 'Edit', array($record->id), array('class' => 'btn btn-sm btn-success')) }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        There are no vines        @endif
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop