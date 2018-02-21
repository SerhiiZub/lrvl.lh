<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('color/default.css') }}" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>
@section('sidebar')
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="">
            {{--<a class="navbar-brand" href="index.html">--}}
<!--                <h1 style="background-image: url(./img/Stretch.png)">       </h1>-->
                <!--<h1 style="background-image: url(./img/Stretch.png)">Stretch ON</h1>-->
                <!--<img id="logo" src="./img/Stretch.png" alt="logo">-->
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <!--        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Example menu</a></li>
                            <li><a href="#">Example menu</a></li>
                            <li><a href="#">Example menu</a></li>
                          </ul>
                        </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
@show

<div class="main-container" style="margin-top: 90px">
    @yield('content')

</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="wow shake" data-wow-delay="0.4s">
                    <div class="page-scroll marginbot-30">
                        <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
                    </div>
                </div>
                <!--<p>&copy;SquadFREE. All rights reserved.</p>-->
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                    -->
                    <!--<a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Core JavaScript Files -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
{{--<script src="../../assets/js/jquery.min.js"></script>--}}
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{--<script src="../../assets/js/bootstrap.min.js"></script>--}}
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
{{--<script src="../../assets/js/jquery.easing.min.js"></script>--}}
<script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
{{--<script src="../../assets/js/jquery.scrollTo.js"></script>--}}
<script src="{{ asset('js/wow.min.js') }}"></script>
{{--<script src="../../assets/js/wow.min.js"></script>--}}
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/custom.js') }}"></script>
{{--<script src="../../assets/js/custom.js"></script>--}}
{{--<script src="../../assets/contactform/contactform.js"></script>--}}

</body>

</html>