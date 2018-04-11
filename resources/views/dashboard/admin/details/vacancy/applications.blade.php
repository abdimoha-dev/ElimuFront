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
        @foreach ($details as $detail)
            <tr>
                <td>{{$detail->first_name}}</td>
                <td>{{$detail->second_name}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->phone}}</td>
                <td><a href="{{}}" class="btn btn-info" role="button">More Details</a></td>
                {{--<td><a href="{{ url('school/'.$school->id)}}" class="btn btn-info" role="button">More Details</a></td>--}}

                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
