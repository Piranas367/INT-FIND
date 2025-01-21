<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DummyData;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DummyData::create(['name' => 'Item 1', 'description' => 'Description for Item 1']);
    DummyData::create(['name' => 'Item 2', 'description' => 'Description for Item 2']);
    DummyData::create(['name' => 'Item 3', 'description' => 'Description for Item 3']);
}
}
