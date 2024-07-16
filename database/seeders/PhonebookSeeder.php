<?php

namespace Database\Seeders;

use App\Models\Phonebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phonebook::factory(300)->create();
    }
}
