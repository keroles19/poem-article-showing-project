@extends('admin.layouts.app')


@section('content')

@section('page_title')فيديوهات
@endsection()


<!-- Main content -->
<section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    <a href="{{url("admin/video/create")}}" class="btn  btn-primary">
                        <span class="fa fa-1x fa-plus">اضافه فيديو جديد</span>
                   </a>
                </h3>
                @include('admin.partials.error')

            @if(count($records))
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>رقم</th>
                        <th>عنوان</th>
                        <th>لينك الفيديو</th>
                        <th>محتوي</th>
                        <th>تعديل</th>
                        <th>حذف</th>

                    </tr>

                    @foreach($records as $record)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$record->title}}</td>
                        <td>{{$record->source}}</td>
                        <td>{{Str::limit($record->body, 50)}}</td>
                        <td><a href="{{url('admin/video/'.$record->id.'/edit')}}"><span class="label label-success">تعديل</span> </a></td>
                        <td>
                            <form action={{url('admin/video/'.$record->id)}} method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn label label-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
@endforeach
                    </tbody></table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        {{$records->links()}}
    @else
        <div class="row" style="padding-top: 10px">
            <div class="col-xs-11">
                <div class="alert alert-info">
                   لايوجد فيديوهات حتي  الان
                </div>
            </div>
        </div>
    @endif

</section>
<!-- /.content -->
@endsection
