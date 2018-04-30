@extends('layouts.auth')
@section('content')


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    {!! Form::open(['url'=>'shared/email']) !!}
                        @csrf
                        <div class="form-group row">
                            {!! Form::label('email', 'Email Address') !!}
                            {!! Form::email('email', old('email'),['class'=>'form-control', 'placeholder'=>'address@gmail.com'] ) !!}
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if($errors->has('email'))
                                <span class="invalid-feedback text-danger">
                                    <strong>
                                <i class="fa fa-exclamation-triangle fa-fw"></i> {{$errors->first('email')}}
                                    </strong>
                                </span>
                                @endif

                        </div>


                        <div class="row">


                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                            </div>

                        </div>


                    {!! Form::close() !!}



@endsection
