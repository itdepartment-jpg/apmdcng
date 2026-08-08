<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Partner;
use App\Models\Carrier;
use App\Models\ShipmentStatus;

class ShipmentController extends Controller
{
    /**
     * Display a listing of shipments.
     */
    public function index()
    {
        $shipments = Shipment::with([
            'partner',
            'carrier',
        ])->latest()->paginate(10);

        return inertia('Admin/Shipment/Index', [
            'shipments' => $shipments,
        ]);
    }

    /**
     * Show the form for creating a new shipment.
     */
    public function create()
    {
        return inertia('Admin/Shipment/Create', [
            'partners' => Partner::orderBy('name')->get(),
            'carriers' => Carrier::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created shipment.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'container_number' => 'required|string|max:255|unique:shipments',
            'container_size'   => 'required|string|max:50',
            'vessel_name'      => 'required|string|max:255',
            'partner_id'       => 'required|exists:partners,id',
            'carrier_id'       => 'required|exists:carriers,id',
            'status'           => 'required|string|max:255',
            'eta'              => 'nullable|date',
        ]);

        // Get the next shipment sequence number
        $nextNumber = (Shipment::max('id') ?? 0) + 1;

        // Generate Shipment Reference
        $validated['shipment_reference'] = sprintf(
            'SHP-%s-%06d',
            now()->year,
            $nextNumber
        );

        // Generate Tracking Number
        $validated['tracking_number'] = sprintf(
            'APMDC-%s-%06d',
            now()->year,
            $nextNumber
        );

        Shipment::create($validated);

        return redirect()
            ->route('admin.shipments.index')
            ->with('success', 'Shipment created successfully.');
    }

    /**
     * Display the specified shipment.
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified shipment.
     */
    public function edit(Shipment $shipment)
    {
        return Inertia::render('Admin/Shipment/Edit', [
            'shipment' => $shipment->load([
                'partner',
                'carrier',
            ]),
            'partners' => Partner::orderBy('name')->get(),
            'carriers' => Carrier::orderBy('name')->get(),
        ]);
    }

    /**
     * Update the specified shipment.
     */
    public function update(Request $request, Shipment $shipment)
{
    $validated = $request->validate([
        'container_number' => 'required|string|max:255',
        'container_size'   => 'required|string|max:50',
        'vessel_name'      => 'required|string|max:255',
        'partner_id'       => 'required|exists:partners,id',
        'carrier_id'       => 'required|exists:carriers,id',
        'status'           => 'required|string|max:255',
        'eta'              => 'nullable|date',
    ]);

    $shipment->update($validated);

    return redirect()
        ->route('admin.shipments.index')
        ->with('success', 'Shipment updated successfully.');
}
    /**
     * Remove the specified shipment.
     */
    public function destroy(Shipment $shipment)
    {
        //
    }
}