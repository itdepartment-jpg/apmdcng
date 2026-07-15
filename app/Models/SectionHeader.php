<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionHeader extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_name',
        'title',
        'description'
    ];

    /**
     * Get header by section name
     */
    public static function getBySection($sectionName)
    {
        return static::firstOrCreate(
            ['section_name' => $sectionName],
            [
                'title' => 'Default Title',
                'description' => 'Default description text'
            ]
        );
    }
}
