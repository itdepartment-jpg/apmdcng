<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'APMDC') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>


<script>
    // Disable right-click
    // document.addEventListener('contextmenu', event => event.preventDefault());
    //
    // // Disable F12, Ctrl+Shift+I, Ctrl+U
    // document.addEventListener('keydown', function (event) {
    //     if (
    //         event.key === "F12" ||
    //         (event.ctrlKey && event.shiftKey && event.key === 'I') ||
    //         (event.ctrlKey && event.key === 'U') ||
    //         (event.ctrlKey && event.shiftKey && event.key === 'J') ||
    //         (event.ctrlKey && event.shiftKey && event.key === 'C')
    //     ) {
    //         event.preventDefault();
    //     }
    // });
</script>
