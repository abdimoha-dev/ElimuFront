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
            <th>School Name</th>
            <th>Vacancy Reference Number</th>
            <th>Duration For Teaching</th>
            <th>Subjects Needed</th>
            <th>Classes To Be Taught</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($schools as $school)
            <tr>
                <td>{{$school->School->name}}</td>
                <td>{{$school->reference_no}}</td>
                <td>{{$school->duration}}</td>
                <td>{{$school->subjects}}</td>
                <td>{{$school->class}}</td>


                <td></td>
                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
@section('content-footer')
    <div class="showing" >
        Showing {{ $schools->firstItem() }} to {{ $schools->lastItem() }} of {{ $schools->total() }} entries
    </div>

    <div class="pagination-wrapper">
        {!! $schools->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
