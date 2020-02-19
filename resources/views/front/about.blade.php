
@extends('front.layouts.app')

@section('content')

<!-- start section about me -->
<section class="blood-donation footer-bottom">
    <div class="wow bounceInDown about-me" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInDown;">
        <div class="container">
            <div class="shadow about-main row">
                <div class="col col-lg-6 col-12 order-2">
                    <div class="information">
                        <p><span>الاسم: </span>{{$setting->name}}</p>
                        <p><span>محل الاقامة: </span>{{$setting->address}}</p>
                        <p><span>تاريخ الميلاد: </span> {{$setting->date_of_birth}}</p>
                        <p><span>يدرس: </span>{{$setting->education}}ا</p>
                        <p><span>يهوي: </span>{{$setting->hoppy}}ة</p>
                        <p><span>اعماله:</span>{{$setting->work}}</p>
                        <p>
                                <span class="icon">
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$setting->phone}}"><i class="fa  fa-whatsapp"></i></a>
                                    <a target="_blank" href="https://twitter.com/{{$setting->tw_link}}"><i class="fa  fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/{{$setting->fb_page_link}}" ><i class="fa fa-users"></i></a>
                                   <a target="_blank" href="https://www.facebook.com/{{$setting->fb_link}}"><i class="fa fa-facebook"></i></a>
                                </span>
                        </p>
                    </div>
                </div>
                <div class="col col-lg-6 col-12 p-0 order-lg-2 order-1">
                    <img class ="img-aboud" src="{{asset('images/'.$setting->image)}}">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start section about me///////////// -->

@endsection
