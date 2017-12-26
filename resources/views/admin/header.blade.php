{{ Html::style(asset('admin/css/my-css.css')) }}
<nav class="navbar navbar-default navbar-static-top" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">{{ trans('admin/master.toggle_navigation') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{ trans('admin/master.admin_area') }}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> 
                        <i class="">{{ Auth::User()->username }} </i> 
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>{{ Auth::User()->username }}</a>
                        </li>
                        <li><a href='{{ action("Admin\UserController@edit", [Auth::User()->id]) }}'><i class="fa fa-gear fa-fw"></i>{{ trans('admin/master.settings') }}</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href='{{ action("Admin\LoginController@getLogoutAdmin") }}'><i class="fa fa-sign-out fa-fw"></i>{{ trans('admin/master.logout') }}</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i>{{ trans('admin/master.dashboard') }}</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>{{ trans('admin/master.category') }}  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">{{ trans('admin/master.list_category') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ trans('admin/master.add_category') }}</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> {{ trans('admin/master.product') }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">{{ trans('admin/master.list_product') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ trans('admin/master.add_product') }}</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>{{ trans('admin/master.user') }} <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href='{{ action("Admin\UserController@create") }}'>{{ trans('admin/master.list_user') }}</a>
                                </li>
                                <li>
                                    <a href='{{ action("Admin\UserController@index") }}'>{{ trans('admin/master.add_user') }}</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
</nav>
