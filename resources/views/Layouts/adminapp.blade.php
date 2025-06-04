<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Admin | @yield('title', 'Page')</title>
    <meta name="description" content="">

    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.svg') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon.svg') }}">

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    </noscript>

    <link rel="stylesheet" href="https://dev.visualisation.polimapper.co.uk/public/web/css/rte_theme_default.css">
    <link rel="stylesheet" href="{{ asset('assets/css/richtext.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    @include('components.adminheader')

    <main class="iqb-main">
        @yield('content')
    </main>

</body>

</html>