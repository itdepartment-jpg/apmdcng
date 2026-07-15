<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NewsController extends Controller
{

    use AuthorizesRequests;
    /**
     * Display the public news page
     */
    public function index()
    {
        $featured = NewsArticle::withTrashed()
            ->where('is_featured', true)
            ->latest('published_at')
            ->first();

        $latestNews = NewsArticle::published()
            ->when($featured, function ($query) use ($featured) {
                $query->where('id', '!=', $featured->id);
            })
            ->latest('published_at')
            ->paginate(10);

        return Inertia::render('Admin/News/Index', [
            'featuredArticle' => $featured,
            'latestNews' => $latestNews,
            'categories' => ['Projects', 'Awards', 'Innovations', 'Partnerships'], // Make sure this exists
            'canEdit' => auth()->user()?->can('manage-news')
//            'canEdit' => true
        ]);
    }

    public function indexBlade()
    {
        $featured = NewsArticle::where('is_featured', true)
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->first();

        $latestNews = NewsArticle::where('published_at', '<=', now())
            ->when($featured, function ($query) use ($featured) {
                $query->where('id', '!=', $featured->id);
            })
            ->latest('published_at')
            ->paginate(6);

        return view('seo-page.news', [
            'featuredArticle' => $featured,
            'latestNews' => $latestNews,
            'categories' => ['Projects', 'Awards', 'Innovations', 'Partnerships']
        ]);
    }


    /**
     * Show the form for creating a new article
     */
    public function create()
    {
        $this->authorize('manageNews', NewsArticle::class);


        return Inertia::render('News/CreateEdit', [
            'categories' => ['Projects', 'Awards', 'Innovations', 'Partnerships'],
            'isFeatured' => NewsArticle::where('is_featured', true)->exists()
        ]);
    }

    /**
     * Store a newly created article
     */
    public function store(Request $request)
    {
//        $this->authorize('manage-news');
//        $this->authorize('manageNews', NewsArticle::class);

//        dd($request->all());
        $this->authorize('manageNews', NewsArticle::class);



        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'published_at' => 'required|date',
            'category' => 'required|string|in:Projects,Awards,Innovations,Partnerships',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('news-images', 'public')
            : null;

        NewsArticle::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'featured_image' => $imagePath,
            'published_at' => $validated['published_at'],
            'category' => $validated['category'],
            'tags' => $validated['tags'] ?? [],
            'is_featured' => $validated['is_featured'] ?? false
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully!');

//        return redirect()->route('news.index')->with('success', 'News article created successfully');
    }

    /**
     * Display a single article
     */
    public function show(NewsArticle $newsArticle)
    {
        return Inertia::render('News/Show', [
            'article' => $newsArticle,
            'relatedArticles' => NewsArticle::published()
                ->where('category', $newsArticle->category)
                ->where('id', '!=', $newsArticle->id)
                ->latest('published_at')
                ->limit(3)
                ->get()
        ]);
    }

    public function showBlade($id)
    {
        $article = NewsArticle::findOrFail($id);
        return view('seo-page.news-show', compact('article'));
    }




    /**
     * Show the form for editing an article
     */
    public function edit(NewsArticle $newsArticle)
    {
//        $this->authorize('manage-news');
        $this->authorize('manageNews', NewsArticle::class);

        return Inertia::render('News/CreateEdit', [
            'article' => $newsArticle,
            'categories' => ['Projects', 'Awards', 'Innovations', 'Partnerships'],
            'isFeatured' => NewsArticle::where('is_featured', true)
                ->where('id', '!=', $newsArticle->id)
                ->exists()
        ]);
    }

    /**
     * Update the specified article
     */
//    public function update(Request $request, NewsArticle $newsArticle)
//    {
//
//        $this->authorize('manageNews', NewsArticle::class);
//
//
//        $validated = $request->validate([
//            'title' => 'required|string|max:255',
//            'excerpt' => 'required|string|max:500',
//            'content' => 'required|string',
//            'published_at' => 'required|date',
//            'category' => 'required|string|in:Projects,Awards,Innovations,Partnerships',
//            'tags' => 'nullable|array',
//            'tags.*' => 'string|max:50',
//            'is_featured' => 'boolean',
//            'image' => 'nullable|image|max:2048'
//        ]);
//
//        $slug = Str::slug($validated['title']);
//        $originalSlug = $slug;
//        $counter = 1;
//
//        while (
//        NewsArticle::where('slug', $slug)
//            ->where('id', '!=', $newsArticle->id)
//            ->exists()
//        ) {
//            $slug = $originalSlug . '-' . $counter++;
//        }
//
//        $imagePath = $newsArticle->featured_image;
//        if ($request->hasFile('image')) {
//            if ($newsArticle->featured_image) {
//                Storage::disk('public')->delete($newsArticle->featured_image);
//            }
//            $imagePath = $request->file('image')->store('news-images', 'public');
//        }
//
//        $newsArticle->update([
//            'title' => $validated['title'],
////            'slug' => Str::slug($validated['title']),
//            'slug' => Str::slug($slug),
//            'excerpt' => $validated['excerpt'],
//            'content' => $validated['content'],
//            'featured_image' => $imagePath,
//            'published_at' => $validated['published_at'],
//            'category' => $validated['category'],
//            'tags' => $validated['tags'] ?? [],
//            'is_featured' => $validated['is_featured'] ?? false
//        ]);
//
//        return redirect()->route('news.index')->with('success', 'News article updated successfully');
//    }
    public function updatex(Request $request, NewsArticle $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string',
            'published_at' => 'required|date',
            'tagsInput' => 'nullable|string',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process tags
        $tags = $request->tagsInput
            ? array_filter(array_map('trim', explode(',', $request->tagsInput)))
            : [];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->featured_image_path) {
                Storage::delete($news->featured_image_path);
            }

            // Store new image
            $path = $request->file('image')->store('news-images');
            $validated['featured_image_path'] = $path;
        }
        // If no new image, featured_image_path remains unchanged

        $news->update($validated);

        // Sync tags if you're using a many-to-many relationship
        $news->tags()->sync($tags);

        return redirect()->route('news.index')->with('success', 'News updated successfully');
    }

    public function updatexxx(Request $request, NewsArticle $newsArticle)
    {

        dd($request->all());
        $this->authorize('manageNews', NewsArticle::class);

        // Convert tags input to array if it comes as string
        $tags = $request->tags;
        if (is_string($request->tags)) {
            $tags = explode(',', $request->tags);
            $tags = array_map('trim', $tags);
            $tags = array_filter($tags);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'published_at' => 'required|date',
            'category' => 'required|string|in:Projects,Awards,Innovations,Partnerships',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|max:2048'
        ]);

        // Handle slug generation
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (NewsArticle::where('slug', $slug)
            ->where('id', '!=', $newsArticle->id)
            ->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        // Handle image upload
        $imagePath = $newsArticle->featured_image;
        if ($request->hasFile('image')) {
            if ($newsArticle->featured_image) {
                Storage::disk('public')->delete($newsArticle->featured_image);
            }
            $imagePath = $request->file('image')->store('news-images', 'public');
        }

        $newsArticle->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'featured_image' => $imagePath,
            'published_at' => $validated['published_at'],
            'category' => $validated['category'],
            'tags' => $validated['tags'] ?? [],
            'is_featured' => $validated['is_featured'] ?? false
        ]);

        return redirect()->route('news.index')->with('success', 'News article updated successfully');
    }

    public function update(Request $request, NewsArticle $newsArticle)
    {
        $this->authorize('manageNews', NewsArticle::class);

        // Convert tags input to array if it comes as string
        $tags = $request->tags;
        if (is_string($request->tags)) {
            $tags = explode(',', $request->tags);
            $tags = array_map('trim', $tags);
            $tags = array_filter($tags);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'published_at' => 'required|date',
            'category' => 'required|string|in:Projects,Awards,Innovations,Partnerships',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|max:2048'
        ]);

        // Handle slug generation
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (NewsArticle::where('slug', $slug)
            ->where('id', '!=', $newsArticle->id)
            ->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        // Initialize image path with existing value
        $imagePath = $newsArticle->featured_image;

        // Handle image upload - this will replace the old image
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($newsArticle->featured_image) {
                Storage::disk('public')->delete($newsArticle->featured_image);
            }
            // Store new image
            $imagePath = $request->file('image')->store('news-images', 'public');
        } elseif ($request->has('remove_image')) {
            // If user explicitly wants to remove image (you can add a checkbox in your form)
            if ($newsArticle->featured_image) {
                Storage::disk('public')->delete($newsArticle->featured_image);
            }
            $imagePath = null;
        }

        $newsArticle->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'featured_image' => $imagePath,
            'published_at' => $validated['published_at'],
            'category' => $validated['category'],
            'tags' => $validated['tags'] ?? [],
            'is_featured' => $validated['is_featured'] ?? false
        ]);

        return redirect()->route('news.index')->with('success', 'News article updated successfully');
    }
    /**
     * Remove the specified article
     */
    public function destroy(NewsArticle $newsArticle)
    {

//        dd($newsArticle);
        $this->authorize('manageNews', NewsArticle::class);

        if ($newsArticle->featured_image) {
            Storage::disk('public')->delete($newsArticle->featured_image);
        }
        $newsArticle->delete();

//        return redirect()->route('news.index')->with('success', 'News article deleted successfully');
        return redirect()->route('news.index')
            ->with('success', 'Project Deleted successfully!');
    }
}
