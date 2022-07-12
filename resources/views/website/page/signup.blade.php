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
    <link href="https://www.jqueryscript.net/demo/floating-labels-bootstrap/bootstrap.css" rel="stylesheet"
        type="text/css">

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

        .form-control-lg {
            font-size: 1.2px;
            padding: 20px 10px !important;
        }

        .form-control.form-control-lg,
        .form-select.form-control-lg {
            min-height: calc(1.2em + 1.5rem + 2px);
            font-size: 1.2rem;
        }
    </style>
</head>

<body data-avio="theme-indigo">

    <div class="avio">

        <div class="page-body">
            <div class="container-fluid">
                <div class="container " style="min-height: 150px;">
                    <h3 class="app_font_titel pt-4 text-white "> {{ __('lang.efiling') }} </h3>
                </div>
                <div class="container p-0" style="margin-top: -40px;">

                    <div class="card p-2">
                        <h1 class="h3 mb-3 app_font_titel">{{ __('lang.sigup account') }}</h1>
                        <form class="p-4" method="post" action="{{ route('register.perform') }}">
                            <div class="row p-0">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group form-group-lg floating-label">
                                        <input type="text" class="form-control form-control-lg" name="first_name"
                                            value="{{ old('first_name') }}" placeholder="{{ __('lang.first_name') }}"
                                            required="required" autofocus>
                                        <label for="floatingFirstName">{{ __('lang.first_name') }}</label>
                                        @if ($errors->has('first_name'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group form-group-lg floating-label">
                                        <input type="text" class="form-control form-control-lg " name="last_name"
                                            value="{{ old('last_name') }}" placeholder="{{ __('lang.last_name') }}"
                                            required="required" autofocus>
                                        <label for="floatingLastName">{{ __('lang.last_name') }}</label>
                                        @if ($errors->has('last_name'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group floating-label">
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" placeholder="name@example.com"
                                            required="required" autofocus>
                                        <label for="floatingEmail">Email address</label>
                                        @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ old('phone') }}" placeholder="Phone" required="required"
                                            autofocus>
                                        <label for="floatingPhone">Phone</label>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" name="province"
                                            value="{{ old('province') }}" placeholder="Province" required="required"
                                            autofocus>
                                        <label for="floatingProvince">Province</label>
                                        @if ($errors->has('province'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('province') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" name="address"
                                            value="{{ old('address') }}" placeholder="Address" required="required"
                                            autofocus>
                                        <label for="floatingProvince">Address</label>
                                        @if ($errors->has('address'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="status" value="1">

                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" name="username"
                                            value="{{ old('username') }}" placeholder="Username"
                                            required="required" autofocus>
                                        <label for="floatingName">Username</label>
                                        @if ($errors->has('username'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group floating-label">

                                        <select class="form-control" id="account_type" placeholder="Account Type"
                                            name="account_type" @error('account_type') is-invalid @enderror>
                                            <option selected disabled>-- Select --</option>
                                            @foreach ($AccountType as $items)
                                                <option value="{{ $items->id }}"
                                                    data-trainer_id={{ $items->id }}>{{ $items->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('account_type'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('account_type') }}</span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="form-group floating-label">
                                        <input type="password" class="form-control" name="password"
                                            value="{{ old('password') }}" placeholder="Password"
                                            required="required">
                                        <label for="floatingPassword">Password</label>
                                        @if ($errors->has('password'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6 p-1">

                                    <div class="form-group floating-label">
                                        <input type="password" class="form-control" name="password_confirmation"
                                            value="{{ old('password_confirmation') }}"
                                            placeholder="Confirm Password" required="required">
                                        <label for="floatingConfirmPassword">Confirm Password</label>
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <button class="w-100 btn btn-primary col-6 " type="submit">Register</button>
                                <button class="w-100 btn btn-danger col-6 " type="button">Cancel</button>

                            </div>
                        </form>

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
