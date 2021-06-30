<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
	public $incrementing = false;
	public $timestamps = FALSE;
    protected $primaryKey = 'professorID';
	
	public function subject()
    {
        return $this->hasMany(Subject::class);
    }
	
	public function lecturer()
    {
        return $this->belongsToMany(Lecturer::class);
    }
}
