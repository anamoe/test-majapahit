<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat_ktp',
        'pekerjaan',
        'nama_lengkap',
        'pendidikan_terakhir',
        'nama_lengkap',
        'nomor_telepon',
        'user_id',
    ];

    public function User(){
        
        return $this->belongsTo(User::class);

    } 

   
}
