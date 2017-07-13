<!DOCTYPE html>
<head>
    <title>@yield('title', 'Home Dashboard') | Trendy Blog - Your world in your hand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('public/css/ui_back/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{url('public/css/ui_back/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{url('public/css/ui_back/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{url('public/css/ui_back/font.css')}}" type="text/css" />
    <link href="{{url('public/css/ui_back/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/css/ui_back/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{url('public/css/ui_back/monthly.css')}}">
    <link rel="stylesheet" href="{{url('public/css/ui_back/custom.css')}}">
    <link rel="stylesheet" href="{{url('public/css/ui_back/common.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{url('public/js/ui_back/jquery2.0.3.min.js')}}"></script>
    <script src="{{url('public/js/ui_back/raphael-min.js')}}"></script>
    <script src="{{url('public/js/ui_back/morris.js')}}"></script>
    <script src="{{url('public/js/nnnnnn/jquery-ui.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('public/js/nnnnnn/jquery-ui.min.css')}}">
    
    @yield('css.top')
    @yield('script.top')
</head>

<body>
    <section id="container">
        @include('ui_back.layouts.header') @include('ui_back.layouts.sidebar')
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
            <!--main content end-->
        </section>
    </section>
    @include('ui_back.layouts.footer')
    @yield('script.bottom')
</body>

</html>
