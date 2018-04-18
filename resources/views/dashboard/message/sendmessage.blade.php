@extends('layouts.dash')
@section('content')

    <div class="row">
        <div class="col-md-6">
                <div class="box-footer">
                    {{ Form::open(['url'=>'messageform/{id}', 'role' =>'form'])  }}
                        <div class="form-group">
                        {{ Form::label('message','type your message')  }}
                        {{ Form::text('message',old('message'),  ['class'=>'form-control'], ['placeholder'=>'Type Message ...']) }}
                        {{ Form::hidden('recipient_id', $id) }}

                        @if($errors->has('message'))
                        <p class="help-block text-danger">
                        <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('message') }}
                        </p>
                        @endif
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">
                                Send
                            </button>
                        </div>
                    {{ Form::close() }}
                </div>
                <!-- /.box-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <!-- USERS LIST -->

            <!-- /.col -->
        </div>
@endsection

