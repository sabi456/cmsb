<div class="container-fluid fh5co_header_bg arabic-input">
  <div class="container">
      <div class="row">
          <div class="col-12 fh5co_mediya_center">
              <span class="color_fff fh5co_mediya_setting" style="letter-spacing: 1px;">
                نحن جمعية تدافع عن شؤون الشركات والعمال في قطاع المجوهرات في المغرب تعمل على حماية حقوق الشركات وتوفير الدعم القانوني لها
              </span>
              <div class="d-inline-block fh5co_trading_posotion_relative"><a href="" class="treding_btn">C M S B</a>
                  <div class="fh5co_treding_position_absolute"></div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid arabic-input">
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-3 fh5co_mediya_left">
              <img src="images/logo1.png" alt="img" class="fh5co_logo_width"/>
          </div>
          <div class="my-5 fh5co_mediya_right">
              <h1>الهيئة  المغربية  لقطاع  الحلي  و المجوهرات</h1>
              <h2>Corps Maroccain de secteur de la bijouterie</h2>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786 arabic-input">
  <div class="container padding_786 fuild w-100">
      <nav class="navbar navbar-toggleable-md navbar-light ">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation"><span class="fa fa-bars"></span>
          </button>
          
          <a class="navbar-brand" href="#"><img src="" alt="" class="mobile_logo_width"/></a>
          <div class="position-relative">
              <div class="position-absolute right-0 navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item @yield('active_h')">
                          <a style="font-size: large;" class="nav-link" href="{{ route('home')}}">الرئيسية <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item @yield('active_n')">
                          <a style="font-size: large;" class="nav-link" href="{{ route('news')}}">الأخبار <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item dropdown @yield('active_a')">
                          <a style="font-size: large;" style="font-size: x-large;" class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">الهيئة <span class="sr-only">(current)</span></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                              <a class="dropdown-item" href="{{ route('single')}}">من نحن</a>
                              <a class="dropdown-item" href="{{ route('law_g')}}">القانون الأساسي</a>
                              <a class="dropdown-item" href="{{ route('law_i')}}">القانون الداخلي</a>
                              <a class="dropdown-item btn contact_btn" href="@yield('inkh')"">الإنخراط</a>
                          </div>
                      </li>
                      <li class="nav-item @yield('active_m')">
                          <a style="font-size: large;" class="nav-link" href="{{ route('team') }}">الأعضاء<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item @yield('active_i')">
                          <a style="font-size: large;" class="nav-link" href="@yield('inkh')">الإنخراط<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item mx-5 @yield('active_c')">
                          <a style="font-size: large;" class="nav-link" href="{{ route('contact')}}">تواصل معنا <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item mx-5">
                          <a style="font-size: large;" class="nav-link" href="@yield('lang_f')">Français<span class="sr-only">(current)</span></a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </div>
</div>