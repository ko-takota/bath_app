<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('header')
</head>
<body>
    <div>
        <div>
            @yield('sidebar')
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <div>
        @yield('footer')
    </div>
</body>
</html>
