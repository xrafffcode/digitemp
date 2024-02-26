<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="title" content="{{ $title }}">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="digitemp, pliken">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title>{{ $title }}</title>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description ?? '' }}">
    <meta property="og:image" content="{{ asset('opengraphimg.jpg') }}">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ url()->current() }}">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description ?? '' }}">
    <meta name="twitter:image" content="{{ asset('opengraphimg.jpg') }}">

    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}?v={{ uniqid() }}">
    <link rel="stylesheet" href="{{ asset('app/css/custom.css') }}?v={{ uniqid() }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />


    @stack('plugin-styles')

    @stack('styles')
</head>

<body>

    <x-ui.navbar-app />

    {{ $slot }}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('app/js/app.js') }}?v={{ uniqid() }}"></script>
    <script src="{{ asset('app/js/script.js') }}?v={{ uniqid() }}"></script>


    @stack('plugin-scripts')

    @stack('custom-scripts')

</body>

</html>
