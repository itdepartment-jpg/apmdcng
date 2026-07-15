<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PressRelease extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'released_at',
        'pdf_path'
    ];

    protected $casts = [
        'released_at' => 'date'
    ];

    public function scopeRecent($query)
    {
        return $query->orderBy('released_at', 'desc');
    }

    public function scopeReleased($query)
    {
        return $query->where('released_at', '<=', now());
    }
}
