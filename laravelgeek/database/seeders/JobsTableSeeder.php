<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create(['name' => 'Frontend Web Programmer']);
        Job::create(['name' => 'Fullstack Web Programmer']);
        Job::create(['name' => 'Quality Control']);
    }
}
