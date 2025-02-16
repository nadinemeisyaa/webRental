<?php

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Resources\ItemResource;
use Filament\Forms\Components\Component;
use Livewire\WithPagination;
use Filament\Actions;
use Illuminate\Contracts\View\View;

use Filament\Resources\Pages\ListRecords;

class ListItems extends ListRecords
{

    // use WithPagination; // Tambahkan ini

    // public function render(): View
    // {
    //     $items = ItemResource::paginate(10); // Pastikan pakai paginate()

    //     return view('livewire.item-list', compact('items'));
    // }
    protected static string $resource = ItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
