<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // override default table name dan primary key settings
    protected $table = 'mahasiswa'; // Nama tabel di database
    protected $primaryKey = 'nim'; // Menentukan primary key sebagai 'nim'
    public $incrementing = false; // Menandakan bahwa primary key tidak auto-increment
    protected $keyType = 'string'; // Menentukan tipe data primary key sebagai string
    protected $fillable = ['nim', 'nama', 'kota']; // Kolom yang dapat diisi secara massal
}
