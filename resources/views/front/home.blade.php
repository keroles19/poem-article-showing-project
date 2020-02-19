@extends('front.layouts.app')

@section('content')
<!-- start carousel -->
<section class=" slider-boot ">
    <div class="wow bounceInLeft  bd-example" data-wow-duration="3s">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                @foreach($ads as $ad)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->iteration-1}}"
                 @if($loop->iteration == 1)
                 class="active"
                    @endif
                ></li>
                    @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($ads as $ad)
                <div class="carousel-item @if($loop->iteration == 1) active @endif">
                    <img src="{{asset('images/'.$ad->image)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$ad->title}}</h5>
                        <p>{{$ad->body}}</p>
                    </div>
                </div>
                    @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- end carousel//////// -->
<!-- start section poems -->
<section class="poems wow bounceInRight " data-wow-duration="2s">
    <div class="container">
        <h2>القصائد</h2>
        <div class="multiple-item">
            @foreach($poems as $poem)
            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$poem->title}}</h5>
                        <div class="card-text">
                            <p>{!!\Str::limit($poem->body,600)!!}</p>                        </div>
                        <button class="bu-style"><a href="{{url('poem/'.$poem->id)}}">قراءة المزيد</a> </button>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <div class="icon">
            <span class="next-2"><i class="fa fa-chevron-left"></i></span>
            <span class="prev-2"><i class="fa fa-chevron-right"></i></span>
            <br>
            <button class="bu-style"> <a href="{{url('poems')}}">كل القصائد</a> </button>
        </div>
    </div>

</section>
<!-- end section poems ////////////-->


<section class=" wow bounceInUp articls" data-wow-duration="2s">
    <div class="container">
    <span  class="mt-4 float-right" >
      <span class="next"><i class="fa fa-chevron-left"></i></span>
      <span class="prev"><i class="fa fa-chevron-right"></i></span>
      </span>
        <h2 class="" >المقالات</h2>
        <hr>
        <div class="multiple-items">
                     @foreach($articles as $article)
                            <div class="item">
                                <div class=" card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$article->title}}</h5>
                                        <div class="card-text">
                                            <p>{!!\Str::limit($article->body,600)!!}</p>
                                        </div>
                                        <a href="{{url('article/'.$article->id)}}" class="btn btn-primary bu-style">قراءة المزيد</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

        </div>
        <a href={{url('articles')}}><button class="mt-3 bu-style more-btn"> المزيد</button></a>

    </div>
</section>

<!-- end section article -->





<!-- start section video////////// -->
<section class="body-home wow bounceInRight " data-wow-duration="2s">
    <div class=" background-section">
        <div class="container">
            <div class="row" id="content_load">
                <!-- on video -->
{{--                @foreach($videos as $video)--}}
{{--                <div class=" he-div col col-md-4 col-sm-6 col-12">--}}
{{--                    <iframe  class="video" width="360" height="230" src="{{$video->source}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    <details class="ad-v ">--}}
{{--                        <summary>{{$video->title}}ي</summary>--}}
{{--                            {{$video->body}}--}}
{{--                        </details>--}}
{{--                </div>--}}
{{--                @endforeach--}}
                    <!-- end video -->

            </div>
            <a href="{{url('videos')}}"><button class="mt-3 bu-style more-btn"> كل الفيديوهات </button></a>
        </div>

    </div>

</section>


<!-- end section video////////// -->
    @endsection
