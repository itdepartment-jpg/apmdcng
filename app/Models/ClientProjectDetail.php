<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProjectDetail extends Model
{
    //
    protected $fillable = [
        'client',
        'main_contractor',
        'location_project',
        'description_of_work',
        'commencement_date',
        'status',
    ];
    protected $casts = [
        'commencement_date' => 'date',
    ];


}
