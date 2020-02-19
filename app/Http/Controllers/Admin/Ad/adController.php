<?php

namespace App\Http\Controllers\Admin\Ad;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdController extends Controller
{
    //========================   validate  function
    private  function validateAd($request){
        $rules =[

            "title"=>"required",
            "body"=>"required|max:255",
            "image"=>'required|image|mimes:png,jpg,jpeg',


        ];
        $message = [
            "title.required"=>"لابد من كتابه عنوان",
            "body.required"=>"لابد من كتابه محتوي",
            "education.required"=>"لابد من كتابه دراستك",
            "image.required"=>"لابد من وجود صوره ",

        ];

        $this->validate($request,$rules,$message);
    }


    public function index()
    {


        $records = Ad::paginate(20);
        return view('admin.ads.index',compact('records'));
    }


    public function create()
    {
        return view("admin.ads.create");
    }

    public function store(Request $request)
    {

        $this->validateAd($request);

        $filename = saveImage($request);
        $ad = Ad::create($request->all());
        $ad->image = $filename;
        $ad->save();
        return redirect('admin\ad')->with('status' , 'تم انشاء اعلان بنجاح');

    }
    public function edit($id)
    {
        $record = Ad::findOrFail($id);
        return view('admin.ads.edit',compact('record'));
    }


    public function update(Request $request, $id)
    {

        $rules =[

            "title"=>"required",
            "body"=>"required",
            "image"=>'required|image|mimes:png,jpg,jpeg'.$id,
        ];

        $record = Ad::findOrFail($id);
        if($record){
            global  $filename;
            $filename= $record->image;
            if($request->hasFile('image')){
                if($record->image && file_exists('images/'.$record->image)){
                    File::delete('images/'.$record->image);
                    $filename = saveImage($request);

                }
                else{
                    $filename = saveImage($request);
                }

            }

            $record->update($request->all());
            $record->image = $filename;
            $record->save();
            return redirect('admin\ad')->with('status' , 'تم تعديل اعلان');

        }
        else{
            return redirect('admin/ad/'.$id.'/edit')->with('error' , 'حاول مره اخري ');

        }

    }


    public function destroy($id)
    {
        $record = Ad::findOrFail($id);
        $path = 'images/'.$record->image;

        if($record->delete()){
            if(file_exists($path)){
                File::delete($path);
            }
            return redirect('admin/ad')->with('status' , 'تم حذف اعلان ');
        }
        else{
            return redirect('admin/ad/'.$id)->with('error' , 'خطاء حاول  مره اخري');
        }

    }



}
