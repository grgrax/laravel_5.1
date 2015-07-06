<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('header')
            This is the master header.
        @show
        <div class="container">
            @yield('content')
        </div>
        @section('footer')
            This is the master footer.
        @show
    </body>
</html>