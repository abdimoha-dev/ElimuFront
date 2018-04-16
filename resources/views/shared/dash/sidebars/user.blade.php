<li class="treeview {{ (request()->is('user/application')) ? 'active': '' }}">
    <a href="#">
        <i class="fa fa-pencil-square-o"></i>
        <span>My Application</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('user/application/details') }}">
                <i class="fa fa-circle-o"></i> Application Details
            </a>
        </li>
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('user/application/complete') }}">
                <i class="fa fa-circle-o"></i> Complete Application
            </a>

        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{url('user/vacancies/schools')}}">
                <i class="fa fa-circle-o"></i> Show Available Vacancies
            </a>
        </li>
        </li>
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{url('user/vacancies/schoolvacancy')}}">
                <i class="fa fa-circle-o"></i> Show Schools Marching My profile
            </a>
        </li>

    </ul>
</li>



