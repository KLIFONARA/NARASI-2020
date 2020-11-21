<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NARASI 2020 - Submissions</title>

    <meta property="og:title" content="NARASI: The Language of the Soul" />
    <meta property="og:description"
        content="NARASI 2020 merupakan ekshibisi online pertama dari KLIFONARA atau Klub Seni Fotografi Bina Nusantara" />
    <meta property="og:image" content="{{ asset('img/logo/logo-light.png') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/submissions.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class=" container">
            <a href="/">
                <img class="navbar-brand" src="{{ asset('img/logo/logo-dark.png') }}" height="60px" alt />
            </a>

            <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="{{route('theStory')}}">THE STORY</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('submissions')}}">SUBMISSIONS</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('exhibition')}}">EXHIBITION</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('aboutUs')}}">ABOUT US</a>
                    </li>
                    <li>
                        <a class="nav-link" href="">CONTACT</a>
                    </li>
                    <li>
                        <a href="/login">
                            <button type="button" class="btn btn-dark btn-login">LOGIN</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>

</html>