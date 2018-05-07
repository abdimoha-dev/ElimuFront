<li class="treeview">
    <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Add Details</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>

    <ul class="treeview-menu">
            <li class="{{ (request()->is('')) ? 'active': '' }}">
                <a href="{{url('admin/details/complete')}}">
                    <i class="fa fa-circle-o"></i> School Administrator Profile
                </a>
            </li>

            <li class="{{ (request()->is('')) ? 'active': '' }}">
                <a href="{{url('admin/details/getform')}}">
                    <i class="fa fa-circle-o"></i> School Profile
                </a>
            </li>


        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/details/vacancy') }}">
                <i class="fa fa-circle-o"></i> Post Teaching Vacancy
            </a>
        </li>

        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/details/schoolvacancy') }}">
                <i class="fa fa-circle-o"></i> View My School Vacancies
            </a>
        </li>
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/uploads/stories') }}">
                <i class="fa fa-circle-o"></i> Post Story
            </a>
        </li>
        <li class="{{ (request()->is('')) ? 'active': '' }}">
            <a href="{{ url('admin/uploads/articles') }}">
                <i class="fa fa-circle-o"></i> News
            </a>
        </li>
    </ul>


</li>

<li>
    <a href="../mailbox/mailbox.html">
        <i class="fa fa-envelope"></i> <span>Mailbox</span>
        <span class="pull-right-container">
            </span>
    </a>
</li>