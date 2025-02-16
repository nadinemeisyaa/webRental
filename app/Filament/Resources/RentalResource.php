<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalResource\Pages;
use App\Filament\Resources\RentalResource\RelationManagers;
use App\Models\Item;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Select::make('user_id')
                //         ->option(User::pluck('name', 'id'))
                //         // ->relationship ('user','name',fn (Builder $query) => $query->where('role', 'user'))
                //         ->default(fn () => Auth::user()->hasRole('admin') ? null : Auth::id())
                //         ->disabled(fn() => !Auth::user()->hasRole('admin'))
                //         ->required(),
                // Select::make('item_id')
                //         ->options(Item::pluck('name', 'id'))
                //         ->required()
                //         // ->relationship('items', 'name')
                //         // ->reactive()
                //         ->live(onBlur: true)
                //         ->afterStateUpdated(fn($set, ?string $state) =>
                //             $set('amount', Item::find($state)?->price_per_day ?? 0)),
                // DatePicker::make('payment_date')
                //         ->required()
                //         ->nullable(),
                // DatePicker::make('start_rent')
                //         ->required()
                //         // ->reactive()
                //         ->afterStateUpdated(fn ($set, $get) =>
                //             self::calculateAmount($set, $get)),
                // DatePicker::make('end_rent')
                //         ->required()
                //         // ->reactive()
                //         ->afterStateUpdated(fn ($set, $get) =>
                //             self::calculateAmount($set, $get)),
                // TextInput::make('amount')
                //         ->required()
                //         ->numeric()
                //         ->disabled(),

            ]);
    }


    private static function calculateAmount($set, $get)
    {
        $startRent = $get('start_rent');
        $endRent = $get('end_rent');
        $pricePerDay = $get('amount') ?: 0;

        if ($startRent && $endRent) {
            $startDate = new \DateTime($startRent);
            $endDate = new \DateTime($endRent);

            // Pastikan minimal 1 hari
            $days = max($startDate->diff($endDate)->days, 1);
            $totalAmount = $days * $pricePerDay;

            $set('amount', $totalAmount);
        }
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->searchable()
                    ->label('Customer'),
                TextColumn::make('item.name')
                    ->searchable()
                    ->label('Item'),
                TextColumn::make('start_rent')
                    ->date(),
                TextColumn::make('end_rent')
                    ->date(),
                TextColumn::make('amount')
                    ->money('IDR'),
                TextColumn::make('payment_date')
                    ->date(),
                TextColumn::make('status')
                    ->default('pending')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'pending' => 'warning',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('approve')
                    ->action(function ($record) {
                        $record->item->status = 1;
                        $record->item->save();
                        $record->status = 'approved';
                        $record->save();
                    })->color('success')
                    ->hidden(fn($record) => $record->status === 'approved'),
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListRentals::route('/'),
            // 'create' => Pages\CreateRental::route('/create'), (Tidak reload di page baru)
            'edit' => Pages\EditRental::route('/{record}/edit')
        ];
    }
}
