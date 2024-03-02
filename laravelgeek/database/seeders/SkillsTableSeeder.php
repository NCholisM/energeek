<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create(['name' => 'PHP']);
        Skill::create(['name' => 'PostgreSQL']);
        Skill::create(['name' => 'API (JSON, REST)']);
        Skill::create(['name' => 'Version Control System (Gitlab, Github)']);
    }
}
