@extends('layouts.dash')
@section('content')
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Id Number</th>
            <th>Place Of Birth</th>
            <th>Place Of Residence</th>
            <th>Year Of Birth</th>



        </tr>
        </thead>
        <tbody>
        @foreach
        ($details as $detail)
            <tr>
                <td>{{$detail->id_number}}</td>
                <td>{{$detail->place_of_birth}}</td>
                <td>{{$detail->place_of_residence}}</td>
                <td>{{$detail->year_of_birth}}</td>
                {{--<td><a href="{{ url('school/'.$school->id)}}" class="btn btn-info" role="button">More Details</a></td>--}}

                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
