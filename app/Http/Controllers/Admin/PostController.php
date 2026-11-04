<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

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
            'featured_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        // Generate a unique slug.
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;
        $validated['author_id'] = auth()->id();

        // Handle publication date.
        if ($validated['status'] === 'published') {
            $validated['published_at'] = !empty($validated['published_at'])
                ? \Carbon\Carbon::parse($validated['published_at'])
                : now();
        } else {
            $validated['published_at'] = null;
        }

        // Upload featured image.
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
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:125'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'featured_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        // Preserve existing slug unless the title changes.
        if ($validated['title'] !== $post->title) {
            $slug = Str::slug($validated['title']);
            $originalSlug = $slug;
            $counter = 1;

            while (
                Post::where('slug', $slug)
                    ->where('id', '!=', $post->id)
                    ->exists()
            ) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $validated['slug'] = $slug;
        }

        // Handle publication date.
        if ($validated['status'] === 'published') {
            $validated['published_at'] = !empty($validated['published_at'])
                ? \Carbon\Carbon::parse($validated['published_at'])
                : ($post->published_at ?? now());
        } else {
            $validated['published_at'] = null;
        }

        // Upload replacement image and remove the old image.
        if ($request->hasFile('featured_image')) {
            $oldImage = $post->featured_image;

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('blog', 'public');

            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
        } else {
            unset($validated['featured_image']);
        }

        $post->update($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Article updated successfully.');
    }

    /**
     * Delete an article.
     */
    public function destroy(Post $post)
    {
        // Delete featured image from public storage.
        if (
            $post->featured_image &&
            Storage::disk('public')->exists($post->featured_image)
        ) {
            Storage::disk('public')->delete($post->featured_image);
        }

        // Delete the article.
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Article deleted successfully.');
    }
}
