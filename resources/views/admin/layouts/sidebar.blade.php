<!-- main sidebar start -->
<div class="main-sidebar flush-menu">
    <div class="main-menu">
        <ul class="sidebar-menu scrollable">
            <li class="sidebar-item">
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-grid-2"></i></span> <span class="sidebar-txt">Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Hotels</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.hotel-room') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-group"></i></span> <span class="sidebar-txt">Room
                            </span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.addhotel') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i>
                    </span> <span class="sidebar-txt">Add Hotels</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.hotel-city') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i></span> <span class="sidebar-txt">city
                            </span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.hotel-city') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i></span> <span class="sidebar-txt">city
                            </span></a>
                    </li>

                </ul>
            </li>

            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Customers</a>
                <ul class="sidebar-link-group">

                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.customer-list') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span> <span class="sidebar-txt">List Customers
                            </span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Booking</a>
                <ul class="sidebar-link-group">

                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.today-booking') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-location-dot"></i></span> <span class="sidebar-txt">Today's
                                Booking</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.all-booking') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span><span class="sidebar-txt">All Boooking
                            </span></a>
                    </li>                   
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Offers</a>
                <ul class="sidebar-link-group">                   
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('admin.discount') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span><span class="sidebar-txt">Offers
                            </span></a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="{{ route('admin.offeroffers') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span><span class="sidebar-txt">Offers List
                            </span></a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="{{ route('admin.offeroffers') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i>
                        </span><span class="sidebar-txt">Add Coupons 
                            </span></a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="{{ route('admin.offeroffers') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i>
                        </span><span class="sidebar-txt">Coupons List
                            </span></a>
                        </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Contact-Us </a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.list-blogs')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">Contact Us</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.contactUs-list')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span> <span class="sidebar-txt">Contact-Us List
                            </span></a>
                    </li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Website Settings</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.add-blogs')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">Add Blogs</span>
                            </a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.list-blogs')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">Blogs List </span></a>
                    </li>
                    
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.policies')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">Privacy Policies</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.policies')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">Terms and Conditions</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.edit-aboutus')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">About Us</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('admin.discount')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open">

                        </i></span> <span class="sidebar-txt">Coupons</span></a>
                    </li>
                </ul>
            </li>
            <!-- <li class="help-center">
                <h3>Help Center</h3>
                <p>We're an award-winning, forward thinking</p>
                <a href="#" class="btn btn-sm btn-light">Go to Help Center</a>
            </li> -->
        </ul>
    </div>
</div>
<!-- main sidebar end -->