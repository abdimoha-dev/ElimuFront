@if(auth()->user()->confirmation->email_token && auth()->user()->confirmation->phone_token)
    <li class="treeview {{ (request()->is('user/application')) ? 'active': '' }}">
        <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Confirm your Email</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
                <li class="{{ (request()->is('')) ? 'active': '' }}">
                    <a href="#!">
                        <i class="fa fa-circle-o"></i>Resend Confirmation link
                    </a>
                </li>

        </ul>
    </li>
    @else
<li class="treeview {{ (request()->is('user/application')) ? 'active': '' }}">
    <a href="#">
        <i class="fa fa-pencil-square-o"></i>
        <span>My Application</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @if(!auth()->user()->application)
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('user/application/complete') }}">
                <i class="fa fa-circle-o"></i>Personal & Professional Details
            </a>
        </li>
            @else
            <li class="{{ (request()->is('')) ? 'active': '' }}">
                <a href="{{ url('user/application/details') }}">
                    <i class="fa fa-circle-o"></i> My Profile
                </a>
            </li>
            @endif

    </ul>
</li>
<li class="treeview {{ (request()->is('user/application')) ? 'active': '' }}">
    <a href="#">
        <i class="fa fa-pencil-square-o"></i>
        <span>Vacancies</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @if(auth()->user()->application)
            <li class="{{ (request()->is('')) ? 'active': '' }}">
                <a href="{{url('user/vacancies/schoolvacancy')}}">
                    <i class="fa fa-circle-o"></i> My Matching Vacancies
                </a>
            </li>
  @else


        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{url('user/vacancies/schools')}}">
                <i class="fa fa-circle-o"></i> All Available Vacancies
            </a>
        </li>

        <li>
            <a href="{{ url('user/vacancies/countydropdown')}}">
                <i class="treeview"></i> <span>My County Schools</span>

            </a>
        </li>
            @endif
    </ul>
</li>
<li class="treeview {{ (request()->is('user/application')) ? 'active': '' }}">
    <a href="#">
        <i class="fa fa-pencil-square-o"></i>
        <span>News And Blog</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{url('user/news/articles')}}">
                <i class="fa fa-circle-o"></i> News
            </a>
        </li>
    </ul>
</li>
@endif





