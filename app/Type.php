<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Type extends Model
{
	public function project($value='')
	{
		return $this->belongsTo(Project::class);
	}
}
