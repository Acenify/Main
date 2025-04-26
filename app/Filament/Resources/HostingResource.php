<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HostingResource\Pages;
use App\Filament\Resources\HostingResource\RelationManagers;
use App\Models\Hosting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class HostingResource extends Resource
{
    protected static ?string $model = Hosting::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static?string $navigationGroup = 'Data Customer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')->relationship('customer', 'name')->required(),
                Forms\Components\TextInput::make('domain_name')->required(),
                Forms\Components\TextInput::make('hosting_provider'),
                Forms\Components\TextInput::make('cpanel_url')->url(),
                Forms\Components\TextInput::make('username')->required(),
                Forms\Components\TextInput::make('password')->required()->password(),
                Forms\Components\DatePicker::make('expired_at'),
                Forms\Components\Toggle::make('ssl_installed'),
                Forms\Components\Toggle::make('is_active'),
                Forms\Components\Textarea::make('notes')->rows(3),
                Forms\Components\Toggle::make('transfer_requested')->label('Transfer Hosting Requested'),
                Forms\Components\Select::make('transfer_status')
                    ->options([
                        'none' => 'None',
                        'requested' => 'Requested',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                    ])
                    ->default('none')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('domain_name')->searchable()->sortable(),
                TextColumn::make('customer.name')->label('Customer')->searchable(),
                TextColumn::make('hosting_provider')->label('Provider'),
                TextColumn::make('cpanel_url')->label('cPanel URL')->copyable()->toggleable(),
                TextColumn::make('username')->copyable(),
                TextColumn::make('password')->label('Password')->getStateUsing(fn ($record) => $record->password)->copyable(),
                TextColumn::make('expired_at')->date(),
                IconColumn::make('ssl_installed')->boolean(),
                ToggleColumn::make('is_active'),
                BadgeColumn::make('transfer_status')->colors([
                    'none' => 'gray',
                    'requested' => 'yellow',
                    'in_progress' => 'blue',
                    'completed' => 'green',
                ])->label('Transfer Status'),
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
            'index' => Pages\ListHostings::route('/'),
            'create' => Pages\CreateHosting::route('/create'),
            'edit' => Pages\EditHosting::route('/{record}/edit'),
        ];
    }
}
