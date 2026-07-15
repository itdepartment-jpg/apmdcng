<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'full_description',
        'location',
        'image_path',
        'client_name',
        'contractor',
        'scope_of_work',
        'vessel_name',
        'vessel_image_path',
        'service_type',
        'status',
        'is_featured',
        'start_date',
        'end_date',
        'has_testimonial'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_featured' => 'boolean',
        'has_testimonial' => 'boolean'
    ];

    // Relationship with categories (many-to-many)
//    public function categories()
//    {
//        return $this->belongsToMany(ProjectCategory::class, 'category_project')->withTimestamps();
//    }
    public function categories()
    {
        return $this->belongsToMany(ProjectCategory::class, 'category_project', 'project_id', 'category_id')->withTimestamps();
    }




    // Scope for active projects
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Scope for completed projects
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    // Scope for featured projects
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
