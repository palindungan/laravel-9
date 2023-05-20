<!DOCTYPE html>
<html class="no-js">

<head>
    @include('layouts_wedding._partials.head')
    @include('layouts_wedding._partials.styles.css')
    @stack('page_css')
    @stack('third_party_stylesheets')
</head>

<body>
    <div class="fh5co-loader"></div>

    <div id="page">
        {{-- @include('layouts_wedding._partials.navigation') --}}

        @yield('content')
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    @include('layouts_wedding._partials.scripts.main')
    @stack('page_scripts')
    @stack('third_party_scripts')
</body>

</html>