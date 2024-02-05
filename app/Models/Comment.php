<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['commenter_name', 'comment_text'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
