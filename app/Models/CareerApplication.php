<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CareerApplication extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'career_id',
        'full_name',
        'email',
        'phone',
        'cover_letter',
        'cv_path',
        'status',
    ];

    /**
     * Get the career this application belongs to.
     */
    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }
}