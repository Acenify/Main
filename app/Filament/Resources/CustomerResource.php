<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InvoiceResource\Pages\ViewInvoice;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    protected static ?string $navigationGroup = 'Data Customer';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor():?string
    {
        return static::getModel()::count() > 0 ? 'success' : 'gray';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                self::customerData(),
                self::websiteData(),

                Forms\Components\TextInput::make('password_confirmation')
                ->password()
                ->label('Confirm Your Password')
                ->required()
                ->rule('current_password'),
            ]);
    }

    protected static function customerData(){
        return Section::make('Data Customer')
            ->columns(12)
            ->schema([
                TextInput::make('name')
                    ->columnSpan(6)
                    ->required()
                    ->label('Nama')
                    ->maxLength(255),
                TextInput::make('email')
                    ->columnSpan(6)
                    ->required()
                    ->email()
                    ->label('Email')
                    ->maxLength(255),
                TextArea::make('address')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Alamat'),
                TextInput::make('phone')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Nomor Telepon'),
                TextInput::make('city')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Kota'),
                TextInput::make('province')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Provinsi'),
                TextInput::make('postal_code')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Kode Pos'),
                TextInput::make('country')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Negara'),
            ]);
    }

    protected static function websiteData(){
        return Section::make('Data Website')
            ->columns(12)
            ->schema([
                Select::make('website_type')
                    ->columnSpan(6)
                    ->required()
                    ->options([
                        'business' => 'Website Bisnis',
                        'e-commerce' => 'E-Commerce',
                        'portfolio' => 'Portofolio',
                        'informational' => 'Website Informasi',
                        'custom' => 'Kustom',
                    ]),
                TextInput::make('template')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Preferensi Desain'),
                TextInput::make('price')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Harga'),
                TextInput::make('qty')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Jumlah'),
                Textarea::make('description')
                    ->columnSpan(6)
                    ->nullable()
                    ->label('Deskripsi'),
                ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        logger('Password Confirmation:', [$data['password_confirmation']]);
        logger('User Password:', [Auth::user()->password]);

        if (!Hash::check($data['password_confirmation'], Auth::user()->password)) {
            throw ValidationException::withMessages([
                'password_confirmation' => 'Password yang Anda masukkan salah.',
            ]);
        }

        unset($data['password_confirmation']);

        return $data;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama')->sortable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->sortable(),
                Tables\Columns\TextColumn::make('website_type')->label('Jenis Website')->sortable(),
                Tables\Columns\TextColumn::make('price')->label('Harga')->money('IDR')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('invoiceAction')
                ->label(fn ($record) => $record->invoices()->exists() ? 'View Invoice' : 'Create Invoice')
                ->url(function ($record) {
                    $invoice = $record->invoices()->first();
                    return $invoice
                        ? \App\Filament\Resources\InvoiceResource::getUrl('view', ['record' => $invoice->getKey()])
                        : \App\Filament\Resources\InvoiceResource::getUrl('create', ['customer' => $record->getKey()]);
                })
                ->icon(fn ($record) => $record->invoices()->exists() ? 'heroicon-o-document' : 'heroicon-o-document-plus')
                ->color(fn ($record) => $record->invoices()->exists() ? 'success' : 'info')
                ->after(function ($action, $record) {
                    // Redirect ke halaman daftar customer setelah tindakan selesai
                    // Gunakan Filament's redirect() untuk mengarahkan ke halaman yang tepat
                    return redirect()->route('filament.admin.resources.customers.index');
                }),
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
            'create' => Pages\CreateCustomer::route('/create'),
            'index' => Pages\ListCustomers::route('/'),
            // 'view' => ViewInvoice::route('/{record}/view'),
            // 'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
