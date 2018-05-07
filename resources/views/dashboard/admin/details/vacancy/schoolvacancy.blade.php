@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        school vacancy
    </h1>
@endsection
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
        @if(count($vacancies)>0)
        @foreach ($vacancies as $vacancy)
            <tr>
                <td>{{$vacancy->reference_no}}</td>
                <td>{{$vacancy->duration}}</td>
                <td>{{$vacancy->subjects}}</td>
                <td><a href="{{ url('schoolvacancy/'.$vacancy->id)}}" class="btn btn-info" role="button">Available Teachers</a></td>

                <td></td>

            </tr>
        @endforeach
        @else
            <tr>
                <td col="12"> There are no vacancies for your school</td>
            </tr>


        @endif
        </tbody>

    </table>

@endsection
@section('content-footer')
    <div class="showing" >
        Showing {{ $vacancies->firstItem() }} to {{ $vacancies->lastItem() }} of {{ $vacancies->total() }} entries
    </div>

    <div class="pagination-wrapper">
        {!! $vacancies->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
