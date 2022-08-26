<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mily's links database</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
    <style>
        a{text-decoration:none;color:var(--bs-body-color)}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Mily's links database</h2>
        @yield('content')
        <div class="text-center">
        <hr class="mt-5 mb-4">
        Mily's links database, version 2.0 | Builded on <span class="text-warning">Laravel</span>
        <div class="ms-2 mt-2"><a href="api">API</a>&nbsp;&nbsp;GitHub</div>
        </div>
        </div> 
</body>
</html>