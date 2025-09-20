<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
 <title>Laravel com Bootstrap</title>
</head>
<body>
 <div class="container mt-5">
 <div class="alert alert-success" role="alert">
 Bootstrap funcionando corretamente no Laravel 12!
 </div>
 </div>
</body>
</html>