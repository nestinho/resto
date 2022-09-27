<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    function foodcategory(){
        return $this->belongsTo(Category::class,'category_id');
    }

    function foodorder(){
        return $this->belongsTo(Food::class,'food_id');
    }

}
