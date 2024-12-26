<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $table = 'orders'; // Nama tabel di database

    protected $guarded = [''];

    /**
     * Relasi ke model User sebagai pelanggan.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke model User sebagai driver.
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function driverDetails()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'user_id');
    }
}
