<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'HARMONICS' }}</title>

    {{-- GOOGLE FONT MONTSERRAT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- App Logo --}}
    <link rel="icon" href="{{ asset('assets/logo.png') }}">

    {{-- BOOTSTRAP SCRIPT TAG --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- BOOTSTRAP ICON CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- SweetJsAlert2 CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: "Montserrat", sans-serif;
            padding: 0;
            margin: 0;
        }

        /* SWIPER JS */
        swiper-container {
            width: 100%;
            height: 100%;
            background: white;
        }

        swiper-slide {
            /* font-size: 18px; */
            color: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 60px;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        /* swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        } */

        /* swiper-slide .subtitle {
            font-size: 21px;
        } */

        /* swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
        } */

        .footer {
            position: relative;
            color: #fff;
            /* Change text color as needed */
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Adjust the rgba values for opacity */
            z-index: 1;
            /* Make sure this layer is above the background but below the text */
        }

        .footer>* {
            position: relative;
            z-index: 2;
            /* Ensure text is above the overlay */
        }

        .footer {
            background: url("{{ asset('assets/background2.jpg') }}") center center / cover no-repeat;
        }
    </style>
</head>

<body class="bg-light">
    @include('customer-layout.app')

    {{ $slot }}
</body>

</html>
