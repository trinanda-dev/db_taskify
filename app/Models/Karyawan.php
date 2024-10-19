<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens; // Tambahkan HasApiTokens untuk Sanctum

class Karyawan extends Authenticatable
{
    use Notifiable, HasApiTokens; // Tambahkan HasApiTokens di sini

    protected $table = 'karyawans'; // Menentukan nama table secara eksplisit
    protected $primaryKey = 'id_karyawan'; // Menggunakan id_karyawan sebagai primary key
    public $incrementing = false; // Jika id_karyawan bukan auto increment
    protected $keyType = 'string';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'id_karyawan',
        'nama',
        'role',
        'password',
    ];

    // Hidden fields (misalnya password tidak ditampilkan secara langsung)
    protected $hidden = [
        'password',
    ];

    // Fungsi untuk melakukan hashing password secara otomatis
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    // Relasi: Karyawan memiliki banyak tugas
    public function tasks()
    {
        return $this->hasMany(Task::class, 'id_karyawan');
    }
}