@extends('thor::backend.layout')
@section('main')
<div class="row">
    <div class="col-lg-6">
        <h1 class="page-header"><?php echo $title ?></h1>
        <?php echo $content ?>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop