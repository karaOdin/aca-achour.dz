<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    	public function products()
 	   {
 	   	 return $this->hasManyThrough(Product::class,
 	   	 	Category::class,
 	   	 	'activity_id',
 	   	 	'category_id',
 	   	 	'id',
 	   	 	'id'
 	   	 ); 

 	   	 							 
 	   } 

 	   public function categories()
 	   {
 	   	 return $this->hasMany(Category::class);  
 	   } 

}
