<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    
    public function projects(){
        return $this->hasMany(Project::class); //A type can be associated to multiple projects, so we use hasMany and `projects` must be plural.
    }
    
}
