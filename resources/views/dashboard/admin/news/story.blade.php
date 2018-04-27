@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        Publish story
    </h1>
@endsection
<div class=”container”>
        {{Form::open(['url'=>'/admin/uploads/stories','role'=>'form'])}}
            <div class="form-group">
                {{ Form::label('tittle','Tittle')  }}
                {{ Form::text('tittle',old('place_of_birth'), ['class'=>'form-control ' ]) }}
                @if($errors->has('tittle'))
                    <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('tittle') }}
                    </p>
                @endif
            </div>


        <div class="form-group">
            {{ Form::label('body','Body')  }}
            {{ Form::textarea('body',old('body'), ['class'=>'form-control ' ]) }}
            @if($errors->has('body'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('body') }}
                </p>
            @endif
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                Publish Your post
            </button>
        </div>
</div>
        {{Form::close()}}

@endsection