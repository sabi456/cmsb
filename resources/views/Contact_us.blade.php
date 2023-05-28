@extends('master.layout')

@section('title')
    تواصل معنا  
@endsection

@section('active_c')
    active
@endsection

@section('inkh')
    {{ route('pack')}}
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('content')
<div class="container-fluid contact_us_bg_img">
    <div class="container">
        <div class="row">
            <a href="#" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="#" class="fh5co_con pt-2">تواصل معنا</a>
        </div>
    </div>
</div>
<div class="container-fluid  fh5co_fh5co_bg_contcat">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">اتصل بنا</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">00 00 00 22 05</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">هل لديك أية أسئلة ؟</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">cmsb@gmail.com</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">العنوان</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">دار الشباب عين الشق البيضاء</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <h2 class="text-center py-2">تواصل معنا</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="https://formspree.io/f/mdovvyay" method="POST" class="row" id="fh5co_contact_form">
                    <div class="col-12 py-3">
                        <input type="text" name="name" required class="form-control fh5co_contact_text_box" placeholder="أدخل إسمك *" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" name="email" required class="form-control fh5co_contact_text_box" placeholder="البريد الإلكتروني *" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" name="subject" class="form-control fh5co_contact_text_box" placeholder="الموضوع" />
                    </div>
                    <div class="col-12 py-3">
                        <textarea name="message" required class="form-control fh5co_contacts_message" placeholder="رسالتك أو سؤالك *"></textarea>
                    </div>
                    <div class="col-12 py-3 text-center"><input type="submit" value="أرسل الآن" class="btn contact_btn"></div>
                </form>
            </div>
            <div class="col-12 col-md-6 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1201.4064566877605!2d-7.599674398865178!3d33.5461996852251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda632bcb2ec8a75%3A0x7eaf5f4e48690f83!2sG9WX%2B4WJ%20Terrain%20M&#39;ssalla%2C%20Av.%202%20Mars%2C%20Casablanca!5e0!3m2!1sen!2sma!4v1685252933291!5m2!1sen!2sma" class="map_sss" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
