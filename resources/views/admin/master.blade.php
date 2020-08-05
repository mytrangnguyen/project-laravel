<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash</title>

    <link rel="stylesheet" type="text/css" href="{{ url('./vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('./vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('./css/style.css') }}">

</head>

<body>
    <div class="container row">
        <!-- Left-menu -->
        @include('admin.leftMenu')
        <div class="col-9">
            @include('admin.rightHeader')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>