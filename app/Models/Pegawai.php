<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['id_pegawai', 'nama', 'gender', 'no_telp','email', 'jabatan', 'gaji', 'tanggal_masuk', 'status', 'foto'];
}
