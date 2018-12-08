<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'is_inventorial' => 0,
            'title' => 'Internet 2MG',
            'refence_code' => 1001,
            'sale_price' => 52000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tax' => 0,
        ]);

        Item::create([
            'is_inventorial' => 0,
            'title' => 'Internet 4MG',
            'refence_code' => 1002,
            'sale_price' => 72000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tax' => 0,
        ]);

        Item::create([
            'is_inventorial' => 0,
            'title' => 'Internet 10MG',
            'refence_code' => 1003,
            'sale_price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tax' => 0,
        ]);

        Item::create([
            'is_inventorial' => 1,
            'title' => 'Routers',
            'refence_code' => 1004,
            'sale_price' => 53000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tax' => 0,
            'unit_measure' => 'U',
            'unit_price' => 50000,
            'initial_amount' => 5
        ]);

        Item::create([
            'is_inventorial' => 1,
            'title' => 'Antenas T2',
            'refence_code' => 1005,
            'sale_price' => 47000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tax' => 0,
            'unit_measure' => 'U',
            'unit_price' => 40000,
            'initial_amount' => 15
        ]);
    }
}
