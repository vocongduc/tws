<!-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent navbar-fixed-top" id="gtco-main-nav">
    <div class="container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('') }}TW/images/Talent Wins.png" class="navbar-brand p-0 m-0" alt="">
            </a>
            <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div id="my-nav" class="collapse navbar-collapse mt-3">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">Services 
                    </a>
                    <div class="dropdown-content services-info">
                        <ul>
                            <li>
                                <a href="#">Talent Wins Technology <i class="fa fa-caret-right"></i></a>
                                <div class="dropdown-content-detail">
                                    <a href="">Thiết Kế Website</a>
                                    <a href="">Phát Triển Phần Mềm</a>
                                    <a href="">Xây Dựng App Mobile</a>
                                </div>
                            </li>
                            <li>
                                <a href="#">Talent Wins Solution <i class="fa fa-caret-right"></i></a>
                                <div class="dropdown-content-detail">
                                    <a href="">Dịch Vụ Headhunting</a>
                                    <a href="">Dịch Vụ Cho Thuê Nhân Sự</a>
                                    <a href="">Website Tuyển Dụng Việc Làm</a>
                                </div>
                            </li>
                            <li>
                                <a href="#">Talent Wins Academy <i class="fa fa-caret-right"></i></a>
                                <div class="dropdown-content-detail">
                                    <a href="">Đào Tạo Lập Trình</a>
                                    <a href="">Đào Tạo Nhân Sự</a>
                                    <a href="">Đào Tạo Kỹ Năng Mềm</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <div class="float-right">
                <span class="mr-2">
                    <input type="radio" name="language" value="eng" style="display: inline-block;">
                    <span class="flag-icon flag-icon-us"></span> <label for=""> English</label>
                </span>
                <span>
                    <input type="radio" name="language" value="vn" style="display: inline-block;">
                    <span class="flag-icon flag-icon-vn"></span> <label for=""> Tiếng Việt</label>
                </span>
            </div>
        </div>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top" id="gtco-main-nav">
    <div class="container">
        <a href="{{ url('/') }}">
            <img src="{{ asset('') }}TW/images/Talent Wins.png" class="navbar-brand p-0 m-0" alt="">
        </a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div id="my-nav" class="collapse navbar-collapse mt-3">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><input type="radio" checked="checked" name="language" value="eng" style="display: inline-block;"><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><input type="radio" name="language" value="vie" style="display: inline-block;"><span class="flag-icon flag-icon-vn"></span></li>
                </ul>
            </div>
        </div>
    </nav>


