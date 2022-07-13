<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Classroom extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
