<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class settingController extends Controller
{
    //========================   validate  function
    private  function validateAbout($request){
        $rules =[
            "phone"=>"required|Numeric",
            "address"=>"required",
            "education"=>"required",
            "work"=>"required",
            "name"=>"required",
            "hoppy"=>"required",
            "image"=>'image|mimes:png,jpg,jpeg',


        ];
        $message = [
            "phone.required"=>"لابد من كتابه رقم تليفونك",
            "phone.numeric"=>" لابد من كتابه رقم تليفون صحيح",
            "address.required"=>"لابد من كتابه عملك",
            "education.required"=>"لابد من كتابه دراستك",
            "work.required"=>"لابد من كتابه   عمل ",
            "name.required"=>"لابد من كتابه اسمك ",
            "hoppy.required"=>"لابد من كتابه هوياتك"
        ];

        $this->validate($request,$rules,$message);
    }



    public function index()
    {
        $record = About::first();
        return view('admin.abouts.setting',compact('record'));
    }

    public function update(Request $request, $id)
    {

        $this->validateAbout($request);
        $record = About::findOrFail($id);
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
        return redirect('admin\setting')->with('status' , 'تم تعديل بيناتك بنجاح');
    }


}
