<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_barangs')->insert([
            'id' => '1001',
            'nama_barang' => 'Keramik Putih',
            'tahun_produksi' => '2020',
            'harga_barang' => '25000',
        ]);
    }
}
