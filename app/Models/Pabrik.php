<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pabrik extends Model
{
    use HasFactory;
    
    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
