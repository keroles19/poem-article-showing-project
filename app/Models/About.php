<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model 
{

    protected $table = 'abouts';
    public $timestamps = true;
    protected $fillable = array('image', 'name', 'address', 'date_of_birth', 'education', 'hoppy', 'work', 'fb_link', 'tw_link', 'fb_page_link', 'phone');

}