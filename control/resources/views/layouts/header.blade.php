<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>School</b>App</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{ config('app.name', 'SettlementManagement') }}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset("/uploads/".Sentinel::getUser()->profilePix) }}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Sentinel::getUser()->first_name . ' '. Sentinel::getUser()->last_name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset("/uploads/".Sentinel::getUser()->profilePix) }}" class="img-circle" alt="User Image">

                            <p>
                                Hello {{ Sentinel::getUser()->first_name . ' '. Sentinel::getUser()->last_name }}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <form method="post" action="{{ url('/userLogout') }}" id="logout-form">
                                    {{csrf_field()}}
                                    <a href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
