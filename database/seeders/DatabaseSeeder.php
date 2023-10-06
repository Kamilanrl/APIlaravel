<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Rak;
use App\Models\Anggota;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Anggota::create([
        "kode_anggota" => "123456789",
        "nama_anggota" => "Kayla Azka",
        "jk_anggota" => "P",
        "jurusan_anggota" => "RP",
        "no_telp_anggota" => "089624539981",
        "alamat_anggota" => "Rawamangun"
       ]);

       Anggota::create([
        "kode_anggota" => "123456790",
        "nama_anggota" => "Afrah Nabila",
        "jk_anggota" => "P",
        "jurusan_anggota" => "RP",
        "no_telp_anggota" => "089967859651",
        "alamat_anggota" => "Jatinegara"
       ]);

       Petugas::create([
        "nama_petugas" => "Shakira Faraj",
        "jabatan_petugas" => "Kepala Perpus",
        "no_telp_petugas" => "089678509666",
        "alamat_petugas" => "Kramat Jati"
       ]);

       Petugas::create([
        "nama_petugas" => "Kamila Nurul",
        "jabatan_petugas" => "Operator",
        "no_telp_petugas" => "089767859662",
        "alamat_petugas" => "Utan Kayu"
       ]);

       Buku::create([
        "kode_buku" => "12345",
        "judul_buku" => "Resep Masakan",
        "penulis_buku" => "Nabila Putri",
        "penerbit_buku" => "Gramedia",
        "tahun_penerbit" => "2020",
        "stok" => 32
       ]);

       Buku::create([
        "kode_buku" => "12346",
        "judul_buku" => "Kisah Nabi",
        "penulis_buku" => "Nabil Anwar",
        "penerbit_buku" => "Mizan",
        "tahun_penerbit" => "2021",
        "stok" => 12
       ]);

       Rak::create([
        "nama_rak" => "Masakan",
        "lokasi_rak" => "lt-1",
        "buku_id" => 1
       ]);

       Rak::create([
        "nama_rak" => "Agama",
        "lokasi_rak" => "lt-2",
        "buku_id" => 2
       ]);

       Peminjaman::create([
        "tanggal_pinjam" => "2023-10-02",
        "tanggal_kembali" => "2023-10-07",
        "buku_id" => 1,
        "anggota_id" => 1,
        "petugas_id" => 1,
       ]);

       Peminjaman::create([
        "tanggal_pinjam" => "2023-10-01",
        "tanggal_kembali" => "2023-10-04",
        "buku_id" => 2,
        "anggota_id" => 2,
        "petugas_id" => 2,
       ]);

       Pengembalian::create([
        "tanggal_pengembalian" => "2023-10-08",
        "denda" => 35000,
        "buku_id" => 1,
        "anggota_id" => 1,
        "petugas_id" => 1,
       ]);

       Pengembalian::create([
        "tanggal_pengembalian" => "2023-10-04",
        "denda" => 0,
        "buku_id" => 2,
        "anggota_id" => 2,
        "petugas_id" => 2,
       ]);
    }
}
