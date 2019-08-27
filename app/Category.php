<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
 	public function products()
 	{
 		return $this->hasMany(Product::class);  
 	}
 	
 	public function activity()
    {
    	return $this->belongsTo(Activity::class);
    }   
}
