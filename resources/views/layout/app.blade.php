<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('titre')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap\dist\css\bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('img\sary.jpg')}}">
</head>
<body>
@include('layout.navbar')
 @yield('contenu')
</body>
</html>