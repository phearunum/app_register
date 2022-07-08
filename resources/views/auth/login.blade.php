@extends('layouts.auth-master')

@section('content')
<form method="post" action="{{ route('login.perform') }}" style="margin-top:-300px;">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

    <h1 class="h3 mb-3 fw-normal app_font_titel">{{__('lang.login your account')}}</h1>

    @include('layouts.partials.messages')

    <div class="form-group form-floating mb-3">
        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
        <label for="floatingName">{{__('lang.email or username')}}</label>
        @if ($errors->has('username'))
        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
    </div>

    <div class="form-group form-floating mb-3">
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        <label for="floatingPassword">{{__('lang.password')}}</label>
        @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <button class="w-100 btn btn-lg app_them_1 app_font_titel" type="submit">  {{__('lang.login')}} </button>

   <!-- @include('auth.partials.copy')-->
</form>

@endsection
