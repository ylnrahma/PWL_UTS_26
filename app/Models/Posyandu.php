<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Posyandu extends Model
{
    protected $table="posyandus"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected $primaryKey = 'No_Urut'; // Memanggil isi DB Dengan primarykey
    /**
     * * The attributes that are mass assignable.
     *  *
     * * @var array
     * */
    protected $fillable = [
        'No_Urut',
        'Nama',
        'Alamat',
        'Tanggal_lahir',
        'Bb_lahir',
        'Tb_lahir',
    ];
}
