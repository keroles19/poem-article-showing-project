@extends('admin.layouts.app')
@section('page_title')
    معلوماتي
@endsection()
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
        <li class="active">معلوماتي</li>
    </ol>
@endsection()

@section('content')

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">تعديل معلوماتي</h3>
            @include('admin.partials.error')
        </div><!-- /.box-header -->
        <!-- form start -->
        <div class="box-body ">
            <form class="form-horizontal"action="{{url('admin/setting/'.$record->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2  imgUp" style=" margin-right:30% ;">
                                <div class="imagePreview" @if($record->image) style="background-image: url('{{asset('images/'.$record->image)}}')"  @endif></div>
                                <label class="btn btn-primary">
                                    تعديل الصوره الشخصيه<input type="file" name="image"  accept="image/png,image/jpg,image/jpeg" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
                                </label>
                            </div><!-- col-2 -->
                        </div><!-- row -->
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">الاسم</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$record->name}}" class="form-control" name="name" id="inputEmail3" placeholder="اكتب اسمك">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">رقم التليفون</label>
                        <div class="col-sm-10">
                            <input type="text"  value="{{$record->phone}}" class="form-control" name="phone"  placeholder="اكتب رقم تليفونك">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">العنوان</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$record->address}}" class="form-control" name="address"  placeholder="اكتب عنوانك ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">تاريخ الميلاد</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$record->date_of_birth}}" name="date_of_birth"  placeholder="اكتب تاريخ ميلادك ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">دراستك</label>
                        <div class="col-sm-10">
                            <textarea name="education"  class="form-control" rows="3" placeholder="دراستك">{{$record->education}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">هواياتك</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="hoppy" rows="3" placeholder="هواياتك">{{$record->hoppy}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">عملك</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="work" rows="3" placeholder="عملك">{{$record->work}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label"> الفيس بوك</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$record->fb_link}}" name="fb_link"  placeholder="الصفحه الشخصيه ف الفيس بوك ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label"> الصفحه</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$record->fb_page_link}}" name="fb_page_link"  placeholder="الصفحه العامه ف الفيس بوك ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">تويتر</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$record->tw_link}}" name="tw_link"  placeholder="تويتر">
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info btn-block">حفظ التعديل</button>
                </div><!-- /.box-footer -->
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

