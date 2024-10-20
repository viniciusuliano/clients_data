<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
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

        Client::factory()->create([
            'nome' => 'Vinicebas',
            'email' => 'teste123@gmail.com',
            'cpf'=> '123456789123',
        ]);
    }
}
