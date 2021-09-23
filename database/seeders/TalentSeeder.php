<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Talent;
use Faker\Factory as Faker;

class TalentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Talent::factory()->times(200)->create();
    }
}
