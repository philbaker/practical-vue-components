<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="/css/tailwind.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="flex flex-col sm:flex-row h-full">
        <div class="w-full sm:w-1/4 bg-gray-100">
            @section('sidebar')
            @show
        </div>
        <div class="w-full sm:w-3/4">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="/js/app.js"></script>
    </body>
</html>
