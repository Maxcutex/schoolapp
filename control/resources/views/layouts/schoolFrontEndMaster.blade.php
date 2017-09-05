<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('/schoolFrontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font-awesome -->
    <link href="{{asset('/schoolFrontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Flaticon -->
    <link href="{{asset('/schoolFrontend/assets/flaticon/flaticon.css')}}" rel="stylesheet">

    <!-- lightcase -->
    <link href="{{asset('/schoolFrontend/assets/css/lightcase.css')}}" rel="stylesheet">

    <!-- Swiper -->
    <link href="{{asset('/schoolFrontend/assets/css/swiper.min.css')}}" rel="stylesheet">

    <!-- quick-view -->
    <link href="{{asset('/schoolFrontend/assets/css/quick-view.css')}}" rel="stylesheet">

    <!-- nstSlider -->
    <link href="{{asset('/schoolFrontend/assets/css/jquery.nstSlider.css')}}" rel="stylesheet">

    <!-- flexslider -->
    <link href="{{asset('/schoolFrontend/assets/css/flexslider.css')}}" rel="stylesheet">

    <!-- Style -->
    <link href="{{asset('/schoolFrontend/assets/css/style.css')}}" rel="stylesheet">

    <!-- Responsive -->
    <link href="{{asset('/schoolFrontend/assets/css/responsive.css')}}" rel="stylesheet">


</head>


<body id="scroll-top">
<!-- Preloader start here -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Preloader end here -->
<header>

    @include('includes.schoolfrontendTopbar')
    @include('includes.schoolfrontendMenubar')


</header>
<!-- header End here -->

@yield('main_container')

<!-- Footer Start here -->
<footer>
    @include('includes.schoolfrontendFooter')

</footer>
<a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Footer End here -->


<!-- jquery -->
<script src="{{asset('/schoolFrontend/assets/js/jquery-1.12.4.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('/schoolFrontend/assets/js/bootstrap.min.js')}}"></script>

<!-- Isotope -->
<script src="{{asset('/schoolFrontend/assets/js/isotope.min.js')}}"></script>

<!-- lightcase -->
<script src="{{asset('/schoolFrontend/assets/js/lightcase.js')}}"></script>

<!-- counterup -->
<script src="{{asset('/schoolFrontend/assets/js/waypoints/2.0.3/waypoints.min.js')}}"></script>
<script src="{{asset('/schoolFrontend/assets/js/jquery.counterup.min.js')}}"></script>

<!-- Swiper -->
<script src="{{asset('/schoolFrontend/assets/js/swiper.jquery.min.js')}}"></script>

<!--progress-->
<script src="{{asset('/schoolFrontend/assets/js/circle-progress.min.js')}}"></script>

<!--velocity-->
<script src="{{asset('/schoolFrontend/assets/js/velocity.min.jss')}}"></script>

<!--quick-view-->
<script src="{{asset('/schoolFrontend/assets/js/quick-view.js')}}"></script>

<!--nstSlider-->
<script src="{{asset('/schoolFrontend/assets/js/jquery.nstSlider.js')}}"></script>

<!--flexslider-->
<script src="{{asset('/schoolFrontend/assets/js/flexslider-min.js')}}"></script>

<!--easing-->
<script src="{{asset('/schoolFrontend/assets/js/jquery.easing.min.js')}}"></script>

<!-- custom -->
<script src="{{asset('/schoolFrontend/assets/js/custom.js')}}"></script>

@yield('scripts')

</body>

</html>