<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProjectCategoryController extends Controller
{
    // Display all categories
//    public function index()
//    {
//        return Inertia::render('Admin/ProjectCategories/Index', [
//            'categories' => ProjectCategory::withCount('projects')
//                ->get()
//                ->map(function ($category) {
//                    return [
//                        'id' => $category->id, // corrected here
//                        'name' => $category->name,
//                        'slug' => $category->slug,
//                        'projects_count' => $category->projects_count,
//                        'description' => $category->description,
//                    ];
//                }),
//        ]);
//    }

    public function index()
    {
        $categories = ProjectCategory::withCount('projects')->paginate(10);

        return Inertia::render('Admin/ProjectCategories/Index', [
            'categories' => $categories,
//            'canEdit' => Auth::user()->can('edit project categories'), // example permission
        ]);
    }



    // Store new category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:project_categories|max:255',
            'description' => 'nullable|string'
        ]);

        ProjectCategory::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description']
        ]);

        return back()->with('success', 'Category created successfully!');
    }

    // Update category
    public function update(Request $request, ProjectCategory $category)
    {

//        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|max:255|unique:project_categories,name,'.$category->id,
            'description' => 'nullable|string'
        ]);

        $category->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description']
        ]);

        return back()->with('success', 'Category updated successfully!');
    }

    // Delete category
    public function destroy(ProjectCategory $category)
    {
        $category->projects()->detach();
        $category->delete();

        return back()->with('success', 'Category deleted successfully!');
    }
}
