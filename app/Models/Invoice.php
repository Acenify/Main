<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Item;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable =[
        'customer_id',
        'invoice_number',
        'invoice_date',
        'status',
        'total',
        'down_payment',
        'discount',
    ];



    // Relasi ke customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relasi many-to-many dengan items melalui pivot table
    public function items()
    {
        return $this->belongsToMany(Item::class, 'invoice_item')->withPivot('quantity', 'total_price');
    }

    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }


}
