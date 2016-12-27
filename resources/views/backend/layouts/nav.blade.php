<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i></a>
            </div>
        </div>
       
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview @yield('home')">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a></li>
                        <li class="treeview @yield('members')">
                            <a href="#">
                                <i class="fa fa-pencil-square-o"></i> <span>Members</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{url('members/create')}}"><i class="fa fa-plus-square-o"></i>Add New Member</a></li>
                                    <li><a href="{{url('members')}}"><i class="fa fa-bars"></i>Member List</a></li>
                                </ul>
                        </li>


            <li class="header">Settings</li>
            <li><a href="{{url('changePassword')}}"><i class="fa fa-circle-o text-orange"></i> <span>Change Password</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->