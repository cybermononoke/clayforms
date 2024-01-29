<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserPreference extends Model
{
    protected $fillable =['background_image'];
    public function user (){
        return $this->belongsTo(User::class);
    }
}
