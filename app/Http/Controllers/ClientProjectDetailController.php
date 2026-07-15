<?php

namespace App\Http\Controllers;

use App\Models\ClientProjectDetail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientProjectDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        return Inertia::render('Admin/ClientProjectDetails/Index', [
            'projects' => ClientProjectDetail::query()
                ->when(request('search'), function ($query, $search) {
                    $query->where('client', 'like', "%{$search}%")
                        ->orWhere('location_project', 'like', "%{$search}%");
                })
                ->orderBy('commencement_date', 'desc')
                ->paginate(10)
                ->withQueryString(),
            'filters' => request()->only(['search']),
        ]);
    }

    public function indexBlade()
    {
        $projects = ClientProjectDetail::query()
            ->when(request('search'), function ($query, $search) {
                $query->where('client', 'like', "%{$search}%")
                    ->orWhere('location_project', 'like', "%{$search}%");
            })
            ->orderByRaw("CASE WHEN status = 'active' THEN 0 ELSE 1 END")
            ->orderBy('commencement_date', 'desc')
            ->paginate(1000);

        $projects2 = ClientProjectDetail::query()
            ->where('status', 'active') // Filter for active projects only
            ->when(request('search'), function ($query, $search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery->where('client', 'like', "%{$search}%")
                        ->orWhere('location_project', 'like', "%{$search}%");
                });
            })
            ->orderBy('commencement_date', 'desc')
            ->paginate(1000);


        // Transform the collection
        $formattedProjects = $projects->map(function ($project) {
            return [
                'year' => $project->commencement_date ? $project->commencement_date->format('Y') : null,
                'client' => $project->client,
                'location' => $project->location_project,
                'work' => $project->description_of_work, // Assuming you have a description field
            ];
        });

        $formattedProjects2 = $projects2->map(function ($project) {
            return [
                'year' => $project->commencement_date ? $project->commencement_date->format('Y') : null,
                'client' => $project->client,
                'location' => $project->location_project,
                'work' => $project->description_of_work,
            ];
        });

        return view('seo-page.projects', [
            'projects' => $projects,
            'formattedProjects' => $formattedProjects,
            'formattedProjects2' => $formattedProjects2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/ClientProjectDetails/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'client' => 'required|string|max:255',
            'main_contractor' => 'required|string|max:255',
            'location_project' => 'required|string|max:255',
            'description_of_work' => 'required|string',
            'commencement_date' => 'required|date',
            'status' => 'required|in:active,inactive',
        ]);

        ClientProjectDetail::create($validated);

        return redirect()->route('client-project-details.index')
            ->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientProjectDetail $clientProjectDetail)
    {
        return Inertia::render('Admin/ClientProjectDetails/Show', [
            'project' => $clientProjectDetail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientProjectDetail $clientProjectDetail)
    {
        return Inertia::render('Admin/ClientProjectDetails/Edit', [
            'project' => $clientProjectDetail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientProjectDetail $clientProjectDetail)
    {
        $validated = $request->validate([
            'client' => 'required|string|max:255',
            'main_contractor' => 'required|string|max:255',
            'location_project' => 'required|string|max:255',
            'description_of_work' => 'required|string',
            'commencement_date' => 'required|date',
            'status' => 'required|in:active,inactive',
        ]);

        $clientProjectDetail->update($validated);

        return redirect()->route('client-project-details.index')
            ->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientProjectDetail $clientProjectDetail)
    {
        $clientProjectDetail->delete();

        return redirect()->route('client-project-details.index')
            ->with('success', 'Project deleted successfully!');
    }

    /**
     * Toggle project status
     */
    public function toggleStatus(ClientProjectDetail $clientProjectDetail)
    {
        $clientProjectDetail->update([
            'status' => $clientProjectDetail->status === 'active' ? 'inactive' : 'active'
        ]);

        return back()->with('success', 'Status updated successfully!');
    }
}
