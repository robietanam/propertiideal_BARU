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

        DB::table('profile_perusahaan')->insert([
            'nama_perusahaan' => 'Properti Ideal',
            'privacy_policy' => 'tes',
            'no_hp' => '08xxxxxx',
            'instagram' => 'instagram.com',
            'email' => 'properti@gmail.com'
        ]);
    }
}
