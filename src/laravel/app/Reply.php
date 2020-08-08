<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'post_id', 'author_id', 'content'
    ];

    public function category(){  
        return $this->belongsTo('App\Post', 'post_id');
    }
}
