@extends('master.layout1')

@section('title')
  تهانينا
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('content')
<div class="container w-100 desktop-form">
  <form class="row" id="fh5co_contact_form">
      <div class="js-container containerr" style="top:0px !important;"></div>
      <div style="text-align:center;margin-top:100px; position:  fixed;width:100%;height:100%;top:0px;left:0px;">
        <div class="checkmark-circle">
          <div class="background"></div>
          <div class="checkmark draw"></div>
        </div>
        <br>
        <h1 style="margin: 0.6em; letter-spacing: 2px;">! تهانينا </h1>
        <p>! شكرا على ثقتكم </p>
        <p>سنتصل بكم لتأكيد انخراطكم في القريب العاجل</p>
        <a href="{{ route('home')}}" class="btn contact_btn">العودة</a>
      </div>  
      
  </form>
</div>
@endsection
    
