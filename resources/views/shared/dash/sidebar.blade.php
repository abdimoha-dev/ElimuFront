<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dash/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                {{--getting name for the authenticated user--}}
                <p>{{auth()->user()->first_name}} {{auth()->user()->second_name}}</p>
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @if(auth()->user()->role == 'TEACHER')
                @include('shared.dash.sidebars.user')
            @elseif(auth()->user()->role == 'HTEACHER')
                @include('shared.dash.sidebars.admin')
            @elseif(auth()->user()->role == 'ROOT')
                @include('shared.dash.sidebars.root')
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>