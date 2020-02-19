<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;


class videoController extends Controller
{
    //========================   validate  function
    private  function validateVideo($request){
        $rules =[

            "title"=>"required",
            "source"=>"required",
            "body"=>"required",


        ];
        $message = [
            "title.required"=>"لابد من كتابه عنوان",
            "source.required"=>"لابد من وجود اللينك",
            "body.required"=>"لابد من كتابه محتوي",
        ];

        $this->validate($request,$rules,$message);
    }


    public function index()
    {


        $records = Video::paginate(20);
        return view('admin.videos.index',compact('records'));
    }


    public function create()
    {
        return view("admin.videos.create");
    }

    public function store(Request $request)
    {

        $this->validateVideo($request);

        $ad = Video::create($request->all());
        return redirect('admin\video')->with('status' , 'تم انشاء مقال بنجاح');

    }
    public function edit($id)
    {
        $record = Video::findOrFail($id);
        return view('admin.videos.edit',compact('record'));
    }


    public function update(Request $request, $id)
    {

        $this->validateVideo($request);
        $record = Video::findOrFail($id);
        if($record){

            $record->update($request->all());
            return redirect('admin/video')->with('status' , 'تم تعديل مقال');

        }
        else{
            return redirect('admin/video/'.$id.'/edit')->with('error' , 'حاول مره اخري ');

        }

    }


    public function destroy($id)
    {
        $record = Video::findOrFail($id);

        if($record->delete()){
            return redirect('admin/video')->with('status' , 'تم حذف مقال ');
        }
        else{
            return redirect('admin/video/'.$id)->with('error' , 'خطاء حاول  مره اخري');
        }

    }



}
