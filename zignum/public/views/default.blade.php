@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron al-c">
    <h1 class="page-header">{{$page->title}}</h1>
    <pre class="well">
        {{$page}}
    </pre>
</div>
@stop