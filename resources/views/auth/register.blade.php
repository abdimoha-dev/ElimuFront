@extends('layouts.auth')

@section('title-message')
    <p class="login-box-msg">Register a new membership</p>
@endsection

@section('content')

    {!! Form::open(['url'=>'register']) !!}
    @csrf

    <div class="form-group has-feedback">
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '*name*']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('first_name'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('first_name') }}
                </strong>
            </span>
        @endif
    </div>

    <div class="form-group has-feedback">
        {!! Form::label('second_name', 'Second Name') !!}
        {!! Form::text('second_name', old('second_name'), ['class' => 'form-control', 'placeholder' => '*name*']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('second_name'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('second_name') }}
                </strong>
            </span>
        @endif
    </div>

    <div class="form-group has-feedback">
        {!! Form::label('phone', 'Phone Number') !!}
        {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '07000000000']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('phone'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('phone') }}
                </strong>
            </span>
        @endif
    </div>

        {!!  Form::select('user', config('sys.settings.users'));  !!}

        <div class="form-group has-feedback">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '07000000000']) !!}
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
        {!! Form::password('password', ['class' => 'form-control']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('password'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('password') }}
                </strong>
            </span>
        @endif
    </div>


    <div class="form-group has-feedback">
        {!! Form::label('password_confirmation', 'Confirm Your Password') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('password_confirmation'))
            <span class="invalid-feedback text-danger">
                <strong>
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('password_confirmation') }}
                </strong>
            </span>
        @endif
    </div>

    <div class="row">
        <div class="col-xs-8">
            {{--<div class="checkbox icheck">--}}
                {{--<label for="">--}}
                    {{--<input type="checkbox" value="headteacher">--}}
                    {{--Sign up as a head teacher--}}
                {{--</label>--}}
            {{--</div>--}}
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.

    {!! Form::close() !!}

@endsection
