<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Student extends Model
{
    protected $primaryKey = "user_id";
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
