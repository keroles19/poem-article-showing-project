@extends('admin.layouts.app')



@section('page_title')
    فيديوهاتي
@endsection()

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
        <li class="active">تعديل فيديو</li>
    </ol>
@endsection()

@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">تعديل فيديو</h3>
                @include('admin.partials.error')
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('admin/video/'.$record->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">العنوان</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" value="{{$record->title}}" name="title" id="inputEmail3" placeholder="اكتب عنوان">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">اللينك</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" value="{{$record->source}}" name="source" id="inputEmail3" placeholder="اكتب لينك لفيديو">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">محتوي الفيديو</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="body" rows="13" placeholder="المحتوي">{{$record->body}}"</textarea>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-block">حفظ التعديل</button>
                </div><!-- /.box-footer -->
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection


