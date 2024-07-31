<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('_layout._admin._meta')
    <title>{{ $title }}</title>
    @yield('custom_css')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/dashboard_assets/assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="/dashboard_assets/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link href="/dashboard_assets/assets/extra-libs/c3/c3.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/dashboard_assets/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="relative" data-boxed-layout="full">
        <div class="app-container" data-navbarbg="skin1"></div>
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin1">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="/admin">
                            @include('_layout._logo')
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                {{-- <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin1">
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav w-100 align-items-center">
                        <li class="nav-item ml-0 ml-md-3 ml-lg-0">
                            <a class="nav-link search-bar" href="javascript:void(0)">
                                <form class="my-2 my-lg-0">
                                    <div class="customize-input customize-input-v4">
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search" />
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="user-profile text-center pt-2">
                <div class="d-flex align-items-center justify-content-center pb-3">
                    <div class="dropdown sub-dropdown">
                        {{-- <button class="btn profile-pic rounded-circle position-relative" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button> --}}
                        <img src="{{ Auth::user()->picture }}" class="profile-pic rounded-circle position-relative"
                            alt="{{ Auth::user()->name }}">
                    </div>
                </div>
                <div class="profile-section">
                    <p class="font-weight-light mb-0 font-18">
                        {{ Auth::user()->name }}
                    </p>
                    <span class="op-7 font-14">admin</span>
                    <div class="row border-top border-bottom mt-3 no-gutters">
                        <div class="col-6 border-right">
                            <a class="p-3 d-block menubar-height" id="bottom-sidebar" href="/admin/settings"
                                role="button">
                                <span><i data-feather="settings" class="svg-icon op-7"></i></span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="p-3 d-block menubar-height" href="/logout" role="button" data-display="static"
                                aria-haspopup="true" aria-expanded="false">
                                <span><i data-feather="log-out" class="svg-icon op-7"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <span class="hide-menu">Pages</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link active" href="/admin" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/" aria-expanded="false">
                                <i data-feather="layout" class="feather-icon"></i>
                                <span class="hide-menu">Ke Landing Page</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Berita</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/news/create" aria-expanded="false">
                                <i data-feather="align-center" class="feather-icon"></i>
                                <span class="hide-menu">Buat Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/news" aria-expanded="false">
                                <i data-feather="archive" class="feather-icon"></i>
                                <span class="hide-menu">Daftar Berita</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Pengaduan</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/pengaduan" aria-expanded="false">
                                <i data-feather="archive" class="feather-icon"></i>
                                <span class="hide-menu">Daftar Aduan</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Pengaturan Situs</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/desa/info" aria-expanded="false">
                                <i data-feather="map" class="feather-icon"></i>
                                <span class="hide-menu">Informasi Desa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/desa/sekre" aria-expanded="false">
                                <i data-feather="users" class="feather-icon"></i>
                                <span class="hide-menu">Sekretariat Desa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/desa/visimisi" aria-expanded="false">
                                <i data-feather="send" class="feather-icon"></i>
                                <span class="hide-menu">Visi Misi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/desa/contact" aria-expanded="false">
                                <i data-feather="phone" class="feather-icon"></i>
                                <span class="hide-menu">Kontak</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/admin/desa/services" aria-expanded="false">
                                <i data-feather="command" class="feather-icon"></i>
                                <span class="hide-menu">Pelayanan</span>
                            </a>
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
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                            Halaman {{ $title }}
                        </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">
                                        {{ $description }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                &copy; 2022 <a href="https://itenas.ac.id/">{{ env('APP_AUTHOR') }}</a>
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
    <script src="/dashboard_assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/dashboard_assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/dashboard_assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="/dashboard_assets/dist/js/app-style-switcher.js"></script>
    <script src="/dashboard_assets/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/dashboard_assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Menu sidebar -->
    <script src="/dashboard_assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dashboard_assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/dashboard_assets/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/dashboard_assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    {{-- <script src="/dashboard_assets/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/dashboard_assets/assets/extra-libs/c3/c3.min.js"></script> --}}
    <!--chartjs -->
    {{-- <script src="/dashboard_assets/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="/dashboard_assets/dist/js/pages/dashboards/dashboard1.js"></script> --}}
    @yield('custom_js')
</body>

</html>