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
    {{ Form::open(['url'=>'admin/details/complete', 'role' =>'form'])  }}
    @csrf
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Tsc_no','TSC Number')  }}
            {{ Form::number('Tsc_no',old('Tsc_no'), ['class'=>'form-control']) }}
            @if($errors->has('Tsc_no'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('Tsc_no') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('id_no','ID Number')  }}
            {{ Form::text('id_no',old('id_no'), ['class'=>'form-control']) }}
            @if($errors->has('id_no'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('id_no') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('alt_phone','Alternative Phone Number')  }}
            {{ Form::text('alt_phone',old('alt_phone'), ['class'=>'form-control']) }}
            @if($errors->has('alt_phone'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('alt_phone') }}
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


