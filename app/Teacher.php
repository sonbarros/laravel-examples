<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Teacher extends Model
{
    protected $primaryKey = "user_id";
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
