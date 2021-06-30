<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
	public $incrementing = false;
	public $timestamps = FALSE;
    protected $primaryKey = 'semesterID';
	
	public function student()
    {
        return $this->hasMany(Student::class);
    }
	
	public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
