<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/assets/images/logo.png">
    <title>Badan Perencanaan Pembangunan Daerah</title>
    <link href="../assets/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="../assets/dist/css/pages/data-table.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Material Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="../assets/assets/images/logo.png">
                            <img class="dark-logo" src="../assets/assets/images/logo.png">
                        </span>
                        <span class="text">
                            <h4 style="color: white;">BAPPEDA</h4>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Notification icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="noti_dropdown"><i class="material-icons">notifications</i></a>
                            <ul id="noti_dropdown" class="mailbox dropdown-content">
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <span class="btn-floating btn-large red"><i class="material-icons">link</i></span>
                                            <span class="mail-contnet">
                                                <h5>Launch Admin</h5>
                                                <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="center-align" href="javascript:void(0);"> <strong>Check all notifications</strong> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="search-box">
                            <a href="javascript: void(0);"><i class="material-icons">search</i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="right">
                        <!-- ============================================================== -->
                        <!-- Profile icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="../assets/assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu">PERSONAL</span></li>
                        <li>
                            <a href="javascript: void(0);" ><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">equalizer</i><span class="hide-menu"> Sidebar Types </span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="sidebar-type-minisidebar.html"><i class="material-icons">photo_size_select_small</i><span class="hide-menu">Minisidebar</span></a></li>
                                    <li><a href="sidebar-type-iconbar.html"><i class="material-icons">picture_in_picture</i><span class="hide-menu">Icon Sidebar</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">library_books</i><span class="hide-menu"> Page Layouts </span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="layout-inner-fixed-left-sidebar.html"><i class="material-icons">format_align_left</i><span class="hide-menu">Inner Fixed Left Sidebar</span></a></li>
                                    <li><a href="layout-inner-fixed-right-sidebar.html"><i class="material-icons">format_align_right</i><span class="hide-menu">Inner Fixed Right Sidebar</span></a></li>
                            </div>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Apps</span></li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">move_to_inbox</i><span class="hide-menu"> Inbox</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="inbox-email.html"><i class="material-icons">email</i><span class="hide-menu">Email</span></a></li>
                                    <li><a href="inbox-email-detail.html"><i class="material-icons">markunread_mailbox</i><span class="hide-menu">Email Detail</span></a></li>
                                    <li><a href="inbox-compose.html"><i class="material-icons">contact_mail</i><span class="hide-menu">Email Compose</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">bookmark_border</i><span class="hide-menu"> Ticket</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="ticket-list.html"><i class="material-icons">collections_bookmark</i><span class="hide-menu">Ticket List</span></a></li>
                                    <li><a href="ticket-detail.html"><i class="material-icons">bookmark</i><span class="hide-menu">Ticket Detail</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->