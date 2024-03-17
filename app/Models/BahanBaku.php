<?php

namespace App\Models;

use App\Models\Resep;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BahanBaku extends Model
{
    use HasFactory;
    protected $table = 'bahan_baku';
    protected $fillable = ['nama','satuan','harga','stol'];

    public function resep(){
        return $this->hasMany(Resep::class, 'id_bahan_baku');
    }
}
