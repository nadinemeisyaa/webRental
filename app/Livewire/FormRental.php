<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class FormRental extends Component
{
    public $item;
    public $start_rent;
    public $end_rent;
    public $amount;

    public function submit()
    {
        $user = auth()->user();
        $paymentDate = Carbon::now()->format('Y-m-d');
        $startRent = $this->start_rent;
        $endRent = $this->end_rent;
        $amount = $this->amount;

        $rental = Rental::create([
            'user_id' => $user->id,
            'item_id' => $this->item,
            'payment_date' => $paymentDate,
            'start_rent' => $startRent,
            'end_rent' => $endRent,
            'amount' => $amount,
        ]);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('FONNTE_TOKEN')
        ])->post('https://api.fonnte.com/send', [
                    'target' => $user->phone_number,
                    'message' => 'Pembayaran sewa barang berhasil dilakukan',
                    'countryCode' => '62',
                ]);

        return redirect()->route('home');
    }

    public function mount()
    {
        $this->render();
    }

    public function render()
    {
        $items = Item::all();
        return view('livewire.form-rental', [
            'items' => $items
        ]);
    }

    public function calculateAmount()
    {
        if ($this->item && $this->start_rent && $this->end_rent) {
            $item = Item::find($this->item);
            $startDate = Carbon::parse($this->start_rent);
            $endDate = Carbon::parse($this->end_rent);

            $days = $startDate->diffInDays($endDate);

            $this->amount = $item->price_per_day * $days;
        } else {
            $this->amount = 0;
        }
    }



    public function updatedItem()
    {
        $this->calculateAmount();
    }

    public function updatedStartRent()
    {
        $this->calculateAmount();
    }

    public function updatedEndRent()
    {
        $this->calculateAmount();
    }
}
