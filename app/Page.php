<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function sections()
    {
	    return $this->hasMany('App\Section');
    }
}
