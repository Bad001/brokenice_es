<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>@yield('action')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                @yield('action')
            </div>
            @yield('errors')
            <div class="container">
                @yield('form')
            </div>
            <div class="links">
                @yield('links')
            </div>
        </div>
    </div>
</body>
</html>
