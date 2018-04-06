@extends('layouts.dash')

@section('page-title')
    <h1>
        <B>VACANCY</B>

    </h1>

    <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Home</li>
        {{--<li><a href="#">Examples</a></li>--}}
        {{--<li class="active">Blank page</li>--}}
    </ol>
@endsection

@section('content-header')
    <h3 class="box-title">VACANCY DETAILS</h3>

    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">--}}
        {{--<i class="fa fa-times"></i></button>--}}
    </div>
@endsection

@section('content')
    {{ Form::open(['url'=>'admin/details/vacancy', 'role' =>'form'])  }}
    @csrf
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('duration','Duration')  }}
            {{ Form::text('duration',old('duration'), ['class'=>'form-control']) }}
            @if($errors->has('duration'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('duration') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('subjects','Subjects Required')  }}
            {{ Form::text('subjects',old('subjects'), ['class'=>'form-control']) }}
            @if($errors->has('subjects'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('subjects') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('class','Classes To Be Taught')  }}
            {{ Form::text('class',old('class'), ['class'=>'form-control']) }}
            @if($errors->has('class'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('class') }}
                </p>
            @endif
        </div>


        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                SUBMIT
            </button>
        </div>
    </div>
    {{ Form::close() }}
@endsection

@section('content-footer')
    Footer
@endsection


