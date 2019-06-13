@extends('TW.index')
@section('content')
<link rel="stylesheet" href="{{ asset('') }}TW/css/main.css">
<link rel="stylesheet" href="{{ asset('') }}TW/css/util.css">

<div class="wrap-main-nav">
    <div class="main-nav">
        <!-- Menu desktop -->
        <nav class="menu-desktop">
            <a class="logo-stick" href="index.html">
                <img src="{{ asset('') }}TW/images/icons/logo-01.png" alt="LOGO">
            </a>

            <ul class="main-menu">
                <li>
                    <a href="{{ route('abc') }}">Website Design</a>
                </li>

                <li class="mega-menu-item">
                    <a href="category-01.html">Software Design</a>
                </li>

                <li class="mega-menu-item">
                    <a href="category-02.html">App Development</a>
                </li>

                <li class="mega-menu-item">
                    <a href="category-01.html">Programmers Provider Service</a>
                </li>

            </ul>
            
        </nav>
    </div>
</div>


@endsection