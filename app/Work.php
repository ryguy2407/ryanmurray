<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Work extends Model
{
	protected $guarded = ['id'];

	public function excerpt($value)
	{
		return Str::words($value, 20);
	}
}
