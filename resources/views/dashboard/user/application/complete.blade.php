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
    {{ Form::open(['url'=>'user/application/complete', 'role' =>'form'])  }}
    @csrf
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('id_number','ID Number')  }}
            {{ Form::number('id_number',old('id_number'), ['class'=>'form-control']) }}
            @if($errors->has('id_number'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('id_number') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('place_of_birth','Place Of Birth')  }}
            {{ Form::text('place_of_birth',old('place_of_birth'), ['class'=>'form-control']) }}
            @if($errors->has('place_of_birth'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('place_of_birth') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('place_of_residence','Place Of Residence')  }}
            {{ Form::text('place_of_residence',old('place_of_residence'), ['class'=>'form-control']) }}
            @if($errors->has('place_of_residence'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('place_of_residence') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('year_of_birth','Year Of Birth')  }}
            {{ Form::date('year_of_birth',old('year_of_birth'), ['class'=>'form-control']) }}
            @if($errors->has('year_of_birth'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('year_of_birth') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('year_finished_sec','Year Finished School')}}
            {{ Form::date('year_finished_sec',old('year_finished_sec'), ['class'=>'form-control']) }}
            @if($errors->has('year_finished_sec'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('year_finished_sec') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('education_level','Education Level')}}
            {{ Form::text('education_level',old('education_level'), ['class'=>'form-control']) }}
            @if($errors->has('education_level'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('education_level') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('sec_school','Secondary School')}}
            {{ Form::text('sec_school',old('sec_school'), ['class'=>'form-control'])}}
            @if($errors->has('sec_school'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('sec_school') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('index_no','Index Number')}}
            {{ Form::number('index_no',old('index_no'), ['class'=>'form-control'])}}
            @if($errors->has('index_no'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('index_no') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('higher_inst','Higher Institution Attended')}}
            {{ Form::text('higher_inst',old('higher_inst'), ['class'=>'form-control'])}}
            @if($errors->has('higher_inst'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('higher_inst') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('course','Course')}}
            {{ Form::text('course',old('course'), ['class'=>'form-control']) }}
            @if($errors->has('course'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('course') }}
                </p>
            @endif
        </div>




        <div class="form-group">
            {{ Form::label('subject_one','Subjects You can Teach')}}
            {{ Form::text('subject_one',old('subject_one'), ['class'=>'form-control']) }}
            @if($errors->has('subject_one'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('subject_one') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('subject_two','Other Subjects You can Teach')}}
            {{ Form::text('subject_two',old('subject_two'), ['class'=>'form-control']) }}
            @if($errors->has('subject_two'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('subject_two') }}
                </p>
            @endif
        </div>



        <div class="form-group">
            {{ Form::label('next_of_kin_name','Next Of Kin Name')}}
            {{ Form::text('next_of_kin_name',old('next_of_kin_phone'), ['class'=>'form-control']) }}
            @if($errors->has('next_of_kin_name'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('next_of_kin_name') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('next_of_kin_phone','Next Of Kin Phone')}}
            {{ Form::number('next_of_kin_phone',old('next_of_kin_phone'), ['class'=>'form-control']) }}
            @if($errors->has('next_of_kin_phone'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('next_of_kin_phone') }}
                </p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('next_of_kin_email','Next Of Kin Email')}}
            {{ Form::email('next_of_kin_email',old('next_of_kin_email'), ['class'=>'form-control']) }}
            @if($errors->has('next_of_kin_email'))
                <p class="help-block text-danger">
                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('next_of_kin_email') }}
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
    yryryjtyjtyt
@endsection


