<?php

use App\Pet;
use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::create([
            'name' => 'Ahdul',
            'species' => 'Dog',
            'breed' => 'Japanese Spitz',
        ]);
        Pet::create([
            'name' => 'Lester',
            'species' => 'Hamster',
            'breed' => 'X',
        ]);
    }
}
