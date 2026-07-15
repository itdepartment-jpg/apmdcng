<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsArticle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'published_at',
        'category',
        'tags',
        'is_featured'
    ];

    protected $casts = [
        'published_at' => 'date',
        'tags' => 'array',
        'is_featured' => 'boolean'
    ];

    protected static function booted()
    {
        static::creating(function ($article) {
            // Ensure only one featured article
            if ($article->is_featured) {
                static::where('is_featured', true)->update(['is_featured' => false]);
            }
        });

        static::updating(function ($article) {
            // Ensure only one featured article
            if ($article->is_featured) {
                static::where('is_featured', true)
                    ->where('id', '!=', $article->id)
                    ->update(['is_featured' => false]);
            }
        });
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
