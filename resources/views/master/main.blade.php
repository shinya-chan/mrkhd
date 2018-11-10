<!DOCTYPE html>

<html lang="en">
<head>

    <!--
        Basic
    -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mr.khd personal site :D</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="personal profile"/>
    <meta name="keywords" content="mohammad, mohammad reza, khoddami, profile, shinya"/>
    <meta name="author" content="shinya_chan"/>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--
        Load Fonts
    -->
    <link href="{{ asset('css/fonts/google.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts/ionicons.css') }}" rel="stylesheet">


    <!--
        Load CSS
    -->
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/ionicons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/gradient.css') }}"/>
    {{--font awsome ...--}}
    <link rel="stylesheet" href="{{ asset('css/fonts/all.css') }}"/>
    <!--
        Template Colors
    -->
    <link rel="stylesheet" href="{{ asset('css/template-colors/green.css') }}"/>
    <!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

    <!--
        Favicons
    -->
    <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico') }}">
    @yield('head')
</head>

<body>
<div class="page">

    <!-- preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- background -->
    <div class="background gradient">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!--
        Container
    -->
    <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

    @yield('header')
    <!--
            Card - Started
        -->
        <div class="card-started" id="home-card">

            <!--
                Profile
            -->
            <div class="profile">

                <!-- profile image -->
                <div class="slide" style="background-image: url({{ asset('img/bg.jpg') }});"></div>

                <!-- profile photo -->
                <div class="image">
                    <img src="{{ asset('img/profile.png') }}" alt=""/>
                </div>

                <!-- profile titles -->
                <div class="title">{{ $info->name }}</div>
                <div class="subtitle">{{ $info->job }}</div>

                <!-- profile socials -->
                <div class="social">
                    <a target="_blank"
                       href="https://t.me/{{ $info->telegram ? $info->telegram : "Shinya_Chan" }}"><span
                                class="fab fa-telegram"></span></a>
                    <a target="_blank"
                       href="https://twitter.com/{{ $info->twitter ? $info->twitter : "SamaShinya" }}"><span
                                class="fab fa-twitter"></span></a>
                    <a target="_blank"
                       href="https://github.com/{{ $info->github ? $info->github : "alastor81" }}"><span
                                class="fab fa-github"></span></a>
                    <a target="_blank"
                       href="https://www.instagram.com/{{ $info->instagram ? $info->instagram : "Shinya_.chan" }}"><span
                                class="fab fa-instagram"></span></a>
                    <a target="_blank" href="https://stackoverflow.com/"><span class="fab fa-stack-overflow"></span></a>
                </div>

                <!-- profile buttons -->
                <div class="lnks">
                    <a href="{{ $info->custom_link_address }}" class="lnk">
                        <span class="text">{{ $info->custom_link }}</span>
                        <span class="ion ion-archive"></span>
                    </a>
                    <a href="#" class="lnk discover">
                        <span class="text">Contact Me</span>
                        <span class="arrow"></span>
                    </a>
                </div>

            </div>

        </div>


    @yield('content')
    </div>
</div>
    <!--
    jQuery Scripts
-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
        <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
        <script src="{{ asset('js/masonry-filter.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

        <!--
            Main Scripts
        -->
        <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>--*