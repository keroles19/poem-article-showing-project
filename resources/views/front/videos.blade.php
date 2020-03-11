
@extends('front.layouts.app')

@section('content')


    <section class="body-home footer-bottom">
        <div class="background-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">القصائد المسموعة</li>
                    </ol>
                </nav>
                <div class="row ">
                    @foreach($records as $record)
                    <div class=" he-div col col-md-4 col-sm-6">
                        <iframe class="video" width="360" height="230" src="{{$record->source}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <details class="ad-v ">
                            <summary>{{$record->title}}</summary>
                             {{$record->body}}
                              </details>
                    </div>
                        @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{$records->links()}}
                </div>
            </div>
        </div>

    </section>
 <style>
     nav{background: none}
 </style>

    @endsection
