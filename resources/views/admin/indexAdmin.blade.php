<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash</title>
    
    <link rel="stylesheet" href="{{ asset('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    
</head>
<body>
<div class="container">

    <!-- Left-menu -->
    @include('leftMenu')
    
    <div class="col-9">
    @include('rightHeader')

        <div class="main-content">
        @yield('content')
        </div>
    </div> <!-- col 9 -->
</div>
</body>
</html>