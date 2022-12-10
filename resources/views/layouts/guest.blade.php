<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- common meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('images/logo/faveicon.jpg') }}" type="image/x-icon">
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="{{ asset('assets/fontaswesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontaswesome/css/fontawesome.min.css') }}" />
    <!--=== owl carousel css === -->
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <!--=== jquary modal css ===-->
    <link rel="stylesheet" href="css/vendor/jquery.modal.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&amp;family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!--=== main css ===-->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia(
                "(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>
    @include('layouts.frontend.header')
    <div>
        {{ $slot }}
    </div>
    @include('layouts.frontend.footer')


    <!--==== js =====-->
    <script src="{{ asset('js/vendor/jquary.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.modal.min.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.js') }}"></script>

</body>

</html>
