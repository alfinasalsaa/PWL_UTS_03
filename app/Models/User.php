<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Nasabah as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table="nasabah"; // Eloquent akan membuat model mahasiswamenyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected $primaryKey = 'no_rekening'; // Memanggil isi DB Dengan primarykey

    /**
     * 
     *   @var array<int, string>
     */
            protected $fillable = [
            'No_Rekening',
            'Nama',
            'Alamat',
            'Jenis_Tabungan',
            'Saldo'
          ];

}