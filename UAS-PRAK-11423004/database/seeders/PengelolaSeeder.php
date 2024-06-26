<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengelolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengelolas')->insert([
            'namaPengelola' => 'pak',
            'username' => 'pengelola',
            'password' => Hash::make('pengelolaganteng'),
        ]);
    }
}
