<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage; // Added this line

class LeadershipTeam extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'image_path',
        'description',
        'category',
        'order',
        'email',
        'phone',
        'linkedin',
        'appointed_date'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'appointed_date' => 'date',
        'order' => 'integer'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image_url']; // Added this to automatically include the accessor

    /**
     * Get the image URL attribute
     */
    public function getImageUrlAttribute()
    {
        return $this->image_path ? Storage::url($this->image_path) : null;
    }

    /**
     * Scope for executive members
     */
    public function scopeExecutives($query)
    {
        return $query->where('category', 'executive')->orderBy('order');
    }

    /**
     * Scope for senior management members
     */
    public function scopeSeniors($query)
    {
        return $query->where('category', 'senior')->orderBy('order');
    }

    /**
     * Scope for key personnel members
     */
    public function scopeKeyPersonnel($query)
    {
        return $query->where('category', 'key')->orderBy('order');
    }

    /**
     * The "booted" method of the model.
     */
    protected static function booted()
    {
        static::deleting(function ($member) {
            if ($member->isForceDeleting() && $member->image_path) {
                Storage::delete($member->image_path);
            }
        });
    }
}
