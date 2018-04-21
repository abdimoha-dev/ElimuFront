@extends('layouts.dash')

@section('page-title')
    <h1>
        My Dashboard
        <small>it all starts here</small>
    </h1>

    <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Home</li>
        {{--<li><a href="#">Examples</a></li>--}}
        {{--<li class="active">Blank page</li>--}}
    </ol>
@endsection

@section('content-header')
    <h3 class="box-title">Title</h3>

    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>

    </div>

@endsection

@section('content')
    Start creating your amazing application!
@endsection

@section('content-footer')
    Footer
@endsection
