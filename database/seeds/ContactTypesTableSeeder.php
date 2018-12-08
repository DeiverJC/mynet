<?php

use Illuminate\Database\Seeder;
use App\Models\ContactType;

class ContactTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactType::create(['title' => 'Cliente']);
        ContactType::create(['title' => 'Proveedor']);
    }
}
