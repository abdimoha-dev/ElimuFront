@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        Enter Comment
    </h1>
@endsection
<div class=”container”>
    {{Form::open(['url'=>'user/comment/mycomment/{id}','role'=>'form'])}}
    <div class="form-group">
        {{ Form::label('body','Body')  }}
        {{ Form::textarea('body',old('body'), ['class'=>'form-control ' ]) }}
        {{Form::hidden('id',$id)}}
        @if($errors->has('body'))
            <p class="help-block text-danger">
                <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('body') }}
            </p>
        @endif
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">
            Comment
        </button>
    </div>
</div>
{{Form::close()}}

@endsection