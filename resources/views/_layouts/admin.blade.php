<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url ('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url ('assets/dashboard/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <x-sidebar />

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <x-topbar />

                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>

            <x-footer />

        </div>

        <x-logoutModal />

        <x-scroll />

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url ('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url ('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url ('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url ('assets/dashboard/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ url ('assets/dashboard/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url ('assets/dashboard/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ url ('assets/dashboard/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
