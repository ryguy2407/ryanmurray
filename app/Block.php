<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function page()
    {
	    return $this->belongsTo('App\Section');
    }
}
