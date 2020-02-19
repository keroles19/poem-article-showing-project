<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Poem;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    public function index(){
        return view('front.home');
    }
    public function about(){
    return view('front.about');
}

    public function poems(){
        $records = Poem::paginate(6);
        return view('front.poems',compact('records'));
    }
    public function poem($id){
        $record = Poem::findOrfail($id);
        return view('front.poem',compact('record'));
    }
    public function articles(){
        $records = Article::paginate(6);
        return view('front.articles',compact('records'));
    }
    public function article($id){
        $record = Article::findOrfail($id);
        return view('front.article',compact('record'));
    }
    public function videos(){
        $records = Video::paginate(12);
        return view('front.videos',compact('records'));
    }
    private function createComment($request,$record){
        $rules =[
            "name"=>"required|max:90|string",
            "email" => "required|email",
            "comment" => "required|max:255|string"
        ];
        $message = [
            "name.required" => "الاسم لابد ان يكن موجود",
            "email.required" => "الايميل لابد ان يكن موجود",
            "comment.required" => " برجاء كتابه كومنت",
        ];

        $this->validate($request,$rules,$message);
        $record->comments()->create($request->all());
            return $record;

    }
    public function commentP(Request $request){
        $record = Poem::findOrFail($request->record_id);
        $this->createComment($request , $record);
        if($record){
            return responseJson('1','success');
        }
    }
    public function commentA(Request $request){
        $record = Article::findOrFail($request->record_id);
         $record = $this->createComment($request , $record);
         if($record){
             return responseJson('1','success');
         }
    }
    public function load(){
        $out = '';
        $videos = Video::where('created_at','<',Carbon::now()->toDateTime())->take(6)->get();
        foreach($videos as $video) {
            $out .='
                <div class=" he-div col col-md-4 col-sm-6 col-12">
                    <iframe  class="video" width="360" height="230" src="'.$video->source.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <details class="ad-v ">
                        <summary>'.$video->title.'</summary>
                            '.$video->body.'
                        </details>
                </div>
              ';
                 }
        return $out;
    }


}
