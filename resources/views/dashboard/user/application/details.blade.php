@extends('layouts.dash')
@section('content-header')
    {{--{{ dump($user->first_name) }}--}}
{{--@section('page-title')--}}
    {{--<h1>--}}
        {{--My Application Details--}}
    {{--</h1>--}}

    {{--<ol class="breadcrumb">--}}
        {{--<li class="active"><i class="fa fa-dashboard"></i> Home</li>--}}
        {{--<li><a href="#">Examples</a></li>--}}
        {{--<li class="active">Blank page</li>--}}
    {{--</ol>--}}
@endsection

@if(auth()->user()->role == 'USER')
    @section('content')
    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">First Name: </h5>

        </div>
        <p class="mb-1"> {{($user->first_name) }}</p>

    </a>

    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Second Name: </h5>

        </div>
        <p class="mb-1"> {{$user->second_name }}</p>

    </a>

    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Email: </h5>

        </div>
        <p class="mb-1">{{$user->email }} </p>

    </a>

    <a href="#" class="list-group-item">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Phone: </h5>

        </div>
        <p class="mb-1"> {{$user->phone }}</p>

    </a>

    @if($user->application)
        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID Number: </h5>

            </div>
            <p class="mb-1">{{ $user->application->id_number }} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Place Of Birth: </h5>

            </div>
            <p class="mb-1">{{ $user->application->place_of_birth}} </p>


        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Place Of Residence: </h5>

            </div>
            <p class="mb-1"> {{$user->application->place_of_residence}}</p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Year Of Birth: </h5>

            </div>
            <p class="mb-1">{{$user->application->year_of_birth}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Education Level: </h5>

            </div>
            <p class="mb-1">{{$user->application->education_level}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Year Completed Secondary School: </h5>

            </div>
            <p class="mb-1">{{$user->application->year_finished_sec}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">School Attended: </h5>

            </div>
            <p class="mb-1">{{$user->application->sec_school}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Index Number: </h5>

            </div>
            <p class="mb-1">{{$user->application->index_no}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Course Studied: </h5>

            </div>
            <p class="mb-1"> {{$user->application->course}}</p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Next Of Kin Number: </h5>

            </div>
            <p class="mb-1">{{$user->next_of_kin_phone}} </p>

        </a>

        <a href="#" class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Next Of Kin Email: </h5>

            </div>
            <p class="mb-1"> {{$user->application->next_of_kin_email}}</p>

        </a>
    @else
        <p>Please <a class="btn btn-danger" href="{{ url('user/application/complete') }}">complete your application</a></p>
    @endif
@endsection
@elseif(auth()->user()->role == 'ADMIN')
{{--@section('content')--}}
@extends('dashboard.admin.home')


    @endsection

@endif


