<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    function employee(){
        return $this->hasMany(Staff::class);
    }

    function manager(){
        return $this->hasMany(Manager::class);
    }
    
}
