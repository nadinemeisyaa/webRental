<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'price_per_day' => 'decimal:2',
    ];

     public function rentals(){
        return $this->hasMany(Rental::class);
    }
}
