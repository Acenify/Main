<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //
    public function __invoice(Invoice $invoice){
        return $pdf = Pdf::loadview('filament.resources.invoice-resource.pages.view-invoice-pdf', ['record' => $invoice])
        ->download($invoice->customer->name. '-' . $invoice->invoice_number. '.pdf');
    }
}
