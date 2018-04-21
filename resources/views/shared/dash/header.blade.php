<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <span><b>TEACH</b>connect</span>

        <img width="40" src="{{ asset('dash/img/teacher-pointing-a-board-with-a-stick(1).png') }}" class="logo-mini" style="display: initial" alt="User Image">

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="{{url('sentmessages')}}">
                        <i class="fa fa-envelope"></i> <span>inbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>

            </span>
                    </a>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                        {{--<img width="30" src="{{ asset('dash/img/teacher-pointing-a-board-with-a-stick.png') }}" class="logo-mini" alt="User Image">--}}
                        <img src="{{ asset('dash/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{auth()->user()->first_name}} {{auth()->user()->second_name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('dash/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                            <p>
                                {{auth()->user()->first_name}} {{auth()->user()->second_name}}- Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>

                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#!">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#!">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#!">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#!" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#!" class="btn btn-default btn-flat sign-out">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#!" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>