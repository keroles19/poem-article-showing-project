@extends('admin.layouts.app')



@section('page_title')
    فيديوهاتي
@endsection()

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
        <li class="active">فيديوهاتي </li>
    </ol>
@endsection()

@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">اضافه فيديو جديد</h3>
                @include('admin.partials.error')
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('admin/video')}}" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">العنوان</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" name="title" id="inputEmail3" placeholder="اكتب عنوان للمقال">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">لينك الفيديو</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" name="source" id="inputEmail3" placeholder=" لينك الفيديو ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">محتوي امقال</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="body" rows="13" placeholder="المحتوي"></textarea>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-block">انشاء</button>
                </div><!-- /.box-footer -->
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection

