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
   public function index(Request $request)
{
    /*
    |--------------------------------------------------------------------------
    | Base Query
    |--------------------------------------------------------------------------
    */

    $query = Shipment::with([
        'partner',
        'carrier',
    ]);


    /*
    |--------------------------------------------------------------------------
    | Search
    |--------------------------------------------------------------------------
    */

    $query->when($request->filled('search'), function ($query) use ($request) {

        $search = $request->input('search');

        $query->where(function ($query) use ($search) {

            $query->where('shipment_reference', 'like', "%{$search}%")
                ->orWhere('container_number', 'like', "%{$search}%")
                ->orWhere('vessel_name', 'like', "%{$search}%");

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Status Filter
    |--------------------------------------------------------------------------
    */

    $query->when($request->filled('status'), function ($query) use ($request) {

        $query->where('status', $request->input('status'));

    });


    /*
    |--------------------------------------------------------------------------
    | Partner Filter
    |--------------------------------------------------------------------------
    */

    $query->when($request->filled('partner_id'), function ($query) use ($request) {

        $query->where('partner_id', $request->input('partner_id'));

    });


    /*
    |--------------------------------------------------------------------------
    | Carrier Filter
    |--------------------------------------------------------------------------
    */

    $query->when($request->filled('carrier_id'), function ($query) use ($request) {

        $query->where('carrier_id', $request->input('carrier_id'));

    });


    /*
    |--------------------------------------------------------------------------
    | ETA Date Range
    |--------------------------------------------------------------------------
    */

    $query->when($request->filled('eta_from'), function ($query) use ($request) {

        $query->whereDate('eta', '>=', $request->input('eta_from'));

    });

    $query->when($request->filled('eta_to'), function ($query) use ($request) {

        $query->whereDate('eta', '<=', $request->input('eta_to'));

    });


    /*
    |--------------------------------------------------------------------------
    | Paginated Shipments
    |--------------------------------------------------------------------------
    */

    $shipments = $query
        ->latest()
        ->paginate(10)
        ->withQueryString();


    /*
    |--------------------------------------------------------------------------
    | Summary Cards
    |--------------------------------------------------------------------------
    */

    $totalShipments = Shipment::count();

    $onTransit = Shipment::where('status', 'ON TRANSIT')->count();

    $awaitingLoading = Shipment::where('status', 'AWAITING LOADING')->count();

    $delivered = Shipment::whereIn('status', [
        'DELIVERED',
        'COMPLETED',
    ])->count();


    /*
    |--------------------------------------------------------------------------
    | Filter Options
    |--------------------------------------------------------------------------
    */

    $statuses = Shipment::query()
        ->whereNotNull('status')
        ->where('status', '!=', '')
        ->distinct()
        ->orderBy('status')
        ->pluck('status');

    $partners = Partner::query()
        ->orderBy('name')
        ->get([
            'id',
            'name',
        ]);

    $carriers = Carrier::query()
        ->orderBy('name')
        ->get([
            'id',
            'name',
        ]);


    /*
    |--------------------------------------------------------------------------
    | Response
    |--------------------------------------------------------------------------
    */

    return Inertia::render('Admin/Shipment/Index', [

        'shipments' => $shipments,

        'filters' => $request->only([
            'search',
            'status',
            'partner_id',
            'carrier_id',
            'eta_from',
            'eta_to',
        ]),

        'statuses' => $statuses,

        'partners' => $partners,

        'carriers' => $carriers,

        'stats' => [
            'total' => $totalShipments,
            'on_transit' => $onTransit,
            'awaiting_loading' => $awaitingLoading,
            'delivered' => $delivered,
        ],
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