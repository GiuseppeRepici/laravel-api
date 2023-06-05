<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++){
            $project = new Project();
            $project->name = $faker->sentence(3);
            $project->slug = Str::slug($project->name, '-');
            $project->description = $faker->text();
            $project->save();
        }
    }
}
