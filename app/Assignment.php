<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
	public $timestamps = FALSE;
	protected $guarded = array('_token');
    protected $primaryKey = 'assignmentID';
	
	
	public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
	public function finished()
    {
        return $this->belongsToMany(Finished::class);
    }
}
