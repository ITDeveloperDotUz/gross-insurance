<!DOCTYPE html>
<html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}" type="text/css"/>
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/morris.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('admin/css/grid.css') }}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('admin/css/monthly.css') }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('admin/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('admin/js/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/js/morris.js') }}"></script>
</head>
<body>
<section id="container">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebarMenu')
    @yield('content')
</section>
<script src="{{ asset('admin/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/jquery.scrollTo.js') }}"></script>
<!-- morris JavaScript -->
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

</script>
<!-- calendar -->
<script type="text/javascript" src="{{ asset('admin/js/monthly.js') }}"></script>
<script type="text/javascript">
    $(window).load( function() {

        switch(window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }
    });
</script>
<!-- //calendar -->
</body>
</html>
