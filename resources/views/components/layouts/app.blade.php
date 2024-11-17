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

    <!-- FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Montserrat", sans-serif;
            padding: 0;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a,
        p {
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

        /* LOGIN WAVE BACKGROUND */
        svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: block;
            background-color: #0e4166;
            background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
        }

        /* Sidebar styling */
        .wrapper {
            display: flex;
        }

        #sidebar {
            min-width: 250px;
            background: #7386D5;
            color: black;
            transition: all 0.3s;
        }

        #sidebar li {
            list-style-type: none;
        }


        #sidebar.active {
            margin-left: -250px;
        }

        #content {
            width: 100%;
            min-height: 100vh;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar {
                margin-left: 0;
            }

            #sidebarCollapse {
                display: none;
            }
        }

        .nav-button {
            width: 100%;
            color: black;
            background: white;
            font-size: 1rem;
            font-weight: bold;
            padding: 0.5rem;
            border-radius: 10px;
            text-decoration: none;
        }

        .nav-button:hover {
            color: white;
            background: black;
        }

        /* Active class for the current page */
        .current {
            color: white;
            background: black;
        }

        /* Add transition effect for icon */
        #toggleIcon {
            transition: transform 0.3s ease;
        }

        #sidebar.active #toggleIcon {
            transform: rotate(90deg);
            /* Rotate the icon when the sidebar is active */
        }

        /* Active class for the current page */
        .customer-nav-current {
            color: #198754;
        }

        /* Grid in Customer Products */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth animation */
        }

        .card-hover:hover {
            transform: scale(1.05);
            /* Scales the card to 105% of its original size */
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
            /* Increases the shadow for a pop-out effect */
        }
    </style>
</head>

<body class="bg-light">
    @if (request()->is('/') || request()->is('product') || request()->is('about') || request()->is('contact'))
        @include('customer-layout.app')
    @endif

    @if (request()->is('dashboard') ||
            request()->is('dashboard/view') ||
            request()->is('dashboard/checkout') ||
            request()->is('orders') ||
            request()->is('messages') ||
            request()->is('location') ||
            request()->is('cart') ||
            request()->is('notification') ||
            request()->is('profile'))
        @include('customer-layout.customer_login')
    @endif

    {{ $slot }}

</body>

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                text: '{{ session('message') }}',
            });
        });
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: '{{ session('error') }}',
                text: '{{ session('message') }}',
            });
        });
    </script>
@endif

<!-- Script to toggle sidebar -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the sidebar collapse button
        const sidebarCollapse = document.getElementById('sidebarCollapse');
        // Get the sidebar element
        const sidebar = document.getElementById('sidebar');
        // Get the toggle icon
        const toggleIcon = document.getElementById('toggleIcon');

        // Add click event listener to toggle the sidebar
        sidebarCollapse.addEventListener('click', function() {
            // Toggle 'active' class on the sidebar
            sidebar.classList.toggle('active');

            // Change icon based on sidebar state
            if (sidebar.classList.contains('active')) {
                toggleIcon.classList.remove('bi-list');
                toggleIcon.classList.add('bi-x');
            } else {
                toggleIcon.classList.remove('bi-x');
                toggleIcon.classList.add('bi-list');
            }
        });
    });


    document.addEventListener('clear-file-input', function() {
        document.querySelector('#product-name').value = null;
    });
</script>

</html>
