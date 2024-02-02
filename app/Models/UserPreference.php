<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $fillable = ['background_image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
