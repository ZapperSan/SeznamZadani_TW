<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finished extends Model
{
	public $timestamps = FALSE;
    protected $table = 'finished';
	
	public function student()
    {
        return $this->belongsToMany(Student::class);
    }
	
	public function assignment()
    {
        return $this->belongsToMany(Assignments::class);
    }
}
}
