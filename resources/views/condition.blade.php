@extends('master.layout')

@section('title')
    الشروط
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('active_i')
    active
@endsection

@section('content')
<div class="container-fluid mb-4 my-3">
    <div class="container">
        <br>
        <div class="col-12 text-center contact_margin_svnit ">
            <h2 class="text-center">الوثائق و الشروط قبل بدء التسجيل</h2>
        </div>
        <hr>
        <div class="container form-container">
            <div class="container w-75 desktop-form">
                <form>
                    <table>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt"> صورة واضحة لصاحب الشركة &nbsp;&nbsp;&nbsp;&nbsp; </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt"> صورة واضحة للمحل التجاري</span>    
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">صورة واضحة للبطاقة الوطنية</span>    
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">السجل التجاري أو بطاقة المقاول الذاتي</span>    
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">توصيل الدفع بواسطة  CashPlus أو ChaabiChash أو WafaCash أو حتى Virement </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="txt">الهوية البنكية : &nbsp;&nbsp; RIB : &nbsp;&nbsp; 0000 1234531495390 0000</span>    
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="padding: 20px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt"><span style="color: rgb(223, 45, 45);">تنبيه !</span> &nbsp;&nbsp; أي خطأ في المعلومات يؤدي مباشرة إلى رفض الإنخراط</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">قراءة القوانين الداخلية و الخارجية للمؤسسة &nbsp;</span>    
                                <a href="{{ route('law_g')}}" style="font-size: large;">إقرأها من هنا</a>
                            </td>
                        </tr>
                    </table>
                    <div class="col-12 py-3 text-center my-4"> <a href="{{ route('log1_mo')}}" class="btn contact_btn">بدء</a> </div>
                </form>
                
            </div>
            <div class="container mobile-form">
                <form>
                    <table>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt"> صورة واضحة لصاحب الشركة &nbsp;&nbsp;&nbsp;&nbsp; </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt"> صورة واضحة للمحل التجاري</span>    
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">صورة واضحة للبطاقة الوطنية</span>    
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">السجل التجاري أو بطاقة المقاول الذاتي</span>    
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">توصيل الدفع بواسطة  CashPlus أو ChaabiChash أو WafaCash أو حتى Virement </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="txt">الهوية البنكية أو RIB : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0000 1234531495390 0000</span>    
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="padding: 20px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">أي خطأ في المعلومات يؤدي مباشرة إلى رفض الإنخراط</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px 0px 5px 0px;">
                                <span class="disk">..</span>
                                &nbsp;&nbsp;
                                <span class="txt">قراءة القوانين الداخلية و الخارجية للمؤسسة &nbsp;</span>    
                                <a href="{{ route('law_g')}}" class="txt">إقرأها من هنا</a>
                            </td>
                        </tr>
                    </table>
                    <div class="col-12 py-3 text-center"> <a href="{{ route('log1_mo')}}" class="btn contact_btn">بدء</a> </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection