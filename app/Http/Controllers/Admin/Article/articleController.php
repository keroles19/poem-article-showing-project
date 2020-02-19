<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;


class articleController extends Controller
{
    //========================   validate  function
    private  function validateArticle($request){
        $rules =[

            "title"=>"required",
            "body"=>"required",


        ];
        $message = [
            "title.required"=>"لابد من كتابه عنوان",
            "body.required"=>"لابد من كتابه محتوي",
        ];

        $this->validate($request,$rules,$message);
    }


    public function index()
    {


        $records = Article::paginate(20);
        return view('admin.articles.index',compact('records'));
    }


    public function create()
    {
        return view("admin.articles.create");
    }

    public function store(Request $request)
    {

        $this->validateArticle($request);

        $ad = Article::create($request->all());
        return redirect('admin\article')->with('status' , 'تم انشاء مقال بنجاح');

    }
    public function edit($id)
    {
        $record = Article::findOrFail($id);
        return view('admin.articles.edit',compact('record'));
    }


    public function update(Request $request, $id)
    {

        $this->validateArticle($request);
        $record = Article::findOrFail($id);
        if($record){

            $record->update($request->all());
            return redirect('admin/article')->with('status' , 'تم تعديل مقال');

        }
        else{
            return redirect('admin/article/'.$id.'/edit')->with('error' , 'حاول مره اخري ');

        }

    }


    public function destroy($id)
    {
        $record = Article::findOrFail($id);

        if($record->delete()){
            return redirect('admin/article')->with('status' , 'تم حذف مقال ');
        }
        else{
            return redirect('admin/article/'.$id)->with('error' , 'خطاء حاول  مره اخري');
        }

    }



}
