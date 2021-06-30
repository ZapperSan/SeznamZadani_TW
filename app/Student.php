<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	public $incrementing = false;
	public $timestamps = FALSE;
    protected $primaryKey = 'studentID';
	
	
	public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
	
	public function finished()
    {
        return $this->belongsToMany(Finished::class);
    }
}
