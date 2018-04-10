@extends('layouts.dash')
@section('content')

    {{--{{$schools->name}}{{$schools->location}}{{$schools->address}}{{$schools->no_of_classes}}{{$schools->no_of_teachers}}{{$schools->no_of_students}}<br/><br/>--}}
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>School Name</th>
            <th>Location</th>
            {{--<th>Address</th>--}}
            <th>Number Of classe</th>
            <th>Number Of teachers</th>
            <th>Number Of Students</th>
            <th>Reference Number</th>
            <th>Duration</th>
            <th>Subjects</th>
            <th>Class</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->school->name}}</td>
                <td>{{$subject->school->location}}</td>
                {{--<td>{{$subject->school->address}}</td>--}}
                <td>{{$subject->school->no_of_classes}}</td>
                <td>{{$subject->school->no_of_teachers}}</td>
                <td>{{$subject->school->no_of_students}}</td>
                <td>{{$subject->reference_no}}</td>
                <td>{{$subject->duration}}</td>
                <td>{{$subject->subjects}}</td>
                <td>{{$subject->class}}</td>
                <td><a href="#" class="btn btn-info" role="button">Show Interest</a></td>

                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
