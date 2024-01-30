<?php

namespace Database\Seeders;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['laravel', 'vue', 'node', 'angular', 'react'];

        foreach($technologies as $technology){
            $new_technology = new Technology(); //refers to the model
            $new_technology->name = $technology;
            $new_technology->save();
        }
    }
}
