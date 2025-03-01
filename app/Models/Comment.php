<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //mass assignable
    protected $fillable = ['user_id', 'post_id', 'content'];

    public function replies(){
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('created_at', 'asc');
    }
    
}
