<?php

use App\Pizza;
use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = Pizza::create([
            'name' => 'Pepperoni Pizza',
        ]);

        $pizza->toppings()->create([
            'name' => 'Cheese'
        ]);

        $pizza->toppings()->create([
            'name' => 'Pepperoni'
        ]);
    }
}
