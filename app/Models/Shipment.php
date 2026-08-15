<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipment extends Model
{
    protected $fillable = [
        'shipment_reference',
        'tracking_number',
        'container_number',
        'container_size',
        'vessel_name',
        'partner_id',
        'carrier_id',
        'status',
        'eta',
    ];

    protected $casts = [
        'eta' => 'date',
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function carrier(): BelongsTo
    {
        return $this->belongsTo(Carrier::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function trackingEvents(): HasMany
    {
        return $this->hasMany(ShipmentTrackingEvent::class)
            ->orderBy('event_date', 'desc');
    }
}