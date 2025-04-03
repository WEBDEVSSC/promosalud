<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Promoción de la Salud',
            'email' => 'promo@saludcoahuila.gob.mx',
            'password' => Hash::make('Vector0330$'), 
        ]);
    }
}
