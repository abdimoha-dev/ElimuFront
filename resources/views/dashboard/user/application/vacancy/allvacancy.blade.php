@extends('layouts.dash')
@section('content')

    {{--{{$schools->name}}{{$schools->location}}{{$schools->address}}{{$schools->no_of_classes}}{{$schools->no_of_teachers}}{{$schools->no_of_students}}<br/><br/>--}}
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>School Name</th>
            <th>Location</th>
            <th>Address</th>
            <th>Number Of Classes</th>
            <th>Number Of Teachers</th>
            <th>Number Of Students</th>
            <th>Number Of Vacancies</th>
            <th>Vacancy Details </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($schools as $school)
            <tr>
                <td>{{$school->name}}</td>
                <td>{{$school->location}}</td>
                <td>{{$school->address}}</td>
                <td>{{$school->no_of_classes}}</td>
                <td>{{$school->no_of_teachers}}</td>
                <td>{{$school->no_of_students}}</td>
                <td>{{$school->NULL}}</td>
                <td><a href="{{ url('school/'.$school->id)}}" class="btn btn-info" role="button">More Details</a></td>
                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
