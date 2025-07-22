<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BarangModel;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        BarangModel::create([
            "nama_barang" => "Buku Tulis",
            "kode_barang" => "B001",
            "jumlah_barang" => 100,
            "harga_dasar" => 5000.00,
            "harga_jual" => 7000.00,
            "kode_suplier" => "S001",
            "nama_suplier" => "Toko Buku ABC",
        ]);

        BarangModel::create([
            "nama_barang" => "Pulpen",
            "kode_barang" => "B002",
            "jumlah_barang" => 200,
            "harga_dasar" => 2500.00,
            "harga_jual" => 4000.00,
            "kode_suplier" => "S002",
            "nama_suplier" => "ATK Mart",
        ]);

        BarangModel::create([
            "nama_barang" => "Penghapus",
            "kode_barang" => "B003",
            "jumlah_barang" => 150,
            "harga_dasar" => 1000.00,
            "harga_jual" => 2000.00,
            "kode_suplier" => "S002",
            "nama_suplier" => "ATK Mart",
        ]);

        BarangModel::create([
            "nama_barang" => "Pensil",
            "kode_barang" => "B004",
            "jumlah_barang" => 180,
            "harga_dasar" => 1500.00,
            "harga_jual" => 3000.00,
            "kode_suplier" => "S003",
            "nama_suplier" => "Toko Serba Ada",
        ]);

        BarangModel::create([
            "nama_barang" => "Penggaris",
            "kode_barang" => "B005",
            "jumlah_barang" => 120,
            "harga_dasar" => 3000.00,
            "harga_jual" => 5000.00,
            "kode_suplier" => "S003",
            "nama_suplier" => "Toko Serba Ada",
        ]);

        BarangModel::create([
            "nama_barang" => "Stabilo",
            "kode_barang" => "B006",
            "jumlah_barang" => 75,
            "harga_dasar" => 7000.00,
            "harga_jual" => 9000.00,
            "kode_suplier" => "S004",
            "nama_suplier" => "Stationery House",
        ]);

        BarangModel::create([
            "nama_barang" => "Spidol",
            "kode_barang" => "B007",
            "jumlah_barang" => 90,
            "harga_dasar" => 6000.00,
            "harga_jual" => 8000.00,
            "kode_suplier" => "S004",
            "nama_suplier" => "Stationery House",
        ]);

        BarangModel::create([
            "nama_barang" => "Map Plastik",
            "kode_barang" => "B008",
            "jumlah_barang" => 130,
            "harga_dasar" => 2000.00,
            "harga_jual" => 3500.00,
            "kode_suplier" => "S005",
            "nama_suplier" => "KantorMart",
        ]);

        BarangModel::create([
            "nama_barang" => "Binder",
            "kode_barang" => "B009",
            "jumlah_barang" => 60,
            "harga_dasar" => 12000.00,
            "harga_jual" => 15000.00,
            "kode_suplier" => "S005",
            "nama_suplier" => "KantorMart",
        ]);

        BarangModel::create([
            "nama_barang" => "Kertas HVS",
            "kode_barang" => "B010",
            "jumlah_barang" => 500,
            "harga_dasar" => 40000.00,
            "harga_jual" => 50000.00,
            "kode_suplier" => "S006",
            "nama_suplier" => "CV. Kertas Indo",
        ]);
    }
}