<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public function dishes() 
    {
        return $this->belongsTo('App\Models\Dishes', 'dish_id');
    }

}
