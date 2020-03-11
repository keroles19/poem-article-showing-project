@extends('admin.layouts.app')
@section('page_title')
    التعليقات
@endsection()

@section('content')

<!-- Main content -->
<section class="content">
        <div class="box">
            <div class="box-header">
                @if(count($records))
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>رقم</th>
                        <th>عنوان القصيده</th>
                        <th>الاسم</th>
                        <th>الايميل</th>
                        <th>التعليق</th>
                        <th>الحاله</th>
                        <th>حذف</th>
                        <th>عرض</th>

                    </tr>
                    @foreach($records as $record)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{\Str::limit($record->title, 30)}}</td>
                            <td>{{$record->name}}</td>
                            <td>{{$record->email}}</td>
                            <td> {{\Str::limit($record->comment,240)}}
                            </td>
                            <td>  <form action="{{url('admin/comment/status/'.$record->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class= "btn btn-xs {{activeStatus($record->status)[0]}} ">
                                        {{ activeStatus($record->status)[1]}}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <button type="button" data-comment-id="{{ $record->id }}" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteComment">
                                    حذف
                                </button>

                            <td>
                                <button type="button" data-show-id="{{ $record->id }}" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#showComment">
                                    عرض
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody></table>
            </div><!-- /.box-body -->
            {{$records->Links()}}
        </div><!-- /.box -->
    @else
        <div class="row" style="padding-top: 10px">
            <div class="col-xs-11">
                <div class="alert alert-info">
                    لا يوجد تعليقات حتي  الان
                </div>
            </div>
        </div>

    @endif

</section>
<!-- /.content -->

<!-- /.model -->
<!-- Modal delete comment -->
<div class="modal fade" id="deleteComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-10">
                        <p> هل تريد حذف هذا التعليق</p>
                    </div>
                    <div class="col-xs-2 float-right">
                        <button  class="btn btn-sm btn-secondary" data-dismiss="modal">الغاء</button>
                    </div>

                </div>
                <form id="deleteCommentForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn label label-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- /.model -->
<div class="modal fade" id="showComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="commentData">
            </div>
        </div>
    </div>
</div>




@endsection
