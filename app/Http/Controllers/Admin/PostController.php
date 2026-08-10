<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display all blog articles.
     */
    public function index()
    {
        $posts = Post::with(['category', 'author'])
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $categories = Category::orderBy('name')->get([
            'id',
            'name',
        ]);

        return Inertia::render('Admin/Blog/Index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new article.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get([
            'id',
            'name',
        ]);

        return Inertia::render('Admin/Blog/Create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created article.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:125'],
        'excerpt' => ['nullable', 'string'],
        'content' => ['required', 'string'],
        'category_id' => ['required', 'exists:categories,id'],
        'status' => ['required', 'in:draft,published'],
        'published_at' => ['nullable', 'date'],
        'featured_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
    ]);

    $validated['slug'] = Str::slug($validated['title']);

    $validated['author_id'] = auth()->id();

    if ($validated['status'] === 'published' && empty($validated['published_at'])) {
        $validated['published_at'] = now();
    }

    if ($request->hasFile('featured_image')) {
        $validated['featured_image'] = $request
            ->file('featured_image')
            ->store('blog', 'public');
    }

    Post::create($validated);

    return redirect()
        ->route('admin.posts.index')
        ->with('success', 'Article created successfully.');
}

    /**
     * Display the specified article.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing an article.
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name')->get([
            'id',
            'name',
        ]);

        $post->load(['category', 'author']);

        return Inertia::render('Admin/Blog/Edit', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    /**
     * Update an article.
     */
    public function update(Post $post)
    {
        //
    }

    /**
     * Delete an article.
     */
    public function destroy(Post $post)
    {
        //
    }
}