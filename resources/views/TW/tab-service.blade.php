<div class="container demo">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#technology">Talent Wins Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#solution">Talent Wins Solution</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#academy">Talent Wins Academy</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane container active content" id="technology">
                    <ul class="nav d-flex text-center">
                        <li><a class="" href="{{ route('design') }}">Thiết Kế Website</a></li>
                        <li><a class="" href="{{ route('software') }}">Phát Triển Phần Mềm</a></li>
                        <li><a class="" href="{{ route('mobile') }}">Xây Dựng App Mobile</a></li>
                    </ul>
                </div>
                <div class="tab-pane container content" id="solution">
                    <ul class="nav d-flex text-center">
                        <li><a class="" href="{{ route('headhunting') }}">Dịch vụ Headhunting</a></li>
                        <li><a class="" href="{{ route('hire-personnel') }}">Dịch Vụ Cho Thuê Nhân Sự</a></li>
                        <li><a class="" href="{{ route('recruitment') }}">Website Tuyển Dụng Việc Làm</a></li>
                    </ul>
                </div>
                <div class="tab-pane container content" id="academy">
                    <ul class="nav d-flex text-center">
                        <li><a class="" href="{{ route('coder') }}">Đào Tạo Lập Trình</a></li>
                        <li><a class="" href="{{ route('human') }}">Đào Tạo Nhân Sự</a></li>
                        <li><a class="" href="{{ route('soft-skill') }}">Đào Tạo Kỹ Năng Mềm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- accordion mobile --}}
<div class="accordion-mobile">
    <div class="accordion-1">
        <div class="accordion-item">
            <h3>Talent Wins Technology <span><i class="fas fa-caret-down"></i></span></h3>
            <div class="content">
                <ul class="text-center">
                    <li><a href="{{ route('design') }}">Thiết Kế Website</a></li>
                    <li><a href="{{ route('software') }}">Phát Triển Phần Mềm</a></li>
                    <li><a href="{{ route('mobile') }}">Xây Dựng App Mobile</a></li>
                </ul>
            </div>
        </div>

        <div class="accordion-item">
            <h3>Talent Wins Solution <span><i class="fas fa-caret-down"></i></span></h3>
            <div class="content">
                <ul class="text-center">
                    <li><a href="{{ route('headhunting') }}">Dịch Vụ Headhunting</a></li>
                    <li><a href="{{ route('hire-personnel') }}">Dịch Vụ Cho Thuê Nhân Sự</a></li>
                    <li><a href="{{ route('recruitment') }}">Website Tuyển Dụng Việc Làm</a></li>
                </ul>
            </div>
        </div>
        <div class="accordion-item">
            <h3>Talent Wins Academy <span><i class="fas fa-caret-down"></i></span></h3>
            <div class="content">
                <ul class="text-center">
                    <li><a href="{{ route('coder') }}">Đào Tạo Lập Trình</a></li>
                    <li><a href="{{ route('human') }}">Đào Tạo Nhân Sự</a></li>
                    <li><a href="{{ route('soft-skill') }}">Đào Tạo Kỹ Năng Mềm</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>