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

    @if(count($vacancies) > 0)
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
        <tr>
            <td col="12">
                <div class="alert alert-danger">
                    There are no marching records
                </div>
            </td>
        </tr>

    </tbody>

</table>
@endsection
@section('content-footer')
    <div class="showing">
        Showing {{ $vacancies->firstItem() }} to {{ $vacancies->lastItem() }} of {{ $vacancies->total() }} entries
    </div>

    <div class="pagination-wrapper">
        {!! $vacancies->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
