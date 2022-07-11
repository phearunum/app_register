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
    <title>:: E-filing :: Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="/website/css/avio-style.css">

    <script src="/website/js/plugins.js"></script>
</head>

<body data-avio="theme-indigo">

    <div class="avio">

        <div class="page-body">
            <div class="container-fluid">
                <div class="row g-0 mt-lg-4">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div style="max-width: 25rem;">
                            <div class="mb-4">
                                <svg width="48" height="36" viewBox="0 0 48 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect class="fill-secondary" x="1.5" y="4.5" width="27"
                                        height="27" rx="13.5" />
                                    <rect class="fill-primary" x="13.5" y="1.5" width="33"
                                        height="33" rx="16.5" stroke="white" stroke-width="3" />
                                </svg>
                            </div>
                            <div class="mb-5">
                                <br/>
                                <h2 class="color-900">Build digital products with:</h2>
                            </div>

                            <ul class="list-unstyled mb-5">
                                <li class="mb-4">
                                    <span class="d-block mb-1 fs-4 fw-light">All-in-one tool</span>
                                    <span class="color-600">Amazing Features to make your life easier & work
                                        efficient</span>
                                </li>
                                <li>
                                    <span class="d-block mb-1 fs-4 fw-light">Easily add &amp; manage your
                                        services</span>
                                    <span class="color-600">It brings together your tasks, projects, timelines, files
                                        and more</span>
                                </li>
                            </ul>
                            <div class="mb-2">
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
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card shadow p-4 p-md-5" style="max-width: 32rem;">

                            <form class="row g-2"  method="post" action="{{ route('login.perform') }}">
                                <div class="col-12 text-center mb-4">
                                    <h1 class="h3 mb-3 fw-normal app_font_titel">{{__('lang.login your account')}}</h1>
                                    <span class="text-muted">Free access to our dashboard.</span>
                                </div>
                               
                             
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="floatingName">{{__('lang.email or username')}}</label>
                                        <input type="text"  class="form-control form-control-lg" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                      
                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="floatingPassword">{{__('lang.password')}}</label>
                                        <input type="password" class="form-control form-control-lg" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                       
                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                               
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-dark lift text-uppercase" 
                                        title=""> {{__('lang.login')}} </button>
                                </div>
                              
                                <div class="col-12 text-center mt-3">
                                    <span class="text-muted">Don't have an account yet? <a
                                            href="auth-signup.html">Sign up here</a></span>
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

                        <div class="card fieldset border border-primary p-3 dt-setting mt-4">
                            <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
                            <div class="row g-3">
                                <div class="col-7">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <button id="primaryColorPicker"
                                                class="btn bg-primary avatar xs me-2"></button>
                                            <label>Primary Color</label>
                                        </li>
                                        <li>
                                            <button id="secondaryColorPicker"
                                                class="btn bg-secondary avatar xs me-2"></button>
                                            <label>Secondary Color</label>
                                        </li>
                                        <li>
                                            <button id="BodyColorPicker"
                                                class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                                            <label>Site Background</label>
                                        </li>
                                        <li>
                                            <button id="CardColorPicker"
                                                class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                            <label>Widget Background</label>
                                        </li>
                                        <li>
                                            <button id="BorderColorPicker"
                                                class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                            <label>Border Color</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <button id="chartColorPicker1"
                                                class="btn chart-color1 avatar xs me-2"></button>
                                            <label>Chart Color 1</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker2"
                                                class="btn chart-color2 avatar xs me-2"></button>
                                            <label>Chart Color 2</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker3"
                                                class="btn chart-color3 avatar xs me-2"></button>
                                            <label>Chart Color 3</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker4"
                                                class="btn chart-color4 avatar xs me-2"></button>
                                            <label>Chart Color 4</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker5"
                                                class="btn chart-color5 avatar xs me-2"></button>
                                            <label>Chart Color 5</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card fieldset border setting-mode mb-4">
                        <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
                        <div class="c_radio d-flex text-center">
                            <label class="m-1 theme-switch" for="theme-switch">
                                <input type="checkbox" id="theme-switch" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="./assets/img/dark-version.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-dark" for="theme-dark">
                                <input type="checkbox" id="theme-dark" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="./assets/img/dark-theme.svg" alt="Theme Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                                <input type="checkbox" id="theme-high-contrast" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="./assets/img/high-version.svg" alt="High Contrast" />
                                </span>
                            </label>
                            <label class="m-1 theme-rtl" for="theme-rtl">
                                <input type="checkbox" id="theme-rtl" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="./assets/img/rtl-version.svg" alt="RTL Mode!" />
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="card fieldset border setting-font mb-4">
                        <span class="fieldset-tile bg-card">Font Settings</span>
                        <div class="c_radio d-flex text-center font_setting">
                            <label class="m-1" for="font-opensans">
                                <input type="radio" name="font" id="font-opensans" value="font-opensans"
                                    checked="" />
                                <span class="card p-2 bg-body">
                                    <img class="img-fluid" src="./assets/img/font-opensans.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-nunito">
                                <input type="radio" name="font" id="font-nunito" value="font-nunito" />
                                <span class="card p-2 bg-body">
                                    <img class="img-fluid" src="./assets/img/font-nunito.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-raleway">
                                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                                <span class="card p-2 bg-body">
                                    <img class="img-fluid" src="./assets/img/font-raleway.svg" alt="Dark Mode" />
                                </span>
                            </label>
                        </div>

                        <div class="m-1 p-3 bg-body rounded-4">
                            <p>Dynamic Font Settings</p>
                            <div class="mb-2">
                                <label class="form-label small text-muted mb-0">Enter font URL</label>
                                <input id="font_url" type="text" class="form-control"
                                    placeholder="http://fonts.cdnfonts.com/css/vonfont">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small text-muted mb-0">Enter font family name</label>
                                <input id="font_family" type="text" class="form-control" placeholder="vonfont">
                            </div>
                            <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
                            <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
                        </div>
                    </div>

                    <div class="setting-more mb-4">
                        <h6 class="card-title">More Setting</h6>
                        <ul class="list-group list-group-flush list-group-custom fs-6">

                            <li class="list-group-item">
                                <div class="form-check form-switch radius-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="BorderRadius">
                                    <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch fluid-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                                    <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-switch shadow-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="card_shadow">
                                    <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
                    <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                    <button type="button" class="btn flex-fill btn-white border lift"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <a class="page-setting" href="#" title="Settings" data-bs-toggle="modal"
        data-bs-target="#SettingsModal"><i class="fa fa-gear text-light"></i></a>


    <script src="/website/js/theme.js"></script>

</body>

</html>
