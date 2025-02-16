<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['user_id', 'item_id', 'payment_date', 'start_rent', 'end_rent', 'quantity', 'amount', ];

    protected $casts = [
        'payment_date' => 'date',
        'start_rent' => 'date',
        'end_rent' => 'date',
        'amount' => 'decimal:2',
        'quantity' => 'integer',
        'total_days' => 'integer'
    ];

     public function user(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
