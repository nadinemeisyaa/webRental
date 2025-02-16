<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $guarded = ['id'];

    

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

    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function getDurationAttribute()
    {
        if ($this->start_rent && $this->end_rent) {
            $startDate = Carbon::parse($this->start_rent);
            $endDate = Carbon::parse($this->end_rent);

            return max($startDate->diffInDays($endDate), 1); // Minimal 1 hari
        }

        return 0;
    }
}
