<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'cover_image', 'languages', 'n_stakeholders', 'year', 'git_link', 'slug', 'type_id'];

    
    public function setTitleAttribute($_title){
        $this->attributes['title'] = $_title;
        $this->attributes['slug'] = Str::slug($_title, '-'); 
    }

    public function type() {
        return $this->belongsTo(Type::class); //A project has a single type, so we use belongsTo and `type` must be singular.
    }
    
}
