<li class="{{ (request()->is('home')) ? 'active': '' }}">
    <a href="{{ url('home') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>

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
        </li>
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="#!">
                <i class="fa fa-circle-o"></i> Edit Application
            </a>
        </li>
    </ul>
</li>



