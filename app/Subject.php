<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	public $incrementing = false;
	public $timestamps = FALSE;
    protected $primaryKey = 'subjectID';
	
	
	public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
	public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
	public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }
	public function lecturer()
    {
        return $this->belongsToMany(Lecturer::class);
    }
}
