<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Registration :: w3layouts</title>
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
    <link rel="stylesheet" href="{{url('/')}}/public/css/ui_back/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{url('/')}}/public/css/ui_back/style.css" rel='stylesheet' type='text/css' />
    <link href="{{url('/')}}/public/css/ui_back/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{url('/')}}/public/css/ui_back/font.css" type="text/css" />
    <link href="{{url('/')}}/public/css/ui_back/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{url('/')}}/public/js/ui_back/jquery2.0.3.min.js"></script>
</head>
<style>
.rgt-l-sl {
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 20px;
    border-top: 1px solid #b982b2;
}

.rgt-l-sl p {
    margin-bottom: 10px;
}

.rgt-l-sl ul {
    list-style: none;
    padding: 0;
    display: table;
    width: auto;
    margin-left: auto;
    margin-right: auto;
}

.rgt-l-sl li {
    float: left;
}

.rgt-l-sl li a {
    display: block;
    width: 50px;
    height: 50px;
    text-align: center;
    font-size: 1.5em;
    color: #fff;
    padding-top: 3px;
    opacity: 0.8;
    filter: alpha(opacity=0.8);
}

.rgt-l-sl li a.fb {
    background: #3b5998;
}

.rgt-l-sl li a.gg {
    background: #dd4b39;
}

.rgt-l-sl li a.tw {
    background: #55acee;
}

.rgt-l-sl li a:hover {
    padding-top: 10px;
    -webkit-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
}
.w3layouts-main span.error{
    display: block;
    width: 100%;
}
</style>
<body>
    <div class="reg-w3">
        <div class="w3layouts-main">
            <h2>Register Now</h2> {!!Form::open([ 'route' => 'ui.user.post_register', 'method' => 'POST' ])!!}
            <input type="text" class="ggg" name="username" placeholder="USERNAME" value="{{old('username')}}" required="">
            @if($errors->count() > 0) <span class="error">{{$errors->first('username')}} </span>@endif

            <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="" value="{{old('email')}}">
            @if($errors->count() > 0) <span class="error">{{$errors->first('email')}} </span>@endif
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            @if($errors->count() > 0) <span class="error">{{$errors->first('password')}} </span>@endif
            <input type="password" class="ggg" name="confirmpassword" placeholder="CONFIRM PASSWORD" required="">
            @if($errors->count() > 0) <span class="error">{{$errors->first('confirmpassword')}} </span>@endif
            <h4><input type="checkbox" name="term" />I agree to the Terms of Service and Privacy Policy</h4>
            @if($errors->count() > 0) <span class="error">{{$errors->first('term')}} </span>@endif

            <div class="clearfix"></div>
            <input type="submit" value="submit" name="register"> {!!Form::close()!!}
            <div class="rgt-l-sl">
                <p>Login with social:</p>
                <ul>
                    <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="gg" href="#"><i class="fa fa-google"></i></a></li>
                    <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <p>Already Registered.<a href="{{ route('ui.user.login') }}">Login</a></p>
        </div>
    </div>
    <script src="{{url('/')}}/public/js/ui_back/bootstrap.js"></script>
    <script src="{{url('/')}}/public/js/ui_back/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{url('/')}}/public/js/ui_back/scripts.js"></script>
    <script src="{{url('/')}}/public/js/ui_back/jquery.slimscroll.js"></script>
    <script src="{{url('/')}}/public/js/ui_back/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{url('/')}}/js/ui_back/jquery.scrollTo.js"></script>
</body>


</html>
