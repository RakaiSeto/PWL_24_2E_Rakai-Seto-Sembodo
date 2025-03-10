<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            
        ];

        for ($i = 1; $i <= 30; $i++) {
            $data[] = [
                "detail_id" => $i,
                "penjualan_id" => $i % 10 + 1,
                "barang_id" => rand(1,10),
                "harga" => rand(10000, 225000),
                "jumlah" => rand(1,5),
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }

        DB::table("t_penjualan_detail")->insert($data);
    }
}
