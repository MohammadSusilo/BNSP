<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class bnsp extends Model
{
    use HasFactory;
    protected $table = "tb_daftar";
    protected $fillable = [
        'nama', 
        'email',
        'hp',
        'semestrer',
        'ipk',
        'beasiswa',
        'berkas',
        'status',
    ];

    public function getCreatedAttribute()
    {
        return $this->created_at->format('d F Y');
    }

    public function getUpdatedAttribute()
    {
        return $this->updated_at->format('d F Y');
    }
}
