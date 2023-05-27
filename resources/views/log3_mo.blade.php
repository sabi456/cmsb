@extends('master.layout')

@section('title')
    الوثائق المطلوبة
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
                <h1 class="text-bold text-center">الوثائق المطلوبة</h1>
            </div>
            <hr>
            <div class="container form-container">
                <div class="container w-50 desktop-form">
                    <form action="{{ route('post_3') }}" method="POST" enctype="multipart/form-data" class="row" id="fh5co_contact_form">
                        @csrf
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة واضحة لصاحب الشركة *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_pict" placeholder="إختر ملفّا" onclick="document.getElementById('pict').click();" />
                            <input type="file" style="display:none;" name="pict" id="pict" onchange="loadFileValue_pict(this);" />
                            <span id="x1" onclick="del1();"><b>X</b></span>
                        </div>
                        
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة واضحة للبطاقة الوطنية *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_cin_pict" placeholder="إختر ملفّا" onclick="document.getElementById('cin_pict').click();" />
                            <input type="file" style="display:none;" name="cin_pict" id="cin_pict" onchange="loadFileValue_cin_pict(this);" />
                            <span id="x2" onclick="del2();"><b>X</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة واضحة للمحل التجاري *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_magasin_pict" placeholder="إختر ملفّا" onclick="document.getElementById('magasin_pict').click();" />
                            
                            <input type="file" style="display:none;" name="magasin_pict" id="magasin_pict" onchange="loadFileValue_magasin_pict(this);" /> 
                            <span id="x3" onclick="del3();"><b>X</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <label for="file-input" style="font-size: 19px;"> السجل التجاري أو بطاقة المقاول الذاتي *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_entreprise_pict" placeholder="إختر ملفّا" onclick="document.getElementById('entreprise_pict').click();" />
                            
                            <input type="file" style="display:none;" name="entreprise_pict" id="entreprise_pict" onchange="loadFileValue_entreprise_pict(this);" /> 
                            <span id="x4" onclick="del4();"><b>X</b></span>
                        </div>
                        <div class="col-12 py-3 text-center"><input type="submit" value="متابعة" class="btn contact_btn"></div>
                    </form>
                    
                </div>
                <div class="container mobile-form">
                    <form action="{{ route('post_3') }}" method="POST" enctype="multipart/form-data" class="row" id="fh5co_contact_form">
                        @csrf
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة واضحة لصاحب الشركة *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_pict" placeholder="إختر ملفّا" onclick="document.getElementById('pict').click();" />
                            <input type="file" style="display:none;" name="pict" id="pict" onchange="loadFileValue_pict(this);" />
                            <span id="x1" onclick="del1();"><b>X</b></span>
                        </div>
                        
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة واضحة للبطاقة الوطنية *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_cin_pict" placeholder="إختر ملفّا" onclick="document.getElementById('cin_pict').click();" />
                            <input type="file" style="display:none;" name="cin_pict" id="cin_pict" onchange="loadFileValue_cin_pict(this);" />
                            <span id="x2" onclick="del2();"><b>X</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <label for="file-input" class="lab">صورة واضحة للمحل التجاري *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_magasin_pict" placeholder="إختر ملفّا" onclick="document.getElementById('magasin_pict').click();" />
                            
                            <input type="file" style="display:none;" name="magasin_pict" id="magasin_pict" onchange="loadFileValue_magasin_pict(this);" /> 
                            <span id="x3" onclick="del3();"><b>X</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <label for="file-input" style="font-size: 19px;"> السجل التجاري أو بطاقة المقاول الذاتي *</label>
                        </div>
                        <div class="col-6 py-3 d-flex align-items-center">
                            <input type="text" class="form-control fh5co_contact_text_box" id="loadFile_entreprise_pict" placeholder="إختر ملفّا" onclick="document.getElementById('entreprise_pict').click();" />
                            
                            <input type="file" style="display:none;" name="entreprise_pict" id="entreprise_pict" onchange="loadFileValue_entreprise_pict(this);" /> 
                            <span id="x4" onclick="del4();"><b>X</b></span>
                        </div>
                        <div class="col-12 py-3 text-center"><input type="submit" value="متابعة" class="btn contact_btn"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection