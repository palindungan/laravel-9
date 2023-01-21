<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous"/>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @include('layouts.styles.css')
        @stack('page_css')
        @stack('third_party_stylesheets')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            @include('layouts.header')

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            @include('layouts.footer')
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        @include('layouts.scripts.pusher')
        @include('layouts.scripts.js')
        @stack('page_scripts')
        @stack('third_party_scripts')
    </body>
</html>
