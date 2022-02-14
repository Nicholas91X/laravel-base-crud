
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        <div class="container-mine text-center">
            <h1>@yield('pageContentTitle')</h1>
        </div>
        <div class="container-mine">
            @yield('pageContent')
        </div>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>