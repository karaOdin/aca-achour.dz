<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
	public function types()
	  {
	  	return $this->hasMany(Type::class);
	  }  
}
