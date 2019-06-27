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
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('') }}TW/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}TW/css/main.css">
<link rel="stylesheet" href="{{ asset('') }}TW/css/util.css">
    
    <title>Solution - Free Responsive Agency Template using Bootstrap 4</title>
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
    <!-- owl carousel js-->
    <script src="{{ asset('') }}TW/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}TW/js/main.js"></script>
</body>

</html>