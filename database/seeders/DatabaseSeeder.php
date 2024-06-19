<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);



    Mahasiswa::table('mahasiswas')->insert([
        ['nama' => 'John Doe', 'email' => 'john@example.com', 'umur' => 25],
        ['nama' => 'Jane Smith', 'email' => 'jane@example.com', 'umur' => 30],
        ['nama' => 'Mike Johnson', 'email' => 'mike@example.com', 'umur' => 35],
    ]);


    }
}
