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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'test@gmail.com',
        //     'password' => Hash::make("bismillah"),
        //     'foto_profile' => 'user.png'
        // ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'test@gmail.com',
            'nama' => 'superadmin',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Admin'
        ]);
        DB::table('users')->insert([
            'name' => 'alifrmdn',
            'email' => 'alif@gmail.com',
            'nama' => 'Alif Ramadhan',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Customer'
        ]);
        DB::table('users')->insert([
            'name' => 'altamisat',
            'email' => 'altamis@gmail.com',
            'nama' => 'Altamis Homestay',
            'password' => Hash::make("bismillah"),
            'foto_profile' => 'user.png',
            'role' => 'Partner'
        ]);
        DB::table('partner')->insert([
            'no_telepon' => '083xxxxxx',
            'detail_alamat' => 'Jember, Bondowoso',
            'link_instagram' => 'https://instagram.com',
            'link_website' => 'https://github.com',
            'foto_ktp' => 'ktp.png',
            'status' => 'Belum Verifikasi',
            'user_id' => 3,
        ]);
        DB::table('profile_perusahaan')->insert([
            'nama_perusahaan' => 'Properti Ideal',
            'privacy_policy' => 'tes',
            'no_hp' => '08xxxxxx',
            'instagram' => 'instagram.com',
            'email' => 'properti@gmail.com'
        ]);
    }
}
