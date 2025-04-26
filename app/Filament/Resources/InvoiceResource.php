<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\Pages\ViewInvoice;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Invoice;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor():?string
    {
        return static::getModel()::count() > 0 ? 'success' : 'gray';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false; // Tidak menampilkan menu navigasi untuk resource ini
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(12)
            ->schema([
                forms\Components\Hidden::make('customer_id')
                    ->columnSpan(12)
                    ->default(request()->get('customer'))
                    ->required(),
                forms\Components\TextInput::make('invoice_number')
                    ->columnSpan(6)
                    ->required()
                    ->maxLength(255),
                forms\Components\DatePicker::make('invoice_date')
                    ->columnSpan(6)
                    ->required()
                    ->default(Carbon::now())
                    ->native(false),
                forms\Components\TextInput::make('status')
                    ->columnSpan(6)
                    ->required()
                    ->maxLength(255),
                forms\Components\TextInput::make('discount')
                    ->required()
                    ->columnSpan(6)
                    ->maxLength(255),
                forms\Components\TextInput::make('down_payment')
                    ->required()
                    ->columnSpan(6)
                    ->maxLength(255),
                forms\Components\TextInput::make('total')
                    ->required()
                    ->columnSpan(6)
                    ->maxLength(255),

                // Forms\Components\MultiSelect::make('items')
                //     ->label('Select Items')
                //     ->relationship('items', 'name')  // Menggunakan relasi dengan model Item
                //     ->required()
                //     ->columnSpan(6)
                //     ->searchable()
                //     ->reactive(),

                Repeater::make('invoiceItems')
                    ->relationship('invoiceItems')      // <-- pakai metode hasMany ini
                    ->columnSpan(12)
                    ->columns(12)
                    ->label('Items')
                    ->schema([
                        Select::make('item_id')
                            ->relationship('item', 'name')  // relasi di InvoiceItem->item()
                            ->columnSpan(4)
                            ->reactive()
                            ->required(),

                        TextInput::make('quantity')
                            ->numeric()
                            ->columnSpan(4)
                            ->default(1)
                            ->reactive()
                            ->afterStateUpdated(function ($get, $set) {
                                $item   = Item::find($get('item_id'));
                                $qty    = $get('quantity');
                                $set('total_price', $item ? $item->price * $qty : 0);
                            }),

                        TextInput::make('total_price')
                            ->readOnly()
                            ->columnSpan(4)
                            ->reactive(),
                    ])
                    ->createItemButtonLabel('Tambah Item'),

            ]);
    }






    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
            'view' => ViewInvoice::route('/{record}/view'),
        ];
    }
}
