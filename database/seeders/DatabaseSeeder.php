<?php

namespace Database\Seeders;

use App\Models\Santos\SantoCronologia;
use App\Models\Santos\SantoPatrono;
use Illuminate\Database\Seeder;
use App\Models\Santos\SantoSanto;
use App\Models\Santos\SantoSantuario;
use App\Models\Santos\SantoPensamiento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Post::factory(10)->create();
        SantoSantuario::factory(5)->create();

        SantoSanto::factory(5)
            ->has(SantoPensamiento::factory()->count(3))
            ->has(SantoCronologia::factory()->count(3))
            ->has(SantoPatrono::factory()->count(3))
            ->create();
    }
}
