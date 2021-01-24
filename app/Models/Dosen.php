<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'nip',
        'name',
        'alamat',
        'matkul_id',
    ];
    public function Matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
}
