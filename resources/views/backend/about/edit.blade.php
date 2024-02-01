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

      Apply one or more of the following classes to to the body tag
      to get the desired effect

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
                    <div class="user-panel">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                    </div>
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
                                <a href="{{ url('/banners') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Banner
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/abouts') }}" class="nav-link active">
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
                                <h1 class="m-0">Edit About</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow-md ">
                            <a href="/about" class="btn btn-secondary">Kembali</a>
                            <form action="{{ '/abouts/' . $data->id }}" method="POST" enctype="multipart/form-data"
                                class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="title"
                                        class="block text-sm font-medium text-gray-600">title</label>
                                    <input type="text" name="title" id="title"
                                        class="mt-1 p-2 w-full border rounded-md" value="{{ $data->title }}">
                                </div>
                                <div class="mb-4">
                                    <label for="short_title"
                                        class="block text-sm font-medium text-gray-600">short_title</label>
                                    <input type="text" name="short_title" id="short_title"
                                        class="mt-1 p-2 w-full border rounded-md" value="{{ $data->short_title }}">
                                </div>
                                <div class="mb-4">
                                    <label for="short_description"
                                        class="block text-sm font-medium text-gray-600">short_description</label>
                                    <input type="text" name="short_description" id="short_description"
                                        class="mt-1 p-2 w-full border rounded-md"
                                        value="{{ $data->short_description }}">
                                </div>
                                <div class="mb-4">
                                    <label for="long_description"
                                        class="block text-sm font-medium text-gray-600">long_description</label>
                                    <input type="text" name="long_description" id="long_description"
                                        class="mt-1 p-2 w-full border rounded-md"
                                        value="{{ $data->long_description }}">
                                </div>
                                @if ($data->about_image)
                                    <div class="mb-3">
                                        <img style="max-width: 50px; max-height:50px;"
                                            src="{{ url('about_image') . '/' . $data->about_image }}" alt="">
                                    </div>
                                @endif
                                <div class="mb-4">
                                    <label for="about_image"
                                        class="block text-sm font-medium text-gray-600">about_image</label>
                                    <input type="file" name="about_image" id="about_image"
                                        class="mt-1 p-2 w-full border rounded-md" value="{{ $data->about_image }}">
                                </div>
                                <div class="mb-4">
                                    <button type="submit" name=""
                                        class="bg-blue-500 text-white py-2 px-4 rounded-md">Simpan</button>
                                </div>
                            </form>
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
