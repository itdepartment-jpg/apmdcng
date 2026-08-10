<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Carrier/Index', [
            'carriers' => Carrier::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Carrier/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:carriers,name',
            'code' => 'nullable|string|max:50',
            'website' => 'nullable|url|max:255',
            'contact_person' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'is_active' => 'required|boolean',
        ]);

        Carrier::create($validated);

        return redirect()
            ->route('admin.carriers.index')
            ->with('success', 'Carrier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrier $carrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrier $carrier)
    {
        return Inertia::render('Admin/Carrier/Edit', [
            'carrier' => $carrier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrier $carrier)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:carriers,name,' . $carrier->id,
            'code' => 'nullable|string|max:50',
            'website' => 'nullable|url|max:255',
            'contact_person' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'is_active' => 'required|boolean',
        ]);

        $carrier->update($validated);

        return redirect()
            ->route('admin.carriers.index')
            ->with('success', 'Carrier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrier $carrier)
    {
        $carrier->delete();

        return redirect()
            ->route('admin.carriers.index')
            ->with('success', 'Carrier deleted successfully.');
    }
}