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
            <th>Vacancy Details</th>
        </tr>
        </thead>
        <tbody>
        @if(count($schools) > 0)
            @foreach ($schools as $school)
                <tr>
                    <td>{{$school->name}}</td>
                    <td>{{$school->location}}</td>
                    <td>{{$school->address}}</td>
                    <td>{{$school->no_of_classes}}</td>
                    <td>{{$school->no_of_teachers}}</td>
                    <td>{{$school->no_of_students}}</td>
                    <td>{{$schools->total()}}</td>
                    <td><a href="{{ url('user/vacancies/school/'.$school->id)}}" class="btn btn-info" role="button">More
                            Details</a></td>
                    <td></td>

                </tr>
            @endforeach

        @else

            <tr>
                <td col="12">
                    <div class="alert alert-danger">
                        There are no marching records
                    </div>
                </td>
            </tr>




        @endif
        </tbody>

    </table>

@endsection
@section('content-footer')
    <div class="showing">
        Showing {{ $schools->firstItem() }} to {{ $schools->lastItem() }} of {{ $schools->total() }} entries
    </div>

    <div class="pagination-wrapper">
        {!! $schools->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection

