<?php

namespace Database\Seeders;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        // $projects = config('projects');

        
            for($i=0; $i<5; $i++){
                $project = new Project();
                $project->title = $faker->sentence(3);
                $project->description = $faker->text(200);
                $project->languages = $faker->sentence(3);
                $project->n_stakeholders = $faker->numberBetween(1,5);
                $project->year = $faker->year();
                $project->git_link = $faker->url();
                // $project->slug = Str::slug($project->title);
                $project->type_id = Type::all()->first()->id;
                $project->save();
            }
        

        
    }
}