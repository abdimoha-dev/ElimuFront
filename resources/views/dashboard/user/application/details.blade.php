@extends('layouts.dash')
@section('content-header')

@endsection

@if(auth()->user()->role == 'TEACHER')
    @section('content')
    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><b>First Name: </b></h5>

        </div>
        <p class="mb-1"> {{($user->first_name) }}</p>

    </a>

    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><b>Second Name: </b></h5>

        </div>
        <p class="mb-1"> {{$user->second_name }}</p>

    </a>

    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><b>Email:</b> </h5>

        </div>
        <p class="mb-1">{{$user->email }} </p>

    </a>

    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><b>Phone:</b> </h5>

        </div>
        <p class="mb-1"> {{$user->phone }}</p>

    </a>


    {{--method to access relationship--}}
    @if($user->application)
        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>ID Number:</b> </h5>

            </div>
            <p class="mb-1">{{ $user->application->id_number }} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Place Of Birth: </b></h5>

            </div>
            <p class="mb-1">{{ $user->application->place_of_birth}} </p>


        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Place Of Residence:</b> </h5>

            </div>
            <p class="mb-1"> {{$user->application->place_of_residence}}</p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Year Of Birth:</b> </h5>

            </div>
            <p class="mb-1">{{$user->application->year_of_birth}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Education Level: </b></h5>

            </div>
            <p class="mb-1">{{$user->application->education_level}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Year Completed Secondary School: </b></h5>

            </div>
            <p class="mb-1">{{$user->application->year_finished_sec}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>School Attended:</b> </h5>

            </div>
            <p class="mb-1">{{$user->application->sec_school}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Index Number: </b></h5>

            </div>
            <p class="mb-1">{{$user->application->index_no}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Course Studied:</b> </h5>

            </div>
            <p class="mb-1"> {{$user->application->course}}</p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Next Of Kin Number: </b></h5>

            </div>
            <p class="mb-1">{{$user->next_of_kin_phone}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><b>Next Of Kin Email: </b></h5>

            </div>
            <p class="mb-1"> {{$user->application->next_of_kin_email}}</p>

        </a>
    @else
        <p>Please <a class="btn btn-danger" href="{{ url('user/application/complete') }}">complete your application</a></p>
    @endif
@endsection
@else(auth()->user()->role == 'ADMIN')
{{--@section('content')--}}



    @endsection

@endif


