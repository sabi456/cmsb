@extends('master.layout')

@section('title')
    معلومات المنخرط  
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
                            <li id="step3"><h5>معلومات<br> المقاولة</h5></li>
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
                <h1 class="text-bold text-center">معلومات المنخرط</h1>
            </div>
            <hr>
            <div class="container form-container">
                <div class="container w-50 desktop-form">
                    <form action="{{ route('post_1') }}" method="POST" class="row" id="fh5co_contact_form">
                        @csrf
                        <div class="col-12 py-3">
                            <input type="text" required value="{{ old('name') }}" class="form-control fh5co_contact_text_box" name="name" placeholder="الإسم الكامل *" />
                            @error('name')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" required value="{{ old('cin') }}" class="form-control fh5co_contact_text_box" name="cin" placeholder="رقم البطاقة الوطنية *" />
                            @error('cin')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" value="{{ old('city_b') }}" class="form-control fh5co_contact_text_box" name="city_b" placeholder="تاريخ و مكان الازدياد"  />
                            @error('city_b')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-6 py-3">
                            <input type="date" value="{{ old('date_b') }}" class="form-control fh5co_contact_text_box" name="date_b"/>
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" required value="{{ old('adress') }}" class="form-control fh5co_contact_text_box" name="adress" placeholder="عنوان السكن *" />
                            @error('adress')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" required value="{{ old('phone') }}" class="form-control fh5co_contact_text_box" name="phone" placeholder="رقم الهاتف *" />
                            @error('phone')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <input type="email" value="{{ old('mail') }}" class="form-control fh5co_contact_text_box" name="mail" placeholder="البريد الإلكتروني"/>
                            @error('mail')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <textarea value="{{ old('note') }}" class="form-control fh5co_contacts_message" name="note" placeholder="أكتب ملاحظة  ( اختياري )"></textarea>
                        </div>
                        <div class="col-12 py-3 text-center"> <input type="submit" value="متابعة" class="btn contact_btn"></div>
                    </form>
                    
                </div>
                <div class="container mobile-form">
                    <form action="{{ route('post_1') }}" method="POST" class="row" id="fh5co_contact_form">
                        @csrf
                        <div class="col-12 py-3">
                            <input type="text" value="{{ old('name') }}" class="form-control fh5co_contact_text_box" name="name" placeholder="الإسم الكامل *" />
                            @error('name')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" value="{{ old('cin') }}" class="form-control fh5co_contact_text_box" name="cin" placeholder="رقم البطاقة الوطنية *" />
                            @error('cin')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" value="{{ old('city_b') }}" class="form-control fh5co_contact_text_box" name="city_b" placeholder="تاريخ و مكان الازدياد"  />
                            @error('city_b')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-6 py-3">
                            <input type="date" value="{{ old('date_b') }}" class="form-control fh5co_contact_text_box" name="date_b"/>
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" value="{{ old('adress') }}" class="form-control fh5co_contact_text_box" name="adress" placeholder="عنوان السكن *" />
                            @error('adress')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <input type="text" value="{{ old('phone') }}" class="form-control fh5co_contact_text_box" name="phone" placeholder="رقم الهاتف *" />
                            @error('phone')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <input type="email" value="{{ old('mail') }}" class="form-control fh5co_contact_text_box" name="mail" placeholder="البريد الإلكتروني *"/>
                            @error('mail')<p class="text-danger" style="margin-right: 2em"><b>{{ $message }}</b></p>@enderror
                        </div>
                        <div class="col-12 py-3">
                            <textarea value="{{ old('note') }}" class="form-control fh5co_contacts_message" name="note" placeholder="أكتب ملاحظة  ( اختياري )"></textarea>
                        </div>
                        <div class="col-12 py-3 text-center"> <input type="submit" value="متابعة" class="btn contact_btn"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection