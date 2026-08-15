<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShipmentTrackingEvent extends Model
{
    protected $fillable = [
        'shipment_id',
        'status',
        'location',
        'description',
        'event_date',
    ];

    protected $casts = [
        'event_date' => 'datetime',
    ];

    public function shipment(): BelongsTo
    {
        return $this->belongsTo(Shipment::class);
    }
}