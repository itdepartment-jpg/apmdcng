<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display the shipment tracking page.
     */
    public function index()
    {
        return view('tracking.index');
    }

    /**
     * Search for a shipment.
     */
    public function track(Request $request)
    {
        $validated = $request->validate([
            'tracking_number' => [
                'required',
                'string',
                'max:255',
            ],
        ]);

        $trackingNumber = trim($validated['tracking_number']);

        $shipment = Shipment::with([
            'partner',
            'carrier',
            'trackingEvents',
        ])
        ->where('tracking_number', $trackingNumber)
        ->orWhere('container_number', $trackingNumber)
        ->first();

        if (!$shipment) {
            return back()
                ->withInput()
                ->withErrors([
                    'tracking_number' =>
                        'We could not find a shipment with that tracking or container number.',
                ]);
        }

        return view('tracking.result', compact('shipment'));
    }
}