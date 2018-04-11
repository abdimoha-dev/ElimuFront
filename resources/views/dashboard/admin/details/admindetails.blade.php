@extends('layouts.dash')
@section('content')
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Id Number</th>
            <th>Place Of Birth</th>
            <th>Place Of Residence</th>
            <th>Year Of Birth</th>
            <th>Education Level</th>
            <th>Year Completed Sec Shool/th>
            <th>Secondary School Attended</th>
            <th>Higher Institution Attended</th>
            <th>Course</th>
            <th>Subject</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($details as $detail)
            <tr>
                <td>{{$detail->id_number}}</td>
                <td>{{$detail->place_of_birth}}</td>
                <td>{{$detail->place_of_residence}}</td>
                <td>{{$detail->year_of_birth}}</td>
                <td>{{$detail->education_level}}</td>
                <td>{{$detail->year_finished_sec}}</td>
                <td>{{$detail->sec_school}}</td>
                <td>{{$detail->higher_inst}}</td>
                <td>{{$detail->course}}</td>
                <td>{{$detail->subject_taught}}</td>



                <td></td>

            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
