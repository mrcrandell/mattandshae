<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')

        @if (\App::environment('production'))
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16197792-15', 'auto');
            ga('send', 'pageview');
        </script>
        @endif

    </head>
    <body>
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        @yield('scripts')
    </body>

</html>
