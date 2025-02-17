<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormRental extends Component
{
    use WithFileUploads;
    public $item;
    public $start_rent;
    public $end_rent;
    public $amount;
    public $ktp_image;


    public function submit()
    {
        $user = auth()->user();
        $paymentDate = Carbon::now()->format('Y-m-d');
        $startRent = Carbon::parse($this->start_rent);
        $endRent = Carbon::parse($this->end_rent);
        $amount = $this->amount;
        $ktpPath = $this->ktp_image->store('ktp_image', 'public');

        $totalDays = Carbon::parse($this->start_rent)->diffInDays(Carbon::parse($this->end_rent));

        $rental = Rental::create([
            'user_id' => $user->id,
            'item_id' => $this->item,
            'payment_date' => $paymentDate,
            'start_rent' => $startRent,
            'end_rent' => $endRent,
            'amount' => $amount,
            'ktp_image' => $ktpPath ?? null,
        ]);

        $this->validate([
            'ktp_image' => 'image|max:2048', // Maksimal 2MB


        ]);

        // Simpan gambar ke storage
        if ($this->ktp_image) {
            $path = $this->ktp_image->store('ktp_images', 'public');
        }

        $phoneNumber = '6281944582397';
        // $message = "Deskripsi denda: Jika terlambat mengembalikan barang maximal 4jam dari waktu peminjaman ,maka akan dikenakan denda seniai harga sewa /hari barang tersebut";
        $message = "Halo, saya ingin mengkonfirmasi penyewaan multimedia dengan detail berikut:\n\n"
        . "Nama: " . $user->name . "\n"
        . "Item: " . $rental->item->name . "\n"
        . "Mulai: " . $startRent->format('d M Y H:i') . "\n"
        . "Selesai: " . $endRent->format('d M Y H:i') . "\n"
        . "Total Hari: " . $totalDays . "\n"
        . "Total Biaya: Rp " . number_format($amount, 0, ',', '.') . "\n"
        . "Deskripsi Denda: " ."Jika terlambat mengembalikan barang maximal 4jam dari waktu peminjaman ,maka akan dikenakan denda seniai harga sewa /hari barang tersebut \n";

        $whatsAppApi = "https://wa.me/".$phoneNumber."?text=".urlencode($message);

        return redirect()->away($whatsAppApi);
    }

    public function mount()
    {
        $this->render();
    }

    public function render()
    {
        $items = Item::where('status', 0)->get();
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
