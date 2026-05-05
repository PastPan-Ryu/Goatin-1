<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users (Akun)
        DB::table('users')->insert([
            [
                'name' => 'Admin Goat-In',
                'email' => 'admin@goatin.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pelanggan Budi',
                'email' => 'pelanggan@example.com',
                'password' => Hash::make('123'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Seed Inventaris
        $inventarisId1 = DB::table('inventaris')->insertGetId([
            'jenis' => 'Kambing Etawa',
            'gender' => 'Jantan',
            'umur' => 12,
            'berat' => 45.5,
            'status_stok' => 'Tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $inventarisId2 = DB::table('inventaris')->insertGetId([
            'jenis' => 'Kambing Boer',
            'gender' => 'Betina',
            'umur' => 8,
            'berat' => 30.0,
            'status_stok' => 'Dalam Perawatan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed Produk
        DB::table('produks')->insert([
            [
                'nama_produk' => 'Susu Kambing Etawa Segar 1L',
                'spesifikasi' => 'Susu kambing etawa segar murni tanpa pengawet.',
                'harga' => 35000,
                'foto' => 'susu-etawa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kambing Etawa Jantan',
                'spesifikasi' => 'Siap potong, sehat, sudah divaksin.',
                'harga' => 3500000,
                'foto' => 'etawa-jantan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Seed Rekam Medis
        DB::table('rekam_medis')->insert([
            [
                'inventaris_id' => $inventarisId1,
                'tanggal' => '2023-10-01',
                'dokter_hewan' => 'Drh. Andi',
                'diagnosa' => 'Sehat',
                'tindakan' => 'Vaksin PMK',
                'status' => 'Sehat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'inventaris_id' => $inventarisId2,
                'tanggal' => '2023-10-05',
                'dokter_hewan' => 'Drh. Siti',
                'diagnosa' => 'Flu Ringan',
                'tindakan' => 'Pemberian Vitamin',
                'status' => 'Masa Pemulihan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Seed Pertumbuhan Ternak
        DB::table('pertumbuhan_ternaks')->insert([
            ['inventaris_id' => $inventarisId1, 'tanggal_pencatatan' => now()->subMonths(3), 'berat' => 40.0, 'created_at' => now(), 'updated_at' => now()],
            ['inventaris_id' => $inventarisId1, 'tanggal_pencatatan' => now()->subMonths(2), 'berat' => 42.5, 'created_at' => now(), 'updated_at' => now()],
            ['inventaris_id' => $inventarisId1, 'tanggal_pencatatan' => now()->subMonths(1), 'berat' => 44.0, 'created_at' => now(), 'updated_at' => now()],
            ['inventaris_id' => $inventarisId1, 'tanggal_pencatatan' => now(), 'berat' => 45.5, 'created_at' => now(), 'updated_at' => now()],
            
            ['inventaris_id' => $inventarisId2, 'tanggal_pencatatan' => now()->subMonths(2), 'berat' => 28.0, 'created_at' => now(), 'updated_at' => now()],
            ['inventaris_id' => $inventarisId2, 'tanggal_pencatatan' => now()->subMonths(1), 'berat' => 29.5, 'created_at' => now(), 'updated_at' => now()],
            ['inventaris_id' => $inventarisId2, 'tanggal_pencatatan' => now(), 'berat' => 30.0, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Seed Laporan Keuangan
        DB::table('laporan_keuangans')->insert([
            [
                'tanggal' => '2023-10-10',
                'jenis_transaksi' => 'Pemasukan',
                'jumlah' => 3500000,
                'keterangan' => 'Penjualan 1 ekor Kambing Etawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2023-10-12',
                'jenis_transaksi' => 'Pengeluaran',
                'jumlah' => 500000,
                'keterangan' => 'Pembelian pakan ternak',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Seed Artikels
        DB::table('artikels')->insert([
            [
                'judul' => 'Cara Merawat Kambing Etawa agar Cepat Besar',
                'konten' => 'Perawatan kambing etawa membutuhkan perhatian khusus pada nutrisi, kebersihan kandang, dan pemberian vitamin secara teratur. Kambing etawa memiliki potensi pertumbuhan yang sangat baik jika diberikan pakan yang kaya akan protein dan mineral. Pastikan kandang selalu kering dan memiliki sirkulasi udara yang baik untuk mencegah berbagai penyakit.',
                'kategori' => 'Peternakan',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pentingnya Vaksinasi Rutin untuk Hewan Ternak',
                'konten' => 'Vaksinasi adalah langkah pencegahan paling efektif terhadap penyakit menular pada hewan ternak. Penyakit seperti PMK (Penyakit Mulut dan Kuku) dapat sangat merugikan peternak jika tidak dicegah sejak dini. Selalu catat rekam medis dan jadwal vaksinasi setiap ternak untuk memastikan kesehatan populasi secara keseluruhan.',
                'kategori' => 'Kesehatan',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
