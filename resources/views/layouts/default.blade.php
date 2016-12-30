<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        @yield('scripts')
    </body>

</html>
