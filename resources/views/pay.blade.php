@extends('master.layout')

@section('title')
    الدفع
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('active_i')
    active
@endsection

@section('content')
    <div class="fuild">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 
                col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="form">
                        <ul id="progressbar">
                            <li class="active" id="step1"><h5>الدفع</h5></li>
                            <li class="active" id="step2"><h5>الوثائق<br> المطلوبة</h5></li>
                            <li class="active" id="step3"><h5>معلومات<br> المقاولة</h5></li>
                            <li class="active" id="step4"><h5>معلومات<br> المنخرط</h5></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-4">
        <div class="container">
            <div class="col-12 text-center contact_margin_svnit ">
                <h1 class="text-bold text-center">الدفع</h1>
            </div>
            <hr>
            <div class="container form-container">
                <div class="container w-50 desktop-form">
                    <form class="row" id="fh5co_contact_form">
                        <div class="col-12 py-3">
                            <input type="text"  class="form-control fh5co_contact_text_box" placeholder="الإسم الكامل للدافع *" />
                        </div>
                        <div class="col-12 py-3">
                            <input type="text"  class="form-control fh5co_contact_text_box" placeholder="رقم تأكيد الدفع *" />
                        </div>
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة أو ملف لتوصيل الدفع  *</label>
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" value="" class="form-control fh5co_contact_text_box" id="loadFileXml" placeholder="إختر ملفّا" onclick="document.getElementById('file').click();" />
                            <input type="file" style="display:none;" id="file" name="file"/>    
                            
                        </div>
                        <div class="col-12 py-3 text-center"> <a href="{{ route('cong')}}" class="btn contact_btn">تأكيد</a> </div>
                    </form>
                    
                </div>
                <div class="container mobile-form">
                    <form class="row" id="fh5co_contact_form">
                        <div class="col-12 py-3">
                            <input type="text"  class="form-control fh5co_contact_text_box" placeholder="الإسم الكامل للدافع *" />
                        </div>
                        <div class="col-12 py-3">
                            <input type="text"  class="form-control fh5co_contact_text_box" placeholder="رقم تأكيد الدفع *" />
                        </div>
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة أو ملف لتوصيل الدفع  *</label>
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" value="" class="form-control fh5co_contact_text_box" id="loadFileXml" placeholder="إختر ملفّا" onclick="document.getElementById('file').click();" />
                            <input type="file" style="display:none;" id="file" name="file"/>    
                            
                        </div>
                        <div class="col-12 py-3 text-center"> <a href="{{ route('cong')}}" class="btn contact_btn">تأكيد</a> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_bg pb-3 arabic-input">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src="images/logo2.png" alt="img" class="footer_logo"/></div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="footer_main_title py-3"><h3>من نحن</h3></div>
                    <div class="pb-3" style="text-align: justify;">
                        <h6 style="line-height: 2em; padding-left: 3em;">
                            نحن جمعية مغربية متخصصة وملتزمة بالدفاع عن شؤون الشركات والعمال في قطاع المجوهرات في المغرب. نهدف إلى تعزيز وحماية حقوق المشغلين والعمال في هذه الصناعة الحساسة والمتنوعة.
                        </h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_main_title py-3"><h3>تواصل معنا</h3></div>
                    <ul class="footer_menu">
                        <div style="padding: .5em 0em 0.9em 0em;">
                            <span><i class="fa fa-map-marker"></i></span>
                            &nbsp;&nbsp;
                            <span style="padding-bottom: 1em; font-size: larger;">العنوان &nbsp;&nbsp;:&nbsp;&nbsp; دار الشباب عين الشق البيضاء</span>
                        </div>
                        <div style="padding-bottom: 0.9em;">
                            <span><i class="fa fa-phone"></i></span>
                            &nbsp;&nbsp;
                            <span style="font-size: larger;">الهاتف &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; 00 00 00 22 05</span>
                        </div>
                        <div style="padding-bottom: 0.9em;">
                            <span><i class="fa fa-phone"></i></span>
                            &nbsp;&nbsp;
                            <span style="font-size: larger;">الواتساب &nbsp;&nbsp;:&nbsp;&nbsp; 00 00 00 00 06</span>
                        </div>
                        <div style="padding-bottom: 0.9em;">
                            <span><i class="fa fa-envelope"></i></span>
                            &nbsp;&nbsp;
                            <span style="font-size: larger;">البريد الإلكتروني &nbsp;&nbsp;:&nbsp;&nbsp; cmsb@gmail.com</span> 
                        </div>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_main_title py-3"><h3>تابعنا</h3></div>
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_right_reserved arabic-input">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved" style="letter-spacing: 1px;"> © Copyright 2023, &nbsp;&nbsp; جميع الحقوق محفوظة من طرف <a href="https://freehtml5.co">cmsb.ma</a></div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="index.html" class="footer_last_part_menu">الرئيسية</a>
                    <a href="condition.html" class="footer_last_part_menu">الإنخراط</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">الأخبار</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">تواصل معنا</a>
                    <a href="" class="footer_last_part_menu">Français</a></div>
            </div>
        </div>
    </div>
    
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
</html>