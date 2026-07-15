<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProjectController extends Controller
{
    // Display all projects
    public function index()
    {
//        return Inertia::render('Admin/Projects/Index', [
//            'activeProjects' => Project::active()
//                ->with('categories')
//                ->get()
//                ->map(function ($project) {
//                    return [
//                        'id' => $project->id,
//                        'title' => $project->title,
//                        'slug' => $project->slug,
//                        'image_path' => asset('storage/'.$project->image_path),
//                        'location' => $project->location,
//                        'status' => $project->status,
//                        'categories' => $project->categories,
//                        'client_name' => $project->client_name,
//                        'start_date' => $project->start_date->format('Y-m-d'),
//                    ];
//                }),
//            'completedProjects' => Project::completed()
//                ->with('categories')
//                ->latest('end_date')
//                ->get()
//                ->map(function ($project) {
//                    return [
//                        'id' => $project->id,
//                        'title' => $project->title,
//                        'client_name' => $project->client_name,
//                        'end_date' => $project->end_date?->format('Y-m-d'),
//                        'scope_of_work' => $project->scope_of_work,
//                    ];
//                }),
//            'categories' => ProjectCategory::all()->map->only('id', 'name'),
//            'filters' => request()->only(['search', 'category']),
//        ]);

        return Inertia::render('Admin/Projects/Index', [
            'projects' => Project::with('categories')->paginate(10),
            'categories' => ProjectCategory::all(),
            'statusOptions' => ['active', 'completed', 'upcoming', 'archived']
        ]);
    }

    // Show single project
    public function show(Project $project)
    {
        return Inertia::render('Projects/Show', [
            'project' => [
                'id' => $project->id,
                'title' => $project->title,
                'description' => $project->description,
                'full_description' => $project->full_description,
                'image_path' => asset('storage/'.$project->image_path),
                'location' => $project->location,
                'client_name' => $project->client_name,
                'contractor' => $project->contractor,
                'scope_of_work' => $project->scope_of_work,
                'start_date' => $project->start_date->format('Y-m-d'),
                'end_date' => $project->end_date?->format('Y-m-d'),
                'status' => $project->status,
                'categories' => $project->categories,
                'vessel_image_path' => $project->vessel_image_path ? asset('storage/'.$project->vessel_image_path) : null,
            ],
            'relatedProjects' => Project::whereHas('categories', function($query) use ($project) {
                $query->whereIn('id', $project->categories->pluck('id'));
            })
                ->where('id', '!=', $project->id)
                ->take(3)
                ->get()
                ->map(function ($project) {
                    return [
                        'id' => $project->id,
                        'title' => $project->title,
                        'slug' => $project->slug,
                        'image_path' => asset('storage/'.$project->image_path),
                    ];
                }),
        ]);
    }

    // Show create form
    public function create()
    {
        return Inertia::render('Projects/Create', [
            'categories' => ProjectCategory::all(),
            'statusOptions' => ['active', 'completed', 'upcoming'],
        ]);
    }

    // Store new project
    public function store(Request $request)
    {

//        dd($request->all());
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'full_description' => 'nullable',
            'location' => 'required',
            'client_name' => 'required',
            'contractor' => 'nullable',
            'scope_of_work' => 'required|max:255',
            'status' => 'required|in:active,completed,upcoming',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'image' => 'required|image|max:2048',
            'vessel_image' => 'nullable|image|max:2048',
            'categories' => 'required|array',
            'categories.*' => 'exists:project_categories,id'


        ]);

        // Generate unique slug
        $slug = Str::slug($validated['title']);
        $count = 1;

        while (Project::where('slug', $slug)->exists()) {
            $slug = Str::slug($validated['title']) . '-' . $count++;
        }

//        dd($validated);

        $imagePath = $request->file('image')->store('project-images', 'public');
        $vesselImagePath = $request->file('vessel_image')
            ? $request->file('vessel_image')->store('vessel-images', 'public')
            : null;

        $project = Project::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'description' => $validated['description'],
            'full_description' => $validated['full_description'],
            'location' => $validated['location'],
            'client_name' => $validated['client_name'],
            'contractor' => $validated['contractor'],
            'scope_of_work' => $validated['scope_of_work'],
            'status' => $validated['status'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'image_path' => $imagePath,
            'vessel_image_path' => $vesselImagePath,
        ]);

        $project->categories()->attach($validated['categories']);
//
//        return redirect()->route('projects.index', $project->slug)
//            ->with('success', 'Project created successfully!');

//        return Inertia::render('Projects/Index', [
//            'projects' => Project::with('category')->paginate(10),
//            'success' => 'Project created successfully!',
//        ]);

//        return redirect()->route('projects.index')
//            ->with('success', 'Project created successfully!')
//            ->with('reloadProjects', true);
//

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully!');

    }

    // Show edit form
    public function edit(Project $project)
    {
        return Inertia::render('Projects/Edit', [
            'project' => [
                'id' => $project->id,
                'title' => $project->title,
                'description' => $project->description,
                'full_description' => $project->full_description,
                'location' => $project->location,
                'client_name' => $project->client_name,
                'contractor' => $project->contractor,
                'scope_of_work' => $project->scope_of_work,
                'status' => $project->status,
                'start_date' => $project->start_date->format('Y-m-d'),
                'end_date' => $project->end_date?->format('Y-m-d'),
                'image_path' => $project->image_path ? asset('storage/'.$project->image_path) : null,
                'vessel_image_path' => $project->vessel_image_path ? asset('storage/'.$project->vessel_image_path) : null,
                'categories' => $project->categories->pluck('id'),
            ],
            'categories' => ProjectCategory::all(),
            'statusOptions' => ['active', 'completed', 'upcoming'],
        ]);
    }

    // Update project
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'full_description' => 'nullable',
            'location' => 'required',
            'client_name' => 'required',
            'contractor' => 'nullable',
            'scope_of_work' => 'required|max:255',
            'status' => 'required|in:active,completed,upcoming',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
//            'image' => 'nullable|image|max:2048',
            'image' => 'sometimes|image|max:2048',
            'vessel_image' => 'nullable|image|max:2048',
            'categories' => 'required|array',
            'categories.*' => 'exists:project_categories,id'
        ]);

        $data = [
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'description' => $validated['description'],
            'full_description' => $validated['full_description'],
            'location' => $validated['location'],
            'client_name' => $validated['client_name'],
            'contractor' => $validated['contractor'],
            'scope_of_work' => $validated['scope_of_work'],
            'status' => $validated['status'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
        ];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($project->image_path);
            $data['image_path'] = $request->file('image')->store('project-images', 'public');
        }

        if ($request->hasFile('vessel_image')) {
            if ($project->vessel_image_path) {
                Storage::disk('public')->delete($project->vessel_image_path);
            }
            $data['vessel_image_path'] = $request->file('vessel_image')->store('vessel-images', 'public');
        }

        $project->update($data);
        $project->categories()->sync($validated['categories']);

        return redirect()->route('projects.index', $project->slug)
            ->with('success', 'Project updated successfully!');

//        return redirect()->route('projects.index')
//            ->with('success', 'Project created successfully!');
    }

    // Delete project
    public function destroy(Project $project)
    {
        Storage::disk('public')->delete($project->image_path);
        if ($project->vessel_image_path) {
            Storage::disk('public')->delete($project->vessel_image_path);
        }

        $project->categories()->detach();
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully!');
    }
}
