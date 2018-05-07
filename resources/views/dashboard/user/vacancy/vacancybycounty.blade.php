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
        @if(count($counties) > 0)
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
        @else

            <tr><td col="12">  <div class="alert alert-danger">
                       There are no marching records
                    </div>
                </td></tr>




        @endif

        </tbody>

    </table>

@endsection
@section('content-footer')
    <div class="showing" >
        Showing {{ $counties->firstItem() }} to {{ $counties->lastItem() }} of {{ $counties->total() }} entries
    </div>

    <div class="pagination-wrapper">
        {!! $counties->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
