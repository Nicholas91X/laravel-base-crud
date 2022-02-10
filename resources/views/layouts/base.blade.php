
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>@yield('pageContentTitle')</h1>
        </div>
        <div>
            @yield('pageContent')
        </div>
    </main>
</body>
</html>