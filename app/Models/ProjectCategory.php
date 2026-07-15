<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    // Many-to-Many: A category can belong to many projects
//    public function projects()
//    {
//        return $this->belongsToMany(Project::class, 'category_project')->withTimestamps();
//    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'category_project', 'category_id', 'project_id')->withTimestamps();
    }


    // Helper method to find by slug
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }
}
