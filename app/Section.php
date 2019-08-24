<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	public function page()
	{
		return $this->belongsTo('App\Page');
	}

    public function blocks()
    {
	    return $this->hasMany('App\Block');
    }
}
