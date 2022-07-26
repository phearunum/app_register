<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Phearun">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">  -->
    <!-- FAVICONS ICON -->
    <link href="/assets/css/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="/assets/css/simplebar.css" rel="stylesheet" />
	<link href="/assets/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="/assets/css/metisMenu.min.css" rel="stylesheet" />
	<link href="/assets/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="/assets/css/pace.min.css" rel="stylesheet" />
	<script src="/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="/assets/css/app.css" rel="stylesheet">
	<link href="/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="/assets/css/header-colors.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />

    <link rel="stylesheet" href="/website/css/avio-style.css">
    <link rel="stylesheet"
        href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v1.0.0/dist/bootstrap-float-label.min.css" />
     <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <!-- Custom styles for this template
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .paginate_button,.buttons-print, .buttons-html5{
            padding: 2px!important;
            height: 30px;
            width: 50px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        .form-control {
            width: 100%;
            padding: 9px 20px;
            text-align: left;

            outline: 0;
            border-radius: 4px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            margin-top: 16px;
            height: calc(1.5em + 1.2rem + 2px) !important;
            font-family: 'Khmer OS Siemreap';
        }
    </style>
</head>
<body>

    <div class="wrapper">
        @include('dashboard.widget.sidebar')
        @include('dashboard.widget.header')
            <div class="page-wrapper">
                @yield('content')
            </div>
    </div>
    <!-- plugins:js -->

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/simplebar.min.js"></script>
	<script src="/assets/js/metisMenu.min.js"></script>
	<script src="/assets/js/perfect-scrollbar.js"></script>
	<script src="/assets/js/jquery.dataTables.min.js"></script>
	<script src="/assets/js/dataTables.bootstrap5.min.js"></script>

    <script src="/assets/js/app.js"></script>
      <!-- Bootstrap 5 JavaScript Bundle with Popper -->

    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>

    <script>
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })();
        const getDatePickerTitle = elem => {
            // From the label or the aria-label
            const label = elem.nextElementSibling;
            let titleText = '';
            if (label && label.tagName === 'LABEL') {
                titleText = label.textContent;
            } else {
                titleText = elem.getAttribute('aria-label') || '';
            }
            return titleText;
        }

        const elems = document.querySelectorAll('.datepicker_input');
        for (const elem of elems) {
            const datepicker = new Datepicker(elem, {
                'format': 'dd/mm/yyyy', // UK format
                title: getDatePickerTitle(elem)
            });
        }
    </script>
</body>

</html>
