 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="gtco-main-nav" style="">
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
             <ul class="nav navbar-nav navbar-right ml-auto language">
                 <li><input type="radio" checked="checked" name="language" value="eng"
                         style="display: inline-block;"><span
                         class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li><input type="radio" name="language" value="vie" style="display: inline-block;"><span
                         class="flag-icon flag-icon-vn"></span></li>
             </ul>
         </div>
     </div>
 </nav>
