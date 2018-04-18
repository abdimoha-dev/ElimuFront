@extends('layouts.dash')

@section('page-title')
    {{--<h1>--}}
        {{--Blank page--}}
        {{--<small>it all starts here</small>--}}
    {{--</h1>--}}
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
@endsection

@section('content-header')
    <h3 class="box-title">My Details</h3>

    <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
    </div>
@endsection

@section('content')

    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Firs Name</span>
                        <span class="info-box-number">{{auth()->user()->first_name}}
                            <small> {{auth()->user()->second_name}}</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>

                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Firs Name</span>
                        <span class="info-box-number">{{auth()->user()->first_name}}
                            <small> {{auth()->user()->second_name}}</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>

                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ROLE</span>
                        <span class="info-box-number">{{auth()->user()->role}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>

                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Email</span>
                        <span class="info-box-number">{{auth()->user()->email}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- /.col -->

    </section>
@endsection

@section('content-footer')
    Footer
@endsection
