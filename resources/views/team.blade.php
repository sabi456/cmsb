@extends('master.layout')

@section('title')
  أعضاء الجمعية
@endsection

@section('active_m')
    active
@endsection

@section('inkh')
    {{ route('pack')}}
@endsection

@section('content')
<div class="projcard-container my-5">
  <h1 class="text-center">أعضاء الجمعية</h1>
  <hr>
    <div class="projcard projcard-yellow arabic-input">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="images/face5.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">ذ. أحمد ياسين</div>
          <div class="projcard-subtitle">الرئيس</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">تعتمد مهام رئيس الجمعية على نوع وغرض الجمعية نفسها. قد يتضمن دور الرئيس تنسيق الاجتماعات والأحداث، وتوجيه الأعضاء والموظفين، وتمثيل الجمعية في المناسبات الرسمية، والعمل على تحقيق أهداف الجمعية ورؤيتها.</div>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
        </div>
      </div>
    </div>
    
    <div class="projcard projcard-yellow arabic-input">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="images/face6.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">ذ. كمال عرفات</div>
          <div class="projcard-subtitle">نائب الرئيس</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">
            تعتمد دور نائب الرئيس على توجهات الجمعية وبنية تنظيمها. قد يساعد نائب الرئيس في إدارة الجمعية وتوجيه أعضائها، وقد يقوم بتنسيق الأنشطة والفعاليات والاجتماعات الداخلية.</div>
          
          <a style="color: black; margin:0em 1.3em 1em 1.5em" href=""><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
          <a style="color: black; margin-left:1.5em" href=""><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
          
          <a style="color: black; margin-left:1.5em" href=""><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
        </div>
      </div>
    </div>

    <div class="projcard projcard-yellow arabic-input">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="images/face1.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">ذ. يونس فاروق</div>
          <div class="projcard-subtitle">الكاتب العام</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">تعتمد مهام رئيس الجمعية على نوع وغرض الجمعية نفسها. قد يتضمن دور الرئيس تنسيق الاجتماعات والأحداث، وتوجيه الأعضاء والموظفين، وتمثيل الجمعية في المناسبات الرسمية، والعمل على تحقيق أهداف الجمعية ورؤيتها.</div>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
        </div>
      </div>
    </div>

    <div class="projcard projcard-yellow arabic-input">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="images/face7.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">ذ. زكرياء الحيان</div>
          <div class="projcard-subtitle"> الأمين العام</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">
            الأمين العام هو المسؤول التنفيذي الرئيسي في الجمعية. يشغل دورًا حيويًا في إدارة وتنظيم أنشطة الجمعية وتنفيذ قرارات مجلس الإدارة أو الهيئة القيادية. يتولى الأمين العام مسؤوليات متعددة ومتنوعة.</div>
             
          
          <a style="color: black; margin:0em 1.3em 1em 1.5em" href=""><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
          <a style="color: black; margin-left:1.5em" href=""><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
          
          <a style="color: black; margin-left:1.5em" href=""><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
        </div>
      </div>
    </div>

    <div class="projcard projcard-yellow arabic-input">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="images/face8.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">ذ. مراد التائب</div>
          <div class="projcard-subtitle">رئيس المستشارين</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">تعتمد مهام رئيس الجمعية على نوع وغرض الجمعية نفسها. قد يتضمن دور الرئيس تنسيق الاجتماعات والأحداث، وتوجيه الأعضاء والموظفين، وتمثيل الجمعية في المناسبات الرسمية، والعمل على تحقيق أهداف الجمعية ورؤيتها.</div>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
          <a style="color: black; margin-left:1.5em" href="{{ route('home') }}"><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
        </div>
      </div>
    </div>

</div>
@endsection
<script>
    // This adds some nice ellipsis to the description:
    document.querySelectorAll(".projcard-description").forEach(function(box) {
        $clamp(box, {clamp: 6});
    });
</script>