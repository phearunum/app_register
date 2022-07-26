<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="keyword"
        content="AVIO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
    <link rel="icon" href="/website/img/favicon.ico" type="image/x-icon">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/website/css/avio-style.css">

    <script src="/website/js/plugins.js"></script>
    <link href="{!! url('/css/app.css') !!}" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://www.jqueryscript.net/demo/floating-labels-bootstrap/bootstrap.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet"
        href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v1.0.0/dist/bootstrap-float-label.min.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
    <style>
        img {
            filter: saturate(1) !important;
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 53%;
            margin-top: -100px;
            transform: translate(-50%, -50%);

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

<body data-avio="theme-indigo">
    <div class="avio">
        <div class="page-body">
            <div class="container ">

                <div class="col-sm-12 " style="min-height: 120px;">
                    <a href="/">
                        <h3 class="app_font_titel pt-4 text-white ">
                            <img src="/website/img/left-arrow.png" /> {{ __('lang.reset password') }}
                        </h3>
                    </a>
                </div>

                <div class="col-sm-12 d-flex justify-content-center align-items-center " style="margin-top: -40px;">

                    <div class="col-sm-7 card shadow p-2">

                        <form class="p-4 requires-validation " method="post" action="{{ route('register.perform') }}"
                            novalidate>
                            <div class="row p-0 d-flex justify-content-center align-items-center">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                               
                                <div class="col-sm-8 col-xs-8 p-1">
                                   <center> <img class="img-reponsive" src="/website/img/confirm_password.png"> 
                                <p>{{__('lang.please set new password')}}</p>
                                </center>
                                <div class="col-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="password" class="form-control" name="password"
                                            value="{{ old('password') }}"
                                            placeholder="{{ __('lang.password') }}" required="required">
                                        <label for="floatingPassword">{{ __('lang.password') }}</label>
                                        @if ($errors->has('password'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="password" class="form-control" name="password_confirmation"
                                            value="{{ old('password_confirmation') }}"
                                            placeholder="{{ __('lang.confirm password') }}"
                                            required="required">
                                        <label
                                            for="floatingConfirmPassword">{{ __('lang.confirm password') }}</label>
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                </div>


                                <div class="col-8 p-1 mt-4">
                                    <div class="form-group">
                                        <button class=" btn  btn-primary " type="submit">{{ __('lang.send email') }}
                                            <img class="img-fluid" src="/website/img/next-com.png" alt="Dark Mode">
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

    <script src="/website/js/theme.js"></script>
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- Vanilla Datepicker JS -->
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
