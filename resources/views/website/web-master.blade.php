<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Phearun">
    <meta name="generator" content="Hugo 0.87.0">
    <title>App</title>
    <!-- Bootstrap core CSS
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">  -->
    <!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="/website/css/dataTables.min.css">
    <link rel="stylesheet" href="/website/css/avio-style.css">
    <script src="/website/js/plugins.js"></script>  
    <link href="{!! url('/css/app.css') !!}" rel="stylesheet">
    <link href="{!! url('/css/km.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom styles for this template
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    -->
     <style>
       body, button, input {
    background-color: #eee;
    font-family: khmer_normal;
    font-size: 12px!important;
   
}
     </style>
</head>
<body data-avio="theme-indigo">
    <div class="avio">

        @include('website.layout.header')
       
        <div class="content-body">
            @yield('content')
            @include('website.layout.footer')
        </div>
       
    </div>

    <script src="/website/js/theme.js"></script>

    <script src="/website/js/apexcharts.bundle.js"></script>
    <script src="/website/js/dataTables.bundle.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js'></script>
  </body>
</html>
