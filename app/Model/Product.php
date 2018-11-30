<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
    public function Reviews()
    {
    	return $this->hasMany(Review::class);
    }
}
