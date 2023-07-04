<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santos\SantosSanto;

class SantosSantoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SantosSanto::factory(5)->create();
    }
}
