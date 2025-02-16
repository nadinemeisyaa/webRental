<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Rental;


class UserTransactionHistory extends Component
{
    public function render()
    {
        $histories = Rental::where('user_id', auth()->user()->id)->get();
        return view('livewire.user-transaction-history', [
            'histories' => $histories
        ]);
    }
}
