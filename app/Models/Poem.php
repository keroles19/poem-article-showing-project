<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{

    protected $table = 'poems';
    public $timestamps = true;
    protected $fillable = array('title', 'body');

    public  function getCommentAttribute(){
        $comments = $this->comments()->where('status','1')->get();
        return $comments;
    }

    public function views()
    {
        return $this->morphMany('App\Models\View', 'viewable');
    }

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'comentable');
    }

}
