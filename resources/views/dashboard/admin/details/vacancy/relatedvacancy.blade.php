@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        Related vacancies
    </h1>
@endsection
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Second Name</th>
            <th>ID Number</th>
            <th>Place Of Birth</th>
            <th>Place Of Residence</th>
            <th>Year Of Birth</th>
            <th>Education Level</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{$teacher->users->first_name}}</td>
                <td>{{$teacher->users->second_name}}</td>
                <td>{{$teacher->id_number}}</td>
                <td>{{$teacher->place_of_birth}}</td>
                <td>{{$teacher->place_of_residence}}</td>
                <td>{{$teacher->year_of_birth}}</td>
                <td>{{$teacher->education_level}}</td>
                <td><a href="{{url('interview/'.$teacher->users->email)}}" class="btn btn-info" role="button">Invite for Interview</a></td>
                <td><a href="{{url('messageform/'.$teacher->users->id)}}" class="btn btn-info" role="button">Message Teacher</a></td>
                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
@section('content-footer')

    <div class="pagination-wrapper">
        {{ $teachers->links() }}
    </div>
@endsection
