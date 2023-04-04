<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nasabah')->insert([
            'No_Rekening'=>'348104567',
            'Nama'=> 'Veronika Sina',
            'Alamat'=> 'Jl.xxx Malang',
            'Jenis_Tabungan'=> 'Silver',
            'Saldo'=> '1000000'

            

        ]);
    }
}
