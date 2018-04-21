<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="" class="logo">
                <span><b>TEACH</b>connect</span>

                <img width="70" src="{{ asset('dash/img/teacher-pointing-a-board-with-a-stick(1).png') }}" class="logo-mini" style="display: initial" alt="User Image">

            </a>
        </div>

        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">HOME</a></li>
                <li><a href="#course-sec">ABOUT US</a></li>
                <li><a href="#contact-sec">CONTACT</a></li>
                @if(auth()->check() == FALSE)
                    <li><a href="{{ route('login') }}" class="btn btn-success" style="margin: 1px;">SIGN IN</a></li>
                    <li><a href="{{ route('register') }}" class="btn btn-success" style="margin: 1px;">SIGN UP</a></li>
                @elseif(auth()->check())
                    <li><a href="{{ url('home') }}" class="btn btn-success" style="margin: 1px;">DASHBOARD</a></li>
                    <li><a href="#!" class="btn btn-success sign-out" style="margin: 1px;">SIGN OUT</a>
                    </li>
                @endif

            </ul>
        </div>

    </div>
</div>