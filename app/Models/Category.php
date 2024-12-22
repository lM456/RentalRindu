<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // Relasi dengan kendaraan (opsional)
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
