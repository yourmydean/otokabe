<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="otokabe">
<meta name="author" content="otokabe">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
<title>OTOKABE - BENGKEL PINTAR</title>
<!-- Bootstrap Core CSS -->
<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- You can change the theme colors from here -->
<link href="css/colors/blue.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- DATATABLE -->
<link href="../assets/plugins/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
@yield('style')
</head>

<body class="fix-header card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <!-- Logo icon -->
                            <b>

                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span>
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->    
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Logo -->
                            <!-- ============================================================== -->
                            <div class="navbar-collapse">
                                <!-- ============================================================== -->
                                <!-- toggle and nav items -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav mr-auto mt-md-0">
                                    <!-- Fitur Search -->
                                </ul>
                                <!-- ============================================================== -->
                                <!-- User profile and search -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav my-lg-0">

                                    <!-- ============================================================== -->
                                    <!-- Profile -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Hi, Administrator
                                                <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                                <ul class="dropdown-user">
                                                    <li>
                                                        <div class="dw-user-box">
                                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                                            <div class="u-text">
                                                                <h4>Administrator</h4>
                                                                <p class="text-muted">administrator@otokabe.id</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                                            </div>
                                                        </li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </nav>
                            </header>
                            <!-- ============================================================== -->
                            <!-- End Topbar header -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Left Sidebar - style you can find in sidebar.scss  -->
                            <!-- ============================================================== -->
                            <aside class="left-sidebar">
                                <!-- Sidebar scroll-->
                                <div class="scroll-sidebar">
                                    <!-- Sidebar navigation-->
                                    <nav class="sidebar-nav">
                                        <ul id="sidebarnav">
                                            <li class="nav-small-cap">PERSONAL</li>
                                            <li>
                                                <a class="" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>

                                            </li>
                                            <li class="nav-devider"></li>
                                            <li>
                                                <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Master Data</span></a>
                                                <ul aria-expanded="false" class="collapse">
                                                    <li><a href="master_produk.php">Master Produk</a></li>
                                                    <li><a href="master_bengkel.php">Master Bengkel</a></li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </nav>
                                    <!-- End Sidebar navigation -->
                                </div>
                                <!-- End Sidebar scroll-->
                            </aside>
                            <!-- ============================================================== -->
                            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                            <!-- ============================================================== -->

                            @yield('content')

                            <!-- ============================================================== -->
                            <!-- footer -->
                            <!-- ============================================================== -->
                            <footer class="footer">
                                <marquee behavior="otokabe" direction="otokabe">© 2020 OTOKABE</marquee>
                            </footer>
                            <!-- ============================================================== -->
                            <!-- End footer -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Page wrapper  -->
                        <!-- ============================================================== -->
                    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- Data table -->
    <script src="../assets/plugins/datatables/datatables.min.js"></script>

@yield('script')
</body>
</html>
