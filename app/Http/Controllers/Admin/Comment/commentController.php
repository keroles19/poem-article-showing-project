<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Poem;
use Illuminate\Http\Request;

class commentController extends Controller
{
    //
    public function article()
    {
        $records = Comment::where('comentable_type', 'App\Models\Article')->orderBy('created_at','desc')->paginate(10);
        return view('admin.comments.article', compact('records'));
    }

    public function poem()
    {
        $records = Comment::where('comentable_type', 'App\Models\Poem')->orderBy('created_at','desc')->paginate(10);
        return view('admin.comments.poem', compact('records'));
    }


    //====================== status & de-status

    public function status($id)
    {
        $record = Comment::findOrFail($id);
        if ($record) {
            $s = $record->getAttribute('status');
            if ($s == 0)
                $record->status = 1;
            else
                $record->status = 0;
            $record->save();
            return back();
        } else {
            return error_log('حاول مره اخري');
        }
    }
    // delete comment
    public function destroy($id){
        $record = Comment::findOrFail($id);
        if($record){
            if($record->delete()){
                return back();
            }
            return error_log('حاول مره اخري');
        }
    }
    //show comment
    public function show(){
        $id = $_GET['id'];
        $record = Comment::where('id',$id)->select('name','comment')->get();
        if($record){
            return responseJson('1','تم ',$record);
        }
        else{
            return responseJson('0','error','خطاء حاول مره اخر ');
        }
    }
}
