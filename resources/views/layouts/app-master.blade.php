<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Phearun">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">  -->
    <!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="/vendor/nouislider/nouislider.min.css">
	<!-- Style css -->
    <link href="/css/style.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    -->
</head>
<body>
    @include('dashboard.widget.preloader')
    @include('layouts.partials.navbar')
    <div id="main-wrapper">
    <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="53" height="53" viewbox="0 0 53 53">
					<path d="M21.6348 8.04782C21.6348 5.1939 23.9566 2.87204 26.8105 2.87204H28.6018L28.0614 1.37003C27.7576 0.525342 26.9616 0 26.1132 0C25.8781 0 25.639 0.0403711 25.4052 0.125461L7.3052 6.7133C6.22916 7.105 5.67535 8.29574 6.06933 9.37096L7.02571 11.9814H21.6348V8.04782Z" fill="#759DD9"></path>
					<path d="M26.8105 5.97754C25.6671 5.97754 24.7402 6.90442 24.7402 8.04786V11.9815H42.8555V8.04786C42.8555 6.90442 41.9286 5.97754 40.7852 5.97754H26.8105Z" fill="#F8A961"></path>
					<path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#5BCFC5"></path>
					<path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#5BCFC5"></path>
				</svg>
              <div class="dashboard_bar text-primary ">  E-FORM </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

    @include('dashboard.widget.header')
    @include('dashboard.widget.sidebar')
    </div>
    <div class="content-body">
        @yield('content')
    </div>


    <script src="/vendor/global/global.min.js"></script>
	<script src="/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="/vendor/apexchart/apexchart.js"></script>
	<script src="/vendor/nouislider/nouislider.min.js"></script>
	<script src="/vendor/wnumb/wNumb.js"></script>

	<!-- Dashboard 1
	<script src="/js/dashboard/dashboard-1.js"></script>
    -->
    <script src="/js/custom.min.js"></script>
	<script src="/js/dlabnav-init.js"></script>
	<script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  </body>
</html>
