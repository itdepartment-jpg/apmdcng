<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

   protected $fillable = [
    'reference_no',
    'title',
    'slug',
    'department',
    'location',
    'employment_type',
    'experience_required',
    'education',
    'salary',
    'vacancies',
    'application_deadline',
    'description',
    'responsibilities',
    'requirements',
    'status',
    'featured',
    'job_document',
];

    /**
 * Get applications submitted for this career.
 */
public function applications(): HasMany
{
    return $this->hasMany(CareerApplication::class);
}

}