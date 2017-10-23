<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Unitedmega Shop') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- All Theme Styles including Bootstrap, FontAwesome, etc. compiled from styles.scss-->
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" media="screen">

    <!--Modernizr / Detectizr-->
    <script src="{{ asset('/js/vendor/modernizr.custom.js') }}"></script>
    <script src="{{ asset('/js/vendor/detectizr.min.js') }}"></script>


    <link href="{{ asset('/css/dcverticalmegamenu.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type='text/javascript' src="{{ asset('/js/jquery.hoverIntent.minified.js') }}"></script>
    <script type='text/javascript' src="{{ asset('/js/jquery.dcverticalmegamenu.1.3.js') }}"></script>

    <!--Modernizr / Detectizr-->
    <script type="text/javascript">

        $(document).ready(function($){

            $('#mega-1').dcVerticalMegaMenu({
                rowItems: '3',
                speed: 'fast',
                effect: 'show',
                direction: 'right'
            });
            $('#mega-2').dcVerticalMegaMenu({
                rowItems: '3',
                speed: 'slow',
                effect: 'fade',
                direction: 'left'
            });
            $('#mega-3').dcVerticalMegaMenu({
                rowItems: '4',
                speed: 'slow',
                effect: 'slide',
                direction: 'right'
            });
            $('#mega-4').dcVerticalMegaMenu({
                rowItems: '3',
                speed: 'fast',
                effect: 'slide',
                direction: 'left'
            });

        });
    </script>


    <!-- + - в поле количества товара -->
    <script type="text/javascript">

        var numCount = document.getElementById('num_count');
        var plusBtn = document.getElementById('button_plus');
        var minusBtn = document.getElementById('button_minus');
        plusBtn.onclick = function() {
            var qty = parseInt(numCount.value);
            qty = qty + 1;
            numCount.value = qty;
        }
        minusBtn.onclick = function() {
            var qty = parseInt(numCount.value);
            qty = qty - 1;
            numCount.value = qty;
        }
    </script>

</head>
<body class="is-preloader preloading">

<!-- Preloader -->
<!--
    Data API:
    data-spinner - Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
    data-screenbg - Screen background color. Hex, RGB or RGBA colors
 -->
<div id="preloader" data-spinner="spinner1" data-screenbg="#fff"></div>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Social Bar -->
    <!-- Change modifier class to ".bar-fixed-left" to position social bar on the left side of the page. -->
    <div class="social-bar bar-fixed-right">
        <a href="#" class="sb-skype">
            <i class="fa fa-skype"></i>
        </a>
        <a href="#" class="sb-facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="sb-twitter">
            <i class="fa fa-twitter"></i>
        </a>
    </div><!-- .social-bar -->

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content text-center">
                <h4>Увійти</h4>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="form-group">

                        <button type="submit" class="btn login-btn btn-default waves-effect waves-light">Login into your account<i class="icon-head"></i></button>
                    </div>
                    <div class="text-left">
                        <span class="text-sm text-semibold"><a href="#">Зареєструватись</a></span>
                    </div>
                </form><!-- <form> -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal.fade -->
<!--header start-->
@yield('header')
        <!--header end-->

<!--container start-->
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <!-- Scroll To Top Button -->
    <a href="#" class="scroll-to-top-btn">
        <i class="icon-arrow-up"></i>
    </a><!-- .scroll-to-top-btn -->
<!--container end-->

<!--footer start-->
@yield('footer')

</div><!-- .page-wrapper -->

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="{{ asset('/js/vendor/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/js/vendor/preloader.min.js') }}"></script>
<script src="{{ asset('/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/vendor/waves.min.js') }}"></script>
<script src="{{ asset('/js/vendor/placeholder.js') }}"></script>
<script src="{{ asset('/js/vendor/smoothscroll.js') }}"></script>
<script src="{{ asset('/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('/js/vendor/velocity.min.js') }}"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>


<script src="{{ asset('/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/vendor/icheck.min.js') }}"></script>
<script src="{{ asset('/scripts.js') }}"></script>


<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="{{ asset('/js/vendor/jquery.easing.min.js') }}"></script>
<script src="{{ asset('/masterslider/masterslider.min.js') }}"></script>

<script src="{{ asset('/js/vendor/owl.carousel.min.js') }}"></script>


</body>
</html>
