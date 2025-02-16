<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Rental;


// class UserTransactionHistory extends Component
// {
//     public $rentals;

//     public function mount()
//     {
//         $this->rentals = Rental::where('user_id', Auth::id())->latest()->get();
//     }

//     public function render()
//     {
//         return view('livewire.user-transaction-history');
//     }
// }
