<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use Filament\Resources\Pages\ViewRecord;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\Browsershot\Browsershot;
use Illuminate\Contracts\View\View;

class ViewInvoice extends ViewRecord
{
    protected static string $resource = InvoiceResource::class;

    // Tentukan path atau view yang akan digunakan
    protected static string $view = 'filament.resources.invoice-resource.pages.view-invoice';


    public function mount(string|int $record): void
    {
        // Menyimpan invoice yang dipilih di dalam variabel untuk digunakan di tampilan
        parent::mount($record);

        $this->record->load('customer');
    }


    public function downloadInvoice()
{
    // Ambil data invoice beserta item dan relasi lainnya
    $invoice = Invoice::with('customer', 'invoiceItems.item')->findOrFail($this->record->id);

    // Generate PDF menggunakan view yang sama seperti halaman invoice
    $pdf = view('filament.resources.invoice-resource.pages.view-invoice-pdf', compact('invoice'))->render();

    // Path ke file CSS yang ada di direktori public
    $cssPath = public_path('assets/css/invoice-style.css');

    // Tentukan path untuk menyimpan file PDF yang dihasilkan
    $filePath = storage_path('app/public/invoice-' . $this->record->invoice_number . '.pdf');

    // Generate PDF dengan Spatie Browsershot
    Browsershot::html($pdf)
        ->setOption('args', ['--no-sandbox', '--disable-setuid-sandbox']) // Tambahkan opsi ini jika dijalankan di server
        ->addStylesheet($cssPath) // Menggunakan addStylesheet untuk memastikan CSS di-include
        ->format('A4')
        ->showBackground()
        ->savePdf($filePath);

    // Pastikan file PDF yang dihasilkan bisa diunduh
    return response()->download($filePath)->deleteFileAfterSend(true);
}
}
