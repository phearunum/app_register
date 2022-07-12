<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="keyword" content="">
    <link rel="icon" href="/website/img/favicon.ico" type="image/x-icon">
    <title> Login Page-E-Filing  </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="/website/css/avio-style.css">

    <script src="/website/js/plugins.js"></script>
    <link href="{!! url('/css/app.css') !!}" rel="stylesheet">
    <style>
        img {
     filter: saturate(1)!important;
}
.centered {
  position: fixed;
  top: 50%;
  left: 53%;
  margin-top: -50px;
  transform: translate(-50%, -50%);

}
        </style>
</head>

<body data-avio="theme-indigo">

    <div class="avio">

        <div class="page-body ">
            <div class="container-fluid">
                <div class="container">
                    <h2 class="app_font_titel pt-4 text-white "> {{__('lang.efiling')}} </h2>
                </div>
                <div class="container row centered">
                  <!--  <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div >

                            <br/>
                            <div class="mb-2 mt-5">

                                <h3 class="color-900  app_font_titel" > {{__('lang.efiling')}}</h3>
                            </div>
                            <img src="/website/img/vector.png" width="400" class="img-responsive"/>
                            <br/>
                            <div class="mb-5">
                                <a href="#" class="me-3 color-600">Home</a>
                                <a href="#" class="me-3 color-600">About Us</a>
                                <a href="#" class="me-3 color-600">FAQs</a>
                            </div>
                            <div>
                                <a href="#" class="me-3 color-400"><i class="fa fa-facebook-square fa-lg"></i></a>
                                <a href="#" class="me-3 color-400"><i class="fa fa-github-square fa-lg"></i></a>
                                <a href="#" class="me-3 color-400"><i class="fa fa-linkedin-square fa-lg"></i></a>
                                <a href="#" class="me-3 color-400"><i class="fa fa-twitter-square fa-lg"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12 d-flex justify-content-center align-items-center ">
                        <div class="card shadow p-4 p-md-5" style="max-width:30rem;">

                            <form class="row g-2" method="post" action="{{ route('login.perform') }}">
                                <div class="col-12 text-center mb-4">
                                    <h1 class="h3 mb-3 fw-normal app_font_titel">{{__('lang.login your account')}}</h1>
                                    <span class="text-muted">Free access to our dashboard.</span>
                                </div>
                                <div class="col-12 text-center mb-4">
                                    <a class="btn btn-outline-secondary btn-block" href="#">
                                        <span class="d-flex justify-content-center align-items-center">
                                            <img class="avatar xs me-2" src="/website/img/google.svg" alt="Image Description"> Sign in with Google </span>
                                    </a>
                                    <span class="dividers text-muted mt-3">OR</span>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="col-12">
                                    <div class="form-group floating-label">
                                        <label for="floatingName">{{__('lang.email or username')}}</label>
                                        <input type="text" class="form-control " name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>

                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group floating-label">
                                        <label for="floatingPassword">{{__('lang.password')}}</label>
                                        <input type="password" class="form-control " name="password" value="{{ old('password') }}" placeholder="Password" required="required">

                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-block btn-primary lift text-uppercase" title=""> {{__('lang.login')}} </button>
                                </div>

                                <div class="col-12 text-center mt-3">
                                    <span class="text-muted"> <a href="/signup">{{__('lang.create new account')}}</a></span>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="SettingsModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
            <div class="modal-content">
                <div class="px-xl-4 modal-header">
                    <h5 class="modal-title">Theme Setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="px-xl-4 modal-body custom_scroll">
                    <div class="card fieldset border border-primary p-3 setting-theme mb-4">
                        <span class="fieldset-tile text-primary bg-card">Language</span>
                        <ul class="list-unstyled d-flex choose-skin mb-0">
                            @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                            <li>
                                <a href="{{ route('lang.switch', $lang) }}"> <img class="mb-4" src="/images/{{$language['icon']}}" alt=""> </a>

                            </li>
                            @endif
                            @endforeach

                        </ul>


                    </div>
                    <div class="card fieldset border border-primary p-3 setting-theme mb-4">
                        <span class="fieldset-tile text-primary bg-card">Color Settings</span>
                        <ul class="list-unstyled d-flex choose-skin mb-0">
                            <li data-theme="black">
                                <div class="black"></div>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="red">
                                <div class="red"></div>
                            </li>
                            <li data-theme="dynamic">
                                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
                            </li>
                        </ul>


                    </div>

                    <div class="card fieldset border setting-mode mb-4">
                        <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
                        <div class="c_radio d-flex text-center">
                            <label class="m-1 theme-switch" for="theme-switch">
                                <input type="checkbox" id="theme-switch" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="/website/img/dark-version.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-dark" for="theme-dark">
                                <input type="checkbox" id="theme-dark" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="/website/img/dark-theme.svg" alt="Theme Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                                <input type="checkbox" id="theme-high-contrast" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="/website/img/high-version.svg" alt="High Contrast" />
                                </span>
                            </label>
                            <label class="m-1 theme-rtl" for="theme-rtl">
                                <input type="checkbox" id="theme-rtl" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="/website/img/rtl-version.svg" alt="RTL Mode!" />
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="card fieldset border setting-font mb-4">
                        <span class="fieldset-tile bg-card">Font Settings</span>
                        <div class="c_radio d-flex text-center font_setting">
                            <label class="m-1" for="font-opensans">
                                <input type="radio" name="font" id="font-opensans" value="font-opensans" checked="" />
                                <span class="card p-2 bg-body">
                                    <img class="img-fluid" src="/website/img/font-opensans.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-nunito">
                                <input type="radio" name="font" id="font-nunito" value="font-nunito" />
                                <span class="card p-2 bg-body">
                                    <img class="img-fluid" src="/website/img/font-nunito.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-raleway">
                                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                                <span class="card p-2 bg-body">
                                    <img class="img-fluid" src="/website/img/font-raleway.svg" alt="Dark Mode" />
                                </span>
                            </label>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </div>


    <script src="/website/js/theme.js"></script>

</body>

</html>
