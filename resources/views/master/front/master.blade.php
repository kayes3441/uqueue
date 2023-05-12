<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}front/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('/')}}front/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        U-Queue:Smart Queue management system
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
    @yield('my-css')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('/')}}front/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{asset('/')}}front/assets/css/material-kit.mind1f1.css?v=2.2.0" rel="stylesheet" />
{{--    <link href="{{asset('/')}}front/assets/demo/demo.css" rel="stylesheet" />--}}
    <link href="{{asset('/')}}front/assets/demo/vertical-nav.css" rel="stylesheet" />
</head>


<body class="index-page sidebar-collapse">
<!-- Extra details for Live View on GitHub Pages -->
@yield('body')
<footer class="footer" data-background-color="black">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{route('home')}}">
                        U-Queue
                    </a>
                </li>
                <li>
                    <a href="#">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">u-queue team</a> for a better service.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}front/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}front/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}front/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}front/assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
{{--<script src="{{asset('/')}}front/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>--}}
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('/')}}front/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="{{asset('/')}}front/buttons.github.io/buttons.js"></script>
<!--	Plugin for Sharrre btn -->
<script src="{{asset('/')}}front/assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('/')}}front/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('/')}}front/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('/')}}front/assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
<!--	Plugin for Small Gallery in Product Page -->
<script src="{{asset('/')}}front/assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
<!-- Plugins for presentation and navigation  -->
<script src="{{asset('/')}}front/assets/demo/modernizr.js" type="text/javascript"></script>
<script src="{{asset('/')}}front/assets/demo/vertical-nav.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="{{asset('/')}}front/buttons.github.io/buttons.js"></script>
<!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
<script src="{{asset('/')}}front/assets/demo/demo.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/')}}front/assets/js/material-kit.mind1f1.js?v=2.2.0" type="text/javascript"></script>
@yield('my-js')
<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();
    });
</script>
</body>
</html>
