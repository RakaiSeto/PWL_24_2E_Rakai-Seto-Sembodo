<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id' => $i,
                'user_id' => 3,
                'pembeli' => $faker->firstName(),
                'penjualan_kode' => 'PJL-' . $i,
                'penjualan_tanggal' => date_format($faker->dateTimeThisYear(),'Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table("t_penjualan")->insert($data);
    }
}
