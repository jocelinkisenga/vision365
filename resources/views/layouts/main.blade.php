<!DOCTYPE html>

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>vision billion 365</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="vision 365 developpé par jocelin kisenga">
    <meta name="author" content="jocelin kisenga">
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- theme meta -->
    <meta name="theme-name" content="reader" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset("plugins/bootstrap/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/themify-icons/themify-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/slick/slick.css") }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset("css/style.css")}}" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                <a class="navbar-brand order-1" href="/">
                    <img class="img-fluid slider-sm logo" src="{{  asset("vision.jpg")}}"
                        alt="vision 365" class="rounded-circle">
                </a>
                <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/" >
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route("coupons.index") }}" >
                                coupons
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("live") }}">Match en direct <i class="ti-location-arrow text-danger"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">A propos</a>
                        </li>
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link btn btn-primary text-white" href="{{ route("dashboard") }}" >Dashboard
                            </a>
                        </li>
                        @endauth



                    </ul>
                </div>

                <div class="order-2 order-lg-3 d-flex align-items-center">


                    <!-- search -->
                    <form class="search-bar">
                        <input id="search-query" name="s" type="search" placeholder="faites une recherche">
                    </form>

                    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                        data-target="#navigation">
                        <i class="ti-menu"></i>
                    </button>
                </div>

            </nav>
        </div>
    </header>

@yield("content")



    <footer class="footer">
        <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
                stroke-width="2" />
        </svg>

        <div class="instafeed text-center mb-5">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-left mb-4">
                    <ul class="list-inline footer-list mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-conditions.html">Terms Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-center mb-4">
                    <a href="index.html"><img class="img-fluid" width="100px" src="vision.jpg"
                            alt="Reader | Hugo Personal Blog Template"></a>
                </div>
                <div class="col-md-5 text-md-right text-center mb-4">
                    <ul class="list-inline footer-list mb-0">

                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                    </ul>
                </div>
                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </footer>


    <!-- JS Plugins -->
    <script src="{{ asset("plugins/jQuery/jquery.min.js")}}"></script>

    <script src="{{ asset("plugins/bootstrap/bootstrap.min.js")}}"></script>

    <script src="{{ asset("plugins/slick/slick.min.js")}}"></script>

    <script src="{{ asset("plugins/instafeed/instafeed.min.js")}}"></script>


    <!-- Main Script -->
    <script src="{{ asset("js/script.js")}}"></script>
</body>

</html>
