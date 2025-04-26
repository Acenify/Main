<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $table = 'invoice_item';

    protected $fillable = [
        'invoice_id',
        'item_id',
        'quantity',
        'total_price',
    ];
    // Relasi ke Invoice
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
    // Relasi ke Item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
