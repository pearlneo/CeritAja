<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>@yield('title', 'CeritAja')</title>

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- GLOBAL CSS -->
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">

        <!-- PER PAGE CSS -->
        @stack('styles')
    </head>
    <body>

        @include('partials.sidebar')

        <main class="main">
            @yield('content')
        </main>

        <!-- GLOBAL JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
        <script src="{{ asset('js/theme.js') }}"></script>

        <!-- PER PAGE JS -->
        @stack('scripts')
    </body>
</html>