<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //
    public function __invoice(Invoice $invoice)
    {
        ini_set('memory_limit', '512M'); // (Opsional tapi disarankan untuk PDF besar)

        $pdf = Pdf::loadView('filament.resources.invoice-resource.pages.view-invoice-pdf', [
            'record' => $invoice
        ]);

        $download = $pdf->download($invoice->customer->name . '-' . $invoice->invoice_number . '.pdf');

        unset($pdf);
        gc_collect_cycles();

        return $download;
    }
}
