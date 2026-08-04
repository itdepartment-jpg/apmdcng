<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'contact_person',
        'email',
        'phone',
        'address',
        'is_active',
    ];

    /**
     * A Partner can have many Shipments.
     */
    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }
}