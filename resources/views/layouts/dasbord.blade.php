<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/vendors/fontawesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/vendors/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/vendors/icofont.css') }}">

    @yield('exta_css')

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/vendors/prism.css') }}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/vendors/chartist.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/dasbord/css/admin.css') }}">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        @include('include.header')
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @include('include.sidebar')
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                @yield('content')
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>

    </div>

    <!-- latest jquery-->
    <script src="{{ asset('asset/dasbord/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('asset/dasbord/js/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('asset/dasbord/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('asset/dasbord/js/icons/feather-icon/feather-icon.js') }}"></script>
    @yield('exta_js')
    <!-- Sidebar jquery-->
    <script src="{{ asset('asset/dasbord/js/sidebar-menu.js') }}"></script>
        
    <!--chartist js-->
    <script src="{{ asset('asset/dasbord/js/chart/chartist/chartist.js') }}"></script>

    <!--chartjs js-->
    <script src="{{ asset('asset/dasbord/js/chart/chartjs/chart.min.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('asset/dasbord/js/lazysizes.min.js') }}"></script>

    <!--copycode js-->
    <script src="{{ asset('asset/dasbord/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('asset/dasbord/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('asset/dasbord/js/custom-card/custom-card.js') }}"></script>

    <!--counter js-->
    <script src="{{ asset('asset/dasbord/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/dasbord/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('asset/dasbord/js/counter/counter-custom.js') }}"></script>

    <!--peity chart js-->
    <script src="{{ asset('asset/dasbord/js/chart/peity-chart/peity.jquery.js') }}"></script>

    <!--sparkline chart js-->
    <script src="{{ asset('asset/dasbord/js/chart/sparkline/sparkline.js') }}"></script>

    <!--Customizer admin-->
    <script src="{{ asset('asset/dasbord/js/admin-customizer.js') }}"></script>

    <!--dashboard custom js-->
    <script src="{{ asset('asset/dasbord/js/dashboard/default.js') }}"></script>

    <!--right sidebar js-->
    <script src="{{ asset('asset/dasbord/js/chat-menu.js') }}"></script>

    <!--height equal js-->
    <script src="{{ asset('asset/dasbord/js/height-equal.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('asset/dasbord/js/lazysizes.min.js') }}"></script>

    <!--script admin-->
    <script src="{{ asset('asset/dasbord/js/admin-script.js') }}"></script>

</body>

</html>