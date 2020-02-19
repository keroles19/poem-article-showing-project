
@extends('front.layouts.app')

@section('content')

<section class="body-home article-page footer-bottom">
    <div class="background-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="{{url('articles')}}">المقالات</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{$record->title}}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col col-12">
                    <div class="mt-2 card">
                        <div class="card-body">
                            <h5 class="card-title">{{$record->title}}</h5>
                            <p class="card-text"> {!!  $record->body!!}</p>

                        </div>
                        <hr>
                        <div class="comment">
                            @if(count($record->comment))
                                <h3 class="py-3 px-4"> يوجد {{count($record->comment)}} تعليقا</h3>

                                @foreach($record->comment as $comment)
                                    <div class="text-comment">
                                        <h2>{{$comment->name}}</h2>
                                        <h5> {{$comment->comment}} </h5>
                                        @endforeach
                                    </div>
                                    @else
                                        <div class="text-comment">
                                            <p>كن اول تعليق</p>
                                        </div>
                                    @endif
                                    <h3 class="pt-4 p-3" id="com">اترك تعليقا </h3>
                                    <div id="message" style="color: red;margin-right: 3px"></div>
                                    <div class="row" style="margin-right:4px">
                                        <div class="col-md-9 col-12">
                                            <form  class="pb-2" id="form_comment">
                                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <input type="hidden" id="record_id" value="{{ $record->id }}">
                                                <div class="form-group">
                                                    <label>اسمك</label>
                                                    <input  type="text" id="com_name" name="name" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label >ايملك الشخصي </label>
                                                    <input type="email" required  id="com_email" name="email" class="form-control">
                                                    <small id="emailHelp" class="form-text text-muted">لم نظهر ايملك الخاص هنا </small>
                                                </div>
                                                <div class="form-group">
                                                    <label  for="exampleFormControlTextarea1">تعليقك</label>
                                                    <textarea name="comment" required maxlength="200" id="com_body" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                                </div>
                                                <button type="submit"  id="sub_comment"  class="btn btn-primary">ارسال </button>
                                            </form>
                                        </div>

                                    </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
