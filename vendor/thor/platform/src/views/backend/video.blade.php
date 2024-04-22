@extends('thor::backend.layout')
@section('main')
<br>
<style type="text/css">
body{
	background-color: white!important;
	padding-top: 2em!important;
}
</style>
<div class="container" ng-app="pictureApp" ng-controller="mainController">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="page-header">@if($module)<i class="module-icon fa {{$module->icon}}"></i>@endif  Edit Video ID</h1>    
        @if(isset($success))
        <div class="alert alert-success" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Success:</span>
          Your data was saved successfully.
        </div>
        @endif
            {{ Form::open(array('url' => 'backend/save/'.$record->id)) }}

        <!--FORM_FIELDS-->
        
                {{Form::bsField('Video ID', 'video_url', [], 'text',$record->video_url, [])}}
                        
        <!--FORM_FIELDS_END-->

        <div class="form-group">
            {{ Form::button('<i class="fa fa-floppy-o"></i> Save', array('class' => 'btn btn-primary', 'type'=>'submit', 'value'=>'update')) }}
        </div>

        {{ Form::close() }}
	</div>
</div><!-- /.row -->
@stop