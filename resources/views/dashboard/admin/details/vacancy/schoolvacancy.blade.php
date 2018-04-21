@extends('layouts.dash')
@section('content')
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Vacancy Ref Number</th>
            <th>Vacancy Duration</th>
            <th>Subjects</th>
            <th>Available Teachers</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($vacancies as $vacancy)
            <tr>
                <td>{{$vacancy->reference_no}}</td>
                <td>{{$vacancy->duration}}</td>
                <td>{{$vacancy->subjects}}</td>
                <td><a href="{{ url('schoolvacancy/'.$vacancy->id)}}" class="btn btn-info" role="button">Available Teachers</a></td>

                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
