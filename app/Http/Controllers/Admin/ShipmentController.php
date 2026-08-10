<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\Partner;
use App\Models\Carrier;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Validation\Rule;

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
        ])
            ->latest()
            ->paginate(10);

        return Inertia::render('Admin/Shipment/Index', [
            'shipments' => $shipments,
        ]);
    }

    /**
     * Show the form for creating a new shipment.
     */
    public function create()
    {
        return Inertia::render('Admin/Shipment/Create', [
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
            'container_number' => 'required|string|max:255|unique:shipments,container_number',
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
        return Inertia::render('Admin/Shipment/Show', [
            'shipment' => $shipment->load([
                'partner',
                'carrier',
            ]),
        ]);
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
            'container_number' => [
                'required',
                'string',
                'max:255',
                Rule::unique('shipments', 'container_number')
                    ->ignore($shipment->id),
            ],
            'container_size' => 'required|string|max:50',
            'vessel_name'    => 'required|string|max:255',
            'partner_id'     => 'required|exists:partners,id',
            'carrier_id'     => 'required|exists:carriers,id',
            'status'         => 'required|string|max:255',
            'eta'            => 'nullable|date',
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
        $shipment->delete();

        return redirect()
            ->route('admin.shipments.index')
            ->with('success', 'Shipment deleted successfully.');
    }
}