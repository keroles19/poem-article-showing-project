<?php

namespace App\Http\Controllers\Admin\Poem;

use App\Http\Controllers\Controller;
use App\Models\Poem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class poemController extends Controller
{
    //========================   validate  function
    private  function validatePoem($request){
        $rules =[

            "title"=>"required",
            "body"=>"required",
//            "image"=>'required|image|mimes:png,jpg,jpeg',


        ];
        $message = [
            "title.required"=>"لابد من كتابه عنوان",
            "body.required"=>"لابد من كتابه محتوي",
            "education.required"=>"لابد من كتابه دراستك",
//            "image.required"=>"لابد من وجود صوره ",

        ];

        $this->validate($request,$rules,$message);
    }


    public function index()
    {


        $records = Poem::paginate(20);
        return view('admin.poems.index',compact('records'));
    }


    public function create()
    {
        return view("admin.poems.create");
    }

    public function store(Request $request)
    {

        $this->validatePoem($request);

        //$filename = saveImage($request);
        $ad = Poem::create($request->all());
        //$ad->image = $filename;
        //$ad->save();
        return redirect('admin\poem')->with('status' , 'تم انشاء اعلان بنجاح');

    }
    public function edit($id)
    {
        $record = Poem::findOrFail($id);
        return view('admin.poems.edit',compact('record'));
    }


    public function update(Request $request, $id)
    {

        $rules =[

            "title"=>"required",
            "body"=>"required",
           // "image"=>'required|image|mimes:png,jpg,jpeg|max:1999'.$id,
        ];

        $record = Poem::findOrFail($id);
        if($record){
//            global  $filename;
//            $filename= $record->image;
//            if($request->hasFile('image')){
//                if($record->image && file_exists('images/'.$record->image)){
//                    File::delete('images/'.$record->image);
//                    $filename = saveImage($request);
//
//                }
//                else{
//                    $filename = saveImage($request);
//                }
//
//            }

            $record->update($request->all());
            //$record->image = $filename;
            //$record->save();
            return redirect('admin\poem')->with('status' , 'تم تعديل اعلان');

        }
        else{
            return redirect('admin/poem/'.$id.'/edit')->with('error' , 'حاول مره اخري ');

        }

    }


    public function destroy($id)
    {
        $record = Poem::findOrFail($id);
        //$path = 'images/'.$record->image;

        if($record->delete()){
           // if(file_exists($path)){
            //    File::delete($path);
            return redirect('admin/poem')->with('status' , 'تم حذف اعلان ');

        }

        else{
            return redirect('admin/poem/'.$id)->with('error' , 'خطاء حاول  مره اخري');
        }

    }



}
