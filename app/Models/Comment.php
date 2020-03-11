<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = array('comment', 'name', 'email', 'comentable_id', 'comentable_type','status');

    public function getTitleAttribute(){
        $title = $this->comentable->title;
        return $title;
    }

    public function comentable()
    {
        return $this->morphTo();
    }

}
