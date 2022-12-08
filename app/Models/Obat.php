<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'merek_obat',
        'tanggal_kadaluarsa',
    ];

    public function pabrik()
    {
        return $this->hasMany(Pabrik::class);
    }
}
