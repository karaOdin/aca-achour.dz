<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function category()
    {
    	return $this->belongs(Category::class);
    }

    public function activity()
    {
    	return $this->belongs(Activity::class);
    }
}
