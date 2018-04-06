<li class="treeview">
    <a href="#">
        <i class="fa fa-laptop"></i>
        <span>More Details</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>

    <ul class="treeview-menu">

        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/details/complete') }}">
                <i class="fa fa-circle-o"></i> Add My Details
            </a>
        </li>

        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{url('admin/details/getform')}}">
                <i class="fa fa-circle-o"></i> Add School Details
            </a>
        </li>


        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/details/vacancy') }}">
                <i class="fa fa-circle-o"></i> Add Vacancy Details
            </a>
        </li>


    </ul>



</li>

<li>
    <a href="../calendar.html">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
        <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
    </a>
</li>
<li>
    <a href="../mailbox/mailbox.html">
        <i class="fa fa-envelope"></i> <span>Mailbox</span>
        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
    </a>
</li>