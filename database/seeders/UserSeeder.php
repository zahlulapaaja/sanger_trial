<?php

namespace Database\Seeders;

use Faker\Generator;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $demoUser1 = User::create([
            'name'  => $faker->name,
            'email' => 'demo@dummy.com',
            'password' => Hash::make('demo123'),
            'email_verified_at' => now(),
        ])->assignRole('administrator');

        $demoUser2 = User::create([
            'name'  => $faker->name,
            'email' => 'kepala@dummy.com',
            'password' => Hash::make('kepala123'),
            'email_verified_at' => now(),
        ])->assignRole('kepala');

        $demoUser3 = User::create([
            'name'  => $faker->name,
            'email' => 'pegawai@dummy.com',
            'password' => Hash::make('pegawai123'),
            'email_verified_at' => now(),
        ])->assignRole('ppk');

        $demoUser4 = User::create([
            'name'  => $faker->name,
            'email' => 'trial@dummy.com',
            'password' => Hash::make('trial123'),
            'email_verified_at' => now(),
        ])->assignRole('pegawai');
    }
}
