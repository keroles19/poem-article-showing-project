@extends('admin.layouts.app')

@section('page_title')
    الرئيسيه
    @endsection
@inject('comments','App\Models\Comment')


@section('content')

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{count($articles)}}</h3>
                        <p>مقال</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/article')}}" class="small-box-footer">اطلع عليهم  <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>{{count($poems)}}</h3>
                        <p>قصيده</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-paperclip"></i>
                    </div>
                    <a href="{{url('admin/poem')}}" class="small-box-footer">اطلع عليهم  <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{count($videos)}}</h3>
                        <p>فيديو</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-video-camera"></i>
                    </div>
                    <a href="{{url('admin/video')}}" class="small-box-footer">اطلع عليهم  <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-fuchsia">
                    <div class="inner">
                        <h3>{{count($ads)}}</h3>
                        <p>اعلان</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-adn"></i>
                    </div>
                    <a href="{{url('admin/ad')}}" class="small-box-footer">اطلع عليهم  <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{count($comments::all())}}</h3>
                        <p>تعليق</p>
                    </div>
                    <div class="icon">
                        <i class="fa  fa-comment"></i>
                    </div>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->

    </section>

    @endsection
