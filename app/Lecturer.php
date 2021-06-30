<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
	public $timestamps = FALSE;
	
    public function professor()
    {
        return $this->belongsToMany(Professor::class);
    }
	
	public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
