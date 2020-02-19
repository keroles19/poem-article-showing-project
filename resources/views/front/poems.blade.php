
@extends('front.layouts.app')

@section('content')
<section class="poems-page body-home footer-bottom">
    <div class="background-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">القصائد المقروئة</li>
                </ol>
            </nav>
            <div class="row">
                @foreach($records as $record)
                <div class=" col-lg-4 col-md-6 col-12">
                    <div class="card poems-card">
                        <div class="card-body">
                            <h5 class="card-title">{{Str::limit($record->title,20)}}</h5>
                            <div class="card-text">{!! Str::limit($record->body,250) !!}</div>
                            <a href="{{url('poem/'.$record->id)}}">
                                <button class="bu-style">قراءة المزيد </button>
                            </a>
                        </div>
                    </div>
                </div>



                    @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{$records->links()}}
            </div>
        </div>
    </div>
</section>
@endsection


