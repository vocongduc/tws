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
    
      <img src="https://office-softech.cdn.vccloud.vn/ckfinder/userfiles//images/aptech/FRONT-END.jpg" alt="" style="width: 100%; height: ">
      <div style="font-size: 29px" class="font-italic">Web Designer</div>
      <p class="text-justify" style="font-size: 16px">Network Solutions provides customized, professional Web design packages that allow you to have a professional website design worthy of representing your company. You may choose to work one-on-one with a professional Web design expert to design and build your website using the latest Web site design techniques, or you may take a more hands-on approach and use customizable Web site design templates to build the website yourself. Either way, Network Solutions professional Web design tools and Web hosting packages can help to ensure that your Web site design looks great and does exactly what it is meant to do: meet the needs of your customers.</p>
  </div>
</div>
@endsection