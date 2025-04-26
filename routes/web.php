<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Filament\Resources\InvoiceResource;
use App\Http\Controllers\PDFController;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Support\Str;
use Spatie\Browsershot\Browsershot;



Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/filament/invoice/{invoice}/download-pdf', function (Invoice $invoice) {
//     $invoice->load('customer', 'invoiceItems.item');

//     $html = view('filament.resources.invoice-resource.pages.view-invoice-pdf', [
//         'record' => $invoice,
//     ])->render();

//     $fileName = 'invoice-' . Str::slug($invoice->invoice_number) . '.pdf';
//     $filePath = storage_path("app/{$fileName}");

//     Browsershot::html($html)

//         ->setNodeBinary('C:\Program Files\nodejs\node.exe')
//         ->setNpmBinary('C:\Program Files\nodejs\npm.cmd')
//         ->setOption('args', ['--no-sandbox'])
//         ->format('A4')
//         ->showBackground()
//         ->savePdf($filePath);

//     return response()->download($filePath)->deleteFileAfterSend(true);
// })->name('filament.invoice.download');

Route::get('/template', [FrontendController::class, 'template'])->name('frontend.template');
