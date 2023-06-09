@extends('master.layout')

@section('title')
    من نحن ؟
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('active_a')
    active
@endsection

@section('content')
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding arabic-input my-5">
    <div class="container paddding">
        <div class="row">
            <div class="col-md-8 animate-box mx-4" style="text-align: justify;" data-animate-effect="fadeInLeft">
                <h1>من نحن ؟</h1>
                <br>
                <p style="font-size: large; word-spacing: 2px;">
                    نحن جمعية مغربية متخصصة وملتزمة بالدفاع عن شؤون الشركات والعمال في قطاع المجوهرات في المغرب. نهدف إلى تعزيز وحماية حقوق المشغلين والعمال في هذه الصناعة الحساسة والمتنوعة
                </p>
                <p style="font-size: large; word-spacing: 2px;">
                    تعتبر المجوهرات من أهم القطاعات الاقتصادية في المغرب، حيث تلعب دوراً رئيسياً في توفير فرص العمل وتعزيز التنمية الاقتصادية. إلا أنها تواجه تحديات عديدة تؤثر على الشركات والعمال فيها. ومن بين هذه التحديات، يمكن ذكر تنامي المنافسة، القوانين واللوائح المعقدة، ظروف العمل غير اللائقة، والاحتكار في بعض الأحيان.
                </p>
                <br>
                <p style="font-size: large; word-spacing: 2px;">
                    لذا، فإن جمعيتنا تعمل جاهدة لحماية مصالح الشركات والعمال في قطاع المجوهرات. نقوم بتوفير الدعم والمشورة القانونية للشركات، بغية مساعدتها في الالتزام بالقوانين واللوائح المحلية والدولية المتعلقة بالصناعة. كما نساهم في تعزيز الشفافية والمسؤولية المجتمعية للشركات، بهدف بناء سمعة قوية ومستدامة.
                </p>
                <p style="font-size: large; word-spacing: 2px;">
                    من جانب آخر، نسعى لتحسين ظروف العمل للعمال في هذا القطاع. نعمل على ضمان احترام حقوق العمال وسلامتهم وصحتهم في بيئة العمل. كما نعزز التوعية والتدريب في مجالات مثل حقوق العمال والسلامة والصحة المهنية، بهدف تعزيز مستوى المهارات ورفع مستوى الجودة في الصناعة.
                </p>
                <p style="font-size: large; word-spacing: 2px;">
                    بوجودنا كجمعية، نسعى أيضًا للعمل على تعزيز التعاون والتواصل بين الشركات والعمال والجهات المعنية الأخرى، مثل الحكومة والمؤسسات الرسمية والمنظمات غير الحكومية. نعمل على توفير منصة للحوار والتبادل المثمر، بهدف تحقيق تحسين مستمر في قطاع المجوهرات وتعزيز الاستدامة الاقتصادية والاجتماعية.
                </p>
                <p style="font-size: large; word-spacing: 2px;">
                    باختصار، نحن جمعية تدافع عن شؤون الشركات والعمال في قطاع المجوهرات في المغرب، ونعمل بكل اجتهاد على تعزيز وحماية حقوقهم وتحسين ظروفهم. نسعى لبناء صناعة مجوهرات قوية ومستدامة، تسهم في رفع مستوى الاقتصاد وتعزيز رفاهية جميع أفراد المجتمع.
                </p>
                <br>
                <h3>الأفكار الأساسية</h3>
                <br>
                <ul>
                    <li>حماية حقوق الشركات في قطاع المجوهرات.</li>
                    <br>
                    <li>تحسين ظروف العمل وضمان سلامة وصحة العمال.</li>
                    <br>
                    <li>تعزيز التواصل والتعاون بين الشركات والعمال وجهات المعنية الأخرى.</li>
                    <br>
                    <li>تعزيز المسؤولية المجتمعية للشركات في المجوهرات.</li>
                    <br>
                    <li>توفير الدعم والإرشاد القانوني للشركات لتحقيق المطابقة والشفافية.</li>
                </ul>
            </div>
            <div class="col-md-3 animate-box mx-4" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">الأحداث القريبة</div>
                </div>
            @foreach($data as $item)
            <?php if ($item['statu'] == 'قريب') { ?>
            <div class="row pb-3">
                <div class="col-5 align-self-center">
                    <a href="{{route('single_news', $item['item']->id)}}"><img src="{{ asset('akhbar/' . $item['item']->image) }}" alt="img" class="fh5co_most_trading"/></a>
                </div>
                <div class="col-7 paddding">
                    <a style="color: black" href="{{route('single_news', $item['item']->id)}}"><div class="most_fh5co_treding_font">{{ $item['item']->title }}</div></a>
                    <div class="most_fh5co_treding_font_123">{{ $item['date_ar'] }}</div>
                </div>
            </div>
            <?php } ?>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection