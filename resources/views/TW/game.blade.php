@extends('TW.index')
@section('content')
<link rel="stylesheet" href="{{ asset('') }}TW/css/main.css">
<link rel="stylesheet" href="{{ asset('') }}TW/css/util.css">

<div class="wrap-main-nav">
    <div class="main-nav">
        <nav class="menu-desktop">
           	<ul class="main-menu">
                <li>
                    <a href="{{route('dev')}}">Development</a>
                </li>

                <li class="mega-menu-item">
                    <a href="{{route('design')}}">Design</a>
                </li>

                <li class="mega-menu-item">
                    <a href="{{route('game')}}">Game</a>
                </li>
            </ul>
        </nav>
      </div>
    </div>
  <div class="container">
      <img src="https://www.buildbox.com/wp-content/uploads/2017/03/Image-1-7.png" alt="" style="width: 100%;height: 350px">
      <div style="font-size: 29px" class="font-italic">Game Progamming</div>
      <p class="text-justify" style="font-size: 16px">Gaming has seen several “golden ages,” each of which were believed to mark the apex of its rise in popularity. As new technologies and games emerge, however, the number of people engaged in gaming has steadily risen. Smartphones and motion sensors are just two examples of new technologies that have spurred new types of gaming. Gaming has become so pervasive that the term “casual gaming” is used to refer to intermittent gaming, while “hardcore gaming” is reserved for people who spend a lot of time gaming.</p>
  </div>

</div>
@endsection