<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    // Non-incrementing ID karena menggunakan UUID
    public $incrementing = false;

    // Tentukan keyType sebagai string karena UUID adalah string
    protected $keyType = 'string';

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'name', 'email', 'phone', 'company_name',
        'website_type', 'status', 'template', 'price', 'address', 'qty', 'desciption', 'country', 'city', 'postal_code', 'province',
    ];

    public function hostings()
    {
        return $this->hasMany(Hosting::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    // Menambahkan event creating untuk mengatur UUID
    protected static function booted()
    {
        static::creating(function ($customer) {
            $customer->id = (string) Str::uuid();
        });

        static::updating(function ($customer) {
            // Hanya perbarui kolom yang berubah
            if (!$customer->isDirty('email')) {
                // Jika email tidak berubah, hapus dan masukkan kembali untuk menghindari duplikasi
                $oldEmail = $customer->getOriginal('email'); // Mendapatkan email lama
                $customer->email = null;  // Menghapus email lama
                $customer->email = $oldEmail;  // Memasukkan kembali email yang lama
            }
            foreach ($customer->getDirty() as $column => $value) {
                if ($customer->isDirty($column)) {
                    // Jika nilai berbeda, lakukan update kolom tersebut
                    // Contoh: Jika kolom `email` berubah
                    // if ($column === 'email') {
                    //     $customer->email = $value;
                    // }
                } else {
                    // Jika tidak ada perubahan, biarkan nilai sebelumnya
                    $customer->$column = $customer->getOriginal($column);
                }
            }
        });
    }
}
