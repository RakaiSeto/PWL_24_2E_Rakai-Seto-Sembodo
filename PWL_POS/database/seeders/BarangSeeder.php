<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Malkist',
                'harga_beli' => 8000,
                'harga_jual' => 10000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Roti Tawar',
                'harga_beli' => 12000,
                'harga_jual' => 15000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MNM003',
                'barang_nama' => 'Pocari',
                'harga_beli' => 6000,
                'harga_jual' => 8000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MNM004',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 3500,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BJU005',
                'barang_nama' => 'T Shirt',
                'harga_beli' => 35000,
                'harga_jual' => 40000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BJU006',
                'barang_nama' => 'Celana',
                'harga_beli' => 50000,
                'harga_jual' => 60000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'MBL007',
                'barang_nama' => 'Meja',
                'harga_beli' => 125000,
                'harga_jual' => 140000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'MBL008',
                'barang_nama' => 'Kursi',
                'harga_beli' => 75000,
                'harga_jual' => 90000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'ELE009',
                'barang_nama' => 'Speaker Bluetooth',
                'harga_beli' => 230000,
                'harga_jual' => 275000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'ELE010',
                'barang_nama' => 'Kamera Digital',
                'harga_beli' => 350000,
                'harga_jual' => 425000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
