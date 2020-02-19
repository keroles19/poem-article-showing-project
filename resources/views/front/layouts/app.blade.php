<!DOCTYPE html>
<html lang="arb">

<head>
    <meta charset="utf-8">
    <meta name="description" content="الموقع الخاص بالشاعر عماد ملاك ويوجد به معظم القصائد الخاصة به بجانب بعض المقالات">
    <meta name="author" content="Emad Malak">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{asset('images/shortcut.jpg')}}" type="image/x-icon">
    <title>الشاعر عماد ملاك</title>
    <link href="{{asset('front/fonts/font.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/placeholder-loading.min.css')}}"/>
</head>
<body>
<!-- start header -->
<header>
    <!-- start navbar -->
    <nav class=" navbar bg-light navbar-light ">
        <button class="navbar-toggler icon-color collapsed" type="button" data-toggle="collapse"
                data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>
        <h1 class="h4 nav-logo">الشاعر عماد ملاك</h1>
        <div class="navbar-collapse collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link hvr-rotate {{ Request::is('/') ? 'active' : '' }} " href="{{url('/')}}">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-rotate {{ Request::is('poems') ? 'active' : '' }} " href="{{url('poems')}}">القصائد المقروئة</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link hvr-rotate {{ Request::is('articles') ? 'active' : '' }} " href="{{url('articles')}}">المقالات</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link hvr-rotate {{ Request::is('videos') ? 'active' : '' }} " href="{{url('videos')}}">القصائد المسموعة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  hvr-rotate {{ Request::is('about') ? 'active' : '' }}" href="{{url('about')}}">معلومات عني</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- end header /////////////////////// -->
@yield('content')
<!-- start footer -->
<footer>
    <div class="footer-end">
        <div class="container">
            <div class="row">
                <div class="  col  col-sm-4  col-12">
            <span class="icon">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone={{$setting->phone}}"><i class="fa fa-whatsapp"></i></a>
                    <a target="_blank" href="https://twitter.com/{{$setting->tw_link}}"><i class="fa  fa-twitter"></i></a>
                     <a target="_blank" href="https://www.facebook.com/{{$setting->fb_page_link}}" ><i class="fa fa-users"></i></a>
                    <a target="_blank" href="https://www.facebook.com/{{$setting->fb_link}}"><i class="fa fa-facebook"></i></a>
                </span>
                </div>
                <div class="col col-sm-8 col-12">
                    <span>جميع الحقوق محفوظة  <span style="color:red"><a title="keroles atef" target="_blank" href="https://www.facebook.com/kerolesatef200"> K </a> &
                        <a title="mina ezat" target="_blank" href="https://www.facebook.com/mina.ezat.5458"> M </a>
                        </span>&ThinSpace; &copy; &ThinSpace; 2020 &ThinSpace;</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<section class="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</section>
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/slick.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
</body>

<!-- back end  : keroles atef sadek
     email  : kerolesatef200@gmail.com
     email2 :keroles_atef@outlook.com
     phone  : 01060402713
     ||||||||||||||||||||||||||||||||||||||
     front : mina ezat
     phone : 01097446854

 ->


</html>
