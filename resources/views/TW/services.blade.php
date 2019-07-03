@extends('TW.index')
@section('content')

<style type="text/css">
  .example{
    margin: 20px;
  }
</style>

<div class="container">
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
            <li><a class="active" data-toggle="tab" href="#thietke">Thiết Kế Website</a></li>
            <li><a class="" data-toggle="tab" href="#phattrien">Phát Triển Phần Mềm</a></li>
            <li><a class="" data-toggle="tab" href="#xaydung">Xây Dựng App Mobile</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane container active" id="thietke">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Design Website</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
            <div class="tab-pane container" id="phattrien">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Software Development</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
            <div class="tab-pane container" id="xaydung">
              <div class="row">
                <div class="col-lg-6">
                  <h1>App Mobile Build</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane container content" id="solution">
          <ul class="nav d-flex text-center">
            <li><a class="active" data-toggle="tab" href="#headhunting">Dịch vụ Headhunting</a></li>
            <li><a class="" data-toggle="tab" href="#thuenhansu">Dịch Vụ Cho Thuê Nhân Sự</a></li>
            <li><a class="" data-toggle="tab" href="#tuyendung">Website Tuyển Dụng Việc Làm</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane container active" id="headhunting">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Headhunting Services</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
            <div class="tab-pane container" id="thuenhansu">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Human Services</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
            <div class="tab-pane container" id="tuyendung">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Recruitment Services</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane container content" id="academy">
          <ul class="nav d-flex text-center">
            <li><a class="active" data-toggle="tab" href="#laptrinh">Đào Tạo Lập Trình</a></li>
            <li><a class="" data-toggle="tab" href="#nhansu">Đào Tạo Nhân Sự</a></li>
            <li><a class="" data-toggle="tab" href="#kynangmem">Đào Tạo Kỹ Năng Mềm</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane container active" id="laptrinh">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Programming Training</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
            <div class="tab-pane container" id="nhansu">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Human Training</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
            <div class="tab-pane container" id="kynangmem">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Soft Skills Training</h1>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 text-center">
                  <img src="https://i.redd.it/kr9mkj6srv121.jpg" alt="" style="width: 350px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-lg-12 col-md-12">
      <img src="https://maharatgostar.com/sites/maharatgostar.com/files/web_design.jpg" alt="" width="1100px" height="300px">
    </div>
    <div class="col-lg-12 col-md-12">
     <span style="font-size: 60px"><center>The Investor Strategy</center></span>
     <p>The new product includes a secure, HTTPS website that is flexible in design customization, integrates HD patient education videos, and showcases a homepage video banner to instantly increase website engagement. Additional elements are included to further enhance the patient experience such as HIPAA-compliant online patient forms that patients can conveniently complete from the comfort of their own homes, a Live Chat feature to answer patient questions in real-time, and call tracking and recording for accurate ROI measurement.</p>

     <p>In addition to these core features included in Select, all ProSites websites include FutureNow AssuranceTM which is the guarantee that a practice will always have a website with the latest designs, features and enhancements, free of charge. Members with a ProSites website also enjoy customizable content, online contact forms and questionnaires, an accessibility feature (to comply with the Americans with Disabilities Act), and reputation marketing, making it easy to showcase, respond to, and monitor patient reviews.</p>
     <p>Website Design Software Market segment by Type :-

       PC website platform

       Mobile website platform

       Website Design Software Market segment by Application :-

       Small and Mid-sized Businesses

       Personal website

       Portfolios,

       Design & arts

       E-commerce

       Blogging
     Try a sample Copy of this Market report now! @ www.reportconsultant.com/request_sample.php?id=5219  </p>     

     <p>How vendors in the global Website Design Software market are increasingly introducing a solution that allows the industry to work with a number of diverse sources. As businesses gain more confidence about the reliability of data-driven decisions undertaken by technology in real-time, self-service business analytics solutions will gain more prominence in the global Website Design Software market in the next few years.</p>

     <p>The report collates data from a number of surveys, interviews, and many other primary and secondary research methodologies. The the vast amount of data thus gathered from these sources is narrowed down with the the help of industry-best analytical methods to present before the reader only the most crucial sets of data essential to understanding the factors that will have the most profound impact on the overall development of the market. The global Website Design Software Market for the Website Design Software and the underlying industry are discussed in great depth in market intelligence for the readers to understand better and get a clear picture of this market.
     </p>
     <span style="font-size: 30px"> Companies Profiled</span>

     <p>Planview,Cascade,ClearPoint,OnStrategy,Envisio Solutions,SmartDraw,Rhythm Systems,Kaufman, ,Hall & Associates,SAP,Prophix,Tagetik,StrategyBlocks</p>

     <p>This statistical report offers an accurate analysis of recent trends and technological advancements in global regions such as North America, Latin America, Asia-Pacific, Africa, and India. It focuses on applicable tools, methodologies and standard operating procedures carried out by top-level industries. The report has been made by using effective exploratory techniques such as primary and secondary research techniques.</p>

     <p>The key components of the global Strategic Planning Software market have been elaborated to get a clear idea about the requirements of the businesses. Financial and economic aspects of the businesses have been presented by using graphical presentation techniques such as charts, graphs, tables, and pictures. The entire demand and supply chain have been explained to get a clear insight into the businesses.</p>
     <img src="https://rehabfinancial.com/images/REI-Banner.jpg" alt="" width="600px" height="400px">
   </div> -->
 </div>
</div>
@endsection