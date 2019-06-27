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
    <div style="font-size: 29px" class="font-italic"></div>
      <img src="https://www.todaysoftmag.com/images/articles/tsm46/devdesigner.color.jpg" alt="" style="width: 100%; height: 300px">
      <div style="font-size: 29px" class="font-italic">Development</div>
      <p class="text-justify" style="font-size: 16px">is a process that creates growth, progress, positive change or the addition of physical, economic, environmental, social and demographic components.  The purpose of development is a rise in the level and quality of life of the population, and the creation or expansion of local regional income and employment opportunities, without damaging the resources of the environment.  Development is visible and useful, not necessarily immediately, and includes an aspect of quality change and the creation of conditions for a continuation of that change.

      The international agenda began to focus on development beginning in the second half of the twentieth century.  An understanding developed that economic growth did not necessarily lead to a rise in the level and quality of life for populations all over the world;  there was a need to place an emphasis on specific policies that would channel resources and enable social and economic mobility for various layers of the population.</p>
  </div>
</div>
@endsection