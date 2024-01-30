<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(/*Faker $faker*/)
    {
        // for($i=0; $i<5; $i++){
        //     $type = new Type();
        //     $type->name = $faker->word();
        //     $type->slug = Str::slug($type->name);
        //     $type->save();
        // }

        $types = ['School project', 'Personal project', 'Work project'];
        foreach($types as $type){
            $new_Type = new Type();
            $new_Type->name = $type;
            $new_Type->slug = Str::slug($new_Type->name); 
            $new_Type->save();
        }
    }
}
