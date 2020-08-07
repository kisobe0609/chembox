<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'author_id', 'title', 'content', 'category_id', 'is_closed',
        'attachted_file_url1', 'attached_file_url2', 'attached_file_url3'
    ];
}
