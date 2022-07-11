@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required="required" autofocus>
            <label for="floatingFirstName">First Name</label>
            @if ($errors->has('first_name'))
                <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required="required" autofocus>
            <label for="floatingLastName">First Name</label>
            @if ($errors->has('last_name'))
                <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone" required="required" autofocus>
            <label for="floatingPhone">Phone</label>
            @if ($errors->has('phone'))
                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="province" value="{{ old('province') }}" placeholder="Province" required="required" autofocus>
            <label for="floatingProvince">Province</label>
            @if ($errors->has('province'))
                <span class="text-danger text-left">{{ $errors->first('province') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address" required="required" autofocus>
            <label for="floatingProvince">Address</label>
            @if ($errors->has('address'))
                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
            @endif
        </div>
        <input type="hidden" class="form-control" name="status" value="1">

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
           
            <select class="form-control" id="account_type" placeholder="Account Type" name="account_type" @error('account_type') is-invalid @enderror>
                @foreach ($AccountType as $items )
                    <option selected disabled>-- Select --</option>
                    <option value="{{ $items->id }}" data-trainer_id={{ $items->id }}>{{ $items->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('account_type'))
            <span class="text-danger text-left">{{ $errors->first('account_type') }}</span>
        @endif

        </div>
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('auth.partials.copy')
    </form>
@endsection