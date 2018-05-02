@extends('layouts.dash')
@section('content')
@section('content-header')
    <h1>
        teacher vacancy
    </h1>
@endsection
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>More Details</th>
            {{--<th>Number Of Students</th>--}}


        </tr>
        </thead>
        <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{$teacher->first_name}}</td>
                <td>{{$teacher->second_name}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->phone}}</td>
                <td><a href="{{url('details/'.$teacher->id)}}" class="btn btn-info" role="button">More Details</a></td>
                {{--<td><a href="{{ url('school/'.$school->id)}}" class="btn btn-info" role="button">More Details</a></td>--}}

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
