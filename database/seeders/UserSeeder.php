<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'KRS01',
                'nama_barang' => 'Kursi',
                'harga_barang'=> '12000',
                'deskripsi_barang' => 'Kursi untuk ruang tamu',
                'satuan_id' => 36,
            ]
            ]);
    }
}
