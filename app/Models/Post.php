<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $tale='<ten_bang>';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
