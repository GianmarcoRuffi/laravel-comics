<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/976dce7efe.js" crossorigin="anonymous"></script>
    <title>Laravel Comics</title>
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('main')
    </main>
    @include('partials.merchandise')
    @include('partials.footer')
</body>
</html>