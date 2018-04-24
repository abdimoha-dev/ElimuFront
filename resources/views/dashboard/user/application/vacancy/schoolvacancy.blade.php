@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        My school vacancy
    </h1>
@endsection
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Vacancy Reference Number</th>
            <th>Duration For Teaching</th>
            <th>Subjects Needed</th>
            <th>Classes To Be Taught</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($vacancies as $vacancy)
            <tr>
                <td>{{$vacancy->reference_no}}</td>
                <td>{{$vacancy->duration}}</td>
                <td>{{$vacancy->subjects}}</td>
                <td>{{$vacancy->class}}</td>
                <td></td>
                <td></td>

            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
