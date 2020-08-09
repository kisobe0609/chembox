<?php

namespace App;

use App\PostCategory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'author_id', 'title', 'content', 'category_id', 'is_closed',
        'attachted_file_url1', 'attached_file_url2', 'attached_file_url3'
    ];

    public function category(){
        return $this->belongsTo('App\PostCategory', 'category_id');
    }

    public function replies(){
        return $this->hasMany('App\Reply', 'post_id');
    }
}
