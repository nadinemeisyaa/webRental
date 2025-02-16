<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Input Data Item")
                ->schema([
                TextInput::make('name')
                    ->label('Nama Produk')
                    ->required(),
                TextInput::make('description')
                    ->label('Deskripsi'),
                TextInput::make('price_per_day')
                    ->label('Harga Sewa  /hari')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
                FileUpload::make('image_path')
                    ->directory('items')
                    ->required(),
                Select::make('status')
                    ->label('Status Item')
                    ->options([
                        0=>'Ready',
                        1=>'Rented'
                    ])->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->sortable(),
                TextColumn::make('description'),
                TextColumn::make('status')
                ->formatStateUsing(fn ($state) => $state == 0 ? 'Available' : 'Rented'),
                TextColumn::make('price_per_day'),
                ImageColumn::make('image_path'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
