@extends('layouts.dash')
@section('content')

    <table class="table table-condensed">
        <thead>
        <tr>
            <th>School Name</th>
            <th>Location</th>
            <th>Email</th>
            <th>Number Of classe</th>
            <th>Number Of teachers</th>
            <th>Number Of Students</th>
            <th>Reference Number</th>
            <th>Duration</th>
            <th>Subjects</th>
            <th>Class</th>
            <th>Show Interest</th>
            <th>Inbox</th>

        </tr>
        </thead>
        <tbody>


        @if(count($subjects) > 0)
        @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->school->name}}</td>
                <td>{{$subject->school->location}}</td>
                <td>{{$subject->school->email}}</td>
                <td>{{$subject->school->no_of_classes}}</td>
                <td>{{$subject->school->no_of_teachers}}</td>
                <td>{{$subject->school->no_of_students}}</td>
                <td>{{$subject->reference_no}}</td>
                <td>{{$subject->duration}}</td>
                <td>{{$subject->subjects}}</td>
                <td>{{$subject->class}}</td>
                <td><a href="{{url('emails/'.$subject->school->email)}}" class="btn btn-info" role="button">Show
                        Interest</a></td>
                <td><a href="{{url('messageform/'.$subject->school->user_id)}}" class="btn btn-info" role="button">Message
                        School</a></td>
                <td></td>
            </tr>
        @endforeach
        @else
            <tr><td col="12"> There are no marching records</td></tr>


            @endif


        </tbody>

    </table>

@endsection
@section('content-footer')
    <div class="showing" >
        Showing {{ $subjects->firstItem() }} to {{ $subjects->lastItem() }} of {{ $subjects->total() }} entries
    </div>

    <div class="pagination-wrapper">
        {!! $subjects->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
