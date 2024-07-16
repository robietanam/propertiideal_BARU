<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Seeder User
        // Admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'test@gmail.com',
            'nama' => 'superadmin',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Admin'
        ]);
        // Customer
        DB::table('users')->insert([
            'name' => 'alifrmdn',
            'email' => 'alif@gmail.com',
            'nama' => 'Alif Ramadhan',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Customer'
        ]);
        // Partner
        DB::table('users')->insert([
            'name' => 'altamisat',
            'email' => 'altamis@gmail.com',
            'nama' => 'Altamis Homestay',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Partner'
        ]);
        DB::table('users')->insert([
            'name' => 'alifanes',
            'email' => 'ali@gmail.com',
            'nama' => 'Perum Permata Indah',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Partner'
        ]);

        // Seeder Partner

        DB::table('partner')->insert([
            'no_telepon' => '083xxxxxx',
            'detail_alamat' => 'Jember, Jawa Timur',
            'link_instagram' => 'https://instagram.com',
            'link_website' => 'https://github.com',
            'foto_ktp' => 'ktp.png',
            'status' => 'Belum Verifikasi',
            'user_id' => 3,
        ]);
        DB::table('partner')->insert([
            'no_telepon' => '081xxxxxx',
            'detail_alamat' => 'Lumajang, Jawa Timur',
            'link_instagram' => 'https://instagram.com',
            'link_website' => 'https://github.com',
            'foto_ktp' => 'ktp.png',
            'status' => 'Belum Verifikasi',
            'user_id' => 4,
        ]);

        // Seeder Profile Perusahaan

        DB::table('profile_perusahaan')->insert([
            'nama_perusahaan' => 'Properti Ideal',
            'privacy_policy' => 'tes',
            'no_hp' => '08xxxxxx',
            'instagram' => 'instagram.com',
            'email' => 'properti@gmail.com'
        ]);

        // Seeder Kategori Properti

        DB::table('kategori_properti')->insert([
            'nama_kategori' => 'Rumah',
            'slug' => 'rumah'
        ]);
        DB::table('kategori_properti')->insert([
            'nama_kategori' => 'Kos',
            'slug' => 'kos'
        ]);
        DB::table('kategori_properti')->insert([
            'nama_kategori' => 'Tanah',
            'slug' => 'tanah'
        ]);
        DB::table('kategori_properti')->insert([
            'nama_kategori' => 'Apartement',
            'slug' => 'apartement'
        ]);
        DB::table('kategori_properti')->insert([
            'nama_kategori' => 'Ruko',
            'slug' => 'ruko'
        ]);

        // Seeder Kategori Solution

        DB::table('kategori_solution')->insert([
            'nama_kategori' => 'Solusi Pembangunan & Renovasi',
            'deskripsi_kategori' => 'Pembangunan & Renovasi Semakin mudah',
            'slug' => 'rumah'
        ]);
        DB::table('kategori_solution')->insert([
            'nama_kategori' => 'Solusi Design Interior',
            'deskripsi_kategori' => 'Percantik Interior anda dengan design yang memukau',
            'slug' => 'kos'
        ]);
        DB::table('kategori_solution')->insert([
            'nama_kategori' => 'Solusi Design Exterior',
            'deskripsi_kategori' => 'Pemandangan exterior jadi lebih indah dan cepat',
            'slug' => 'tanah'
        ]);
        DB::table('kategori_solution')->insert([
            'nama_kategori' => 'Reparasi Hunian',
            'deskripsi_kategori' => 'Lengkapi Rumah anda dengan barang-barang yang berkualitas',
            'slug' => 'apartement'
        ]);

        // Seeder Kategori Penjualan

        DB::table('kategori_penjualan')->insert([
            'nama_kategori' => 'Jual',
            'slug' => 'jual'
        ]);
        DB::table('kategori_penjualan')->insert([
            'nama_kategori' => 'Sewa',
            'slug' => 'sewa'
        ]);

        // Seeder jenis foto
        DB::table('jenis_foto')->insert([
            'jenis_foto' => 'Depan'
        ]);
        DB::table('jenis_foto')->insert([
            'jenis_foto' => 'Samping Kiri'
        ]);
        DB::table('jenis_foto')->insert([
            'jenis_foto' => 'Samping Kanan'
        ]);
        DB::table('jenis_foto')->insert([
            'jenis_foto' => 'Belakang'
        ]);

    }
}
