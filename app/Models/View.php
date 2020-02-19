<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model 
{

    protected $table = 'views';
    public $timestamps = true;
    protected $fillable = array('id', 'ip', 'date', 'viewable_id', 'viewable_type');

    public function viewable()
    {
        return $this->morphTo();
    }

}