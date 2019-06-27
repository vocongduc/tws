@extends('TW.index')
@section('content')
<link rel="stylesheet" href="{{ asset('') }}TW/css/main.css">
<link rel="stylesheet" href="{{ asset('') }}TW/css/util.css">

<style type="text/css">
    .example{
        margin: 20px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="example">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="{{route('dev')}}">Development</a>
                            </li>

                            <li class="mega-menu-item">
                                <a href="{{route('design')}}">Design</a>
                            </li>

                            <li class="mega-menu-item">
                                <a href="{{route('game')}}">Gaming</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div style="font-size: 29px" class="font-italic">RATE</div>
	<div class="row">
		<div class="col-lg-7">
			<p style="font-size: 18px">Development</p>
			<p style="font-size: 18px">Design</p>
			<p style="font-size: 18px">Game</p> 
		</div>
		<div class="wpb_column vc_column_container vc_col-sm-5">
			<img class="" src="https://tse4.mm.bing.net/th?id=OIP.F5q_OQxIpomPhZVSWsRYhAAAAA&pid=Api&P=0&w=300&h=300" alt="">
		</div>
	</div>
</div>
@endsection

