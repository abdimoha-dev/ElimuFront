@extends('layouts.dash')

@section('page-title')

@endsection

@section('content-header')
    <h3 class="box-title">My Details</h3>
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
