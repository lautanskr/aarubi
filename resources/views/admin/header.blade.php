<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('assets/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('assets/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">Aarubi
                        <span class="brand-tip">CAST</span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>9 New</strong> Messages</span>
                                    <a class="pull-right" href="mailbox.html">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="{{asset('assets/img/users/u1.jpg')}}" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Your proposal interested me.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="{{asset('assets/img/users/u2.jpg')}}" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Becky Brooks<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="{{asset('assets/img/users/u3.jpg')}}" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Frank Cruz<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="{{asset('assets/img/users/u4.jpg')}}" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Rose Pearson<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{asset('assets/img/admin-avatar.png')}}" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{asset('assets/img/admin-avatar.png')}}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Aarubi</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="heading">FEATURES</li>
                    <li>
                        <a class="active" href="{{route('admin_home.index')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="{{route('admin_about.index')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">About</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="{{route('admin.product')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Product</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="{{route('admin_contact.index')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Contact</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="{{route('admin_service.index')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Services</span>
                        </a>
                    </li>
                    <li>

                        <a class="active" href="{{route('admin_review.index')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Review</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="{{route('logout')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Logout</span>

                        <a class="active" href="{{route('admin.client.message')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Client Message</span>

                        </a>
                    </li>
                   
                   

                   
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="lockscreen.html">Lockscreen</a>
                            </li>
                            <li>
                                <a href="forgot_password.html">Forgot password</a>
                            </li>
                            <li>
                                <a href="error_404.html">404 error</a>
                            </li>
                            <li>
                                <a href="error_500.html">500 error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                            <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="javascript:;">Level 2</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="javascript:;">Level 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->