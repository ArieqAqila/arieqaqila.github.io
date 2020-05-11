<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Dashboard - SB Admin</title>

        <!-- Custom CSS -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <!-- Animation CSS -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
        <!-- DataTables Addon -->
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <!-- Font Awesome Addon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <!-- SweetAlert Addon -->
        <script type="text/javascript" src="{{ asset('swal/sweetalert2.all.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('swal/sweetalert2.min.css') }}">

        <!-- CKeditor Addon -->
        <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    </head>
    <style type="text/css">
        #color{
            color: black;
            font-size: 14px;
        }
        #color:hover{
            background-color: #AAF5AD;
        }
    </style>
    <body class="sb-nav-fixed" style="background-color: #EFEFEF;">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-warning">
            <a class="navbar-brand" href="#">Admin Page</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>
                <!-- Navbar Search-->
            <span class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <ul class="navbar-nav ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/logout/admin')}}">Logout</a>
                        </div>
                    </li>
                </ul>
            </span>
            <!-- Navbar-->
            
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" style="background-color: white;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link color" id="color" href="#"
                                ><div class="sb-nav-link-icon" id="color"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" id="color" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon" id="color"><i class="fas fa-columns"></i></div>
                                Data Views
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" id="color" href="{{url('admin/viewPengaduan')}}">
                                        Data Complaint
                                    </a>
                                    <a class="nav-link" id="color" href="{{url('admin/viewTanggapan')}}">Data Response</a>
                                    <a class="nav-link" id="color" href="{{url('admin/viewMasyarakat')}}">Data Public Identity</a>
                                    <a class="nav-link" id="color" href="{{url('admin/viewPetugas')}}">Data Officer</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" id="color" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon" id="color"><i class="fas fa-book-open"></i></div>
                                Reporting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" id="color" href="#">Complaint Report</a>
                                    <a class="nav-link" id="color" href="#">Response Report</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        @yield('nama')
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('konten')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; FataChan Admin Site 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>

        <script src="{{ asset('js/customScript.js') }}"></script>
    </body>
</html>