<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];


    public function isAdmin($userId)
    {
        return $this->user_id === $userId;
    }
}
