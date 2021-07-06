<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบฐานข้อมูลปริญญานิพนธ์ </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/slick.css" rel="stylesheet" />

    <link href="css/main.css" rel="stylesheet" />
    <!-- Styles -->
    <style>
        .navbar {
            padding: 25px 0 0 0 !important;
        }
    </style>
</head>
    <header id="home">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if (Route::has('login'))
                    <div class="navbar-nav ml-auto">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </nav>
        </div>
        <!-- HERO SECTION -->
        <div class="container-fluid hero">
            <img src="images/hero.svg" alt="">
            <div class="container">
                <!-- Hero Title -->
                <h1>The Spirit of<br>Digital Agency.</h1>
                <!-- Hero Title Info -->
                <p>Vestibulum ac diam sit amet quam vehicula elementum<br> amet est on dui. Nulla porttitor accumsan tincidunt.</p>
                <div class="hero-btns">
                    <!-- Hero Btn First -->
                    <a data-scroll href="#about-us">More About us</a>
                    <!-- Hero Btn Second -->
                    <a data-scroll href="#contact-us">Get in Touch.</a>
                </div>
            </div>
        </div>
    </header>
</html>