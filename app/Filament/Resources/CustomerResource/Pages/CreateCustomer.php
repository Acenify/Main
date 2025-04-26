<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

    protected function afterSave(): \Illuminate\Http\RedirectResponse
    {
        // Redirect ke halaman daftar customer setelah create selesai
        return redirect()->route('filament.admin.resources.customers.index');
    }
}
