<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/admin_resources/logo/logo.png') }}" type="image/x-icon"/>

    <!-- Map CSS -->
    <link rel="stylesheet" href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('/admin_resources/css/libs.bundle.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/admin_resources/css/theme.bundle.css') }}" id="stylesheetLight" />
    <link rel="stylesheet" href="{{ asset('/admin_resources/css/theme-dark.bundle.css') }}" id="stylesheetDark" />

    <link href="{{asset('/custom/css/admin.css')}}" rel="stylesheet">


    <script src="//cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );

    </script>

    <style>body { display: none; }</style>

    <!-- Title -->
    <title>Admin</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-156446909-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>

    @yield('css')

</head>

<body>
<div class="ajax-loader"></div>

@include('admin.layout.sidebar')

<div class="main-content">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Vendor JS -->
<script src="{{ asset('admin_resources/js/vendor.bundle.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('admin_resources/js/theme.bundle.js') }}"></script>

<script src="{{ asset('/custom/js/jquery.gritter.js') }}"></script>

<script src="{{ asset('/custom/js/admin.js') }}"></script>

<div id="modal_list"></div>

@stack('script')

</body>
</html>
