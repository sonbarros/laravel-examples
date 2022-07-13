<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Classroom;

class Student extends Model
{
    protected $primaryKey = "user_id";
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

}
