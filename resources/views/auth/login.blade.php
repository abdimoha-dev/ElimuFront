@extends('layouts.auth')

@section('title-message')
    <p class="login-box-msg">Sign in to start your session</p>
@endsection

@section('content')

    {!! Form::open(['url'=>'login']) !!}

    @csrf

    <div class="form-group has-feedback">
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'address@mail.com']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('email'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('email') }}
                </strong>
            </span>
        @endif
    </div>

    <div class="form-group has-feedback">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('password') }}
                </strong>
            </span>
        @endif
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
    {!! Form::close() !!}

    <a href="{{ route('password.request') }}">Forgot password?</a><br>
    <a href="{{ route('register') }}" class="text-center">Don't have an account? Register a new membership.</a>

@endsection
