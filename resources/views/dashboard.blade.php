<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kajuu</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('../plugins/fontawesome-free/css/all.min.css') }}">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('../dist/css/adminlte.min.css') }}">
    </head>
    <!--
    `body` tag options:

      * sidebar-collapse
      * sidebar-mini
    -->

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->

                    <!-- Messages Dropdown Menu -->
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-link cursor-pointer" data-toggle="dropdown">
                            <div class="w-7">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                            </div>
                        </div>

                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <span class="brand-text font-weight-light">Kajuu</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="{{ url('/banners') }}" class="nav-link active">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Banner
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/abouts') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        About
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/products') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Product
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/category') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Kategory
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/payment') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Payment
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/user') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        User
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/footers') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Footer
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Banner</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <x-slot name="header">
                        </x-slot>
                        <div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow-md ">
                            <a href="/banners/create" class=" font-semibold bg-sky-400 p-2 rounded-lg">+Tambah Data
                                Banner</a>

                            <table class="min-w-full border border-gray-300 mt-10 ">
                                <thead class="">
                                    <tr>
                                        <th class="py-2 px-4 border-b">No</th>
                                        <th class="py-2 px-4 border-b">banner_title</th>
                                        <th class="py-2 px-4 border-b">banner_image</th>
                                        <th class="py-2 px-4 border-b">banner_url</th>
                                        <th class="py-2 px-4 border-b">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach ($homePage as $datas)
                                        <tr>
                                            <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                                            <td class="py-2 px-4 border-b">{{ $datas->banner_title }}</td>
                                            <td class="py-2 px-4 border-b">
                                                @if ($datas->banner_image)
                                                    <img style="max-width: 50px; max-height:50px"
                                                        src="{{ url('banner_image') . '/' . $datas->banner_image }}"
                                                        alt="">
                                                @endif
                                            </td>
                                            <td class="py-2 px-4 border-b">{{ $datas->banner_url }}</td>
                                            <td class="py-2 px-4 border-b flex">
                                                <a href="{{ url('/banners/' . $datas->id . '/edit') }}"
                                                    class="text-gray-100 font-semibold bg-yellow-500 p-2 rounded-lg me-5">Edit</a>
                                                <form onsubmit="return confirm('Yakin mau hapus data')"
                                                    action="{{ '/banners/' . $datas->id }}" method="POST"
                                                    class="text-gray-100 inline font-semibold bg-red-500 p-2 rounded-lg">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset('../plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE -->
        <script src="{{ asset('../dist/js/adminlte.js') }}"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="{{ asset('../plugins/chart.js/Chart.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('../dist/js/demo.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('../dist/js/pages/dashboard3.js') }}"></script>
    </body>

    </html>

</x-app-layout>

