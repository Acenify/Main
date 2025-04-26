<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Hosting extends Model
{
    protected $fillable = [
        'customer_id',
        'domain_name',
        'hosting_provider',
        'cpanel_url',
        'username',
        'password',
        'expired_at',
        'ssl_installed',
        'is_active',
        'transfer_requested',
        'transfer_status',
        'notes',
    ];

    protected $casts = [
        'ssl_installed' => 'boolean',
        'is_active' => 'boolean',
        'expired_at' => 'date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Crypt::encryptString($value);
    }

    public function getPasswordAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
