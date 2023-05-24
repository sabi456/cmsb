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
@endsection