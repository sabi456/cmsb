@extends('master.layout')

@section('title')
    معلومات المقاولة
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
                            <li id="step1"><h5>الدفع</h5></li>
                            <li id="step2"><h5>الوثائق<br> المطلوبة</h5></li>
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
                <h1 class="text-bold text-center">معلومات المقاولة</h1>
            </div>
            <hr>
            <div class="container form-container">
                <div class="container w-50 desktop-form">
                    <form action="{{ route('post_2') }}" method="POST" class="row" id="fh5co_contact_form">
                        @csrf
                        <div class="col-12 py-3">
                            <input type="text" name="name_e" class="form-control fh5co_contact_text_box" placeholder="إسم المقاولة *" />
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" name="cat" class="form-control fh5co_contact_text_box" placeholder="نوعية المقاولة *" />
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" name="phone_e" class="form-control fh5co_contact_text_box" placeholder="رقم هاتف المقاولة *"/>
                        </div>
                        <div class="col-6 py-3">
                            <input type="number" name="nbr_of_em" class="form-control fh5co_contact_text_box" placeholder="عدد العمال *"/>
                        </div>
                        
                        <div class="col-12 py-3">
                            <input type="text" name="adress_e" class="form-control fh5co_contact_text_box" placeholder="عنوان المقاولة *" />
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" name="rc" class="form-control fh5co_contact_text_box" placeholder="رقم السجل التجاري *"/>
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" name="cnss" class="form-control fh5co_contact_text_box" placeholder="رقم الضمان الإجتماعي *"/>
                        </div>
                        <div class="col-12 py-3 text-center"><input type="submit" class="btn contact_btn" value="متابعة"></div>
                    </form>
                    
                </div>
                <div class="container mobile-form">
                    <form action="{{ route('post_2') }}" method="POST" class="row" id="fh5co_contact_form">
                        @csrf
                        <div class="col-12 py-3">
                            <input type="text" name="name_e" class="form-control fh5co_contact_text_box" placeholder="إسم المقاولة *" />
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" name="cat" class="form-control fh5co_contact_text_box" placeholder="نوعية المقاولة *" />
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" name="phone_e" class="form-control fh5co_contact_text_box" placeholder="رقم هاتف المقاولة *"/>
                        </div>
                        <div class="col-6 py-3">
                            <input type="number" name="nbr_of_em" class="form-control fh5co_contact_text_box" placeholder="عدد العمال *"/>
                        </div>
                        
                        <div class="col-12 py-3">
                            <input type="text" name="adress_e" class="form-control fh5co_contact_text_box" placeholder="عنوان المقاولة *" />
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" name="rc" class="form-control fh5co_contact_text_box" placeholder="رقم السجل التجاري *"/>
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" name="cnss" class="form-control fh5co_contact_text_box" placeholder="رقم الضمان الإجتماعي *"/>
                        </div>
                        <div class="col-12 py-3 text-center"><input type="submit" class="btn contact_btn" value="متابعة"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection