@extends('layouts.dash')
@section('content')
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>More Details</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{$teacher->first_name}}</td>
                <td>{{$teacher->second_name}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->phone}}</td>
                <td><a href="{{url('vacancy/'.$teacher->id)}}" class="btn btn-info" role="button">More Details</a></td>
                {{--<td><a href="{{ url('school/'.$school->id)}}" class="btn btn-info" role="button">More Details</a></td>--}}

                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
