@extends('dashboard.widget.master')
@section('content')
@auth
<div class="page-content">
    <!--breadcrumb-->
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-7">
                   <h3>  User Management  </h3>
                </div>
                <div class="col-sm-5 ">
                <div class="col d-flex justify-content-end  ">
				</div>
                </div>
                <div class="col-sm-12 " style="margin-top: -40px;">

                        <form class="p-4 requires-validation " method="post" action="{{ route('register.perform') }}" novalidate>
                            <div class="row p-0">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control input-sm" name="first_name" value="{{ old('first_name') }}" placeholder="{{ __('lang.first name') }}" required="required" autofocus>
                                        <label for="floatingFirstName"> {{ __('lang.first name') }}</label>
                                        @if ($errors->has('first_name'))
                                        <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group float-label">
                                        <input type="text" class="form-control " name="last_name" value="{{ old('last_name') }}" placeholder="{{ __('lang.last name') }}" required="required" autofocus>
                                        <label for="floatingLastName">{{ __('lang.last name') }}</label>
                                        @if ($errors->has('last_name'))
                                        <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 p-1 mt-1">
                                    <label class="mb-3 mr-1" for="gender">{{ __('lang.gender') }}: </label>
                                    <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="male">{{ __('lang.male') }}</label>
                                    <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="female">{{ __('lang.female') }}</label>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group float-label">
                                        <input type="text" id="datepicker2" class="form-control datepicker_input " name="dateofbirth" value="{{ old('dateofbirth') }}" placeholder="{{ __('lang.dateofbirth') }}" required="required" autofocus required aria-label="Date input 3 (using aria-label)">
                                        <label for="floatingLastName">{{ __('lang.dateofbirth') }}</label>
                                        @if ($errors->has('last_name'))
                                        <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control" name="national" value="{{ old('email') }}" placeholder="{{ __('lang.national') }}" required="required" autofocus>
                                        <label for="floatingEmail">{{ __('lang.national') }}</label>
                                        @if ($errors->has('national'))
                                        <span class="text-danger text-left">{{ $errors->first('national') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control" name="id_card" value="{{ old('email') }}" placeholder="{{ __('lang.id_card') }}" required="required" autofocus>
                                        <label for="floatingEmail">{{ __('lang.id_card') }}</label>
                                        @if ($errors->has('id_card'))
                                        <span class="text-danger text-left">{{ $errors->first('id_card') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('lang.email') }}" required="required" autofocus>
                                        <label for="floatingEmail">{{ __('lang.email') }}</label>
                                        @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="{{ __('lang.phone') }}" required="required" autofocus>
                                        <label for="floatingPhone">{{ __('lang.phone') }}</label>
                                        @if ($errors->has('phone'))
                                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control" name="province" value="{{ old('province') }}" placeholder="{{ __('lang.province') }}" required="required" autofocus>
                                        <label for="floatingProvince">{{ __('lang.province') }}</label>
                                        @if ($errors->has('province'))
                                        <span class="text-danger text-left">{{ $errors->first('province') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="{{ __('lang.address') }}" required="required" autofocus>
                                        <label for="floatingProvince">{{ __('lang.address') }}</label>
                                        @if ($errors->has('address'))
                                        <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="status" value="1">

                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="{{ __('lang.username') }}" required="required" autofocus>
                                        <label for="floatingName">{{ __('lang.username') }}</label>
                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12 p-1">
                                    <div class="form-group  float-label">
                                        <select class="form-control" id="account_type" placeholder="Account Type" name="account_type" @error('account_type') is-invalid @enderror>
                                            <option selected disabled>-- {{ __('lang.choose') }} --</option>
                                            @foreach ($AccountType as $items)
                                            <option value="{{ $items->id }}" data-trainer_id={{ $items->id }}>{{ $items->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <label for="floatingPassword">{{ __('lang.choose') }}</label>
                                        @if ($errors->has('account_type'))
                                        <span class="text-danger text-left">{{ $errors->first('account_type') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="form-group  float-label">
                                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="{{ __('lang.password') }}" required="required">
                                        <label for="floatingPassword">{{ __('lang.password') }}</label>
                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="form-group  float-label">
                                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="{{ __('lang.confirm password') }}" required="required">
                                        <label for="floatingConfirmPassword">{{ __('lang.confirm password') }}</label>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 p-1 mt-4">
                                    <div class="form-group">
                                        <button class=" btn  btn-primary " type="submit">{{ __('lang.register') }}
                                            <img class="img-fluid" src="/website/img/next-com.png" alt="Dark Mode">
                                        </button>
                                        <button class="0 btn btn-danger " type="button">{{ __('lang.cancel') }}
                                            <img class="img-fluid" src="/website/img/cancel.png" alt="Dark Mode">
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



@endauth

@endsection
