
<li class="treeview">
    <a href="#">
        <i class="fa fa-share"></i> <span>More Details</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ (request()->is('#')) ? 'active': '' }}">
            <a href="{{ url('') }}">
                <i class="fa fa-circle-o"></i> Application Details
            </a>
        </li>
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/details/complete') }}">
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