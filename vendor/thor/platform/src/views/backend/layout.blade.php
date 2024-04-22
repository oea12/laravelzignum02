<!doctype html><?php $unwrap = (isset($unwrap) and ($unwrap==true)); ?>
<html lang="en" class="{{implode(' ', $doc_classes)}} view-{{$doc_view_slug}} {{$unwrap ? 'unwrap' : ''}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Zignum Panel</title>


        <link rel="shortcut icon" href="/zignum/public/packages/thor/platform/img/zignum_menu.png">

        <style type="text/css" id="relativecss">html,body{position:static}body *{position:relative}</style>
        <link href="/zignum/public/packages/thor/platform/css/app.min.css" rel="stylesheet">
        <link href="/zignum/public/packages/thor/platform/css/backend_menu.css" rel="stylesheet">

        @yield('head_append')
    </head>
    <body>
        <?php if($unwrap === true) : ?>
        @yield('main')
        <?php else: ?>
        <div id="wrapper">
            @include('thor::backend.menus')
            <div id="page-wrapper">
                @yield('main')
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <?php endif; ?>
        
        <script src="/zignum/public/packages/thor/platform/js/app.min.js"></script>
        @yield('body_append')
    </body>
</html>