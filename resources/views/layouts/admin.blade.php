<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../img/apple-icon.png">
    <link rel="icon" href="../img/favicon.png">
    <title>
        Material Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/all.css">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- iframe removal -->
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        @include('admin.partials.sidebar')
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        @include('admin.partials.top-navbar')
        <!-- End Navbar -->
        @yield('content')
        @include('admin.partials.footer')
    </div>
</div>
</body>
<!--   Core JS Files   -->
{{--<script src="../js/core/jquery.min.js"></script>--}}
{{--<script src="../js/core/popper.min.js"></script>--}}
{{--<script src="../js/bootstrap-material-design.js"></script>--}}
{{--<script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>--}}
{{--<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->--}}
{{--<script src="../js/plugins/chartist.min.js"></script>--}}
{{--<!-- Library for adding dinamically elements -->--}}
{{--<script src="../js/plugins/arrive.min.js" type="text/javascript"></script>--}}
{{--<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->--}}
{{--<script src="../js/plugins/bootstrap-notify.js"></script>--}}
{{--<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->--}}
{{--<script src="../js/material-dashboard.js?v=2.0.0"></script>--}}
{{--<!-- demo init -->--}}
{{--<script src="../js/plugins/demo.js"></script>--}}
<script src="../js/app.js" type="text/javascript">
    $(document).ready(function () {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>
</html>
