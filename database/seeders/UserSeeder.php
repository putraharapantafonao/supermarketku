<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::where('name', 'Owner')->first();
        $kasirRole = Role::where('name', 'Kasir')->first();

        User::create([
            'name' => 'Owner SupermarketKu',
            'email' => 'owner@supermarketku.com',
            'password' => Hash::make('password'),
            'role_id' => $ownerRole->id,
        ]);

        User::create([
            'name' => 'Kasir SupermarketKu',
            'email' => 'kasir@supermarketku.com',
            'password' => Hash::make('password'),
            'role_id' => $kasirRole->id,
        ]);
    }
}
