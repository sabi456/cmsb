@extends('master.layout')

@section('title')
الرئيسية
@endsection

@section('active_h')
    active
@endsection

@section('inkh')
    {{ route('pack')}}
@endsection

@section('content')
    <div class="container-fluid paddding mb-5 my-1">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="images/news.jpg" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font" style="margin-top: 1em;">
                    <div><a href="single.html" class="fh5co_good_font">أخبار</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="images/actif.jpg" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;ماي 31,2023 </a></div>
                            <div class=""><a href="single.html" class="fh5co_good_font_2">أنشطة</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="images/li97.jpg" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;ماي 31,2023</a></div>
                            <div class=""><a href="single.html" class="fh5co_good_font_2">لقاءات</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="images/li97.jpg" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;ماي 31,2023</a></div>
                            <div class=""><a href="single.html" class="fh5co_good_font_2">برامج صحفية</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="images/people.jpg" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct
                                28,2017 </a></div>
                            <div class=""><a href="single.html" class="fh5co_good_font_2"> After all is said and done, more is said... </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">المستجدات</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="images/meet1.jpg" alt=""
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1 arabic-input">
                        <a href="single.html" class="text-white">الجمع العام لكافة المنخرطين</a>
                        <div class="fh5co_latest_trading_date_and_name_color">01 - ماي - 2023</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="images/travel1.jpg" alt=""
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1 arabic-input">
                        <a href="single.html" class="text-white">رحلة إلى جبل تبقال</a>
                        <div class="fh5co_latest_trading_date_and_name_color">05 - ماي - 2023</div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                <img src="images/ariel-lustre-208615.jpg" alt=""/>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class="">The top 10 funniest videos on YouTube </span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_2" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                <img src="images/39-324x235.jpg" alt=""/></div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2" id="play-video_2">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class="">The top 10 embedded YouTube videos this month</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_3" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                <img src="images/joe-gardner-75333.jpg" alt=""/></div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3" id="play-video_3">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_4" width="100%" height="200"
                                        src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                <img src="images/vil-son-35490.jpg" alt=""/>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4" id="play-video_4">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                <span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
#### EDIT
I built this slider when I first started to learn JS, you can rebuild it with more readable, simple and less code, I'm too lazy to update it, sorry :) 
-->

<!-- 
	use the left and right arrow keys on your keyboard or just swipe left and right on your smart phone to interact with the slider
-->

<section id="testim" class="testim arabic-input">
    <hr>
    <h1 class="text-center">أعضاء الجمعية</h1>
    <!--         <div class="testim-cover"> -->
                <div class="wrap">
    
                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li><!--
                        --><li class="dot"></li><!--
                        --><li class="dot"></li><!--
                        --><li class="dot"></li><!--
                        --><li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                        
                        <div class="active">
                            <div class="img"><img src="images/face1.jpg" alt=""></div>
                            <h2>ذ. أحمد ياسين</h2>
                            <p>هناك العديد من الفوائد في تعلم اللغة العربية. إنها تفتح الأبواب لفهم ثقافة مختلفة وتعزز التواصل مع الناس من مختلف البلدان الناطقة بالعربية. بالإضافة إلى ذلك، تعتبر اللغة العربية لغة قرآنية مهمة</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="images/face2.jpg" alt=""></div>
                            <h2>ذ. كمال عرفات</h2>
                            <p>هناك العديد من الفوائد في تعلم اللغة العربية. إنها تفتح الأبواب لفهم ثقافة مختلفة وتعزز التواصل مع الناس من مختلف البلدان الناطقة بالعربية. بالإضافة إلى ذلك، تعتبر اللغة العربية لغة قرآنية مهمة</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="images/face3.jpg" alt=""></div>
                            <h2>ذ. مراد التائب</h2>
                            <p>هناك العديد من الفوائد في تعلم اللغة العربية. إنها تفتح الأبواب لفهم ثقافة مختلفة وتعزز التواصل مع الناس من مختلف البلدان الناطقة بالعربية. بالإضافة إلى ذلك، تعتبر اللغة العربية لغة قرآنية مهمة</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="images/face4.jpg" alt=""></div>
                            <h2>ذ. يونس فاروق</h2>
                            <p>هناك العديد من الفوائد في تعلم اللغة العربية. إنها تفتح الأبواب لفهم ثقافة مختلفة وتعزز التواصل مع الناس من مختلف البلدان الناطقة بالعربية. بالإضافة إلى ذلك، تعتبر اللغة العربية لغة قرآنية مهمة</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="images/face5.jpg" alt=""></div>
                            <h2>ذ. زكرياء كاتب</h2>
                            <p>هناك العديد من الفوائد في تعلم اللغة العربية. إنها تفتح الأبواب لفهم ثقافة مختلفة وتعزز التواصل مع الناس من مختلف البلدان الناطقة بالعربية. بالإضافة إلى ذلك، تعتبر اللغة العربية لغة قرآنية مهمة</p>                    
                        </div>
    
                    </div>
    
                </div>
    <!--         </div> -->
        </section>
    
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    
    
@endsection