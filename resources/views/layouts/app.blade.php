<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}} -yield</title>
</head>
<body>
    <div class="contener flex flex-row">
        <div class="h-screen bg-sky-500">
            @section('sidebar')
            @include('components.sidebar')
            @show
        </div>
        <div class="contener flex-grow h-screen">
            @yield('content')
        </div>
    </div>
    
</body>
</html>