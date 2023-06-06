@extends('master.layout')

@section('title')
    الحزمات
@endsection

@section('link')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('active_i')
    active
@endsection

@section('content')
    
    <!-- pricing table  -->
    <section id="pricing-tables">
      <h1 class="text-center">إختر الحزمة الخاصة بك</h1>
      <hr>
      <div class="width container fuild">
          <div class="col-md-2 col-sm-6 col-xs-12 color-3">
            <div class="single-table text-center">
                <div class="plan-header">
                    <h3>شركة تصنيع</h3>
                    <br>
                    <h4 class="text-center plan-price">
                      &nbsp;&nbsp;1500 &nbsp;&nbsp; <br><span>&nbsp;درهم / العام&nbsp;&nbsp;&nbsp;</span>
                    </h4>
                </div>
                <ul class="text-center">
                    <li>ورشة كبيرة</li>
                    <li>ورشة كبيرة</li>
                    <li>ورشة كبيرة</li>
                    <li>ورشة كبيرة</li>
                </ul>
                <a href="{{ route('condition')}}" class="plan-submit hvr-bubble-float-right">أطلب الآن</a>
            </div>
        </div>
          <div class="col-md-2 col-sm-6 col-xs-12 color-2">
              <div class="single-table text-center">
                  <div class="plan-header">
                      <h3>مقاولة كبيرة</h3>
                      <br>
                      <h4 class="text-center plan-price">
                        &nbsp;&nbsp;&nbsp;800 &nbsp;&nbsp;&nbsp; <br><span>&nbsp;&nbsp;درهم / العام&nbsp;&nbsp;&nbsp;</span>
                      </h4>
                  </div>
                  <ul class="text-center">
                      <li>ورشة كبيرة</li>
                      <li>عدد العمال أكثر من تسعة </li>
                      <li>بائع مع مساعد أو أكثر </li>
                      <li>بائع بنصف الجملة و الجملة</li>
                  </ul>
                  <a href="{{ route('condition')}}" class="plan-submit hvr-bubble-float-right">أطلب الآن</a>
              </div>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12 color-1">
            <div class="single-table text-center">
                <div class="plan-header">
                    <h3>مقاولة متوسطة</h3>
                    <br>
                    <h4 class="text-center plan-price">
                        &nbsp;&nbsp;&nbsp;400 &nbsp;&nbsp;&nbsp; <br><span>&nbsp;&nbsp;درهم / العام&nbsp;&nbsp;&nbsp;</span>
                    </h4>
                </div>


                <ul class="text-center">
                    <li>ورشة متوسطة</li>
                    <li>عدد العمال لا يتجاوز تسعة</li>
                    <li>بائع مع مساعد واحد</li>
                    <li>بائع بنصف الجملة و الجملة</li>
                </ul>
                <a href="{{ route('condition')}}" class="plan-submit hvr-bubble-float-right">أطلب الآن</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12 color-2">
            <div class="single-table text-center">
                <div class="plan-header">
                    <h3>مقاولة صغيرة</h3>
                    <br>
                    <h4 class="text-center plan-price">
                        &nbsp;&nbsp;&nbsp;200 &nbsp;&nbsp;&nbsp; <br><span>&nbsp;&nbsp;درهم / العام&nbsp;&nbsp;&nbsp;</span>
                    </h4>
                </div>


                <ul class="text-center">
                    <li>ورشة صغيرة</li>
                    <li>عدد العمال لا يتجاوز أربعة</li>
                    <li>بائع جوال بمفرده</li>
                    <li>بائع بالتقسيط بمفرده</li>
                </ul>
                <a href="{{ route('condition')}}" class="plan-submit hvr-bubble-float-right">أطلب الآن</a>
            </div>
        </div>
    
      </div>
  </section>

  <!-- end priceing table -->
  @endsection