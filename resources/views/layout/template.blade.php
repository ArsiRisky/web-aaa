<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cv aaa | @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="{{asset('template')}}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="{{asset('template')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    @include('sweet::alert')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-5">
                    <img src="{{asset('foto/LOGO.png')}}" width="35px">
                </div>
                <div class="sidebar-brand-text mx-3">CV AAA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item -About Us -->
            <li class="nav-item {{ request()->is('about') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/about">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>About Us</span>
                </a>
            </li>

            <!-- Nav Item - Achievement -->
            <li class="nav-item {{ request()->is('achievement') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/achievement">
                    <i class="fas fa-fw fa-trophy"></i>
                    <span>Achievement</span>
                </a>
            </li>

            <!-- Nav Item - Visi Misi -->
            <li class="nav-item {{ request()->is('visimisi') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/visimisi">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Visi Misi</span>
                </a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('produk') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/produk" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Product</span>
                </a>
            </li>

            <!-- Nav Item - Galery -->
            <li class="nav-item {{ request()->is('galeri') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/galeri">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Galeri</span>
                </a>
            </li>

            <!-- Nav Item - Berita -->
            <li class="nav-item {{ request()->is('berita') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/berita">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('template')}}/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-5">
                        {{-- <a href="/" class="btn btn-primary ">Kembali</a> --}}
                    </div>

                    <!-- Content Row -->

                    @yield('content')

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                        </div>

                        <div class="col-lg-6 mb-4">

                        </div>
                    </div>

                </div>
            
            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
          
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda Yakin Ingin keluar..??</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-primary" href="{{asset('template')}}/login.html">Ya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template')}}/js/demo/chart-area-demo.js"></script>
    <script src="{{asset('template')}}/js/demo/chart-pie-demo.js"></script>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
   var konten = document.getElementById("konten");
        CKEDITOR.replace(konten,{
        language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
</script>
</body>

</html>