<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rezume Gofur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">




<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')






<script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.easing.1.3.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.waypoints.min.js')}}"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('assets/js/google-map.js')}}"></script>

</body>
</html>
