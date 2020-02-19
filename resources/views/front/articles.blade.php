
@extends('front.layouts.app')

@section('content')
    <section class="body-home article-page">
        <div class="background-section">
            <div class="container">
                <div class="row">
                    @foreach($records as $record)
                    <div class="col col-md-4 col-sm-6 col-12">
                        <div class=" m-2 card">
                            <div class="card-body">
                                <h5 class="card-title">{{$record->title}}</h5>
                                <p class="card-text">
                                    {!! Str::limit($record->body,450) !!}
                                 </p>
                                <a href="article/{{$record->id}}" class="btn btn-primary bu-style">قراءة المزيد</a>
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
