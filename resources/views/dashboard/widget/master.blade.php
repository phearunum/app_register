<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Phearun">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">  -->
    <!-- FAVICONS ICON -->
    <link href="/assets/css/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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

    <!--  <link rel="stylesheet" href="/website/css/avio-style.css"> -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v1.0.0/dist/bootstrap-float-label.min.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <!-- Custom styles for this template
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/km.css') !!}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{!! url('assets/comm/App.js') !!}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <script>
        let app = new App({});
        /* DataTable Config */
        const edit="{{__('lang.edit')}}";
        const del='លុប';
        const search='ស្វែងរក';
        const prints_='បោះពុម្ភ';
        const excels_='អុិចសែល';
        const csvs_='ស៊ីអេវី';
        const copy_table='ចំងលតារាង';
        const previous_page='ត្រឡប់ក្រោយ';
        const first_page='ទំព័រដំបូង';
        const next_page='ទំព័របន្ទាប់';
        const last_page='ទំព័រក្រោយ';
        const displays_='បង្ហាញ';
        const records_='ជួរ';
        const pages_='ទំព័រទី';
        const ofs_='នៃទំព័រ ';
        const not_records_found='សុំទោស ទិន្ន័យស្វែងរកមិនមានក្នុងប្រព័ន្ធទេ';
        const filtered_from='បានស្វែងរកក្នុង';
        const total_records='ចំនួនជួរសរុប';
        const lg="kh";
    </script>
    <style>
        .paginate_button,
        .buttons-print,
        .buttons-html5 {
            padding: 2px !important;
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
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {

        left: 4px;
        height: 16px;
        width: 16px;
        display: block;
        position: absolute;
        color: white;
        border: 2px solid white;
        border-radius: 16px;
        box-shadow: 0 0 3px #444;
        box-sizing: content-box;
        text-align: left;
        font-family: 'Courier New', Courier, monospace;
        text-indent: 4px;
        line-height: 16px;
        content: '+';
        background-color: #337ab7;
    }
    table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before {
    content: '-';
    background-color: #d33333;
    }
  .sidebar-wrapper{
    background-color: #337ab7!important;
    color:white!important;
  }
  .sidebar-wrapper .metismenu a{
    background-color: #337ab7!important;
    color:white!important;
  } 
  .sidebar-wrapper .metismenu ul{
    background-color: #337ab7!important;
    color:white!important;
  }
  .topbar{
    background-color: #337ab7!important;
    color:white!important;
  }
    .topbar .navbar .navbar-nav .nav-link{
        background-color: #337ab7!important;
        color:white!important;
    }
    .user-info .user-name{
        background-color: #337ab7!important;
        color:white!important;
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
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>
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
