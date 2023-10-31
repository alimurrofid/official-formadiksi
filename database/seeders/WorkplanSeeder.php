<?php

namespace Database\Seeders;

use App\Models\Workplan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workplan::factory(10)->create();
    }
}
