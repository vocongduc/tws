<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('') }}TW/images/Logo TLW2.png">


    <!-- awesone fonts css-->
    <link href="{{ asset('') }}TW/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{ asset('') }}TW/owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('') }}TW/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('') }}TW/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}TW/css/main.css">
    <link rel="stylesheet" href="{{ asset('') }}../node_modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('') }}TW/css/util.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
    <title>Talent Wins</title>
    <style>

    </style>
</head>

<body>
    <!-- header -->
    @include('TW.header')
    <!-- content -->
    @yield('content')
    <!-- footer -->
    @include('TW.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('') }}TW/js/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ asset('') }}TW/js/popper.min.js"></script>
    <script src="{{ asset('') }}TW/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- owl carousel js-->
    <script src="{{ asset('') }}TW/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}TW/js/main.js"></script>
</body>

</html>