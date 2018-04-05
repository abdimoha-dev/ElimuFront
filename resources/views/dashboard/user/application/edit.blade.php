@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('*ENTER YOUR DETAILS*') }}</div>

                    <div class="card-body">

                        {{ Form::open(['url'=>'apply'])  }}

                        {{ Form::label('id_number','ID Number', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::number('id_number',old('id_number'), ['class'=>'form-control','id'=>'id_number']) }}

                        <div class="divider"></div>

                        {{ Form::label('place_of_birth','place of birth', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::text('place_of_birth',old('place_of_birth'), ['class'=>'form-control','id'=>'place_of_birth']) }}

                        <div class="divider"></div>

                        {{ Form::label('place_of_residence','place of residence', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::text('place_of_residence',old('place_of_residence'), ['class'=>'form-control','id'=>'place_of_residence']) }}

                        <div class="divider"></div>

                        {{ Form::label('year_of_birth','year of birth', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::date('year_of_birth',old('year_of_birth'), ['class'=>'form-control','id'=>'year_of_birth']) }}

                        <div class="divider"></div>

                        {{ Form::label('year_finished_sec','year_finished_sec', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::date('year_finished_sec',old('year_finished_sec'), ['class'=>'form-control','id'=>'year_finished_sec']) }}

                        <div class="divider"></div>

                        {{ Form::label('education_level','education_level', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::text('education_level',old('education_level'), ['class'=>'form-control','id'=>'education_level']) }}

                        <div class="divider"></div>
                        {{ Form::label('sec_school','sec_school', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::text('sec_school',old('sec_school'), ['class'=>'form-control','id'=>'sec_school']) }}

                        <div class="divider"></div>

                        {{ Form::label('index_no','index_no', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::number('index_no',old('index_no'), ['class'=>'form-control','id'=>'index_no']) }}

                        <div class="divider"></div>
                        {{ Form::label('course','course', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::number('course',old('course'), ['class'=>'form-control','id'=>'next_of_kin_name ']) }}

                        <div class="divider"></div>


                        {{ Form::label('next_of_kin_phone','next of kin phone', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::number('next_of_kin_phone',old('next_of_kin_phone'), ['class'=>'form-control','id'=>'next_of_kin_phone']) }}

                        <div class="divider"></div>

                        {{ Form::label('next_of_kin_email','next_of_kin_email', ['class'=>"col-sm-4 col-form-label text-md-right"])  }}
                        {{ Form::email('next_of_kin_email',old('next_of_kin_email'), ['class'=>'form-control','id'=>'next_of_kin_email']) }}

                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>

                        {{ Form::close() }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
