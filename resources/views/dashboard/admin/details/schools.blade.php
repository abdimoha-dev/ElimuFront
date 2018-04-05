@extends('layouts.dash')

@section('page-title')
    <h1>
        My Application
        <small>additional details</small>
    </h1>

    <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Home</li>
        {{--<li><a href="#">Examples</a></li>--}}
        {{--<li class="active">Blank page</li>--}}
    </ol>
@endsection

@section('content-header')
    <h3 class="box-title">Add More Application Details</h3>

    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">--}}
        {{--<i class="fa fa-times"></i></button>--}}
    </div>
@endsection

@section('content')
    {{ Form::open(['url'=>'admin/details/getform', 'role' =>'form'])  }}
    @csrf
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('name','School Name')  }}
            {{ Form::text('name',old('name'), ['class'=>'form-control']) }}
            @if($errors->has('name'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('name') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('location','Location')  }}
            {{ Form::number('location',old('location'), ['class'=>'form-control']) }}
            @if($errors->has('location'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('location') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('address','Address')  }}
            {{ Form::text('address',old('address'), ['class'=>'form-control']) }}
            @if($errors->has('address'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('address') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('no_of_classes','Number Of Classes')  }}
            {{ Form::text('no_of_classes',old('no_of_classes'), ['class'=>'form-control']) }}
            @if($errors->has('no_of_classes'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('no_of_classes') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('no_of_teachers','Number Of Teachers')  }}
            {{ Form::text('no_of_teachers',old('no_of_classes'), ['class'=>'form-control']) }}
            @if($errors->has('no_of_teachers'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('no_of_teachers') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('no_of_students','Number Of students')  }}
            {{ Form::number('no_of_students',old('no_of_students'), ['class'=>'form-control']) }}
            @if($errors->has('no_of_students'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('no_of_students') }}
                </p>
            @endif
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                Complete Application
            </button>
        </div>
    </div>
    {{ Form::close() }}
@endsection

@section('content-footer')
    Footer
@endsection


