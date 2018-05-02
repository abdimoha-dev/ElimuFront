@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        Vacancy by county
    </h1>
@endsection
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>School Name</th>
            <th>Location</th>
            <th>Address</th>
            <th>Number Of Classes</th>
            <th>Number Of Teachers</th>
            <th>Number Of Students</th>



        </tr>
        </thead>
        <tbody>
        @foreach ($counties as $county)
            <tr>
                <td>{{$county->name}}</td>
                <td>{{$county->location}}</td>
                <td>{{$county->address}}</td>
                <td>{{$county->no_of_classes}}</td>
                <td>{{$county->no_of_teachers}}</td>
                <td>{{$county->no_of_students}}</td>
                <td><a href="{{url('schoolbyvacancy/'.$county->id)}}" class="btn btn-info" role="button">More Details</a></td>

                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
@section('content-footer')

    <div class="pagination-wrapper">
        {{ $counties->links() }}
    </div>
@endsection
