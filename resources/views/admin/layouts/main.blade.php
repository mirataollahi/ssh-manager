<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin-assets/table/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('admin-assets/table/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/table/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/win7.css') }}">


    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('admin-assets/table/css/style.css') }}">

    <title>SSH Manager</title>
</head>
<body>


<div class="content">

    <div class="container">
        <h2 class="mb-3 text-center">SSH Servers</h2>


        @yield('content')


    </div>

</div>


<script src="{{ asset('admin-assets/table/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin-assets/table/js/popper.min.js') }}"></script>
<script src="{{ asset('admin-assets/table/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-assets/table/js/main.js') }}"></script>
</body>
</html>
