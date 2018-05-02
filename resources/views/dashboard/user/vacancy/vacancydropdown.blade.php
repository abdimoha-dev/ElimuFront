@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        vacancy by county
    </h1>
@endsection

{{ Form::open(['url'=>'user/vacancies/county', 'role' =>'form'])  }}
@csrf
{!!  Form::select('counties', config('sys.settings.counties'));  !!}


<div class="box-footer">
    <button type="submit" class="btn btn-primary">
        Submit County
    </button>
</div>

{{ Form::close() }}
@endsection