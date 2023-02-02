@extends('backend.layouts.auth_master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Register</h1>


        <div class="form-group form-floating mb-3">
            <label for="floatingName">Username</label>

            <input type="text" class="form-control" name="admin_name" value="" placeholder="Username" required="required" autofocus>
            @if ($errors->has('admin_name'))
                <span class="text-danger text-left">{{ $errors->first('admin_name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingPassword">Password</label>

            <input type="password" class="form-control" name="password" value="" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>


        <div class="form-group form-floating mb-3">
            <label for="floatingEmail">Email address</label>
            <input type="email" class="form-control" name="email" value="" placeholder="name@example.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingEmail">Avatar</label>
            <input type="text" class="form-control" name="avatar" value="" placeholder="pic1.jpg" required="required" autofocus>
            @if ($errors->has('avatar'))
                <span class="text-danger text-left">{{ $errors->first('avatar') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingEmail">Avatar</label>
            <input type="number" class="form-control" name="phone" value="" placeholder="0987654321" required="required" autofocus>
            @if ($errors->has('phone'))
                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingEmail">Avatar</label>
            <input type="text" class="form-control" name="address" value="" placeholder="Hanoi" required="required" autofocus>
            @if ($errors->has('address'))
                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
            @endif
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('backend.auth.partials.copy')
    </form>
@endsection
