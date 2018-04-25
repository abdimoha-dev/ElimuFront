@extends('layouts.dash')
@section('content-header')
    <h1>
        My Profile
    </h1>
@endsection
@section('content')
    @if(auth()->user()->role == 'TEACHER')
        <div class="box-body">
            <div class="row">
                <h3 class="box-title">Personal Details</h3>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>First Name: </b></h5>

                        </div>
                        <p class="mb-1"> {{($user->first_name) }}</p>

                    </a>

                </div>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Second Name: </b></h5>

                        </div>
                        <p class="mb-1"> {{$user->second_name }}</p>

                    </a>

                </div>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>ID Number:</b></h5>

                        </div>
                        <p class="mb-1">{{ $user->application->id_number }} </p>

                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Year Of Birth:</b></h5>

                        </div>
                        <p class="mb-1">{{$user->application->year_of_birth}} </p>

                    </a>

                </div>

                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Place Of Birth: </b></h5>

                        </div>
                        <p class="mb-1">{{ $user->application->place_of_birth}} </p>
                    </a>

                </div>


                {{--end of row--}}
            </div>
            <div class="row">
                <h3 class="box-title">Contact</h3>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Email:</b></h5>

                        </div>
                        <p class="mb-1">{{$user->email }} </p>

                    </a>

                </div>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Phone:</b></h5>

                        </div>
                        <p class="mb-1"> {{$user->phone }}</p>

                    </a>

                </div>

                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Place Of Residence:</b></h5>

                        </div>
                        <p class="mb-1"> {{$user->application->place_of_residence}}</p>

                    </a>

                </div>

            </div>

            {{--end row--}}
            <div class="row">
                <h3 class="box-title">Education</h3>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Education Level: </b></h5>

                        </div>
                        <p class="mb-1">{{$user->application->education_level}} </p>

                    </a>

                </div>

                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Year Completed Secondary School: </b></h5>

                        </div>
                        <p class="mb-1">{{$user->application->year_finished_sec}} </p>

                    </a>

                </div>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>School Attended:</b></h5>

                        </div>
                        <p class="mb-1">{{$user->application->sec_school}} </p>

                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Index Number: </b></h5>

                        </div>
                        <p class="mb-1">{{$user->application->index_no}} </p>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Course Studied:</b></h5>

                        </div>
                        <p class="mb-1"> {{$user->application->course}}</p>

                    </a>
                </div>
            </div>
            {{--end of row--}}
            <div class="row">
                <h3>Next of Kin</h3>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Next Of Kin Name: </b></h5>

                        </div>
                        <p class="mb-1"> {{$user->application->next_of_kin_name}}</p>

                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Relationship: </b></h5>

                        </div>
                        <p class="mb-1"> {{$user->application->relationship}}</p>

                    </a>
                </div>
                <div class="col-md-4">

                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><b>Next Of Kin Number: </b></h5>

                        </div>
                        <p class="mb-1">{{$user->application->next_of_kin_phone}} </p>

                    </a>
                </div>
            </div>
            {{--method to access relationship--}}
            @if($user->application)





            @else
                <p>Please <a class="btn btn-danger" href="{{ url('user/application/complete') }}">complete your
                        application</a></p>
    @endif
@endsection
@else(auth()->user()->role == 'ADMIN')

@section('content')

@endsection

@endif


