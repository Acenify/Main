<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Item extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    // Relasi ke Invoice (many-to-many)
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_item')
                    ->withPivot('quantity', 'total_price');  // Menyertakan kolom tambahan di tabel pivot
    }

    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}

