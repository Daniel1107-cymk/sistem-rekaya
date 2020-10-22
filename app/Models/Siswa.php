<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'no_induk',
        'sex',
        'dob',
        'dob_place',
        'alamat',
        'wali',
        'phone',
        'sekolah_id',
        'paket_id',
    ];
}
