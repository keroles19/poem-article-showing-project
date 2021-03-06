@extends('admin.layouts.app')



@section('page_title')
    اعلاناتي
@endsection()

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
        <li class="active">تعديل اعلان</li>
    </ol>
@endsection()

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">تعديل اعلان</h3>
                @include('admin.partials.error')
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('admin/ad/'.$record->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2  imgUp" style=" margin-right:30% ;">
                                <div class="imagePreview" @if($record->image) style="background-image: url('{{asset('images/'.$record->image)}}')"  @endif></div>
                                <label class="btn btn-primary">
                                    تعديل  صوؤه الاعلان
                                <input type="file" value="{{$record->image}}" name="image"  accept="image/png,image/jpg,image/jpeg" class="uploadFile img" style="width: 0px;height: 0px;overflow: hidden;">
                                </label>
                            </div><!-- col-2 -->
                        </div><!-- row -->
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">العنوان</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" value="{{$record->title}}" name="title" id="inputEmail3" placeholder="اكتب عنوان">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">محتوي الاعلان</label>
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


