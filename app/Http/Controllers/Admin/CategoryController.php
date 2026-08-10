<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display all blog categories.
     */
    public function index()
    {
        $categories = Category::query()
            ->withCount('posts')
            ->orderBy('name')
            ->paginate(10);

        return Inertia::render('Admin/Blog/Categories/Index', [
            'categories' => $categories,
        ]);
    }


    /**
     * Show the create category page.
     */
    public function create()
    {
        return Inertia::render('Admin/Blog/Categories/Create');
    }


    /**
     * Store a new category.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:125',
                'unique:categories,name',
            ],

            'description' => [
                'nullable',
                'string',
            ],
        ]);

        Category::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }


    /**
     * Show the edit category page.
     */
    public function edit(Category $category)
    {
        return Inertia::render('Admin/Blog/Categories/Edit', [
            'category' => $category,
        ]);
    }


    /**
     * Update an existing category.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:125',
                'unique:categories,name,' . $category->id,
            ],

            'description' => [
                'nullable',
                'string',
            ],
        ]);

        $category->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }


    /**
     * Delete a category.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}